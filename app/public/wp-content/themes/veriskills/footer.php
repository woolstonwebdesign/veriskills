<?php
/*
@package: wwd blankslate
*/
?>
<footer class="page-footer">
    <div class="w-75 mx-auto">
        <div class="footer-headline">
            <h3>Be recognised.</h3>
            <div class="contact-container">
                <div>
                    <i class="las la-phone"></i>
                    <a href="tel:0738581230">07 3858 1230</a>
                </div>
                <div>
                    <i class="las la-envelope"></i>
                    <a href="mailto:info@veriskills.com">info@veriskills.com</a>
                </div>
            </div>
        </div>
        <div class="text-center fade-white-bg footer-form-container">
            <?php echo do_shortcode('[contact-form-7 id="36" title="Footer Form"]'); ?>
        </div>
        <div class="footer-references">
            <div class="text-center">
                <?php echo '&copy;&nbsp;', date( 'Y' ).' ', esc_html( get_bloginfo( 'name' ) ); ?>
            </div>
            <div class="text-center">
                Design by <a href="https://www.focusedmarketing.com.au" target="_blank">Focused Marketing</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>