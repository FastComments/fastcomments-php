#!/bin/bash

rm -rvf ./client/src \
    && wget http://localhost:3001/js/swagger.json -O /tmp/fastcomments-openapi.json \
    && openapi-generator-cli generate \
        -i /tmp/fastcomments-openapi.json \
        -g php \
        -o . \
        --additional-properties=useSingleRequestParameter=true
