
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FX NEWS TRADER &#8211; Forex News &amp; Volatility EA</title>
    <link rel='dns-prefetch' href='https://fonts.googleapis.com' />
    <link rel='dns-prefetch' href='https://s.w.org' />
    <link rel='stylesheet' id='bxslider-css'  href='{{ url('assets') }}/css/jquery.bxslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href='{{ url('assets') }}/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{ url('assets') }}/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href='{{ url('assets') }}/css/owl.carousel.css' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-theme-css'  href='{{ url('assets') }}/css/owl.theme.css' type='text/css' media='all' />
    <link rel='stylesheet' id='nivo-lightbox-css'  href='{{ url('assets') }}/css/nivo-lightbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'  href='{{ url('assets') }}/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' id='total-style-css'  href='{{ url('assets') }}/css/style.css' type='text/css' media='all' />
    <style id='total-style-inline-css' type='text/css'>
        button,input[type='button'],input[type='reset'],input[type='submit'],.widget-area .widget-title:after,h3#reply-title:after,h3.comments-title:after,.nav-previous a,.nav-next a,.pagination .page-numbers,.ht-main-navigation li:hover > a,.page-template-home-template .ht-main-navigation li:hover > a,.home.blog .ht-main-navigation li:hover > a,.ht-main-navigation .current_page_item > a,.ht-main-navigation .current-menu-item > a,.ht-main-navigation .current_page_ancestor > a,.page-template-home-template .ht-main-navigation .current > a,.home.blog .ht-main-navigation .current > a,.ht-slide-cap-title span,.ht-progress-bar-length,#ht-featured-post-section,.ht-featured-icon,.ht-service-post-wrap:after,.ht-service-icon,.ht-team-social-id a,.ht-counter:after,.ht-counter:before,.ht-testimonial-wrap .bx-wrapper .bx-controls-direction a,.ht-blog-read-more a,.ht-cta-buttons a.ht-cta-button1,.ht-cta-buttons a.ht-cta-button2:hover,#ht-back-top:hover,.entry-readmore a,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce ul.products li.product:hover .button,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce nav.woocommerce-pagination ul li a,.woocommerce nav.woocommerce-pagination ul li span,.woocommerce span.onsale,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce #respond input#submit:disabled[disabled],.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce a.button:disabled[disabled],.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce button.button:disabled[disabled],.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce input.button:disabled[disabled],.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce-MyAccount-navigation-link a
        {background:#FFC107;}
        a,a:hover,.ht-post-info .entry-date span.ht-day,.entry-categories .fa,.widget-area a:hover,.comment-list a:hover,.no-comments,.ht-site-title a,.woocommerce .woocommerce-breadcrumb a:hover,#total-breadcrumbs a:hover,.ht-featured-link a,.ht-portfolio-cat-name-list .fa,.ht-portfolio-cat-name:hover,.ht-portfolio-cat-name.active,.ht-portfolio-caption a,.ht-team-detail,.ht-counter-icon,.woocommerce ul.products li.product .price,.woocommerce div.product p.price,.woocommerce div.product span.price,.woocommerce .product_meta a:hover,.woocommerce-error:before,.woocommerce-info:before,.woocommerce-message:before{color:#FFC107;}
        .ht-main-navigation ul ul,.ht-featured-link a,.ht-counter,.ht-testimonial-wrap .bx-wrapper img,.ht-blog-post,#ht-colophon,.woocommerce ul.products li.product:hover,.woocommerce-page ul.products li.product:hover,.woocommerce #respond input#submit,.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,.woocommerce ul.products li.product:hover .button,.woocommerce #respond input#submit.alt,.woocommerce a.button.alt,.woocommerce button.button.alt,.woocommerce input.button.alt,.woocommerce div.product .woocommerce-tabs ul.tabs,.woocommerce #respond input#submit.alt.disabled,.woocommerce #respond input#submit.alt.disabled:hover,.woocommerce #respond input#submit.alt:disabled,.woocommerce #respond input#submit.alt:disabled:hover,.woocommerce #respond input#submit.alt:disabled[disabled],.woocommerce #respond input#submit.alt:disabled[disabled]:hover,.woocommerce a.button.alt.disabled,.woocommerce a.button.alt.disabled:hover,.woocommerce a.button.alt:disabled,.woocommerce a.button.alt:disabled:hover,.woocommerce a.button.alt:disabled[disabled],.woocommerce a.button.alt:disabled[disabled]:hover,.woocommerce button.button.alt.disabled,.woocommerce button.button.alt.disabled:hover,.woocommerce button.button.alt:disabled,.woocommerce button.button.alt:disabled:hover,.woocommerce button.button.alt:disabled[disabled],.woocommerce button.button.alt:disabled[disabled]:hover,.woocommerce input.button.alt.disabled,.woocommerce input.button.alt.disabled:hover,.woocommerce input.button.alt:disabled,.woocommerce input.button.alt:disabled:hover,.woocommerce input.button.alt:disabled[disabled],.woocommerce input.button.alt:disabled[disabled]:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-handle
        {border-color:#FFC107;}
        #ht-masthead,.woocommerce-error,.woocommerce-info,.woocommerce-message{
            border-top-color:#FFC107;}
        .nav-next a:after{
            border-left-color:#FFC107;}
        .nav-previous a:after{
            border-right-color:#FFC107;}
        .ht-active .ht-service-icon{box-shadow:0px 0px 0px 2px #FFF,0px 0px 0px 4px #FFC107;}
        .woocommerce ul.products li.product .onsale:after{border-color:transparent transparent #e6ae06 #e6ae06;}
        .woocommerce span.onsale:after{border-color:transparent #e6ae06 #e6ae06 transparent}
        .ht-portfolio-caption,.ht-team-member-excerpt,.ht-title-wrap{background:rgba(255,193,7,0.9)}
        @media screen and (max-width:1000px){
            .toggle-bar,.ht-main-navigation .ht-menu{background:#FFC107}}
    </style>
    <link rel='stylesheet' id='total-fonts-css'  href='//fonts.googleapis.com/css?family=Pontano+Sans|Oswald:400,700,300&#038;subset=latin,latin-ext' type='text/css' media='all' />
    <script type='text/javascript' src='{{ url('assets') }}/js/SmoothScroll.js'></script>
    <script type='text/javascript' src='{{ url('assets') }}/js/jquery.js'></script>
    <script type='text/javascript' src='{{ url('assets') }}/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='{{ url('assets') }}/js/imagesloaded.min.js'></script>
    <script type='text/javascript' src='{{ url('assets') }}/js/jquery.stellar.js'></script>
    <meta name="generator" content="WordPress 6.6.6" />
    <link rel="canonical" href="{{ url('assets') }}" />
    <link rel='shortlink' href='{{ url('assets') }}' />
    <style>.ht-service-left-bg{ background-image:url();}#ht-counter-section{ background-image:url();}#ht-cta-section{ background-image:url();}</style><link rel="icon" href="//forexnt999.com/wp-content/uploads/2017/06/cropped-cropped-nwstrader999-1-192x192-32x32.png" sizes="32x32" />
    <link rel="icon" href="//forexnt999.com/wp-content/uploads/2017/06/cropped-cropped-nwstrader999-1-192x192-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="//forexnt999.com/wp-content/uploads/2017/06/cropped-cropped-nwstrader999-1-192x192-180x180.png" />
    <meta name="msapplication-TileImage" content="//forexnt999.com/wp-content/uploads/2017/06/cropped-cropped-nwstrader999-1-192x192-270x270.png" />
    <style type="text/css" id="wp-custom-css">
        /*
You can add your own CSS here.

Click the help icon above to learn more.
*/
        .ht-main-header { display: none; }		</style>
</head>

<body class="home page-template-default page page-id-4 ht_right_sidebar ht-sticky-header columns-3">
<div id="ht-page">
    <header id="ht-masthead" class="ht-site-header">
        <div class="ht-container ht-clearfix">
            <div id="ht-site-branding">
                <h1 class="ht-site-title"><a href="//forexnt999.com/" rel="home">FX NEWS TRADER</a></h1>
                <p class="ht-site-description"><a href="//forexnt999.com/" rel="home">Forex News &amp; Volatility EA</a></p>
            </div><!-- .site-branding -->

            <nav id="ht-site-navigation" class="ht-main-navigation">
                <div class="toggle-bar"><span></span></div>
                <div class="ht-menu ht-clearfix"><ul id="menu-menu-1" class="ht-clearfix"><li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-32"><a target="_blank" href="//forexnt999.com/">HOME</a></li>
                        <li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a target="_blank" href="//forexnt999.com/method/">METHOD</a></li>
                        <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a target="_blank" href="//forexnt999.com/brokers/">BROKERS</a></li>
                        <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a target="_blank" href="//forexnt999.com/faqs/">FAQs</a></li>
                        <li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a target="_blank" href="//forexnt999.com/priceandpayment/">PRICE &#038; PAYMENT</a></li>
                        <li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-41"><a href="#">MORE</a>
                            <ul  class="sub-menu">
                                <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a target="_blank" href="//forexnt999.com/account-management/">ACCOUNT MANAGEMENT</a></li>
                                <li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a target="_blank" href="//forexnt999.com/disclaimer/">DISCLAIMER</a></li>
                            </ul>
                        </li>
                    </ul></div>			</nav><!-- #ht-site-navigation -->
        </div>
    </header><!-- #ht-masthead -->

    <div id="ht-content" class="ht-site-content ht-clearfix">
        <header class="ht-main-header">
            <div class="ht-container">
                <h1 class="ht-main-title">HOME</h1>		<div id="total-breadcrumbs" xmlns:v="//rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="//forexnt999.com/">Home</a></span> &#47; <span class="current">HOME</span></div>	</div>
        </header><!-- .entry-header -->

        <div class="ht-container">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">



                    <article id="post-4" class="post-4 page type-page status-publish hentry">

                        <div class="entry-content">
                            <p><a href="//forexnt999.com/wp-content/uploads/2017/01/yt.png">  </a><a href="//forexnt999.com/tradingresults" target="_blank" rel="noopener"><img class="alignnone wp-image-134 size-full" src="//newstrader999.com/wp-content/uploads/2017/01/tr.png" alt="" width="240" height="75" /></a><a href="//newstrader999.com/wp-content/uploads/2017/01/yt.png">        </a><a href="//www.myfxbook.com/members/fxnt999_" target="_blank" rel="noopener"><img class="alignnone wp-image-133 size-full" src="//newstrader999.com/wp-content/uploads/2017/01/mfb.png" alt="" width="240" height="75" /></a><a href="//newstrader999.com/wp-content/uploads/2017/01/yt.png">        </a><a href="//www.youtube.com/channel/UC1DTbLh5dYpJn65qDY0SuNg" target="_blank" rel="noopener"><img class="alignnone wp-image-170 size-full" src="//newstrader999.com/wp-content/uploads/2017/01/yt-1.png" width="240" height="75" /></a></p>
                            <h5 style="text-align: center;"></h5>
                            <p>&nbsp;</p>
                            <h5 style="text-align: center;"><b>CHECK OUT ONE OF OUR ACCOUNTS TRADED BY FX NEWS TRADER!</b></h5>
                            <table border="1" align="center">
                                <tbody>
                                <tr bgcolor="#FFC107">
                                    <td align="center" width="200">
                                        <h4><span style="color: #000000;">BROKER</span></h4>
                                    </td>
                                    <td align="center" width="200">
                                        <h4><span style="color: #000000;">LOGIN</span></h4>
                                    </td>
                                    <td align="center" width="200">
                                        <h4><span style="color: #000000;">PASSWORD</span></h4>
                                    </td>
                                    <td align="center" width="230">
                                        <h4><span style="color: #000000;">SERVER</span></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" width="200">
                                        <h4><span style="text-decoration: underline;"><span style="color: #0000ff;"><a style="color: #0000ff; text-decoration: underline;" href="//www.fxgiants.com.bm/en/register?utm_source=18021212&amp;utm_medium=ib_link&amp;utm_campaign=IB">FX GIANTS</a></span></span></h4>
                                    </td>
                                    <td align="center" width="200"><strong>800007</strong></td>
                                    <td align="center" width="200"><strong>fxnt999</strong></td>
                                    <td align="center" width="230"><strong>103.23.168.58</strong></td>
                                </tr>
                                <tr>
                                    <td align="center" width="200">
                                        <h4><a href="//www.ironfx.com.bm/en/register?utm_source=13027717&amp;utm_medium=ib_link&amp;utm_campaign=IB"><span style="text-decoration: underline;"><span style="color: #0000ff; text-decoration: underline;">IRON FX</span></span></a></h4>
                                    </td>
                                    <td align="center" width="200"><strong>2668821</strong></td>
                                    <td align="center" width="200"><strong>fxnt999</strong></td>
                                    <td align="center" width="230"><strong>88.85.85.12</strong></td>
                                </tr>
                                <tr>
                                    <td align="center" width="200">
                                        <h4><a href="//superforex.com/?X=ABRQ"><span style="text-decoration: underline; color: #0000ff;">SUPER FOREX</span></a></h4>
                                    </td>
                                    <td align="center" width="200"><strong>86563</strong></td>
                                    <td align="center" width="200"><strong>fxnt999</strong></td>
                                    <td align="center" width="230"><strong>46.4.13.133</strong></td>
                                </tr>
                                </tbody>
                            </table>
                            <hr />
                            <h5></h5>
                            <p>&nbsp;</p>
                            <h5><b>WHAT ARE THE MOST COMMON TRADING SYSTEMS?</b></h5>
                            <p><span style="font-weight: 400;">Here are the main trading systems people use nowadays:</span></p>
                            <h6><b>TREND TRADING</b><span style="font-weight: 400;"> (= SWING TRADING)</span></h6>
                            <ul>
                                <li><span style="font-weight: 400;">Most popular among beginner traders</span></li>
                                <li><span style="font-weight: 400;">Based on 2-4 indicators (Moving Average, RSI, SAR, Stochastics, etc.)</span></li>
                                <li><span style="font-weight: 400;">Time Frames: 4H to 1W (1D being the most common)</span></li>
                            </ul>
                            <h6><b>SCALPING</b><span style="font-weight: 400;"> (= DAY TRADING) &#8211; SIMILAR METHOD AS TREND TRADING, JUST EXECUTED MUCH FASTER ON SMALLER TIME FRAMES</span></h6>
                            <ul>
                                <li><span style="font-weight: 400;">Most popular among advanced traders</span></li>
                                <li><span style="font-weight: 400;">Also based on 2-4 indicators like in Trend Trading</span></li>
                                <li><span style="font-weight: 400;">Time Frames: 1M to 15M (5M being the most common)</span></li>
                            </ul>
                            <h6><b>NEWS TRADING</b></h6>
                            <ul>
                                <li><span style="font-weight: 400;">Very profitable with a proper strategy</span></li>
                                <li><span style="font-weight: 400;">Doesn’t use typical indicators except for FFCal (“Forex Factory Calendar” Indicator)</span></li>
                                <li><span style="font-weight: 400;">Doesn’t use Time Frames either</span></li>
                            </ul>
                            <h6><b>OPPORTUNITY TRADING</b></h6>
                            <ul>
                                <li><span style="font-weight: 400;">For example big weekend gaps, reversals after important news or big candles, etc.</span></li>
                                <li><span style="font-weight: 400;">Those are very rare “opportunities” (once a week or once a month) and still the outcome is not sure and the probability of winning is around 60-70% (which is good, but trades are very rare).</span></li>
                                <li><span style="font-weight: 400;">No Indicators and no Time Frames are used.</span></li>
                                <li><span style="font-weight: 400;">It’s a very rare way of trading used only by very few traders.</span></li>
                            </ul>
                            <h6><b>MARTINGALE</b></h6>
                            <ul>
                                <li><span style="font-weight: 400;">Generally a losing strategy due to doubling the stake each time it loses</span></li>
                                <li><span style="font-weight: 400;">After losing usually 5-7 times in a row (which happens very often) the whole capital is wiped out.</span></li>
                            </ul>
                            <h6><b>ARBITRAGE</b></h6>
                            <ul>
                                <li><span style="font-weight: 400;">Very profitable, but disallowed by most brokers.</span></li>
                                <li><span style="font-weight: 400;">However, big banks and brokerage houses use it themselves to make profits by comparing prices from different sources, they just don’t want the “small guys” win like them.</span></li>
                                <li>And some other systems that in general are similar to one of the above or combinations thereof.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><span style="font-weight: 400;">Among others </span><span style="font-weight: 400;"><u>the main reason most traders lose</u></span><span style="font-weight: 400;"> no matter which system they use is the following:</span></p>
                            <p><b>The price movements are in fact unpredictable</b><span style="font-weight: 400;"> both short and long term.</span></p>
                            <p>&nbsp;</p>
                            <p><b><u>The chances</u></b><span style="font-weight: 400;"> of winning when you buy or sell </span><b><u>are less than 50%</u> </b><span style="font-weight: 400;">(since you pay the spread or commission each time).</span></p>
                            <p><span style="font-weight: 400;">This is a mathematical fact and no matter what you were told by various Forex gurus, what you think or what kind of experience you have, you cannot change this ratio no matter how many years you trade, how many indicators you use, or how smart you are.</span></p>
                            <p><span style="font-weight: 400;">50% or less! That’s a mathematical probability of a trade to be closed with a profit.</span></p>
                            <p><span style="font-weight: 400;">It’s similar to flipping a coin, but here your chances are 50/50, no less, no more.</span></p>
                            <p><span style="font-weight: 400;">No matter how hard you try the statistical chances are always 50/50.</span></p>
                            <p><span style="font-weight: 400;">In Forex it was less than 50/50, remember?</span></p>
                            <p><span style="font-weight: 400;">I don’t say Forex trading is same as flipping a coin or your chances to win are less or equal 50%, quite opposite.</span></p>
                            <p><span style="font-weight: 400;">You have no influence to increase your chances when you flip a coin, but when you trade Forex you can increase your chances of winning to 70-80% or even more using a good system or EA, educating yourself, etc.</span></p>
                            <p><u><b>Statistical chances are 50%</b><span style="font-weight: 400;"> but your </span><b>real chances</b><span style="font-weight: 400;"> can be and should be much higher!</span></u></p>
                            <p><span style="font-weight: 400;">But let’s say </span><b>75% is an ideal winning ratio to become a successful trader</b><span style="font-weight: 400;">.</span></p>
                            <p>&nbsp;</p>
                            <p><span style="font-weight: 400;">Go to the “</span><a href="//forexnt999.com/method/" target="_blank" rel="noopener"><b>METHOD</b></a><span style="font-weight: 400;">” page to find out how our FX NEWS TRADER works exactly.</span></p>
                            <p><span style="font-weight: 400;">It’s simple, but very powerful and you can check results when you login to an account or see </span><a href="//www.myfxbook.com/members/fxnt999_" target="_blank" rel="noopener"><b>MYFXBOOK</b></a><span style="font-weight: 400;"> results.</span></p>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-## -->




                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="secondary" class="widget-area">
                <aside id="text-3" class="widget widget_text">
                    <h4 class="widget-title">CONTACT US</h4>
                    <div class="textwidget"><h6>Email:</h6>
                        <p><a href="mailto:info@forexnt999.com">info@forexnt999.com</a></p>
                        <h6>Skype:</h6>
                        <p><a href="skype:info@forexnt999.com?chat">info@forexnt999.com</a></p>
                    </div>
                </aside>
                <aside id="text-2" class="widget widget_text">
                    <div class="textwidget">
                        <p>
                            <a href="http://superforex.com/"><img class="alignnone" src="http://superforex.com/Content/Imgs/gallery_images/bnrs/bonuses/friends_and_family_invitation_bonus_banner_250x250z.png" alt="" width="250" height="250" /></a>
                        </p>
                    </div>
                </aside>
            </div><!-- #secondary -->
        </div>


    </div><!-- #content -->

    <footer id="ht-colophon" class="ht-site-footer">

        <div id="ht-bottom-footer">
            <div class="ht-container">
                <div class="ht-site-info">
                    &copy; FOREX NT 999
                </div><!-- #site-info -->
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<div id="ht-back-top" class="ht-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
<script type='text/javascript' src='{{ url('assets') }}/js/jquery.nav.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/jquery.bxslider.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/owl.carousel.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/isotope.pkgd.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/nivo-lightbox.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/superfish.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/wow.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/odometer.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/waypoint.js'></script>
<script type='text/javascript' src='{{ url('assets') }}/js/total-custom.js'></script>

</body>
</html>
