<?php
/**
 * stealphp
 * creation date: 26.05.2016
 *
 * @version
 *
 * @author          Julian Kern
 * @copyright       Copyright (c) 2007-2016 Julian Kern, twentytwo Solutions (http://www.22-solutions.de)
 *
 * @package
 * @subpackage
 * @name
 * @filesource      index.php
 *
 */


echo "GET: ";print_r($_GET);
echo "<br>";
print_r("URL:". $_SERVER['REQUEST_URI']);
echo "<br>";
print_r("QUERY:". $_SERVER['QUERY_STRING']);
?>

<script type="text/javascript"
        src="/stealphp/modules/Upload/main-steal/node_modules/steal/steal.js"
        config-main="package.json!npm"
        base-url="/stealphp/modules/Upload/main-steal"
        main="main"></script>

<!--<script type="text/javascript"-->
<!--        src="/stealphp/modules/Upload/main-steal/node_modules/steal/steal.js"-->
<!--        config="/stealphp/modules/Upload/main-steal/package.json!npm"-->
<!--        main="main"></script>-->
