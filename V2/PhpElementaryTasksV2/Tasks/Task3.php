<?php

class Triangle extends Task
{
    public $name;
	public $side1;
    public $side2;
	public $side3;
	public $triangles;

    public function __construct($name, $side1, $side2, $side3)
    {
        $this->name  = $name;
        $this->side1 = $side1;
		$this->side2 = $side2;
		$this->side3 = $side3;
    }

	public function addTriangle($triangles)
	{
		$this->triangles = $triangles;
	}

    protected function validate()
	{
		$triangles = $this->triangles;
		foreach ($triangles as $value){
			$name = $value->{'name'};
			$side1 = $value->{'side1'};
			$side2 = $value->{'side2'};
			$side3 = $value->{'side3'};
			if(!$name || !is_string($name)){
				$reason  = 'Enter the name of the triangle. The type oh the var should be string';
				return $reason;
			} else {
				if(!$side1 || !is_int($side1) || $side1<=0){
					$reason  = 'The side 1 should be positive integer';
					return $reason;
				} else {
					if(!$side2 || !is_int($side2) || $side2<=0){
						$reason  = 'The side 2 should be positive integer';
						return $reason;
					} else {
						if(!$side3 || !is_int($side3) || $side3<=0){
							$reason  = 'The side 3 should be positive integer';
							return $reason;
						} else {
							if($side1+$side2>=$side3 && $side1+$side3>=$side2 && $side3+$side2>=$side1){
								$check = $this->isValid = true;
								return $check;
							} else {
								$reason = 'Triangle '.$name. ' is not exist.';
								return $reason;
							}
						}
					}
				}
			}
		}
	}
	
	protected function run()
	{
		return $this->squareTriangles();
	}

	private function squareTriangles()
	{
		$triangles = $this->triangles;
		foreach ($triangles as $value){
			$name     = $value->{'name'};
			$side1    = $value->{'side1'};
			$side2    = $value->{'side2'};
			$side3    = $value->{'side3'};
			$p        = 0.5*($side1+$side2+$side3);
			$square   = sqrt(($p*($p-$side1)*($p-$side2)*($p-$side3)));
			$sqr[]    = $square;
			$output[] = array($name=>$square);
		}
		$result = '';
		foreach ($output as $value){
			foreach ($value as $k=>$v) {
				$data[$k]=$v;
			}
		}
		arsort($data);
		foreach ($data as $k => $v){
			$result .= 'Triangle '.$k.' square '.$v;
		}
		
		return $result;
	}
}
       
		

