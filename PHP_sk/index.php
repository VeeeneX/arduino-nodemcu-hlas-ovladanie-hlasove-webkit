<!--Autor: Martin Chlebovec alias: martinius96-->
<!--Podpora: https://www.paypal.me/Chlebovec-->
<!--Osobný web: https://arduino.php5.sk-->
<!--Email kontakt: martinius96@gmail.com-->
<!--Facebook kontakt: 100001242570317-->
<!--Používajte v súhade s licenciou!-->
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<div class="login">
    <form id="labnol" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    	<input type="text" name="preklad" id="transcript" placeholder="Pre textovú požiadavku kliknite na pole" />
      <img onclick="startDictation();" src="decibel.png" alt="Pre požiadavku hlasom kliknite na mikrofón!">
         <input type="submit" name="submit" value="Odoslať textovú požiadavku">
         <center><a href="preklady.txt"><font color="white">Aktuálny obsah .txt súboru</font></a></center>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function startDictation() {

        if (window.hasOwnProperty('webkitSpeechRecognition')) {

            var recognition = new webkitSpeechRecognition();
            var result = '';

            recognition.continuous = false;
            recognition.interimResults = false;

            recognition.lang = "sk-SK";
            recognition.start();

            recognition.onresult = function(e) {
                result = e.results[0][0].transcript;

                $.post(
                    "ajax.php",
                    { preklad: result }
                );

                recognition.stop();
            };

            recognition.onerror = function(e) {
                recognition.stop();
            }

        }
    }
