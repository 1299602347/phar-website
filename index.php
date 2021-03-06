<?php
// 原作者为MCNewsTools，由GamerNoTitle二次修改，模板套用的HTML5UP的HTML模板，请在使用该程序的时候不要删除版权信息，Thanks♪(･ω･)ﾉ！
$host = "royenheart.com"; //设置服务器域名或 IP
$port = "25565"; //设置服务器端口，可以直接用服务器的链接端口，也可以使用query端口（UDP协议）
/*
$host = $_GET["host"];
$port = $_GET["port"];
*/

$CurrDir = "http://royenheart.com/wp-content/themes/phar-mc";
$icon = "$CurrDir/img/icon.png";
$pic1 = "$CurrDir/img/pictures1.png";
$maincss = "$CurrDir/style.css";
$index = "$CurrDir/index.php";
$scene = "$CurrDir/scenery.php";
$apr_img = "$CurrDir/img/apr-ico.png";
$music = "$CurrDir/music/C418-Alpha.flac";
$mainjs = "$CurrDir/assets/js/main.js";
require_once __DIR__.'/data.php';
?>

<!DOCTYPE html>
<html lang="zh-cn">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHAR-兰州大学MC服</title>
  <link rel="icon" type="image/x-icon" href="<?php echo $icon; ?>" />
  <link rel="stylesheet" href="<?php echo $maincss; ?>" />
  <script type="text/javascript" src="<?php echo $mainjs; ?>"></script>
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
    <div class="leftcolumn">
      <div class="card1">
        <h2 id="introduce" style="text-align: center; font-size: 40px;">本服简介</h2>
        <p class="table1" style="position: absolute;">
        <table class="table1" align="center" border="1" cellspacing="0">
          <tr>
            <td>服务器名称：</td>
            <td>PHAR</td>
          </tr>
          <TR>
            <TD>有效状态：</TD>
            <td>长期开放</td>
          </TR>
          <tr>
            <td>游戏版本：</td>
            <td>1.16.4</td>
          </tr>
          <tr>
            <td>服务器类型：
            </td>
            <td>纯公益服务器</td>
          </tr>
          <tr>
            <td>游戏模式:</td>
            <td>纯净原版生存</td>
          </tr>
          <tr>
            <td>正版验证：</td>
            <td>目前有（</td>
          </tr>
          <tr>
            <td>
              最大在线人数：
            </td>
            <td>
              8
            </td>
          </tr>
          <tr>
            <td>
              服务器插件：
            </td>
            <td>
              部分基础插件+经济类插件
            </td>
          </tr>
          <tr>
            <td>
              服务器地址：
            </td>
            <td>
              royenheart.com
            </td>
          </tr>
          <tr>
            <td>
              QQ群：
            </td>
            <td>
              853106198
            </td>
          </tr>
        </table>
        </p>
        <p style="text-align: center;">
          备注：目前服务器仅对兰州大学在校生开放，具体内容请加群了解。
        </p>
        <br>
      </div>
      <div class="card2">
        <h2 style="text-align: center; font-size: 40px;"><a style="text-decoration: none;color: black;" href="<?php echo $scene; ?>">建筑美景</a></h2>
        <img style="width: 100%; height: 75%;" alt="图片显示错误" src="<?php echo $pic1; ?>" ></img>
      </div>
    </div>
    <div class="rightcolumn">
      <div class="card3">
        <!-- 显示服务器状态代码：原作者为MCNewsTools，由GamerNoTitle二次修改 -->
        <h2 style="text-align: center;">Minecraft服务器状态</h2>
        <hr>
        <p>状态：<font color="#2a6c0f">
            <?php echo $status; ?>
          </font>
        </p>
        <p>域名：<font color="#2a6c0f">
            <?php echo $host; ?>
          </font>
        </p>
        <p>游戏版本：<font color="#2a6c0f">
            <?php echo $version; ?>
          </font>
        </p>
        <p>可容纳最大玩家数：<font color="#2a6c0f">
            <?php echo $players_max; ?>
          </font>
          <br>在线玩家数：<font color="#2a6c0f">
            <?php echo $players_online; ?>
          </font>
        </p>
        <!-- <hr> -->
        <h3>目前在线玩家 <font color="#2a6c0f">
            <?php echo $players_online; ?>
          </font>/<font color="#2a6c0f">
            <?php echo $players_max; ?>
          </font>
        </h3>
        <?php if (is_array($Players)) : ?>
        <?php foreach($Players as $Player) : ?>
        <?php if ($platform == "MINECRAFT") : ?>
        <?php echo '<img src="https://cravatar.eu/helmhead/'.htmlspecialchars($Player).'/15.png"> '.htmlspecialchars($Player); ?><br>
        <?php else: ?>
        <?php echo '<img src="https://cravatar.eu/helmhead/steve/15.png"> '.htmlspecialchars($Player); ?><br>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php else: ?>
        <?php echo "无玩家在线." ;?>
        <?php endif; ?>
        <hr>
      </div>
      <div class="card4">
        <h3 style="text-align: center;">本服群聊</h3>
        <p style="text-align: center;"><a target="_blank"
            href="https://qm.qq.com/cgi-bin/qm/qr?k=wVBDgVpd5uz1UVVyUmCSB0YQLYxnH0fK&jump_from=webapi"><img border="0"
              src="https://pub.idqqimg.com/wpa/images/group.png" alt="PHAR" title="PHAR" class="join"></a>
        </p>
      </div>
    </div>
  </div>

  <div class="footer">
    <h2 style="color: white; font-size: 16px; ">期待的你加入~ 官方Q群：853106198</h2>
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