<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>KAISEI portfolio</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="viewport" content="width=device-width">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
      <div class="wrap">
      <div class="shutterWrap">
      <div class="shutter"></div>
    </div>
    <!--ヘッダ-->
    <header id="onlyheader">
        <div class="header_wrap"></div>
        <div class="scrollTop scroll_off">
        <img src="images/pageTop.png">
       </div>
        <div class="header_background">
            <div class="header">
                <div class="header_container">
                    <div class="header_logo">
                        <a href="index.html" style="text-decoration: none;">
                            <div class="logo_content">
                                <img src="img/fire.png">
                                <span class="portfolio">Kaisei.Portfolio</span>
                            </div>
                        </a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#" class="down">Home</a></li>
                            <li><a href="#about" class="down">About</a></li>
                            <li><a href="#skill" class="down">Skill</a></li>
                            <li><a href="#service" class="down">Service</a></li>
                            <li><a href="#contact" class="down">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <p id="illust01"><img src="images/illust01.png" width="140" height="200" alt=""></p>
                <p id="illust02"><img src="images/illust02.png" width="140" height="100" alt=""></p>
            </div>
        </div>
        <!--ハンバーガーメニュー-->
        <div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
</div>

<nav class="globalMenuSp">
    <ul>
      <li><a href="#" class="down">Home</a></li>
      <li><a href="#about" class="down">About</a></li>
      <li><a href="#skill" class="down">Skill</a></li>
      <li><a href="#service" class="down">Service</a></li>
      <li><a href="#contact" class="down">Contact</a></li>
    </ul>
</nav>

        <div class="typing">
            <img src="images/pic4.jpg">
            <div class="typing_wrap">
                <h1><span class="typed"></span></h1>
            </div>
            <div class="scroll">
                <span class="scrolltag"></span>
                <br>SCLOLL
            </div>
        </div>
        <!--ここまで-->
        <!--アバウト-->
    </header>
    <section id="about">
        <div class="aboutImg"></div>
        <div class="about_animation">
            <div class="about_scroll">
                <span class="about_span">
                    <span class="onecolor">H</span>ello!! <span class="onecolor">M</span>y name is <span class="onecolor">K</span>aisei.
                </span>
            </div>
        </div>
        <div class="about_wrap">
            <div class="title_all"><span class="onecolor_all">A</span>BOUT
            </div>

            <div class="about_content">
                <section class="section1 fade_off">
                    <div class="section1Wrap fade_off">
                        <p id="illust06"><img src="images/illust06.png" width="250" height="250" alt=""></p>
                        <p id="illust07"><img src="images/illust07.png" width="600" height="600" alt=""></p>
                        <h1>WEB制作・プログラミングを学ぶ、<br>
                            20歳の専門学生。</h1>
                        <div class="section1Flex">
                            <div class="flexLeft">
                                <span>
                                    大阪でWEB制作・プログラミング<br>を学習中の専門学生。将来の夢は、自分にスキルをつけて
                                    新しいものを作ったりクライアント様や自分の
                                    理想をデザインするクリエイティブなフロントエンドエンジニアになることです。

                                </span>
                            </div>
                            <div class="flexRight">
                                <img src="images/me.jpg">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="port">
            <p id="illust03"><img src="images/illust03.png" width="130" height="130" alt=""></p>
            <h1>MY PORTFOLIO LIST</h1>
          <div class="portSpan">  <span>クリックで公開ページに飛べます</span></div>
        </div>
        <div class="slideWrap">
            <ul class="bxslider">
               <li><a href="https://todo.kaisei-ader.com/">
                  <img alt="" src="img/todolist.jpg" class="todo"></a></li>
                <li><a href="https://kaisei-ader.com/">
                  <img alt="" src="img/portfolio.jpg" class="style2"></a></li>
                <li><a href="https://agario.kaisei-ader.com/">
                  <img alt="" src="img/agario.jpg" class="style2"></a></li>
                <li><a href="https://lp.kaisei-ader.com/">
                  <img alt="" src="img/lp.png"></a></li>
                <li><a href="https://isara.kaisei-ader.com/">
                  <img alt="" src="img/isara.jpg" class="style4"></a></li>
                <li><a href="https://hanshin.kaisei-ader.com/">
                  <img alt="" src="img/hanshin.jpg"></a></li>
                <li><a href="https://hanshin.kaisei-ader.com/">
                  <img alt="" src="img/hanshin1.jpg" class="style6"></a></li>
                <li><a href="https://hanshin.kaisei-ader.com/">
                  <img alt="" src="img/hanshin2.jpg"></a></li>
            </ul>
        </div>

        <div class="photo" class="down">
          <p id="illust05"><img src="images/illust05.png" width="400" height="400" alt=""></p>
            <h1>MY PHOTO</h1>
        </div>
        <div id="photo" class="photolist">
            <div class="card fade_off less">
                <img src="img/style1.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>信貴山朝護孫子寺</p>
                </div>
            </div>
            <div class="card fade_off">
                <img src="img/style2.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>嵐山 -竹林の小道- </p>
                </div>
            </div>
            <div class="card fade_off">
                <img src="img/style3.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>西宮マリナパークシティ</p>
                </div>
            </div>
            <div class="card fade_off">
                <img src="img/style4.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>二色の浜海水浴場</p>
                </div>
            </div>
            <div class="card fade_off less">
                <img src="img/style5.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>APOLO BILL</p>
                </div>
            </div>
            <div class="card fade_off less">
                <img src="img/style6.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>ニューヨーク</p>
                </div>
            </div>
            <div class="card fade_off">
                <img src="images/style12.jpg" class="style10">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>船場</p>
                </div>
            </div>
            <div class="card fade_off">
                <img src="images/style11.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>竹林の小道</p>
                </div>
            </div>
            <div class="card fade_off less">
                <img src="images/style13.jpg">
                <div class="mask1"></div>
                <div class="mask2"></div>
                <div class="caption">
                    <p>マリナパーク公園</p>
                </div>
            </div>
        </div>
