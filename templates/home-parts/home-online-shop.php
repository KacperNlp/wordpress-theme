<?php 
    $defaultTitle = 'NEUER ONLINESHOP';
    $defaultContent = 'Besuche unseren neuen Onlineshop und entdecke die Welt von KTM, Husqvarna und GasGas mit einer Vielfalt von PowerParts über PowerWear. Mit Hilfe der verschiedenen Filter helfen wir Dir die passenden SpareParts für Ihr Bike zu finden.';
;?>

<!--new store-->
<section class="section">
    <div class="about-store">
        <div class="about-store__content">
            <div class="about-store__text content">
                <h2 class="content__header">
                    <?php 
                        if(is_sidebar_active('onlineshop-home-title')):
                            dynamic_sidebar('onlineshop-home-title');
                        else:
                            echo $defaultTitle;
                        endif;
                    ;?>
                </h2>
                <p class="content__text content__text--with-margin">
                <?php 
                        if(is_sidebar_active('onlineshop-home-content')):
                            dynamic_sidebar('onlineshop-home-content');
                        else:
                            echo $defaultContent;
                        endif;
                ;?>
                </p>
            </div>
            <a href="https://shop.braumandl.com/" target="_blank" class="button" rel="noopener">Entdecken</a>
        </div>
        <div class="about-store__img">
            <img src="<?php echo get_template_directory_uri() . '-child/img/homePage/Braumandl_onlineshop.jpg' ;?>" alt="brumandls online store">
        </div>
    </div>
</section>
