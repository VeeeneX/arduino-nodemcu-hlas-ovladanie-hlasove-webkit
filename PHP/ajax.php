<?php 
    $preklad = $_POST['preklad'];
     if($preklad == ""){
    echo "Prázdne pole ťažko zapíšem :-)!";
  }elseif(strlen($preklad) > 50){
    echo "Tvoja požiadavka je príliš dlhá!";
  }else{
    $preklad = htmlspecialchars( $preklad);
     $preklad = trim( $preklad );
    file_put_contents("preklady.txt", $preklad); }

?>