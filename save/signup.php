<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialc: $_POST['display_name']);
    $password = htmlspecialchars(string: $_POST['password']);
    $first_name = htmlspecialchars(string: $_POST['fname']);
    $last_name = htmlspecialchars(string: $_POST['lname']);
    $phone = htmlspecialchars(string: $_POST['Phone']);
    $address = htmlspecialchars(string: $_POST['address']);
    $zip = htmlspecialchars(string: $_POST['zip']);
    $country = htmlspecialchahars(string: $_POST['email']);
    $display_name = htmlspecialchars(stringrs(string: $_POST['country']);
    $state = htmlspecialchars(string: $_POST['state']);
    
    $data = "$email, $display_name, $password, $first_name, $last_name, $phone, $address, $zip, $country, $state";

    $file = fopen(filename: "submissions.txt", mode: "a+");
    fwrite(stream: $file, data: $data);
    fclose(stream: $file);
    // header(header: "Location: https://locatedmaple38.github.io/theislidefamly.com/"); 
    header(header: "Location: https://localhost:8000/");
}
?>