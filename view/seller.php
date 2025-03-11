<html>
<head>
    <title>Seller Registration</title>
</head>
<body>

    <h2>Seller Registration Form</h2>
    <form action="register_seller.php" method="post">
        <table border="1">
            <tr>
                <td>Business Name:</td>
                <td><input type="text" name="business_name" required></td>
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
                <td>Store Address:</td>
                <td><input type="text" name="store_address" required></td>
            </tr>
            <tr>
                <td>Business Type:</td>
                <td>
                    <select name="business_type">
                        <option value="grocery">Grocery</option>
                        <option value="bakery">Bakery</option>
                        <option value="dairy">Dairy</option>
                        <option value="beverages">Beverages</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Accepted Payment Methods:</td>
                <td>
                    <input type="checkbox" name="payment_method" value="card"> Credit Card  
                    <input type="checkbox" name="payment_method" value="cash"> Cash  
                    <input type="checkbox" name="payment_method" value="bank"> Bank Transfer  
                </td>
            </tr>
            <tr>
                <td>Business License Number:</td>
                <td><input type="text" name="license_number" required></td>
            </tr>
            <tr>
                <td>Delivery Option:</td>
                <td>
                    <input type="radio" name="delivery" value="yes"> Yes  
                    <input type="radio" name="delivery" value="no"> No  
                </td>
            </tr>
            <tr>
                <td>Referral Code (Optional):</td>
                <td><input type="text" name="referral_code"></td>
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
