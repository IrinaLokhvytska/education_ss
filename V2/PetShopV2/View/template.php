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
            <a href="/index/index" class="list-group-item active">
                Cats
                <span class="glyphicon glyphicon-hand-right"></span>
            </a>
            <a href="/index/fluffy" class="list-group-item">Fluffy pets</a>
            <a href="/index/white" class="list-group-item">White pets</a>
            <a href="/index/expensive" class="list-group-item">Expensive pets</a>
        </div>
    </div>
    <div class="col-md-10">
       <ul>
            <?php foreach ($cats as $cat): ?>
                <li><?php echo $cat;?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>