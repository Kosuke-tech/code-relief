<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right');
        bloginfo('name');
        ?>
    </title>
    <meta name="description" content="フリーランスコーディング代行サービスのコードリリーフです。">
    <script defer src="https://kit.fontawesome.com/4b1ecdf8a5.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header__inner">
            <a class="header__logoWrap" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="header__logo" alt="ロゴ"
                    src="<?php echo esc_url(get_theme_file_uri('img/logo_txt@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/logo_txt@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/logo_txt@2x.png')); ?> 2x"
                    loading="lazy">
            </a>
            <nav class="header__navWrap">
                <ul class="header__navList">
                    <li class="header__item">
                        <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="<?php echo esc_url(home_url('/service')); ?>">サービス</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="<?php echo esc_url(home_url('/price')); ?>">料金表</a>
                    </li>
                    <li class="header__item">
                        <a class="header__link" href="<?php echo esc_url(home_url('/flow')); ?>">納品の流れ</a>
                    </li>
                    <!-- <li class="header__item">
                        <a class="header__link" href="">制作事例</a>
                    </li> -->
                    <li class="header__item">
                        <a class="header__link" href="<?php echo esc_url(home_url('/about')); ?>">事業所概要</a>
                    </li>
                </ul>
                <div class="header__contactWrap">
                    <a class="header__chatworkLink" href="https://www.chatwork.com/2xvld0jel7k08" target="_blank" rel="noopener noreferrer">
                        <div class="header__chatworkIconWrap">
                            <img class="header__chatworkLogo" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('/img/chatwork_logo@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <span class="header__chatworkText">Chatworkで相談</span>
                    </a>
                    <a class="header__mailLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">
                        <div class="header__mailIconWrap">
                            <img class="header__mailLogo" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('/img/mail_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('/img/mail_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('/img/mail_logo@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <span class="header__mailText">メールで相談</span>
                    </a>
                </div>
            </nav>
        </div>
        <!-------------------------------------------------- スマホメニュー ---------------------------------------------->
        <div class="spMenu">
            <input id="navToggle" class="spMenu__toggle" type="checkbox" tabindex="-1">
            <label class="spMenu__hamburger" for="navToggle">
                <span class="spMenu__hamburgerLine"></span>
            </label>
            <!-- SPナビメニュー -->
            <div class="spMenu__wrapper">
                <nav class="spMenu__nav">
                    <ul class="spMenu__list">
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/service')); ?>">サービス</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/price')); ?>">料金表</a>
                        </li>
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/flow')); ?>">納品の流れ</a>
                        </li>
                        <!-- <li class="spMenu__item">
                        <a class="spMenu__link" href="">制作事例</a>
                    </li> -->
                        <li class="spMenu__item">
                            <a class="spMenu__link" href="<?php echo esc_url(home_url('/about')); ?>">事業所概要</a>
                        </li>
                    </ul>
                    <div class="spMenu__contactWrap">
                        <a class="spMenu__chatworkLink" href="https://www.chatwork.com/2xvld0jel7k08" target="_blank" rel="noopener noreferrer">
                            <div class="spMenu__chatworkIconWrap">
                                <img class="spMenu__chatworkLogo" alt=""
                                    src="<?php echo esc_url(get_theme_file_uri('img/chatwork_logo@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/chatwork_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/chatwork_logo@2x.png')); ?> 2x"
                                    loading="lazy">
                            </div>
                            <span class="spMenu__chatworkText">Chatworkで相談</span>
                        </a>
                        <a class="spMenu__mailLink" href="<?php echo esc_url(home_url('/contact/#target_page-contact')); ?>">
                            <div class="spMenu__mailIconWrap">
                                <img class="spMenu__mailLogo" alt=""
                                    src="<?php echo esc_url(get_theme_file_uri('img/mail_logo@1x.png')); ?>"
                                    srcset="<?php echo esc_url(get_theme_file_uri('img/mail_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/mail_logo@2x.png')); ?> 2x"
                                    loading="lazy">
                            </div>
                            <span class="spMenu__mailText">メールで相談</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="fv">
            <div class="fv__inner">
                <!-- ファーストビューのキャッチコピーは、トップページにのみに表示。 -->
                <?php if (is_front_page()) : ?>
                    <div class="fv__catchWrap">
                        <h1 class="fv__catch">
                            士業のHPに特化した丁寧で正確なコーディングで、<br>
                            WordPressの導入〜カスタマイズまで承ります。<br>
                            安心してご発注ください。
                        </h1>
                    </div>
                <?php endif; ?>
                <div class="fv__imgWrap">
                    <div class="fv__imgInner">
                        <div class="fv__wpImgWrap">
                            <img class="fv__wpImg" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('img/wp_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/wp_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/wp_logo@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <div class="fv__htmlImgWrap">
                            <img class="fv__htmlImg" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('img/html_file@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/html_file@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/html_file@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <div class="fv__pcImgWrap">
                            <img class="fv__pcImg" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('img/fastview_pc@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/fastview_pc@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/fastview_pc@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <div class="fv__cssImgWrap">
                            <img class="fv__cssImg" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('img/css_file@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/css_file@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/css_file@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                        <div class="fv__jsImgWrap">
                            <img class="fv__jsImg" alt=""
                                src="<?php echo esc_url(get_theme_file_uri('img/js_logo@1x.png')); ?>"
                                srcset="<?php echo esc_url(get_theme_file_uri('img/js_logo@1x.png')); ?> 1x,
                                    <?php echo esc_url(get_theme_file_uri('img/js_logo@2x.png')); ?> 2x"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>