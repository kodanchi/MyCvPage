<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<!-- ========================================= -->
	<!-- $META TAGS                                -->
	<!-- ========================================= -->

	<meta charset="UTF-8">
	<meta name="description" content="brief description here">
	<meta name="keywords" content="insert, keywords, here">
	<meta name="robots" content="index, follow">
	<meta name="author" content="krazicode">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ========================================= -->
	<!-- $PAGE TITLE                               -->
	<!-- ========================================= -->

	<title>Kodanchi &#8226; Who,Why and How</title>

	<!-- ========================================= -->
	<!-- $PAGE FAVICON                             -->
	<!-- ========================================= -->

	<link rel="icon" type="image/png" href="../public/media/images/favicon.png">

	<!-- ========================================= -->
	<!-- $STYLESHEETS                              -->
	<!-- ========================================= -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/base.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/skins/mint.css')}}">
	{{--<link rel="stylesheet" href="css/bootstrap.min.css">--}}
	{{--<link rel="stylesheet" href="">--}}
	{{--<link rel="stylesheet" href="css/animate.min.css">--}}
	{{--<link rel="stylesheet" href="css/magnific-popup.css">--}}
	{{--<link rel="stylesheet" href="css/base.css">--}}
	{{--<link rel="stylesheet" href="css/style.css">--}}
	{{--<link rel="stylesheet" href="css/skins/mint.css">--}}

	<!-- ========================================= -->
	<!-- $GOOGLE FONTS                             -->
	<!-- ========================================= -->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<!-- ========================================= -->
<!-- $TABBLE OF CONTENTS                       -->
<!-- ========================================= -->

<!--

		> $PRELOADER SECTION
		> $HOME SECTION

			> #HOME PERSONAL PHOTO
			> #HOME NAME
			> #HOME PROFESSION NAME

		> $NAVIGATION
		
			> #NAVIGATION HIRE BUTTON
			> #NAVIGATION TOGGLE BUTTON
			> #NAVIGATION MENU

		> $PROFILE SECTION
			
			> #PROFILE TITLE
			> #PROFILE PHOTO
			> #PROFILE STORY

		> $HOBBIES SECTION

			> #HOBBIES TITLE	
			> #HOBBIES CONTENT

		> $RESUME SECTION

			> #EDUCATION

				> @EDUCATION TITLE
				> @EDUCATION TIMELINE

			> #EXPERIENCE

				> @EXPERIENCE TITLE
				> @EXPERIENCE TIMELINE

			> #RECOGNITION

				> @RECOGNITION TITLE
				> @RECOGNITION TIMELINE

			> $MILESTONES SECTION

				> #MILESTONES LIST

		> $SKILLS SECTION

			> #SKILLS TITLE
			> #SKILLS TABS
			> #SKILLS PANELS

				> @CODING PANEL
				> @DESIGN PANEL
				> @LANGUAGES PANEL
				> @KNOWLAGE PANEL
				> @PERSONAL PANEL

		> $SERVICES SECTION

			> #SERVICES TITLE
			> #SERVICES CONTENT

		> $PROCESS SECTION

			> #PROCESS TITLE
			> #PROCESS CONTENT

		> $PORTFOLIO SECTION

			> #PORTFOLIO TITLE
			> #PORTFOIO ITEMS
			> #PORTFOLIO LOAD MORE

		> $PRICING SECTION

			> #PRICING TITLE
			> #PRICING CONTENT

		> $CLIENTS SECTION 

			> #CLIENTS TITLE
			> #CLIENTS CONTENT

		> $NEWS SECTION

			> #NEWS SECTION TITLE
			> #NEWS SECTION CONTENT

				> @POST
		> @LOAD MORE POSTS BUTTON

		> $TESTIMONIAL SECTION

			> #TESTIMONIAL HEADER
			> #TESTIMONIALS

		> $CONTACT SECTION

			> #CONTACT TITLE
			> #CONTACT TABS
			> #HIRE FORM
			> #CONTACT FORM

		> $FOOTER SECTION

			> #FOOTER SOCIAL LIST
			> #COPYRIGHT

		> $SCRIPTS

	-->

<body style="overflow-y: hidden;">

<!-- ========================================= -->
<!-- $PRELOADER SECTION                        -->
<!-- ========================================= -->

<section id="preloader"></section>

<!-- ========================================= -->
<!-- $HOME SECTION                             -->
<!-- ========================================= -->

<section id="home" class="text-center no-overflow gradient">

	<div class="container text-center">

		<!-- FULLSCREEN HOLDER -->
		<div class="fullscreen inline-block">

			<!-- TABLE LAYOUT -->
			<div class="table" style="height: 100%; margin-top: -70px;">

				<!-- TABLE CELL -->
				<div class="table-cell v-middle">




					<!-- #HOME PERSONAL PHOTO -->
					<div class="lg-rounded-box home__image-box" style="background-image: url('{{asset('/media/images/'.$userDet['pic_url'])}}');background-size: cover;background-repeat: round">
						{{--<img src="{{asset('media/images/'.$userDet['pic_url'])}}" class="img-responsive lg-rounded-box" alt="#">--}}
						<button  class="btn btn-icon">
							<i class="fa fa-pencil-square-o fa-2x " style="color: black;"  aria-hidden="true"></i>
						</button>
					</div>


					<!-- #HOME NAME -->
					<h1 class="heavy text-uppercase home__name">i'm {{$userDet['fname']}}</h1>

					<!-- #HOME PROFESSION NAME -->
					<span class="text-uppercase small home__profession">{{$cv->cv_name}}</span>
					<button type="button" class="btn btn-default btn-lg">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						Star
					</button>
				</div>

			</div>

			<!-- #SCROLL ANIMATION COMPONENT -->
			<div class="rings">
				<span>scroll</span>
				<div class="ring ring-1"></div>
				<div class="ring ring-2"></div>
				<div class="ring ring-3"></div>
			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $NAVIGATION                               -->
<!-- ========================================= -->

