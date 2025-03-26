#!/bin/bash

rm -rf lib/Api lib/Model docs/Api docs/Model test/Api test/Model
wget http://localhost:3001/js/swagger.json -O /tmp/fastcomments-openapi.json
openapi-generator-cli generate -i /tmp/fastcomments-openapi.json -g php -o . -c config.json
