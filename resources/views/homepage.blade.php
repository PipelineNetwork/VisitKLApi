<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/figma/styles/styles.css">
    <title>VisitKL</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__container--img">
                <img src="/figma/src/logos/VisitKL-Logo-Invert-1.png" alt="VisitKL inverted logo"/>
            </div>
            <div class="nav__container">
                <div class="nav__container--wrapper">
                    <a class="nav__container--wrapper__link home" href="/">HOME</a>
                    <a class="nav__container--wrapper__link about" href="/about">ABOUT US</a>
                    <a class="nav__container--wrapper__link todo" href="/">THINGS TO DO</a>
                    <a class="nav__container--wrapper__link products" href="/">PRODUCTS & SERVICES</a>
                    <a class="nav__container--wrapper__link deals" href="/">DEALS & PACKAGES</a>
                    <a class="nav__container--wrapper__link gallery" href="/">GALLERY</a>
                    <a class="nav__container--wrapper__link on" href="/">WHAT'S ON</a>
                    <a class="nav__container--wrapper__link form" href="/eform">E-FORM</a>
                    <a class="nav__container--wrapper__link faq" href="/faq">FAQ</a>
                </div>
                <div class="nav__container--wrapper">
                    <hr class="nav__container--wrapper__line"/>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero">
            <div class="hero__title">
                <h2>WELCOME TO</h2>
                <h1>KUALA LUMPUR</h1>
                <h2>A CITY OF CONTRASTS & DIVERSITY</h2>
            </div>
            <label class="hero__search">
                <input class="hero__search--input" type="text" placeholder="Explore Kuala Lumpur" />
                <img class="hero__search--image" src="/figma/src/icons/search_black.svg" alt="search magnifying glass"/>
            </label>
            <div class="hero__social">
                <a class="hero__social--icon" href="\">
                    <img src="/figma/src/icons/phone_grey.svg" alt="phone icon"/>
                </a>
                <a class="hero__social--icon" href="https://www.google.com/maps/place/Kuala+Lumpur+Tourism+Bureau/@3.1499764,101.6897373,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc49cce5fd715d:0x9e85ff0537de3875!8m2!3d3.1499764!4d101.691926?shorturl=1" target="_blank" rel="noopener noreferrer">
                    <img src="/figma/src/icons/location_grey.svg" alt="google maps icon"/>
                </a>
                <a class="hero__social--icon" href="mailto:enquiries@kltourismbureau.com.my">
                    <img src="/figma/src/icons/mail_grey.svg" alt="email icon"/>
                </a>
                <a class="hero__social--icon" href="https://www.youtube.com/channel/UCf3Hyh6WFpro28sHODsLPfQ?app=desktop" target="_blank" rel="noopener noreferrer">
                    <img src="/figma/src/icons/youtube_grey.svg" alt="youtube icon"/>
                </a>
                <a class="hero__social--icon" href="https://twitter.com/visitklofficial" target="_blank" rel="noopener noreferrer">
                    <img src="/figma/src/icons/twitter_grey.svg" alt="twitter icon"/>
                </a>
                <a class="hero__social--icon" href="https://www.instagram.com/visitklofficial/?hl=en" target="_blank" rel="noopener noreferrer">
                    <img src="/figma/src/icons/instagram_grey.svg" alt="instagram icon"/>
                </a>
                <a class="hero__social--icon" href="https://www.facebook.com/Visitklofficial" target="_blank" rel="noopener noreferrer">
                    <img src="/figma/src/icons/facebook_grey.svg" alt="facebook icon"/>
                </a>
            </div>
        </section>

        <section class="events">
            <article class="events__article">
                <img class="events__article--arrow" src="/figma/src/icons/arrow_left-active.svg" alt="left arrow"/>
                <div class="events__article--container">
                    <div class="events__article--container__text">
                        <p>Events from KLCH</p>
                    </div>
                    <img src="/figma/src/images/events_left_image.png"/>
                </div>
                <img class="events__article--arrow" src="/figma/src/icons/arrow_right_inactive.svg" alt="right arrow"/>
            </article>

            <div class="events__center">
                <img src="/figma/src/logos/events_title.png"/>
                <p class="events__center--text">Try new fun events in Kuala Lumpur.<br/>
                    An extraordinary experience, every time.
                </p>
            </div>

            <article class="events__article">
                <img class="events__article--arrow" src="/figma/src/icons/arrow_left_inactive.svg" alt="left arrow"/>
                <div class="events__article--container">
                    <div class="events__article--container__text">
                        <p>Events from Organizers</p>
                    </div>
                    <img src="/figma/src/images/events_right_image.png"/>
                </div>
                <img class="events__article--arrow" src="/figma/src/icons/arrow_right_active.svg" alt="right arrow"/>
            </article>
        </section>

        <section class="discover">
            <div class="discover__container">
                <div class="discover__container--bar"></div>
                <h2 class="discover__container--title">Discover The <br />Beauty of KL</h2>
            </div>
            <div class="discover__container">
                <p class="discover__container--text"><b>Selamat Datang ke Kuala Lumpur!</b> Discover the city of contrasts and diversity. A melting pot of cultures that provides visitors with a one-of-a-kind experience. Enjoy a vast number of must-see destinations and activities that have been gathered into the best attractions that will guide you in and around this exciting city.</p>
                <div class="discover__container--envolve">
                    <a class="discover__container--envolve__button" href="https://covid-19.moh.gov.my/faqsop/pelan-pemulihan-negara-sop-fasa-empat" target="_blank" rel="noopener noreferrer">See More</a>
                </div>
            </div>
        </section>

        <section class="multimedia">
            <section class="things">
                <img class="things__title" src="/figma/src/logos/best_things_title.png" alt="best things to do"/>
                <div class="things__choices">
                    <img class="things__choices--leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left">
                    <article class="things__choices--article">
                        <a href="/figma/pages/todo/travel.html">
                            <img class="things__choices--article__image" src="/figma/src/images/travel_circle.png" alt="travel"/>
                            <h3 class="things__choices--article__text">Travel in <br />Kuala Lumpur</h3>
                        </a>
                    </article>
                    <article class="things__choices--article">
                        <a href="/figma/pages/todo/accommodations.html">
                            <img class="things__choices--article__image" src="/figma/src/images/accommodations_circle.png" alt="Accommodations"/>
                            <h3 class="things__choices--article__text">Accommodations</h3>
                        </a>
                    </article>
                    <article class="things__choices--article">
                        <a href="/figma/pages/todo/food.html">
                            <img class="things__choices--article__image" src="/figma/src/images/food_circle.png" alt="food"/>
                            <h3 class="things__choices--article__text">Food & <br/>Entertainment</h3>
                        </a>
                    </article>
                    <article class="things__choices--article">
                        <a href="/figma/pages/todo/arts.html">
                            <img class="things__choices--article__image" src="/figma/src/images/arts_circle.png" alt="arts"/>
                            <h3 class="things__choices--article__text">Arts & <br/>Culture</h3>
                        </a>
                    </article>
                    <article class="things__choices--article">
                        <a href="/figma/pages/todo/places.html">
                            <img class="things__choices--article__image" src="/figma/src/images/places_circle.png" alt="places"/>
                            <h3 class="things__choices--article__text">Places To go</h3>
                        </a>
                       
                    </article>
                    <img class="things__choices--rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right">
                </div>
            </section>

            <section class="history">
                <div class="history__title">
                    <img src="/figma/src/logos/history_title.png" src="best things of Kuala Lumpur"/>
                    <p class="history__title--text">Let the cultures of the past rejuvenate you.</p>
                </div>
                <div class="history__carousel">
                    <a class="history__carousel--item" href="/figma/pages/history/medan_pasar.html">
                        <img class="history__carousel--item__image" src="/figma/src/images/medan_pasar.png" alt="Medan Pasar"/>
                        <p class="history__carousel--item__number">01</p>
                        <div class="history__carousel--item__overlay">
                            <h4>MEDAN PASAR</h4>
                            <p>1950</p>
                        </div>
                    </a>
                    <a class="history__carousel--item" href="/figma/pages/history/jalan_chow_kit.html">
                        <img class="history__carousel--item__image" src="/figma/src/images/jalan_chow_kit.png" alt="Jalan Chow Kit"/>
                        <p class="history__carousel--item__number">01</p>
                        <div class="history__carousel--item__overlay">
                            <h4>JALAN CHOW KIT</h4>
                            <p>1970</p>
                        </div>
                    </a>
                    <a class="history__carousel--item" href="/figma/pages/history/jalan_sultan_ismail.html">
                        <img class="history__carousel--item__image" src="/figma/src/images/jalan_sultan_ismail.png" alt="Jalan Sultan Ismail"/>
                        <p class="history__carousel--item__number">01</p>
                        <div class="history__carousel--item__overlay">
                            <h4>JALAN SULTAN ISMAIL</h4>
                            <p>1970</p>
                        </div>
                    </a>
                    <a class="history__carousel--item" href="/figma/pages/history/royal_selangor_club.html">
                        <img class="history__carousel--item__image" src="/figma/src/images/royal_selangor_club.png" alt="Royal Selangor Club"/>
                        <p class="history__carousel--item__number">01</p>
                        <div class="history__carousel--item__overlay">
                            <h4>ROYAL SELANGOR CLUB</h4>
                            <p>1970</p>
                        </div>
                    </a>
                    <img class="history__carousel--arrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
                </div>
            </section>

            <section class="pictures">
                <div class="pictures__title">
                    <img src="/figma/src/logos/gallery_logo.png" src="best things of Kuala Lumpur"/>
                    <p class="pictures__title--text">Capturing the beat of the moment.</p>
                </div>
                <div class="pictures__carousel">
                    <img class="pictures__carousel--leftArrow" src="/figma/src/icons/arrow_left_inactive.svg" alt="arrow left">
                    <div class="pictures__carousel--grid">
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/petaling_street.png" alt="Petaling Street"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>PETALING STREET</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/stesen_keretapi.png" alt="Stesen Keretapi"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>STESEN KERETAPI</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/bukit_bintang.png" alt="Bukit Bintang"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>BUKIT BINTANG</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/thean_hou_temple.png" alt="Thean Hou Temple"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>Thean Hou Temple</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/little_india.png" alt="Little India"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>LITTLE INDIA</h4>
                                <p>Brickfield</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/central_market.png" alt="Central Market"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>CENTRAL MARKET</h4>
                                <p>Pasar Seni</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/pavilion.png" alt="Pavilion"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>PAVILION</h4>
                                <p>Bukit Bintang</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/kllc.png" alt="KLLC"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>KLCC</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/jalan_sultan.png" alt="Jalan Sultan"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>JALAN SULTAN</h4>
                                <p>Kuala Lumpur</p>
                            </div>
                        </article>
                        <article class="pictures__carousel--item">
                            <img class="pictures__carousel--item__image" src="/figma/src/images/pintasan_saloma.png" alt="Pintasan Saloma"/>
                            <div class="pictures__carousel--item__overlay">
                                <h4>PINTASAN SALOMA</h4>
                                <p>Kg Baru</p>
                            </div>
                        </article>
                    </div>
                    <img class="pictures__carousel--rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right">
                </div>
            </section>

            <section class="video">
                <div class="video__container">
                    <img class="video__container--image" src="/figma/src/images/video_background.png" alt="video background"/>
                    <img class="video__container--title" src="/figma/src/logos/video_title.png" alt="video title"/>
                    <img class="video__container--play" src="/figma/src/icons/video_play_button.png" alt="video play button"/>
                </div>
            </section>

            <section class="stories">
                <div class="stories__title">
                    <img src="/figma/src/logos/stories_title.png" src="best things of Kuala Lumpur"/>
                    <p class="stories__title--text">The inside story of your daily doses of entertainment.</p>
                </div>
                <div class="stories__carousel">
                    <img class="stories__carousel--leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left">
                    <div class="stories__carousel--wrapper">
                        <article class="stories__carousel--wrapper__item">
                            <img src="/figma/src/images/stories_1.png" alt="stories item"/>
                        </article>
                        <article class="stories__carousel--wrapper__item">
                            <img src="/figma/src/images/stories_2.png" alt="stories item"/>
                        </article>
                        <article class="stories__carousel--wrapper__item">
                            <img src="/figma/src/images/stories_3.png" alt="stories item"/>
                        </article>
                        <article class="stories__carousel--wrapper__item">
                            <img src="/figma/src/images/stories_4.png" alt="stories item"/>
                        </article>
                        <article class="stories__carousel--wrapper__item">
                            <img src="/figma/src/images/stories_5.png" alt="stories item"/>
                        </article>
                    </div>
                    <img class="stories__carousel--rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right">
                </div>
            </section>

            <section class="safety">
                <div class="safety__image">
                    <img src="/figma/src/images/safety_preacutions.png" alt="safety preacutions"/>
                </div>
                <div class="safety__content">
                    <h2 class="safety__content--title">Safety <br/> Precautions</h2>
                    <p class="safety__content--text">In conjuction of Covid-19 disease in Malaysia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum ullamcorper leo ac porttitor. Phasellus suscipit faucibus faucibus. Sed magna nibh, venenatis quis porttitor a, iaculis id ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    <a class="safety__content--button" href="https://covid-19.moh.gov.my/faqsop/pelan-pemulihan-negara-sop-fasa-empat" target="_blank" rel="noopener noreferrer">See More</a>
                </div>
            </section>

            <section class="what">
                <img class="what__title" src="/figma/src/logos/whats_on_title.png" alt="what's on title"/>
                <div class="what__container">
                    <article class="what__container--article">
                        <div class="what__container--article__left">
                            <p class="what__container--article__left--number">26</p>
                            <p class="what__container--article__left--text">May</p>
                        </div>
                        <img class="what__container--article__image" src="/figma/src/images/whatson_1.png" alt="what's on image'"/>
                        <div class="what__container--article__right">
                            <h4 class="what__container--article__right--title">"Seri MRANTI Aidilfitri" - Raya Open House & <br/>Open Day 2022</h4>
                            <p class="what__container--article__right--text">"Seri MRANTI Aidilfitri" - Raya Open House and Open Day 2022</p>
                        </div>
                    </article>
                    <article class="what__container--article">
                        <div class="what__container--article__left">
                            <p class="what__container--article__left--number">29</p>
                            <p class="what__container--article__left--text">May</p>
                        </div>
                        <img class="what__container--article__image" src="/figma/src/images/whatson_2.png" alt="what's on image'"/>
                        <div class="what__container--article__right">
                            <h4 class="what__container--article__right--title">Run For Wilayah 2022</h4>
                            <p class="what__container--article__right--text">Run For Wilayah 2022 is coming back with a physical event!</p>
                        </div>
                    </article>
                    <article class="what__container--article last-item">
                        <div class="what__container--article__left">
                            <p class="what__container--article__left--number">29</p>
                            <p class="what__container--article__left--text">May</p>
                        </div>
                        <img class="what__container--article__image" src="/figma/src/images/whatson_3.png" alt="what's on image'"/>
                        <div class="what__container--article__right">
                            <h4 class="what__container--article__right--title">Sunday Sip & Paint : Me & My Cat</h4>
                            <p class="what__container--article__right--text">SIP, PAINT, HAVE FUN! Absolutely NO painting experience needed! <br/>We'll guide you throughout the process!</p>
                        </div>
                    </article>
                    <div class="what__container--arrows">
                        <img class="what__container--arrows__left" src="/figma/src/icons/arrow_left_inactive.svg" alt="left arrow"/>
                        <img class="what__container--arrows__right" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right">
                    </div>
                </div>
            </section>

            <section class="links">
                <div class="links__title">
                    <h2 class="links__title--text">Quick Links</h2>
                    <hr class="links__title--line"/>
                </div>
                <div class="links__container">
                    <a class="links__container--item" href="https://www.kwp.gov.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_1.png" alt="kwp"/>
                    </a>
                    <a class="links__container--item" href="https://www.motac.gov.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_2.png" alt="motac"/>
                    </a>
                    <a class="links__container--item" href="https://www.dbkl.gov.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_3.png" alt="dbkl"/>
                    </a>
                    <a class="links__container--item" href="https://www.malaysia.travel/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_4.png" alt="tourism malaysia"/>
                    </a>
                    <a class="links__container--item" href="https://www.matic.gov.my/en/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_5.png" alt="malaysia turism center"/>
                    </a>
                    <a class="links__container--item" href="https://www.mm2h.com/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_6.png" alt="malaysia my second home"/>
                    </a>
                    <a class="links__container--item" href="https://asean.org/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_7.png" alt="southeast asia"/>
                    </a>
                    <a class="links__container--item" href="https://www.matrade.gov.my/en/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_8.png" alt="matrade"/>
                    </a>
                    <a class="links__container--item" href="https://www.malaysiaairports.com.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_9.png" alt="malaysia airports"/>
                    </a>
                    <a class="links__container--item" href="https://www.malaysiaairports.com.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_10.png" alt="klia next gen hub"/>
                    </a>
                    <a class="links__container--item" href="https://www.matta.org.my/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_11.png" alt="matta"/>
                    </a>
                    <a class="links__container--item" href="https://www.artgallery.gov.my/en/homepage/" target="_blank" rel="noopener noreferrer">
                        <img src="/figma/src/logos/link_12.png" alt="balai seni lukis negara"/>
                    </a>
                </div>
            </section>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="footer__containerLeft">
            <p class="footer__containerLeft--textLeft">Copyright      
                <img class="footer__containerLeft--image" src="/figma/src/icons/copyright_white.svg" alt="copyright icon"/> 2022 <br/>
                All Right Reserved - <a href="https://www.tourism.gov.my/" target="_blank" rel="noopener noreferrer">Tourism Unit, Kuala Lumpur City Hall</a>
            </p>
        </div>
        <div class="footer__containerRight">
            <p class="footer__containerRight--textRight">Total Visitor : 9999999 <br/>
                Best viewd in Google Chrome with 1280 x 720 resolution
            </p>
        </div>
    </footer>
</body>
</html>