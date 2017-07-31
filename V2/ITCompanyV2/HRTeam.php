<?php

class HRTeam
{
    public $PMRecruiter;
    public $DevRecruiter;
    public $QCRecruiter;

    public function canFindSpecialist()
    {
        $candidates = ITCompany::getCandidates();
        foreach ($candidates as $candidate) {
            $result = $candidate->doITWork();
            if ($result){
                return true;
            } else {
                return false;
            }
        }
    }

    public function getSpecialist($position)
    {
        $candidates = ITCompany::getCandidates();
        foreach ($candidates as $candidate){
            if ($candidate->{'profile'} === $position){
                $tmMember = $candidate;
                unset ($candidate);
                break;
            }
        }

        return $tmMember;
    }

}