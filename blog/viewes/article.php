<!doctype html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>blog</title>
    <link rel="stylesheet" href="style.css"/>
</head>
    
<body>
    <div class="body">
        <h1>My first blog</h1>
        <div>
            <h3><?=$article['title']?></h3>
            <p><?=$article['content']?></p>
            <em>Опубликовано: <?=$article['date']?></em>
        </div>
        <footer>
            <p>My first blog<br>Copyright &copy;2016</p>
        </footer>
    </div>    
</body>
    
</html>