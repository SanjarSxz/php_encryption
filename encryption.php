<?php
/**
 * Shifrovaniya
 *
 * @author Sanjar
 */
 
class encryption
{
   
    public function hsy_encode($string)
    { $resE="";  
        $string=(string)$string;
        $arEncode=array("<"=>"!7Yf",">"=>"!6Jv","?"=>"!4Lu","$"=>"!1Sk","`"=>"!7Wx","."=>"!9Yz",","=>"!9Oa",";"=>"!7Yw",":"=>"!9Op","("=>"!1Gr",")"=>"!1Jw",
                    "["=>"!6Hu","]"=>"!2Oh","{"=>"!2Ka","}"=>"!8Ct","="=>"!1Ce","_"=>"!2Kx","/"=>"!8Mb","-"=>"!7Jt","+"=>"!4Ln","!"=>"!5Gv","&"=>"!2Du",
                    "*"=>"!2Pc","!"=>"!1Ij","@"=>"!4Si"," "=>"!6Xh","|"=>"!0Bh","0"=>"!3Eg","1"=>"!6Tr","2"=>"!1Ez","3"=>"!6Fy","4"=>"!3Qs","5"=>"!2Un",
                    "6"=>"!2Sn","7"=>"!8Tr","8"=>"!3Nz","9"=>"!8Va","q"=>"!9Ip","Q"=>"!3Gy","w"=>"!0Za","W"=>"!7Xc","e"=>"!3Se","E"=>"!7Qj","r"=>"!4Nb",
                    "R"=>"!8Wf","t"=>"!5Sg","T"=>"!1Sc","y"=>"!7Hk","Y"=>"!5Cv","u"=>"!1Hn","U"=>"!6Vt","i"=>"!7Da","I"=>"!0Ad","o"=>"!6Xz","O"=>"!9Eh",
                    "p"=>"!9Lo","P"=>"!8Ny","a"=>"!2Ra","A"=>"!3Ii","s"=>"!1Xe","S"=>"!9Ao","d"=>"!7Bn","D"=>"!5Nv","f"=>"!7Wn","F"=>"!8Ls","g"=>"!1Dw",
                    "G"=>"!0Kj","h"=>"!6Ct","H"=>"!6Et","j"=>"!1La","J"=>"!3Cy","k"=>"!4Vn","K"=>"!7Ck","l"=>"!9Yi","L"=>"!9Gd","z"=>"!7Xz","Z"=>"!3Rz",
                    "x"=>"!1Gt","X"=>"!5Bx","c"=>"!2Ov","C"=>"!9Tg","v"=>"!8Jr","V"=>"!4Ev","b"=>"!5Pe","B"=>"!4Um","n"=>"!8Uz","N"=>"!4Sy","m"=>"!3Hr",
                    "M"=>"!5Rl" );
            $lenE=strlen($string);  
            $resE="";  
            for($i=0; $i<$lenE; $i++)
            {
               $arraySoz=$string{$i};    
               $resE=$resE.$arEncode[$arraySoz];
            }
            return $resE; 
       
    }
    
    
    /**
     * Shifrovaniya uchun
     * @param type $string
     * @return string 
     */
    public static function hsy_encode__($string)
    { $resE="";  
        $string=(string)$string;
        $arEncode=array("<"=>"!7Yf",">"=>"!6Jv","?"=>"!4Lu","$"=>"!1Sk","`"=>"!7Wx","."=>"!9Yz",","=>"!9Oa",";"=>"!7Yw",":"=>"!9Op","("=>"!1Gr",")"=>"!1Jw",
                    "["=>"!6Hu","]"=>"!2Oh","{"=>"!2Ka","}"=>"!8Ct","="=>"!1Ce","_"=>"!2Kx","/"=>"!8Mb","-"=>"!7Jt","+"=>"!4Ln","!"=>"!5Gv","&"=>"!2Du",
                    "*"=>"!2Pc","!"=>"!1Ij","@"=>"!4Si"," "=>"!6Xh","|"=>"!0Bh","0"=>"!3Eg","1"=>"!6Tr","2"=>"!1Ez","3"=>"!6Fy","4"=>"!3Qs","5"=>"!2Un",
                    "6"=>"!2Sn","7"=>"!8Tr","8"=>"!3Nz","9"=>"!8Va","q"=>"!9Ip","Q"=>"!3Gy","w"=>"!0Za","W"=>"!7Xc","e"=>"!3Se","E"=>"!7Qj","r"=>"!4Nb",
                    "R"=>"!8Wf","t"=>"!5Sg","T"=>"!1Sc","y"=>"!7Hk","Y"=>"!5Cv","u"=>"!1Hn","U"=>"!6Vt","i"=>"!7Da","I"=>"!0Ad","o"=>"!6Xz","O"=>"!9Eh",
                    "p"=>"!9Lo","P"=>"!8Ny","a"=>"!2Ra","A"=>"!3Ii","s"=>"!1Xe","S"=>"!9Ao","d"=>"!7Bn","D"=>"!5Nv","f"=>"!7Wn","F"=>"!8Ls","g"=>"!1Dw",
                    "G"=>"!0Kj","h"=>"!6Ct","H"=>"!6Et","j"=>"!1La","J"=>"!3Cy","k"=>"!4Vn","K"=>"!7Ck","l"=>"!9Yi","L"=>"!9Gd","z"=>"!7Xz","Z"=>"!3Rz",
                    "x"=>"!1Gt","X"=>"!5Bx","c"=>"!2Ov","C"=>"!9Tg","v"=>"!8Jr","V"=>"!4Ev","b"=>"!5Pe","B"=>"!4Um","n"=>"!8Uz","N"=>"!4Sy","m"=>"!3Hr",
                    "M"=>"!5Rl" );
        $lenE=strlen($string);  
        $resE="";  
        for($i=0; $i<$lenE; $i++)
        {
           $arraySoz=$string{$i};    
           $resE=$resE.$arEncode[$arraySoz];
        }
        return $resE; 
    }
    
    
    /**
     * Deshifrovaniya uchun
     * @param type $string
     * @return string 
     */
    public function hsy_decode($string)
    {
        $resD="";
          $string=(string)$string;
          $arDecode=array("!7Yf"=>"<","!6Jv"=>">","!4Lu"=>"?","!1Sk"=>"$","!7Wx"=>"`","!9Yz"=>".","!9Oa"=>",","!7Yw"=>";","!9Op"=>":","!1Gr"=>"(","!1Jw"=>")",
                        "!6Hu"=>"[","!2Oh"=>"]","!2Ka"=>"{","!8Ct"=>"}","!1Ce"=>"=","!2Kx"=>"_","!8Mb"=>"/","!7Jt"=>"-","!4Ln"=>"+","!5Gv"=>"!","!2Du"=>"&",
                        "!2Pc"=>"*","!1Ij"=>"!","!4Si"=>"@","!6Xh"=>" ","!0Bh"=>"|","!3Eg"=>"0","!6Tr"=>"1","!1Ez"=>"2","!6Fy"=>"3","!3Qs"=>"4","!2Un"=>"5",
                        "!2Sn"=>"6","!8Tr"=>"7","!3Nz"=>"8","!8Va"=>"9","!9Ip"=>"q","!3Gy"=>"Q","!0Za"=>"w","!7Xc"=>"W","!3Se"=>"e","!7Qj"=>"E","!4Nb"=>"r",
                        "!8Wf"=>"R","!5Sg"=>"t","!1Sc"=>"T","!7Hk"=>"y","!5Cv"=>"Y","!1Hn"=>"u","!6Vt"=>"U","!7Da"=>"i","!0Ad"=>"I","!6Xz"=>"o","!9Eh"=>"O",
                        "!9Lo"=>"p","!8Ny"=>"P","!2Ra"=>"a","!3Ii"=>"A","!1Xe"=>"s","!9Ao"=>"S","!7Bn"=>"d","!5Nv"=>"D","!7Wn"=>"f","!8Ls"=>"F","!1Dw"=>"g",
                        "!0Kj"=>"G","!6Ct"=>"h","!6Et"=>"H","!1La"=>"j","!3Cy"=>"J","!4Vn"=>"k","!7Ck"=>"K","!9Yi"=>"l","!9Gd"=>"L","!7Xz"=>"z","!3Rz"=>"Z",
                        "!1Gt"=>"x","!5Bx"=>"X","!2Ov"=>"c","!9Tg"=>"C","!8Jr"=>"v","!4Ev"=>"V","!5Pe"=>"b","!4Um"=>"B","!8Uz"=>"n","!4Sy"=>"N","!3Hr"=>"m",
                        "!5Rl"=>"M" );  
        $lenD=strlen($string);
        $resD="";
        $k=0;
	while ($k<$lenD)
        {
            $arraySoz=substr($string,$k,4);
            $resD=$resD.$arDecode[$arraySoz];
            $k=$k+4;    
        } 
        return $resD;
    }  
    
    
    /**
     * Deshifrovaniya uchun
     * @param type $string
     * @return string 
     */
    public static function hsy_decode__($string)
    {
        $resD="";
          $string=(string)$string;
           $arEncode=array("<"=>"!7Yf",">"=>"!6Jv","?"=>"!4Lu","$"=>"!1Sk","`"=>"!7Wx","."=>"!9Yz",","=>"!9Oa",";"=>"!7Yw",":"=>"!9Op","("=>"!1Gr",")"=>"!1Jw",
                    "["=>"!6Hu","]"=>"!2Oh","{"=>"!2Ka","}"=>"!8Ct","="=>"!1Ce","_"=>"!2Kx","/"=>"!8Mb","-"=>"!7Jt","+"=>"!4Ln","!"=>"!5Gv","&"=>"!2Du",
                    "*"=>"!2Pc","!"=>"!1Ij","@"=>"!4Si"," "=>"!6Xh","|"=>"!0Bh","0"=>"!3Eg","1"=>"!6Tr","2"=>"!1Ez","3"=>"!6Fy","4"=>"!3Qs","5"=>"!2Un",
                    "6"=>"!2Sn","7"=>"!8Tr","8"=>"!3Nz","9"=>"!8Va","q"=>"!9Ip","Q"=>"!3Gy","w"=>"!0Za","W"=>"!7Xc","e"=>"!3Se","E"=>"!7Qj","r"=>"!4Nb",
                    "R"=>"!8Wf","t"=>"!5Sg","T"=>"!1Sc","y"=>"!7Hk","Y"=>"!5Cv","u"=>"!1Hn","U"=>"!6Vt","i"=>"!7Da","I"=>"!0Ad","o"=>"!6Xz","O"=>"!9Eh",
                    "p"=>"!9Lo","P"=>"!8Ny","a"=>"!2Ra","A"=>"!3Ii","s"=>"!1Xe","S"=>"!9Ao","d"=>"!7Bn","D"=>"!5Nv","f"=>"!7Wn","F"=>"!8Ls","g"=>"!1Dw",
                    "G"=>"!0Kj","h"=>"!6Ct","H"=>"!6Et","j"=>"!1La","J"=>"!3Cy","k"=>"!4Vn","K"=>"!7Ck","l"=>"!9Yi","L"=>"!9Gd","z"=>"!7Xz","Z"=>"!3Rz",
                    "x"=>"!1Gt","X"=>"!5Bx","c"=>"!2Ov","C"=>"!9Tg","v"=>"!8Jr","V"=>"!4Ev","b"=>"!5Pe","B"=>"!4Um","n"=>"!8Uz","N"=>"!4Sy","m"=>"!3Hr",
                    "M"=>"!5Rl" );
          $arDecode=array("!7Yf"=>"<","!6Jv"=>">","!4Lu"=>"?","!1Sk"=>"$","!7Wx"=>"`","!9Yz"=>".","!9Oa"=>",","!7Yw"=>";","!9Op"=>":","!1Gr"=>"(","!1Jw"=>")",
                        "!6Hu"=>"[","!2Oh"=>"]","!2Ka"=>"{","!8Ct"=>"}","!1Ce"=>"=","!2Kx"=>"_","!8Mb"=>"/","!7Jt"=>"-","!4Ln"=>"+","!5Gv"=>"!","!2Du"=>"&",
                        "!2Pc"=>"*","!1Ij"=>"!","!4Si"=>"@","!6Xh"=>" ","!0Bh"=>"|","!3Eg"=>"0","!6Tr"=>"1","!1Ez"=>"2","!6Fy"=>"3","!3Qs"=>"4","!2Un"=>"5",
                        "!2Sn"=>"6","!8Tr"=>"7","!3Nz"=>"8","!8Va"=>"9","!9Ip"=>"q","!3Gy"=>"Q","!0Za"=>"w","!7Xc"=>"W","!3Se"=>"e","!7Qj"=>"E","!4Nb"=>"r",
                        "!8Wf"=>"R","!5Sg"=>"t","!1Sc"=>"T","!7Hk"=>"y","!5Cv"=>"Y","!1Hn"=>"u","!6Vt"=>"U","!7Da"=>"i","!0Ad"=>"I","!6Xz"=>"o","!9Eh"=>"O",
                        "!9Lo"=>"p","!8Ny"=>"P","!2Ra"=>"a","!3Ii"=>"A","!1Xe"=>"s","!9Ao"=>"S","!7Bn"=>"d","!5Nv"=>"D","!7Wn"=>"f","!8Ls"=>"F","!1Dw"=>"g",
                        "!0Kj"=>"G","!6Ct"=>"h","!6Et"=>"H","!1La"=>"j","!3Cy"=>"J","!4Vn"=>"k","!7Ck"=>"K","!9Yi"=>"l","!9Gd"=>"L","!7Xz"=>"z","!3Rz"=>"Z",
                        "!1Gt"=>"x","!5Bx"=>"X","!2Ov"=>"c","!9Tg"=>"C","!8Jr"=>"v","!4Ev"=>"V","!5Pe"=>"b","!4Um"=>"B","!8Uz"=>"n","!4Sy"=>"N","!3Hr"=>"m",
                        "!5Rl"=>"M" );  
        
        $lenD=strlen($string);
        $resD="";
        $k=0;
        while ($k<$lenD)
        {
            $arraySoz=substr($string,$k,4);
            $resD=$resD.$arDecode[$arraySoz];
            $k=$k+4;   
        } 
        
        return $resD;
    }  
    
}
 
?>
