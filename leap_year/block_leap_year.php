<?php
class block_leap_year extends block_base {
    
    //Construct
    public function init() {
        
        $this->title = get_string('leap_year','block_leap_year');
    }
    


    public function get_content() {
    
	    if ($this->content !== null) {
	      return $this->content;
	    }
	 
	    $this->content         =  new stdClass;
	    $this->content->text   = $this->is_current_leap_year();
	   
 
    return $this->content;
	
	}

    //Checks if the current year is leap
    private function is_current_leap_year() {

    	$year = date("Y"); //get the current year;
    	
    	$year = doubleval($year); //convert string to double.

	    if((($year % 4) == 0 && ($year % 100)!=0) || ($year % 400) == 0 )
			{
				return  $year ." " . " Is a leap year.";

			}else {
				
				return $year ." " . " Is a not a leap Year.";
			}
    }
    
}