<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>PetShop</title>
</head>
<body>
<div class="page-header" style="text-align: center">
    <h1>Pet Shop</h1>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="list-group">
            <a href="/index/index" class="list-group-item">Cats</a>
            <a href="/index/fluffy" class="list-group-item">Fluffy pets</a>
            <a href="/index/white" class="list-group-item">White pets</a>
            <a href="/index/expensive" class="list-group-item active">
                Expensive pets
                <span class="glyphicon glyphicon-hand-right"></span>
            </a>
        </div>
    </div>
    <div class="col-md-10">
        <ul>
            <?php foreach ($expensivePets as $pet): ?>
                <li><?php echo $pet;?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>