# Basic PHP - Router
> Simple, direct and efficient router created with just PHP and .htaccess.


## MVC cycle
All requests are redirected to `index.php` with the help of the `.htaccess`.
The `model/moder.router.php` will then render the current view based on the first value of an array created from 
`$_SERVER["QUERY_STRING"]` and it will render the current view if it is available inside the `view\*.php` folder. 

## Troubleshooting
Should something went wrong, please check if the included `.htaccess` file actually exists and Mod Rewrite is available. The `.htaccess` should also be updated accordingly if you are not using `Apache` and using other servers such as `nginx`.

## Requirements
Nothing special just your server (apache prefered) and `mod_rewrite`.
Oh and ofcourse `PHP 5^`.

## Meta
- John Paul Burato – [@jpneey](https://github.com/jpneey) – [Website](https://jpburato.now.sh)