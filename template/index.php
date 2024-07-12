<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="index-main">
    <div class="landing-image">
        <div class="landing-image-wrapper">
            <div class="landing-bg">
                <?php
                $cover = './assets/img/design/landing-bg.png';
                $cover_m = './assets/img/design/landing-bg-m.png';
                if (preg_match("/\.(mp4)$/", $cover)) { ?>
                    <figure class="object">
                        <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                    </figure>
                <?php } else { ?>
                    <picture class="object">
                        <source media="(min-width:992px) and (orientation: landscape)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img src="<?php echo $cover; ?>" alt="landing image">
                    </picture>
                <?php } ?>
            </div>

            <picture class="object landing-fg">
                <source media="(min-width:992px) and (orientation: landscape)" srcset="./assets/img/design/landing-fg.png">
                <source media="(min-width:0px)" srcset="./assets/img/design/landing-fg-m.png">
                <img src="./assets/img/design/landing-fg.png" alt="landing image">
            </picture>

            <div class="a-center landing-image-button landing-image-close">
                <button type="submit" class="button button-primary">คลิก</button>
            </div>

            <div class="bg-linear-gradient">
            </div>
        </div>
    </div>


    <div class="index-overlay-form">
        <div class="theme-gradient-overlay index-overlay-form-close">
        </div>
        <div class="wrapper">
            <div class="index-overlay-form-close close-button">
                <i class="ic ic-close  pink-hover"></i>
            </div>
            <div class="index-popup-content" style="background-image: url('./assets/img/design/popup-isolate-image.png');">
                <div class="index-popup-content-wrapper">
                    <div class="entry-content a-center">
                        <h6>ลงทะเบียน <strong><em>มีสิทธิ์ได้ของรางวัลทุกสัปดาห์</em></strong></h6>
                        <h5 style="color: var(--color-pink)"> ตั๋วเครื่องบิน 5 รางวัล <em>(รางวัลละ 2 ใบ)</em></h5>
                        <h6 style="color: var(--color-pink)"> ตั๋วหนัง 200 รางวัล <em>(รางวัลละ 2 ใบ)</em></h6>
                        <p>*สามารถลงทะเบียนใหม่ เพื่อร่วมสนุกได้ทุกสัปดาห์* ประกาศผลผู้โชคดี
                            ที่เพจ Amazing Thailand ทุกสัปดาห์ โดยรางวัลจะถูกส่งไปที่อีเมลของคุณ</p>
                    </div>
                    <div class="popup-form">
                        <div class="entry-form" data-form-style="space-between">
                            <form>
                                <div class="fields">
                                    <div class="field">
                                        <div class="input">
                                            <label class="label anim fixed" for="fullname-lastname">ชื่อ - นามสกุล</label>
                                            <input type="text" name="fullname-lastname" id="fullname-lastname" autocomplete="given-name family-name">
                                        </div>
                                    </div>


                                    <div class="field">
                                        <div class="input">
                                            <label class="label anim fixed" for="email">อีเมล</label>
                                            <input type="email" name="email" id="email" autocomplete="email">
                                        </div>
                                    </div>


                                    <div class="field">
                                        <div class="input">
                                            <label class="label anim fixed" for="tel">เบอร์โทรศัพท์</label>
                                            <input type="tel" name="tel" id="tel" autocomplete="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="a-center margin-top-sm index-overlay-form-close">
                                    <button type="submit" class="button button-primary">ส่งข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="terms a-center size-subtitle1 c-gray">
                        <p>*เงื่อนไขเป็นไปตามที่การท่องเที่ยวแห่งประเทศไทยกำหนด</p>
                        <a href="<?php echo $root; ?>page.php" class="underline">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="index-hero">
        <div class="index-hero-bg">
            <?php
            $cover = './assets/img/design/landing-hero-bg.png';
            $cover_m = './assets/img/design/landing-hero-bg-m.png';
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img src="<?php echo $cover; ?>" alt="hero bg">
                </picture>
            <?php } ?>
        </div>

        <div class="pin-bg" id="index-hero-pin">
            <img src="./assets/img/design/pin-hero.png" alt="pin bg">
        </div>
        <div class="text-vector" id="index-hero-vector">
            <img src="./assets/img/design/text-hero.png" alt="pin bg">
        </div>

        <div class="animate-path">
            <div class="animate-path-wrapper">
                <?php
                for ($i = 1; $i < 5; $i++) {
                ?>
                    <div class="hero-animate-pin">
                        <img src="./assets/img/design/hero-animate-pin-<?php echo $i ?>.png" alt="">
                    </div>
                <?php } ?>
                <?php include($root . 'include/element-dash-path.php') ?>
            </div>
        </div>

        <div class="clip-bg">
            <div class="cream-bg"></div>
        </div>
    </section>

    <section class="masonry-grid-section">
        <div class="masonry-grid">
            <div class="masonry-grid-item-sizer"></div>
            <div class="masonry-grid-gutter-sizer"></div>
            <?php
            for ($i = 1; $i < 11; $i++) {
                include($root . "include/element-province-card.php");
            } ?>
        </div>

        <div class="masonry-grid-button a-center">
            <a href="javascript:;" class="button button-secondary">โหลดเพิ่มเติม</a>
        </div>

        <div class="wave-bg yellow-wave-bg-1">
            <?php include($root . "include/element-yellow-wave-1.php") ?>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>