<?php

session_start();
$xml = file_get_contents('php://input');
@libxml_disable_entity_loader(false);
$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT);
$attackLaunch = array();
$attackLaunch = $dom->getElementsByTagName('attack');

if(count($attackLaunch) == 1) {
    $attackName = $attackLaunch[0]->nodeValue;
    $attacks = simplexml_load_file('attacks.xml');
    foreach($attacks as $attack){
        $name = (string) $attack->name;
        if ($name == $attackName) {
            $power = (string) $attack->power;
            if($power == "10000"){
                echo "Congratulations, you vanquished the romans! The flag is CTF{Potion_is_54782_times_stronger_than_anything}";
                exit();
            } else {
                echo "Ouch, the attack is not strong enough, you need more than  " . $power . "‰ power.";
                exit();
            }
        }
    }
    echo "Oh no, the attack " . $attackName . " is not in the attacks file...";
    exit();
} else {
   echo "Only one attack at a time is permitted ! Received payload contains more than one attack : ";
   echo $dom->textContent;
   exit();
}
