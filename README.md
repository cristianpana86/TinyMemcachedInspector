# TinyMemcachedInspector
Visualize the information saved in Memcached using Symfony VarDumper. Recommend only for local/dev environment.

### Installation
Download the file inspector.php somewhere in your public directory of your web server in order to be able to access it from browser.

Install Symfony/VarDumper component using Composer at the same path with inspector.php file:

>composer require symfony/var-dumper

### Usage
By default TinyMemcachedInspector will try to connect to Memcached at 127.0.0.1:11211
if you have different settings open inspector.php in editor and add your environment variables:

```php
$server = '127.0.0.1';
$port = 11211;
```

Access inspector.php in browser, you should see a list of keys and their values. You can drill down in each data structure thanks to Symfony VarDumper. Scroll down the page and you will see Memecached stats.
Run you web application than check the new values added to Memcached by simply reloading the brwoser tab where you have opened inspector.php
