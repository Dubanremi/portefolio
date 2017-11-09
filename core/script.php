<?php

function ip(){
  echo '<p>';
  for ($i=0;$i<9;$i++){
    $result[]=exec('ping -c 1 10.216.0.11'.$i);
  }
  for($e=0;$e<9;$e++){
    if ($result[$e]!=NULL){
      echo "l'adresse 10.216.0.11".$e." existe\n";
    }
  }
  echo '</p>';
}
function tfb(){
    $lettre = array('a','z','e','r','t','y','u','i','o','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n');
    $code = "";
    $ArrayCode=[];

    $Vcode = "rd";
    $n = strlen($Vcode);
    $poss = pow(26,$n);
    echo '<p>';
    while ($code != $Vcode) {

        $code = "";
        for ($i=0; $i < $n; $i++) {
            $Rforce = array_rand($lettre);
            $code .= $lettre[$Rforce];
        }
        if(!in_array($code , $ArrayCode)){
            array_unshift($ArrayCode, $code );
        }
        echo ' '.$code;
    }
    echo '</p>';
    echo '<p> Il y a '.$poss.' possibilités !   </p>';
    echo '<p>le mot de passe est : '.$code.'</p>';
}
