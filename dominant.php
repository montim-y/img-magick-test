<?php include_once 'common.inc.php';
$imageName = 'image5.jpg';
$imagePath = 'images/'.$imageName;

function getDominantColor($imgSrc){
  $image = new Imagick($imgSrc);
  $image->resizeImage(3, 2, Imagick::FILTER_GAUSSIAN, 1);
  $image->quantizeImage(1, Imagick::COLORSPACE_RGB, 0, false, false);
  $image->setFormat('RGB');
  return substr(bin2hex($image), 0, 6);
}

?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dominant color</title>
  <?php printStyles(); ?>
</head>
<body>
  <?php printNavigation(); ?>
  <h1 class="page-title">Dominant color</h1>
  <div><button class="load-button" type="button" onclick="loadImage('.image')">Load image</button></div>
  <div class="img-ratio" style="background-color: #<?=getDominantColor($imagePath) ?>"><img src="" alt="image base 64" class="image" data-src="<?=$imagePath?>"></div>
  <?php printScripts(); ?>
</body>
</html>