<section id="navigation">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-table">

				<!-- NAVIGATION CONTROLS -->
				<div class="navbar-cell tight">
					<div class="navbar-header">
						<div>

							<!-- #NAVIGATION HIRE BUTTON -->
							<a href="#contact" class="btn btn-hire btn--main-inverted">
								<i class="fa fa-briefcase"></i><!--
										--><span>hire me</span>
							</a>

							<!-- #NAVIGATION TOGGLE BUTTON -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="fa fa-bars normal"></span>
							</button>

						</div>
					</div>
				</div>

				<!-- #NAVIGATION MENU -->
				<div class="navbar-cell stretch">
					<div class="collapse navbar-collapse" id="navbar-collapse-1">
						<div class="navbar-cell">
							<ul class="nav navbar-nav navbar-right text-uppercase bold small">
								<li>
									<a href="#home">
										<i class="fa fa-home fa-fw"></i>
										<span>home</span>
									</a>
								</li><!--
									--><li>
									<a href="#profile">
										<i class="fa fa-female fa-fw"></i>
										<span>profile</span>
									</a>
								</li><!--
									--><li>
									<a href="#resume">
										<i class="fa fa-book fa-fw"></i>
										<span>resume</span>
									</a>
								</li><!--
									--><li>
									<a href="#skills">
										<i class="fa fa-pie-chart fa-fw"></i>
										<span>skills</span>
									</a>
								</li><!--
									--><li>
									<a href="#services">
										<i class="fa fa-cog fa-fw"></i>
										<span>services</span>
									</a>
								</li><!--
									-><li>
										<a href="#portfolio">
											<i class="fa fa-briefcase fa-fw"></i>
											<span>work</span>
										</a>
									</li><!--
									-><li>
										<a href="#pricing">
											<i class="fa fa-dollar fa-fw"></i>
											<span>pricing</span>
										</a>
									</li><!--
									-><li>
										<a href="#news">
											<i class="fa fa-comment fa-fw"></i>
											<span>news</span>
										</a>
									</li><!--
									--><li>
									<a href="#testimonials">
										<i class="fa fa-pencil fa-fw"></i>
										<span>testimonials</span>
									</a>
								</li><!--
									--><li>
									<a href="#contact">
										<i class="fa fa-envelope fa-fw"></i>
										<span>contact</span>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- /.navbar-collapse -->
				</div>

			</div>
		</div>
	</nav>
</section>

<!-- ========================================= -->
<!-- $PROFILE SECTION                          -->
<!-- ========================================= -->

<section id="profile" class="main-block">
	<div class="container text-center">

		<!-- #PROFILE TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-user mega"></i>
					<h1 class="text-uppercase heavy lh padder">profile</h1>
					<em class="h5 serif em text-capitalize regular">my personal info</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						{{$cv->bio}}
					</p>
				</div>
			</div>
		</div>

		<!-- #PROFILE CONTENT -->
		<div class="row main-block__padder text-left">

			<!-- #PROFILE PHOTO -->
			<div class="col-lg-4 col-md-6 col-lg-push-4 text-center wow fadeInUp">
				<div class="inline-block photo-column-inner">
					<div class="xlg-rounded-box profile-image-holder center-block">
						<img src="{{asset('/media/images/'.$userDet['pic_url'])}}" class="img-responsive"  style="margin-top: 0;" alt="#">
					</div>
					<div class="md-padder">
						<a href="media/newcv.pdf" class="btn btn-block btn--main-color">download resume</a>
					</div>
				</div>
			</div>

			<!-- #PROFILE PERSONAL INFO -->
			<div class="col-lg-4 col-md-6 col-lg-push-4 info-column wow fadeInUp">
				<div>
					<h5 class="text-capitalize">personal info</h5>
					<ul class="padder list-unstyled info-list">
						<li>Name : {{$userDet['name']}}</li>
						<li>Age : {{$userDet['age']}} Years Old</li>
						<li>Phone : {{$userDet['phone']}}</li>
						<li>Email : <a href="mailto:{{$userDet['email']}}">{{$userDet['email']}}</a></li>
						<li>Address : Dammam, Saudi Arabia</li>
					</ul>
					<ul class="list-inline list-gutter-xs padder h5 bare-social-menu">
						<li>
							<a href="www.twitter.com/Kodanchi" class="twitter-color">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<!--<li>
                            <a href="#" class="google-plus-color">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>-->
						<!--<li>
                            <a href="#" class="behance-color">
                                <i class="fa fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dribbble-color">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>-->
						<li>
							<a href="www.github.com/kodanchi" class="github-color">
								<i class="fa fa-github"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- #PROFILE STORY -->
			<div class="col-lg-4 col-lg-pull-8 col-xs-12 text-left story-column wow fadeInUp">
				<div>
					<h5 class="text-capitalize">my story</h5>
					<p class="padder">
						I focus on using my skills to build good user experience and create a strong interest in my employers. I hope to develop skills and knowledge of the Web, and become an honest asset to the business.
					</p>
					<p class="padder">
						As an individual, I'm self-confident you’ll find me creative, funny and naturally passionate. I’m a forward thinker, which others may find inspiring when working as a team.
					</p>
					<p class="padder">
						Like many beautiful things in life I like the creativity in things, how the mechanics are going so I find myself participating in crafting, design and developing activities.
					</p>
					<div class="lg-padder">
						<img src="media/images/signature.png" alt="#">
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $HOBBIES SECTION                          -->
<!-- ========================================= -->

