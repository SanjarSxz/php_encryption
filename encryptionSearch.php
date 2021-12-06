<?php
 
/**
 * Description of encryptionSearch
 *
 * @author SANJAR
 */
class encryptionSearch {
    public static function decodeSearch($string)
    {
        $arDecodeSearch=array("!7Yf","!6Jv","!4Lu","!1Sk","!7Wx","!9Yz","!9Oa","!7Yw","!9Op","!1Gr","!1Jw","!6Hu","!2Oh","!2Ka","!8Ct","!1Ce","!2Kx","!8Mb","!7Jt",
                       "!4Ln","!5Gv","!2Du","!2Pc","!1Ij","!4Si","!6Xh","!0Bh","!3Eg","!6Tr","!1Ez","!6Fy","!3Qs","!2Un","!2Sn","!8Tr","!3Nz","!8Va","!9Ip",
                       "!3Gy","!0Za","!7Xc","!3Se","!7Qj","!4Nb","!8Wf","!5Sg","!1Sc","!7Hk","!5Cv","!1Hn","!6Vt","!7Da","!0Ad","!6Xz","!9Eh","!9Lo","!8Ny",
                       "!2Ra","!3Ii","!1Xe","!9Ao","!7Bn","!5Nv","!7Wn","!8Ls","!1Dw","!0Kj","!6Ct","!6Et","!1La","!3Cy","!4Vn","!7Ck","!9Yi","!9Gd","!7Xz",
                       "!3Rz","!1Gt","!5Bx","!2Ov","!9Tg","!8Jr","!4Ev","!5Pe","!4Um","!8Uz","!4Sy","!3Hr","!5Rl");  
    
        $lenD=strlen($string);
        $resD="";
        $k=0;
        while ($k<$lenD)
        {
            $arraySoz=substr($string,$k,4);
            $key = in_array($arraySoz, $arDecodeSearch);
            if(!$key)
            {
                return -1;
            }
            $k=$k+4;   
        }
        return 1; 
    }
}
?>