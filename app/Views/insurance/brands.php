<!DOCTYPE html>
<html>
<head>
    <title>Car Brands</title>
</head>
<body>
    <h1>Car Brands</h1>
    <ul>
        <?php foreach ($brands as $brand): ?>
            <li><a href="<?php echo base_url('insurance/models/' . $brand->id); ?>"><?php echo $brand->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
