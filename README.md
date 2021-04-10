# PHP

```
PHP application : 확장자가 php인 파일(소프트웨어)
                  PHP Interpreter -> apache -> os 를 통하여 client로 흘러 간다.
```

## apache2 -> htdoc : document root   
### phpinfo.php 파일을 root에 생성하면 "localhost:/phpinfo.php" 를 브라우저로 열 수 있다.
### ex ) "localhost:/폴더명/파일이름.php"

```
<?php
phpinfo();
?>
```

* <?php?> => php 문법이 시작되므로 php문법으로 해석하자!
* echo => 출력
* 또한 PHP는 html보다 먼저 수행해야하는 우선순위가 있다. 따라서 페이지에 접속할 때 php를 수행시킨다.

Web Browser가 OS(window, Mac)에게 요청한 일을 LAN을 이용하여 이동하고, 인터넷으로 그리고 server의 OS(Apache) 실행하고
OS는 PHP engine에게 요청을 전달한다. 

## include : 다른 PHP파일을 코드 안으로 불러와서 사용 해주는 역할 (함수와 비슷한 역할)
- 여러개의 똑같은 로직 혹은 함수를 다양한 PHP 파일에서 사용할 경우 오류가 발생하므로 이와 같은 역할이 필요로 하다.
### require VS include 
- 비슷한 역할이지만 require은 사용할 수 없는 파일을 받았을 때 fatal error를 발생시키고 include는 warning error를 발생시킨다.

## namespace : 함수,상수,클래스 등 이름이 같은 것들을 참조할 때 충돌을 일으키는 것을 방지하기 위해 사용된다.

```
namespace를 디렉토리라고 생각하자!
하나의 디렉토리에 같은 이름의 파일을 넣는다고 했을 때
충돌이 일어나는 것이라고 생각하자
```
EX) namespace language\ko;
    namespace language\en;
    
    echo language\ko\welcome;
    echo language\en\welcome;
    //서로 다른 디렉토리에 있으므로 충돌이 일어나지 않게 한다.


### 파일을 다루는 과정 속에서 발생하는 오류 : failed to open stream
-> 파일을 읽어 올 때 권한에 대한 거부를 당했을 때 발생
-> 파일 권한 (d)USER-GROUP-OTHER
-> sudo chown [변경할 소유자] [변경할 파일] (파일에 대한 소유자명을 변경하고 싶을 때) : sudo chown root file.txt
-> sudo chmod [변경할 퍼미션값] [변경할 파일] (파일에 대한 r,w,x 값을 주는 것) : sudo chmod 777 file.txt

                  
