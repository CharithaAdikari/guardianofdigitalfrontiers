<?php
@include 'functions.php';
$conn = connectDatabase();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (deleteProject($conn, $id)) {
        echo "<script>alert('Project deleted successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error deleting project: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

?>
