<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTORI - Favorite</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lacquer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lacquer&family=Onest:wght@200&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <header>
            <div class="logo">
                <a class="logo">HoToRi</a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars fa-2x"></i>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="..//Home page/home.php">Home</a></li>
                    <li><a href="../History/index2.php">History</a></li>
                    <li><a href="../favorite/index.php" class="active">Favorite</a></li>
                </ul>
            </nav>
            <div class="search">
            <div class="search-box">
                <div class="search-icon">
                    <i class="fa fa-search"></i>
                </div>
                    <div class="search-input">
                    <input type="text" class="input" placeholder="Search...">
                </div>
            </div>
        </header>
    </header>

    <div class="favorite-container">
        <div class="favorite-item">
            <img src="1.jpeg" alt="Favorite 1">
            <h2>Judul Favorit 1</h2>
            <p>Terakhir Dibaca: Bab 5</p>
        </div>
        <div class="favorite-item">
            <img src="1.jpeg" alt="Favorite 2">
            <h2>Judul Favorit 2</h2>
            <p>Terakhir Dibaca: Bab 8</p>
        </div>
            <div class="favorite-item">
                <img src="1.jpeg" alt="Favorite 1">
                <h2>Judul Favorit 1</h2>
                <p>Terakhir Dibaca: Bab 5</p>
        </div>
        
    </div>
    <div class="favorite-container">
        <div class="favorite-item">
            <img src="1.jpeg" alt="Favorite 1">
            <h2>Judul Favorit 1</h2>
            <p>Terakhir Dibaca: Bab 5</p>
        </div>
        <div class="favorite-item">
            <img src="1.jpeg" alt="Favorite 2">
            <h2>Judul Favorit 2</h2>
            <p>Terakhir Dibaca: Bab 8</p>
        </div>
            <div class="favorite-item">
                <img src="1.jpeg" alt="Favorite 1">
                <h2>Judul Favorit 1</h2>
                <p>Terakhir Dibaca: Bab 5</p>
        </div>
        
    </div>
</body>
<script>
    // JavaScript for the menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navbar = document.querySelector('.navbar ul');
  
    menuToggle.addEventListener('click', () => {
        navbar.classList.toggle('show-menu');
    });
  </script>
</html>
