<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Noticias Caracol</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="plyr.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="page15.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="plyr.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
var playerYouTube1;
function onYouTubeIframeAPIReady() {
   playerYouTube1 = new YT.Player('YouTube1', {
      events: {
         'onStateChange': onStateChangeYouTube1
      }
   });
}
function onStateChangeYouTube1(event) {
   switch(event.data) {
      case 3:
         Toggle('wb_YouTube1', 'pulsate', 500);
         break;
   }
}
</script>
<script src="wwb17.min.js"></script>
<script>
$(document).ready(function()
{
   const plyrYouTube1 = new Plyr('#wb_YouTube1', {loadSprite: false, iconUrl: 'plyr.svg'});
});
</script>
</head>
<body>
<div id="FlexGrid1">
<div class="header">
<div id="wb_YouTube1" style="display:inline-block;width:100%;z-index:0;">
<iframe id="YouTube1" src="https://www.youtube.com/embed/OtZKHWWGX3Y?rel=0&amp;autoplay=1&amp;modestbranding=1&amp;enablejsapi=1&amp;autohide=1"></iframe>

</div>
</div>
<div class="main">
</div>
<div class="footer">
</div>
</div>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:630px;top:0px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
</body>
</html>