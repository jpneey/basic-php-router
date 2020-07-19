# Basic PHP - Router
> Simple, direct and efficient router created with just PHP and .htaccess.

## How
All requests are redirected to `index.php` with the help of the `.htaccess`.<br>
The `controller/controller.router.php` will render the current page(based on the first value of `$_SERVER["QUERY_STRING"]`) and if it is not available inside the `page\*.php` folder, `page\404.php` will be rendered instead. 

## Troubleshooting
Should something went wrong, please check if the included `.htaccess` file actually exists and `mod_rewrite` is available.<br> 
The `.htaccess` should also be updated accordingly if you are not using `apache` and using other webservers such as `nginx`.

## Requirements
Nothing special, just your server running on `PHP v5^` (apache prefered) and `mod_rewrite` enabled.

## Meta
John Paul Burato – [@jpneey](https://github.com/jpneey) – [Website](https://jpburato.now.sh)
