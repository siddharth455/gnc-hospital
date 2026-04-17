<?php require "common/header.php"; ?>
    <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <span class="pagetitle__subheading">Caring For The Health Of You And Your Family.</span>
            <h1 class="pagetitle__heading">We Provide All Aspects Of Medical Practice For Your Whole Family!</h1>
         
           
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
        Services Layout 1
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
</section><!-- /.Services Layout 1 -->

    <!-- ======================
    Features Layout 2
    ========================= -->
    <section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
            <div class="heading__layout2 mb-50">
              <h3 class="heading__title color-white">SJS Has Touched The Lives Of Patients & Providing Care for The
                Sickest In Our Community.</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row mb-100">
          <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
            <div class="heading__icon">
              <i class="icon-insurance"></i>
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-9 col-md-9 col-lg-6">
            <p class="heading__desc font-weight-bold color-white mb-30">SJS has been present in Europe since 1990,
              offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure. With over 100
              professionals actively participates in numerous initiatives aimed at creating sustainable change for
              patients!
            </p>
            <a href="#" class="btn btn__white btn__link">
              <i class="icon-arrow-right icon-filled"></i>
              <span>Our Core Values</span>
            </a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Feature item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
             <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                </div>
                <h4 class="feature__title">Medical Advices & Check Ups</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
             <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-doctor"></i>
                </div>
                <h4 class="feature__title">Trusted Medical Treatment </h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-ambulance"></i>
                </div>
                <h4 class="feature__title">Emergency Help Available 24/7</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
             <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-drugs"></i>
                </div>
                <h4 class="feature__title">Medical Research Professionals </h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-first-aid-kit"></i>
                </div>
                <h4 class="feature__title">Only Qualified Doctors</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
             <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-hospital"></i>
                </div>
                <h4 class="feature__title">Cutting Edge to Edge Facility</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-expenses"></i>
                </div>
                <h4 class="feature__title">Affordable Prices For All Patients</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Feature item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <!-- /.feature__img -->
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-bandage"></i>
                </div>
                <h4 class="feature__title">Quality Care For Every Patient</h4>
              </div><!-- /.feature__content -->
              <a href="#" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold color-gray mb-0">We hope you will allow us to care for you and strive to be the
              first and best choice for healthcare.
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->
    <!-- ==========================
        contact layout 3
    =========================== -->
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
      <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel mb-50">
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
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30">Helping Patients From Around the Globe!!</h3>
              <p class="heading__desc">Our staff strives to make each interaction with patients clear, concise, and
                inviting. Support the important work of Medicsh Hospital by making a much-needed donation today.
              </p>
            </div>
            <div class="d-flex align-items-center">
              <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                <i class="fas fa-heart"></i> <span>Make A Gift</span>
              </a>
             
            </div>
            <div class="text__block">
              <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range of Medical plans for
              families and individuals at every stage of life, with minimum annual limits ranging</p>
              
            </div><!-- /.text__block -->
           
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 3 -->

    <!-- ========================= 
      Testimonials layout 2
      =========================  -->
    <section class="testimonials-layout2 pt-130 pb-40">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Inspiring Stories!</h3>
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
    </section><!-- /.testimonials layout 2 -->
    <?php require "common/footer.php"; ?>