<section id="hobbies" class="secondary-block secondary-block-spacer bg-image" style="background-image: url(media/images/backgrounds/sp1.jpg)" data-stellar-background-ratio="0.5">

	<!-- #OVERLAY -->
	<div class="overlay pattern-overlay"></div>

	<div class="container">

		<!-- #HOBBIES TITLE -->
		<div class="text-center widget-title widget-title--inverted wow fadeIn">
			<h5 class="text-uppercase semi-bold lh md-padder">my hobbies</h5>
			<em class="xs-padder inline-block">work hard, party harder</em>
		</div>

		<!-- #HOBBIES CONTENT -->
		<div class="secondary-block__padder text-center">
			<ul class="list-inline inline-block text-uppercase list-gutter-md text-center text-uppercase hobbies-list">
				<li class="lg-rounded-box wow fadeInUp">

					<!-- HOBBY -->
					<div class="inline-block">
								<span class="h3 lh">
									<i class="fa fa-mobile"></i>
								</span>
						<h6 class="padder normal lh">Technology</h6>
					</div>

					<!-- HOOBY DESCRIPTION -->
					<div class="hobby-description">
						<p>
							I like to know where the world of technology is going and what is new out there, because that makes our lives better .
						</p>
					</div>

				</li>
				<li class="lg-rounded-box wow fadeInUp" data-wow-delay="0.3s">

					<!-- HOBBY -->
					<div class="inline-block">
								<span class="h3 lh">
									<i class="fa fa-plane"></i>
								</span>
						<h6 class="padder normal lh">travel</h6>
					</div>

					<!-- HOOBY DESCRIPTION -->
					<div class="hobby-description">
						<p>
							It always was and still is my dream to travel and see the world with my eyes, from the himalaya mountain to Taj Mahal.
						</p>
					</div>

				</li>
				<li class="lg-rounded-box wow fadeInUp" data-wow-delay="0.6s">

					<!-- HOBBY -->
					<div class="inline-block">
								<span class="h3 lh">
									<i class="fa fa-headphones"></i>
								</span>
						<h6 class="padder normal lh">music</h6>
					</div>

					<!-- HOOBY DESCRIPTION -->
					<div class="hobby-description">
						<p>
							Music is a language only can be interpreted by ear, It's alive It's aliiiive.
						</p>
					</div>

				</li>
				<li class="lg-rounded-box wow fadeInUp" data-wow-delay="0.9s">

					<!-- HOBBY -->
					<div class="inline-block">
								<span class="h3 lh">
									<i class="fa fa-video-camera"></i>
								</span>
						<h6 class="padder normal lh">cinema</h6>
					</div>

					<!-- HOOBY DESCRIPTION -->
					<div class="hobby-description">
						<p>
							Cinema is world that feeds our imagination and allow us to fly to the imaginary universe so we can come up with creative and great ideas.
						</p>
					</div>

				</li>
				<li class="lg-rounded-box wow fadeInUp" data-wow-delay="1.2s">

					<!-- HOBBY -->
					<div class="inline-block">
								<span class="h3 lh">
									<i class="fa fa-gamepad"></i>
								</span>
						<h6 class="padder normal lh">Games</h6>
					</div>

					<!-- HOOBY DESCRIPTION -->
					<div class="hobby-description">
						<p>
							I'm a geek myself and I've been playing games since I was 7 years old and guess what's my first game? it's DOOM xD.
						</p>
					</div>

				</li>
			</ul>
		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $RESUME SECTION                           -->
<!-- ========================================= -->

<section id="resume" class="main-block">
	<div class="container text-center">

		<!-- #RESUME TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-book mega"></i>
					<h1 class="text-uppercase heavy lh padder">resume</h1>
					<em class="h5 serif em text-capitalize regular">know who i'm</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Here you'll find where is me in the educational world, form the high school to my current job.
					</p>
				</div>
			</div>
		</div>

		<!-- #EDUCATION -->
		<div class="main-block__padder text-left">

			<!-- @EDUCATION TITLE -->
			<div class="table wow fadeIn">
				<div class="table-cell h5 secondary-title__icon">
					<i class="fa fa-graduation-cap"></i>
				</div>
				<div class="table-cell secondary-title__text">
					<h5 class="text-capitalize">education</h5>
				</div>
				<div class="table-cell secondary-title__line">
					<button id="newEdu" class="btn-sm btn-default">Add new</button>
				</div>
			</div>

			<!-- @EDUCATION TIMELINE -->
			<div class="main-block__sub-padder">
				<div class="timeline education-timeline">

					<!-- DASHED LINE -->
					<div class="timeline-rail">
						<span class="timeline-loader-btn plus-icon plus-icon-small btn--main-color"></span>
					</div>

					<!-- TIMELINE ITEMS -->
					<div class="timeline-items list-gutter-lg">

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2008 - 2009
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight">
									<span class="h3 light">A+</span>
									<small class="bold">grade</small>
								</div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">master degree of design</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of university</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements that are rel or abs positioned it will default up the chain to the html element which is at 0,0 of the viewport. The only problem here is this may be hard to accomplish depending on your layout.
								</p>
							</div>

						</div>

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2004 - 2007
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight">
									<span class="h3 light">A+</span>
									<small class="bold">grade</small>
								</div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">bachelor degree of design</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of university</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements that are rel or abs positioned.
								</p>
							</div>

						</div>

						<!-- ITEM -->
						<div class="clearfix timeline-item hidden">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2000 - 2003
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase">
									<span class="h3 light">A+</span>
									<small class="bold">grade</small>
								</div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info">
								<h6 class="text-capitalize lh">high school degree</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of school</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements that are rel or abs positioned.
								</p>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

		<!-- #EXPERIENCE -->
		<div class="main-block__padder text-left">

			<!-- @EXPERIENCE TITLE -->
			<div class="table wow fadeIn">
				<div class="table-cell h5 secondary-title__icon">
					<i class="fa fa-flask"></i>
				</div>
				<div class="table-cell secondary-title__text">
					<h5 class="text-capitalize">experience</h5>
				</div>
				<div class="table-cell secondary-title__line"></div>
			</div>

			<!-- @EXPERIENCE TIMELINE -->
			<div class="main-block__sub-padder">
				<div class="timeline">

					<!-- DASHED LINE -->
					<div class="timeline-rail">
						<span class="timeline-loader-btn plus-icon plus-icon-small btn--main-color"></span>
					</div>

					<!-- TIMELINE ITEMS -->
					<div class="timeline-items list-gutter-lg">

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2013 - NOW
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight" style="background-image: url(media/images/clients/01.png)"></div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">lead web developer</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of company</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements that are rel or abs positioned it will default up the chain to the html element which is at 0,0 of the viewport.
								</p>
							</div>

						</div>

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2010 - 2012
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight" style="background-image: url(media/images/clients/02.png)"></div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">lead web designer</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of company</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements.
								</p>
							</div>

						</div>

						<!-- ITEM -->
						<div class="clearfix timeline-item hidden">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										2008 - 2009
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase" style="background-image: url(media/images/clients/07.png)"></div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info">
								<h6 class="text-capitalize lh">web designer</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>name of company</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements.
								</p>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

		<!-- #RECOGNITION -->
		<div class="main-block__padder text-left">

			<!-- @RECOGNITION TITLE -->
			<div class="table wow fadeIn">
				<div class="table-cell h5 secondary-title__icon">
					<i class="fa fa-globe"></i>
				</div>
				<div class="table-cell secondary-title__text">
					<h5 class="text-capitalize">recognition</h5>
				</div>
				<div class="table-cell secondary-title__line"></div>
			</div>

			<!-- @RECOGNITION TIMELINE -->
			<div class="main-block__sub-padder">
				<div class="timeline">

					<!-- DASHED LINE -->
					<div class="timeline-rail">
						<span class="timeline-loader-btn plus-icon plus-icon-small btn--main-color"></span>
					</div>

					<!-- TIMELINE ITEMS -->
					<div class="timeline-items list-gutter-lg">

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										1 feb 2014
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight">
									<i class="fa fa-microphone huge"></i>
								</div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">CSS3 conference</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>speaker</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element. So assuming that your div creating the corner(s) has no parent elements that are rel or abs positioned it will default up the chain to the html element which is at 0,0 of the viewport. The only problem here is this may be hard to accomplish depending on your layout.
								</p>
							</div>

						</div>

						<!-- ITEM -->
						<div class="clearfix timeline-item">

							<!-- TOOLTIP - BULLET - BOX -->
							<div class="pull-left clearfix text-center">

								<!-- TOOLTIP - BULLET -->
								<div class="inline-block v-middle">

									<!-- TOOLTIP -->
									<div class="custom-tooltip bold text-uppercase small inline-block v-middle hidden-xs wow fadeInLeft">
												<span>
													<i class="fa fa-clock-o normal"></i>
												</span>
										30 dec 2014
									</div><!--
											--><div class="timeline-item-bullet inline-block v-middle"></div>

								</div><!--
										--><div class="timeline-box inline-block v-middle hidden-xs text-uppercase wow fadeInRight">
									<i class="fa fa-trophy huge"></i>
								</div>

							</div>

							<!-- TIMELINE ITEM CONTENT -->
							<div class="no-overflow timeline-item-info wow fadeInRight">
								<h6 class="text-capitalize lh">Design of the day</h6>
								<ul class="list-inline list-gutter-xs em serif text-capitalize sm-padder timeline-info-list">
									<li>website</li>
									<li>&#8226;</li>
									<li>USA</li>
								</ul>
								<p class="padder">
									Coordinates for abs positioning use the closest positioned parent box of the positioned element.
								</p>
							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $MILESTONES SECTION                       -->
