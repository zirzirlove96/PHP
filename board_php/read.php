<?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <title>게시판</title>
</head>
<body>
    <?php
        $bno = $_GET['idx'];
        $hit = mysqli_fetch_array(mq("select * from board where idx='".$bno."'"));
        $hit = $hit['hit']+1;//읽는 사람 수
        $fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");//데이터베이스에 update
        $sql = mq("select * from board where idx='".$bno."'");
        $board = $sql -> fetch_array();//데이터를 배열에 담는 역할
    ?>
    <div id="board_read">
        <h2><?php echo $board['title'];?></h2>
        <div id="user_info">
            <?php echo $board['name'];?> <?php echo $board['date'];?> 조회 : <?php echo $baord['hit'];?>
                <div id="bo_line"></div>
        </div>
        <div id="bo_content">
            <?php echo nl2br("$board[content]");?>
            <!--nl2br은 php함수로 새로운 줄을 표시하는 기호를 html에서 인식할 수 있도록 br태그로 변환해준다.-->
        </div>
    <!--목록, 수정, 삭제-->
    <div id="bo_ser">
        <ul>
            <li><a href="/">[목록으로]</a></li>
            <li><a href="modify.php?idx=<?php echo $board['idx'];?>">[수정]</a></li>
            <li><a href="delete.php?idx=<?php echo $board['idx'];?>">[삭제]</a></li>
        </ul>
    </div>
    </div>
</body>
</html>