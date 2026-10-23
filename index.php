<?php
  include('incl/header.php');
  include('incl/nav.php');
?>

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-1">
          <span class="display-2--intro">Your website, your voice</span>
          <span class="display-2--description lh-base">

           We at Bytehive are here to ensure that you receive the best service, information, and attention in creating your dream website.
          </span>
        </h1>
        <a class="contact" href="#contact">
          <button type="button" class="rounded-pill btn-rounded">Get in Touch
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
      </a>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="video-box">
          <img src="images/arts/intro-section-illustration.png" alt="video illutration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>


<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Our Services</h1>
      <div class="heading-line mb-1"></div>
    </div>
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
            Our Services Range From Initial Design To Deployment Anywhere Anytime
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="lh-lg">
            Whether you need an expert website, an online store, or a complete custom built CMS system, we're your one-stop solution that also provides consulting services to optimize your company's processes. We are constantly innovating and coming up with new solutions to meet the needs of today's ever-changing business climate.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <!-- <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Marketing</h3>
          <p class="lh-lg">
            Tired of not getting clients, we'll sort out all your social media needs.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-1.png" alt="marketing illustration" class="img-fluid">
        </div>
      </div>
    </div> -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="images/services/service-2.png" alt="web development illustration" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code">&nbsp;&nbsp;<h3 class="display-6--title mt-1">web development</h3></div>
          
          <p class="lh-lg">
            Your website isn't working for you anymore and you're looking for a quick and easy fix. We can do that. We'll take your current site, sprinkle in some love, and turn it into a website that will work wonders for your business. We'll also give you a fresh look that makes your branding pop. 
          </p>
          <!-- <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-server">&nbsp;&nbsp;<h3 class="display-6--title mt-1">Hosting</h3></div>
          <p class="lh-lg">
            Need a domain name that stands out? We make it easy to secure the perfect digital identity for your brand.
          </p>
          <p class="lh-lg">
              Already have a site or ready to launch? Host it on infrastructure you can trust. Our high-performance servers deliver rock-solid stability, top-tier security, and the speed your users expect.
          </p>
         <!--  <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button> -->
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-3.png" alt="cloud hosting illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio" class="portfolio get-started">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
      <div class="heading-line"></div>
    </div>
    <!-- FILTER BUTTONS  -->
    <!-- <div class="row mt-5 mb-4 g-3 text-center">
      <div class="col-md-12">
        <button class="btn btn-outline-primary" type="button">All</button>
        <button class="btn btn-outline-primary" type="button">websites</button>
        <button class="btn btn-outline-primary" type="button">design</button>
        <button class="btn btn-outline-primary" type="button">mockup</button>
      </div>
    </div> -->

    <!-- START THE PORTFOLIO ITEMS  -->
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/swingzonegolf.png" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Swing Zone Golf</h4>
              <p>Website development <br>Hosting</p>
               <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://www.swingzonegolf.co.uk" target="_blank">https://www.swingzonegolf.co.uk</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/stealth.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Stealth Martial Arts</h4>
              <p>Website development 
              <br>Admin & Student portal development
              <br>
              Hosting</p>
              <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://stealthmartialarts.com/">https://stealthmartialarts.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/azuna.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Azuna</h4>
              <p>Website development <br>Hosting</p>
              <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://www.azunasolutions.com" target="_blank">https://www.azunasolutions.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/src.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Stuart Russell Carpets</h4>
              <p>Website development <br>Hosting</p>
              <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://www.stuartrussellcarpets.co.uk" target="_blank">https://www.stuartrussellcarpets.co.uk</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/divine.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Divine Nails & Beauty</h4>
              <p>Website development <br>Hosting</p>
              <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://www.divinenailsbeauty.com/" target="_blank">https://www.divinenailsbeauty.com/</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/csr.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>CS&R - Caravan service and repairs</h4>
              <p>
                Website development 
                <br>
                Custom built admin system
                <br>
                Hosting
             </p>
              <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://repairscaravan.co.uk/" target="_blank">https://repairscaravan.co.uk/</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/lofthouse.png" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Lofthouse Services</h4>
              <p>Website development <br>Hosting</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/reptasia.png" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>Reptasia</h4>
              <p>Website development</p>
              <!-- <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; <a class="text-white" href="https://reptasiauk.com">https://reptasiauk.com</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e9ecef" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
    <div class="row text-center text-white">
      <h1 class="display-3 fw-bold">Testimonials</h1>
      <hr style="width: 100px; height: 3px; " class="mx-auto">
      <p class="lead pt-1">what our clients are saying</p>
    </div>

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- CAROUSEL ITEM 1 -->
          <div class="carousel-item active">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
               I am absolutely thrilled with the exceptional work done by Bytehive in designing our website. Their team's creativity, attention to detail, and professionalism truly exceeded our expectations. From the initial concept to the final product, they demonstrated a deep understanding of our brand and translated it into a visually stunning and user-friendly website. The seamless navigation, engaging visuals, and intuitive layout have undoubtedly enhanced our online presence and user experience. Collaborating with Bytehive was an absolute pleasure, and I highly recommend their services to anyone seeking a top-notch web design partner. They've not only crafted a remarkable website but also contributed significantly to our business's success. Thank you, Bytehive, for your outstanding work!
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-1.png" alt="client-1 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Lofthouse Services</h3>
            </div>
          </div>     
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
               From the very beginning, they demonstrated a clear understanding of what the business needed and delivered a modern, professional site that’s both visually appealing and easy to navigate. The attention to detail, responsiveness to feedback, and technical know-how made the whole process smooth and stress-free. The end result speaks for itself—we’ve had great feedback from customers, and the site truly reflects the quality and reliability of our services. I wouldn’t hesitate to recommend Bytehive to anyone looking for high-quality web development.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/csr-logo.png" alt="client-1 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>CS&R</h3>
            </div>
          </div>          
        </div>
        <div class="text-center">
          <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        </button>
        <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        </button>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<section id="faq" class="faq faq-bg">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-uppercase">faq</h1>
      <div class="heading-line"></div>
      <p class="lead">frequently asked questions, get knowledge befere hand</p>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                How much does a new website cost?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                There’s not one single answer to this question. A website design is quoted based on the needs of each individual project. Every website is unique and requires different components; we design and develop custom websites specifically for your small business. We’ll ask a lot of questions, assess your needs, and give you a quote based on that assessment.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Will you maintain my site for me?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Yes! We provide on-going support for many of our clients.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                What if I need help on my site down the road?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                We are only an email away! We’re here to help you as much or as little as you need, and we won’t disappear once the site is launched. We’ve been doing this for many years, so we aren’t going anywhere anytime soon.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                When do I pay?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                For most projects, equal payments are made at the start, midway, and the end of the project, but we can work with you to set up a schedule that meets your needs. We understand that this is a big investment and want to help you budget for the expense in whatever way possible.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="get-started mt-4">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
      <div class="heading-line"></div>
      
    </div>
    <div class="row mt-3 text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
          <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
          <p class="lh-lg">
            We know how important it is to have a website that works for your business, and we're here to help you make it happen. Whether you're looking for something brand new or just want to freshen up an old site, we're here for you.
          </p>
          <h3 class="display-3--brief">What will be the next step?</h3>
          <ul class="cta-info__list">
            <li>We'll prepare the proposal.</li>
            <li>We'll discuss it together.</li>
            <li>Let's start the discussion.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2">
          <h4 class="display-3--title mb-5">start your project</h4>
            <form class="row" action="scripts/contact.php" id="contact_us" method="POST" enctype="multipart/form-data">
              <input type="hidden" id="token" name="token">
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="First Name" id="inputFirstName" name="inputFirstName" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Last Name" id="inputLastName" name="inputLastName" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <input type="email" placeholder="Email Address" id="inputEmail" name="inputEmail" class="shadow form-control form-control-lg" required>
              </div>
              <div class="col-lg-12 mb-3">
                <textarea name="message" placeholder="Your enquiry" id="message" name="message" rows="8" class="shadow form-control form-control-lg" required></textarea>
              </div>
              <div class="text-center d-grid mt-1">
               <!--  <button type="submit" class="g-recaptcha btn btn-primary rounded-pill pt-3 pb-3" data-sitekey="<?=$recaptcha_key?>" data-callback="onSubmit">
                  submit
                  <i class="fas fa-paper-plane"></i>
                </button> -->
                <button name="submit" class="g-recaptcha btn btn-primary rounded-pill pt-3 pb-3">Submit <i class="fas fa-paper-plane"></i></button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include('incl/footer.php');
?>