# Basic PHP - Router
> Nothing less, nothing more - A Simple, direct and yet efficient router for the LAMP stack.

## How
All requests are redirected to `index.php` with the help of the `.htaccess`.<br>
The `controller/controller.router.php` will render the current page(based on the first value of `$_SERVER["QUERY_STRING"]`).

## In Action
[See it live](https://php-router.herokuapp.com/)

## Troubleshooting
Should something went wrong, please check if the included `.htaccess` file actually exists and `mod_rewrite` is available.<br> 
The `.htaccess` should also be updated accordingly if you are not using `apache` and using other kind of webservers such as `nginx`.

## Configuration
It is advised to define the `BASE_URL` of your project from the `config.php` wether it is `http://example.com/` or
`http://example.com/subfolder/`.

The `BASE_ROUTE` constant is also required to be configured if your project's root directory is a subfolder.
For example, a project to be deployed on `http://example.com/` can have the default `BASE_ROUTE` which is `0`.

### Example:
```
`http://example.com/subfolder/` -> BASE_ROUTE = 1 
`http://example.com/subfolder/another/` -> BASE_ROUTE = 2
``` 

## Requirements
Nothing special, just your server running on `PHP v5^` (apache prefered) and `mod_rewrite` enabled.

## Meta
John Paul Burato – [@jpneey](https://github.com/jpneey) – [Website](https://jpburato.now.sh)
