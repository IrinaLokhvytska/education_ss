<?php


class Fibonacci extends Task
{
	public $min;
    public $max;
    public $length;

    public function __construct($min, $max, $length)
    {
        $this->min    = $min;
        $this->max    = $max;
        $this->length = $length;
    }

    protected function validate()
    {
        $min = $this->min;
        $max = $this->max;
        $length = $this->length;
        if (!$min){
            $reason  = 'Enter min var';
            return $reason;
        } else {
            if(!is_int($min)){
                $reason  = 'Min var mus be integer';
                return $reason;
            } else {
                if($min<=0){
                    $reason  = 'Min var should be integer';
                    return $reason;
                } else {
                    if(!$max && !$length){
                        $reason  = 'You must enter the length or the max var of the range';
                        return $reason;
                    } else {
                        $check = $this->isValid = true;
                        return $check;
                    }
                }
            }
        }
    }

    protected function run()
    {
        return $this->fibonacci();
    }
    
    private function fibonacci()
    {
        $min = $this->min;
        $max = $this->max;
        $length = $this->length;
        $data ='';

        if(!$max){
            $sqn = sqrt(5);
            $a   = (1 + $sqn) / 2;
            $b   = (1 - $sqn) / 2;
            
            for ($i=$min; $i<=$length; $i++){
                $result  = (pow($a, $i) - pow($b, $i)) / $sqn;
                $data .= $result.' ';
            }
        } elseif (!$length){
            $n1     = $min;
            $n2     = $min +1;
            $result = $n1 + $n2;
            while ($result<$max){
                $n1      = $n2;
                $n2      = $result;
                $result  = $n1+$n2;
                $data .= $result.' ';
            }
        } else {
            $n1     = $min;
            $n2     = $min +1;
            $result = $n1 + $n2;
            for ($i=$min; $i<=$length; $i++) {
                while ($result < $max) {
                    $n1      = $n2;
                    $n2      = $result;
                    $result  = $n1 + $n2;
                    $data .= $result.' ';
                }
            }
        }
        
        return $data;
    }
}
       
		

