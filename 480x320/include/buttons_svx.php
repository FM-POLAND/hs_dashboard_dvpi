
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
 if(array_key_exists('button30', $_POST)) {
        $exec= "echo '" . KEY30[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button31', $_POST)) {
        $exec= "echo '" . KEY31[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button32', $_POST)) {
        $exec= "echo '" . KEY32[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button33', $_POST)) {
        $exec= "echo '" . KEY33[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button34', $_POST)) {
        $exec= "echo '" . KEY34[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button35', $_POST)) {
        $exec= "echo '" . KEY35[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button36', $_POST)) {
        $exec= "echo '" . KEY36[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button37', $_POST)) {
        $exec= "echo '" . KEY37[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button38', $_POST)) {
        $exec= "echo '" . KEY38[1] . "' > /tmp/dtmf_svx";
            exec($exec,$output);
            echo "<meta http-equiv='refresh' content='0'>";
        }
 if(array_key_exists('button39', $_POST)) {
        $exec= "echo '" . KEY39[1] . "' > /tmp/dtmf_svx";
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
        <button class=<?php echo KEY30[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button30"><?php echo KEY30[0] ?></button>
        <button class=<?php echo KEY31[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button31"><?php echo KEY31[0] ?></button>
        <button class=<?php echo KEY32[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button32"><?php echo KEY32[0] ?></button><br>
        <button class=<?php echo KEY33[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button33"><?php echo KEY33[0] ?></button>
        <button class=<?php echo KEY34[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button34"><?php echo KEY34[0] ?></button>
        <button class=<?php echo KEY35[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button35"><?php echo KEY35[0] ?></button><br>
        <button class=<?php echo KEY36[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button36"><?php echo KEY36[0] ?></button>
        <button class=<?php echo KEY37[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button37"><?php echo KEY37[0] ?></button>
        <button class=<?php echo KEY38[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button38"><?php echo KEY38[0] ?></button><br>
        <button class=<?php echo KEY39[2] ?> style="height: 60px; width: 130px;font-size:16px;" button name="button39"><?php echo KEY39[0] ?></button>
   </center>
    </form>
</form>
</div>
<?php
}
?>
