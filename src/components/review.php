<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="icon" href="../../public/icon.png">
    <link rel="stylesheet" href="../styles/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    
<div class="info-container">

    <h1><i class="fa-solid fa-address-book"></i> Student Information</h1>
        
    <?php

        $email = $_POST["email"];
        echo "<div class='info-item'><span class='info-label'>Email Address :</span> " . $email . "</div>";
            
        $password = $_POST["password"];
        echo "<div class='info-item'><span class='info-label'>Password :</span> •••••••••• </div>";
            
        $name = $_POST["name"];
        echo "<div class='info-item'><span class='info-label'>Full Name :</span> " . $name . "</div>";

        $age = $_POST["age"];
        echo "<div class='info-item'><span class='info-label'>Age :</span> " . $age . "</div>";

        $student_id = $_POST["studentID"];
        echo "<div class='info-item'><span class='info-label'>Student ID :</span> " . $student_id . "</div>";

        $gender = $_POST["gender"];
        echo "<div class='info-item'><span class='info-label'>Gender :</span> " . $gender . "</div>";
            
        $contact = $_POST["contact"];
        echo "<div class='info-item'><span class='info-label'>Contact Number :</span> " . $contact . "</div>";
        
    ?>
        
    <a href="./thankyou.php" class="btn">Submit</a>
    
</div>

</body>
</html>