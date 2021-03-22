
<?php include $_SERVER['DOCUMENT_ROOT']."/db.php"?>
<!--document root에서의 db.php를 라이브러리처럼 사용하기 위해-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <!--리스트를 보여주는 페이지-->
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
</head>
<body>
    <div id="board_area">
        <h1>자유게시판</h1>
        <h4>자유롭게 글을 쓸 수 있는 공간입니다.</h4>
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>
            <?php
                $sql = mq("select * from board order by idx desc limit 0,5");
                while($board = $sql->fetch_array())
                {//쿼리 결과를 배열로 받아온다.
                    echo $board;
                    $title=$board["title"];//쿼리의 데이터명중 title을 가져온다.
                    if(strlen($title)>30)
                    {
                        $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf8")."...",$board["title"]);
                        //제목의 길이가 30자 초과될 경우 뒤의 글자가 "..."이 되게 한다.
                        //mb_substr(문자열, 시작시점, 길이, 현재 파일의 인코딩)
                    }
            ?>
            <tbody>
            <tr>
                <td width="70"><?php echo $board['idx'];?></td>
                <!--게시판 글을 읽는 곳으로-->
                <td width="500"><a href="/page/board/read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
                <td width="120"><?php echo $board['name'];?></td>
                <td width="100"><?php echo $board['date'];?></td>
                <td width="100"><?php echo $board['hit'];?></td>
            </tr>
            </tbody>
            <?php }?>
        </table>
        <div id="wirte_btn">
            <a href="/page/board/write.php"><button>글쓰기</button></a>
        </div>
    </div>
</body>
</html>
