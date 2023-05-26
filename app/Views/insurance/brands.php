<!DOCTYPE html>
<html>
<head>
    <title>Car Brands</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        
        .container {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .brand-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
        }
        
        .brand-item {
            margin-bottom: 10px;
        }
        
        .brand-link {
            display: block;
            width: 200px;
            padding: 10px;
            text-align: center;
            background-color: #f8f9fa;
            color: #212529;
            text-decoration: none;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        
        .brand-link:hover {
            background-color: #e9ecef;
        }
        
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="#"><?php echo $companiename[0]['name']; ?>Car Insurance </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
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
    
    <div class="container">
        <h1>Car Brands</h1>
        <ul class="brand-list">
            <?php foreach ($brands as $brand): ?>
                <li class="brand-item">
                    <a class="brand-link" href="<?php echo base_url('insurance/models/' . $brand['id']); ?>"><?php echo $brand['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
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
            <p>&copy; <?php echo date('Y'); ?> © 2023 insuranzy.com
