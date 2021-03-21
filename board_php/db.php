<?php

header('Content-Type: text/html; charset=utf-8');

//host, db 아이디, db pw, db명
$db = new mysqli("localhost", "root", "wldud0846", "php");
$db->set_charset("utf8");//db문자열 utf-8 인코딩

function mq($sql)
{
    global $db;//global은 외부에서 선언된 $sql을 함수내에서 사용할 수 있게 한다.
    return $db->query($sql);
}

?>