<!-- ========================================= -->

<section id="milestones" class="secondary-block-spacer">

	<!-- #MILESTONES LIST -->
	<ul class="list-unstyled text-center text-uppercase milestones-list">
		<li>
			<div class="mega">
				<i class="fa fa-fw fa-users"></i>
			</div>
			<h1 class="heavy lh md-padder" data-from="0" data-to="1200">1200</h1>
			<span class="lh inline-block semi-bold padder">happy clients</span>
		</li><!--
				--><li>
			<div class="mega">
				<i class="fa fa-fw fa-briefcase"></i>
			</div>
			<h1 class="heavy lh md-padder" data-from="0" data-to="5000">5000</h1>
			<span class="lh inline-block semi-bold padder">projects finished</span>
		</li><!--
				--><li>
			<div class="mega">
				<i class="fa fa-fw fa-clock-o"></i>
			</div>
			<h1 class="heavy lh md-padder" data-from="0" data-to="10">10</h1>
			<span class="lh inline-block semi-bold padder">years of experience</span>
		</li><!--
				--><li>
			<div class="mega">
				<i class="fa fa-fw fa-code"></i>
			</div>
			<h1 class="heavy lh md-padder in-millions" data-from="0" data-to="30">30</h1>
			<span class="lh inline-block semi-bold padder">lines of code</span>
		</li>
	</ul>

</section>

<!-- ========================================= -->
<!-- $SKILLS SECTION                           -->
<!-- ========================================= -->
<?php
function display_skills($type){?>

<div class="row tab-pane active skills-list" id="skill-panel-1">
	@for($i = 0;$i<count($type);$i++)
		<div class="col-lg-4 col-md-5 col-sm-6 col-lg-offset-2 col-md-offset-1 text-uppercase">

			<!-- SKILL TITLE -->
			<h6 class="normal">{{$type[$i]->name}}</h6>

			<!-- SKILL METER -->
			<?php $meter = ($type[$i]->percent)/(20) ?>
			<div class="skill-meter xs-padder">
				@for($x = 0; $x < ceil($meter); $x++)
					<div class="on"></div>
				@endfor
				@for($x = 0; $x < 5-ceil($meter); $x++)
					<div></div>
				@endfor
			</div>
			<?php $i = $i + 1 ?>
		</div>
		@if($i!=count($type))

		<div class="col-lg-4 col-md-5 col-sm-6 text-uppercase">

			<!-- SKILL TITLE -->
			<h6 class="normal">{{$type[$i]->name}}</h6>

			<!-- SKILL METER -->
			<?php $meter = ($type[$i]->percent)/(20) ?>
			<div class="skill-meter xs-padder">
				@for($x = 0; $x < ceil($meter); $x++)
					<div class="on"></div>
				@endfor
				@for($x = 0; $x < 5-ceil($meter); $x++)
					<div></div>
				@endfor
			</div>
		</div>
		@endif
	@endfor
</div>
<?php } ?>




<section id="skills" class="main-block">
	<div class="container text-center">

		<!-- #SKILLS TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-pie-chart mega"></i>
					<h1 class="text-uppercase heavy lh padder">skills</h1>
					<em class="h5 serif em text-capitalize regular">how good i'm</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
				</div>
			</div>
		</div>

		<!-- #SKILLS CONTENT -->
		<div class="main-block__padder">

			<!-- #SKILLS TABS -->
			<ul class="nav nav-tabs text-uppercase small bold inline-block tabs-list wow fadeInUp" role="tablist">
				<li role="presentation" class="active"><a href="#skill-panel-1" role="tab" data-toggle="tab" style="width: 200px">PROFESSIONAL SKILLS</a></li>
				<li role="presentation"><a href="#skill-panel-2" role="tab" data-toggle="tab" style="width: 200px">PERSONAL SKILLS</a></li>
				<li role="presentation"><a href="#skill-panel-3" role="tab" data-toggle="tab" style="width: 200px">LANGUAGES</a></li>
			</ul>

			<!-- #SKILLS PANELS -->
			<div class="main-block__sub-padder tab-content text-left wow fadeInUp">

				<!-- @PROFESSIONAL PANEL -->

				<div class="row tab-pane active skills-list" id="skill-panel-1">
					<?php display_skills($prof_skills); ?>
				</div>


				<!-- @PERSONAL PANEL -->
				<div class="row tab-pane skills-list" id="skill-panel-2">
					<?php display_skills($pers_skills); ?>
				</div>

				<!-- @LANGUAGES PANEL -->
				<div class="row tab-pane skills-list text-capitalize" id="skill-panel-3">
					<?php display_skills($lang_skills); ?>
				</div>

			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $SERVICES SECTION                         -->
