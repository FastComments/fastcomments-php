#!/bin/bash

set -e

if [ -z "$1" ]; then
  echo "Usage: ./bump.sh <new_version>"
  echo "Example: ./bump.sh 0.0.2"
  exit 1
fi

NEW_VERSION=$1

echo "Bumping version to $NEW_VERSION..."
echo "Note: PHP SDK version is managed through git tags."
echo "Current config.json does not contain a version field."
echo "To publish version $NEW_VERSION, use: git tag v$NEW_VERSION && git push origin v$NEW_VERSION"
echo "Done!"
