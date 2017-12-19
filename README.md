      _____ _                 _      _                 _            
     / ____(_)               | |    | |               (_)       
    | (___  _ _ __ ___  _ __ | | ___| |     ___   __ _ _ _ __  
     \___ \| | '_ ` _ \| '_ \| |/ _ \ |    / _ \ / _` | | '_ \ 
     ____) | | | | | | | |_) | |  __/ |___| (_) | (_| | | | | |
    |_____/|_|_| |_| |_| .__/|_|\___|______\___/ \__, |_|_| |_|
                       | |                        __/ |                               
                       |_|                       |___/               
                   
# SimpleLogin Framework
Author: Danny Tran  
Author URI: https://hoogleyb.com/

## Documentation
SimpleLogin is an PHP framework designed to make it easier for sites to include authentication.
It is similar to [Devise][1] which is used for Ruby on Rails.

### Requirements
- A web server capable of running PHP
- PHP version 5.6 or higher
- MySQL
- Access to site's code
- A basic knowlage in PHP

### Installation
The easiest way to install is to clone the GitHub repository into your project folder.

1. Navigate to your project file
```
$ cd /your/project/directory/
```

2. Clone the repository
```
$ git clone https://github.com/HoogleyBoogley/simple-login
```

3. Include the `init.php` into your website. This file must be present on all pages that take advantage of the framework.
```php
<?php require_once './SimpleLogin/init.php'; ?>
```

4. Sessions must be enabled in order for the login feature to work. Add the following line of code to your webpage.
```php
<?php session_start(); ?>
```

5. You are done with installation! To use SimpleLogin, continue with the steps below.

[1]: https://github.com/plataformatec/devise