<?php
  include_once("function/helper.php");
  $page = isset($_GET['page']) ? $_GET['page'] : false;
  // echo $page;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>weshop | barang-barang elektronik</title>
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
  </head>

  <body>

    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>"/>
            </a>

            <div id="menu">
                <div id="user">
                  <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                  <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>
                <a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button_keranjang">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>"/>
                </a>
            </div>
        </div>

        <div id="content">

          <?php
              $filename = "$page.php";
              if(file_exists($filename)){
                include_once($filename);
              }else{
                echo "Maaf, file tersebut tidak ada di dalam sistem";
              }
          ?>

        </div>
        <div id="footer">
            <p>copyright weshop 2020</p>
        </div>
    </div>

  </body>
</html>
