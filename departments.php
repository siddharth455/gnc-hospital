<?php require "common/header.php"; ?>
    <section class="page-title">
      <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9 col-xl-5">
            <h1 class="pagetitle__heading">Providing Care for The Sickest In Community.</h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure.
            </p>
            <ul class="features-list list-unstyled mb-0 d-flex flex-wrap justify-content-between">
              <!-- feature item #1 -->
              <li class="feature-item">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                </div>
                <h2 class="feature__title">Examination</h2>
              </li><!-- /.feature-item-->
              <!-- feature item #2 -->
              <li class="feature-item">
                <div class="feature__icon">
                  <i class="icon-medicine"></i>
                </div>
                <h2 class="feature__title">Prescription </h2>
              </li><!-- /.feature-item-->
              <!-- feature item #3 -->
              <li class="feature-item">
                <div class="feature__icon">
                  <i class="icon-heart2"></i>
                </div>
                <h2 class="feature__title">Cardiogram</h2>
              </li><!-- /.feature-item-->
              <!-- feature item #4 -->
              <li class="feature-item">
                <div class="feature__icon">
                  <i class="icon-blood-test"></i>
                </div>
                <h2 class="feature__title">Blood Pressure</h2>
              </li><!-- /.feature-item-->
            </ul><!-- /.features-list -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<section class="services-layout1 services-carousel">
  <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
        <div class="heading text-center mb-60 mt-60">
          <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2>
          <h3 class="heading__title">Providing Medical Care For The Sickest In Our Community.</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="slick-carousel"
          data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, 
          "responsive": [
            {"breakpoint": 992, "settings": {"slidesToShow": 2}},
            {"breakpoint": 767, "settings": {"slidesToShow": 1}},
            {"breakpoint": 480, "settings": {"slidesToShow": 1}}
          ]}'>

          <!-- Gynecology -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-venus"></i>
              <i class="fa-solid fa-venus"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Gynecology Clinic</h4>
              <p class="service__desc">Comprehensive women's healthcare including reproductive, prenatal, and wellness services.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Menstrual Disorders</li>
                <li>Pregnancy Care</li>
                <li>Family Planning</li>
              </ul>
              <a href="gynecology.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Orthopedic -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-bone"></i>
              <i class="fa-solid fa-bone"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Orthopedic Clinic</h4>
              <p class="service__desc">Comprehensive orthopedic treatment supporting bones, joints, muscles, and mobility.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Joint Replacement</li>
                <li>Fracture Management</li>
                <li>Sports Injuries</li>
              </ul>
              <a href="orthopedic.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Surgeon -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-user-md"></i>
              <i class="fa-solid fa-user-md"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Surgery Department</h4>
              <p class="service__desc">Advanced surgical care including emergency, general, and minimally invasive procedures.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>General Surgery</li>
                <li>Trauma Surgery</li>
                <li>Post-operative Care</li>
              </ul>
              <a href="surgery.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Urology -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-droplet"></i>
              <i class="fa-solid fa-droplet"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Urology Clinic</h4>
              <p class="service__desc">Specialized urology services treating kidney, bladder, prostate, and urinary conditions.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Kidney Stones</li>
                <li>Prostate Care</li>
                <li>Urethral Treatment</li>
              </ul>
              <a href="urology.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Pediatric -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-baby"></i>
              <i class="fa-solid fa-baby"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Pediatric Clinic</h4>
              <p class="service__desc">Pediatric care for infants, children, adolescents, growth, development, and wellness.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Newborn Care</li>
                <li>Vaccinations</li>
                <li>Child Growth Monitoring</li>
              </ul>
              <a href="pediatric.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Laboratory Analysis -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-microscope"></i>
              <i class="fa-solid fa-microscope"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Laboratory Analysis</h4>
              <p class="service__desc">Laboratory analysis providing accurate diagnostic tests for comprehensive health evaluation today.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Biochemistry</li>
                <li>Pathology</li>
                <li>Microbiology</li>
              </ul>
              <a href="laboratory.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Radiology -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-x-ray"></i>
              <i class="fa-solid fa-x-ray"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Radiology</h4>
              <p class="service__desc">Radiology delivering clear medical imaging for diagnosis, treatment planning, and monitoring.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>X-Ray</li>
                <li>Ultrasound</li>
                <li>MRI</li>
              </ul>
              <a href="radiology.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Physician -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-stethoscope"></i>
              <i class="fa-solid fa-stethoscope"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Physician</h4>
              <p class="service__desc">General and internal medicine for adult healthcare, chronic disease, and prevention.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>General Checkup</li>
                <li>Chronic Care</li>
                <li>Preventive Health</li>
              </ul>
              <a href="physician.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Physiotherapy -->
          <div class="service-item">
            <div class="service__icon">
              <i class="fa-solid fa-heart-pulse"></i>
              <i class="fa-solid fa-heart-pulse"></i>
            </div>
            <div class="service__content">
              <h4 class="service__title">Physiotherapy</h4>
              <p class="service__desc">Physiotherapy improving movement, reducing pain, restoring strength, flexibility, and function.</p>
              <ul class="list-items list-items-layout1 list-unstyled">
                <li>Manual Therapy</li>
                <li>Exercise Rehab</li>
                <li>Pain Management</li>
              </ul>
              <a href="physiotherapy.php" class="btn btn__secondary btn__outlined btn__rounded">
                <span>Read More</span><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- /.Services Layout 2 -->

    <!-- ======================
     Work Process 
    ========================= -->
    <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row heading-layout2">
          <div class="col-12">
            <h2 class="heading__subtitle color-primary">Caring For The Health Of You And Your Family.</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading__title color-white">We Provide All Aspects Of Medical Practice For Your Whole Family!
            </h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            <p class="heading__desc font-weight-bold color-gray mb-40">We will work with you to develop individualised
              care
              plans, including
              management of chronic diseases. If we cannot assist, we can provide referrals or advice about the type of
              practitioner you require. We treat all enquiries sensitively and in the strictest confidence.
            </p>
            <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
              <li>Fractures and dislocations</li>
              <li>Health Assessments</li>
              <li>Desensitisation injections</li>
              <li>High Quality Care</li>
              <li>Desensitisation injections</li>
            </ul>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="carousel-container mt-90">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                <!-- process item #1 -->
                <div class="process-item">
                  <span class="process__number">01</span>
                  <div class="process__icon">
                    <i class="icon-health-report"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Fill In Our Medical Application</h4>
                  <p class="process__desc">Medcity offers low-cost health coverage for adults with limited income, you
                    can
                    enroll.</p>
                 
                </div><!-- /.process-item -->
                <!-- process-item #2 -->
                <div class="process-item">
                  <span class="process__number">02</span>
                  <div class="process__icon">
                    <i class="icon-dna"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Review Your Family Medical History</h4>
                  <p class="process__desc">Regular health exams can help find all the problems, also can find it early
                    chances.</p>
                  
                </div><!-- /.process-item -->
                <!-- process-item #3 -->
                <div class="process-item">
                  <span class="process__number">03</span>
                  <div class="process__icon">
                    <i class="icon-medicine"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Choose Between Our Care Programs</h4>
                  <p class="process__desc">We have protocols to protect our patients while continuing to provide
                    necessary
                    care.</p>
                  
                </div><!-- /.process-item -->
                <!-- process-item #4 -->
                <div class="process-item">
                  <span class="process__number">04</span>
                  <div class="process__icon">
                    <i class="icon-stethoscope"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Introduce You To Highly Qualified Doctors</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills and trained to
                    assist you. </p>
                 
                </div><!-- /.process-item -->
                <!-- process-item #5 -->
                <div class="process-item">
                  <span class="process__number">05</span>
                  <div class="process__icon">
                    <i class="icon-head"></i>
                  </div><!-- /.process__icon -->
                  <h4 class="process__title">Your custom Next process</h4>
                  <p class="process__desc">Our administration and support staff have exceptional skills to assist you.
                  </p>
                 
                </div><!-- /.process-item -->
              </div><!-- /.carousel -->
            </div>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="cta bg-light-blue">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <img src="assets/images/icons/alert2.png" class="cta__img" alt="alert">
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-7 col-lg-7">
              <h4 class="cta__title">True Healthcare For Your Family!</h4>
              <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
                put protocols to protect our patients and staff while continuing to provide medically necessary care.
              </p>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
              <a href="appointment.html" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                <span>Healthcare Programs</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.cta -->
    </section><!-- /.Work Process -->
    <!-- ========================= 
      Testimonials layout 3
      =========================  -->
    <section class="testimonials-layout3 pt-130 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title color-primary">Inspiring Stories!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
      </div><!-- /.container -->
    </section><!-- /.testimonials layout 3 -->

    <!-- ==========================
          contact layout 2
      =========================== -->
    <section class="contact-layout2 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <form class="contact-panel__form" method="post" action="assets/php/contact.html" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Book An Appointment</h4>
                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-widget form-group-icon"></i>
                      <select class="form-control">
                        <option value="0">Choose Clinic</option>
                        <option value="1">Pathology Clinic</option>
                        <option value="2">Pathology Clinic</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <select class="form-control">
                        <option value="0">Choose Doctor</option>
                        <option value="1">Ahmed Abdallah</option>
                        <option value="2">Mahmoud Begha</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-calendar form-group-icon"></i>
                      <input type="date" class="form-control" id="contact-date" name="contact-date" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-clock form-group-icon"></i>
                      <input type="time" class="form-control" id="contact-time" name="contact-time" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to contact our
                    friendly staff with any medical enquiry.
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href="tel:+917060100108">Emergency Line: (+91) 7060100108</a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#">Location: Chakrata Rd, near Sarna pul, Selakui, Uttarakhand 248011</a>
                    </li>
                    <li>
                      <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 9:00 am - 5:00 pm</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

   
    <?php require "common/footer.php"; ?>