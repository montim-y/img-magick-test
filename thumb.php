<?php include_once 'common.inc.php';
$imageName = 'image1.jpg';
$imagePath = 'images/'.$imageName;

function createThumb($imgSrc, $name){
  $image = new Imagick($imgSrc);
  if(!$image || empty($image))
    return false;

  $image->scaleImage(32,18);
  $image->writeImage('images/thumb/'.$name);
}

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thumbnails</title>
  <?php printStyles(); ?>
</head>
<body>
  <?php printNavigation(); ?>
  <?= createThumb($imagePath, $imageName)?>
  <h1 class="page-title">Thumbnails</h1>
  <div><button class="load-button" type="button" onclick="loadImage('.image')">Load image</button></div>
  <img src="images/thumb/<?=$imageName?>" alt="image thumb" class="image" data-src="<?=$imagePath?>"></div>
  <?php printScripts(); ?>
</body>
</html>