</script>
<?php if(isset($_POST['submit'])){   
     $preklad = $_POST['preklad'];
    $preklad = htmlspecialchars($preklad);
     $preklad = trim( $preklad );
     if($preklad == ""){
    echo "Prázdne pole ťažko zapíšem :-)!";
  }elseif(strlen($preklad) > 50){
    echo "Tvoja požiadavka je príliš dlhá!";
  }else{
   

    
           if ($preklad=="Zapni LED1" || $preklad=="Zapni LED 1" || $preklad=="Zapni led 1" || $preklad=="Zapni led1" || $preklad=="Zapni let1" || $preklad=="Zapni let 1" || $preklad=="Zapni ledku1" || $preklad=="Zapni ledku 1" || $preklad=="Zapni letku1" || $preklad=="Zapni letku 1" || $preklad=="Zapnúť LED1" || $preklad=="Zapnúť LED 1" || $preklad=="Zapnúť led 1" || $preklad=="Zapnúť led1" || $preklad=="Zapnúť let1" || $preklad=="Zapnúť let 1" || $preklad=="Zapnúť ledku1" || $preklad=="Zapnúť ledku 1" || $preklad=="Zapnúť letku1" || $preklad=="Zapnúť letku 1"){
     
      file_put_contents("preklady.txt", 'Zapni LED 1');
     }else if ($preklad=="Zapni LED2" || $preklad=="Zapni LED 2" || $preklad=="Zapni led 2" || $preklad=="Zapni led2" || $preklad=="Zapni let2" || $preklad=="Zapni let 2" || $preklad=="Zapni ledku2" || $preklad=="Zapni ledku 2" || $preklad=="Zapni letku2" || $preklad=="Zapni letku 2" || $preklad=="Zapnúť LED2" || $preklad=="Zapnúť LED 2" || $preklad=="Zapnúť led 2" || $preklad=="Zapnúť led2" || $preklad=="Zapnúť let2" || $preklad=="Zapnúť let 2" || $preklad=="Zapnúť ledku2" || $preklad=="Zapnúť ledku 2" || $preklad=="Zapnúť letku2" || $preklad=="Zapnúť letku 2"){
          
      file_put_contents("preklady.txt", 'Zapni LED 2');
     }else if ($preklad=="Zapni LED3" || $preklad=="Zapni LED 3" || $preklad=="Zapni led 3" || $preklad=="Zapni led3" || $preklad=="Zapni let3" || $preklad=="Zapni let 3" || $preklad=="Zapni ledku3" || $preklad=="Zapni ledku 3" || $preklad=="Zapni letku3" || $preklad=="Zapni letku 3" || $preklad=="Zapnúť LED3" || $preklad=="Zapnúť LED 3" || $preklad=="Zapnúť led 3" || $preklad=="Zapnúť led3" || $preklad=="Zapnúť let3" || $preklad=="Zapnúť let 3" || $preklad=="Zapnúť ledku3" || $preklad=="Zapnúť ledku 3" || $preklad=="Zapnúť letku3" || $preklad=="Zapnúť letku 3"){
       
      file_put_contents("preklady.txt", 'Zapni LED 3');
     }else if ($preklad=="Zapni LED4" || $preklad=="Zapni LED 4" || $preklad=="Zapni led 4" || $preklad=="Zapni led4" || $preklad=="Zapni let4" || $preklad=="Zapni let 4" || $preklad=="Zapni ledku4" || $preklad=="Zapni ledku 4" || $preklad=="Zapni letku4" || $preklad=="Zapni letku 4" || $preklad=="Zapnúť LED4" || $preklad=="Zapnúť LED 4" || $preklad=="Zapnúť led 4" || $preklad=="Zapnúť led4" || $preklad=="Zapnúť let4" || $preklad=="Zapnúť let 4" || $preklad=="Zapnúť ledku4" || $preklad=="Zapnúť ledku 4" || $preklad=="Zapnúť letku4" || $preklad=="Zapnúť letku 4"){
             
      file_put_contents("preklady.txt", 'Zapni LED 4');
     }else if ($preklad=="Vypni LED1" || $preklad=="Vypni LED 1" || $preklad=="Vypni led 1" || $preklad=="Vypni led1" || $preklad=="Vypni let1" || $preklad=="Vypni let 1" || $preklad=="Vypni ledku1" || $preklad=="Vypni ledku 1" || $preklad=="Vypni letku1" || $preklad=="Vypni letku 1" || $preklad=="Vypnúť LED1" || $preklad=="Vypnúť LED 1" || $preklad=="Vypnúť led 1" || $preklad=="Vypnúť led1" || $preklad=="Vypnúť let1" || $preklad=="Vypnúť let 1" || $preklad=="Vypnúť ledku1" || $preklad=="Vypnúť ledku 1" || $preklad=="Vypnúť letku1" || $preklad=="Vypnúť letku 1"){
     
      file_put_contents("preklady.txt", 'Vypni LED 1');
     }else if ($preklad=="Vypni LED2" || $preklad=="Vypni LED 2" || $preklad=="Vypni led 2" || $preklad=="Vypni led2" || $preklad=="Vypni let2" || $preklad=="Vypni let 2" || $preklad=="Vypni ledku2" || $preklad=="Vypni ledku 2" || $preklad=="Vypni letku2" || $preklad=="Vypni letku 2" || $preklad=="Vypnúť LED2" || $preklad=="Vypnúť LED 2" || $preklad=="Vypnúť led 2" || $preklad=="Vypnúť led2" || $preklad=="Vypnúť let2" || $preklad=="Vypnúť let 2" || $preklad=="Vypnúť ledku2" || $preklad=="Vypnúť ledku 2" || $preklad=="Vypnúť letku2" || $preklad=="Vypnúť letku 2"){
          
      file_put_contents("preklady.txt", 'Vypni LED 2');
     }else if ($preklad=="Vypni LED3" || $preklad=="Vypni LED 3" || $preklad=="Vypni led 3" || $preklad=="Vypni led3" || $preklad=="Vypni let3" || $preklad=="Vypni let 3" || $preklad=="Vypni ledku3" || $preklad=="Vypni ledku 3" || $preklad=="Vypni letku3" || $preklad=="Vypni letku 3" || $preklad=="Vypnúť LED3" || $preklad=="Vypnúť LED 3" || $preklad=="Vypnúť led 3" || $preklad=="Vypnúť led3" || $preklad=="Vypnúť let3" || $preklad=="Vypnúť let 3" || $preklad=="Vypnúť ledku3" || $preklad=="Vypnúť ledku 3" || $preklad=="Vypnúť letku3" || $preklad=="Vypnúť letku 3"){
       
      file_put_contents("preklady.txt", 'Vypni LED 3');
     }else if ($preklad=="Vypni LED4" || $preklad=="Vypni LED 4" || $preklad=="Vypni led 4" || $preklad=="Vypni led4" || $preklad=="Vypni let4" || $preklad=="Vypni let 4" || $preklad=="Vypni ledku4" || $preklad=="Vypni ledku 4" || $preklad=="Vypni letku4" || $preklad=="Vypni letku 4" || $preklad=="Vypnúť LED4" || $preklad=="Vypnúť LED 4" || $preklad=="Vypnúť led 4" || $preklad=="Vypnúť led4" || $preklad=="Vypnúť let4" || $preklad=="Vypnúť let 4" || $preklad=="Vypnúť ledku4" || $preklad=="Vypnúť ledku 4" || $preklad=="Vypnúť letku4" || $preklad=="Vypnúť letku 4"){
             
      file_put_contents("preklady.txt", 'Vypni LED 4');
     }else if ($preklad=="Zapni" || $preklad=="Zapnúť" ||  $preklad=="Zapni všetko" || $preklad=="Zapnúť všetko"){
             
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnúť" || $preklad=="Vypni všetko" || $preklad=="Vypnúť všetko"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }
     }

     }
?>
