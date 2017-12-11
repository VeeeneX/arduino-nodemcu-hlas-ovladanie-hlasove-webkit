<?php 
   $preklad = $_POST['preklad'];
   $preklad = htmlspecialchars($preklad);
     $preklad = trim( $preklad );
     if($preklad == ""){
    echo "Prázdne pole ťažko zapíšem :-)!";
    exit();
	 file_put_contents("preklady.txt", "Prazdny preklad");
  }elseif(strlen($prekklad) > 50){
    echo "Tvoja požiadavka je príliš dlhá!";
	 exit();
  }else{
    
     if ($preklad=="Zapni LED1" || $preklad=="Zapni LED 1" || $preklad=="Zapni led 1" || $preklad=="Zapni led1" || $preklad=="Zapni let1" || $preklad=="Zapni let 1" || $preklad=="Zapni ledku1" || $preklad=="Zapni ledku 1" || $preklad=="Zapni letku1" || $preklad=="Zapni letku 1"){
     
      file_put_contents("preklady.txt", 'Zapni LED 1');
     }else if ($preklad=="Zapni LED2" || $preklad=="Zapni LED 2" || $preklad=="Zapni led 2" || $preklad=="Zapni led2" || $preklad=="Zapni let2" || $preklad=="Zapni let 2" || $preklad=="Zapni ledku2" || $preklad=="Zapni ledku 2" || $preklad=="Zapni letku2" || $preklad=="Zapni letku 2"){
          
      file_put_contents("preklady.txt", 'Zapni LED 2');
     }else if ($preklad=="Zapni LED3" || $preklad=="Zapni LED 3" || $preklad=="Zapni led 3" || $preklad=="Zapni led3" || $preklad=="Zapni let3" || $preklad=="Zapni let 3" || $preklad=="Zapni ledku3" || $preklad=="Zapni ledku 3" || $preklad=="Zapni letku3" || $preklad=="Zapni letku 3"){
       
      file_put_contents("preklady.txt", 'Zapni LED 3');
     }else if ($preklad=="Zapni LED4" || $preklad=="Zapni LED 4" || $preklad=="Zapni led 4" || $preklad=="Zapni led4" || $preklad=="Zapni let4" || $preklad=="Zapni let 4" || $preklad=="Zapni ledku4" || $preklad=="Zapni ledku 4" || $preklad=="Zapni letku4" || $preklad=="Zapni letku 4"){
             
      file_put_contents("preklady.txt", 'Zapni LED 4');
     }else if ($preklad=="Vypni LED1" || $preklad=="Vypni LED 1" || $preklad=="Vypni led 1" || $preklad=="Vypni led1" || $preklad=="Vypni let1" || $preklad=="Vypni let 1" || $preklad=="Vypni ledku1" || $preklad=="Vypni ledku 1" || $preklad=="Vypni letku1" || $preklad=="Vypni letku 1"){
     
      file_put_contents("preklady.txt", 'Vypni LED 1');
     }else if ($preklad=="Vypni LED2" || $preklad=="Vypni LED 2" || $preklad=="Vypni led 2" || $preklad=="Vypni led2" || $preklad=="Vypni let2" || $preklad=="Vypni let 2" || $preklad=="Vypni ledku2" || $preklad=="Vypni ledku 2" || $preklad=="Vypni letku2" || $preklad=="Vypni letku 2"){
          
      file_put_contents("preklady.txt", 'Vypni LED 2');
     }else if ($preklad=="Vypni LED3" || $preklad=="Vypni LED 3" || $preklad=="Vypni led 3" || $preklad=="Vypni led3" || $preklad=="Vypni let3" || $preklad=="Vypni let 3" || $preklad=="Vypni ledku3" || $preklad=="Vypni ledku 3" || $preklad=="Vypni letku3" || $preklad=="Vypni letku 3"){
       
      file_put_contents("preklady.txt", 'Vypni LED 3');
     }else if ($preklad=="Vypni LED4" || $preklad=="Vypni LED 4" || $preklad=="Vypni led 4" || $preklad=="Vypni led4" || $preklad=="Vypni let4" || $preklad=="Vypni let 4" || $preklad=="Vypni ledku4" || $preklad=="Vypni ledku 4" || $preklad=="Vypni letku4" || $preklad=="Vypni letku 4"){
             
      file_put_contents("preklady.txt", 'Vypni LED 4');
     }else if ($preklad=="Zapni" || $preklad=="Zapni všetko" || $preklad=="Zapni diody"){
             
      file_put_contents("preklady.txt", 'Zapni');
     }
     else if ($preklad=="Vypni" || $preklad=="Vypnúť" || $preklad=="Vypni všetko" || $preklad=="Vypni diódy"){
              
      file_put_contents("preklady.txt", 'Vypni');}
     }

?>