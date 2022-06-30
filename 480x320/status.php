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
<!--<fieldset style="box-shadow:0 0 0px #999; background-color:#f1f1f1; width:0px;margin-top:0px;margin-left:0px;margin-right:0px;font-size:13px;border-top-left-radius: 0px; border-top-right-radius: 0px;border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">-->





<!--<div class="container"> 
<div class="header">
<div class="parent">
    <div class="img" style="padding-left:270px"><img src="images/tower-rpt.png" /></div>
    <div class="text"style="padding-right:230px">
<center><p style="margin-top:5px;margin-bottom:0px;">
<span style="font-size: 32px;letter-spacing:4px;font-family: &quot;Fredoka One&quot;, sans-serif;font-weight:500;color:DarkOrange"><?php echo CALLSIGN; ?></span>
<p style="margin-top:0px;margin-bottom:0px;">
<span style="font-size: 30px;font-family: 'Architects Daughter', 'Helvetica Neue', Helvetica, Arial, sans-serif;letter-spacing: 3px;font-weight: 600;background: #3083b8;">SVXLink Client</span>
</p></center>
</div></div>
</div>

<div class="content"><center>
<div style="margin-top:0px;">
</div></center>
</div>
<?php
if (MENUBUTTON=="TOP") {
include_once __DIR__."/include/buttons.php"; }
?>-->




<?php
//    echo '<table style="margin-bottom:0px;border:0; border-collapse:collapse; cellspacing:0; cellpadding:0; background-color:#f1f1f1;"><tr style="border:none;background-color:#f1f1f1;">';
//    echo '<td width="400px" valign="top" class="hide" style="border:0;background-color:#f1f1f1;">';
//    echo '<div class="nav">'."\n";

    echo '<script type="text/javascript">'."\n";
    echo 'function reloadStatusInfo(){'."\n";
    echo '  $("#statusInfo").load("include/status2.php",function(){ setTimeout(reloadStatusInfo,3000) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadStatusInfo,3000);'."\n";
    echo '$(window).trigger(\'resize\');'."\n";
    echo '</script>'."\n";
    echo '<div id="statusInfo">'."\n";
    include 'include/status2.php';
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
<a href="index.php"><button class="black" style="height: 35px; width: 130px;font-size:16px;" button name="button0">BACK</button></a>
</div>
</div>
<!--</fieldset>-->
</body>
</html>
