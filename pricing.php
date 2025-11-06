<?php require "common/header.php"; ?>
    <section class="page-title page-title-layout3">
      <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading">Providing Care for The Sickest In Community.</h1>
            <p class="pagetitle__desc">Medcity has been present in Europe since 1990, offering innovative
              solutions, specializing in medical services for treatment of medical infrastructure.
            </p>
            <a href="appointment.html" class="btn btn__secondary btn__rounded mr-30">
              <span>Find A Doctor</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================
      Pricing  
      =========================== -->
    <section class="pricing pt-0 pb-80">
      <div class="container">
        <div class="row row-no-gutter packages-wrapper">
          <!-- pricing item #1-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-package">
              <div>
                <h5 class="package__title">Starter Plan</h5>
                <p class="package__desc">We provide all aspects of medical practice for your family, including general
                  check-ups.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>Review your medical records.</li>
                  <li>Check and test blood pressure.</li>
                  <li>Run tests such as blood tests.</li>
                </ul>
              </div>
              <div class="package__footer">
                <div class="package__price">
                  <span class="package__currency">$</span><span>50</span><span class="package__period">/Month</span>
                </div>
                <a href="#" class="btn btn__secondary btn__rounded">Purchase Now</a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #2-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-package">
              <div>
                <h5 class="package__title">Basic Plan</h5>
                <p class="package__desc">Fast project turnaround time, substantial cost savings & quality standards.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>Review your medical records.</li>
                  <li>Check and test blood pressure.</li>
                  <li>Run tests such as blood tests.</li>
                  <li>Check and test lung function.</li>
                </ul>
              </div>
              <div class="package__footer">
                <div class="package__price">
                  <span class="package__currency">$</span><span>70</span><span class="package__period">/Month</span>
                </div>
                <a href="#" class="btn btn__primary btn__rounded">Purchase Now</a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
          <!-- pricing item #3-->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="pricing-package">
              <div>
                <h5 class="package__title">Advanced Plan</h5>
                <p class="package__desc">Fast project turnaround time, substantial cost savings & quality standards.</p>
                <ul class="package__list list-items list-items-layout2 list-unstyled">
                  <li>Review your medical records.</li>
                  <li>Check and test blood pressure.</li>
                  <li>Run tests such as blood tests.</li>
                  <li>Check and test lung function.</li>
                  <li>Narrowing of the arteries.</li>
                  <li>Other specialized tests.</li>
                </ul>
              </div>
              <div class="package__footer">
                <div class="package__price">
                  <span class="package__currency">$</span><span>90</span><span class="package__period">/Month</span>
                </div>
                <a href="#" class="btn btn__secondary btn__rounded">Purchase Now</a>
              </div><!-- /.package__footer -->
            </div><!-- /.pricing-package -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <p class="text__link mb-0">Delivering tomorrow’s health care for your family.
              <a href="doctors-timetable.html" class="btn btn__secondary btn__link mx-1">
                <span>View Doctors’ Timetable</span> <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </p>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing  -->

    <!-- ==========================
        contact layout 2
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
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Play Video</span>
              </a>
            </div>
            <div class="text__block">
              <p class="text__block-desc color-white font-weight-bold">We provide a comprehensive range of plans for
                families and individuals at every stage of life, with annual limits ranging from £1.5m to unlimited.</p>
              <div class="sinature color-white">
                <span class="font-weight-bold">Martin Qube</span><span>, Medcity Manager</span>
              </div>
            </div><!-- /.text__block -->
            <div class="slick-carousel clients-light mt-20"
              data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

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

    <!-- ========================
     gallery
    =========================== -->
    <section class="gallery pt-0 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                <img src="assets/images/gallery/1.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                <img src="assets/images/gallery/2.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                <img src="assets/images/gallery/3.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                <img src="assets/images/gallery/4.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                <img src="assets/images/gallery/5.jpg" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                <img src="assets/images/gallery/6.jpg" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.gallery 2 -->
    <?php require "common/footer.php"; ?>