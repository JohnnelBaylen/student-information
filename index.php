<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="icon" href="./assets/icon.png">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    
    <form action="./review.php" method="POST" class="container">

        <h1>Information Form</h1>

        <label><i class="fa-solid fa-envelope"></i> Email Address:</label>
        <input type="email" name="email" placeholder="Enter your email (e.g., johndoe@gmail.com)" required><br>

        <label><i class="fa-solid fa-lock"></i> Password :</label>
        <input type="password" name="password" placeholder="Enter your password (e.g., ••••••••)" required><br>

        <label><i class="fa-solid fa-address-book"></i> Full Name : </label>
        <input type="text" name="name" placeholder="Enter your full name (e.g., John Doe)"><br>

        <label><i class="fa-solid fa-cake-candles"></i> Age :</label>
        <input type="text" name="age" placeholder="Enter your age (e.g., 18 years old)"><br>

        <label><i class="fa-solid fa-id-card"></i> Student ID :</label>
        <input type="text" name="studentID" placeholder="Enter your student ID (e.g., 202400101)"><br>

        <label><i class="fa-solid fa-person-half-dress"></i> Gender :</label>
        <input type="text" name="gender" placeholder="Enter your gender: (e.g., Male, Female, Other)"><br>

        <label><i class="fa-solid fa-phone"></i> Contact Number :</label>
        <input type="number" name="contact" placeholder="Enter your phone number (e.g., +63 912 345 6789)"><br>

        <input type="submit" value="Review">

    </form>

</body>
</html>