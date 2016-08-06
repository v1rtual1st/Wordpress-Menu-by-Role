# Wordpress-Menu-by-Role
Remove or show admin menu items based on role.

Edit and input code from menu_init.php to the functions.php
-> change label to your own role within 'code'

If having problems removing custom menu items added by plugins use code from debug_menu_items.php (also function.php)
-> it will output menu init -> look for parameter from the second index (eg. [2] => wpcf7 )



References:
https://codex.wordpress.org/Function_Reference/remove_menu_page
https://codex.wordpress.org/remove_submenu_page
http://wordpress.stackexchange.com/questions/136058/how-to-remove-admin-menu-pages-inserted-by-plugins
