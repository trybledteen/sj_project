<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Questions</title>
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
            <div class="accordion">
              <div class="question">What are the main destinations offered by your company?</div>
              <div class="answer">Our company provides tours to various mountain regions, including the Alps, the Himalayas, the Andes, and the Carpathians. We also specialize in tours to national parks and remote mountain trails.</div>
            </div>
            <div class="accordion">
              <div class="question">Are there special programs for beginners in mountain tourism?</div>
              <div class="answer">Yes, we have programs tailored for beginners, including training in basic mountain skills, mountain navigation, and safety in extreme conditions.</div>
            </div>
            <div class="accordion">
              <div class="question">What is the duration and cost of an average tour?</div>
              <div class="answer">The duration and cost of tours vary depending on the chosen destination and comfort level. Typically, our tours range from one to two weeks, with budgets to suit different requirements.</div>
            </div>
            <div class="accordion">
                <div class="question">What methods do you use to ensure safety during travels?</div>
                <div class="answer">We adhere to strict safety standards, providing experienced guides trained in first aid, communication devices for emergencies, and regular safety briefings.</div>
              </div>
              <div class="accordion">
                <div class="question">Are your tours adapted for different levels of physical fitness?</div>
                <div class="answer">Yes, our tours are diverse and suitable for both experienced mountaineers and those who are just starting their mountain journey. We offer routes of varying difficulty.
              </div>
              </div>
              <div class="accordion">
                <div class="question">What additional services are included in the tour cost?</div>
                <div class="answer">The tour cost includes transfers, accommodation, basic meals, group activities, and the services of a guide. Additional services can be provided upon request.</div>
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
    <script src="js/accordion.js"></script>
</body>
</html>