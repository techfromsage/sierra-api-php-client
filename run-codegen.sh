#!/usr/bin/env bash

# - You will need to regenerate clients for different versions of Sierra.
# - Libraries will have different versions installed and will upgrade without notice.
# - The strategy here is to check that the file has not changed from a known version
#   and only regenerate if that version is the version expected.

# - This script uses the jq JSON command line parsing tool.
hash jq 2>/dev/null || { echo >&2 "I require jq but it's not installed.  Aborting."; exit 1; }

echo -e "Rebuilding\n\n"

check_api_version () {
    # compare the expected version with the version published at the swagger docs url location
    expected_version=$1
    docs_url=$2

    docs_json=$(curl $docs_url)
    found_version=$(echo ${docs_json} | jq -r '.apiVersion')
    echo "Checking for version ${expected_version} - found version ${found_version}"

    if [[ "${found_version}" -eq "${expected_version}" ]]
    then
        return 0
    fi
    return 1
}

rebuild_api () {
    # Run the codegen tooling to rebuild the API client and docs.
    docs_url=$1
    config_file=$2

    echo "Rebuilding from ${docs_url} using config file ${config_file}"

    java -jar ./swagger-codegen-cli-3.0.0-20171123.081951-8.jar\
     generate\
     -l php\
     -i ${docs_url}\
     -o ../\
     -c ${config_file}\
     -t ./templates
}

update_api () {
    # Update the API.
    version=$1
    docs_url=$2

    check_api_version ${version} ${docs_url}
    if [ $? -ne 0 ]; then
        echo "Version Check failed: API V${version} will not be updated"
    else
        echo -e "Removing current files\n\n"
        if [[ -e ./V${version} ]]; then
            rm -rf ./V${version}
        fi
        rebuild_api ${docs_url} "config-v${version}.json"
    fi
}

# An instance of the v5 swagger docs was found in the iii developer sandbox
update_api 5 'https://sandbox.iii.com/iii/sierra-api/docs'
# An instance of the v4 swagger docs was found at Trinity College Dublin
update_api 4 'https://library02.tcd.ie/iii/sierra-api/docs'

echo -e "\n\nAll Done\n\n"
echo -e "\nPlease check that the root composer.json contains everything it needs to for autoloading!"
