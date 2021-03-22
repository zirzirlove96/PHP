<?php

include $_SERVER['DOCUMNET_ROOT']."/db.php";

//POST로 writer.php에서 보내온 값을 받아온다.
$username=$_POST['name'];
$userpw=password_hash($_POST['pw'], PASSWORD_DEFAULT);
//password_hash는 bcrypt부호화이다(암호화)
//default는 php 내장 함수로 숫자를 받을것을 임의의 문자로 만들어준다.
$title=$_POST['title'];
$content==$_POST['content'];
$date=date('Y-m-d');
if($username && $userpw && $title && $content)
{
    $sql = mq("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/';</script>";
}
else
{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>