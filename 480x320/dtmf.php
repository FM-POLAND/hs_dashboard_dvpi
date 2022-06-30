<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="DTMF Keyboard SVXLink" />
    <meta name="Author" content="Waldek SP2ONG" />
    <meta name="Description" content="DTMF keyboard for SVXLink by SP2ONG" />
    <meta name="KeyWords" content="SVXLink, SVXRelector,SP2ONG" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
<style>
.button {
  border: none;
  color: #454545;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.buttonh {
  background-image: linear-gradient(to bottom, #337ab7 0%, #265a88 100%);color:#454545;
  color: #454545;
}

.buttonh:hover {
  background-color: #4CAF50;
  color: #454545;
}
.green
{
  background-color: #448f47;
  border: none;
  color: white;
  font-weight: 600;
  font-size: 13px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;

}

.blue
{
  background-image: linear-gradient(to bottom, #337ab7 0%, #265a88 100%);color:#454545;
  border: none;
  color: white;
  font-weight: 600;
  font-size: 16px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;
  height:80px;
  width:150px;
}
.black
{
  background-color: #000;
  border: none;
  color: white;
  font-weight: 300;
  font-size: 13px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;
}

.red
{
  background-color: #b00;
  border: none;
  color: white;
  font-weight: 600;
  font-size: 13px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;
}
.orange
{
  background-color: DarkOrange;
  border: none;
  color: white;
  font-weight: 600;
  font-size: 13px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;
}
.purple
{
  background-color: #800080;
  border: none;
  color: white;
  font-weight: 600;
  font-size: 13px;
  padding: 4px 12px;
  text-decoration: none;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 4px;
}

</style>
</head>
<body style="background-color: #000000;">
<center>
<!--<fieldset style="box-shadow:0 0 4px #999; background-color:#000000; width:430px;margin-top:0px;margin-left:0px;margin-right:0px;font-size:12px;border-top-left-radius: 0px; border-top-right-radius: 0px;border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">-->
<?php
function cidr_match($ip, $cidr) {
    $outcome = false;
    $pattern = '/^(([01]?\d?\d|2[0-4]\d|25[0-5])\.){3}([01]?\d?\d|2[0-4]\d|25[0-5])\/(\d{1}|[0-2]{1}\d{1}|3[0-2])$/';
    if (preg_match($pattern, $cidr)){
        list($subnet, $mask) = explode('/', $cidr);
        if (ip2long($ip) >> (32 - $mask) == ip2long($subnet) >> (32 - $mask)) {
            $outcome = true;
        }
    }
    return $outcome;
}

    $url1=$_SERVER['REQUEST_URI'];
//    header("Refresh: 10; URL=$url1");


$ip = isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']; 
$net1= cidr_match($ip,"192.168.0.0/16");
$net2= cidr_match($ip,"172.16.0.0/12");
$net3= cidr_match($ip,"127.0.0.0/8");
$net4= cidr_match($ip,"10.0.0.0/8");
if ($net1 == TRUE || $net2 == TRUE || $net3 == TRUE || $net4 == TRUE) {



// Defined buttons:

    if (isset($_POST['button1']))
    {
        shell_exec('echo "*91260#" > /tmp/dtmf_svx');
    }

   if (isset($_POST['button2']))
    {
        shell_exec('echo "*912600#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button3']))
    {
        shell_exec('echo "*917783#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button4']))
    {
        shell_exec('echo "*91999#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button5']))
    {
        shell_exec('echo "912605#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button6']))
    {
        shell_exec('echo "912606#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button7']))
    {
        shell_exec('echo "912606#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button8']))
    {
        shell_exec('echo "912609#" > /tmp/dtmf_svx');
    }

if (isset($_POST['button9']))
    {
        shell_exec('echo "910#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button10']))
    {
        shell_exec('echo "*#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button11']))
    {
        shell_exec('echo "*1#" > /tmp/dtmf_svx');
    }

 if (isset($_POST['button12']))
    {
        shell_exec('echo "2# 453582# " > /tmp/dtmf_svx');
    }
 if (isset($_POST['button13']))
    {
        shell_exec('echo "2# 871657#" > /tmp/dtmf_svx');
    }


