<?php

class Team
{
    protected $name;
    protected $project;
    protected $needs = [];
    protected $teamMember = [];

    public function __construct($name, $project, $needs, $teamMember)
    {
        $this->name = $name;
        $this->project = $project;
        $this->needs = $needs;
        $this->teamMember = $teamMember;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * @return array
     */
    public function getTeamMember()
    {
        return $this->teamMember;
    }

    /***
     * @param $member object
     */
    public function addTeamMember ($member)
    {
        $teamMembers = $this->teamMember;
        $teamMembers[] = $member;
        $this->removeNeeds($member->getPosition());

        $this->teamMember = $teamMembers;
    }

    private function removeNeeds($position)
    {
        if (!empty($this->needs)){
            foreach ($this->needs as $need=>$amount){
                if ($need === $position){
                    $amount --;
                }
                $newNeeds[$need] = $amount;
            }

            $this->needs = $newNeeds;
        }
    }

    /***
     * @return bool
     */

    public function isComplete()
    {
       foreach ($this->needs as $need=>$amount){
           $amount += $amount;
       }
       if($amount === 0){

           return true;
       } else {

           return false;
       }
    }

    /***
     * @param $teams array
     * @return string
     */

    public static function doJob($teams)
    {
        $result = '';

        foreach ($teams as $team){
            if (!empty($team->getTeamMember())){
                foreach ($team->getTeamMember() as $teamMember){
                    $result .= $teamMember::doWork() . ' ';
                }
            } else {

                $result = 'The team does not have members';
            }
        }

        return $result;

    }
}