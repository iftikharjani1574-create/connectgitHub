<?php
require_once "function.php";

$products = [
    ["name" => "Laptop", "price" => 80000, "discount" => 10],
    ["name" => "Mouse", "price" => 1000, "discount" => 5],
    ["name" => "Keyb oard", "price" => 1500, "discount" => 8],
    ["name" => "Speakers", "price" => 1600, "discount" => 12]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="p-4">
    <div class="container p-4 border border-2 rounded-3" style="background-color: antiquewhite;">
        <h2>Product List</h2>


        <table class="w-75">
            <tr class="table table-bordered text-start">
                <th>Product Name</th>
                <th>Original Price</th>
                <th>Discount</th>
                <th>Final Price</th>
            </tr>
            <?php
            foreach ($products as $product) {
                $final = calculateDiscount($product["price"], $product["discount"]);
                echo "<tr>";
                echo "<td>" . $product["name"] . "</td>";
                echo "<td>" . formatPrice($product["price"]) . "</td>";
                echo "<td>" . $product["discount"] . "%</td>";
                echo "<td>" . formatPrice($final) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>