<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contacts</title>
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

        <section class="container">
            <div class="text-center">
                <h4>Dear mountain adventure enthusiasts!</h4>
                <p>Before embarking on an exciting journey into the world of mountain exploration with us, we would like to learn more about your interests and preferences. Please fill out our short form so that we can create the perfect itinerary for you.</p> 
                <p>If you have any questions or special requests, feel free to let us know. We are ready to make your mountain adventure unforgettable and as comfortable as possible!</p>
                <p>Thank you for your attention, and we wish you incredible experiences on your upcoming mountain adventures!</p>
            </div>
            <div class="row form"> 
              <div class="col-25">
                <h4>Contact us</h4>
              </div>
                <!--formular sem-->
                <div class="col-10"></div>
                <form id="contact" action="thankyou.html">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="experience">Mountain Hiking Experience:</label>
                    <input type="text" id="experience" name="experience">

                    <label for="preferences">Mountain Preferences:</label>
                    <input type="text" id="preferences" name="preferences">
    

                    <button type="submit">Submit</button>
                </form>
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