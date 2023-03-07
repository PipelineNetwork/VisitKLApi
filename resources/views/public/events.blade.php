<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/whats-on.css">
    <title>What's On | VisitKL</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__container--img">
                <img src="../src/logos/Visit-KL_Logo_1.png" alt="VisitKL logo"/>
            </div>
            <div class="nav__container">
                <div class="nav__container--wrapper">
                    <a class="nav__container--wrapper__link home" href="../index.html">HOME</a>
                    <a class="nav__container--wrapper__link about" href="./about.html">ABOUT US</a>
                    <a class="nav__container--wrapper__link todo" href="./todo/places.html">THINGS TO DO</a>
                    <a class="nav__container--wrapper__link products" href="./products.html">PRODUCTS & SERVICES</a>
                    <a class="nav__container--wrapper__link deals" href="./deals.html">DEALS & PACKAGES</a>
                    <a class="nav__container--wrapper__link gallery" href="./gallery.html">GALLERY</a>
                    <a class="nav__container--wrapper__link on" href="./whats-on.html">WHAT'S ON</a>
                    <a class="nav__container--wrapper__link form" href="./e-form.html">E-FORM</a>
                    <a class="nav__container--wrapper__link faq" href="./faq.html">FAQ</a>
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
                <img class="intro__head--title" src="../src/logos/whats_on_title2.png" alt="whats on title"/>
            </div>
            <p class="intro__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi molestie maximus tellus ut laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam erat volutpat. Nullam lobortis dui sed ligula auctor laoreet. Morbi ullamcorper purus at mauris rutrum vehicula.
            </p>
        </section>

        <section class="ipad">
            <div class="ipad__head">
                <div class="ipad__head--left">
                    <img src="../src/icons/arrow_left_inactive.svg" alt="arrow left"/>
                    <p>March 2023</p>
                    <img src="../src/icons/arrow_right_active.svg" alt="arrow right"/>
                </div>
                <h3 class="ipad__head--middle">Calendar of Events in Kuala Lumpur</h3>
                <div class="ipad__head--right">
                    <img src="../src/icons/filter_red-cherry.svg" alt="filter icon"/>
                    <select name="filter-list" id="filter-list">
                        <option value="filter">Select Filter</option>
                    </select> 
                </div>
            </div>
            <div class="ipad__grid">
                <!-- Week 1 -->
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SUN</p>
                    <p class="ipad__grid--item__number--weekend">26</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">MON</p>
                    <p class="ipad__grid--item__number">27</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">TUE</p>
                    <p class="ipad__grid--item__number">28</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">WED</p>
                    <p class="ipad__grid--item__number">01</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">THU</p>
                    <p class="ipad__grid--item__number">02</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">FRI</p>
                    <p class="ipad__grid--item__number">03</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SAT</p>
                    <p class="ipad__grid--item__number--weekend">04</p>
                </div>
                
                <!-- Week 2 -->
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SUN</p>
                    <p class="ipad__grid--item__number--weekend">05</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">MON</p>
                    <p class="ipad__grid--item__number">06</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">TUE</p>
                    <p class="ipad__grid--item__number">07</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">WED</p>
                    <p class="ipad__grid--item__number">08</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">THU</p>
                    <p class="ipad__grid--item__number">09</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">FRI</p>
                    <p class="ipad__grid--item__number">10</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SAT</p>
                    <p class="ipad__grid--item__number--weekend">11</p>
                </div>

                <!-- Week 3 -->
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SUN</p>
                    <p class="ipad__grid--item__number--weekend">12</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">MON</p>
                    <p class="ipad__grid--item__number">13</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">TUE</p>
                    <p class="ipad__grid--item__number">14</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">WED</p>
                    <p class="ipad__grid--item__number">15</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">THU</p>
                    <p class="ipad__grid--item__number">16</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">FRI</p>
                    <p class="ipad__grid--item__number">17</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SAT</p>
                    <p class="ipad__grid--item__number--weekend">18</p>
                </div>

                <!-- Week 4 -->
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SUN</p>
                    <p class="ipad__grid--item__number--weekend">19</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">MON</p>
                    <p class="ipad__grid--item__number">20</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">TUE</p>
                    <p class="ipad__grid--item__number">21</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">WED</p>
                    <p class="ipad__grid--item__number">22</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">THU</p>
                    <p class="ipad__grid--item__number">23</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">FRI</p>
                    <p class="ipad__grid--item__number">24</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SAT</p>
                    <p class="ipad__grid--item__number--weekend">25</p>
                </div>

                <!-- Week 5 -->
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SUN</p>
                    <p class="ipad__grid--item__number--weekend">26</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">MON</p>
                    <p class="ipad__grid--item__number">27</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">TUE</p>
                    <p class="ipad__grid--item__number">28</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">WED</p>
                    <p class="ipad__grid--item__number">29</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">THU</p>
                    <p class="ipad__grid--item__number">30</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day">FRI</p>
                    <p class="ipad__grid--item__number">31</p>
                </div>
                <div class="ipad__grid--item">
                    <p class="ipad__grid--item__day--weekend">SAT</p>
                    <p class="ipad__grid--item__number--weekend">01</p>
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
                    <img src="../src/logos/link_1.png" alt="kwp"/>
                </a>
                <a class="links__container--item" href="https://www.motac.gov.my/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_2.png" alt="motac"/>
                </a>
                <a class="links__container--item" href="https://www.dbkl.gov.my/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_3.png" alt="dbkl"/>
                </a>
                <a class="links__container--item" href="https://www.malaysia.travel/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_4.png" alt="tourism malaysia"/>
                </a>
                <a class="links__container--item" href="https://www.matic.gov.my/en/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_5.png" alt="malaysia turism center"/>
                </a>
                <a class="links__container--item" href="https://www.mm2h.com/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_6.png" alt="malaysia my second home"/>
                </a>
                <a class="links__container--item" href="https://asean.org/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_7.png" alt="southeast asia"/>
                </a>
                <a class="links__container--item" href="https://www.matrade.gov.my/en/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_8.png" alt="matrade"/>
                </a>
                <a class="links__container--item" href="https://www.malaysiaairports.com.my/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_9.png" alt="malaysia airports"/>
                </a>
                <a class="links__container--item" href="https://www.malaysiaairports.com.my/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_10.png" alt="klia next gen hub"/>
                </a>
                <a class="links__container--item" href="https://www.matta.org.my/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_11.png" alt="matta"/>
                </a>
                <a class="links__container--item" href="https://www.artgallery.gov.my/en/homepage/" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logos/link_12.png" alt="balai seni lukis negara"/>
                </a>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="footer__containerLeft">
            <p class="footer__containerLeft--textLeft">Copyright      
                <img class="footer__containerLeft--image" src="../src/icons/copyright_white.svg" alt="copyright icon"/> 2022 <br/>
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