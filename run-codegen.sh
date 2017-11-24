#!/usr/bin/env bash

echo -e "Removing current files\n\n"
rm -rf ./Sierra ./docs ./test ./composer.* ./phpunit.xml.dist ./git_push.sh ./README.md ./.travis.yml ./.swagger-codegen/

echo -e "Rebuilding\n\n"
java -jar ./swagger-codegen-cli-3.0.0-20171123.081951-8.jar\
 generate\
 -l php\
 -i https://sandbox.iii.com/iii/sierra-api/docs\
 -o ../\
 -c config.json

echo -e "\n\nAll Done\n\n"
