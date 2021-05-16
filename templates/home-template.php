<div class="header-image" style="background-image:url('http://my-theme-for-job/wp-content/uploads/2021/05/header-img.jpg'"></div>
<!--brands-->
<?php get_template_part('templates/home-parts/home-brands') ;?>
<!--about store/shop-->
<?php get_template_part('templates/home-parts/home-online-shop') ;?>
<?php get_template_part('templates/home-parts/home-about-shop') ;?>
<!--slider-->
<?php get_template_part('templates/home-parts/home-slider') ;?>
<!--News section-->
<?php get_template_part('templates/home-parts/home-news') ;?>

<!--Swiper slider settings/Javascript-->
<script type="module">
  import Swiper from 'https://unpkg.com/swiper/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper-container', {
      navigation: {
         nextEl: '.swiper-button-prev',
      },
      clickable:true,
      direction: 'horizontal',
      grabCursor:true,
      slidesPerView: 1,
      spaceBetween: 20,
      preventClicks: true,
      loop:true,
      breakpoints: {
        // when window width is >= 320px
        320: {
        slidesPerView: 1,    
        loopAdditionalSlides:2,
        },
        // when window width is >= 480px
        480: {
        slidesPerView: 2,
        loopAdditionalSlides:3,
        },
        // when window width is >= 640px
        760: {
        slidesPerView: 1,
        loopAdditionalSlides:2,
        }
    }
  })
</script>
