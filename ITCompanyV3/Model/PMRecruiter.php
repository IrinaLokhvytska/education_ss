<?php

class PMRecruiter extends Recruiter
{
    public function addToTeam ($candidate, $team)
    {
        $tmMember = new PM($candidate->getName(), $candidate->getWantedSalary());
        $team->addTeamMember($tmMember);
    }
}