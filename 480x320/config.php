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
<!--<fieldset style="box-shadow:0 0 4px #999; background-color:000000; width:430px;margin-top:0px;margin-left:0px;margin-right:0px;font-size:12px;border-top-left-radius: 0px; border-top-right-radius: 0px;border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">-->
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





// POWER OFF
if (isset($_POST['button99']))
    {
        shell_exec('sudo /home/pi/stopsvx.sh');
        echo '<pre><h1><center><p style="color: #454545; ">SVXlink OFF</center></h1></p></pre>';
    }

?>
    <form method="post">
    <p>
        <center>
        <button class="red" style="height: 60px; width: 130px;font-size:16px;" button name="button99">SVXlink OFF</button>
    </center>
    </p>
    </form>

<a href="status.php"><button class="blue" style="height: 55px; width: 130px;font-size:16px;" button name="button0">Status</button></a>
<a href="hardware.php"><button class="blue" style="height: 55px; width: 130px;font-size:16px;" button name="button0">Hardware</button></a><br>
<a href="./audio/index.php"><button class="green" style="height: 55px; width: 130px;font-size:16px;" button name="button0">Audio TEST</button></a>

<p style="margin-top:50px;margin-bottom:0px;"></p>
<a href="index.php"><button class="white" style="height: 35px; width: 130px;font-size:16px;" button name="button0">BACK</button></a>
<?php
} else {
header("Location: http://svxlink.pl:888");
exit();
}
?>
<!--</fieldset>-->
</body>
</html>
