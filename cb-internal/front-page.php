<?php get_header(); /* This powers the front page or the homepage of the WP website*/ ?>

<div class="top-banner" style="background-image: url(<?php echo get_theme_file_uri('/imgs/banner.jpeg') ?>)">

   <header class="cb-site-header">
      <nav class="navbar navbar-expand-lg navbar-dark">
         <div class="container-fluid nav-display">
            <img src="<?php echo get_theme_file_uri('/imgs/1cb_logo.png') ?>">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link 2</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      <form class="d-flex top-banner-search">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         <button class="jumbotron-search-btn" type="submit">Search</button>
      </form>
   </header>

   <section class="top-banner-content">
      <!-- <h1 class="top-banner-title"><?php bloginfo('name'); ?></h1> -->
      <h2 class="top-banner-tagline"><?php bloginfo('description'); ?></h2>

      <div class="container top-banner-quick-links">
         <!-- <div class="row">
            <div class="col-12">
               <h3 class="ql-title">Quick Links</h3>
            </div>
         </div> -->
         <div class="row ql-row">
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-cake2-fill"></i>
               <p>Birthdays</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-envelope-at-fill"></i>
               <p>Staff Directory</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-calendar-week-fill"></i>
               <p>Holiday Calendar</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-box2-heart-fill"></i>
               <p>Benefits</p>
            </div>
         </div>
         <div class="row ql-row">
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-cake2-fill"></i>
               <p>Birthdays</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-envelope-at-fill"></i>
               <p>Staff Directory</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-calendar-week-fill"></i>
               <p>Holiday Calendar</p>
            </div>
            <div class="col-3 top-banner-quick-links-link">
               <i class="bi bi-cake2-fill"></i>
               <p>Birthdays</p>
            </div>
         </div>
      </div>

      <div class="top-banner-btns">
         <button type="button" class="btn btn-light-blue"><a class="bi-house-fill dark-link-style" href="http://www.cloudburstgroup.com" target="_blank">&nbsp; Cloudburst Main Site</a></button>
         <button type="button" class="btn btn-light"><a class="bi-house-fill dark-link-style" href="http://www.cloudburstgroup.com" target="_blank">&nbsp; Another Button</a></button>
      </div>
   </section>
   
</div>


<div class="container text-center quick-access-cards">
   <div class="row">
      <!-- <div class="col-12">
      <h2 class="fs-2 subhead">Column</h2>
    </div> -->
      <div class="row">
         <div class="col-3">
            <div class="card">
               <i class="bi bi-folder2-open card-icon"></i>

               <div class="card-body">
                  <h5 class="card-title">HR Policies &amp; Forms</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div>
         </div>
         <div class="col-3">
            <div class="card">
               <i class="bi bi-laptop card-icon"></i>

               <div class="card-body">
                  <h5 class="card-title">Information Technology</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div>
         </div>
         <div class="col-3">
            <div class="card">
               <i class="bi bi-calendar card-icon"></i>

               <div class="card-body">
                  <h5 class="card-title">Calendar</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div>
         </div>
         <div class="col-3">
            <div class="card">
               <i class="bi bi-currency-dollar card-icon"></i>

               <div class="card-body">
                  <h5 class="card-title">Accounting &amp; Finance</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
            </div>
         </div>
      </div>
   </div>


   <?php get_footer(); ?>