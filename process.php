<?php
/*
    Michael Onishchenko
    4/11/23
    328/icecrean/process.php
    Process order for Ice Cream Shoppe
 */



/*
 Array form example:

array(3) { ["flavor"]=> array(2) {
        [0]=>
    string(7) "vanilla"
        [1]=>
    string(9) "chocolate"
  }
  ["cone"]=> string(6) "waffle"
  ["scoops"]=> string(1) "2"
}

*/


//Turn on error reporting
ini_set('display_errors', 1);
error_reporting('E_All');

define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', 0.08);

include('header.html');

?>


<body>
<div class="container">
    <h1>Thank you for your order.</h1>
    <?php
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $numScoops = $_POST['scoops'];
        $cone = $_POST['cone'];
        $flavors = $_POST['flavor'];
        $flavorList = implode(", ", $flavors);

        //calculate price
        $subtotal = $numScoops * PRICE_PER_SCOOP;
        $total = $subtotal + ($subtotal * SALES_TAX);


    echo "<p>Number of scoops: $numScoops</p>";
        echo "<p>Type of cone: $cone</p>";
        echo "<p>Flavors: $flavorList</p>";

    //add echo statements to display subtotal and total
    echo "<p>Subtotal: $ ". number_format($subtotal, 2). "</p>";
    echo "<p>Total: $ ". number_format($total, 2). "</p>";

    ?>


</div>

</body>
