<?php include_once 'common.inc.php';

function base64Thumb($imgSrc){
  $image = new Imagick($imgSrc);
  if(!$image || empty($image))
    return false;

  $image->scaleImage(3,2);
  $image->setFormat('GIF');
  return 'data:image/gif;base64,'.base64_encode($image);
}

$imagePath = 'images/image1.jpg';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Test base 64</title>
  <?php printStyles(); ?>
</head>
<body>
  <?php printNavigation(); ?>
  <h1 class="page-title">Test Base 64</h1>
  <button class="load-button" type="button" onclick="loadImage('.image')">Load image</button>
  <div class="img-ratio" style="background-image: url(<?=base64Thumb($imagePath) ?>)"><img src="" alt="image base 64" class="image" data-src="<?=$imagePath?>"></div>
  <?php printScripts(); ?>
</body>
</html>

