<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/stolzl_regular.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_book.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_medium.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_bold.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/Lato-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-ExtraBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VelaSans-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VelaSans-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendor.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
<body class="bgc-white">
<? elseif(strpos($_SERVER["REQUEST_URI"], "lk-org-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-project-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-petition-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-contact-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-about-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-additional-settings.php")) : ?>
<body class="has-settings-bar">
<? else : ?>
<body>
<? endif; ?>
    <header class="header">
        <div class="container header__container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                        loading="lazy"
                        src="img/logo.svg"
                        class="image"
                        width="185"
                        height="52"
                        alt="?????????????? ?????????????????? ??????????????"
                    >
                </a>
            </div>

			<? if(!strpos($_SERVER["REQUEST_URI"], "registration.php") && !strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
                <div class="header-nav">
                    <? if(strpos($_SERVER["REQUEST_URI"], "organizer.php")) : ?>
                        <div class="header-nav__menu-organizer">
                            <ul class="list-reset header-nav__menu-organizer-list">
                                <li><a href="javascript:;" class="link">??????????????</a></li>
                                <li><a href="javascript:;" class="link">??????????????</a></li>
                                <li><a href="javascript:;" class="link">????????????????????????</a></li>
                                <li><a href="javascript:;" class="link">??????????????????</a></li>
                            </ul>
                        </div>
                    <? else : ?>
                        <div class="header-nav__item header-nav__menu">
                            <div class="header-menu">
                                <button
                                        class="burger js-burger"
                                        aria-label="?????????????? ????????"
                                        aria-expanded="false"
                                        data-burger=""
                                >
                                    <svg class="icon burger__icon">
                                        <use href="img/sprite.svg#burger"></use>
                                    </svg>
                                    <span class="burger__text">????????</span>
                                </button>
                                <div class="menu" data-menu="" data-menu-overlay="">
                                    <div class="menu__close"></div>
                                    <ul class="list-reset menu__list">
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">??????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">??????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">???????? ??????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">??????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">????????????????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">????????????????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">??????????????????</a>
                                        </li>
                                        <li data-menu-item="">
                                            <a href="javascript:;" class="link">?????????????? ?? ??????????</a>
                                        </li>
                                    </ul>
                                    <div class="menu__footer">
                                        <div class="menu__contacts">
                                            <div class="menu__contacts-item">
                                                <div class="menu__contacts-title">???????????????????????????????? ??????????</div>
                                                <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                                            </div>
                                            <div class="menu__contacts-item">
                                                <div class="menu__contacts-title">??????????????????</div>
                                                <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                                            </div>
                                        </div>
                                        <ul class="list-reset social social--light menu__social">
                                            <li class="social__item">
                                                <a
                                                        href="javascript:;"
                                                        target="_blank"
                                                        class="social__link social__link--vk"
                                                        aria-label="???????? ?????????????????? ???? ??????????????????"
                                                >
                                                    <svg class="icon social__icon">
                                                        <use href="img/sprite.svg#vk"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a
                                                        href="javascript:;"
                                                        target="_blank"
                                                        class="social__link social__link--ok"
                                                        aria-label="???????? ?????????????????? ?? ????????????????????????????"
                                                >
                                                    <svg class="icon social__icon">
                                                        <use href="img/sprite.svg#ok"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="social__item">
                                                <a
                                                        href="javascript:;"
                                                        target="_blank"
                                                        class="social__link social__link--fb"
                                                        aria-label="???????? ?????????????????? ?? ??????????????"
                                                >
                                                    <svg class="icon social__icon">
                                                        <use href="img/sprite.svg#fb"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header-organizer">
                                <a class="link link--green flex" href="javascript:;">??????????????????????????</a>
                            </div>
                        </div>
                        <div class="header-nav__item header-nav__search">
                            <form id="" class="form" method="" action="javascript:;">
                                <div class="form__field">
                                    <input
                                            class="input-reset form__input"
                                            type="search"
                                            name="??????????"
                                            placeholder="?????? ???? ???????????? ???????????"
                                    >
                                    <button class="btn-reset form__btn">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#search"></use>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    <? endif; ?>
                </div>
                <div class="header-actions header-actions--current-user">
                    <div class="header-actions__item">
                        <button class="btn-reset btn btn--noframe">
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#user"></use>
                            </svg>
                            <span class="btn__text">??????????</span>
                        </button>
						<? //todo: ?????? ?????????????????? ???????????????? ?????????????????????????????? ?????????????????????????? ???????????? display:none ?????? .current-user ?? ???????????????? ?????? .header-actions__item>.btn ?>
                        <div class="current-user" style="display: none;">
                            <span class="current-user__menu js-current-user-menu">
                                <picture class="current-user__pic">
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/card-photo-volunteer.png"
                                        class="image"
                                        width="42"
                                        height="42"
                                        alt="User"
                                    >
                                </picture>
                                <span class="current-user__dropdown">
                                    <span class="current-user__dropdown-header">
                                        <span class="current-user__dropdown-header-title">???????????????????? ???????????????????????? ??????????????</span>
                                    </span>
                                </span>
                                <span class="current-user__dropdown-menu">
                                    <span class="current-user__dropdown-menu-item">
                                        <span class="current-user__dropdown-menu-user">
                                            <picture class="current-user__pic">
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="User"
                                                >
                                            </picture>
                                            <span class="current-user__dropdown-menu-user-header">
                                                <span class="current-user__dropdown-menu-user-title">
                                                    ???????????????? ?????????????? ????????????????
                                                </span>
                                            </span>
                                        </span>
                                        <span class="current-user__dropdown-menu-user">
                                            <picture class="current-user__pic">
                                                <source srcset="img/card-projects-org.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-projects-org.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="User"
                                                >
                                            </picture>
                                            <span class="current-user__dropdown-menu-user-header">
                                                <span class="current-user__dropdown-menu-user-title">
                                                    ???????????????????? ???????????????????????? ??????????????
                                                </span>
                                                <span class="current-user__dropdown-menu-user-subtitle">
                                                    ??????????????????????
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="current-user__dropdown-menu-item">
                                        <ul class="list-reset">
                                            <li><a href="javascript:;" class="link">?????????? ??????????????????????????</a></li>
                                            <li><a href="javascript:;" class="link">?????????????????? ??????????????</a></li>
                                            <li><a href="javascript:;" class="link">??????????</a></li>
                                        </ul>
                                    </span>
                                </span>
                            </span>
                            <span class="current-user__notice">
                                <button class="btn-reset current-user__notice-btn notice">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#messages"></use>
                                    </svg>
                                    <span class="current-user__notice-btn-num">3</span>
                                </button>
                                <button class="btn-reset current-user__notice-btn notice">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#bell"></use>
                                    </svg>
                                    <span class="current-user__notice-btn-num">24</span>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="header-actions__item">
                        <button class="btn-reset btn">
                            <span class="btn__text">????????????????????????????????????</span>
                        </button>
                    </div>
                </div>
			<? else : ?>
                <div class="header-actions header-actions-authreg">
					<? if(strpos($_SERVER["REQUEST_URI"], "registration.php")) : ?>
                        <button class="btn-reset btn">
                            <span class="btn__text">??????????</span>
                        </button>
					<? elseif(strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
                        <button class="btn-reset btn">
                            <span class="btn__text">????????????????????????????????????</span>
                        </button>
                    <? endif; ?>
                </div>
			<? endif; ?>
        </div>
    </header>

    <main class="main">