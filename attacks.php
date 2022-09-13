<?php

function encrypt_decrypt($action, $string)
{
    /* =================================================
     * ENCRYPTION-DECRYPTION
     * =================================================
     * ENCRYPTION: encrypt_decrypt('encrypt', $string);
     * DECRYPTION: encrypt_decrypt('decrypt', $string) ;
     */
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'bdsjHDBS4564dsDS';
    $secret_iv = 'fdhsbhS788Sd1sad4S';
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    } else {
        if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
    }
    return $output;
}

session_start();
$xml = file_get_contents('php://input');
@libxml_disable_entity_loader(false);
$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT);
$attackLaunch = array();
$attackLaunch = $dom->getElementsByTagName('attack');

$myfile = fopen("attacks.xml", "r") or die("Unable to open file!");
$content = fread($myfile,filesize("attacks.xml"));
echo $content;

$cipher = encrypt_decrypt('encrypt', $content);
echo $cipher;


fclose($myfile);

if(count($attackLaunch) == 1) {
    
    $attackName = $attackLaunch[0]->nodeValue;
    $attacks = simplexml_load_file('attacks.xml');

    foreach($attacks as $attack){
        $name = (string) $attack->name;

        if ($name == $attackName) {
            $power = (string) $attack->power;
            if($power == "10000"){
                echo "Congratulations, you vanquished the romans! The flag is CTF{}";
                exit();
            } else {
                echo "Ouch, the attack is not strong enough, you need more than  " . $power . "‰ power.";
                exit();
            }
        }
    }
    echo "Oh no, the attack " . $attackName . " is not in the attacks file...";
    exit();
} else{
   echo "Only one attack at a time is permitted ! Received payload contains more than one attack : ";
   echo $dom->textContent;
   exit();
}


?>