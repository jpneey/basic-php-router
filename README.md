# Basic PHP - Router
> Simple, direct and efficient router created with just PHP and .htaccess.

## How
All requests are redirected to `index.php` with the help of the `.htaccess`.<br>
The `model/moder.router.php` will then create an array based on `$_SERVER["QUERY_STRING"]`.<br>
It will render the current view(based on the first value of the array) and if it is not available inside the `view\*.php` folder, `view\404.php` will be rendered instead. 

## Troubleshooting
Should something went wrong, please check if the included `.htaccess` file actually exists and `mod_rewrite` is available.<br> 
The `.htaccess` should also be updated accordingly if you are not using `apache` and using other webservers such as `nginx`.

## Requirements
Nothing special, just your server (apache prefered) and `mod_rewrite`.
Oh and ofcourse `PHP v5^`.

## Meta
John Paul Burato – [@jpneey](https://github.com/jpneey) – [Website](https://jpburato.now.sh)
