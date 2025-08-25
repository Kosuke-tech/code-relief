<?php get_header(); ?>
<section class="pageContact blContainer"  id="target_page-contact">
        <div class="pageContact__headingWrap headingWrap">
            <h2 class="pageContact__heading heading">Contact</h2>
            <p class="pageContact__subHeading subHeading">お問い合わせフォーム</p>
        </div>
    <div class="pageContact__textWrap">
        <p class="pageContact__text">
            ご相談、簡単なお見積りなどお気軽にご相談ください。<br>
            送信いただいてから2〜3営業日以内に返信させていただきます。
        </p>
    </div>
</section>
<section class="form formContainer">
    <?php echo do_shortcode('[contact-form-7 id="85ef873" title="お問い合わせフォーム"]'); ?>
</section>
<?php get_footer(); ?>