<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    
    <main>
        <?php
        $currentTime = date('Y-m-d H:i:s');
        ?>
        <h2>Home Page</h2>
        <p>Welcome to our website! This is a simple home page created with PHP.</p>
        <p>Current server time: <?php echo $currentTime; ?></p>
        <?php
        $connect = mysqli_connect(
            'db',
            'demo',
            'password',
            'demo'
        );
      
        $query = 'SELECT * FROM colour ORDER BY name';
        $result = mysqli_query($connect, $query);

        while($record = mysqli_fetch_assoc($result))
        {
    
            echo '<h2>'.$record['name'].'</h2>
                <div style="width: 200px; height: 200px; background-color: '.$record['rgb'].';"></div>
                <hr>';
    
        }
        ?>
    </main>
</body>
</html>