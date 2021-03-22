<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <title>게시판</title>
</head>
<body>
    <div id="board_write">
    <h1><a href="/">자유게시판</a></h1>
    <h4>글을 작성하는 공간입니다.</h4>
    <div id="write_area">
        <form action="wirte_of.php" method="post">
            <div id="in_title">
                <textarea name="title" id="title" cols="55" rows="1" placeholder="제목" maxlength="100"></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" id="name" cols="55" rows="1" placeholder="글쓴이" maxlength="100"></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_content">
                <textarea name="content" id="content" cols="55" rows="1" placeholder="내용" required></textarea>
            </div>
            <div id="in_pw">
                <input type="password" name="pw" id="upw" placeholder="비밀번호" required></textarea>
            </div>
            <div class="bt_se">
                <button type="submit">글 작성</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>