<?php $conn = mysqli_connect('localhost', 'root', '', 'duplication')?>

<?php
    $id = $_POST['userid'];
    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    echo $result->num_rows;
?>