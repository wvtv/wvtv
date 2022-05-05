<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>menuppal</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="menu_pel.css" rel="stylesheet">
</head>
<body 
>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:248px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
<!-- menu_noticias -->
<div id="Html1" style="display:inline-block;width:109px;height:389px;z-index:0">
<title>iScroll demo: key bindings</title>
<script src="./build/iscroll.js"></script>
<script src="demoUtils.js"></script>
<script>
var myScroll;
function loaded () {
	myScroll = new IScroll('#wrapper', { keyBindings: true });
}
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
	capture: false,
	passive: false
} : false);
</script>

<body onload="loaded()">
    <div id="headermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(1)'), null, null, true)">&#9650;</a></div>
    <div id="wrapper">
        <div id="scroller">
            <ul><ul>
<?php
function CreateSubMenu($id, $dataset)
{
   $ul = false;
   for ($i=0; $i<count($dataset); $i++)
   {
      if ($dataset[$i]['parent_id'] == $id)
      {
         if (!$ul)
         {
            echo "<ul>\n";
            $ul = true;
         }
         echo "<li>";
         if ($dataset[$i]['url'] == '#')
         {
            echo "<a href=\"#\">" . $dataset[$i]['name'] . "</a>";
         }
         else
         {
            echo "<a href=\"" . basename(__FILE__) . "?page=" . $dataset[$i]['seo_friendly_url'] . "\" id=\"" . $dataset[$i]['id'] . "\" target=\"_self\">" . $dataset[$i]['name'] . "</a>";
         }
         CreateSubMenu($dataset[$i]['id'], $dataset);
         echo "</li>\n";
      }
   }
   if ($ul)
   {
      echo "</ul>\n";
   }
}
$db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
if (!$db)
{
   die('Failed to connect to database server!<br>'.mysqli_error($db));
}
mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
$dataset = array();
$sql = "SELECT id, parent_id, name, seo_friendly_url, url FROM " . $mysql_table . "PAGES WHERE visible = 1 ORDER BY menu_index ASC";
$result = mysqli_query($db, $sql);
while ($data = mysqli_fetch_array($result))
{
   $dataset[] = $data;
}
mysqli_close($db);
for ($i=0; $i<count($dataset); $i++)
{
   if ($dataset[$i]['parent_id'] === NULL)
   {
      echo "<li>";
      if ($dataset[$i]['url'] == '#')
      {
         echo "<a href=\"#\">" . $dataset[$i]['name'] . "</a>";
      }
      else
      {
         echo "<a href=\"" . basename(__FILE__) . "?page=" . $dataset[$i]['seo_friendly_url'] . "\" id=\"" . $dataset[$i]['id'] . "\" target=\"_self\">" . $dataset[$i]['name'] . "</a>";
      }
      CreateSubMenu($dataset[$i]['id'], $dataset);
      echo "</li>\n";
   }
}
?>
</ul>

                <li><a href="javascript:void(0);" onclick="javascript:window.open('pagepinfo1', '_top'); "><img src="https://i.ytimg.com/vi/Zl1NjaMxr8k/hqdefault_live.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDjdz7Ao8yoDu-Y3qr_e7yIK7oIKw"><h5> SIN RESPIRO</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pagepinfo2', '_top'); "><img src="https://image.tmdb.org/t/p/w1280/e66tM5YOawXLxhDAfWkR7sxpb3h.jpg"><h5> THE BATMAN</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pagepinfo3', '_top'); "><img src="https://fotos.perfil.com/2022/03/18/trim/1280/720/el-proyecto-adam-1328667.jpg"><h5> PROYECTO ADAM<h5></a></li>
            </ul>
        </div>
    </div>
    <div id="footermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(12)'), null, null, true)">&#9660;</a></div>
</body></div>
<div id="Html2" style="display:inline-block;width:72px;height:69px;z-index:1">
<ul>
<?php
function CreateSubMenu($id, $dataset)
{
   $ul = false;
   for ($i=0; $i<count($dataset); $i++)
   {
      if ($dataset[$i]['parent_id'] == $id)
      {
         if (!$ul)
         {
            echo "<ul>\n";
            $ul = true;
         }
         echo "<li>";
         if ($dataset[$i]['url'] == '#')
         {
            echo "<a href=\"#\">" . $dataset[$i]['name'] . "</a>";
         }
         else
         {
            echo "<a href=\"" . basename(__FILE__) . "?page=" . $dataset[$i]['seo_friendly_url'] . "\" id=\"" . $dataset[$i]['id'] . "\" target=\"_self\">" . $dataset[$i]['name'] . "</a>";
         }
         CreateSubMenu($dataset[$i]['id'], $dataset);
         echo "</li>\n";
      }
   }
   if ($ul)
   {
      echo "</ul>\n";
   }
}
$db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
if (!$db)
{
   die('Failed to connect to database server!<br>'.mysqli_error($db));
}
mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
$dataset = array();
$sql = "SELECT id, parent_id, name, seo_friendly_url, url FROM " . $mysql_table . "PAGES WHERE visible = 1 ORDER BY menu_index ASC";
$result = mysqli_query($db, $sql);
while ($data = mysqli_fetch_array($result))
{
   $dataset[] = $data;
}
mysqli_close($db);
for ($i=0; $i<count($dataset); $i++)
{
   if ($dataset[$i]['parent_id'] === NULL)
   {
      echo "<li>";
      if ($dataset[$i]['url'] == '#')
      {
         echo "<a href=\"#\">" . $dataset[$i]['name'] . "</a>";
      }
      else
      {
         echo "<a href=\"" . basename(__FILE__) . "?page=" . $dataset[$i]['seo_friendly_url'] . "\" id=\"" . $dataset[$i]['id'] . "\" target=\"_self\">" . $dataset[$i]['name'] . "</a>";
      }
      CreateSubMenu($dataset[$i]['id'], $dataset);
      echo "</li>\n";
   }
}
?>
</ul>
</div>
</div>
</div>
</div>
</div>
</body>
</html>