<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a class="active" href="index.html">Home</a>
            <ul>
              <li><a class="active" href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Position</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-apply.html">Apply for job</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
              <li><a href="job-candidates.html">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.html">Blog</a></li>
              <li><a href="page-post.html">Blog-post</a></li>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>We offer <mark>1,259</mark> job vacancies right now!</h2>
          <h5 class="font-alt">Find your desire one in a minute</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Job title, skills, or company">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="City, state or zip">
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Find jobs</button>
              <a href="job-list.html">Advanced Job Search</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>



      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Latest</span>
            <h2>Recent jobs</h2>
          </header>

          <div class="row item-blocks-connected">

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>Senior front-end developer</h4>
                    <h5>Google</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Menlo park, CA</span>
                    <span class="label label-success">Full-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->


            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-linkedin.png" alt="">
                  <div class="hgroup">
                    <h4>Software Engineer (Entry or Senior)</h4>
                    <h5>Linkedin</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Livermore, CA</span>
                    <span class="label label-warning">Part-time</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-envato.png" alt="">
                  <div class="hgroup">
                    <h4>Full Stack Web Developer</h4>
                    <h5>Envato</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">San Francisco, CA</span>
                    <span class="label label-info">Freelance</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-facebook.png" alt="">
                  <div class="hgroup">
                    <h4>Web Applications Developer</h4>
                    <h5>Facebook</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Lexington, MA</span>
                    <span class="label label-danger">Internship</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

            <!-- Job item -->
            <div class="col-xs-12">
              <a class="item-block" href="job-detail.html">
                <header>
                  <img src="assets/img/logo-microsoft.jpg" alt="">
                  <div class="hgroup">
                    <h4>Sr. SQL Server Developer</h4>
                    <h5>Microsoft</h5>
                  </div>
                  <div class="header-meta">
                    <span class="location">Palo Alto, CA</span>
                    <span class="label label-success">Remote</span>
                  </div>
                </header>
              </a>
            </div>
            <!-- END Job item -->

          </div>

          <br><br>
          <p class="text-center"><a class="btn btn-info" href="job-list.html">Browse all jobs</a></p>
        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(assets/img/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="6890"></span>+</p>
              <h6>Jobs</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="1200"></span>+</p>
              <h6>Members</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="36800"></span>+</p>
              <h6>Resume</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="15400"></span>+</p>
              <h6>Company</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>Workflow</span>
              <h2>How it works</h2>
            </header>

            <p class="lead">Pellentesque et pulvinar orci. Suspendisse sed euismod purus. Pellentesque nunc ex, ultrices eu enim non, consectetur interdum nisl. Nam congue interdum mauris, sed ultrices augue lacinia in. Praesent turpis purus, faucibus in tempor vel, dictum ac eros.</p>
            <p>Nulla quis felis et orci luctus semper sit amet id dui. Aenean ultricies lectus nunc, vel rhoncus odio sagittis eu. Sed at felis eu tortor mattis imperdiet et sed tortor. Nullam ac porttitor arcu. Vivamus tristique elit id tempor lacinia. Donec auctor at nibh eget tincidunt. Nulla facilisi. Nunc condimentum dictum mattis.</p>
            
            
            <br><br>
            <a class="btn btn-primary" href="page-typography.html">Learn more</a>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="assets/img/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Categories</span>
            <h2>Popular categories</h2>
            <p>Here's the most popular categories</p>
          </header>

          <div class="category-grid">
            <a href="job-list-1.html">
              <i class="fa fa-laptop"></i>
              <h6>Technology</h6>
              <p>Designer, Developer, IT Service, Front-end developer, Project management</p>
            </a>

            <a href="job-list-2.html">
              <i class="fa fa-line-chart"></i>
              <h6>Accounting</h6>
              <p>Finance, Tax service, Payroll manager, Book keeper, Human resource</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-medkit"></i>
              <h6>Medical</h6>
              <p>Doctor, Nurse, Hospotal, Dental service, Massagist</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-cutlery"></i>
              <h6>Food</h6>
              <p>Restaurant, Food service, Coffe shop, Cashier, Waitress</p>
            </a>

            <a href="job-list-2.html">
              <i class="fa fa-newspaper-o"></i>
              <h6>Media</h6>
              <p>Journalism, Newspaper, Reporter, Writer, Cameraman</p>
            </a>

            <a href="job-list-3.html">
              <i class="fa fa-institution"></i>
              <h6>Government</h6>
              <p>Federal, Law, Human resource, Manager, Biologist</p>
            </a> 
          </div>

        </div>
      </section>
      <!-- END Categories -->


      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Subscribe</strong></h2>
          <h6 class="font-alt">Get weekly top new jobs delivered to your inbox</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Your eamil address">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2017 All Rights Reserved by <a href="http://themeforest.net/user/thethemeio">TheThemeio</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
