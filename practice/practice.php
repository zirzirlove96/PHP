<?php
    $myfile = fopen("testfile.txt","w");
    $txt = "Kim ji young";
    fwrite($myfile,$txt);
    fclose($myfile);
?>