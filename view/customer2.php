<!DOCTYPE html>
<html>
<head>
    <title>Grocery Store - Customer Page</title>
    <link rel="stylesheet" href="../css/customercss.css">
</head>
<body>

<div id="image-container">
    <img src="../view/cus.png" id="grocery-image">
</div>

<header id="header">
<h1>Buy your Grocery Items</h1>
</header>

<div class="container">
    <h2>Available Products</h2>
    <form action="sellerSuccess.php" method="get">

    <table border="1">
    <tr>
        <th>Serial</th>
        <th>Product Details</th>
        <th>Quantity & Action</th>
    </tr>

    <tr>
        <td>1</td>
        <td>
            <strong>Rice 5kg</strong><br>
            Category: Grains<br>
            Price: $20
        </td>
        <td>
            <input type="number" name="rice_qty" value="0" min="0">
            <button type="button">-</button>
            <button type="button">+</button>
        </td>
    </tr>

    <tr>
        <td>2</td>
        <td>
            <strong>Fresh Tomatoes 1kg</strong><br>
            Category: Vegetables<br>
            Price: $3
        </td>
        <td>
            <input type="number" name="tomatoes_qty" value="0" min="0">
            <button type="button">-</button>
            <button type="button">+</button>
        </td>
    </tr>

    <tr>
        <td>3</td>
        <td>
            <strong>Milk 1L</strong><br>
            Category: Dairy<br>
            Price: $1.5
        </td>
        <td>
            <input type="number" name="milk_qty" value="0" min="0">
            <button type="button">-</button>
            <button type="button">+</button>
        </td>
    </tr>

</table>



<h3>Customer Details</h3>
<p>
    <b>Your Name:</b><br>
    <input type="text" name="customer_name" placeholder="John Doe">
</p>
<p>
    <b>Shipping Address:</b><br>
    <input type="text" name="customer_address" placeholder="123 Main St, City">
</p>
<p>
    <b>Contact Number:</b><br>
    <input type="text" name="contact_number" placeholder="+8801XXXXXXXXX">
</p>


<button class="place_order">PLACE ORDER</button>
</form>

</body>
</html>
