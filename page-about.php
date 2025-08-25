<?php get_header(); ?>
<section class="about" id="target_page-about">
    <div class="about__wrap">
        <div class="about__headingWrap headingWrap">
            <h2 class="about__heading heading">About</h2>
            <p class="about__subHeading subHeading">プロフィール</p>
        </div>
        <div class="about__profileWrap">
            <div class="about__catchWrap">
                <p class="about__catch">埼玉県さいたま市を拠点とする、<br class="about__break1">フリーランスのWeb制作事務所です。</p>
            </div>
            <div class="about__inner">
                <div class="about__imgWrap">
                    <img class="about__img" alt=""
                        src="<?php echo esc_url(get_theme_file_uri('/img/profile@1x.png')); ?>"
                        srcset="<?php echo esc_url(get_theme_file_uri('/img/profile@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('/img/profile@2x.png')); ?> 2x"
                        loading="lazy">
                </div>
                <div class="about__profile">
                    <div class="about__nameWrap">
                        <span class="about__name">宮本 皐佑 / Kosuke Miyamoto</span>
                    </div>
                    <div class="about__descriptionWrap">
                        <p class="about__description">
                            埼玉県を拠点に、関東近辺の案件を中心に受注させていただいております。
                            これまで、ECメーカーでの営業、M&Aによる事業承継支援に関わらせていただき、コーディングを学んだのち、フリーランスとして独立いたしました。
                            これまでに培ったマーケティングや、事業承継支援で培った事業理解力を活かし、お客さまに寄り添った制作をしており、現在も日々休みの時間を使って自己研鑽をしております。
                            企業さまからいただいたご要望に忠実に、実直にお応えできるよう、自分自身も成長していきたいと考えております。
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="office blContainer" id="target_page-office">
<div class="office__headingWrap headingWrap">
            <h2 class="office__heading heading">Office</h2>
            <p class="office__subHeading subHeading">事業所概要</p>
        </div>
    <div class="office__wrap">
        <dl class="office__list">
            <dt class="office__term">サービス名</dt>
            <dd class="office__description">コードリリーフ</dd>
            <dt class="office__term">代表者</dt>
            <dd class="office__description">宮本 皐佑</dd>
            <dt class="office__term">所在地</dt>
            <dd class="office__description">
                〒336-0017<br>
                埼玉県さいたま市南区南浦和2-28-13-532
            </dd>
            <dt class="office__term">営業時間</dt>
            <dd class="office__description">9:00 〜 18:00</dd>
            <dt class="office__term">定休日</dt>
            <dd class="office__description">土日</dd>
            <dt class="office__term">メールアドレス</dt>
            <dd class="office__description">miyamoto-design.2024@outlook.jp</dd>
            <dt class="office__term">事業所サイトURL</dt>
            <dd class="office__description">https://miyamoto-design.jp</dd>
        </dl>
    </div>
</section>
<!-- コンタクトセクションは、partsフォルダ内のファイルでパーツ化 -->
<?php get_template_part('parts/contact', 'section'); ?>
<?php get_footer(); ?>