<?php
$myfile = fopen("testfile.txt","w");
$text = "안녕하세요!";
fwrite($myfile,$text);
fclose($myfile);
?>
<?php
$myfile = fopen("testfile.txt", "r");
echo fread($myfile, filesize("testfile.txt"));
fclose($myfile);
?>
<!--파읽을 만들고 읽고 php파일에 불러오기-->