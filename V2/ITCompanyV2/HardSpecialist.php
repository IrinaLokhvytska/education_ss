<?php

require_once 'IITWorker.php';

class HardSpecialist extends Worker implements IITWorker
{
    public static $work;

    public function doITWork()
    {
        return true;
    }

}