</section>
        <!--ABOUTここまで-->
        <!--SKILL-->
        <section id="skill" class="down">
          <div class="skillTitle">
                    <div class="title_all fade_off"><span class="onecolor_all">S</span>KILL
                    </div>
                    </div>

                    <div class="skill_card">
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-html5 skillcolor"></i>
                            <h4>HTML5</h4>
                        </div>
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-css3-alt skillcolor"> </i>
                            <h4>CSS3</h4>
                        </div>
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-js-square skillcolor"></i>
                            <h4>JAVASCRIPT</h4>
                        </div>
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-wordpress skillcolor"></i>
                            <h4>WORDPRESS</h4>
                        </div>
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-github skillcolor"></i>
                            <h4>GIT-HUB</h4>
                        </div>
                        <div class="skill_card_list fade_off">
                            <i class="fab fa-adobe skillcolor"></i>
                            <h4>PHOTOSHOP</h4>
                        </div>
                    </div>
                </section>
        <section id="service">
            <div class="service_wrap">
                <div class="service_mask">
                    <div class="service_content">
                        <div class="title_all"><span class="onecolor_all">S</span>ERVICE
                        </div>
                        <div class="service_inner">
                            <div class="service_items">
                                <div class="service_item">
                                    <div class="service_logo">
                                        <i class="fas fa-code iii"></i>
                                    </div>
                                    <div class="service_title">ホームページ制作
                                    </div>
                                    <div class="service_text">
                                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                    </div>
                                </div>
                                <div class="service_item">
                                    <div class="service_logo">
                                        <i class="fas fa-laptop-code iii"></i>
                                    </div>
                                    <div class="service_title">コーディング
                                    </div>
                                    <div class="service_text">
                                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                    </div>
                                </div>
                                <div class="service_item">
                                    <div class="service_logo">
                                        <i class="fab fa-wordpress iii"></i>
                                    </div>
                                    <div class="service_title">CMS構築
                                    </div>
                                    <div class="service_text">
                                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                                    </div>
                                </div>
                            </div>
                            <div class="more_service">
                              <p id="illust09"><img src="images/pic9.png" width="200" height="200" alt=""></p>
                                <a href="#contact" class="moreBtn down">お問い合わせ ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--コンタクト-->
        <section id="contact">
          <div class="contact_wrap">
            <div class="title_all title_color">
                <span class="onecolor_contact">C</span>ONTACT
                </div>
              </div>
                <div class="fo-title">
                    <p>お見積もりや案件のご相談など、お気軽にお問い合わせください。<br>
                        原則1~3営業日以内に返信いたします。</p>
                    <div class="fo-line"></div>
                </div>
                <!--フォーム-->
                <form class="form_wrap" action="{{ route('contact') }}" method="post">
                    @csrf
                    <input type="text" placeholder="Name" name="name" required>

                    <input type="email" placeholder="Email" name="email" required>

                    <textarea placeholder="Message" name="message" required></textarea>
                    <div class="submit_button">
                        <input type="submit" value="Send" class="submit_fun">
                    </div>
                </form>
        </section>
        <!--フッター-->
        <section id="footer">
            <div class="footer_wrap">
                <div class="footer_in">
                    <a href="https://twitter.com/">
                        <i class="fab fa-twitter footer_i"></i>
                    </a>
                </div>
                <div class="footer_in">
                  <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f footer_i"></i>
                    </a>
                </div>
                <div class="footer_in">
                      <a href="https://github.com/kaisei-ader/">
                        <i class="fab fa-git footer_i"></i>
                    </a>
                </div>
            </div>
            <p><small>© Copyright | Kaisei.Portfolio 2020.</small></p>
        </section>
      </div>
    </body>
</html>
