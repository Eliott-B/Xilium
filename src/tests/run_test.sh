# Tests all components

if (-d vendor) then
    echo "Vendor directory exists"
else
    echo "Vendor directory does not exist"
    composer install

./vendor/bin/phpunit src/*.php

