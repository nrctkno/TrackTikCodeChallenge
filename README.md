## Considerations:

- The provided code appears to be written in PHP 5.6. However this solution will be targeted to PHP 7.4 because of the type handling encancements this version comes with.
- The code formatting follows the format of the provided code.
- Abstract Class ElectronicItem, removed setters and enforced the required parameters in the constructor to promote the object immutability.
- Avoided redundant method description (i.e. "function construct" -> "creates a new instance of..."). Clean code tip: the function name must be self explanatory.
- When sorting the products, it's assumed that the sort type is "ascending" and "descending" over the "price" attribute.
- It took me 5 hours: 3 for the core application, 1 for the factory and 1 for the tests.

## Instructions:

- run `composer dump-autoload`
- From your browser: go to http://localhost/TrackTikCodeChallenge/web/ (replace localhost by a valid host or IP)
- From console: `cd` to the web/ folder and run `php -f index.php`


## Tests:

Same as in the previous section, but execute the tests/run.php entry point instead.