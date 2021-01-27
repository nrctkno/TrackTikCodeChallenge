## Considerations:

- The provided code appears to be written in PHP 5.6. However this solution will be targeted to PHP 7.4 because of the type handling enhancements this version comes with.
- The code formatting follows the format of the provided code.
- Abstract Class ElectronicItem, removed setters and enforced the required parameters in the constructor to promote the object immutability.
- Avoided redundant method description (i.e. "function construct" -> "creates a new instance of..."). Clean code tip: the function name must be self explanatory.
- When sorting the products, it's assumed that the sort type is "ascending" and "descending" over the "price" attribute.
- It took me 5 hours: 3 for the core application, 1 for the factory and 1 for the tests.

## Running the application:

- You must have [Composer](https://getcomposer.org/) installed in your system.
- Run `composer dump-autoload`; no dependencies needed.
- Run the application:
  - From your browser: go to http://localhost/TrackTikCodeChallenge/web/index.php (replace localhost by a valid host or IP).
  - From your console: `cd` to the web/ folder and run `php -f index.php`

## Using Docker

Maybe you prefer to run the app in a docker container:
-  In your console run `docker run -d -p 8080:80 -v YOUR_LOCAL_PROJECT_ABSOLUTE_PATH:/var/www/html php:7.4-apache`.
-  Access from your browser to http://localhost:8080/web/index.php (replace localhost by a valid host or IP).

To connect the console run `docker exec -it "container_name" /bin/bash` . 

> To get the container name run `docker container ls` and check the _NAMES_ column.


## Runnig the tests:

> Note: had to include the phpunit-9.5.1.phar binary because of a known execution error (Class 'PHPUnit\Framework\TestCase' not found) present in the version installed via Composer.

In the project's root folder run `php phpunit.phar`
