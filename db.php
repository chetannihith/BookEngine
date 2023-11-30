<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "web_project";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

function getUsersData()
{
    $conn = OpenCon();

    $sql = "SELECT * FROM signup";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        CloseCon($conn);

        return $data;
    } else {
        return array();
    }
}

?>
