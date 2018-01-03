<?php 
// Author: Martin Chlebovec alias: martinius96
// Donate: https://www.paypal.me/Chlebovec 
// Personal website: https://arduino.php5.sk
// Email contact: martinius96@gmail.com
// Facebook contact: 100001242570317
// Use under LICENSE
   $translation = $_POST['translation'];
    $translation = htmlspecialchars($translation);
     $translation = trim( $translation );
     if($translation == ""){
    echo "I cannot write empty field!";
  }elseif(strlen($translation) > 50){
    echo "Your string is too long!";
  }else{
   

    
                   if ($translation=="turn on light" || $translation=="Turn on light" || $translation=="Turn on led" || $translation=="Turn on let" || $translation=="Turn on LED" || $translation=="turn on LED" || $translation=="turn on let" || $translation=="turn on led"){
          //translate multiple options of voice to one variable that we compare with NodeMCU
      file_put_contents("translations.txt", 'Turn on light');
     }else if($translation=="turn off light" || $translation=="Turn off light" || $translation=="Turn off led" || $translation=="Turn off let" || $translation=="Turn off LED" || $translation=="turn off LED" || $translation=="turn off let" || $translation=="turn off led"){
          //translate multiple options of voice to one variable that we compare with NodeMCU
               file_put_contents("translations.txt", 'Turn off light');
     }
     }
     
?>
