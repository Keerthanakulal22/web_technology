<?php
if(isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Application Submitted Successfully</h2>
    <p><b>Name:</b> <?= $fullname ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Phone:</b> <?= $phone ?></p>
    <p><b>Date of Birth:</b> <?= $dob ?></p>
    <p><b>Gender:</b> <?= $gender ?></p>
    <p><b>Address:</b> <?= nl2br($address) ?></p>
</div>

</body>
</html>