<!-- ========================================= -->

<section id="services" class="main-block">
	<div class="container text-center">

		<!-- #SERVICES TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-cog mega"></i>
					<h1 class="text-uppercase heavy lh padder">services</h1>
					<em class="h5 serif em text-capitalize regular">what my clients get</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
				</div>
			</div>
		</div>

		<!-- #SERVICES CONTENT -->
		<div class="main-block__padder text-left">
			<div class="row services-list">
				<div class="col-lg-5 col-md-6 col-lg-push-1 text-right clearfix wow fadeInLeft">
					<div class="pull-right service-icon h4 rounded-box text-center">
						<i class="fa fa-paint-brush"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">web design</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-lg-push-1 clearfix wow fadeInRight">
					<div class="pull-left service-icon h4 rounded-box text-center">
						<i class="fa fa-code"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">web development</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-lg-push-1 text-right clearfix wow fadeInLeft">
					<div class="pull-right service-icon h4 rounded-box text-center">
						<i class="fa fa-star"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">branding</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-lg-push-1 clearfix wow fadeInRight">
					<div class="pull-left service-icon h4 rounded-box text-center">
						<i class="fa fa-globe"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">marketing</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-lg-push-1 text-right clearfix wow fadeInLeft">
					<div class="pull-right service-icon h4 rounded-box text-center">
						<i class="fa fa-wrench"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">website installation</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-lg-push-1 clearfix wow fadeInRight">
					<div class="pull-left service-icon h4 rounded-box text-center">
						<i class="fa fa-life-ring"></i>
					</div>
					<div class="no-overflow">
						<h6 class="text-capitalize">support my products</h6>
						<p class="xs-padder">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $PROCESS SECTION                          -->
<!-- ========================================= -->

<section id="process" class="secondary-block secondary-block-spacer bg-image" style="background-image: url(media/images/backgrounds/04.jpg)" data-stellar-background-ratio="0.5">

	<!-- #OVERLAY -->
	<div class="overlay pattern-overlay"></div>

	<div class="container">

		<!-- #PROCESS TITLE -->
		<div class="text-center widget-title widget-title--inverted wow fadeIn">
			<h5 class="text-uppercase semi-bold lh md-padder">work process</h5>
			<em class="xs-padder inline-block">how i work in my projects</em>
		</div>

		<!-- #PROCESS CONTENT -->
		<div class="secondary-block__padder text-center text-uppercase">

			<!-- @HORIZONTAL RAIL -->
			<div class="horizontal-rail hidden-xs"></div>

			<!-- @ITEMS -->
			<div class="row process-list">
				<div class="col-xs-4 col-sm-2 wow flipInX">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-lightbulb-o"></i>
						</div>
						<span>1</span>
						<h6 class="normal lh">concept</h6>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2 wow flipInX" data-wow-delay="0.3s">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-pencil"></i>
						</div>
						<span>2</span>
						<h6 class="normal lh">sketch</h6>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2 wow flipInX" data-wow-delay="0.6s">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-paint-brush"></i>
						</div>
						<span>3</span>
						<h6 class="normal lh">desing</h6>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2 wow flipInX" data-wow-delay="0.9s">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-code"></i>
						</div>
						<span>4</span>
						<h6 class="normal lh">code</h6>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2 wow flipInX" data-wow-delay="1.2s">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-flask"></i>
						</div>
						<span>5</span>
						<h6 class="normal lh">test</h6>
					</div>
				</div>
				<div class="col-xs-4 col-sm-2 wow flipInX" data-wow-delay="1.5s">
					<div class="inline-block">
						<div class="md-rounded-box h3">
							<i class="fa fa-rocket"></i>
						</div>
						<span>6</span>
						<h6 class="normal lh">launch</h6>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $PORTFOLIO SECTION                        -->
<!-- ========================================= -->

<section id="portfolio" class="main-block">
	<div class="container text-center">

		<!-- #PORTFOLIO TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-briefcase mega"></i>
					<h1 class="text-uppercase heavy lh padder">work</h1>
					<em class="h5 serif em text-capitalize regular">recent projects</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
				</div>
			</div>
		</div>

	</div>

	<!-- #PORTFOLIO CONTENT -->
	<div class="main-block__padder text-center">

		<!-- #PORTFOLIO FILTER -->
		<ul class="list-inline inline-block list-gutter-sm text-capitalize bold shuffle-filter wow fadeInUp">
			<li class="active"><a href="#" data-group="all">all</a></li>
			<li>&#8226;</li>
			<li><a href="#" data-group="web-design">web design</a></li>
			<li>&#8226;</li>
			<li><a href="#" data-group="wordpress">wordpress</a></li>
			<li>&#8226;</li>
			<li><a href="#" data-group="html">HTML</a></li>
		</ul>

		<!-- #PORTFOIO ITEMS -->
		<div class="main-block__sub-padder">
			<div class="portfolio-items clearfix wow fadeInUp">

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/01.png);" data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/01.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-image.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single image</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/02.png);" data-groups='["all", "wordpress"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/02.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-slider.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single slider</h6>
								<em class="serif">wordpress</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/03.png);" data-groups='["all", "html"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/03.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-vimeo.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single vimeo</h6>
								<em class="serif">HTML</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/04.png);" data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/01.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-youtube.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single youtube</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/08.png);" data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/02.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-image.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single image</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/05.png);" data-groups='["all", "wordpress"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/03.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-slider.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single slider</h6>
								<em class="serif">wordpress</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/06.png);" data-groups='["all", "html"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/01.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-vimeo.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single vimeo</h6>
								<em class="serif">HTML</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/07.png);" data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/02.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-youtube.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single youtube</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/08.png);" data-groups='["all", "wordpress"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/03.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-image.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single image</h6>
								<em class="serif">wordpress</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="portfolio-item" style="background-image: url(media/images/work/thumbnails/09.png);" data-groups='["all", "wordpress"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/01.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-slider.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single slider</h6>
								<em class="serif">wordpress</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="hidden" data-bg-src='media/images/work/thumbnails/10.png' data-groups='["all", "html"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/02.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-vimeo.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single vimeo</h6>
								<em class="serif">HTML</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="hidden" data-bg-src='media/images/work/thumbnails/11.png' data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/03.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-youtube.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single youtube</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="hidden" data-bg-src='media/images/work/thumbnails/12.png' data-groups='["all", "wordpress"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/01.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-image.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single image</h6>
								<em class="serif">wordpress</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="hidden" data-bg-src='media/images/work/thumbnails/13.png' data-groups='["all", "html"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/02.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-slider.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single slider</h6>
								<em class="serif">HTML</em>
							</div>
						</div>
					</div>
				</div>

				<!-- PORTFOLIO ITEM -->
				<div class="hidden" data-bg-src='media/images/work/thumbnails/14.png' data-groups='["all", "web-design"]'>
					<div class="item-caption">
						<div class="table">
							<div class="table-cell">
								<a href="media/images/work/large/03.png" class="zoom-btn plus-icon plus-icon-big btn--main-inverted"></a>
								<a href="work-item-vimeo.html" class="btn-icon portfolio-icon-btn btn--main-inverted">
									<i class="fa fa-link"></i>
								</a>
								<h6 class="text-uppercase normal md-padder">project single vimeo</h6>
								<em class="serif">web design</em>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- #PORTFOLIO LOAD MORE -->
		<div class="main-block__sub-padder wow fadeInUp" id="load-more-btn-holder">
			<a href="#" class="btn btn--main-color" id="load-more-btn">show more items</a>
		</div>

	</div>

