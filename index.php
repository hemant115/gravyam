<?php
$page_title = 'Gravyam | Speciality Chemicals | Surfactant suppliers';
$active_page = 'home';
$extra_head = <<<'HTML'
<style>
img { border-top-left-radius:12px; border-top-right-radius:12px; }
:root { --transition-speed: 1.5s; --slide-duration: 6s; }
* { margin: 0; padding: 0; box-sizing: border-box; }
body { font-family: 'Manrope', sans-serif; overflow-x: hidden; }
.slider-container { position: relative; width: 100%; height: 100vh; overflow: hidden; background: #000; }
.slide { position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; visibility: hidden; transition: opacity var(--transition-speed) ease-in-out; }
.slide.active { opacity: 1; visibility: visible; z-index: 1; }
.slide-image { position: absolute; width: 100%; height: 100%; background-size: cover; background-position: center; transform: scale(1.2); }
.active .slide-image { animation: kenBurns var(--slide-duration) forwards linear; }
@keyframes kenBurns { 0% { transform: scale(1) translate(0, 0); } 100% { transform: scale(1.15) translate(-2%, -1%); } }
.slide:nth-child(2n) .slide-image { animation-name: kenBurnsReverse; }
@keyframes kenBurnsReverse { 0% { transform: scale(1.15) translate(2%, 1%); } 100% { transform: scale(1) translate(0, 0); } }
.overlay { position: absolute; inset: 0; z-index: 2; }
.content { position: relative; z-index: 3; height: 100%; display: flex; flex-direction: column-reverse; justify-content: space-between; align-items: flex-start; color: white; text-align: center; padding: 0 20px; margin-top:-40px; }
.content h1 { font-size: clamp(2.5rem, 8vw, 3.0rem); margin-bottom: 20px; transform: translateY(30px); opacity: 0; transition: all 0.8s ease-out 0.5s; background: rgba(0 85 90 / 50%); padding:10px; }
.active .content h1 { transform: translateY(0); opacity: 1; }
.nav-btn { position: absolute; top: 50%; transform: translateY(-50%); z-index: 10; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.3); color: white; padding: 20px; cursor: pointer; backdrop-filter: blur(5px); transition: 0.3s; }
.nav-btn:hover { background: #fff; color: #000; }
.prev { left: 20px; font-size:2.5rem; }
.next { right: 20px; font-size:2.5rem; }
.dots { position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); display: flex; gap: 15px; z-index: 10; }
.dot { width: 12px; height: 12px; border-radius: 50%; background: rgba(255,255,255,0.4); cursor: pointer; transition: 0.3s; }
.dot.active { background: #fff; transform: scale(1.3); }
</style>
HTML;
$extra_scripts = <<<'HTML'
<script>
const slides = document.querySelectorAll('.slide');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');
const dotsContainer = document.querySelector('.dots');
let currentIndex = 0;
let slideInterval;
const intervalTime = 6000;
slides.forEach((_, i) => {
  const dot = document.createElement('div');
  dot.classList.add('dot');
  if (i === 0) dot.classList.add('active');
  dot.addEventListener('click', () => goToSlide(i));
  dotsContainer.appendChild(dot);
});
const dots = document.querySelectorAll('.dot');
function updateSlider() {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === currentIndex);
    dots[i].classList.toggle('active', i === currentIndex);
  });
}
function nextSlide() { currentIndex = (currentIndex + 1) % slides.length; updateSlider(); }
function prevSlide() { currentIndex = (currentIndex - 1 + slides.length) % slides.length; updateSlider(); }
function goToSlide(index) { currentIndex = index; updateSlider(); resetTimer(); }
function resetTimer() { clearInterval(slideInterval); slideInterval = setInterval(nextSlide, intervalTime); }
if (nextBtn && prevBtn && dotsContainer && slides.length) {
  nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
  prevBtn.addEventListener('click', () => { prevSlide(); resetTimer(); });
  slideInterval = setInterval(nextSlide, intervalTime);
}
</script>
HTML;
include 'header.php';
?>
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <!--<section class="hidden-sidebar style-two close-sidebar">
        <div class="wrapper-box">
            <div class="hidden-sidebar-close"><span class="flaticon-cross"></span></div>
            <div class="logo"><a href="#"><img src="image/logo.png" alt=""></a></div>
            <div class="content">
                <div class="about-widget-four sidebar-widget">
                    <h3>To improve learning environment in primary schools</h3>
                    <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled demoralized by the charms of pleasures that moment, so we blinded desires, that they indignations.</div>
                </div>

                <div class="news-widget-two sidebar-widget">
                    <div class="widget-title">News & Updates</div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src="image/resource/post-thumb-1.jpg" alt=""></a></div>
                        <div class="category">LIFE SAVING</div>
                        <h4><a href="blog-details.html">Goodsoul partners with lafarge on national literacy competition</a></h4>
                    </div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src="image/resource/post-thumb-2.jpg" alt=""></a></div>
                        <div class="category">Education</div>
                        <h4><a href="blog-details.html">Goodsoul improves education infrastructure</a></h4>
                    </div>
                </div>
 
                <div class="newsletter-widget-two">
                    <div class="widget-title">Newsletter Subscription</div>
                    <form action="#">
                        <input type="email" placeholder="Enter Email Address">
                        <button class="theme-btn btn-style-one w-100"><i class="flaticon-next"></i><span>Subscribe Us</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Bnner Section -->
    
	
	<div class="slider-container">
        <div class="slide active">
            <div class="slide-image" style="background-image: url('image/main-slider/agro_emulsifier.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1>Surfactant in Agriculture</h1>
                <!--<h4>Enhancing the stability and efficacy of crop protection products to ensure a bountiful harvest.</h4>-->
            </div>
        </div>
		
		<div class="slide">
            <div class="slide-image" style="background-image: url('image/main-slider/phosphate_esters.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1>Phosphate Esters</h1>
				<!--<h4>Ensuring uniform dispersion and long-lasting stability for architectural and industrial coatings.</h4>-->
            </div>
        </div>
		
		<div class="slide">
            <div class="slide-image" style="background-image: url('image/main-slider/sulphosuccinates.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1>Sulfosuccinate</h1>
				<!--<h4>Providing wetting agents and emulsifiers that ensure vibrant colors and superior fabric finishing.</h4>-->
                <!--<a href="#" class="btn">View Gallery</a>-->
            </div>
        </div>
		
		<div class="slide">
            <div class="slide-image" style="background-image: url('image/main-slider/construction.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                 <h1>Surfactant in Construction</h1>
               <!--<h4>Improving the workability and durability of concrete and specialty coatings.</h4>-->
            </div>
        </div>
		
		<div class="slide">
            <div class="slide-image" style="background-image: url('image/main-slider/bio_surfactant.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1>Surfactant in Home Care</h1>
                <!--<h4>Formulating the surfactants that power the cleaning products and detergents you trust every day.</h4>-->
            </div>
        </div>
		
        <div class="slide">
            <div class="slide-image" style="background-image: url('image/main-slider/Industrial_Cleaning.jpg?auto=format&fit=crop&w=1920&q=80')"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1>Industrial Cleaning</h1>
				<!--<h4>Providing wetting agents and emulsifiers that ensure vibrant colors and superior fabric finishing.</h4>-->
                <!--<a href="#" class="btn">View Gallery</a>-->
            </div>
        </div>
		
       <button class="nav-btn prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
        <button class="nav-btn next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

        <div class="dots"></div>
    </div>
	
	
	
	<!--<section class="banner-section style-two">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide" style="background-image: url(image/main-slider/1.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Surfactant in <br>Agriculture</h1>
								<h4>Enhancing the stability and efficacy of crop protection products to ensure a bountiful harvest.</h4>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-five"><span>Meet Volunteers</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide" style="background-image: url(image/main-slider/3.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Surfactant in <br>Textile</h1>
								<h4>Providing wetting agents and emulsifiers that ensure vibrant colors and superior fabric finishing.</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="swiper-slide" style="background-image: url(image/main-slider/4.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Surfactant in <br>Constructions</h1>
								<h4>Improving the workability and durability of concrete and specialty coatings.</h4>

                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="swiper-slide" style="background-image: url(image/main-slider/5.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Surfactant in <br>Home Care</h1>
								<h4>Formulating the surfactants that power the cleaning products and detergents you trust every day.</h4>

                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="swiper-slide" style="background-image: url(image/main-slider/2.jpg);">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h1>Surfactant in <br>Paints/Pigment</h1>
								<h4>Ensuring uniform dispersion and long-lasting stability for architectural and industrial coatings.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-pagination style-three"></div>
        </div>
    </section>-->
    <!-- End Bnner Section -->

    <!-- Causes Section Two -->
    <!--<section class="causes-section-two">
        <div class="auto-container">
            <div class="cause-wrapper">
                <div class="row">

                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="image/resource/cause-4.jpg" alt="">
                                <div class="overlay">
                                    <a href="sulfosuccinates.php" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">

                                <div class="progress-levels style-two">
                                            

                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="sulfosuccinates.php">Help girls education</a></h4>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $72000</a>
                                        <a href="#"><span>Goal:</span> $100000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="image/resource/cause-5.jpg" alt="">
                                <div class="overlay">
                                    <a href="sulfosuccinates.php" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">

                                <div class="progress-levels style-two">
                                            

                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="82"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="sulfosuccinates.php">Bolanile fight cancer</a></h4>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $98400</a>
                                        <a href="#"><span>Goal:</span> $120000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="image/resource/cause-6.jpg" alt="">
                                <div class="overlay">
                                    <a href="sulfosuccinates.php" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">

                                <div class="progress-levels style-two">
                                            

                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="52"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="sulfosuccinates.php">Donation for helpless people</a></h4>
                                    <div class="info-box">
                                        <a href="#"><span>Raised:</span> $41600</a>
                                        <a href="#"><span>Goal:</span> $8000</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>-->

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Product Categories</h1>
                <!--<div class="text">The right way to live as a human being, Just help to those people really need your help.</div>-->
            </div>
            <div class="row">
                <!-- Feature Block Two -->
                <div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/agro.jpg" alt="">
                        </div>
                        <h4>Agro Emulsifier</h4>
                        <div class="overlay" style="background-image: url(image/agro.jpg);">
                            <h4>Agro Emulsifier</h4>
                            <div class="text">Surface-active agents used in agriculture to help mix oil-based pesticides, herbicides, fungicides, or fertilizers with water to be sprayed evenly on crops. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Feature Block Two -->
                <div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/Phospahte_Esters.jpg" alt="">
                        </div>
                        <h4>Phosphate Esters</h4>
                        <div class="overlay" style="background-image: url(image/Phospahte_Esters.jpg);">
                            <h4>Phosphate Esters</h4>
                            <div class="text">Surfactants widely used in textile processing to improve wetting, cleaning, dyeing, and finishing. They reduce surface tension between fibers and liquids.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/Sulfosuccinate.jpg" alt="">
                        </div>
                        <h4>Sulfosuccinate</h4>
                        <div class="overlay" style="background-image: url(image/Sulfosuccinate.jpg);">
                            <h4>Sulfosuccinate</h4>
                            <div class="text">Pigments are solid particles that do not dissolve in liquids, so surfactants help wet, separate, and stabilize them in water- or solvent-based systems.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
				
				<!-- Feature Block Two -->
                <div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/construction1.jpg" alt="">
                        </div>
                        <h4>Constructions</h4>
                        <div class="overlay" style="background-image: url(image/construction1.jpg);">
                            <h4>Constructions</h4>
                            <div class="text">Surfactants used in construction materials to improve mixing, dispersion, workability, and performance of products like concrete, mortar, plaster, paints etc.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                
				<div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/homecare.jpg" alt="">
                        </div>
                        <h4>Home Care</h4>
                        <div class="overlay" style="background-image: url(image/homecare.jpg);">
                            <h4>Home Care</h4>
                            <div class="text">Surfactants are the active ingredients in household cleaning products. They lower surface tension to spread wet surfaces, and lift dirt, grease, and stains. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Feature Block Two -->
                
                <!-- Feature Block Two -->
                <div class="col-lg-4 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src="image/Industrial_Cleaning.jpg" alt="">
                        </div>
                        <h4>Industrial Cleaning</h4>
                        <div class="overlay" style="background-image: url(image/Industrial_Cleaning.jpg);">
                            <h4>Industrial Cleaning</h4>
                            <div class="text">Surfactants are used in paint formulations, especially water-based paints. They help disperse pigments, stabilize emulsions, improve wetting.</div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
				

            </div>
        </div>
        <!--<div class="call-to-action">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="left-content">
                        <h3>You have the power to bring happiness.</h3>
                        <div class="text">Expound the actual teachings of the great explorer of the truth, the masterr of human happiness.</div>
                    </div>
                    <div class="right-content">
                        <a href="#" class="theme-btn btn-style-five"><span>Meet Our Team</span></a>
                    </div>
                </div>
            </div>                
        </div>-->
    </section>


<section class="testimonial-section">
        <div class="sec-bg-one" style="background-color: #00555a;"></div>
        <div class="sec-bg-two" style="background-image: url(image/welcome.jpg);"></div>
        <div class="auto-container">
            <div class="row align-items-lg-center justify-content-lg-between">
                <div class="col-lg-6" style="color:#FFFFFF; padding-right:50px;">
                    <div class="sec-title">
					<h1>Welcome to Gravyam</h1>
					</div>
					<p align="justify">
						At Gravyam, we operate at the intersection of molecular precision and industrial necessity. We specialize in high-performance surfactant chemicals that serve as the essential, often unseen, components of modern life.</p>

<p align="justify">At Gravyam, we believe that the right chemistry doesn't just create a product—it creates a solution. As a premier provider of high-performance surfactant chemicals, we serve as the invisible backbone for industries that shape our world, from the food on our tables to the roofs over our heads.</p>

<p align="justify">From the food on our tables to the roofs over our heads, Gravyam products facilitate the stability and quality of the physical world. We take pride in being the silent partner to the world’s most vital industries.
</p>	       
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>
        </div>
  </section>



<section class="testimonial-section">
        <div class="sec-bg-two" style="background-color: #00555a;"></div>
        <div class="sec-bg-one" style="background-image: url(image/R_and_D.jpg);"></div>
        <div class="auto-container">
            <div class="row align-items-lg-center justify-content-lg-between">
                <div class="col-lg-6">
                    
                </div>
				<div class="col-lg-6" style="color:#FFFFFF; padding-left:50px;">
                    <div class="sec-title">
					<h1>Research and Development</h1>
					</div>
					<p align="justify">
						A strong R&D facility is essential for a surfactant manufacturer to develop new products, improve formulations, ensure quality consistency, and meet regulatory requirements across industries like home care, agrochemicals, textiles, paints, and construction.</p>

<!--<p align="justify">At Gravyam, we believe that the right chemistry doesn't just create a product—it creates a solution. As a premier provider of high-performance surfactant chemicals, we serve as the invisible backbone for industries that shape our world, from the food on our tables to the roofs over our heads.</p>

<p align="justify">From the food on our tables to the roofs over our heads, Gravyam products facilitate the stability and quality of the physical world. We take pride in being the silent partner to the world’s most vital industries.
</p>-->	       
				<h4 style="margin-bottom:10px;">Core Objectives of R&D</h4>

						<ul class="list">
							<li><span class="fa fa-angle-right"></span> New product development (NPD)</li>
							<li><span class="fa fa-angle-right"></span> Custom formulation for clients</li>
							<li><span class="fa fa-angle-right"></span> Performance optimization</li>
							<li><span class="fa fa-angle-right"></span> Cost reduction & raw material substitution</li>
							<li><span class="fa fa-angle-right"></span> Regulatory compliance (e.g., REACH)</li>
						</ul>
						<a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a>
					
                </div>
                
            </div>
        </div>
  </section>


<section class="volunteer-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>How can we help you?</h1>
                <div class="text">To ensure we provide the most accurate pricing and availability for our Products, please share a few details via our enquiry form. This allows our team to review your requirements before we connect, ensuring our first conversation is as productive as possible. </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <!--<div class="image-wrapper-one wow fadeInLeft" data-wow-delay="400ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-4.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-5.jpg" alt=""></div>
                            <div class="image"><img src="image/resource/image-6.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-7.jpg" alt=""></div>
                        </div>
                    </div>-->
                </div>
                <div class="col-lg-3 order-lg-2">
                    <!--<div class="image-wrapper-two wow fadeInRight" data-wow-delay="600ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-8.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-9.jpg" alt=""></div>
                            <div class="image"><img src="image/resource/image-10.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="image/resource/image-11.jpg" alt=""></div>
                        </div>
                    </div>-->
                </div>
                <div class="col-lg-6">
                    <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                        <form id="contact-form" name="contact_form" class="contact-form" action="" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 column">        
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="" placeholder="Enter your name*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control required email" value="" placeholder="Enter your email*" required="">
                                    </div>
                                </div>
								<div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control required mobile" value="" placeholder="Enter your mobile*" required="">
                                    </div>
                                </div>
								<div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="subject">
                                            <option value="*">What's your query all about?</option>
                                            <option value="Technical Advice & Support">Technical Advice & Support</option>
                                            <option value="Offer Combo Formulation">Offer Combo Formulation</option>
											<option value="⁠Request Sample">⁠Request Sample</option>
											<option value="⁠Product Enquiry">⁠Product Enquiry</option>
											<option value="⁠Request Brochure">⁠Request Brochure</option>
											<option value="⁠Grievances">⁠Grievances</option>
											<option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="category">
                                            <option value="*">Select the Category</option>
                                            <option value="Agro Emulsifiers">Agro Emulsifiers</option>
                                            <option value="Phosphate Esters">Phosphate Esters</option>
											<option value="Sulfosuccinate">Sulfosuccinate</option>
											<option value="Construction">Construction</option>
											<option value="Home care">Home care</option>
											<option value="Industrial Cleaning">Industrial Cleaning</option>
									</select>
                                    </div>
                                </div>
								<div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="product">
                                            <option value="*">Select the Products</option>
                                            <option value="">Emulsifiable Concentrates</option>
                                            <option value="">Emulsion in Water</option>
											<option value="">Microemulsion</option>
											<option value="">Oil Dispersions</option>
											<option value="">Suspension Concentrates</option>
											<option value="">Suspo Emulsion</option>
											
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Briefly explain your requirement..."></textarea>
                                    </div>
                                </div>                                            
                            </div>
                            <div class="contact-section-btn">
                                <div class="row m-0 justify-content-md-between align-items-end">
                                    <!--<div class="form-group">
                                        <label for="exampleFormControlFile1">CV UPLOAD</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>-->
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn btn-primary waves-effect waves-dark" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    

    <!-- Main Footer -->
    
	
	
<?php include 'footer.php'; ?>
