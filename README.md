# PHP-MySQL-APP
Application using PHP and MySQL Database

Application functions: 

- read JSON data from URL address,
- generate QR code from JSON data,
- read user's email value from JSON object
- extract user's email domain from user email
- save user's email domain in database
- increment the counter in the database when the user's email domain comes up more than once

- PHP 8.0.2
- Composer 2.0.9

Usage:

- install package:

$ composer require endroid/qr-code

- Database:

Create ".env" and add there your MySQL username, password, hostname

like:

DB_HOST=hostname
DB_USERNAME=username
DB_PASSWORD=password
