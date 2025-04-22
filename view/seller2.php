
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Store - Seller Page</title>
    <link rel="stylesheet" href="../css/sellercss.css">
</head>
<body>

<div id="image-container">
    <img src="../view/cart.png" id="grocery-image">
</div>

 <header id="header">
    <h1>Welcome to the Grocery Store</h1>
</header>

<div class="container">
<h2>Select your items:</h2>


        <table border="1">
            <tr>
                <th>Serial</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price (per unit)</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Rice 5kg</td>
                <td>Grains</td>
                <td>$20</td>
                <td><input type="number" name="rice_qty" value="0" min="0"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fresh Tomatoes 1kg</td>
                <td>Vegetables</td>
                <td>$3</td>
                <td><input type="number" name="tomatoes_qty" value="0" min="0"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Milk 1L</td>
                <td>Dairy</td>
                <td>$1.5</td>
                <td><input type="number" name="milk_qty" value="0" min="0"></td>
            </tr>
        </table>

        <h3>Customer Details</h3>
<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="customer_name"></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input type="text" name="customer_address"></td>
    </tr>
    <tr>
        <td>Contact Number:</td>
        <td><input type="text" name="contact_number"></td>
    </tr>
</table>

         <button class="place_order">SELL ITEMS</button>

    </form> 

</body>
</html>
