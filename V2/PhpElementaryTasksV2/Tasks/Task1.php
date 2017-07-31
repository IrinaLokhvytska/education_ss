<?php
require_once 'Tasks/Task.php';

class ChessBoard extends Task
{
    public $width;
    public $height;
    public $char;

    public function __construct($width, $height, $char)
    {
        $this->width  = $width;
        $this->height = $height;
        $this->char   = $char;
    }

	protected function validate()
	{
		$width  = $this->width;
		$height = $this->height;
		$char   = $this->char;

		if ($width<=0 || !is_int($width)) {
            $reason = 'The width of the chess should be a positive integer';
            return $reason;
        } else {
            if($height <= 0 || !is_int($height)) {
                $reason  = 'The height of the chess should be a positive integer';
                return $reason;
            } else {
                if (!$char) {
                    $reason  = 'Enter the char';
                    return $reason;
                } else {
                    $check = $this->isValid = true;
                    return $check;
                }
            }
        }
	}

	protected function run()
    {
        return $this->makeChessBoard();
    }

    private function makeChessBoard()
	{
        $width  = $this->width;
        $height = $this->height;
        $char   = $this->char;
		$output = '';

		for ($i = 0; $i < $height; $i++){
			for ($j=0; $j < $width; $j++) {
				if ($i % 2 === 0){
					if($j % 2 === 0){
						$output .= $char.' ';
					} else {
						$output .= $char.' ';
					}
				}else {
					if($j % 2 == 0){
						$output .= ' '.$char;
					}else {
						$output .= ' '.$char;
					}
				}
			}
			$output .= '<br>';
		}
		
		return $output;
	}
        
}
       
		

