<?php 

function encStr($txt) {
	return md5(hash('sha256', $txt));
}

function genNo($len) {
        $no=mt_rand(0,9);
        for ($i = 0; $i<$len-1; $i++) 
            {
                $no .= mt_rand(0,9);
            }
        return $no;
    }


?>