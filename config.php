<?php
$conn = new mysqli("localhost","u6162986_smk_akp","w3A7E4n0nYM0Us!%)%@))@","u6162986_smk_akp_galang");
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}