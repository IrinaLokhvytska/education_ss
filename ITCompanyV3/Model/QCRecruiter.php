<?php

class QCRecruiter extends Recruiter
{
    public function addToTeam ($candidate, $team)
    {
        $tmMember = new QC($candidate->getName(), $candidate->getWantedSalary());
        $team->addTeamMember($tmMember);
    }

}