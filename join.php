<?php $conn = mysqli_connect('localhost', 'root', '', 'duplication')?>

<?php
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $name = $_POST['name'];

    $sql = "INSERT INTO test (userid, userpw, name) VALUES ('$userid', '$userpw', '$name')";
    mysqli_query($conn, $sql);
?>

<script>
    alert("회원가입 성공")
    location.href = 'index.php'
</script>