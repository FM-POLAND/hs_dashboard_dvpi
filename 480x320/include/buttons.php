
<?php
$ip = isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']; 
$net1= cidr_match($ip,"192.168.0.0/16");
$net2= cidr_match($ip,"172.16.0.0/12");
$net3= cidr_match($ip,"127.0.0.0/8");
$net4= cidr_match($ip,"10.0.0.0/8");

if ($net1 == TRUE || $net2 == TRUE || $net3 == TRUE || $net4 == TRUE) {
 if(array_key_exists('button111', $_POST)) {
        $exec= "echo '" . KEY111[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button112', $_POST)) {
        $exec= "echo '" . KEY112[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button113', $_POST)) {
        $exec= "echo '" . KEY113[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button114', $_POST)) {
        $exec= "echo '" . KEY114[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button1', $_POST)) {
        $exec= "echo '" . KEY1[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button2', $_POST)) {
        $exec= "echo '" . KEY2[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button3', $_POST)) {
        $exec= "echo '" . KEY3[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button4', $_POST)) {
        $exec= "echo '" . KEY4[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button5', $_POST)) {
        $exec= "echo '" . KEY5[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button6', $_POST)) {
        $exec= "echo '" . KEY6[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button7', $_POST)) {
        $exec= "echo '" . KEY7[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }

 if(array_key_exists('button8', $_POST)) {
        $exec="".KEY8[1]."";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }

if (SHOWPTT=="TRUE") {

 if(array_key_exists('button90', $_POST)) {
        $exec="".KEY9[1]."";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button91', $_POST)) {
        $exec="".KEY10[1]."";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 }
?>    
<!--<fieldset style="box-shadow:0 0 10px #999;background-color:#e8e8e8e8; width:450px;margin-top:5px;margin-bottom:14px;margin-left:6px;margin-right:0px;font-size:12px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
<div style="width:450px;padding:0px;width:90%;background-image: linear-gradient(to bottom, #e9e9e9 100%, #bcbaba 100%);border-radius: 0px;-moz-border-radius:0px;-webkit-border-radius:0px;border: 1px solid LightGrey;margin-left:0px; margin-right:0px;margin-top:0px;margin-bottom:0px;white-space:normal;">-->
<form method="post">
    <center>
        <input type="submit" name="button111"
            class=<?php echo KEY111[2] ?>  value='<?php echo KEY111[0] ?>' />
        <input type="submit" name="button112"
            class=<?php echo KEY112[2] ?> value='<?php echo KEY112[0] ?>' />
        <input type="submit" name="button113"
            class=<?php echo KEY113[2] ?> value='<?php echo KEY113[0] ?>' />
        <input type="submit" name="button114"
	    class=<?php echo KEY114[2] ?> value='<?php echo KEY114[0] ?>' />
<?php	
    if (SHOWPTT=="FALSE") {
        echo "<input type=\"submit\" name=\"button90\" class=".KEY90[2]." value='".KEY90[0]."' />";
        echo "<input type=\"submit\" name=\"button91\" class=".KEY91[2]." value='".KEY91[0]."' />";
       }
?>
   </center>
    </form>
<!--<p style="margin: 0 auto;"></p>
<form action="" method="POST" style="margin-top:4px;">
  <center>
  <label style="text-shadow: 1px 1px 1px Lightgrey, 0 0 0.5em LightGrey, 0 0 1em whitesmoke;font-weight:bold;color:#464646;" for="dtmfsvx">DTMF command (must end with #):</label>  
  <input type="text" id="dtmfsvx" name="dtmfsvx">
  <input type="submit" value="Send DTMF code" class="green"><br>
  </center>
</form>-->
<?php
  if (isset($_POST["dtmfsvx"])){
   $exec= "echo '" . $_POST['dtmfsvx'] . "' > /tmp/dtmf_svx";
   exec($exec,$output);
   echo "<meta http-equiv='refresh' content='0'>";
    }
?>
<!--<p style="margin-bottom:-2px;"></p>-->
</div>
<!--</fieldset>-->
<?php
}
?>
