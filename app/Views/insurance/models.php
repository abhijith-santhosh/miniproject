<!DOCTYPE html>
<html>
<head>
    <title>Car Models</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
        }
        
        .container {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .list-group-item {
            background-color: #f8f9fa;
            border-color: #dee2e6;
            color: #333;
            transition: all 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #e9ecef;
            border-color: #ced4da;
            color: #333;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        
        .list-group-item a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="#">Car Insurance Quotes by Amica </a>
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
        <h1>Car Models</h1>
        <ul class="list-group mt-5">
            <?php foreach ($models as $model): ?>
                <li class="list-group-item">
                    <a href="<?php echo base_url('insurance/costs/' . $model['id']); ?>"><?php echo $model['name']; ?></a>
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
            <p>&copy; <?php echo date('Y'); ?> © 2023 insuranzy.com</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
