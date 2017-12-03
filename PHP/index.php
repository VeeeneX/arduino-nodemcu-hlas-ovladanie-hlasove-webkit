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
    file_put_contents("preklady.txt", $preklad); }

}?>