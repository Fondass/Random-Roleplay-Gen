<?php

class Character
{
    
    var $genre = array();
    var $name;    
    
    function __construct($char_name, $genre1, $genre2 = '', $genre3 = '', $genre4 = '', $genre5 = '', $genre6 = '', $genre7 = '')
    {
        $this->name = $char_name;
        
        // Switch to make sure right amount of genres are assigned to each char
        // without producing errors for missing parameters.
        // and assigns them to the $genre array.
      
        $i = 1;
        switch ($i)      
        {
            case 1:
                if ($genre1 !== '')
                {
                    $this->genre[0] = $genre1;
                    $i++;
                }
                else
                {
                    break;
                }
            case 2:
                if ($genre2 !== '')
                {
                    $this->genre[1] = $genre2;
                    $i++;
                }
                else
                {
                    break;
                }
            case 3:
                if ($genre3 !== '')
                {
                    $this->genre[2] = $genre3;
                    $i++;
                }
                else
                {
                    break;
                }
            case 4:
                if ($genre4 !== '')
                {
                    $this->genre[3] = $genre4;
                    $i++;
                }
                else
                {
                    break;
                }   
            case 5:
                if ($genre5 !== '')
                {
                    $this->genre[4] = $genre5;
                    $i++;
                }
                else
                {
                    break;
                }
            case 6:
                if ($genre6 !== '')
                {
                    $this->genre[5] = $genre6;
                    $i++;
                }
                else
                {
                    break;
                }
            case 7:
                if ($genre7 !== '')
                {
                    $this->genre[6] = $genre7;
                    $i++;
                    break;
                }
                else
                {
                    break;
                }
            default:
                break;
                
        }
             
            echo $this->name;
            echo ' ' . $this->genre[0];
            
            if ($genre2 !== '')
            {
                echo ' ' . $this->genre[1];
            }
            
            if ($genre3 !== '')
            {
               echo ' ' . $this->genre[2]; 
            }
            
   
            if ($genre4 !== '')
            {
                echo ' ' . $this->genre[3];
            }
            
            echo '<br>';
       
        }
        
}
        
        
        

    
    
  
