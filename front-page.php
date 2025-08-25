<?php get_header(); ?>
<section class="estimate">
    <div class="estimate__wrap">
        <div class="estimate__textWrap">
            <p class="estimate__text">こちらからもお問い合わせいただけます。</p>
        </div>
        <a class="estimate__btn" href="<?php echo esc_url(home_url('/contact/#target_page-contact')) ?>">
            <span class="estimate__btnText">お見積もりはこちら</span>
        </a>
    </div>
</section>
<section class="issue" id="target_issue">
    <div class="issue__wrap">
        <div class="issue__catchWrap">
            <h2 class="issue__catch">
                もし、こんなお悩みがあれば、<br>
                外注先の候補としてご検討ください。
            </h2>
        </div>
        <div class="issue__cardWrap">

            <div class="issue__card">
                <div class="issue__cardInner">
                    <div class="issue__iconWrap">
                        <i class="issue__icon fa-solid fa-check"></i>
                    </div>
                    <div class="issue__textWrap">
                        <p class="issue__cardText">
                            外注したいけど、<span class="issue__break1">もちろんクライアントに納品するので、</span><br class="issue__break3">品質は担保したい・・・
                        </p>
                    </div>
                </div>
            </div>
            <div class="issue__card">
                <div class="issue__cardInner">
                    <div class="issue__iconWrap">
                        <i class="issue__icon fa-solid fa-check"></i>
                    </div>
                    <div class="issue__textWrap">
                        <p class="issue__cardText">
                            社内の人手が足りず、<br class="issue__break2">受けられていない案件がある・・・
                        </p>
                    </div>
                </div>
            </div>
            <div class="issue__card">
                <div class="issue__cardInner">
                    <div class="issue__iconWrap">
                        <i class="issue__icon fa-solid fa-check"></i>
                    </div>
                    <div class="issue__textWrap">
                        <p class="issue__cardText">
                            案件が立て込んでいて、<br class="issue__break2">制作の納期が間に合わない・・・
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="answer">
    <div class="answer__wrap blContainer">
        <div class="answer__catchWrap">
            <h2 class="answer__catch">フリーランスならではの柔軟な対応で、<br class="answer__break1">企業さまのWEBサイト制作をサポートします。</h2>
        </div>
        <div class="answer__textWrap">
            <p class="answer__text">
                埼玉県さいたま市拠点に、 士業向けコーポレートサイトのWordPressコーディングを得意としたフリーランスの制作事務所です。
                コーディングの品質はもちろん、会社員時代は営業や、事業承継の支援をやっていたこともあり、文章や文言についての重要性は理解しているつもりですので、安心してご発注ください。
            </p>
        </div>
    </div>
</section>

<section class="service" id="target_service">
    <div class="service__inner blContainer">
        <div class="service__headingWrap headingWrap">
            <h2 class="service__heading heading">Service</h2>
            <p class="service__subHeading subHeading">コーディング代行サービス</p>
        </div>
        <div class="service__cardWrap">
            <div class="service__cardInner">
                <div class="service__card">
                    <h3 class="service__cardTitle">HTML・CSS<br class="service__break1"> コーディング代行</h3>
                    <div class="service__imgWrap">
                        <img class="service__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/code_image@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/code_image@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/code_image@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="service__cardTextWrap">
                        <p class="service__cardText">
                            デザイン通りの忠実なコーディングを意識しております。
                            ご依頼いただいた企業さまの納品先の企業さまのことまで意識し、丁寧なコーディングを心がけております。
                        </p>
                    </div>
                </div>
                <div class="service__card">
                    <h3 class="service__cardTitle"> WordPress<br class="service__break1"> コーディング代行</h3>
                    <div class="service__imgWrap">
                        <img class="service__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/wp_on_service@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/wp_on_service@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/wp_on_service@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="service__cardTextWrap">
                        <p class="service__cardText">
                            WordPressの実装から、各種機能の実装まで、忠実に再現いたします。
                            カスタム投稿タイプ、カスタムフィールドの実装など各種機能の追加に対応しております。
                        </p>
                    </div>
                </div>
                <div class="service__card">
                    <h3 class="service__cardTitle">レスポンシブ<br class="service__break1">対応</h3>
                    <div class="service__imgWrap">
                        <img class="service__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/iPhone1@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/iPhone1@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/iPhone1@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="service__cardTextWrap">
                        <p class="service__cardText">
                            スマホやタブレット画面にも対応します。
                            こちらもデザインを忠実に再現するよう心がけております。
                        </p>
                    </div>
                </div>
            </div>
            <a class="service__btn" href="<?php echo esc_url(home_url('/service/#target_page-service')); ?>">
                <span class="service__btnText">サービスページを見る</span>
            </a>
        </div>
    </div>
</section>
<section class="feature" id="target_feature">
    <div class="feature__wrap blContainer">
        <div class="feature__headingWrap headingWrap">
            <h2 class="feature__heading heading">Feature</h2>
            <p class="feature__subHeading subHeading">サービスの特徴</p>
        </div>
        <div class="feature__cardWrap">
            <div class="feature__cardInner">
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">誰が見ても読みやすく</span>
                    </div>
                    <h3 class="feature__cardTitle">シンプルなソースコード</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/pot@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/pot@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/pot@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            無駄なソースコードは記述せず、シンプルで誰が見ても読めて修正できるようなメンテナンス性の高いコーディングを行います。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">CMS対応可能</span>
                    </div>
                    <h3 class="feature__cardTitle">WordPressコーディング</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/wp_coding@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/wp_coding@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/wp_coding@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            WordPressのコーディングにも対応しています。
                            導入設定、バージョンアップ、機能追加、カスタムフィールドなど企業さまの先のクライアントさまを意識してコーディングしています。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">PCデザインのみでもOK</span>
                    </div>
                    <h3 class="feature__cardTitle">PCデザインを基にスマホ対応</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/hp_image@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/hp_image@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/hp_image@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            スマートフォンのデザインがない場合でも、追加費用無しでPCデザインをベースにしたスマートフォンのコーディングに対応いたします。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">フリーランスだからこそ</span>
                    </div>
                    <h3 class="feature__cardTitle">連絡ひとつですぐに頼みやすい</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/iPhone2@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/iPhone2@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/iPhone2@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            最後まで本人がプロジェクトを担当するので、やり取りがスムーズで安心！再委託は致しません。
                            またchatworkなどのチャットツールなどでのスピーディーなやり取りも可能です。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="feature__btn" href="<?php echo esc_url(home_url('/service/#target_page-feature')); ?>">
            <span class="feature__btnText">サービスの特徴一覧を見る</span>
        </a>
    </div>
</section>
<!-- <section>
            <div>
                トップページ制作事例セクション
                士業の制作実績がないため、未作成
            </div>
        </section> -->
<!-- コンタクトセクションは、partsフォルダ内のファイルでパーツ化 -->
<?php get_template_part('parts/contact', 'section'); ?>
</main>
</body>
<?php get_footer(); ?>