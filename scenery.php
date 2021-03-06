<?php

$CurrDir = "http://royenheart.com/wp-content/themes/phar-mc";
$icon = "$CurrDir/img/icon.png";
$icon2 = "$CurrDir/img/icon2.png";
$pic1 = "$CurrDir/img/pictures1.png";
$maincss = "$CurrDir/style.css";
$scenecss = "$CurrDir/assets/css/style_scene.css";
$index = "$CurrDir/index.php";
$scene = "$CurrDir/scenery.php";
$music = "$CurrDir/music/C418-Alpha.flac";
require_once __DIR__.'/data.php';
?>

<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHAR-服内建筑美景</title>
  <link rel="icon" type="image/x-icon" href="<?php echo $icon; ?>" />
  <link rel="stylesheet" href="<?php echo $scenecss; ?>">
</head>

<body>

  <div class="header">
    <h1 class="headerh1"><a style="text-decoration: none; color: rgb(250, 241, 225);" href="<?php echo $index; ?>">PHAR</a></h1>
    <h2 class="headerp1">Lzuer们的minecraft服务器</h2>
  </div>
  <div>
    <p></p>
  </div>
  <div class="topnav">
    <div class="link_box" style="float: left;left: 5%;"><a class="a_link" href="#introduce">本服简介</a></div>
    <div class="link_box" style="position: absolute;left: 35%;"><a class="a_link" href="<?php echo $index; ?>">加入我们</a></div>
    <div class="link_box" style="float: right;right: 5%;"><a class="a_link" href="<?php echo $scene; ?>">建筑美景</a></div>
  </div>
  <div>
    <p></p>
  </div>
  <div style="background-color: rgba(255,255,255,0.4);padding: 10px;">
    <h3 style="text-align: center;font-size: 28px;color: #000000;">C418-Alpha</h3>
    <audio style='width: 100%;' src="<?php echo $music; ?>" controls auto loop></audio><br>
  </div>

  </div>
  <div class="row">
    <div class="card2">
      <h2 style="text-align: center; font-size: 40px;">建筑美景</h2>
    </div>

    <div class="footer">
      <h2 style="color:white;font-size:16px;">期待的你加入~ 官方Q群：853106198</h2>
      <h2 style="color: white; font-size: 16px; ">Copyright by <a id="thanks" href="https://github.com/1299602347/phar-website" target="_blank">知交</a></h2>
      <h2 style="color: white; font-size: 16px; ">And royenheart</h2>
      <div style="color: white; font-size: 16px;">
        <h2 style="font: normal normal 17px fantasy;">
        ICP：浙ICP备2020042582号-1<br>
        <a id="gov" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=62012302000279"><img
            src="<?php echo $apr_img; ?>" />甘公网安备62012302000279号</a>
        </h2>
      </div>
    </div>

</body>

</html>