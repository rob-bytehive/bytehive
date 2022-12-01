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

            Bytehive is here to deliver high-quality, affordable websites.
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
          <p class="fw-light">
            Lorem ipsum dolor sit amet consectetur architecto magni, 
            dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias. 
            Tempore ducimus molestiae in dolore enim.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Marketing</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
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
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="images/services/service-2.png" alt="web development illustration" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">web development</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">cloud hosting</h3>
          <p class="lh-lg">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
             doloremque autem quibusdam blanditiis harum alias hic accusantium 
             maxime atque ratione magni repellat?
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
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

<section id="faq" class="faq">
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
                What are the main features?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                do i have to pay again after trial
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How can I get started after trial?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Can I be refunded if am not satisfied?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto sint ipsam dolore tempora facere laboriosam corrupti!
          </p>
          <h3 class="display-3--brief">What will be the next step?</h3>
          <ul class="cta-info__list">
            <li>We'll prepare the proposal.</li>
            <li>we'll discuss it together.</li>
            <li>let's start the discussion.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2">
          <h4 class="display-3--title mb-5">start your project</h4>
          <form action="scripts/contact.php" id="contact" method="post" class="row">
           
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="First Name" id="inputFirstName" name="inputFirstName" class="shadow form-control form-control-lg" required>
            </div>
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="Last Name" id="inputLastName" name="inputLastName" class="shadow form-control form-control-lg" required>
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="email address" id="inputEmail" name="inputEmail" class="shadow form-control form-control-lg" required>
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="message" id="message" name="message" rows="8" class="shadow form-control form-control-lg" required></textarea>
            </div>
            <div class="text-center d-grid mt-1">
               <div class="g-recaptcha" data-sitekey="<?=$recaptcha_key?>"></div>
              <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3 mt-3">
                submit
                <i class="fas fa-paper-plane"></i>
              </button>
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