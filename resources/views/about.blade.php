@extends('master') 

@section('content')

<main id="main">

<!-- ======= About Me Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <span>About Me</span>
      <h2>About Me</h2>
    </div>

    <div class="row">
      <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
      <div class="col-lg-8 d-flex flex-column align-items-stretch">
        <div class="content ps-lg-4 d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Muhammad Rakha Saputra</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>-</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 857 6467 9200</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bogor</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>16</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Student</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>rakhasaputra0710@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <div class="row mt-n4">
            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-emoji-smile" style="color: #20b38e;"></i>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
              </div>
            </div>

            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-journal-richtextr" style="color: #8a1ac2;"></i>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
              </div>
            </div>

            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-clock" style="color: #2cbdee;"></i>
                <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
              </div>
            </div>

            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-award" style="color: #ffb459;"></i>
                <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->

        <div class="skills-content ps-lg-4">
          <div class="progress">
            <span class="skill">HTML <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">45%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
</main>

@endsection