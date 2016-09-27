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
            <?php foreach($articles as $a): ?>
            <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <p><?=$a['content']?></p>
            <em>Опубликовано: <?=$a['date']?></em>
            <?php endforeach ?> 
        </div>
        <footer>
            <p>My first blog<br>Copyright &copy;2016</p>
        </footer>
    </div>    
</body>
    
</html>