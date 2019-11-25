<?php

namespace swkberlin;

class Kata {

    private $specialNumbers = [
      "I" => 1,
      "V" => 5,
      "X" => 10,
      "L" => 50,
      "C" => 100,
      "D" => 500,
      "M" => 1000
    ];

    public function charRepeat( $char, $times ) {
       $rom ="";
        for( $i = 1; $i <= $times; $i++ ){
            $rom = $char . $rom;
        }
        return $rom;
    }
    public function getSpecialRoman( $num ) {
        if ( in_array( $num, $this->specialNumbers ) ) {
            return array_search( $num, $this->specialNumbers );
        }
    }

    public function toRoman ( $num ){
        $splitNum = [];
        $i = 0;
        while( $num != 0 ) {
            $splitNum = $num%10;
            $num = $num/10;
        }


    }
}
