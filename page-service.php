<?php get_header(); ?>
<section class="service" id="target_page-service">
    <div class="service__inner blContainer">
        <div class="service__headingWrap headingWrap">
            <h2 class="service__heading heading">Service</h2>
            <p class="service__subHeading subHeading">コーディング代行サービス</p>
        </div>
        <div class="service__cardWrap">
            <div class="service__cardInner">
                <div class="service__card">
                    <h3 class="service__cardTitle">HTML,CSSのコーディング代行</h3>
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
                    <h3 class="service__cardTitle"> WordPressのコーディング代行</h3>
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
                    <h3 class="service__cardTitle">レスポンシブ対応</h3>
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
            <a class="service__btn" href="<?php echo esc_url(home_url('/price/#target_page-price')); ?>">
                <span class="service__btnText">料金を見る</span>
            </a>
        </div>
    </div>
</section>

<section class="feature" id="target_page-feature">
    <div class="feature__wrap blContainer">
        <div class="feature__headingWrap headingWrap">
            <h2 class="feature__heading heading">Feature</h2>
            <p class="feature__subHeading subHeading">サービスの特徴</p>
        </div>
        <div class="feature__cardWrap">
            <div id="feature-page-layout" class="feature__cardInner">
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
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">セキュリティ対策</span>
                    </div>
                    <h3 class="feature__cardTitle">情報漏洩リスクを未然に防止</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/security@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/security@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/security@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            デフォルトのまま使用せずに不要情報の削除、無効化を行うことで、ユーザーIDの漏洩を防いだり不正アタックのリスクを減らします。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">レスポンシブ対応</span>
                    </div>
                    <h3 class="feature__cardTitle">スマホ対応も万全</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/iPhone3@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/iPhone3@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/iPhone3@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            スマホが主流になった現在では、
                            レスポンシブコーディングは必須です。
                            こちらも丁寧に対応させていただきます。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">最新ブラウザでチェック</span>
                    </div>
                    <h3 class="feature__cardTitle">最新の環境に対応</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/microsoft@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/microsoft@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/microsoft@1x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            コーディング後のチェックは、Chrome、Safari、Edge、Firefoxの最新ブラウザにて確認を行います。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">安心して任せられる</span>
                    </div>
                    <h3 class="feature__cardTitle">丁寧な業務</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/politeness@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/politeness@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/politeness@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            コーディングはもちろんのこと、その他付業務や報連相なども丁寧に行います。
                            安心してご依頼ください。
                        </p>
                    </div>
                </div>
                <div class="feature__card">
                    <div class="feature__catchWrap">
                        <span class="feature__catch">その他、ご相談ごともOK</span>
                    </div>
                    <h3 class="feature__cardTitle">柔軟な対応</h3>
                    <div class="feature__imgWrap">
                        <img class="feature__img" alt=""
                            src="<?php echo esc_url(get_theme_file_uri('img/flexible@1x.png')); ?>"
                            srcset="<?php echo esc_url(get_theme_file_uri('img/flexible@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/flexible@2x.png')); ?> 2x"
                            loading="lazy">
                    </div>
                    <div class="feature__textWrap">
                        <p class="feature__text">
                            フリーランスの特性を活かし、ご相談ごとには柔軟に対応いたします。お困りごとがございましたら「ご相談・お見積もり」ページよりお気軽にお問い合わせください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- コンタクトセクションは、partsフォルダ内のファイルでパーツ化 -->
<?php get_template_part('parts/contact', 'section'); ?>

<?php get_footer(); ?>