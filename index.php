<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 01.08.2016
 * Time: 14:44
 */
include("conf.php");
include("TeamSpeak3/TeamSpeak3.php");
//var_dump($groups);

//Verbindung
$ts = TeamSpeak3::factory("serverquery://" . $username . ":" . $password . "@" . $ip . ":" . $queryport . "/?server_port=" . $port . "&username=" .$tsname. "");
//Verbindung

$servergroup = $ts->servergroupList(array("type" => 1));


?><?php

if(isset($_POST["absenden"])){
    if(!in_array($_POST['group'], $disallowed)){
        try {
            $ts->clientGetByUid(htmlspecialchars($_POST['uid']))->addServerGroup(htmlspecialchars($_POST['group']));

        } catch(Exception $e) {
            echo "Stimmt die UID ?, denn der Server sagt du bist offline";
        }
    }else{
        echo "Diese Servergruppe ist nicht zur Vergabe bestimmt";
    }
}

?>

<form method="POST">
    <p>Teamspeak UID:</p>
    <input type="text" name="uid" required placeholder="UID">
    <p>Teamspeak Gruppe</p>
    <select name="group">
        <?php

        foreach($servergroup as $sg){
            if(!in_array($sg->sgid, $groups)) continue;
            echo "<option name='".$sg->name."' value='".$sg->sgid."'>".$sg->name."</option> ";
        }

        ?>
    </select>
    <br><br>
    <button type="submit" name="absenden">Absenden</button>
</form>
