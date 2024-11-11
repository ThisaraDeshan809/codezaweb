@extends('layouts.main')

@section('content')

<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3 style="color: white; text-align: center;">Empowering Success through Innovation: Unveiling Codeza's Journey</h3>
          <p class="fst-italic" style="color: white; font-size: 18px; text-align: center;">
            At Codeza, we believe in the transformative power of technology. Our dedicated team of experts is committed to crafting exceptional software and web design solutions tailored to your unique needs. With a rich history of successful projects and satisfied clients, we have honed our skills to provide innovative and scalable solutions. Our passion for creativity, coupled with our relentless pursuit of excellence, fuels our drive to deliver remarkable results. We foster collaboration, transparency, and trust, ensuring a seamless partnership as we bring your vision to life. Join us on this exciting journey and let's shape the future together.
          </p>


        </div>
      </div>

    </div>
  </section>


  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
          <p>All Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
          <p>Web Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
          <p>Mobile Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>

      </div>

    </div>
  </section>


  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Why Choose Codeza?</h3>
            <p>
              Discover the Codeza Advantage - Unparalleled Expertise and Exceptional Results. With a track record of excellence, we deliver innovative software and web design solutions tailored to your needs. Choose Codeza and unlock your business's full potential in the digital landscape.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-devices'></i>
                  <h4>WEB DEVELOPING</h4>
                  <p>Unlocking digital possibilities through expert web development services. Elevate your online presence with Codeza.</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-mobile'></i>
                  <h4>SOFTWARE DEVELOPING</h4>
                  <p>"Empowering businesses with cutting-edge software solutions. Trust Codeza for exceptional software development services."</p>
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class='bx bx-slideshow'></i>
                  <h4>UI/UX DESIGNING</h4>
                  <p>"Crafting captivating user experiences through intuitive and visually stunning UI/UX designs. Choose Codeza for unforgettable digital interactions."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- <section id="trainers" class="trainers">

    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <h2 style="color: wheat; text-align: center;">Our Team</h2>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

          <div class="member">

            <img src="assets/img/trainers/guliya.jpg" class="img-fluid" alt="" >
            <div class="member-content">
              <h4>M.E.T.S.DESHAN</h4>
              <span>Fullstack Developer</span>
              <p>
                Tech enthusiast creating seamless digital experiences with expertise in both front-end and back-end development.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/kaiya.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>H.D.C.BANDARA</h4>
              <span>UI/UX DESIGNER & Frontend Developer</span>
              <p>
                Creative designer with a passion for intuitive user experiences and expertise in frontend development.
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/sajee.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Sajeewan</h4>
              <span>ML & Mobile App Developer</span>
              <p>
                Innovative mobile app developer with a focus on machine learning algorithms, delivering cutting-edge solutions.                </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/trainers/sritharan.jpg" class="img-fluid" alt="">
            <div class="member-content">
              <h4>Sritharan</h4>
              <span>ML & Mobile App Developer</span>
              <p>
                Expert in mobile app development and machine learning, leveraging technology to create intelligent and user-centric applications.                </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> --}}

@endsection
