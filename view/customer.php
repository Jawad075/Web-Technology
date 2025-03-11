<html>
<head>
    <title>Customer Registration</title>
</head>
<body>

    <h2>Customer Registration Form</h2>
    <form action="customerSuccess.php" method="post">
        <table border="2">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
            <tr>
                <td>Username: (Login Info)</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password: (Login Info)</td>
                <td><input type="password" name="password" required></td>
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
                <td>Default Payment Method:</td>
                <td>
                    <select name="payment_method">
                        <option value="card">Credit Card</option>
                        <option value="cash">Cash on Delivery</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male  
                    <input type="radio" name="gender" value="female"> Female  
                    <input type="radio" name="gender" value="other"> Other  
                </td>
            </tr>
            <tr>
                <td>Profile Picture:</td>
                <td><input type="file" name="profile_picture"></td>
            </tr>
            <tr>
                <td>Emergency Contact (optional):</td>
                <td><input type="tel" name="emergency_contact"></td>
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
