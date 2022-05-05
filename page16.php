<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The History</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="page16.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="plyr.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
var playerYouTube1;
function onYouTubeIframeAPIReady() {
   playerYouTube1 = new YT.Player('YouTube1', {
      events: {
      }
   });
}
</script>
<script>
$(document).ready(function()
{
   const plyrYouTube1 = new Plyr('#wb_YouTube1', {loadSprite: false, iconUrl: 'plyr.svg'});
   if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {$('#preloader').remove();}
});
$(window).on('load', function()
{
   $('#preloader').remove();
});
</script>
</head>
<body onload="window.open('pagecon16','InlineFrameCon');return false;">
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:628px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="FlexGrid1">
<div class="header">
<div id="wb_YouTube1" style="display:inline-block;width:100%;z-index:0;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/hcWglaTkwPE?t=52?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=0"></iframe>

</div>
</div>
<div class="main">
</div>
</div>
<div id="preloader"></div>
</body>
</html>