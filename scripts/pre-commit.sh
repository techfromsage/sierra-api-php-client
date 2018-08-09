#!/bin/bash
#
# Run PHP_CodeSniffer against temporary files created from staged changes
#
# Modified version of script available at https://github.com/s0enke/git-hooks/tree/master/phpcs-pre-commit

APP_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && cd ../../ && pwd )"

PHPCS_BIN="$APP_DIR/vendor/bin/phpcs"
PHPCS_CODING_STANDARD=PSR2
PHPCS_OPTIONS="-s -p --report-full --report-summary --runtime-set ignore_warnings_on_exit 1"

TMP_STAGING=".tmp_staging"

# Check if code sniffer is set up correctly
if [ ! -x $PHPCS_BIN ]; then
    echo "PHP CodeSniffer bin not found or executable -> $PHPCS_BIN"
    exit 1
fi

# Check for initial commit to diff against empty tree, otherwise diff against HEAD
if git rev-parse --verify HEAD >/dev/null 2>&1
then
    against=HEAD
else
    # Initial commit: diff against an empty tree object
    against=4b825dc642cb6eb9a060e54bf8d69288fbee4904
fi

# Retrieve all php files in staging area that are added, modified or renamed
FILES=$(git diff-index --name-only --cached --diff-filter=ACMR $against -- | grep ".php$")

if [ "$FILES" == "" ]; then
    echo "Nothing to lint."
    exit 0
fi

# Create temporary copy of staging area
if [ -e $TMP_STAGING ]; then
    rm -rf $TMP_STAGING
fi
mkdir $TMP_STAGING

# Copy contents of staged version of files to temporary staging area because we only want the staged version that will
# be commited and not the version in the working directory
STAGED_FILES=""
for FILE in $FILES
do
  ID=$(git diff-index --cached $against $FILE | cut -d " " -f4)

  # Create staged version of file in temporary staging area with the same path as the original file so that the phpcs
  # ignore filters can be applied
  mkdir -p "$TMP_STAGING/$(dirname $FILE)"
  git cat-file blob $ID > "$TMP_STAGING/$FILE"
  STAGED_FILES="$STAGED_FILES $TMP_STAGING/$FILE"
done

# Run the linter
OUTPUT=$($PHPCS_BIN $PHPCS_OPTIONS --standard=$PHPCS_CODING_STANDARD $STAGED_FILES)
RETVAL=$?

# Delete temporary copy of staging area
rm -rf $TMP_STAGING

if [ $RETVAL -ne 0 ]; then
    echo "$OUTPUT" | less
fi

exit $RETVAL