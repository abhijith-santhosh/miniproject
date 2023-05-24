<!DOCTYPE html>
<html>
<head>
    <title>Insurance Companies</title>
</head>
<body>
    <h1>Insurance Companies</h1>
    <ul>
        <?php foreach ($companies as $company): ?>
            <li><a href="<?php echo base_url('insurance/brands/' . $company->id); ?>"><?php echo $company->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
