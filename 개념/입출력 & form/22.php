<?php
echo $_GET['id'];
?>
<!--id=egoing 값을 출력해 준다.-->

<?php
echo $_GET['id']."님 안녕하세요.";
?>
<!--문자를 합치기 위해서는 '.'을 사용한다.-->

<?php
echo $_GET['id'].",".$_GET['password'];
?>
<!--id값과 password 값이 들어가게 된다.-->
<!--url?id=eogint&password=123-->


