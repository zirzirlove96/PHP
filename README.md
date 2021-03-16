# PHP

```
PHP application : 확장자가 php인 파일(소프트웨어)
                  PHP Interpreter -> apache -> os 를 통하여 client로 흘러 간다.
```

## apache2 -> htdoc : document root   
### phpinfo.php 파일을 root에 생성하면 "localhost:/phpinfo.php" 를 브라우저로 열 수 있다.

```
<?php
phpinfo();
?>
```

* <?php?> => php 문법이 시작되므로 php문법으로 해석하자!
* echo => 출력

Web Browser가 OS(window, Mac)에게 요청한 일을 LAN을 이용하여 이동하고, 인터넷으로 그리고 server의 OS(Apache) 실행하고
OS는 PHP engine에게 요청을 전달한다. 






                  
