#!/bin/bash

set -e

echo "Running FastComments PHP SDK tests..."

# Check if composer dependencies are installed
if [ ! -d "vendor" ]; then
  echo "Installing dependencies..."
  composer install
fi

# Run PHPUnit tests
echo "Running tests with PHPUnit..."
./vendor/bin/phpunit

echo ""
echo "✓ All tests passed!"
