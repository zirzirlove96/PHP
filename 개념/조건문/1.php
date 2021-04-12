<?php
if(true)
{
    echo "result : true";
}
?>

<?php
if($_GET('id')==='egoing')
{
    echo "right";
}
else{
    echo 'wrong';
}
?>

<!--논리연산자-->
<?php
if(1 and 2) {} if(1 && 2)// and연산자
if(1 or 2) {}   if(1 || 2)//or연산자
?>