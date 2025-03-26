#!/bin/bash

rm -rf lib/Api
rm -rf lib/Model
rm -rf docs/Api
rm -rf docs/Model
rm -rf test/Api
rm -rf test/Model

wget http://localhost:3001/js/swagger.json -O /tmp/fastcomments-openapi.json \
    && openapi-generator-cli generate \
        -i /tmp/fastcomments-openapi.json \
        -g php \
        -o . \
        --additional-properties=useSingleRequestParameter=true \
        --additional-properties=artifactDescription="FastComments PHP API Client - A SDK for interacting with the FastComments API" \
        --additional-properties=artifactUrl="https://fastcomments.com" \
        --additional-properties=licenseName="MIT" \
        --additional-properties=infoEmail="support@fastcomments.com" \
        --additional-properties=invokerPackage="FastComments\\Client" \
        --additional-properties=packageName="fastcomments/client" \
        --additional-properties=apiPackage="Api" \
        --additional-properties=modelPackage="Model" \
        --additional-properties=developerName="FastComments LLC" \
        --additional-properties=developerEmail="support@fastcomments.com" \
        --additional-properties=developerOrganization="FastComments" \
        --additional-properties=developerOrganizationUrl="https://fastcomments.com" \
        --additional-properties=gitRepoId="fastcomments-php" \
        --additional-properties=authorizeHint="The FastComments API uses two types of endpoints: DefaultApi which requires an API key for authentication, and PublicApi which can be accessed without authentication (often from browsers/client SDKs using SSO)."
