<footer id="footer">
    <div class="footer-nav">
        <div class="address-and-socials">
            <div class="wrapper">
                <div class="address">
                    <div class="logo">
                        <img src="./assets/img/design/tat-thai-logo.svg" alt="tat thai logo">
                    </div>
                    <address>
                        <h3 class="weight-bold">การท่องเที่ยวแห่งประเทศไทย (ททท.)</h3>
                        <p>1600 ถ.เพชรบุรี แขวงมักกะสัน เขตราชเทวี กรุงเทพฯ 10400 ประเทศไทย</p>
                    </address>
                </div>
                <div class="socials">
                    <a href="#outer"><i class="ic ic-facebook"></i></a>
                    <a href="#outer"><i class="ic ic-instagram"></i></a>
                    <a href="#outer"><i class="ic ic-twitter"></i></a>
                    <a href="#outer"><i class="ic ic-youtube"></i></a>
                    <a href="#outer">
                        <i class="ic">
                            <img src="./assets/img/design/button-ipv6-small.png" alt="ipv6">
                        </i>
                    </a>

                </div>
            </div>
        </div>
        <div class="copyrights-and-links">
            <div class="wrapper">
                <div class="copyrights">
                    สงวนลิขสิทธิ์ พ.ศ. 2546-2568 BE
                </div>
                <div class="links">
                    <ul>
                        <li><a href="<?php echo $root; ?>about.php">กี่ยวกับ ททท.</a></li>
                        <li><a href="<?php echo $root; ?>page.php">เงื่อนไขการใช้งาน</a></li>
                        <li><a href="<?php echo $root; ?>page.php">นโยบายความเป็นส่วนตัว</a></li>
                        <li><a href="<?php echo $root; ?>page.php">นโยบายการใช้งานคุกกี้</a></li>
                        <li><a href="<?php echo $root; ?>sitemap.php">แผนผังเว็บไซต์</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="clipboard" style="display:none;">Copied</div>
</div><!-- CLOSE:#page -->

<?php if ($page_index) {
    include($root . "include/_wp-code/wp-cookie-law-info-bar.php");
}
?>

<div id="page-message">
    <p>For the best experience, we recommend viewing the site in portrait orientation on mobile devices.</p>
</div>

<!-- JS:LIBRARY -->
<script src="<?php echo $root; ?>assets/js/library/bundle.js"></script>
<script src="<?php echo $root; ?>assets/js/library/share.js"></script>
<script src="<?php echo $root; ?>assets/plugin/select2/select2.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/liMarquee/jquery.liMarquee.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.waypoints.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/countup/jquery.countup.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/rellax/rellax.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/lenis/lenis.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/splitting/splitting.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/imagesLoaded/imagesLoaded.pkgd.min.js"></script>
<script src="<?php echo $root; ?>assets/plugin/masonry/masonry.pkgd.min.js"></script>

<!-- JS:CONFIG -->
<script src="<?php echo $root; ?>assets/js/common/theme.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/theme-wp.js?v=<?php echo time(); ?>"></script>
<script src="<?php echo $root; ?>assets/js/common/util.js?v=<?php echo time(); ?>"></script>

<script src="<?php echo $root; ?>assets/js/index.js?v=<?php echo time(); ?>"></script>


</body>

</html>