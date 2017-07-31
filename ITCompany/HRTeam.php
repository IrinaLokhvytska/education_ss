<?php

class HRTeam
{
    public function getDev()
    {
        $candidates = ITCompany::getCandidates();
        $count = count($candidates);
        for ($i = 0; $i<$count; ++$i){
            if ($candidates[$i]->{'profile'} === 'DV'){
                $dv = $candidates[$i];
                unset ($candidate, $i);
                break;
            }
        }
//        foreach ($candidates as $candidate){
//            if ($candidate->{'profile'} === 'DV'){
//                $dv = $candidate;
//                unset ($candidate);
//                break;
//            }
//        }
        
        return $dv;
    }

    public function getQC()
    {
        $candidates = ITCompany::getCandidates();
        foreach ($candidates as $candidate){
            if ($candidate->{'profile'} === 'QC'){
                $qc = $candidate;
                unset ($candidate);
                break;
            }
        }


        return $qc;
    }

    public function getPM()
    {
        $candidates = ITCompany::getCandidates();
        foreach ($candidates as $candidate){
            if ($candidate->{'profile'} === 'PM'){
                $pm = $candidate;
                unset ($candidate);
            }
        }

        return $pm;
    }

}