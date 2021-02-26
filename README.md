# PHP-MySQL-APP
Application using PHP and MySQL Database


### Application functions: 

- read JSON data from URL address,
- generate QR code from JSON data,
- read user's email value from JSON object
- extract user's email domain from user email
- save user's email domain in database
- increment the counter in the database when the user's email domain comes up more than once


- PHP 8.0.2
- Composer 2.0.9


### App preview:

User json data:

![user-json-data](https://github.com/dawid4374/PHP-MySQL-APP/blob/main/uploads/user-json.PNG?raw=true)

Application results:

![results](https://github.com/dawid4374/PHP-MySQL-APP/blob/main/uploads/task-preview.PNG?raw=true)

Database preview:

![database-results](https://github.com/dawid4374/PHP-MySQL-APP/blob/main/uploads/database-preview.PNG?raw=true)


### Usage:

- install package:
```
$ composer require endroid/qr-code
```

Database:

Create ".env" and add there your MySQL username, password, hostname

like:

DB_HOST=hostname

DB_USERNAME=username

DB_PASSWORD=password
