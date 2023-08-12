<?php
@include 'functions.php';

// Include database connection
$conn = connectDatabase();
// Call the updateForm function
updateForm($conn);
?>