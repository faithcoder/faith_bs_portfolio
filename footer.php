       <!-- Footer-->
       <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?php echo get_theme_mod("address_title"); ?></h4>
                        <p class="lead mb-0">
                        <?php echo get_theme_mod("address_desc"); ?>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod("footer_social_icons_one_url"); ?>"> <i class="<?php echo get_theme_mod("footer_social_icons_one"); ?>"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod("footer_social_icons_two_url"); ?>"> <i class="<?php echo get_theme_mod("footer_social_icons_two"); ?>"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod("footer_social_icons_three_url"); ?>"> <i class="<?php echo get_theme_mod("footer_social_icons_three"); ?>"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo get_theme_mod("footer_social_icons_four_url"); ?>"> <i class="<?php echo get_theme_mod("footer_social_icons_four"); ?>"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"><?php echo get_theme_mod("footer_about_title"); ?></h4>
                        <p class="lead mb-0">
                        <?php echo get_theme_mod("footer_about_desc"); ?>
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
 
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
       
        
        
       
       <?php wp_footer(); ?> 
    </body>
</html>
