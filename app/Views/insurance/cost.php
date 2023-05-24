<!DOCTYPE html>
<html>
<head>
    <title>Insurance Costs</title>
</head>
<body>
    <h1>Insurance Costs</h1>
    <table>
        <thead>
            <tr>
                <th>Car Model</th>
                <th>Insurance Cost</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($costs as $cost): ?>
                <tr>
                    <td><?php echo $cost->model_name; ?></td>
                    <td><?php echo $cost->cost; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
