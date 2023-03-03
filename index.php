<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>My website</title>
</head>
<body>
    <script src="main.js"></script>	

    <div class= "url">My Website.com</div>
    <header class="nav-bar">
        <nav>
            <ul>
                <li class="list"><a href="index.php">Home</a></li>
                <li class="list"><a href="#">Contact</a></li>
                <li class="list"><a href="#">About</a></li>
            </ul>
        </nav>
    </header>

    <?php include 'home.php'; ?>

    
   
    <?php include 'sidebar.php'; ?>





    <footer class="footer"> <h3>Copyright@2022</h3> </footer>

    
    
</body>
</html>