<header class="header fixed clearfix navbar navbar-fixed-top" id="navmain" {{isset($nav_trans)?"data-navtransparent":""}}>
	<div class="container" id="head-container">
		<div class="row">
			<div class="clg-name container">
				<div class="header-left clearfix">

					<div class="logo smooth-scroll"  style="float: left;">
						<a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" alt="KC College logo" height="60" width="60"></a>
					</div>

					<div class="smooth-scroll">
						<div class="site-name"><a href="/" id="head-site-name" style="text-decoration:none;">K.C. College of Engineering &amp; Management Studies &amp; Research</a></div>
					</div>

				</div>
				<!-- header-left end -->

			</div>
		<div class="navbar-container-listholder">
			<!-- header-right start -->
			<!-- ================ -->
			<div class="header-right clearfix">

				<!-- main-navigation start -->
				<!-- ================ -->
				<div class="main-navigation animated">

					<!-- navbar start -->
					<!-- ================ -->
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">

							<!-- Toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active sub-menu-parent"><a href="/">Home</a>
									</li>
									<li class="sub-menu-parent"><a href="/about">About</a>
										<ul class="sub-menu">
											<li><a href="/about">College Info</a></li>
											<li><a href="/about">Vision &amp; Mission</a></li>
											<li><a href="/about">Board of Governance</a></li>
											<li><a href="/about">Principal's Desk</a></li>
											<li><a href="/about">Infrastructure &amp; Activities</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="#">Academics</a>
										<ul class="sub-menu">
											<li><a href="{{route('curriculum-plan')}}">Curriculum Plan</a></li>
											<li><a href="{{route('staff-notices')}}">Staff Noticies</a></li>
											<li><a href="http://www.learningatkc.com/moodle/login/index.php">Gate / PSU</a></li>
											<li><a href="{{route('publications')}}">Publications / News Letter</a></li>
											<li><a href="{{route('exam-results')}}">Exam Notices</a></li>
											<li><a href="{{route('exam-results')}}">Exam Timetable</a></li>
											<li><a href="{{route('exam-results')}}">Exam Results</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="#">Departments</a>
										<ul class="sub-menu">
											@foreach (App\Department::all() as $dep)
												<li><a href="{{route("department",$dep->url)}}">{{$dep->name}}</a></li>
											@endforeach
											<li><a href="http://kcims.org/" target="_blank">MMS</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="#">Library</a>
										<ul class="sub-menu">
											<li><a href="#">Question Papers</a></li>
											<li><a href="#">E-Books &amp; Journals</a></li>
											<li><a href="#">Syllabus</a></li>
											<li><a href="#">Timetable</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="">Admissions</a>
										<ul class="sub-menu" id="large-sub-menu">
											<li><a href="{{route('admissions', 'admission-criteria')}}">Admission Criteria</a></li>
											<li><a href="{{route('admissions', 'fees-notices')}}">Fees Notices</a></li>
											<li><a href="{{route('admissions', 'institute-prospectus')}}">Institute Prospectus</a></li>
											<li><a href="{{route('admissions', 'dte-admission-information-brochure')}}">DTE Admission Information Brochure</a></li>
											<li><a href="{{route('admissions', 'total-intake')}}">Total Intake</a></li>
											<li><a href="{{route('admissions', 'cap-rount-allottment')}}">Cap Round Allottment</a></li>
											<li><a href="{{route('admissions', 'direct-second-year')}}">Direct Second Year</a></li>
											<li><a href="{{route('admissions', 'anti-ragging-affidavit')}}">Anti-ragging Affidavit</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a>Mandatory Disclosure</a>
										<ul class="sub-menu">
											<li><a href="{{route('mandatory-disclosure', 'aicte-affiliation')}}">AICTE affiliation</a></li>
											<li><a href="{{route('mandatory-disclosure', 'audit-statement')}}">Audit statement</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a>Alumni</a>
										<ul class="sub-menu">
											{{-- <li><a href="#">Student Login/Information</a></li>
											<li><a href="#">Student Feedback</a></li> --}}
											<li><a href="#">Alumni Portal</a></li>
											<li><a href="#">Alumni Association</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="#">TPO</a>
										<ul class="sub-menu">
											<li><a href="#">Function &amp; Responsibilities</a></li>
											<li><a href="#">Placement Statistics</a></li>
											<li><a href="#">Training &amp; Placement Process</a></li>
											<li><a href="#">Feedback</a></li>
										</ul>
									</li>
									</li>
									<li class="sub-menu-parent"><a href="http://www.kcecell.org/" target="_blank">E-Cell</a>
									</li>
									<li class="sub-menu-parent"><a href="#">Life At KC</a>
										<ul class="sub-menu">
											<li><a href="#">Staff</a></li>
											<li><a href="#">Student</a></li>
										</ul>
									</li>
									<li class="sub-menu-parent"><a href="/#contact">Contact</a>
									</li>
								</ul>
							</div>

						</div>
					</nav>
					<!-- navbar end -->

				</div>
				<!-- main-navigation end -->

			</div>
			<!-- header-right end -->
			</div>
		</div>
	</div>
</header>
<!-- header end -->
