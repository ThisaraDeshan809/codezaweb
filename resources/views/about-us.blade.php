@extends('layouts.main')

@section('content')

<div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>About Us</h2>
      <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
  </div>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3 style="color: white;">Empowering Success through Innovation: Unveiling Codeza's Journey</h3>
          <p class="fst-italic" style="color: bisque;">
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

  <section id="testimonials" class="testimonials" style="background: linear-gradient(to right, #000000, #434343);">
    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <p style="color: aliceblue;">What are they saying</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3 >Kasun Nimesh</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Codeza exceeded my expectations with their exceptional software solutions. They delivered on time and within budget, providing a seamless user experience.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Saduni Wasana</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I am impressed by Codeza's professionalism and expertise in mobile app development. They created a feature-rich and user-friendly app that perfectly meets our requirements.                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Dasun Shanaka</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Working with Codeza has been a game-changer for my business. Their UI/UX designs and frontend development transformed our website into a captivating platform.                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Jaliya Madushan</h3>
                <h4>Developper</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Codeza's dedication to excellence is unmatched. Their machine learning expertise brought our project to life, delivering accurate and insightful results.                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

@endsection
