# TinyMemcachedInspector
Visualize the information saved in Memcached using Symfony VarDumper. Recommend only for local/dev environment.

### Installation
Download the file inspector.php somewhere in your public directory of your web server in order to be able to access it from browser.

Install Symfony/VarDumper component using Composer at the same path with inspector.php file:

>composer require symfony/var-dumper

### Usage
Access inspector.php in brwoser, you should see a list of keys and their values. You can drill down in each data structure thanks to Symfony VarDumper. Scroll down the page and you will see Memecached stats.
Run you web application than check the new values added to Memcached by simply reloading the brwoser tab where you have opened inspector.php
