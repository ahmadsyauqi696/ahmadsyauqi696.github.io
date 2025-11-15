<?php
// AUTO DETECT config
if (file_exists("config-local.php")) {
    include "config-local.php"; // dipake waktu di laptop
} else {
    include "config.php"; // dipake waktu di hosting
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg   = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name,email,phone,message) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $msg);
    $stmt->execute();

    echo "<script>alert('Message sent successfully!');window.location='index.php#contact';</script>";
}
?>
