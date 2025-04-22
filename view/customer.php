<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="../css/cus3.css">
</head>
<body>

    <h2>Customer Registration Form</h2>
    <form id="regCustomer" action="customerSuccess.php">
        <table border="1">
            <tr>
                <td>Full Name:</td>
                <td>
                    <input type="text" name="fullname" id="fullname">
                    <div class="error" id="fullNameErr"></div>
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
                <td>Delivery Address:</td>
                <td>
                    <input type="text" name="address" id="address">
                    <div class="error" id="addressErr"></div>
                </td>
            </tr>
            <tr>
                <td>Default Payment Method:</td>
                <td>
                    <select name="payment_method" id="payment_method">
                        <option value="card">Credit Card</option>
                        <option value="cash">Cash on Delivery</option>
                        <option value="paypal">PayPal</option>
                    </select>
                    <div class="error" id="paymentMethodErr"></div>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td>
                    <input type="date" name="dob" id="dob">
                    <div class="error" id="dobErr"></div>
                </td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" id="gender_male"> Male  
                    <input type="radio" name="gender" value="female" id="gender_female"> Female  
                    <input type="radio" name="gender" value="other" id="gender_other"> Other  
                    <div class="error" id="genderErr"></div>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

    <script src="../js/cus3.js"></script>
</body>
</html>
