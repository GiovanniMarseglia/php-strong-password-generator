<?php
session_start();




function RandomPass($lunghezza)
{
    
    $chars='0123456789@#?!*-abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';


    $randomchar = '';

    for ($i = 0; $i < $lunghezza; $i++) {

        $value = rand(0, strlen($chars) - 1);
        $randomchar .= $chars[$value];

    }
   
    return $randomchar;
    

}


function RandomExstra($lunghezza){

    function numeri(){
        $num ='0123456789';
        $value = rand(0, strlen($num) - 1);
        $value = $num[$value];
        return $value;

    }
    
    function caratteri(){
        $char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
        $value = rand(0, strlen($char) - 1);
        $value = $char[$value];
        return $value;
    }
    
    
    function simboli(){
        $sim ='@#?!*-';
    
        $value = rand(0, strlen($sim) - 1);
        $value = $sim[$value];
        return $value;
    }


    $value= '';
    $provvisorio='';
    for ($i = 0; $i < $lunghezza; $i++) {
        $accesso = rand(0, 2);
        if($accesso == 0 && $_SESSION["num"]=='true'){

            $value .= numeri();
        }elseif($accesso == 1 && $_SESSION["char"]=='true'){
          
            $value .= caratteri();
          
        }elseif($accesso == 2 && $_SESSION["sim"]=='true'){
            $value .= simboli();
        }else{
            $i--;
        } 
        

    }
    
    
    return $value;

    

}


