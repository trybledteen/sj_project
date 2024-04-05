<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gallery</title>
</head>
<body>
    <header class="container main-header">
        <div>
            <a href="index.html">
                <img src="img/logo.jpg" height="40">
            </a>
        </div>
      <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="questions.html">Questions</a></li>
            <li><a href="contacts.html">Contacts</a></li>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header>
    <main>
        <section class="slides-container">
            <div class="slide fade">
              <img src="img/banner1.jpg">
              <div class="slide-text">
                I love peaks as individuals, as equal parts of a larger whole.
              </div>
            </div>

            <div class="slide fade">
              <img src="img/banner3.jpg">
              <div class="slide-text">
                I'm not going to conquer the mountains - they are as much a part of the world as people. I'm conquering myself.
              </div>
            </div>
            
            <a id="prev" class="prev">❮</a>
            <a id="next" class="next">❯</a>
        </section>
        
        <section class="container cont">
            <div class="row_text">
              <div class="col-100 text-center">
                  <p class="bottom_text"><strong><em>"Only wise mountains can tolerate human selfishness for centuries... But even their patience has a limit."</em></strong></p>
              </div>
            </div>
        </section>
        <section>
            <div class="photo">
                <h1 class="gallery">Gallery</h1>
                <div class="img">
                    <img src="img/gallery/gal1.jpg">
                </div>
                <div class="img">
                    <img src="img/gallery/gal2.jpg">
                </div>
                <div class="img">
                    <img src="img/gallery/gal3.jpg">
                </div>
                <div class="img">
                    <img src="img/gallery/gal4.jpg">
                </div>
                <div class="img">
                    <img src="img/gallery/gal5.jpg">
                </div>
                <div class="img">
                    <img src="img/gallery/gal6.jpg">
                </div>
            </div>
            </section>
    </main>
    <footer class="container bg-dark text-white">
        <div class="row">
          <div class="col-25">
            <h3>Social network</h3>
            <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
          </div>
          <div class="col-25">
            <h3>Rýchle odkazy</h3>
            <p><a href="index.html">Home</a></p>
            <p><a href="gallery.html">Gallery</a></p>
            <p><a href="contacts.html">Contacts</a></p>
          </div>
        <div class="row">
          Created by Viktoriia Oliynyk 
        </div>
      </footer>
    <script src="js/menu.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>