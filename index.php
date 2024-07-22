<?php $conn = mysqli_connect('localhost', 'root', '', 'duplication')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>중복 체크 테스트</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>회원가입</h1>
    <form action="join.php" method="post">
        <p>
            <input type="text" name="userid" id="userid" placeholder="아이디" require>
            <button type="button" id="check_id">중복 확인</button>
        </p>
        <input type="hidden" name="idok" id="idok" value="0">
        <p><input type="password" name="userpw" id="userpw" placeholder="비밀번호" require></p>
        <p><input type="text" name="name" id="name" placeholder="이름" require></p>
        <button type="submit">회원가입</button>
    </form>    

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="index.js"></script>
</body>
</html>