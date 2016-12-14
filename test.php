<?php 

$mobile = '-18925205958'; 
function removeCountyCode($mobile)
    {
        $pos = strpos($mobile, '-');
        if ($pos !== false) {
            $mobile = substr($mobile, $pos + 1);;
        }
        return $mobile;
    }

echo removeCountyCode($mobile);