</section>

<!-- ========================================= -->
<!-- $PRICING SECTION                          -->
<!-- ========================================= -->

<section id="pricing" class="main-block">
	<div class="container text-center">

		<!-- #PRICING TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-dollar mega"></i>
					<h1 class="text-uppercase heavy lh padder">pricing</h1>
					<em class="h5 serif em text-capitalize regular">choose your package</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
				</div>
			</div>
		</div>

		<!-- #PRICING CONTENT -->
		<div class="main-block__padder pricing-tables-list text-capitalize">
			<div class="pricing-table wow fadeInLeft">

				<!-- TITLE -->
				<div class="package-title-box">
					<h3 class="light lh">Designer</h3>
				</div>

				<!-- PRICE -->
				<div class="price-box">
					<span class="huge inline-block price" data-currency="$" data-cents="99">59</span>
					<span>per hour</span>
				</div>

				<!-- FEATURES LIST -->
				<div class="text-left">
					<ul class="list-unstyled checked-list features-list colored-bullets">
						<li>logo designing</li>
						<li>website retouches</li>
						<li>image editing</li>
						<li>wireframing</li>
						<li>other options</li>
					</ul>
				</div>

				<!-- FOOTER -->
				<div class="well no-border">
					<a href="#" class="btn btn--main-color">order now</a>
				</div>
			</div><!--
					--><div class="pricing-table best-pricing-table wow fadeInUp">

				<!-- TITLE -->
				<div class="package-title-box">
					<h3 class="light lh">developer</h3>
				</div>

				<!-- PRICE -->
				<div class="price-box">
					<span class="huge inline-block price" data-currency="$" data-cents="99">79</span>
					<span>per hour</span>
				</div>

				<!-- FEATURES LIST -->
				<div class="text-left">
					<ul class="list-unstyled checked-list features-list colored-bullets">
						<li>CSS coding</li>
						<li>JavaScript coding</li>
						<li>PHP coding</li>
						<li>WordPress</li>
						<li>other options</li>
					</ul>
				</div>

				<!-- FOOTER -->
				<div class="well no-border">
					<a href="#" class="btn btn--main-color">order now</a>
				</div>
			</div><!--
					--><div class="pricing-table wow fadeInRight">

				<!-- TITLE -->
				<div class="package-title-box">
					<h3 class="light lh">speaker</h3>
				</div>

				<!-- PRICE -->
				<div class="price-box">
					<span class="huge inline-block price" data-currency="$" data-cents="99">99</span>
					<span>per hour</span>
				</div>

				<!-- FEATURES LIST -->
				<div class="text-left">
					<ul class="list-unstyled checked-list features-list colored-bullets">
						<li>Web Design Talk</li>
						<li>web development talk</li>
						<li>web projects management</li>
						<li>plugin authoring</li>
						<li>other</li>
					</ul>
				</div>

				<!-- FOOTER -->
				<div class="well no-border">
					<a href="#" class="btn btn--main-color">order now</a>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $CLIENTS SECTION                          -->
<!-- ========================================= -->

<section id="clients" class="secondary-block secondary-block-spacer">
	<div class="container">

		<!-- #CLIENTS TITLE -->
		<div class="text-center widget-title wow fadeIn">
			<h5 class="text-uppercase semi-bold lh md-padder">famous clients</h5>
			<em class="xs-padder inline-block">names you definitly know</em>
		</div>

		<!-- #CLIENTS CONTENT -->
		<div class="secondary-block__padder">
			<div class="row text-center clients-list">
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp">
					<a href="#" style="background-image: url(media/images/clients/03.png)"></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
					<a href="#" style="background-image: url(media/images/clients/04.png)"></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
					<a href="#" style="background-image: url(media/images/clients/05.png)"></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
					<a href="#" style="background-image: url(media/images/clients/06.png)"></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
					<a href="#" style="background-image: url(media/images/clients/07.png)"></a>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.5s">
					<a href="#" style="background-image: url(media/images/clients/08.png)"></a>
				</div>
			</div>
		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $NEWS SECTION                             -->
<!-- ========================================= -->

