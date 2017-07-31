<?php

require_once 'ITCompany.php';
require_once 'Person.php';
require_once 'Candidate.php';
require_once 'Worker.php';
require_once 'Team.php';
require_once 'HardSpecialist.php';
require_once 'QC.php';
require_once 'PM.php';
require_once 'Dev.php';
require_once 'HRTeam.php';


$candidate1 = new Candidate('Masha', 500, 'QC');
$candidate2 = new Candidate('Misha', 700, 'PM');
$candidate3 = new Candidate('Aleksandr', 600, 'DV');
$candidate4 = new Candidate('Anton', 350, 'QC');
$candidate5 = new Candidate('Julia', 590, 'PM');
$candidate6 = new Candidate('Andrey', 610, 'DV');

echo '<h1>Add Candidates</h1>';
ITCompany::addCandidates($candidate1);
ITCompany::addCandidates($candidate2);
ITCompany::addCandidates($candidate3);
ITCompany::addCandidates($candidate4);
ITCompany::addCandidates($candidate5);
ITCompany::addCandidates($candidate6);

$candidates = ITCompany::getCandidates();
print_r($candidates);

echo '<h1>Get all teams</h1>';
$needs1 = ['DV'=>3, 'PM'=>1, 'QC'=>1];
$needs2 = ['DV'=>2, 'PM'=>1, 'QC'=>1];
$teamMember = array('DV'=>0, 'PM'=>0, 'QC'=>0);

$team1 = new Team('php019', 'petShop',$needs1, $teamMember);
$team2 = new Team('js019', 'ItCompany',$needs2, $teamMember);

ITCompany::addTeam($team1);
ITCompany::addTeam($team2);

$teams = ITCompany::getTeam();
print_r($teams);

$team1->getNeeds();
echo '<h1>Get teams after add to team</h1>';
$teams = ITCompany::getTeam();
print_r($teams);

echo '<h1>The beginning of the work </h1>';
$company = new ITCompany();
$work = $company->gotFun();
echo $work;

echo '<h1>Candidates after add to member</h1>';
$candidates = ITCompany::getCandidates();
print_r($candidates);





