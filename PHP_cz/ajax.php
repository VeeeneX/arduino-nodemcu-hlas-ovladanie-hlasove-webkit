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
    echo "Prázdne pole nezapíšu :-)!";
    exit();
	
  }elseif(strlen($preklad) > 50){
    echo "Příliš dlouhé slovo!!";
	 exit();
  }else{
    
            if ($preklad=="Zapni" || $preklad=="Zapnout" || $preklad=="zapni" || $preklad=="zapnout"){
     
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnout" || $preklad=="vypni" || $preklad=="vypnout"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }
     }
?>
