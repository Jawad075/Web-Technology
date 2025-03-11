<html>
<head>
    <title>Customer Registration</title>
</head>
<body>

    <h2>Customer Registration Form</h2>
    <form action="register.php" method="post">
        <table border="4">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <tr>
                <td>Delivery Address:</td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td>Payment Method:</td>
                <td>
                    <select name="payment_method">
                        <option value="card">Credit Card</option>
                        <option value="cash">Cash on Delivery</option>
                    </select>
                </td>
            </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob"></td>
                </tr>

            <tr>
                <td>Favorite Category:</td>
                <td>
                    <input type="checkbox" name="category" value="fruits"> Fruits  
                    <input type="checkbox" name="category" value="vegetables"> Vegetables  
                    <input type="checkbox" name="category" value="dairy"> Dairy  
                    <input type="checkbox" name="category" value="beverages"> Beverages  
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
