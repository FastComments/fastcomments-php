#!/bin/bash

# FastComments openapi-generator build (fork). The stock generator ignores
# useSingleRequestParameter for php; this build wires it. Just a jar; downloaded on demand.
JAR_URL="https://github.com/winrid/openapi-generator/releases/download/fastcomments-build-20260619/openapi-generator-cli.jar"
JAR_FILE="./openapi-generator-cli.jar"
[ -f "$JAR_FILE" ] || wget -q "$JAR_URL" -O "$JAR_FILE"

rm -rf lib/Api lib/Model docs/Api docs/Model test/Api test/Model
wget -q http://localhost:3001/js/swagger.json -O ./openapi.json
java -jar "$JAR_FILE" generate -i ./openapi.json -g php -o . -c config.json

# Fix composer.json to ensure it has required fields
node fix-composer.js
