
<?php

class SubtractDate{
    public $firstdate ;
    public $seconddate;

    function __construct($firstdate,$seconddate){
        $this->firstdate = $firstdate;
        $this->seconddate = $seconddate;
    }
    function get_firstdate(){
        return $this->firstdate." - firstdate";
    }
    function get_seconddate(){
        return $this->seconddate." - seconddate";
        
    }
    function get_diff(){      
       $difference = (new DateTime($this->firstdate))->diff (new DateTime($this->seconddate));
       echo "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";
    } 
}
$dateTime = new SubtractDate("1981-11-03","2013-09-04");
echo $dateTime->get_firstdate();
echo "<br>";
echo $dateTime->get_seconddate();
echo "<br>";
echo $dateTime->get_diff();

?>