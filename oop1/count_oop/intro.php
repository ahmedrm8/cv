<?php 
class House {
    // properties -> variables
    public $color = 'red';
    public $floorNum = 10 ;

    // methods  -> functions
    public function test()
    {
        echo "from test function";
    } 
} // end class
#################################################
$home = new House ;
$home -> color = 'green';
echo $home -> color ;
$home -> test();

###############################

$villa = new House ;
echo $villa -> color ;
