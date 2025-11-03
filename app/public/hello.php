<?php

/**
 * PHP has several global variables that are available in all scopes.
 * 
 * $_GET is one of those global variables. It is an associative array of variables passed to the current script via the URL query parameters.
 * 
 * TODO: Add a query string parameter `name`.
 * 
 * http://localhost/hello.php?name=Alice
 * 
 * Note: PHP has a `var_dump` function that can be used to inspect variables.
 * 
 * TODO: use `var_dump($_GET);` to see the contents of the `$_GET` variable.
 * TODO: update the echo statement below to use the `name` parameter from the `$_GET` variable if it is set.
 * Example: if the URL is `http://localhost/hello.php?name=Alice`, the output should be `Hello Alice!`
 * 
 */

// Note the `echo` outputs text to the HTTP response body directly (you will see this in the browser).
echo 'Hello world!';

// Note: PHP is a templating language, so you can mix HTML and PHP code in the same file.
// To start writing HTML, just close the PHP tag like this:

?>

<div>
<iframe
    src="https://giphy.com/embed/xTk9ZY0C9ZWM2NgmCA"
    width="480"
    height="480"
    style=""
    frameBorder="0"
    class="giphy-embed"
    allowFullScreen></iframe>
</div>