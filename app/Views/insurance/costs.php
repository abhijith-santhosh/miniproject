<!DOCTYPE html>
<html>
<head>
    <title>Insurance Costs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .navbar {
            padding: 0;
        }

        .navbar-brand img {
            width: 149.3px;
            height: 44px;
            margin-right: 10px;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }

        .container {
            padding-right: 0;
            padding-left: 0;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://www.insuranzy.com/img/logo.png" alt="Insuranzy logo" title="Insuranzy Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/miniproject/public/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <h1>Insurance Costs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Car Model</th>
                    <th>Insurance Cost</th>
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($costs as $cost): ?>
                    <tr>
                        <td><?php echo $cost['model_id']; ?></td>
                        <td><?php echo $cost['cost']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <p style="font-weight: bold;">
            When comparing car insurance quotes, it's essential to consider various factors to ensure a comprehensive evaluation. Here's a step-by-step guide to help you through the process:
            <ul>
                <li>Before requesting quotes, assess your coverage requirements. Consider factors such as your car's value, your budget, and any specific coverage options you need, such as collision coverage or roadside assistance.</li>
                <li>Compare the premiums offered by different providers for the same coverage levels. Pay attention to any additional fees or charges that may be included.</li>
                <li>Evaluate the coverage options provided by each insurer.</li>
            </ul>
        </p>
    </div>  

    <footer class="footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> © 2023 insuranzy.com</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFx
