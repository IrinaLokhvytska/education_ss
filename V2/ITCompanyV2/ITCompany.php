<?php

class ITCompany
{
    public static $candidates;
    public static $team;

    public static function addCandidates($candidate)
    {
        self::$candidates[] = $candidate;
    }

    public static function getCandidates()
    {
        return self::$candidates;
    }
    
    public static function addTeam($team)
    {
        self::$team[] = $team;
    }

    public static function getTeam()
    {
        return self::$team;
    }
    
    public static function hire($candidate, $team)
    {
        $dev = 'DV';
        $qc = 'QC';
        $position = $candidate->{'profile'};
        $name =  $candidate->{'name'};
        $salary = $candidate->{'wantedSalary'};
        if ($position === $dev){
           new Dev($name, $salary);
           Team::addTeamMember($candidate, $team);

        } elseif ($position === $qc){
            new QC($name, $salary);
            Team::addTeamMember($candidate, $team);
        } else {
            new PM($name, $salary);
            Team::addTeamMember($candidate, $team);
        }

    }
    
    public function gotFun()
    {
      return Team::doJob();
    }
    
}