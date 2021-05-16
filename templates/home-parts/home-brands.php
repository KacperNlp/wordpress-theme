<?php 
    //ktm brand props
    $ktmHeader = 'READY TO RACE';
    $ktmDescription = 'Was auch immer Sie suchen, KTM hat garantiert das perfekte Motorrad für Sie.';
    $ktmButtonText = 'KTM entdecken';

    //ktm brand props
    $hqvHeader = 'PIONEERING SINCE 1903';
    $hqvDescription = 'Das Unternehmen ist immer auf der Suche nach einem echten und authentischen Fahrerlebnis.';
    $hqvButtonText = 'Husqvarna entdecken';

    //gas brand props
    $gasHeader = 'GET ON THE GAS!';
    $gasDescription = 'GASGAS heißt alle Motorradfahrer willkommen, die eine gemeinsame Leidenschaft für das Motorradfahren haben.';
    $gasButtonText = 'GASGAS entdecken';
;?>

<section class="section section--with-heder">
    <h1 class="section__header">UNSERE MARKEN</h1>
    <div class="brands">
        <!--KTM brand-->
        <div class="brand">
            <img src="<?php echo get_template_directory_uri() . '-child/img/logos/KTM-brand-logo.png' ;?>" alt="KTM brand">
            <h2 class="brand__header brand__header--ktm">
                <?php
                    if(is_sidebar_active('ktm-header')):
                        dynamic_sidebar('ktm-header');
                    else:
                        echo $ktmHeader;
                    endif;
                ;?>
            </h2>
            <p class="brand__description">
                <?php
                    if(is_sidebar_active('ktm-text')):
                        dynamic_sidebar('ktm-text');
                    else:
                        echo $ktmDescription;
                    endif;
                ;?>
            </p>
            <a href="http://my-theme-for-job/ktm/" class="button"><?php echo $ktmButtonText;?></a>
        </div>
        <!--Husqvarna brand-->
        <div class="brand">
            <img src="<?php echo get_template_directory_uri() . '-child/img/logos/HQV-brand-logo.png' ;?>" alt="Husqvarna brand">
            <h2 class="brand__header brand__header--hqv">
                <?php
                    if(is_sidebar_active('hqv-header')):
                        dynamic_sidebar('hqv-header');
                    else:
                        echo $hqvHeader;
                    endif;
                ;?>
            </h2>
            <p class="brand__description">
                <?php
                    if(is_sidebar_active('hqv-text')):
                        dynamic_sidebar('hqv-text');
                    else:
                        echo $hqvDescription;
                    endif;
                ;?>
            </p>
            <a href="http://my-theme-for-job/ktm/" class="button"><?php echo $hqvButtonText;?></a>
        </div>
        <!--GASGAS brand-->
        <div class="brand">
            <img src="<?php echo get_template_directory_uri() . '-child/img/logos/GAS-brand-logo.png' ;?>" alt="GASGAS brand">
            <h2 class="brand__header  brand__header--gas">
                <?php
                    if(is_sidebar_active('gas-header')):
                        dynamic_sidebar('gas-header');
                    else:
                        echo $gasHeader;
                    endif;
                ;?>
            </h2>
            <p class="brand__description">
                <?php
                    if(is_sidebar_active('gas-text')):
                        dynamic_sidebar('gas-text');
                    else:
                        echo $gasDescription;
                    endif;
                ;?>
            </p>
            <a href="http://my-theme-for-job/ktm/" class="button"><?php echo $gasButtonText;?></a>
        </div>
    </div>
</section>