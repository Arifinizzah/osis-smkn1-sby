<section class="hero is-fullheight has-carousel">
  <div class="hero-carousel carousel-animated carousel-animate-slide" data-autoplay="true">
    <div class='carousel-container'>
      <div class='carousel-item has-background is-active'>
        <img class="is-background" id="parallax" src="img/smeasevent2.jpg" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" id="parallax" src="https://wikiki.github.io/images/singer.jpg" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" id="parallax" src="https://wikiki.github.io/images/sushi.jpg" alt="" />
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" id="parallax" src="https://wikiki.github.io/images/life.jpg" alt="" />
      </div>
    </div>
    <div class="carousel-navigation is-overlay">
      <div class="carousel-nav-left">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="carousel-nav-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <div class="hero-head">
    <nav class="navbar is-fixed-top" style="background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(255,255,255,0) 100%)">
      <div class="container">
        <div class="navbar-brand">
          <div class="navbar-item has-text-white">
            <!-- <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo"> -->
            <span class="navbar-item has-text-white has-text-white">
              <a href="index.php" class="button is-primary is-inverted">
                <span class="title is-5" style="font-family: comfortaa">MPK-OSIS SMKN 1 Surabaya</span>
              </a>
            </span>
          </div>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function () {
          var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
          if ($navbarBurgers.length > 0) {
          $navbarBurgers.forEach(function ($el) {
              $el.addEventListener('click', function () {
              var target = $el.dataset.target;
              var $target = document.getElementById(target);
              $el.classList.toggle('is-active');
              $target.classList.toggle('is-active');
              });
          });
          }
          });
        </script>
        <div id="navbarMenuHeroA" class="navbar-menu" style="background: transparent; font-family: comfortaa">
          <div class="navbar-end">
            <a class="navbar-item has-text-white" href="index.php"><span class="icon"><i class="fas fa-home"></i> </span>HOME</a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link has-text-white" href="#"><span class="icon"><i class="fas fa-users"></i> </span>PROFIL</a>
              <div class="navbar-dropdown is-boxed">
                <a class="navbar-item has-text-white" href="#">SMKN 1 SURABAYA</a>
                <a class="navbar-item has-text-white" href="#">MPK</a>
                <a class="navbar-item has-text-white" href="#">OSIS</a>
              </div>
            </div>
            <a class="navbar-item has-text-white" href="#artikel"><span class="icon"><i class="far fa-newspaper"></i> </span>ARTIKEL</a>
            <a class="navbar-item has-text-white" href="#uneg-uneg"><span class="icon"><i class="far fa-comments"></i> </span>UNEG-UNEG</a>
            <a class="navbar-item has-text-white" href="pages/about.php"><span class="icon"><i class="fas fa-info"></i> </span>TENTANG KAMI</a>
            <!-- <div class="control has-icons-left" style="margin: 20px 9px !important">
              <input class="input is-small" style="border-radius:50px" placeholder="Search..">
              <span class="icon is-small is-left">
                <i class="fas fa-search"></i>
              </span>
            </div> -->
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title is-1 has-text-white hero-text" style="font-family: code; letter-spacing: 15.4px;">HEADER</h1>
      <h6 class="subtitle is-6 has-text-white hero-text" style="font-family: code; line-height: 2.13; letter-spacing: 3.5px;">Subheader Adalah Seperti Ini</h6>
    </div>
  </div>
</section>
