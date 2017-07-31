<?php require_once 'header.php';?>
<?php foreach ($teamsBefore as $team): ?>
    <tr>
        <td><?php echo $team->getName();?></td>
        <td><?php echo $team->getProject();?></td>
        <td>
            <?php foreach($teamMember1 as $member):?>
                <p>
                    Name: <?php echo $member->getName(); ?> Position: <?php echo $member->getPosition(); ?>
                    Salary: <?php echo $member->getSalary(); ?>
                </p>
            <?php endforeach; ?>
            <?php foreach($teamMember2 as $member):?>
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
<?php foreach ($needsBefore1 as $need=>$amount): ?>
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
<?php foreach ($needsBefore2 as $need=>$amount): ?>
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