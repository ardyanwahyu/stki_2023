<!DOCTYPE html>
<html lang="en">

<?php
  require_once('stemming.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stemming</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="header">
    <h1>Pemenggalan Kata</h1>
    <p>Stemming Algoritma Nazief di PHP dan MySQL</p>
  </header>

  <nav class="navbar">
    <ul>
      <li class="utama"><a href="/"></a></li>
      <li class="utama"><a href="/"></a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
      <?php
        if (isset($_GET['/'])) {
          $pageload=$_GET['/'];
        }else{
          $pageload="/";
        }
        switch ($pageload) {
          case 'view':
            include "view.php";
            break;
          default:
            include "home.php";
            break;
        }
      ?>
    </div>
    
  </main>

  <footer class="footer">
    <p>Copyright &copy 2024</p>
  </footer>

</body>

</html>
