<?php
// try catch
$city = "Dhaka";
try {
    echo "Welcome to " . $city . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
} finally {
    echo "Finally block";}
