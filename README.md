# Basic PHP - Router
> Nothing less, nothing more - A Simple, direct and yet efficient router for the LAMP stack.

## How
All requests are redirected to `index.php` with the help of the `.htaccess`.<br>
The `controller/controller.router.php` will render the current page(based on the first value of `$_SERVER["QUERY_STRING"]`).

## In Action
[See it live](https://php-router.herokuapp.com/)

## Troubleshooting
Should something went wrong, please check if all traffic is really being redirected to `index.php`.<br>
Please see the configuration section below on how you can do this on `apache` or `nginx`.

## Configuration

### Constants
It is advised to define the `BASE_URL` of your project from the `config.php` wether it is `http://example.com/` or
`http://example.com/subfolder/`.

The `BASE_ROUTE` constant is also required to be configured if your project's root directory is a subfolder.
For example, a project to be deployed on `http://example.com/` can have the default `BASE_ROUTE` which is `0`.
```
`http://example.com/` -> BASE_ROUTE = 0
`http://example.com/subfolder/` -> BASE_ROUTE = 1 
`http://example.com/subfolder/another/` -> BASE_ROUTE = 2
``` 

### Server
#### Apache
If you are using `apache`, traffic must be redirected to a single entry point. In this case, the `index.php`.
You can do that by adding an `.htaccess` file:
```
//.htaccess
RewriteEngine On

RewriteCond %{REQUEST_URI} /+[^\.]+$
RewriteRule ^(.+[^/])$ %{REQUEST_URI}/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?$1 [L,QSA]

Options -Indexes
```
#### Nginx
If you are using `nginx`, you can add this on your site configuration file:
```
location / {
    try_files $uri $uri/ /index.php?$args;
}
```

#### Xampp - Apache
On xampp, you can just update the `BASE_DIR` constant to `http://localhost/your-project-folder/`. The default `.htaccess` will work<br>
for you. You can also retain the `BASE_ROUTE` to `0`.

## Requirements
Nothing special, just your server running on `PHP v5^` (apache prefered) and `mod_rewrite` enabled.

## Meta
John Paul Burato – [@jpneey](https://github.com/jpneey) – [Website](https://jpburato.now.sh)
