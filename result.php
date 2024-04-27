<?php
// Function to check if the age is valid and return appropriate result
function checkAge($age) {
    if ($age === "") {
        return "Please input your age.";
    } elseif (!is_numeric($age)) {
        return "Age must be a number.";
    } elseif ($age < 0) {
        return "Age cannot be negative.";
    } elseif (strpos($age, '.') !== false) {
        return "Age cannot be a decimal number.";
    } elseif ($age >= 17) {
        return "You can watch an R-rated movie alone.";
    } elseif ($age >= 13) {
        return "You can watch a PG-13 movie alone.";
    } elseif ($age >= 6) {
        return "You can watch a G or PG movie alone.";
    } else {
        return "You cannot go to a movie alone.";
    }
}

// Process form submission if age is posted
if(isset($_POST['age'])){
    $age = $_POST['age'];
    $result = checkAge($age);
    echo '<p>' . $result . '</p>';
}
?>