<section id="news" class="main-block">
	<div class="container text-center">

		<!-- #NEWS SECTION TITLE -->
		<div class="text-center widget-title wow fadeIn">
			<h5 class="text-uppercase semi-bold lh md-padder">my latest news</h5>
			<em class="xs-padder inline-block">all about my latest achievements</em>
		</div>

		<!-- #NEWS SECTION CONTENT -->
		<div class="main-block__padder wow fadeIn">

			<!-- {{--@POST--}} -->
			<div class="post">

				<!-- POST TITLE -->
				<div class="post__title">
					<h5 class="text-capitalize">your Breaking news title goes here :)</h5>
				</div>

				<!-- POST META -->
				<div class="post__meta">
							<span>
								<a href="#">
									<i class="fa fa-clock-o"></i>01 Mar 2015
								</a>
							</span>
							<span>
								<a href="#">
									<i class="fa fa-comments"></i>35 Comment
								</a>
							</span>
				</div>

				<!-- POST DESCRIPTION -->
				<div class="post__description">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
					</p>
				</div>

				<!-- POST FOOTER -->
				<div class="post__footer">
					<a href="post.html" class="btn read-more-btn">read more</a>
				</div>

			</div>

			<!-- @POST -->
			<div class="post">

				<!-- POST TITLE -->
				<div class="post__title">
					<h5 class="text-capitalize">your Breaking news title goes here :)</h5>
				</div>

				<!-- POST META -->
				<div class="post__meta">
							<span>
								<a href="#">
									<i class="fa fa-clock-o"></i>01 Mar 2015
								</a>
							</span>
							<span>
								<a href="#">
									<i class="fa fa-comments"></i>35 Comment
								</a>
							</span>
				</div>

				<!-- POST DESCRIPTION -->
				<div class="post__description">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
					</p>
				</div>

				<!-- POST FOOTER -->
				<div class="post__footer">
					<a href="post.html" class="btn read-more-btn">read more</a>
				</div>

			</div>

			<!-- @POST -->
			<div class="post">

				<!-- POST TITLE -->
				<div class="post__title">
					<h5 class="text-capitalize">your Breaking news title goes here :)</h5>
				</div>

				<!-- POST META -->
				<div class="post__meta">
							<span>
								<a href="#">
									<i class="fa fa-clock-o"></i>01 Mar 2015
								</a>
							</span>
							<span>
								<a href="#">
									<i class="fa fa-comments"></i>35 Comment
								</a>
							</span>
				</div>

				<!-- POST DESCRIPTION -->
				<div class="post__description">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book...
					</p>
				</div>

				<!-- POST FOOTER -->
				<div class="post__footer">
					<a href="post.html" class="btn read-more-btn">read more</a>
				</div>

			</div>

			<!-- @LOAD MORE POSTS BUTTON -->
			<div>
				<a href="blog.html" class="btn view-news-btn">view all news</a>
			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $TESTIMONIAL SECTION                      -->
<!-- ========================================= -->

<section id="testimonials" class="secondary-block bg-image" style="background-image: url(media/images/backgrounds/01.jpg)" data-stellar-background-ratio="0.5">

	<!-- #OVERLAY -->
	<div class="overlay pattern-overlay"></div>

	<div class="container text-center">

		<!-- #TESTIMONIAL HEADER -->
		<div class="list-gutter-md testimonial-header">
			<a href="#" class="inline-block sm-rounded-box quote-rotator-prev">
				<i class="fa fa-angle-left"></i>
			</a>
					<span class="inline-block rounded-box h3">
						<i class="fa fa-quote-left"></i>
					</span>
			<a href="#" class="inline-block sm-rounded-box quote-rotator-next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

		<!-- #TESTIMONIALS -->
		<div class="col-md-8 col-md-push-2 secondary-block__sub-padder">

			<!-- QUOTES -->
			<div class="quotes">

				<!-- ITEM -->
				<div class="quote">
					<p class="h5 light">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
					<div class="lg-padder inline-block text-left list-gutter-sm">
						<div class="md-rounded-box inline-block v-middle">
							<img src="media/images/testimonials/01.jpg" alt="#" class="img-responsive">
						</div>
						<div class="inline-block v-middle">
							<h6 class="semi-bold">John Doe</h6>
							<span class="light inline-block xs-padder testimonial-job">web designer - Envato</span>
						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="quote">
					<p class="h5 light">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
					</p>
					<div class="lg-padder inline-block text-left list-gutter-sm">
						<div class="md-rounded-box inline-block v-middle">
							<img src="media/images/testimonials/02.jpg" alt="#" class="img-responsive">
						</div>
						<div class="inline-block v-middle">
							<h6 class="semi-bold">Jessica Doe</h6>
							<span class="light inline-block xs-padder testimonial-job">web developer - Envato</span>
						</div>
					</div>
				</div>

				<!-- ITEM -->
				<div class="quote">
					<p class="h5 light">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
					<div class="lg-padder inline-block text-left list-gutter-sm">
						<div class="md-rounded-box inline-block v-middle">
							<img src="media/images/testimonials/03.jpg" alt="#" class="img-responsive">
						</div>
						<div class="inline-block v-middle">
							<h6 class="semi-bold">Angela Doe</h6>
							<span class="light inline-block xs-padder testimonial-job">consolter - Envato</span>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $CONTACT SECTION                          -->
<!-- ========================================= -->

