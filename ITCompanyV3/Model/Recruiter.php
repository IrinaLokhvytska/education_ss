<?php

abstract class Recruiter
{
    /***
     * @param $candidates array
     * @param $need string
     * @return null
     */
    public function getSpecialist($candidates, $need)
    {
        foreach ($candidates as $candidate){
            if ($candidate->getProfile() === $need) {

                return $candidate;
            }
        }

        return NULL;
    }

    /***
     * @param $candidate object
     * @param $team object
     */

    abstract public function addToTeam ($candidate, $team);

}