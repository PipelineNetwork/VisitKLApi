<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/figma/styles/website_parts/deals.css">
    <title>Deals & Packages | VisitKL</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__container--img">
                <img src="/figma/src/logos/Visit-KL_Logo_1.png" alt="VisitKL logo"/>
            </div>
            <div class="nav__container">
                <div class="nav__container--wrapper">
                    <a class="nav__container--wrapper__link home" href="/">HOME</a>
                    <a class="nav__container--wrapper__link about" href="/">ABOUT US</a>
                    <a class="nav__container--wrapper__link todo" href="/">THINGS TO DO</a>
                    <a class="nav__container--wrapper__link products" href="/products">PRODUCTS & SERVICES</a>
                    <a class="nav__container--wrapper__link deals" href="/offers">DEALS & PACKAGES</a>
                    <a class="nav__container--wrapper__link gallery" href="/">GALLERY</a>
                    <a class="nav__container--wrapper__link on" href="/">WHAT'S ON</a>
                    <a class="nav__container--wrapper__link form" href="/eform">E-FORM</a>
                    <a class="nav__container--wrapper__link faq" href="/faqs">FAQ</a>
                </div>
                <div class="nav__container--wrapper">
                    <hr class="nav__container--wrapper__line"/>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="intro">
            <div class="intro__head">
                <img class="intro__head--title" src="/figma/src/logos/deals_packages_title.png" alt="deals and packages title"/>
            </div>
            <p class="intro__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consectetur eros. Vestibulum eget sollicitudin massa. Nulla facilisi. Nunc auctor lobortis dapibus. Vivamus risus massa, varius id enim non, blandit vestibulum risus. Suspendisse sit amet porttitor tellus. Pellentesque iaculis auctor mollis. Nam vestibulum quam consectetur, sollicitudin nunc eu, feugiat lacus. <br /><br />

                Fusce eu massa at mi pulvinar posuere. Pellentesque pharetra enim sit amet pretium varius. Curabitur posuere ex ut elit tempus, et commodo velit tincidunt. Etiam rhoncus ante sed lectus faucibus lobortis. Pellentesque consectetur fringilla ipsum ut mollis. Quisque viverra scelerisque nibh, at malesuada ex varius nec. Phasellus non bibendum leo, in aliquam mi.
            </p>

            <label class="intro__search">
                <input class="intro__search--input" type="text" placeholder="What Are You Looking For?" />
                <img class="intro__search--image" src="/figma/src/icons/search_black.svg" alt="search magnifying glass"/>
                <img class="intro__search--calendar" src="/figma/src/icons/calendar_cherry.png" alt="calendar"/>
            </label>
        </section>

        <section class="content">
            <h2 class="content__title">Hurry up, these are expiring soon!</h2>

            <div class="container">
                <img class="container__leftArrow" src="/figma/src/icons/arrow_left_inactive.svg" alt="left arrow"/>

                <div class="container__wrapper">

                    @foreach($products as $product)
                    <article class="container__card">
                        <img class="container__card--image" src="{{$product->}}" alt="Aquaria KLCC Tickets"/>
    
                        <div class="container__card--title">
                            <h3>Aquaria KLCC <br/>Tickets</h3>
                        </div>
    
                        <div class="container__card--location">
                            <img src="/figma/src/icons/location_cherry.svg" alt="location"/>
                            <p>Aquaria KLCC, Jalan Pinang, Kuala Lumpur City Centre, Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia</p>
                        </div>
    
                        <div class="container__card--info">
                            <h4>About this Deals & Packages</h4>
                            <p>See the world's most exotic water and land animals at Aquaria KLCC's 60,000-square-foot oceanarium consisting of 15 exhibits over eight areas <a href="https://www.pelago.co/en-MY/activity/phn49-aquaria-klcc-kuala-lumpur/?utm_source=google&utm_medium=cpc&utm_campaign=acq-gg-apac-my_-_my-my-en-kw-prod-activities-exact&utm_term=prod_aquaria-klcc&utm_content=aquaria%20klcc&gclid=Cj0KCQjwnP-ZBhDiARIsAH3FSRceH_VoRNEUaK28TOSZoQl5O9bruW4nWFp-lq05-GRZ5j0cYb63BaYaAgpSEALw_wcB" target="_blank" rel="noopener noreferrer">See more...</a> </p>
                        </div>
                    </article>
                    @endforeach


                    
                </div>

                <img class="container__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right">
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