<?php

class Envelopes extends Task
{
    public $width;
    public $height;
	public $a;
	public $b;
	public $c;
	public $d;

    public function __construct($width, $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

	public function addSides($a, $b, $c, $d)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;
	}

	protected function validate()
    {
		$a = $this->a;
		$b = $this->b;
		$c = $this->c;
		$d = $this->d;

		if ($a<=0 || (!is_int($a) && !is_float($a))){
			$reason  = 'The var a should be a number and be more than 0';
			var_dump($a);
			return $reason;
		} else {
			if($b <= 0 || (!is_int($b) && !is_float($b))){
				$reason  = 'The var b should be a number and be more than 0';
				return $reason;
			} else {
				if($c <= 0 || (!is_int($c) && !is_float($c))) {
					$reason  = 'The var c should be a number and be more than 0';
					return $reason;
				} else {
					if ($d <= 0 || (!is_int($d) && !is_float($d))){
						$reason  = 'The var d should be a number and be more than 0';
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
	 return $this->comparisonEnvelopes();
	}

    public function comparisonEnvelopes()
    {
		$a = $this->a;
		$b = $this->b;
		$c = $this->c;
		$d = $this->d;
		$bigger_first  = $a*$b>=$c*$d &&
			((pow($a,2)+pow($b,2))>=(pow($c,2)+pow($d,2)))
			&& ($a+$b>=$c+$d) && (min($a,$b)>=min($c,$d));
		$bigger_second = $c*$d>=$a*$b &&
			((pow($c,2)+pow($d,2))>=(pow($a,2)+pow($b,2)))
			&& ($c+$d>=$a+$b) && (min($c,$d)>=min($a,$b));
		if ($bigger_first){
            $smallestEnvelope = 2;
		} elseif ($bigger_second){
			$smallestEnvelope = 1;
		} else {
			$smallestEnvelope = 0;
		}

		return $smallestEnvelope;
	}
}
       
		

