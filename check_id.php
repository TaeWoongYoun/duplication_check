<?php $conn = mysqli_connect('localhost', 'root', '', 'duplication')?>

<?php
    $id = $_POST['userid'];
    $sql = "SELECT * FROM test WHERE userid = '$id'";
    $result = mysqli_query($conn, $sql);
    echo $result->num_rows;
?>