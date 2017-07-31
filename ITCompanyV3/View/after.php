<div class="col-md-6">
    <table class="table table-bordered">
        <tr>
            <td colspan="3">
                <h4>After hire candidates</h4>
            </td>
        </tr>
        <tr>
            <td id="caption" colspan="3">
                <h5>The list of teams</h5>
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Project</td>
            <td>Team member</td>
        </tr>
        <?php foreach ($teamsAfter as $team): ?>
            <tr>
                <td><?php echo $team->getName();?></td>
                <td><?php echo $team->getProject();?></td>
                <td>
                    <?php foreach($team->getTeamMember() as $member):?>
                        <p>
                            Name: <?php echo $member->getName(); ?> Position: <?php echo $member->getPosition(); ?>
                            Salary: <?php echo $member->getSalary(); ?>
                        </p>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td id="caption" colspan="3">
                <h5>The list of needs from Team 1</h5>
            </td>
        </tr>
        <tr>
            <td>Position</td>
            <td colspan="2">The amount of needs</td>
        </tr>
        <?php foreach ($needsAfter1 as $need=>$amount): ?>
            <tr>
                <td>
                    <p><?php echo $need ?></p>
                </td>
                <td colspan="2">
                    <p><?php echo $amount ?></p>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td id="caption" colspan="3">
                <h5>The list of needs from Team 2</h5>
            </td>
        </tr>
        <tr>
            <td>Position</td>
            <td colspan="2">The amount of needs</td>
        </tr>
        <?php foreach ($needsAfter2 as $need=>$amount): ?>
            <tr>
                <td>
                    <p><?php echo $need ?></p>
                </td>
                <td colspan="2">
                    <p><?php echo $amount ?></p>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>