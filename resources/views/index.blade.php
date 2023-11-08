<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Development project">
    <meta name="author" content="hadev">
    <title>Project Portofolio</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/abf6edf544.js" crossorigin="anonymous"></script>
  </head>


  <body>
     <!--Header-->
     <header class="header">
      <a class="logo" href="#">Hanny <span class="animate" style="--i:1;"></span></a>

      <idiv class='bx bx-menu' id="menu-icon"><span class="animate" style="--i:2;"></span></idiv>

      <nav class="navbar">

              <a class="link" href="#home">Home</a>
              <a class="link" href="#about">About</a>
              <a class="link" href="#education">Journey</a>
              <a class="link" href="#skills">Skills</a>
              <a class="link" href="#portofolio">Portofolio</a>
              <a class="link" href="#contact">Contact</a>

              <span class="active-nav"></span>
              <span class="animate" style="--i:2;"></span>

      </nav>
     </header>

     <!--Home Section-->
     <section class="home show-animate" id="home">
      <div class="home-content">
        <h1>
          Hi, I'm <span>Hanny Yosephine</span><span class="animate" style="--i:2;"></span>
        </h1>
        <div class="text-animate">
          <h3>Frontend Developer</h3>
          <span class="animate" style="--i:3;"></span>
        </div>
        <p>I am a undergraduate student which is looking for opportunities being a part of developer academy
          at apple academy with a background ininformation and technology.
          <span class="animate" style="--i:4;"></span>
        </p>
        <div class="btn-box">
          <a href="https://wa.me/6282115257721" class="btn"> Let's Talk </a>
          <a href="https://www.linkedin.com/in/hannyyosephine16/" class="btn"> Hire Me </a>
          <span class="animate" style="--i:5;"></span>
        </div>
      </div>

      <div class="home-sci">
        <a href="https://www.instagram.com/hanny.yosephine/"><i class='bx bxl-instagram'></i></a>
        <a href="https://x.com/hanny_yosephine?t=9IPX4HIYvQnShGsgr8duZw&s=08"><i class='bx bxl-twitter'></i></a>
        <a href="https://www.linkedin.com/in/hannyyosephine16/"><i class='bx bxl-linkedin-square'></i></a>
        <span class="animate" style="--i:6;"></span>
      </div>

      <div class="home-imgHover"></div>
      <span class="animate home-img" style="--i:7;"></span>
    </section>

      <!--About Section-->
      <section class="about" id="about">
        <h2 class="heading">About <span>Me</span></h2>
        <div class="about-img">
          <img src="{{asset('image/about.png')}}" alt="">
          <span class="circle-spin"></span>
        </div>
        <div class="about-content">
          <h3>Front Developer!</h3>
          <p>
            I am a professional,active, honest,
            hardworking, creative, problemsolving, conscientious, have good communication, high motivation and
            enthusiasm for learning.
            <br>I am a person who can make decisions quickly and precisely, even when I amin a precarious situation
            or under pressure. For me, every job is important. Working on itmeticulously and as much as possible is
            a form of my responsibility.
          </p>

          <div class="btn-box btns">
            <a href="{{asset('image/cv_hanny.pdf')}}" class="btn">Download CV</a>
          </div>
        </div>
      </section>

      <!--Education -->
      <section class="education" id="education">
        <h2 class="heading">My<span>Journey</span></h2>
        <div class="education-row">
          <div class="education-column">
            <h3 class="title">Education</h3>

            <div class="education-box">
              <div class="education-content">
                <div class="content">
                  <div class="year"><i class='bx bxs-calendar'></i>2015-2018
                  </div>
                  <h3>Junior High School - Lentera Harapan School</h3>
                  <p>JL MESTIKA (PUKAT BANTING II) NO 37 - MANDALA BY PASS,
                    <br>Kec. Medan Tembung, Kota Medan Prov. Sumatera Utara
                    <br>Post Code : 20224 </p>
                </div>
              </div>

              <div class="education-content">
                <div class="content">
                  <div class="year"><i class='bx bxs-calendar'></i>2018-2021
                  </div>
                  <h3>Senior High School - SMAN 17 Medan</h3>
                  <p> JL. LETJEN JAMIN GINTING KM.13,5, LAUCIH,
                    <br> Kec. Medan Tuntungan, Kota Medan Prov. Sumatera Utara
                    <br>Post Code : 20136
                  </p>
                </div>
              </div>

              <div class="education-content">
                <div class="content">
                  <div class="year">
                    <i class='bx bxs-calendar'></i>2021-2025
                  </div>
                  <h3>Bachelor's Degree - Institute Technology Del</h3>
                  <p>Jl. Sisingamangaraja, Sitoluama-Laguboti,
                    <br> Kec.Balige, Kab. Toba Samosir Prov. Sumatera Utara
                    <br>Post Code : 22381</p>
                </div>
              </div>

            </div>
          </div>

          <div class="education-column">
            <h3 class="title">Experience</h3>

            <div class="education-box">
              <div class="education-content">
                <div class="content">
                  <div class="year">
                    <i class='bx bxs-calendar'></i>August 2020 - July 2021
                  </div>
                  <h3>Home Base</h3>
                  <p>Private Home Tutor
                    <br>Tutoring math subject and english
                  </p>
                </div>
              </div>

              <div class="education-content">
                <div class="content">
                  <div class="year">
                    <i class='bx bxs-calendar'></i>August 2022 - Now
                  </div>
                  <h3>Del Institute of Technology</h3>
                  <p>Lab Teaching Assistant (Provided guidance and tutoring)
                   <br> BEM Organization (Department Secretary)
                  </p>
                </div>
              </div>

              <div class="education-content">
                <div class="content">
                  <div class="year">
                    <i class='bx bxs-calendar'></i>2022
                  </div>
                  <h3>Dicoding academy</h3>
                  <p>IDCamp(React web)</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>


      <!--Skills section-->
      <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>

        <div class="skills-row">
            <div class="skills-column">
              <h3 class="title">Hard Skills</h3>

              <div class="skills-box">
                <div class="skills-content">
                  <div class="progress">
                    <h3>Semantic HTML <span>80%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Web & App Development <span>65%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Microsoft Word & Excel <span>60%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Code Languages(java,javascript,phyton) <span>50%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>UI|UX Design <span> 85%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="skills-column">
              <h3 class="title">Soft Skills</h3>

              <div class="skills-box">
                <div class="skills-content">
                  <div class="progress">
                    <h3>Communication <span>90%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Public Speaking<span>85%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Teamwork <span> 95%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3> Thinking Logically and Critically <span>78%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                  <div class="progress">
                    <h3>Problem Solving <span>82%</span></h3>
                    <div class="bar"><span></span></div>
                  </div>

                </div>
              </div>

            </div>
        </div>
      </section>

      <!--Portofolio Section-->
      <section class="portofolio" id="portofolio">
        <h2 class="heading">My <span>Project</span></h2>
        <div id="portofolio">
          <div class="container">
            <div class="work-list">
              <div class="work">
                <img src="{{asset('image/project1.png')}}" alt="" >
                <div class="layer">
                  <h3>Web Apps (Bookshelf Apps)</h3>
                  <p>
                    <br>So, I made this application personally and started from appearance design to development
                    using React as a frame
                  </p>
                  <a href="https://bookshelfapp-three.vercel.app/Bookshelfapps.html"><i class='bx bx-link-external'></i></a>
                </div>
              </div>
              <div class="work">
                <img src="{{asset('image/project2.png')}}" alt="" >
                <div class="layer">
                  <h3>Web Apps(React Notes Apps)</h3>
                  <p>
                    <br>This notes application was created using the React Framework starting from design to development ,
                    where users can take notes in this application
                  </p>
                  <a href="https://personal-notes-app-neon.vercel.app/"><i class='bx bx-link-external'></i></a>
                </div>
              </div>
              <div class="work">
                <img src="{{asset('image/project3.png')}}" alt="" >
                <div class="layer">
                  <h3>Design Figma(UI Desain OLIS Apps)</h3>
                  <p>The OLIS library application design has been around for quite a while and
                    <br> I was inspired to update the design in line with usability testing</p>
                  <a href="https://www.figma.com/proto/rH3jPUcA29lSY4C1aHqOnA/TUGAS-AKHIR-IMK?node-id=1-3"><i class='bx bx-link-external'></i></a>
                </div>
              </div>
              <div class="work">
                <img src="{{asset('image/project_4.png')}}" alt="" >
                <div class="layer">
                  <h3>Design UI/UX <br>(Gemastik Toba Tourism Apps)</h3>
                  <p>Me and my team design and build applications based on problems
                   that occur in accordance with the Sustainable Development Goals</p>
                  <a href="https://www.figma.com/file/XVCw3Z0IdgITQRkjNETjWD/Untitled?type=design&mode=design&t=H8grtHwqc8hsly3v-0"><i class='bx bx-link-external'></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Contact Section-->
      <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form id="contact-form" name="contact-form" method="post">
          <div class="input-box">
            <div class="input-field">
              <label for="fullname"></label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Your Fullname"  maxlength="50">
              <span class="focus"></span>
            </div>
            <div class="input-field">
              <input type="email" class="form-control" id="email_add" name="email" placeholder="Email Address" required maxlength="50">
              <span class="focus"></span>
            </div>
          </div>

          <div class="input-box">
            <div class="input-field">
              <input type="number" id="phone" name="mobile" placeholder="Mobile Number" required>
              <span class="focus"></span>
            </div>
            <div class="input-field">
              <input type="text" id="email_subject" name="subject" placeholder="Email Subject" required>
              <span class="focus"></span>
            </div>
          </div>

          <div class="textarea-field">
            <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Write Your Message" required></textarea>
            <span class="focus"></span>
          </div>

          <div class="btn-box btns">
            <button type="submit" class="btn btn-success">Send Messages</button>
          </div>

        </form>
      </section>


      <!-- Footer -->
      <footer>


       <div class="row">
        <div class="col">
          <h3>About Me</h3>
          <p>
            My passion for staying at the forefront of web technologies
            and my knack for creating responsive and accessible websites ensure
            that I deliver engaging digital experiences that resonate with users.
          </p>
        </div>
        <div class="col">
          <h3>Home Address</h3>
          <p>Bunga Ncole IX No. 11A</p>
          <p>Kel. Kemenangan Tani, Kec. Medan Tuntungan</p>
          <p>Pos Code : 20136, North Sumatera, Indonesia</p>
          <p class="email-id">hannyyosephine37@gmail.com</p>
          <a href="tel:+6282115257721">+6282115257721</a>
        </div>
        <div class="col">
          <h3>Links</h3>
          <ul>
            <li><a class="link" href="#home">Home</a></li>
            <li><a class="link" href="#about">About</a></li>
            <li><a class="link" href="#education">Journey</a></li>
            <li><a class="link" href="#skills">Skills</a></li>
            <li><a class="link" href="#portofolio">Portofolio</a></li>
            <li><a class="link" href="#contact">Contact</a</li>
            </ul>
        </div>
        <div class="col">

       </div>
       <div class="social-icons">
        <a href="https://www.instagram.com/hanny.yosephine/"><i class="fa-brands fa-square-instagram"></i></a>
       <a href="https://x.com/hanny_yosephine?t=9IPX4HIYvQnShGsgr8duZw&s=08"><i class="fa-brands fa-square-x-twitter"></i></a>
       <a href="https://www.linkedin.com/in/hannyyosephine16"><i class="fa-brands fa-linkedin"></i></a>
       <a href="https://wa.me/628211525772"><i class="fa-brands fa-square-whatsapp"></i></a>
      </div>
     </div>

       <div class="footer-text">
        <p>Copyright &copy; 2023 by Code by Hanny Yosephine  | All Rights Reserverd.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
      </div>




      </footer>

     <script src="{{asset('js/script.js')}}"></script>
     <script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?f=bz4aggh1&n=n1.ratufa.io"></script>
  </body>
</html>
