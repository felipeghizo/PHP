<?php
    include("lib/WideImage.php");
    WideImage::load('image.png')->crop("center", "center", 100, 100)->output('jpg');
?>