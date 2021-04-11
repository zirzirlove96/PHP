
<?php
echo getcwd().'<br/>';//현재 디렉토리를 알 수 있는 함수
chdir('../');//현재 디렉토리의 부모 디렉토리로 변경해 주는 함수
echo getcwd().'<br/>';
?>

<?php
$dir = './';
$files1 = scandir($dir);//탐색하는 방법
$files2 = scandir($dir,1);//scandir(경로, 정렬방법(1:내림차순))

print_r($files1);
print_r($files2);
?>

<?php
mkdir("/1",0700,true);//mkdir는 디렉토리를 생성 mkdir(생성할 디렉토리 이름, 권한, 디렉토리의 경로 부여 여부)
?>