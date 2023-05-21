<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Css ve JavaScript-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <!-- Yazı Tipi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<title>Giriş</title>

<body>

    <!-- Navigation Bar-->
  
    <nav class="navbar navbar-expand-lg sticky-top mycontainer">
      <div class="container-fluid">
        <a href="index.html" class="navbar-brand">
          <img width="100" src="Images/image.png" height="100"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-angle-double-down mob"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-5">
              <a class="nav-link" href="index.html">Anasayfa</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="takimimiz.html">Takımımız</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
              <a href="login.html" class="nav-link">
                <!-- icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="30" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg> 
              </a></li>
          </ul>
        </div>
      </div>
    </nav>


  
    
    
      <!-- Section: Hakkımda -->
  
      <section class="p-5 text-center hakkimda">
        <div class="container">

          <div class="row">
            <div class="col-md-6">
              <img src="Images/login.png" class="img-fluid" alt="Log-in">
            </div>
            <div class="col-md-6">
                
                 <?php 

                    include("users.php");
                  

                    if (($_POST["email"] == $username) and ($_POST["password"] == $password))
                    {
                    $_SESSION["login"] = "true";
                    $_SESSION["username"] = $username;
                    $_SESSION["password"] = $password;

                    $kullaniciAdi=substr($username, 0, strrpos($username,"@")); 

                    echo '<h1>Sisteme Giriş Başarılı</h1><br><br><h2>HOŞGELDİNİZ</h2><h2> "' . $kullaniciAdi . '"</h2>';

                    }

                    else 
                    {
                        echo '<h1>Başarısız Giriş</h1> <br>'. '<h3>Kullancı Adı veya Şifre Yanlış Girdiniz</h3> <br>';
                        echo "<h3>Lütfen tekrar deneyin</h3>";
                        header("Refresh: 1; url=login.html");
                    }

               ?>
          </div>

        </div>
      </section>

    <!-- Footer -->
    <footer class="text-center p-4 footer">
      <p>Telif Hakkı Saklıdır &copy; 2023 | Ümranay</p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
  </body>
  
  </html>