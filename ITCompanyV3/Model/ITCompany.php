<?php

class ITCompany
{
    private  $team;

    private function getCandidates()
    {
        $file = new File();

        return $file->takeFromFile();
    }
    
    public function addTeam($team)
    {
        $this->team[] = $team;
    }

    public function getTeams()
    {
        return $this->team;
    }

    public function hire()
    {
        $hr = new HRTeam($this->getCandidates());

        foreach($this->getTeams() as $team) {
            $complete = $team->isComplete();
            if (!$complete) {
                $needs = $team->getNeeds();
                foreach ($needs as $need => $amount) {
                    for ($i = 0; $i < $amount; $i++) {
                        $hr->setSpecialist($need, $team);
                    }
                }
            } else {

                return 'The teams are complete';
            }
        }
    }

    
    public function gotFun()
    {
       return Team::doJob($this->getTeams());
    }
    
}