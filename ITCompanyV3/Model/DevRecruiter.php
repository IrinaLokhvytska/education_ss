<?php

class DevRecruiter extends Recruiter
{
    public function addToTeam ($candidate, $team)
    {
        $tmMember = new Dev($candidate->getName(), $candidate->getWantedSalary());
        $team->addTeamMember($tmMember);
    }
}