<?php include_once 'header.php';?>
    <?php foreach ($cats as $cat): ?>
        <tr>
            <td><?php echo $cat->getKind();?></td>
            <td><?php echo $cat->getName();?></td>
            <td><?php echo $cat->getPrice();?></td>
            <td><?php echo $cat->getColor();?></td>
            <td><?php echo $cat->isFluffy();?></td>
        </tr>
    <?php endforeach; ?>
<?php include_once 'footer.php';?>
