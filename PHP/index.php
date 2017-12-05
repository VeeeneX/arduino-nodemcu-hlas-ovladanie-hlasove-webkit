<link rel="stylesheet" type="text/css" href="stylesheet.css">
<div class="login">
    <form id="labnol" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
     if($preklad == ""){
    echo "Prázdne pole ťažko zapíšem :-)!";
  }elseif(strlen($preklad) > 50){
    echo "Tvoja požiadavka je príliš dlhá!";
  }else{
    $preklad = htmlspecialchars($preklad);
     $preklad = trim( $preklad );
     if ($preklad=="Zapni LED1" || $preklad=="Zapni LED 1" || $preklad=="Zopni LED 1" || $preklad=="Zopni led 1" || $preklad=="Zapni led 1" || $preklad=="Zapni led1" ){
      $preklad=="Zapni LED 1";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Zapni LED2" || $preklad=="Zapni LED 2" || $preklad=="Zopni LED 2" || $preklad=="Zopni led 2" || $preklad=="Zapni led 2" || $preklad=="Zapni led2"){
          $preklad=="Zapni LED 2";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Zapni LED3" || $preklad=="Zapni LED 3" || $preklad=="Zopni LED 2" || $preklad=="Zopni led 3" || $preklad=="Zapni led 3" || $preklad=="Zapni led3"){
            $preklad=="Zapni LED 3";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Zapni LED4" || $preklad=="Zapni LED 4" || $preklad=="Zopni LED 4" || $preklad=="Zopni led 4" || $preklad=="Zapni led 4" || $preklad=="Zapni led4"){
              $preklad=="Zapni LED 4";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Vypni LED1" || $preklad=="Vypni LED 1" || $preklad=="Vypni led 1" || $preklad=="Vypni led1"){
      $preklad=="Vypni LED 1";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Vypni LED2" || $preklad=="Vypni LED 2" ||  $preklad=="Vypni led 2" || $preklad=="Vypni led2"){
          $preklad=="Vypni LED 2";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Vypni LED3" || $preklad=="Vypni LED 3" ||  $preklad=="Vypni led 3" || $preklad=="Vypni led3"){
            $preklad=="Vypni LED 3";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Vypni LED4" || $preklad=="Vypni LED 4"  || $preklad=="Vypni led 4" || $preklad=="Vypni led4"){
              $preklad=="Vypni LED 4";
      file_put_contents("preklady.txt", $preklad);
     }else if ($preklad=="Zapni" || $preklad=="Zepni" || $preklad=="Zopni" || $preklad=="Zapni všetko" || $preklad=="Zapni diody" || $preklad=="Spusť diody"){
              $preklad=="Zapni";
      file_put_contents("preklady.txt", $preklad);
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnúť" || $preklad=="Vypni všetko" || $preklad=="Vypni diódy"){
              $preklad=="Vypni";
      file_put_contents("preklady.txt", $preklad);
     }else{
     $myfile = fopen("neuspesnypreklad.txt", "wr") or die("Nepodarilo sa otvoriť súbor!");
$txt = $preklad;
fwrite($myfile, $txt);
fclose($myfile);
     }

}     }
?>
