<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nevaeh Williams</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/projects.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  </head>

  <body>
    <div class="cover-container d-flex h-100 p-3 flex-column">
      <header class="masthead mb-auto">
            <div class="inner justify-content-center pt-2">
                <a href="index.html">
                  <img src="images/name.PNG" class="masthead-brand" style="height: 50px; margin-top: -10px;"></img>
                </a>
                <nav class="nav nav-masthead navbar-right">
                    <a class="nav-link" href="about_me.html">ABOUT ME</a>
                    <a class="nav-link" href="projects.php">PORTFOLIO</a>
                    <a href="resume_nw.pdf" class='download nav-link' download="nevaeh_williams_resume">RESUME</a>
                </nav>
            </div>
        </header>
        
        <div class="main pb-5 mb-5">

          <div class="row d-flex h-100 mt-5 ml-5">
            <div class="col-lg" style="text-align: center;">
              <h1 class="pb-1">PORTFOLIO</h1>
              <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('all')">All</button>
                <button class="btn" onclick="filterSelection('web')">Web Development</button>
                <button class="btn" onclick="filterSelection('freelance')">Freelance</button>
                <button class="btn" onclick="filterSelection('personal')">Personal Projects</button>
                <button class="btn" onclick="filterSelection('mca')">McAlister's Deli</button>
              </div>

              <hr/>

              <!-- Portfolio Gallery Grid -->               
              <div class="row">
                 <!--FREELANCE-->
                 <div class="column freelance">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/fishers/neuro_ed.JPG" class="item-container img-fluid" alt="neuroed" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Logo developed for Neuro Ed LLC.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column freelance">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/fishers/attendance.JPG" class="item-container img-fluid" alt="fishers attendance" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Attendance poster developed for Fishers High School.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                 <!--WEB DEVELOPMENT-->
                <div class="column web">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww_poster.jpg" class="item-container img-fluid" alt="capstone poster" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Informational Poster developed for Waste Warrior, a tracking system for inventory and food waste.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column web">
                <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww1.png" class="item-container img-fluid" alt="capstone one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Waste Warrior allows users to upload and enter data that affects the amount of food.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column web">
                <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww2.png" class="item-container img-fluid" alt="capstone two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Support page within Waste Warrior that includes a chatbot, which provides visitors with quick and easy access to assistance.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="column web">
                <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww3.png" class="item-container img-fluid" alt="capstone three" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Waste Warrior offers detailed data visualizations for trash bin waste, sales categorized by menu categories, and food waste by specific item. These visuals can be exported as PDF reports for distribution as needed.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column web">
                <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww4.png" class="item-container img-fluid" alt="capstone four" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Analytics Dashboard page within Waste Warrior where the user can then visualize their data in an understandable format and gain insight into potential adjustments.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column web">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/capstone/ww5.png" class="item-container img-fluid" alt="capstone five" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Home Page after logging into Waste Warrior application. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
                <!-- MISC -->
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/marvel1.JPG" class="item-container img-fluid" alt="marvel one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Line art depicting scene from a Marvel movie.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/avery1.JPG" class="item-container img-fluid" alt="avery one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Sports edit created for high school athlete.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/avery2.jpg" class="item-container img-fluid" alt="avery two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Sports edit created for high school athlete.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/avery3.JPG" class="item-container img-fluid" alt="avery three" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Personal edit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/bryce1.JPG" class="item-container img-fluid" alt="bryce one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Sports edit created for high school athlete.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/bryce2.JPG" class="item-container img-fluid" alt="bryce two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Sports edit created for high school athlete.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/marvel3.JPG" class="item-container img-fluid" alt="marvel three" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Line art depicting scene from a Marvel movie.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/project1.jpg" class="item-container img-fluid" alt="project one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Artwork created during graphic design course at Indiana University.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/project2.JPG" class="item-container img-fluid" alt="project two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Artwork created during graphic design course at Indiana University.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/staff_hero.PNG" class="item-container img-fluid" alt="staff hero" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Artwork created for company outing involving higher-up staff, with the intention of printing on t-shirts. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column personal">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/misc/marvel2.JPG" class="item-container img-fluid" alt="marvel two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Line art depicting scene from a Marvel movie.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--MCA-->
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering5.png" class="item-container img-fluid" alt="catering five" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Halloween graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering1.JPG" class="item-container img-fluid" alt="catering one" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Free Tea Day graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering2.JPG" class="item-container img-fluid" alt="catering two" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Free Tea Day graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering3.png" class="item-container img-fluid" alt="catering three" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Christmas graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering4.png" class="item-container img-fluid" alt="catering four" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Black Friday graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering6.png" class="item-container img-fluid" alt="catering six" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Halloween graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering7.png" class="item-container img-fluid" alt="catering seven" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Mardi Gras graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering8.png" class="item-container img-fluid" alt="catering eight" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">New Years graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering9.JPG" class="item-container img-fluid" alt="catering nine" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">March Madness graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering10.JPG" class="item-container img-fluid" alt="catering ten" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">March Madness graphic created for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/delivery_sign.JPG" class="item-container img-fluid" alt="delivery sign" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Directional poster targeting delivery drivers for the Fishers location.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/mailing.jpg" class="item-container img-fluid" alt="mailing letter" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Mailing promotional letter for catering department.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/catering11.jpg" class="item-container img-fluid" alt="catering eleven" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                          <p class="text-dark mb-0">Hiring poster for Keystone location.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column mca">
                  <div class="item-box">
                    <div class="content">
                      <img src="portfolio/work/drivers.jpg" class="item-container img-fluid" alt="driver poster" style="width:100%">
                      <div class="item-mask">
                        <div class="item-caption">
                        <p class="text-dark mb-0">Promotional Hiring Poster for Keystone location.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- END GRID -->
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-5 pt-5 pl-5 text-center" style="margin-top: 300px;">
          <footer class="py-3 my-3">
              <div class="border-bottom" style="margin-bottom: 0px;">
                <h3 class="text-center" style="font-size: 32px; margin-bottom: 5px;">Let's Connect</h3>
                <div class="row justify-content-center" style="margin-bottom: -5px;">
                  <div class="col-2">
                    <a class="lead" href= "mailto: nevwilli@iu.edu" style="font-size: 18px;">Get in Touch</a>
                  </div>
                  <div class="col-1" style="margin-left: -70px; margin-right: -70px;">
                    <p>•</p>
                  </div>
                  <div class="col-2">
                    <a class="lead" href= "https://www.linkedin.com/in/nevaeh-williams-767a5518a?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B6QZaa7IJQ42sOm3w1eNPgw%3D%3D" style="font-size: 18px;">My LinkedIn</a>
                  </div>
                </div>
              </div>
              <p class="text-center lead pt-3" style="font-size: 16px;">© Nevaeh Williams</p>
            </footer>
        </div>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    
    <script>
      filterSelection("all")
      function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
          w3RemoveClass(x[i], "show");
          if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
      }

      function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
      }

      function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
          while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
          }
        }
        element.className = arr1.join(" ");
      }


      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
      </script>

  </body>
</html>
