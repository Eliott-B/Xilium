# Tests all components

if [ -d vendor ]; then
    echo "Vendor directory exists"
else
    echo "Vendor directory does not exist"
    composer install
fi

./vendor/bin/phpunit src/*.php
