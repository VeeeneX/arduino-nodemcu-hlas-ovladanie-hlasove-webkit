<?php 
// Autor: Martin Chlebovec alias: martinius96
// Podpora: https://www.paypal.me/Chlebovec
// Osobný web: https://arduino.php5.sk
// Email kontakt: martinius96@gmail.com
// Facebook kontakt: 100001242570317
// Používajte v súhade s licenciou!
   $preklad = $_POST['preklad'];
   $preklad = htmlspecialchars($preklad);
     $preklad = trim( $preklad );
     if($preklad == ""){
    echo "Prázdne pole ťažko zapíšem :-)!";
    exit();
	
  }elseif(strlen($preklad) > 50){
    echo "Příliš dlhé slovo/spojenie!";
	 exit();
  }else{
    
            if ($preklad=="Zapni" || $preklad=="Zapnúť"){
     
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnúť"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }
     }
?>
