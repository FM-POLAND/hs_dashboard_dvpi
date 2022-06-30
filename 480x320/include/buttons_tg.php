
<?php
$ip = isset($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']; 
$net1= cidr_match($ip,"192.168.0.0/16");
$net2= cidr_match($ip,"172.16.0.0/12");
$net3= cidr_match($ip,"127.0.0.0/8");
$net4= cidr_match($ip,"10.0.0.0/8");

if ($net1 == TRUE || $net2 == TRUE || $net3 == TRUE || $net4 == TRUE) {

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
 if(array_key_exists('button11', $_POST)) {
        $exec= "echo '" . KEY11[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button12', $_POST)) {
        $exec= "echo '" . KEY12[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button13', $_POST)) {
        $exec= "echo '" . KEY13[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button14', $_POST)) {
        $exec= "echo '" . KEY14[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button15', $_POST)) {
        $exec= "echo '" . KEY15[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button16', $_POST)) {
        $exec= "echo '" . KEY16[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }






if (SHOWPTT=="TRUE") {

 if(array_key_exists('button9', $_POST)) {
        $exec="".KEY9[1]."";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button10', $_POST)) {
        $exec="".KEY10[1]."";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 }
?>    

<form method="post">
    <p>
        <center>
        <button class=<?php echo KEY1[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button1"><?php echo KEY1[0] ?></button>
        <button class=<?php echo KEY2[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button2"><?php echo KEY2[0] ?></button>
        <button class=<?php echo KEY3[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button3"><?php echo KEY3[0] ?></button><br>
        <button class=<?php echo KEY4[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button4"><?php echo KEY4[0] ?></button>
        <button class=<?php echo KEY5[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button5"><?php echo KEY5[0] ?></button>
        <button class=<?php echo KEY6[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button6"><?php echo KEY6[0] ?></button><br>
        <button class=<?php echo KEY7[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button7"><?php echo KEY7[0] ?></button>
        <button class=<?php echo KEY11[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button11"><?php echo KEY11[0] ?></button>
        <button class=<?php echo KEY12[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button12"><?php echo KEY12[0] ?></button><br>
        <button class=<?php echo KEY13[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button13"><?php echo KEY13[0] ?></button>
        <button class=<?php echo KEY14[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button14"><?php echo KEY14[0] ?></button>
        <button class=<?php echo KEY15[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button15"><?php echo KEY15[0] ?></button><br>

   </center>
    </form>
</form>
</div>
<?php
}
?>
