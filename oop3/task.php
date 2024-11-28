<?php 
echo "<pre>";

class Str {

    public static function random($num) 
    {
        
        $x = static::randStr();

        $result = '' ;

        for ($i = 0 ; $i < $num ; $i++) {
            $len = mt_rand(0 , strlen($x) - 1 );
            $result .= $x[$len];
        }


        print_r($result);
    }

    private static function randStr(){
        $randomNums = range(0,9);
        $randomString = range('a','z');
        $randomCapString = range('A','Z');

        return  implode('', array_merge($randomNums,$randomString,$randomCapString));
    }

}



Str::random(20 , '');


