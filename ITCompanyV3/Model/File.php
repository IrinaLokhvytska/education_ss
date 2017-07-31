<?php

class File
{
    public  $fp = "Candidates.json";

    public function takeFromFile()
    {
        $candidates = [];
        $fp = $this->fp;
        $contents = file_get_contents($fp);
        $people = json_decode($contents);
        foreach ($people as $person){
            $name = $person->{'name'};
            $wantedSalary = $person->{'wantedSalary'};
            $profile = $person->{'profile'};

            $candidates[] = new Candidate($name, $wantedSalary, $profile);
        }

        return $candidates;
    }

}