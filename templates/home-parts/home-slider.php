<?php 
    $defaultTitle = 'WIR HABEN DICH ALS KUNDEN IM FOKUS.';
    $defaultContentTop = 'Für uns steht die Fahrfreude unserer Kunden an erster Stelle. Unser Bemühen ist es, Dir erstklassige Beratung und individuelle Serviceleistungen zu bieten. Wir betreuen unsere Kunden so, wie wir es erwarten würden, betreut zu werden.';
    $defaultContentBottom = 'In diesem Sinne herzlich Willkommen in unserem Flagshipstore in Thalheim bei Wels';
;?>

<section class="section-gray">
    <div class="section-gray__container">
        <div class="section-gray__content">
            <h1 class="section__header section__header--gray-section">
                <?php 
                    if(is_sidebar_active('slider-home-header')):
                        dynamic_sidebar('slider-home-header');
                    else:
                        echo $defaultTitle;
                    endif;
                ;?>
            </h1>
            <p class="content__text">
                <?php 
                    if(is_sidebar_active('shop-home-content-top')):
                        dynamic_sidebar('shop-home-content-top');
                    else:
                        echo $defaultContentTop;
                    endif;
                ;?>
            </p>
            <p class="content__text">
                <?php 
                    if(is_sidebar_active('shop-home-content-bottom')):
                        dynamic_sidebar('shop-home-content-bottom');
                    else:
                        echo $defaultContentBottom;
                    endif;
                ;?>
            </p>
        </div>
        <div class="slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/slider/braumandl_carousel-03.jpg' ;?>" alt="store image braumandl">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/slider/braumandl_hqv-01.jpg' ;?>" alt="store image husqvarna">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/slider/braumandl_hqv-02.jpg' ;?>" alt="braumandl and husqvarna store">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/slider/braumandl_ktm-02.jpg' ;?>" alt="braumandl and husqvarna store">
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"><span class="fas fa-arrow-left"></span></div>
        </div>
    </div>
</section>