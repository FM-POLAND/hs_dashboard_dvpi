<?php
// Report all errors except E_NOTICE
// error_reporting(E_ALL & ~E_NOTICE);
// disable all 
error_reporting(0);

// Your callsign
define("CALLSIGN", "M0IQF");

// Select only one URL for SVXReflector API to get connected Nodes
//
// FM POLAND
//define("URLSVXRAPI", "http://svxlink.pl:888/api/");
//
// Empty address API do not show connected nodes to svxreflector 
//define("URLSVXRAPI", "");
//
// Put url address to your svxreflector wihc offer information of status
//define("URLSVXRAPI", "http://192.168.1.33:9999/status");
//
//
//
//
define("SVXLOGPATH", "/var/log");
define("SVXLOGPREFIX", "svxlink");
define("TGNAMEPATH", "/etc/svxlink");
//
//
// define where is located menu wit buttons TOP or BOTTOM
define("MENUBUTTON", "BOTTOM");
//
// Button keys define: description button, DTMF command or command, color of button
//
// DTMF keys
// syntax: 'KEY number,'Description','DTMF code','color button' 
//
/////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////// quick menu ////////////////////////
define("KEY111", array('91','9191#','green'));
define("KEY112", array('260','91260#','green'));
define("KEY113", array('2600','912600#','blue'));
define("KEY114", array('23501','9123501#','blue'));
//////////////////////////////////////////////////////  TG menu  ////////////////////////
define("KEY1", array('TG 91','9191#','green'));
define("KEY2", array('TG 260','91260#','green'));
define("KEY3", array('TG 235','91235#','green'));
define("KEY4", array('TG 262','91262#','green'));
define("KEY5", array('TG 2600','912600#','blue'));
define("KEY6", array('XLX 8873','918873#','blue'));
define("KEY7", array('TG 26001','9126001#','blue'));
define("KEY11", array('TG 26002','9126002#','blue'));
define("KEY12", array('23501','9123501#','blue'));
define("KEY13", array('23502','9123502#','blue'));
define("KEY14", array('TEST','91999#','blue'));
define("KEY15", array('No TalkGroup','910#','red'));
//////////////////////////////////////////////////////// SVX menu ///////////////////////
define("KEY30", array('PARROT','1#','orange'));
define("KEY31", array('EchoLink','2#','orange'));
define("KEY32", array('MOTAR','5#','orange'));
define("KEY33", array('M0IQF-L','2#','purple'));
define("KEY34", array('HF9ZHP-L','2#','purple'));
define("KEY35", array('_','2#','purple'));
define("KEY36", array('_','2#','purple'));
define("KEY37", array('_','2#','purple'));
define("KEY38", array('_','2#','purple'));
define("KEY39", array('Disconnect','#','red'));
/////////////////////////////////////////////////   Free Radio Network //////////////////
define("KEY40", array('Channel-1','17#','purple'));
define("KEY41", array('Channel-2','18#','purple'));
define("KEY42", array('Channel-3','19#','purple'));


//
// command "shutdown now" 
//define("KEY8", array('POWER OFF','sudo poweroff','red'));
//
// Set SHOWPTT to TRUE if you want use microphone connected
// to sound card and use buttons on dashboard PTT ON & PTT OFF
// Set SHOWPTT to FALSE to disable display PTT buttons
// In most cases you can switch to FALSE
define("SHOWPTT","TRUE");
//
define("KEY90", array('PTT ON','echo "O" >/tmp/SQL','orange'));
define("KEY91", array('PTT OFF','echo "Z" >/tmp/SQL','orange'));
//
?>
