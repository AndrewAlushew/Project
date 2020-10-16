<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <div class="like_views _views" onmouseover="Likes.updateViews('wall205364463_4450');" data-count="1" title="1 просмотра">1</div>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        
        <a href="vendor/logout.php" class="logout">Выход</a> 
     <form name="upload" action="download_img.php" method="POST" ENCTYPE="multipart/form-data"> 
        Выберите файл для загрузки: 
        <input type="file" name="userfile">
        <input type="submit" name="uploads" value="Загрузить"> 
     </form>
        
     </form>

</body>
</html>