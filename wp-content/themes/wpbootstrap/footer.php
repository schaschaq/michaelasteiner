<hr>

<footer class="footer a-footer">
            <div class="container container-footer">
                <a class="logo-footer" href="#"><img src="http://localhost/wp-content/themes/wpbootstrap/assets/img/agency/feder.png" alt="logo" width="80px"/></a>
                <p class="footer-info s-footer-info">Von der Schönheit eines schönen Tages verzaubert, werden alle Gedanken federleicht.</p>
                <form class="subscribe-form clearfix" action="./">
                    <label for="sb">Newsletter</label>
                    <div class="input-container clearfix">
                        <input class="subscribe-email" id="sb" type="email" placeholder="Deine E-Mail" required/>
                        <input class="subscribe-submit" type="submit" value=" "/>
                    </div>
                </form>
                <div class="ftr-social a-social">
                    <a class="social-network sc-fb" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
            
        </footer>

    <?php wp_footer(); ?>

     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/idangerous.swiper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/placeholder.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countTo.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/global.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js"></script>

        <script type="text/javascript">
        $('.primary-menu li').on('click', function(e){
            e.preventDefault();
           var target = $(this).find('a').attr('href');
           $('html, body').animate({
            scrollTop: $(target).offset().top
        },700);
       });
        </script>

  </body>
</html>