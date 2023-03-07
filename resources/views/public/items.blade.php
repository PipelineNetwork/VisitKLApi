<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/figma/styles/gallery.css">
    <title>Gallery | VisitKL</title>
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
                    <a class="nav__container--wrapper__link about" href="/about">ABOUT US</a>
                    <a class="nav__container--wrapper__link todo" href="/experiences">THINGS TO DO</a>
                    <a class="nav__container--wrapper__link products" href="/products">PRODUCTS & SERVICES</a>
                    <a class="nav__container--wrapper__link deals" href="/offers">DEALS & PACKAGES</a>
                    <a class="nav__container--wrapper__link gallery" href="/gallery">GALLERY</a>
                    <a class="nav__container--wrapper__link on" href="/events">WHAT'S ON</a>
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
                <img class="intro__head--title" src="/figma/src/logos/gallery_page_title.png" alt="gallery title"/>
            </div>
            <p class="intro__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in consectetur eros. Vestibulum eget sollicitudin massa. Nulla facilisi. Nunc auctor lobortis dapibus. Vivamus risus massa, varius id enim non, blandit vestibulum risus. Suspendisse sit amet porttitor tellus. Pellentesque iaculis auctor mollis. Nam vestibulum quam consectetur, sollicitudin nunc eu, feugiat lacus.
            </p>
        </section>

        <section class="principal">

            <!-- Culture -->
            <div class="banner__image">
                <img src="/figma/src/images/culture_banner.png" alt="culture banner"/>
                <h2>Culture & Festival</h2>
                <div class="banner__image--background"></div>
            </div>

            <section class="banner">
                <img class="banner__leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left"/>
                <div class="banner__grid">    
                    @foreach($cultures as $culture)
                    <article class="banner__grid--card">
                        <img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$culture->image}}" alt="@borneomedia"/>
                        <div class="banner__grid--card__content">
                            <p>{{$culture->title}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                <img class="banner__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
            </section>
            
            <!-- Landmark -->
            <div class="banner__image">
                <img src="/figma/src/images/landmark_banner.png" alt="Landmark banner"/>
                <h2>Landmark</h2>
                <div class="banner__image--background"></div>
            </div>

            <section class="banner">
                <img class="banner__leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left"/>
                <div class="banner__grid">
                    @foreach($landmarks as $landmark)
                    <article class="banner__grid--card">
                        <img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$landmark->image}}" alt="@borneomedia"/>
                        <div class="banner__grid--card__content">
                            <p>{{$landmark->title}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                <img class="banner__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
            </section>

            <!-- Architecture -->
            <div class="banner__image">
                <img src="/figma/src/images/architecture_banner.png" alt="Architecture banner"/>
                <h2>Architecture</h2>
                <div class="banner__image--background"></div>
            </div>

            <section class="banner">
                <img class="banner__leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left"/>
                <div class="banner__grid">
                    @foreach($architectures as $architecture)
                    <article class="banner__grid--card">
                        <img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$architecture->image}}" alt="@borneomedia"/>
                        <div class="banner__grid--card__content">
                            <p>{{$architecture->title}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                <img class="banner__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
            </section>

            <!-- People -->
            <div class="banner__image">
                <img src="/figma/src/images/people_banner.png" alt="People banner"/>
                <h2>People</h2>
                <div class="banner__image--background"></div>
            </div>

            <section class="banner">
                <img class="banner__leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left"/>
                <div class="banner__grid">
                    @foreach($peoples as $people)
                    <article class="banner__grid--card">
                        <img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$people->image}}" alt="@borneomedia"/>
                        <div class="banner__grid--card__content">
                            <p>{{$people->title}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                <img class="banner__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
            </section>

            <!-- Skyscapes -->
            <div class="banner__image">
                <img src="/figma/src/images/skyscapes_banner.png" alt="Skyscapes banner"/>
                <h2>Skyscrapers</h2>
                <div class="banner__image--background"></div>
            </div>

            <section class="banner">
                <img class="banner__leftArrow" src="/figma/src/icons/arrow_left-active.svg" alt="arrow left"/>
                <div class="banner__grid">
                    @foreach($skyscrapers as $skyscraper)
                    <article class="banner__grid--card">
                        <img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$skyscraper->image}}" alt="@borneomedia"/>
                        <div class="banner__grid--card__content">
                            <p>{{$skyscraper->title}}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                <img class="banner__rightArrow" src="/figma/src/icons/arrow_right_active.svg" alt="arrow right"/>
            </section>
            {{-- <button class="upload__button">
                <a href="./gallery_form.html">Upload Your Memories Here</a>
            </button> --}}
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