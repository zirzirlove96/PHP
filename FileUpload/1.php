<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set("display_errors", "1");
        //임시디렉토리를 만드는 과정
        $uploaddir = 'C:\Bitnami\wampstack-8.0.2-1\apache2\htdocs\PHP\FileUpload\file\\';
        //최종적으로 파일이 있어야하는 경로 이름
        $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
        echo '<pre>';
        //move_uploaded_file 이라는 내장 함수를 사용해 준다
        //첫번째 인자는 실제파일의 이름(경로), 두번째 인자는 이동경로
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
        {
            echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
        }
        else
        {
            print "파일 업로드 공격의 가능성이 있습니다!\n";
        }
        echo "자세한 디버깅 정보입니다.";
        print_r($_FILES);
        print "</pre>";
    ?>
    <!--이미지 파일을 어디에 저장할 것 인지 file 디렉토리에 실제 파일의 이름으로 저장-->
    <img src="file\<?=$_FILES['userfile']['name']?>"/>
    <!--
        파일이 유효하고, 성공적으로 업로드 되었습니다.
자세한 디버깅 정보입니다.Array
(
    [userfile] => Array
        (
            [name] => 1.png
            [type] => image/png
            [tmp_name] => C:\Bitnami\wampstack-8.0.2-1\php\tmp\php6F5B.tmp
            [error] => 0
            [size] => 80669
        )

)
$_FILES를 사용하면 array형태로 약속된 변수로 나타난다.
    -->
</body>
</html>