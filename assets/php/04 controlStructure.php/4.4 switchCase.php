<?php
// অনেকগুলো শর্তের মধ্যে যেকোন একটি বাছায় করতে if ... elseif ..else। এর আপডেট হলো switch ..case

    /* syntax

    swithc(  ){
        case():
            echo" ";
            break;
        
    }
    */

    $score = 43;
        switch( $score ){
            case($score >= 80):
                echo"Your result is: A+";
                break;
            case( $score >= 60 ):
                echo"Your resul is: A";
                break;
            case( $score >= 50 ):
                echo"Your resul is: B";
                break;
            case( $score >= 40 ):
                echo"Your resul is: D";
                break;
            case( $score >= 33 ):
                echo"Your resul is: C";
                break;
            default:
                echo"Your resul is: Failed";
            
        }
        
    
  