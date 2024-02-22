 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>University Name</title>
    <script src="https://kit.fontawesome.com/3bf12fb0ee.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  </head>
  <body>
    <!-- Navigation Bar -->
    <nav>
      <div class="nav-bar">
        <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/en/4/4e/Indira_Gandhi_Delhi_Technical_University_for_Women_logo.png" height='50' />
</div>
          <ul>
            <li><a href="#about">About Us</a></li>
            <li><a href="#studentLife">Student Life</a></li>
            <li><a href="#programs">Programs</a></li>
            <li><a onclick="showModal()">Contact</a></li>
            <div class="search-box">
              <input class="search-input" type="text" placeholder="🔎 Search something.. ">
            </div>
          </ul>
        </div>
      </div>
    </nav>
  
    <!-- Header Section -->
    <!-- <header>
      <div class="header-content">
        <h1>Welcome to IGDTUW</h1>
        <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
        <p>ISO 9001:2015 Certified University</p>
        <a href="#admission" class="btn">Apply Now</a>
      </div>
    </header>

    <!-- Programs Section -->
     <!-- <section id="programs" class="section">
        <div class="section-content">
         
        </div>
      </section> -->

    <!-- Carousel Section -->
    <!-- <section class="section">
      <div class="carousel-container">
        <div class="carousel" id="imageCarousel">
        </div>
      </div>
    </section> -->

    <div class="carousel-container">
        <div class="carousel-slide" id="carousel-slide">
            <?php
            $imageFolder = 'images/';
            $images = glob($imageFolder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            foreach ($images as $image) {
                echo '<img src="' . $image . '" alt="Slide">';
            }
            ?>
        </div>
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    
    <!-- Card vision and mission -->
    <section id="about" class="section vision-mission">
        <h2 class="heading" >About Us</h2>
      </div>
      <div class="cards">
        <div class='card-container vision'>
              <h2> Vision 
                <i class="fa fa-eye" aria-hidden="true"></i>
              </h2>
            <p> To make India a Knowledge Society and Knowledge Economy by empowering the women of our country through education in Engineering, Science, Management and Technology and To become one of the top technical Universities in the country known for its value based, quality technical education supported with industry relevant research, with focus on environmental and social issues.
        </p>
        </div>


            <div class='card-container mission'>
              <div class='card-heading'>
                  <h2> Mission                   <i class="fa fa-flag" aria-hidden="true"></i>
</h2>

                </div>
                <ul> 
                  <li>To foster an environment for excellence in professional education and ensure active participation of women in the field of Engineering, Science, Management and Technology, while striking out a work-life balance.
        </li>
                  <li>To start new professional courses for women in sun-rise disciplines and forge alliances with industry to impart industry relevant education.
        </li>
                  <li>To emancipate women through pursuit of knowledge enabling them to gain equal status in society through realization of their rights and responsibilities
        </li>
                  <li>To develop sustainable systems and state-of-the-art infrastructure to enable the Indian women to become the future leaders, managers, researchers and productive team players in the field of science, technology and management.
        </li>
                </ul>

            </div>
        <!-- <div class='card-container'>
          <div class='card-heading'>
              <h2> Objective </h2>
               icon 
            </div>
          As per IGDTUW Act 2012 vide clause 6 the objectives of the University shall be:-
            <ul> 
              <li>To evolve and impart comprehensive professional education with focus on but not restricted to Engineering, Technology, Sciences, Management and such areas as deemed fit;
        </li>
              <li> To facilitate and promote studies leading to award of degrees, diplomas and certificates;</li>
                 <li>To achieve excellence in Engineering, Technology, Sciences, Management and allied areas and matters connected therewith or incidental thereto;</li>
                 <li>To establish Centres of Advanced Studies, Research and innovation in various relevant areas of Sciences, Engineering, Technology, Management and allied areas;</li>
                 <li>To promote development of products, services and entrepreneurship;</li>
                 <li>To be industry relevant and to create an impact on the academic community in India and abroad;</li>
              <li>To establish linkages between the University, Industries, Research and Development Organizations and other Universities/Institutes for collaborative (including dual degree) teaching and research programmes in India and abroad;</li>
              <li>To promote global interaction through faculty and student exchange in the areas of Science, Engineering, Technology, Management and other allied areas as deemed fit;</li>
              <li>To set up innovation centres, knowledge Park and Technology incubators to foster Techno-entrepreneurship, innovation and new product development;</li>
              <li>To disseminate knowledge and contribute towards nation building and faculty development by organizing expert lectures, seminars, symposia, workshops , conferences, summer and winter schools, short term training programs and refresher courses from time to time;</li>
              <li>To promote and foster cultural and ethical values with a view to promote and foster professional morality, research integrity, globally acceptable business ethics and morals for professionals;</li>
                <li> To publish periodicals, treatises, studies, books, reports, journals and other literatures on subjects pertinent to academic areas of the university, including electronics resources.

        </li>
              <li>To emancipate women through pursuit of knowledge enabling them to gain equal status in society through realization of their rights and responsibilities
        </li>
              <li>To develop sustainable systems and state-of-the-art infrastructure to enable the Indian women to become the future leaders, managers, researchers and productive team players in the field of science, technology and management.
        </li>
            </ul>

        </div> -->

      
    </section>
        
        <!-- student-life -->
    <section id="studentLife" class="section">
      <div class="section-student">
        <h2 class="heading">Student Life</h2>
        <div class="row">
        
          <div class="column">
                        <img src="https://img.freepik.com/free-photo/side-view-woman-working-laptop_23-2149546187.jpg?w=360&t=st=1706613812~exp=1706614412~hmac=77e871da03035969113b8d54a7556628ed26d89e1c36bc055469985a446e5796"> 
            <img src="img2/img2.jpg">

          </div>
          <div class="column">
            <img src="img2/img1.jpg">
            <img src="img2/img3.jpg">
            <img src="img2/img4.jpg">

          </div>
          <div class="column">
            <img src="https://images.hindustantimes.com/img/2022/05/20/550x309/52fdb6de-d880-11ec-ace9-5ee6ff21344d_1653080691450.jpg">

            <img src="https://media.istockphoto.com/id/155288041/photo/indian-girl-in-the-university.jpg?s=612x612&w=0&k=20&c=OPg_GzXdIMZ3btYu61HX79KxSBe7A6BYPSYYknNBafQ=" height="590px">
            
          </div>

        </div>
        
      </div>
    </section>



    <!-- Contact Section -->
        <!-- <section class="contact-card">
            <h2>Contact Us</h2>
            <input type="text" class="contact-input" placeholder="Enter your message" onclick="showModal()">
        </section> -->

        <div class="overlay" onclick="closeModal()"></div>
        <div class="contact-form">
          <span onclick="closeModal()">&times</span>
          <form action="">
              <label for="name">Name:</label>
              <input type="text" class="inp" id="name" />
      
              <label for="">Email:</label>
              <input type="email" class="inp" id="email" />
              <label for="message">Message:</label>
              <input type="text-area" class="inp-message" id="message"/>
          
            <button class="contact-button">Submit</button>
          </form>
        </div>
 

        <!-- footer -->
    <footer> 
      <div class="social-media">
        <a href="https://www.linkedin.com/school/indira-gandhi-delhi-technical-university-for-women/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/IGDTUW_Delhi?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/igdtuw.official/?hl=en"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
      </div>
      <div class="Useful-Links">
        <h2><u>Useful Links</u></h2>
        <ul>
          <li><a href="https://www.youtube.com/watch?v=alyJeRLX7Pg&feature=youtu.be"> Life@IGDTUW</a></li>
          <li><a href="https://igdtuw.in/IGDTUW/logincheck">ERP Portal</a></li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> Telephone: 011- 23900261, 23900264</li>
        </ul>
      </div>

      <div class="Contacts">
        <h2><u>Contacts</u></h2>
        <ul>
          <li>Indira Gandhi Delhi Technical University For Women</li>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i> Madrasa Road
          Opposite St. James Church
          Kashmere Gate
          Delhi-110006</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> Telephone: 011- 23900261, 23900264</li>
        </ul>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
