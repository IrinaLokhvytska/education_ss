<?php

class Tickets extends Task
{
    public $min;
    public $max;

    public function __construct($min, $max)
    {
        $this->min  = $min;
        $this->max  = $max;
    }

	protected function validate()
    {
        $min = $this->min;
        $max = $this->max;

		if (is_int($min) && $min<1000000 && $min>0){
			if(is_int($max) && $max>$min && $max<1000000){
                $check = $this->isValid = true;
                return $check;
			} else {
				$reason  = 'Put the correct max var';
				return $reason;
			}
		} else {
			$reason  = 'Put the correct min var';
			return $reason;
		}
	}
    
    protected function run()
    {
        return $this->luckyTickets();
    }

	private function addZero($n)
    {
        $number = (string)$n;
        while (strlen($number)<6){
            $number = '0'.$number;
        }
        return $number;
	}

	private function easyWay($min, $max)
    {
        static $result1 = 0;

        for($n=$min; $n<=$max; $n++){
            $n      = $this->addZero($n);
            $first  = substr($n, 0, 3);
            $first  = str_split($first);
            $second = substr($n, 3, 3);
            $second = str_split($second);
            $first  = array_sum($first);
            $second = array_sum($second);
            if ($first == $second){
                $result1++;
            }
        }
        $easyWay = $result1;

        return $easyWay;
	}
	
	private function hardWay($min, $max)
    {
        for($n=$min; $n<=$max; $n++) {
            $n       = $this->addZero($n);
            $arr     = str_split($n);
            $result2 = $this->sortByParity($arr);
        }
        
        return $result2;
	}

    private function sortByParity($arr)
    {
        static $result2 = 0;
        $odd  = 0;
        $even = 0;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i]%2 == 0) {
                $even += $arr[$i];
            } else {
                $odd += $arr[$i];
            }
        }
        if ($odd==$even){
            $result2++;
        }
        
        return $result2;
    }

    private function luckyTickets()
    {
        $min = $this->min;
        $max = $this->max;
        $easyWay = $this->easyWay($min, $max);
        $hardWay = $this->hardWay($min, $max);

        if($easyWay>$hardWay){
            $message = 'A simple method won.';
        } elseif($hardWay>$easyWay){
            $message = 'A hard method won.';
        } elseif($hardWay==$easyWay) {
            $message = 'The methods are equal.';
        } else{
            $message = 'In this range there are no lucky tickets.';
        }
        $result = $message. ' Easy way: '.$easyWay. ' Hard way: '.$hardWay;
        
        return $result;
    }
}


       
		

