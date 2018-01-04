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
    
           if ($preklad=="zapni LED1" || $preklad=="zapni LED 1" || $preklad=="zapni led 1" || $preklad=="zapni led1" || $preklad=="zapni let1" || $preklad=="zapni let 1" || $preklad=="zapni ledku1" || $preklad=="zapni ledku 1" || $preklad=="zapni letku1" || $preklad=="zapni letku 1" || $preklad=="zapnout LED1" || $preklad=="zapnout LED 1" || $preklad=="zapnout led 1" || $preklad=="zapnout led1" || $preklad=="zapnout let1" || $preklad=="zapnout let 1" || $preklad=="zapnout ledku1" || $preklad=="zapnout ledku 1" || $preklad=="zapnout letku1" || $preklad=="zapnout letku 1"){
     
      file_put_contents("preklady.txt", 'Zapni LED 1');
     }else if ($preklad=="zapni LED2" || $preklad=="zapni LED 2" || $preklad=="zapni led 2" || $preklad=="zapni led2" || $preklad=="zapni let2" || $preklad=="zapni let 2" || $preklad=="zapni ledku2" || $preklad=="zapni ledku 2" || $preklad=="zapni letku2" || $preklad=="zapni letku 2" || $preklad=="zapnout LED2" || $preklad=="zapnout LED 2" || $preklad=="zapnout led 2" || $preklad=="zapnout led2" || $preklad=="zapnout let2" || $preklad=="zapnout let 2" || $preklad=="zapnout ledku2" || $preklad=="zapnout ledku 2" || $preklad=="zapnout letku2" || $preklad=="zapnout letku 2"){
          
      file_put_contents("preklady.txt", 'Zapni LED 2');
     }else if ($preklad=="zapni LED3" || $preklad=="zapni LED 3" || $preklad=="zapni led 3" || $preklad=="zapni led3" || $preklad=="zapni let3" || $preklad=="zapni let 3" || $preklad=="zapni ledku3" || $preklad=="zapni ledku 3" || $preklad=="zapni letku3" || $preklad=="zapni letku 3" || $preklad=="zapnout LED3" || $preklad=="zapnout LED 3" || $preklad=="zapnout led 3" || $preklad=="zapnout led3" || $preklad=="zapnout let3" || $preklad=="zapnout let 3" || $preklad=="zapnout ledku3" || $preklad=="zapnout ledku 3" || $preklad=="zapnout letku3" || $preklad=="zapnout letku 3"){
       
      file_put_contents("preklady.txt", 'Zapni LED 3');
     }else if ($preklad=="zapni LED4" || $preklad=="zapni LED 4" || $preklad=="zapni led 4" || $preklad=="zapni led4" || $preklad=="zapni let4" || $preklad=="zapni let 4" || $preklad=="zapni ledku4" || $preklad=="zapni ledku 4" || $preklad=="zapni letku4" || $preklad=="zapni letku 4" || $preklad=="zapnout LED4" || $preklad=="zapnout LED 4" || $preklad=="zapnout led 4" || $preklad=="zapnout led4" || $preklad=="zapnout let4" || $preklad=="zapnout let 4" || $preklad=="zapnout ledku4" || $preklad=="zapnout ledku 4" || $preklad=="zapnout letku4" || $preklad=="zapnout letku 4"){
             
      file_put_contents("preklady.txt", 'Zapni LED 4');
     }else if ($preklad=="vypni LED1" || $preklad=="vypni LED 1" || $preklad=="vypni led 1" || $preklad=="vypni led1" || $preklad=="vypni let1" || $preklad=="vypni let 1" || $preklad=="vypni ledku1" || $preklad=="vypni ledku 1" || $preklad=="vypni letku1" || $preklad=="vypni letku 1" || $preklad=="vypnout LED1" || $preklad=="vypnout LED 1" || $preklad=="vypnout led 1" || $preklad=="vypnout led1" || $preklad=="vypnout let1" || $preklad=="vypnout let 1" || $preklad=="vypnout ledku1" || $preklad=="vypnout ledku 1" || $preklad=="vypnout letku1" || $preklad=="vypnout letku 1"){
     
      file_put_contents("preklady.txt", 'Vypni LED 1');
     }else if ($preklad=="vypni LED2" || $preklad=="vypni LED 2" || $preklad=="vypni led 2" || $preklad=="vypni led2" || $preklad=="vypni let2" || $preklad=="vypni let 2" || $preklad=="vypni ledku2" || $preklad=="vypni ledku 2" || $preklad=="vypni letku2" || $preklad=="vypni letku 2" || $preklad=="vypnout LED2" || $preklad=="vypnout LED 2" || $preklad=="vypnout led 2" || $preklad=="vypnout led2" || $preklad=="vypnout let2" || $preklad=="vypnout let 2" || $preklad=="vypnout ledku2" || $preklad=="vypnout ledku 2" || $preklad=="vypnout letku2" || $preklad=="vypnout letku 2"){
          
      file_put_contents("preklady.txt", 'Vypni LED 2');
     }else if ($preklad=="vypni LED3" || $preklad=="vypni LED 3" || $preklad=="vypni led 3" || $preklad=="vypni led3" || $preklad=="vypni let3" || $preklad=="vypni let 3" || $preklad=="vypni ledku3" || $preklad=="vypni ledku 3" || $preklad=="vypni letku3" || $preklad=="vypni letku 3" || $preklad=="vypnout LED3" || $preklad=="vypnout LED 3" || $preklad=="vypnout led 3" || $preklad=="vypnout led3" || $preklad=="vypnout let3" || $preklad=="vypnout let 3" || $preklad=="vypnout ledku3" || $preklad=="vypnout ledku 3" || $preklad=="vypnout letku3" || $preklad=="vypnout letku 3"){
       
      file_put_contents("preklady.txt", 'Vypni LED 3');
     }else if ($preklad=="vypni LED4" || $preklad=="vypni LED 4" || $preklad=="vypni led 4" || $preklad=="vypni led4" || $preklad=="vypni let4" || $preklad=="vypni let 4" || $preklad=="vypni ledku4" || $preklad=="vypni ledku 4" || $preklad=="vypni letku4" || $preklad=="vypni letku 4" || $preklad=="vypnout LED4" || $preklad=="vypnout LED 4" || $preklad=="vypnout led 4" || $preklad=="vypnout led4" || $preklad=="vypnout let4" || $preklad=="vypnout let 4" || $preklad=="vypnout ledku4" || $preklad=="vypnout ledku 4" || $preklad=="vypnout letku4" || $preklad=="vypnout letku 4"){
             
      file_put_contents("preklady.txt", 'Vypni LED 4');
     }else if ($preklad=="zapni" || $preklad=="zapnout" ||  $preklad=="zapni všechno" || $preklad=="zapnout všechno" || $preklad=="zapni vše" || $preklad=="zapnout vše"){
             
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="vypni" || $preklad=="vypnout" || $preklad=="vypni všechno" || $preklad=="vypnout všechno" || $preklad=="vypnout vše" || $preklad=="vypni vše"){
              
      file_put_contents("preklady.txt", 'Vypni');
     }
     }
?>
