<?php

class FileConfiguration
{
    public  $fp = "Pets.txt";

    public function addToFile($model)
    {
        $fp = $this->fp;
        file_put_contents($fp, $model, FILE_APPEND);
    }

    public function takeFromFile()
    {
        $fp = $this->fp;
        $file = file_get_contents($fp);
        $pets = explode(",", $file);

        return $pets;
    }

}
