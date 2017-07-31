<?php include_once 'header.php';?>
    <?php foreach ($expensivePets as $pet): ?>
        <tr>
            <td><?php echo $pet->getKind();?></td>
            <td><?php echo $pet->getName();?></td>
            <td><?php echo $pet->getPrice();?></td>
            <td><?php echo $pet->getColor();?></td>
            <td><?php echo $pet->isFluffy();?></td>
        </tr>
    <?php endforeach; ?>
<?php include_once 'footer.php';?>