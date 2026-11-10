

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRIESSSSSSS</title>
    <style>
        body {
            font-family: arial;
            background: #e0e0e0;
            text-align: center;
            padding: 50px;
        }

        .box {
            background: white;
            width: 300px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            color: #d6b497;
        }

        button {
            background: #3944e0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2> fries</h2>
        <h1>🍟</h1>
        <p> price : PHP 50.00</p>

        <form action="process.php" method="post">
        <label>Quantity
            <input id="qty" name="qty" type="number"
                min="1" max="10" value="1" required>
        </label>
        <p id="preview">Estimated total: PHP 50.00</P>
        <button type="submit">Place Order</button>
        </form>

        <?php
$qty = filter_input(INPUT_POST, "qty", FILTER_VALIDATE_INT, [
    "options" => [
        "min_range" => 1,
        "max_range" => 10
    ]
]);

if ($qty === false || $qty === null) {
    http_response_code(400);
    exit("Invalid quantity. Enter 1 to 10.");
}

$price = 50;
$total = $price * $qty;

echo "<h1>Order Summary</h1>";
echo "Quantity: " . $qty;
echo "<br>Total: PHP " . number_format($total, 2);
?>
    





</body>
</html>