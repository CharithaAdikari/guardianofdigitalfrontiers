<?php

//Establish a database connection and return the connection object
function connectDatabase()
{
    $host = "localhost";
    $dbName = "portfolio";
    $user = "root";
    $password = "";

    $conn = new mysqli($host, $user, $password, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
function processFormData($tableName, $columns)
{
    $formData = array();

    foreach ($columns as $column) {
        if (isset($_POST[$column])) {
            $formData[$column] = $_POST[$column];
        } else {
            $formData[$column] = '';
        }
    }

    $conn = connectDatabase();

    // Sanitize input data to prevent SQL injection
    foreach ($formData as $column => $value) {
        $formData[$column] = $conn->real_escape_string($value);
    }

    $columnsList = implode(', ', array_keys($formData));
    $valuesList = "'" . implode("', '", $formData) . "'";

    // Insert data into database
    $sql = "INSERT INTO $tableName ($columnsList) VALUES ($valuesList)";

    if ($conn->query($sql) === TRUE) {
        $resultMessage = "Form submitted successfully!";
    } else {
        $resultMessage = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    if ($resultMessage === "Form submitted successfully!") {
        echo "<script>alert('Form submitted successfully!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('$resultMessage');</script>";
    }
}


function contactprocessForm()
{
    if (isset($_POST['submit'])) {
        $tableName = "contact_details";
        $columns = array(
            'fname',
            'lname',
            'email',
            'cname',
            'phone',
            'country',
            'message'
        );
        processFormData($tableName, $columns);
    }
}


function addReviewToDatabase()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        $conn = connectDatabase();

        $yourname = mysqli_real_escape_string($conn, $_POST['yourname']);
        $review = mysqli_real_escape_string($conn, $_POST['review']);

        $insertQuery = "INSERT INTO review (name, review) VALUES ('$yourname', '$review')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "Review added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}




function updateForm($conn)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the updated project data
        $projectId = $_POST['id'];
        $newTitle = $_POST['new-title'];
        $newDescription = $_POST['new-description'];

        // Update project information in the database
        $updateQuery = "UPDATE project SET title = '$newTitle', description = '$newDescription' WHERE id = '$projectId'";
        mysqli_query($conn, $updateQuery);

        // Close the database connection before redirecting
        mysqli_close($conn);

        // Redirect back to the project list page after updating
        header("Location: index.php");
        exit();
    } else {
        // If accessed directly without form submission
        header("Location: index.php"); // Redirect to project list page
        exit();
    }
}



function deleteProject($conn, $id) {
    $query = "DELETE FROM project WHERE id = $id";
    $result = mysqli_query($conn, $query);

    return $result;
}



?>

