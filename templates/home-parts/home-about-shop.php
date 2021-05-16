<?php 
    $defaultTitle = 'DER SHOP';
    $defaultContentTop = 'Unser Herz schlägt für KTM, Husqvarna und GasGas. Weniger ist mehr“ – damit meinen wir weniger Marken, aber mehr Know How. Das ist Teil unseres Erfolges und kommt unseren Kunden zugute. Mit unseren hohen Ansprüchen an Service, Qualität und Seriosität beweisen wir das immer wieder auf’s Neue.';
    $defaultContentBottom = 'Ganz egal ob Du schon ein Motorradfreak bist oder es noch werden willst, erlebe die Welt von drei der innovativsten Motorradmarken in unserem über 1.200 m2 großen Flagshipstore. Zahlreiche, auch prominente Stammkunden weit über die Grenzen von Oberösterreich hinaus, schenken uns daher seit vielen Jahren ihr Vertrauen.';
;?>

<section class="section">
    <h1 class="section__header">
        <?php
            if(is_sidebar_active('shop-home-title')):
                dynamic_sidebar('shop-home-title');
            else:
                echo $defaultTitle;
            endif;
        ;?>   
    </h1>
    <div class="about-store about-store--flex-top">
        <div class="about-store__img about-store__img--on-the-left">
            <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/braumandl_start.jpg' ;?>" alt="brumandls online store">
        </div>
        <div class="about-store__content about-store__content--on-the-right">
            <div class="about-store__text content">
                <div class="content__img">
                    <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/braumandl_logo_small.png' ;?>" alt="ktm, husqvarna, gasgas and braumandl small logo">
                </div>
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
        </div>
    </div>
</section>