// Keyboard
 if (isset($_POST['button20']))
    {
        shell_exec('echo "0" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 0</center></h1></p></pre>';
    }

 if (isset($_POST['button21']))
    {
        shell_exec('echo "1" > /tmp/dtmf_svx');
///       echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 1</center></h1></p></pre>';
    }

 if (isset($_POST['button22']))
    {
        shell_exec('echo "2" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 2</center></h1></p></pre>';
    }

 if (isset($_POST['button23']))
    {
        shell_exec('echo "3" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 3</center></h1></p></pre>';
    }

 if (isset($_POST['button24']))
    {
        shell_exec('echo "4" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 4</center></h1></p></pre>';
    }

 if (isset($_POST['button25']))
    {
        shell_exec('echo "5" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 5</center></h1></p></pre>';
    }

 if (isset($_POST['button26']))
    {
        shell_exec('echo "6" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 6</center></h1></p></pre>';
    }

 if (isset($_POST['button27']))
    {
        shell_exec('echo "7" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 7</center></h1></p></pre>';
    }

 if (isset($_POST['button28']))
    {
        shell_exec('echo "8" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 8</center></h1></p></pre>';
    }

 if (isset($_POST['button29']))
    {
        shell_exec('echo "9" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: 9</center></h1></p></pre>';
    }

 if (isset($_POST['button30']))
    {
        shell_exec('echo "*" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: *</center></h1></p></pre>';
    }

if (isset($_POST['button31']))
    {
        shell_exec('echo "#" > /tmp/dtmf_svx');
///        echo '<pre><h1><center><p style="color: #454545; ">Send DTMF: #</center></h1></p></pre>';
    }


// POWER OFF
if (isset($_POST['button99']))
    {
        shell_exec('sudo poweroff');
///        echo '<pre><h1><center><p style="color: #454545; ">POWER OFF</center></h1></p></pre>';
    }
?>
<form method="post">
    <p>
<!--         <h1><center><p style="color: #454545; ">Keyboard</center></h1></p> -->
         <center><button style="height: 55px; width: 100px;font-size:25px;" button name="button21">1</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button22">2</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button23">3</button></center>
         <center><button style="height: 55px; width: 100px;font-size:25px;" button name="button24">4</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button25">5</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button26">6</button></center>
         <center><button style="height: 55px; width: 100px;font-size:25px;" button name="button27">7</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button28">8</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button29">9</button></center>
         <center><button style="height: 55px; width: 100px;font-size:25px;" button name="button30">*</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button20">0</button><button style="height: 55px; width: 100px;font-size:25px;" button name="button31">#</button></center>
    </p>
    </form>
<!--    <form method="post">
    <p>
        <h1><center><p style="color: #454545;font-size:20px;">Talk Groups</center></h1></p>
        <center>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button1">TG 260</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button2">TG 2600</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button3">TG 7783</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button4">TG 999</button></br>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button6">TG 2605</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button7">TG 2606</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button8">TG 2609</button>
        <button class="blue" style="height: 60px; width: 130px;font-size:16px;" button name="button9">No TalkGroup</button>
       </center>

    </p>
    </form>

    <form method="post">
    <p>
        <h1><center><p style="color: #454545;font-size:20px">Others</center></h1></p>
        <center>
        <button class="green"  style="height: 60px; width: 130px;font-size:16px;" button name="button10">SVX IDENT</button>
        <button class="orange" style="height: 60px; width: 130px;font-size:16px;" button name="button11">PARROT</button>
        <button class="purple" style="height: 60px; width: 130px;font-size:16px;" button name="button12">EL-SR4DON</button>
        <button class="purple" style="height: 60px; width: 130px;font-size:16px;" button name="button13">EL-SR2C</button>
    </center>
    </p>
    </form>
    <form method="post">
    <p>
        <center>
        <button class="red" style="height: 60px; width: 130px;font-size:16px;" button name="button99">POWER OFF</button>
    </center>
    </p>
    </form>-->
<p style="margin-top:40px;margin-bottom:0px;"></p>
<a href="index.php"><button class="white" style="height: 35px; width: 130px;font-size:16px;" button name="button0">BACK</button></a>
<?php
} else {
header("Location: http://svxlink.pl:888");
exit();
}
?>
<?php
if (MENUBUTTON=="BOTTOM") {
include_once __DIR__."/include/buttons.html"; }
?>
</fieldset>
</body>
</html>
