<!--Autor: Martin Chlebovec alias: martinius96-->
<!--Podpora: https://www.paypal.me/Chlebovec-->
<!--Osobný web: https://arduino.php5.sk-->
<!--Email kontakt: martinius96@gmail.com-->
<!--Facebook kontakt: 100001242570317-->
<!--Používajte v súhade s licenciou!-->
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<div class="login">
    <form id="labnol" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    	<input type="text" name="preklad" id="transcript" placeholder="Pro textovou požadavku hlasem klikněte na pole" />
      <img onclick="startDictation();" src="decibel.png" alt="Pro požadavku hlasem klikněte na mikrofon">
         <input type="submit" name="submit" value="Odeslat textovou požadavku">
         <center><a href="preklady.txt"><font color="white">Aktuální obsah .txt souboru</font></a></center>
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

            recognition.lang = "cs-CZ";
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
    echo "Prázdne pole těžko zapíšu :-)!";
  }elseif(strlen($preklad) > 50){
    echo "Tvá požadavka je příliš dlouha!";
  }else{
   

    
          if ($preklad=="Zapni" || $preklad=="Zapnout"){
     
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnout"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }
     }
}
?>
