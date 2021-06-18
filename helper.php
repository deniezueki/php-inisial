<php

 public static function inisial($nama, $full = false)
    {
        $arr = explode(' ', $nama);
        $singkatan = '';

        $len = $full == true ? count($arr) : (count($arr)>1?2:count($arr)) ;
        for ($i = 0; $i <  $len; $i++) {
            $singkatan .= substr($arr[$i], 0, 1);
        }
        return $singkatan;
    }

?>
