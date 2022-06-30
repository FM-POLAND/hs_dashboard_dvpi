<?php
$progname = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once 'include/config.php';
include_once 'include/tools.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="SVXLink" />
    <meta name="Author" content="Waldek SP2ONG" />
    <meta name="Description" content="Dashboard for SVXLink by SP2ONG" />
    <meta name="KeyWords" content="SVXLink,SP2ONG" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Fredoka+One&family=Tourney&family=Oswald&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" sizes="16x16 32x32" type="image/png">
    <title>SVXLink Dashboard</title>
<?php include_once "include/browserdetect.php"; ?>
    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/pcm-player.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({ cache: false });
    </script>
    <link href="css/featherlight.css" type="text/css" rel="stylesheet" />
    <script src="scripts/featherlight.js" type="text/javascript" charset="utf-8"></script>
</head>
<body style="background-color: #000000;font: 11pt arial, sans-serif;">
<center>
<?php

    echo '<script type="text/javascript">'."\n";
    echo 'function reloadStatusInfo(){'."\n";
    echo '  $("#statusInfo").load("include/status.php",function(){ setTimeout(reloadStatusInfo,3000) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadStatusInfo,3000);'."\n";
    echo '$(window).trigger(\'resize\');'."\n";
    echo '</script>'."\n";
    echo '<div id="statusInfo">'."\n";
    include 'include/status.php';
    echo '</div>'."\n";
    echo '</div>'."\n";
    echo '</td>'."\n";

    echo '<td valign="top" style="border:none; height:100%; background-color:#f1f1f1;">';
    echo '<div class="content">'."\n";
    echo '<script type="text/javascript">'."\n";

    if (URLSVXRAPI!="") {
    echo 'function reloadSVXREF(){'."\n";
    echo '  $("#svxref").load("include/svxref.php",function(){ setTimeout(reloadSVXREF,180000) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadSVXREF,180000);'."\n";
     }

    echo 'function reloadLastHerd(){'."\n";
    echo '  $("#lastHerd").load("include/lh.php",function(){ setTimeout(reloadLastHerd,3000) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadLastHerd,3000);'."\n";

    echo '$(window).trigger(\'resize\');'."\n";
    echo '</script>'."\n";
    echo '<center><div id="lastHerd">'."\n";
    include 'include/lh.php';
    echo '</div></center>'."\n";
    echo "<br />\n";
    if (URLSVXRAPI!="") {
    echo '<center><div id="svxref">'."\n";
    include 'include/svxref.php';
    echo '</div></center>'."\n";
    }
    echo '</td>';
?>
<?php
if (MENUBUTTON=="BOTTOM") {
include_once __DIR__."/include/buttons.php"; }
?>
<p style="margin-top:55px;margin-bottom:0px;"></p>
<?php
if (MENUBUTTON=="BOTTOM") {
include_once __DIR__."/include/buttons.html"; }
?>


</div>
</div>
</body>
</html>
