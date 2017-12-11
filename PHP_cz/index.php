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
   

    
           if ($preklad=="Zapni LED1" || $preklad=="Zapni LED 1" || $preklad=="Zapni led 1" || $preklad=="Zapni led1" || $preklad=="Zapni let1" || $preklad=="Zapni let 1" || $preklad=="Zapni ledku1" || $preklad=="Zapni ledku 1" || $preklad=="Zapni letku1" || $preklad=="Zapni letku 1" || $preklad=="Zapnout LED1" || $preklad=="Zapnout LED 1" || $preklad=="Zapnout led 1" || $preklad=="Zapnout led1" || $preklad=="Zapnout let1" || $preklad=="Zapnout let 1" || $preklad=="Zapnout ledku1" || $preklad=="Zapnout ledku 1" || $preklad=="Zapnout letku1" || $preklad=="Zapnout letku 1"){
     
      file_put_contents("preklady.txt", 'Zapni LED 1');
     }else if ($preklad=="Zapni LED2" || $preklad=="Zapni LED 2" || $preklad=="Zapni led 2" || $preklad=="Zapni led2" || $preklad=="Zapni let2" || $preklad=="Zapni let 2" || $preklad=="Zapni ledku2" || $preklad=="Zapni ledku 2" || $preklad=="Zapni letku2" || $preklad=="Zapni letku 2" || $preklad=="Zapnout LED2" || $preklad=="Zapnout LED 2" || $preklad=="Zapnout led 2" || $preklad=="Zapnout led2" || $preklad=="Zapnout let2" || $preklad=="Zapnout let 2" || $preklad=="Zapnout ledku2" || $preklad=="Zapnout ledku 2" || $preklad=="Zapnout letku2" || $preklad=="Zapnout letku 2"){
          
      file_put_contents("preklady.txt", 'Zapni LED 2');
     }else if ($preklad=="Zapni LED3" || $preklad=="Zapni LED 3" || $preklad=="Zapni led 3" || $preklad=="Zapni led3" || $preklad=="Zapni let3" || $preklad=="Zapni let 3" || $preklad=="Zapni ledku3" || $preklad=="Zapni ledku 3" || $preklad=="Zapni letku3" || $preklad=="Zapni letku 3" || $preklad=="Zapnout LED3" || $preklad=="Zapnout LED 3" || $preklad=="Zapnout led 3" || $preklad=="Zapnout led3" || $preklad=="Zapnout let3" || $preklad=="Zapnout let 3" || $preklad=="Zapnout ledku3" || $preklad=="Zapnout ledku 3" || $preklad=="Zapnout letku3" || $preklad=="Zapnout letku 3"){
       
      file_put_contents("preklady.txt", 'Zapni LED 3');
     }else if ($preklad=="Zapni LED4" || $preklad=="Zapni LED 4" || $preklad=="Zapni led 4" || $preklad=="Zapni led4" || $preklad=="Zapni let4" || $preklad=="Zapni let 4" || $preklad=="Zapni ledku4" || $preklad=="Zapni ledku 4" || $preklad=="Zapni letku4" || $preklad=="Zapni letku 4" || $preklad=="Zapnout LED4" || $preklad=="Zapnout LED 4" || $preklad=="Zapnout led 4" || $preklad=="Zapnout led4" || $preklad=="Zapnout let4" || $preklad=="Zapnout let 4" || $preklad=="Zapnout ledku4" || $preklad=="Zapnout ledku 4" || $preklad=="Zapnout letku4" || $preklad=="Zapnout letku 4"){
             
      file_put_contents("preklady.txt", 'Zapni LED 4');
     }else if ($preklad=="Vypni LED1" || $preklad=="Vypni LED 1" || $preklad=="Vypni led 1" || $preklad=="Vypni led1" || $preklad=="Vypni let1" || $preklad=="Vypni let 1" || $preklad=="Vypni ledku1" || $preklad=="Vypni ledku 1" || $preklad=="Vypni letku1" || $preklad=="Vypni letku 1" || $preklad=="Vypnout LED1" || $preklad=="Vypnout LED 1" || $preklad=="Vypnout led 1" || $preklad=="Vypnout led1" || $preklad=="Vypnout let1" || $preklad=="Vypnout let 1" || $preklad=="Vypnout ledku1" || $preklad=="Vypnout ledku 1" || $preklad=="Vypnout letku1" || $preklad=="Vypnout letku 1"){
     
      file_put_contents("preklady.txt", 'Vypni LED 1');
     }else if ($preklad=="Vypni LED2" || $preklad=="Vypni LED 2" || $preklad=="Vypni led 2" || $preklad=="Vypni led2" || $preklad=="Vypni let2" || $preklad=="Vypni let 2" || $preklad=="Vypni ledku2" || $preklad=="Vypni ledku 2" || $preklad=="Vypni letku2" || $preklad=="Vypni letku 2" || $preklad=="Vypnout LED2" || $preklad=="Vypnout LED 2" || $preklad=="Vypnout led 2" || $preklad=="Vypnout led2" || $preklad=="Vypnout let2" || $preklad=="Vypnout let 2" || $preklad=="Vypnout ledku2" || $preklad=="Vypnout ledku 2" || $preklad=="Vypnout letku2" || $preklad=="Vypnout letku 2"){
          
      file_put_contents("preklady.txt", 'Vypni LED 2');
     }else if ($preklad=="Vypni LED3" || $preklad=="Vypni LED 3" || $preklad=="Vypni led 3" || $preklad=="Vypni led3" || $preklad=="Vypni let3" || $preklad=="Vypni let 3" || $preklad=="Vypni ledku3" || $preklad=="Vypni ledku 3" || $preklad=="Vypni letku3" || $preklad=="Vypni letku 3" || $preklad=="Vypnout LED3" || $preklad=="Vypnout LED 3" || $preklad=="Vypnout led 3" || $preklad=="Vypnout led3" || $preklad=="Vypnout let3" || $preklad=="Vypnout let 3" || $preklad=="Vypnout ledku3" || $preklad=="Vypnout ledku 3" || $preklad=="Vypnout letku3" || $preklad=="Vypnout letku 3"){
       
      file_put_contents("preklady.txt", 'Vypni LED 3');
     }else if ($preklad=="Vypni LED4" || $preklad=="Vypni LED 4" || $preklad=="Vypni led 4" || $preklad=="Vypni led4" || $preklad=="Vypni let4" || $preklad=="Vypni let 4" || $preklad=="Vypni ledku4" || $preklad=="Vypni ledku 4" || $preklad=="Vypni letku4" || $preklad=="Vypni letku 4" || $preklad=="Vypnout LED4" || $preklad=="Vypnout LED 4" || $preklad=="Vypnout led 4" || $preklad=="Vypnout led4" || $preklad=="Vypnout let4" || $preklad=="Vypnout let 4" || $preklad=="Vypnout ledku4" || $preklad=="Vypnout ledku 4" || $preklad=="Vypnout letku4" || $preklad=="Vypnout letku 4"){
             
      file_put_contents("preklady.txt", 'Vypni LED 4');
     }else if ($preklad=="Zapni" || $preklad=="Zapnout" ||  $preklad=="Zapni všechno" || $preklad=="Zapnout všechno" || $preklad=="Zapni vše" || $preklad=="Zapnout vše"){
             
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnout" || $preklad=="Vypni všechno" || $preklad=="Vypnout všechno" || $preklad=="Vypnout vše" || $preklad=="Vypni vše"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }     }
?>
