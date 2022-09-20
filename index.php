<!DOCTYPE html>    
<html lang="en">    
        <head>    
                <title>Helping Asterix and Obelix</title> 
                <link rel="icon" type="image/x-icon" href="Panoramix.PNG">
                <link rel="stylesheet" type="text/css" href="styles.css">    
        </head>
        <header>
                <h1>Attacking Romans !</h1>
        </header>
        <body>
                <div class="show" id ="________________________">
                        <p>Asterix and Obelix are on their way to fight romans but they have very low energy... Could you give them some potion before looking for romans ? </p>
                        <img src="UnhappyAsterixObelix.png" alt="Picture of Asteric and Obelix unhappy">
                </div>
                <div class="hide" id ="_________________________">
                        <img src="HappyObelixAsterix.png" alt="Picture of Asteric and Obelix happy">
                        <p id = "_______________________"></p>
                        <button onclick="location.href = '/romans.php?coordinates=47.1197564,2.7452087'"> Find the romans ! </button>
                </div>
        </body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
<script>
        var _ = "24071507041d50011b1e4f19154f151b0a4e161a18054f01164f11070a1c17165a49264e180a151b0b4e02001908011d500e060c4f06190b10000109500111081d4e3c0a543f06021c0e130c4f29111a1806061d5003111d481d50081b491b06151d11494e";var __ = "895eefec6b26ad2ba71e8fb3645748f7"; function ___(________){ var __________ = ______(_); return _______(__________, ________); } function dmVyaWZ5(_________){ var ___________ = CryptoJS.MD5(_________).toString(); if(___________ == __) return 1; else return 0; } function c2hvd1Jlc3VsdA(_________){ _________ = ______(_________); document.getElementById("_______________________").innerHTML = _________; document.getElementById("_________________________").style.display = "block"; document.getElementById("________________________").style.display = "none"; } function _______(_______________, ________________) { var _________________ = ''; while (________________.length < _______________.length) {________________ += ________________; } for(var __________________=0; __________________<_______________.length; __________________++) {var ___________________ = _______________[__________________].charCodeAt(0); var ____________________ = ________________[__________________].charCodeAt(0); var _____________________ = ___________________ ^ ____________________; var ______________________ = _____________________.toString("16"); if (______________________.length < 2) { ______________________ = "0" + ______________________;} _________________ += ______________________; } return _________________; } function Z2l2ZQ(________){ _________ = ___(________); if(dmVyaWZ5(_________)) c2hvd1Jlc3VsdA(_________)} function ______(____________) { var _____________ = ____________.toString(); var ______________ = ''; for (var i = 0; i < _____________.length; i += 2) ______________ += String.fromCharCode(parseInt(_____________.substr(i, 2), 16)); return ______________;}
</script>
