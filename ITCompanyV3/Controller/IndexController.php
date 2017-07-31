<?php

class IndexController
{
    public function indexAction()
    {
        $needs1 = ['Dev'=>2, 'PM'=>1, 'QC'=>1];
        $needs2 = ['Dev'=>2, 'PM'=>1, 'QC'=>2];
        $teamMember = [];

        $team1 = new Team('php019', 'petShop',$needs1, $teamMember);
        $team2 = new Team('js019', 'ItCompany',$needs2, $teamMember);
        $teamsBefore = [$team1, $team2];

        $company = new ITCompany();
        $teamMember1 = $team1->getTeamMember();
        $teamMember2 = $team1->getTeamMember();

        $company->addTeam($team1);
        $company->addTeam($team2);

        $needsBefore1 = $team1->getNeeds();
        $needsBefore2 = $team2->getNeeds();

        $company->hire();


        $teamsAfter = $company->getTeams();
        $needsAfter1 = $team1->getNeeds();
        $needsAfter2 = $team2->getNeeds();

        $data = [
            'teamsBefore'=>$teamsBefore,
            'teamsAfter'=>$teamsAfter,
            'teamMember1'=>$teamMember1,
            'teamMember2'=>$teamMember2,
            'needsBefore1'=>$needsBefore1,
            'needsBefore2'=>$needsBefore2,
            'needsAfter1'=>$needsAfter1,
            'needsAfter2'=>$needsAfter2
        ];

        $template = new View();
        $template->render('View/template.php', $data);
    }

}