<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax & XML</title>
</head>
<body>
    <h1>PHP Ajax & XML Example</h1>
    <hr>
    <form action="ajax_post.php" method="POST" id="kycForm">
        <label for="Full Name">Full Name</label><br><br>
        <input type="text" name="full_name" id="full_name" placeholder="Full Name"><br><br>

        <label for="Email">Email</label><br><br>
        <input type="email" name="email" id="email" placeholder="Email"><br><br>

        <label for="Address">Address</label><br><br>
        <input type="text" name="address" id="address" placeholder="Address"><br><br>

        <label for="Contact">Contact</label><br><br>
        <input type="text" name="contact" id="contact" placeholder="Contact"><br><br>

        <label for="Password">Password</label><br><br>
        <input type="text" name="password" id="password" placeholder="Password"><br><br>

        <input type="submit" value="Submit KYC" id="kycSubmit" onclick="submitKyc()">
    </form>
    <br><br>
    <span id="message"></span> 

    <br><br>
    <table id="tableData">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
    </table>

    <!-- external js -->
    <script src="loadScript.js"></script>
    <script src="script.js"></script>
</body>
</html>