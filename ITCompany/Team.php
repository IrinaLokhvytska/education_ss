<?php

class Team
{
    public $name;
    public $teamMember;
    public $project;
    public $needs = array();

    public function __construct($name, $project, $needs, $teamMember)
    {
        $this->name = $name;
        $this->project = $project;
        $this->needs = $needs;
        $this->teamMember = $teamMember;
    }

    public static function addTeamMember ($member, $team)
    {
        $result = array();
        $position = $member->{'profile'};
        self::removeNeeds($position);
        $teamMembers = $team->{'teamMember'};

        foreach ($teamMembers as $key=>$value){
            if ($key === $position){
                $value += 1;
            }
            $result[$key] = $value;
        }
        $team->{'teamMember'} = $result;
    }

    private function removeNeeds($position)
    {
        $needs = $this->needs;
        foreach ($needs as $need=>$amount){
            if ($need === $position){
                $amount --;
            }
            $needs[] = $need[$amount];
        }

        return $this->needs = $needs;
    }

    public function isComplete($team)
    {
        $teamMember = $team->{'teamMember'};
        $needs[] = $team->{'needs'};
        if ($needs === $teamMember){

            return true;
        } else {

            return false;
        }
    }

    public function getNeeds()
    {
        $teams = ITCompany::$team;
        foreach ($teams as $team){
            $complete = $this->isComplete($team);
            if(!$complete){
                $this->completeNeeds($team);
            } else {
                return 'The team is complete';
            }
        }
    }

    public static function doJob()
    {
        $result = '';
        $teams = ITCompany::$team;
        foreach ($teams as $team){
            $teamMember = $team->{'teamMember'};
            foreach ($teamMember as $key=>$value){
                if ($key === 'DV'){
                    $result .= Dev::doWork() . ' ';
                } elseif ($key === 'QC'){
                    $result .= QC::doWork(). ' ';
                } else{
                    $result .= PM::doWork(). ' ';
                }
            }
        }

        return $result;

    }
}