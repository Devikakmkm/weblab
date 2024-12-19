<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdatabase";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the action
$action = $_POST['action'];

// Handle actions
if ($action == "insert") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    if (!empty($name) && !empty($age) && !empty($course)) {
        $sql = "INSERT INTO students (Name, Age, Course) VALUES ('$name', $age, '$course')";
        if ($conn->query($sql) === TRUE) {
            echo "<h3>Record inserted successfully</h3>";
        } else {
            echo "<h3>Error: " . $conn->error . "</h3>";
        }
    } else {
        echo "<h3>Please fill in all fields.</h3>";
    }
} elseif ($action == "delete") {
    $name = $_POST['name'];

    if (!empty($name)) {
        $sql = "DELETE FROM students WHERE name = '$name'";
        $conn->query($sql);
        if ($conn->affected_rows > 0) {
            echo "<h3>Record deleted successfully</h3>";
        } else {
            echo "<h3>Error: No record found to delete</h3>";
        }
    } else {
        echo "<h3>Please provide a name to delete.</h3>";
    }
} elseif ($action == "display") {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Student Records:</h3>";
        echo "<table border='1'<tr><th>ID</th><th>Name</th><th>Age</th><th>Course</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['course']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>No records found.</h3>";
    }
} else {
    echo "<h3>Invalid action.</h3>";
}

$conn->close();
?>
