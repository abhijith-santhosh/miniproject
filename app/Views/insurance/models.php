<!DOCTYPE html>
<html>
<head>
    <title>Car Models</title>
</head>
<body>
    <h1>Car Models</h1>
    <ul>
        <?php foreach ($models as $model): ?>
            <li><a href="<?php echo base_url('insurance/costs/' . $model->id); ?>"><?php echo $model->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
