#!/bin/sh

echo "Starting container..."

if [ ! -f composer.json ]; then
  echo '{}' > composer.json
fi

if [ -n "$GITHUB_TOKEN" ]; then
  composer config --global github-oauth.github.com "$GITHUB_TOKEN"
fi

composer clear-cache
composer install
composer dump-autoload

exec php-fpm