<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>menuppal</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,300&display=swap" rel="stylesheet">
<link href="365tv1.22.css" rel="stylesheet">
<link href="menu_ser.css" rel="stylesheet">
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
<body onload="loaded()">
    <div id="headermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(1)'), null, null, true)">&#9650;</a></div>
    <div id="wrapper">
        <div id="scroller">
            <ul>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pagepinfo1', '_top'); "><img src="https://i.ytimg.com/vi/Zl1NjaMxr8k/hqdefault_live.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDjdz7Ao8yoDu-Y3qr_e7yIK7oIKw"><h5> Sin respiro</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pagepinfo2', '_top'); "><img src="https://image.tmdb.org/t/p/w1280/e66tM5YOawXLxhDAfWkR7sxpb3h.jpg"><h5> The Batman</h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pg_ser_info_pcmk', '_top'); "><img src="https://static.esplay.io/tvshow/episode/small/538eLa2f3FoSwNNzHpHi0J1ZXl6.jpg"><h5> PEACEMAKER<h5></a></li>
                <li><a href="javascript:void(0);" onclick="javascript:window.open('pg_ser_info_ejdc', '_top'); "><img src="https://www.somosfan.com/wp-content/uploads/2021/10/El-Juego-del-Calamar-730x500.jpg"><h5> EL JUEGO DEL CALAMAR<h5></a></li>
            </ul>
        </div>
    </div>
    <div id="footermenu"><a href="javascript:myScroll.scrollToElement(document.querySelector('#scroller li:nth-child(12)'), null, null, true)">&#9660;</a></div>
</body></div>

</div>
</div>
</div>
</div>
</body>
</html>