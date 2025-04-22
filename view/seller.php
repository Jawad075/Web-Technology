<!DOCTYPE html>
<html>
<head>
    <title>Seller Registration</title>
    <link rel="stylesheet" href="../css/sell3.css">
</head>
<body>

    <h2>Seller Registration Form</h2>
    <form id="regSeller" action="sellerSuccess.php">
        <table border="1">
            <tr>
                <td>Seller Name:</td>
                <td>
                    <input type="text" name="seller_name" id="seller_name">
                    <div class="error" id="sellerNameErr"></div>
                </td>
            </tr>
            <tr>
                <td>Username: (Login Info)</td>
                <td>
                    <input type="text" name="username" id="username">
                    <div class="error" id="usernameErr"></div>
                </td>
            </tr>
            <tr>
                <td>Password: (Login Info)</td>
                <td>
                    <input type="password" name="password" id="password">
                    <div class="error" id="passwordErr"></div>
                </td>
            </tr>
       
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" id="email">
                    <div class="error" id="emailErr"></div>
                </td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td>
                    <input type="tel" name="phone" id="phone">
                    <div class="error" id="phoneErr"></div>
                </td>
            </tr>
            <tr>
                <td>Store Address:</td>
                <td><input type="text" name="store_address" id="store_address"></td>
            </tr>
            <tr>
                <td>Business Type:</td>
                <td>
                    <select name="business_type" id="business_type">
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
                <td>Delivery Option:</td>
                <td>
                    <input type="radio" name="delivery" value="yes" id="delivery_yes"> Yes  
                    <input type="radio" name="delivery" value="no" id="delivery_no"> No  
                </td>
            </tr>
      
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

    <script src="../js/sell3.js"></script>
</body>
</html>
