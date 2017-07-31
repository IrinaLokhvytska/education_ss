<?php

class HRTeam
{
    public $PMRecruiter;
    public $DevRecruiter;
    public $QCRecruiter;
    public $candidates;
    public $recruiters;

    /***
     * HRTeam constructor.
     * @param Candidate[] $candidates
     */

    public function __construct($candidates)
    {
        $this->candidates = $candidates;
        $this->recruiters = [
            Position::PROJECT_MANAGER => new PMRecruiter(),
            Position::DEVELOPER => new DevRecruiter(),
            Position::QUALITY_CONTROL=> new QCRecruiter()
        ];
    }

    public function canFindSpecialist($need)
    {
        foreach ($this->candidates as $candidate) {
            if ($candidate->getProfile() === $need) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function setSpecialist($need, $team)
    {
        $candidates = $this->candidates;
        $recruiters = $this->recruiters;
        $teamMember = $recruiters[$need]->getSpecialist($candidates, $need);
        if ($teamMember){
            $recruiters[$need]->addToTeam($teamMember, $team);

            $key = array_search($teamMember, $candidates);
            unset ($candidates[$key]);

            $this->candidates = $candidates;
        }
    }

}