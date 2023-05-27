<!DOCTYPE html>
<html>
<head>
    <title>Insurance Companies</title>
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
        
        .company-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 30px;
        }
        
        .company-item {
            padding: 20px;
            border: 3px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            font-size: 18px;
            background-color: #f8f9fa;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .company-item a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        
        .company-item:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background-color: #e9ecef;
            border-color: #999;
        }
        
        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 40px;
        }
        
        .mt-auto {
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Car Insurance   </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
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

    <div class="container mt-5">
        <div class="company-list">
            <?php foreach ($companies as $company): ?>
                <div class="company-item">
                    <a href="<?php echo base_url('insurance/brands/' . $company['id']); ?>"><?php echo $company['name']; ?></a>
                </div>

                
            <?php endforeach; ?>
        </div>
        <p style="font-weight: bold; font-size: 16px; line-height: 1.6;">
            When comparing car insurance quotes, it's essential to consider various factors to ensure a comprehensive evaluation. Here's a step-by-step guide to help you through the process:
            <ul>
                <li>Before requesting quotes, assess your coverage requirements. Consider factors such as your car's value, your budget, and any specific coverage options you need, such as collision coverage or roadside assistance.</li>
                <li>Compare the premiums offered by different providers for the same coverage levels. Pay attention to any additional fees or charges that may be included.</li>
                <li>Evaluate the coverage options provided by each insurer.</li>
            </ul>
        </p>
    </div>

    <footer class="footer mt-auto">
        <p>&copy; <?php echo date('Y'); ?> insurance.com</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