<section id="contact" class="main-block">
	<div class="container text-center">

		<!-- #CONTACT TITLE -->
		<div class="main-title text-left wow fadeIn">
			<div class="main-title__inner">
				<div class="text-right main-title__left">
					<i class="fa fa-envelope mega"></i>
					<h1 class="text-uppercase heavy lh padder">contact</h1>
					<em class="h5 serif em text-capitalize regular">get in touch with me</em>
				</div>
				<div class="main-title__right">
					<p class="serif em regular h6">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
					</p>
				</div>
			</div>
		</div>

		<!-- #CONTACT CONTENT -->
		<div class="main-block__padder text-left wow fadeIn">

			<!-- #CONTACT TABS -->
			<div class="text-center contact-tabs-holder">
				<ul class="nav nav-tabs text-uppercase small bold inline-block v-middle tabs-list contact-tabs-list" role="tablist">
					<li role="presentation" class="active"><a class="square" href="#contact-panel-1" role="tab" data-toggle="tab">hire me</a></li>
					<li role="presentation"><a class="square" href="#contact-panel-2" role="tab" data-toggle="tab">message</a></li>
				</ul>
			</div>

			<!-- #CONTACT PANELS -->
			<div class="main-block__sub-padder tab-content text-left">

				<!-- HIRE FORM -->
				<div id="contact-panel-1" class="tab-pane active">

					<!-- RESULTS MESSAGES -->
					<div class="alert hidden" role="alert" style="margin-bottom: 30px;">
						<button type="button" class="close pull-right" data-hide="alert"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>
						<p></p>
					</div>

					<!-- #HIRE FORM -->
					<form action="inc/contact/request.php" id="hire-form" role="form" class="contact-form" method="post">
						<div class="row form-list">

							<!-- Security Elements -->
							<input type="text" class="is_legit" name="is_legit">
							<input type="text" class="is_legit" name="action" value="hire">
							<!-- Security Elements -->

							<!-- FORM NAME -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">your name *</label>
								<input type="text" name="hireme_name" class="form-control" required>
							</div>

							<!-- FORM EMAIL -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">your email *</label>
								<input type="email" name="hireme_email" class="form-control" required>
							</div>

							<!-- TIMEFRAME OPTION -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">your timeframe *</label>
								<select name="hireme_timeframe" class="form-control">
									<option value="">select option</option>
									<option value="1">As soon as possible (rush job)</option>
									<option value="2">Within 1 week (rush job)</option>
									<option value="3">Within 2 weeks</option>
									<option value="4">Within a month</option>
									<option value="5">Sometime in the next few months</option>
									<option value="6">I'm not really sure</option>
								</select>
							</div>

							<!-- EXPERIENCE OPTION -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">Your Web Experience Level *</label>
								<select name="hireme_experience" class="form-control">
									<option value="">select option</option>
									<option value="1">Not much, I'll need your help</option>
									<option value="2">Average - I surf the web</option>
									<option value="3">I can design websites</option>
									<option value="4">I can hand code HTML</option>
									<option value="5">I'm not really sure</option>
								</select>
							</div>

							<!-- DECISION OPTION -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">Certainty About Makig Process *</label>
								<select name="hireme_process" class="form-control">
									<option value="">select option</option>
									<option value="1">I'm just starting to explore options</option>
									<option value="2">I'm sending out requests to a few vendors</option>
									<option value="3">I want to use you, I just need some more details</option>
									<option value="4">I'm ready to get started, where do I send payment?</option>
								</select>
							</div>

							<!-- PACKAGE OPTION -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">Your Prefered Package *</label>
								<select name="hireme_package" class="form-control">
									<option value="">select option</option>
									<option value="1">designer</option>
									<option value="2">developer</option>
									<option value="3">speaker</option>
								</select>
							</div>

							<!-- REQUIREMENTS -->
							<div class="col-xs-12">
								<label class="bold text-capitalize">Describe Your Project And Requirements *</label>
								<textarea name="hireme_requirements" class="form-control" rows="15" required></textarea>
							</div>

							<!-- CAPTCHA & SUBMIT -->
							<div class="col-xs-12">

								<div class="inline-block captcha-holder">
									<input type="text" name="#" class="captcha-number" value="1" readonly> +
									<input type="text" name="#" class="captcha-number" value="1" readonly> =
									<input class="captcha form-control" type="text" name="captcha" maxlength="2" required>
								</div><!--
										--><input type="submit" class="btn btn--main-inverted" value="Submit Quote">
							</div>
						</div>
					</form>

				</div>

				<!-- CONTACT FORM -->
				<div id="contact-panel-2" class="tab-pane">

					<!-- RESULTS MESSAGES -->
					<div class="alert hidden" role="alert" style="margin-bottom: 30px;">
						<button type="button" class="close pull-right" data-hide="alert"><span aria-hidden="true"><i class="fa fa-times"></i></span><span class="sr-only">Close</span></button>
						<p></p>
					</div>

					<!-- #CONTACT FORM -->
					<form action="inc/contact/request.php" id="message-form" role="form" class="contact-form" method="post">
						<div class="row form-list">

							<!-- Security Elements -->
							<input type="text" class="is_legit" name="is_legit">
							<input type="text" class="is_legit" name="action" value="contact">
							<!-- Security Elements -->

							<!-- NAME -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">your name *</label>
								<input type="text" name="contact_name" class="form-control" required>
							</div>

							<!-- EMAIL -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">your email *</label>
								<input type="email" name="contact_email" class="form-control" required>
							</div>

							<!-- SUBJECT -->
							<div class="col-xs-12 col-md-6 col-lg-4">
								<label class="bold text-capitalize">message subject</label>
								<input type="text" name="contact_subject" class="form-control">
							</div>

							<div class="col-xs-12">
								<label class="bold text-capitalize">your message *</label>
								<textarea name="contact_message" class="form-control" rows="15" required></textarea>
							</div>

							<!-- CAPTCHA & SUBMIT -->
							<div class="col-xs-12">

								<div class="inline-block captcha-holder">
									<input type="text" name="#" class="captcha-number" value="1" readonly> +
									<input type="text" name="#" class="captcha-number" value="1" readonly> =
									<input id="captcha" class="captcha form-control" type="text" name="captcha" maxlength="2" required>
								</div><!--
										--><input type="submit" class="btn btn--main-inverted" value="Submit message">
							</div>
						</div>
					</form>

				</div>

			</div>

		</div>

	</div>
</section>

<!-- ========================================= -->
<!-- $FOOTER SECTION                           -->
<!-- ========================================= -->

<footer class="text-center secondary-block-spacer">

	<!-- #SOCIALS -->
	<div class="xlg-padder">

		<!-- #FOOTER SOCIAL LIST -->
		<ul class="list-inline hollow-social-menu h5 list-gutter-xs">
			<li class="wow rollIn">
				<a href="#" class="sm-rounded-box twitter-bg">
					<i class="fa fa-twitter"></i>
				</a>
			</li><!--
					--><li class="wow rollIn" data-wow-delay="0.3s">
				<a href="#" class="sm-rounded-box google-plus-bg">
					<i class="fa fa-google-plus"></i>
				</a>
			</li><!--
					--><li class="wow rollIn" data-wow-delay="0.6s">
				<a href="#" class="sm-rounded-box behance-bg">
					<i class="fa fa-behance"></i>
				</a>
			</li><!--
					--><li class="wow rollIn" data-wow-delay="0.9s">
				<a href="#" class="sm-rounded-box dribbble-bg">
					<i class="fa fa-dribbble"></i>
				</a>
			</li><!--
					--><li class="wow rollIn" data-wow-delay="1.2s">
				<a href="#" class="sm-rounded-box github-bg">
					<i class="fa fa-github"></i>
				</a>
			</li>
		</ul>

	</div>

	<!-- #COPYRIGHT -->
	<div class="xlg-padder text-capitalize">
		<div class="well-sm copyright-holder">
			<small>copyright &#169; 2015. all rights reserved</small>
		</div>
	</div>

</footer>

<!-- ========================================= -->
<!-- $SCRIPTS                                  -->
<!-- ========================================= -->

<!-- #LIBS -->
<script src="{{asset('js/libs/jquery-latest.min.js')}}"></script>
<script src="{{asset('js/libs/modernizr-latest.min.js')}}"></script>
<script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
<script src="{{asset('js/libs/bootbox.js')}}"></script>
<!-- #PLUGINS -->

<script src="{{asset('js/plugins/jquery.malihu.PageScroll2id.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.shuffle.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.sticky-kit.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.quovolver.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.inview.min.js')}}"></script>
<script src="{{asset('js/plugins/jquery.countTo.min.js')}}"></script>



<!-- #CUSTOM -->
<script src="{{asset('js/cvscript.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>