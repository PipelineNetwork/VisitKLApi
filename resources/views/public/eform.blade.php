<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;700&family=Montserrat:wght@600;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/figma/styles/website_parts/e-form.css">
    <title>E-form | VisitKL</title>
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
        <form class="intro" method="POST" action="/eform" enctype="multipart/form-data">
            @csrf
            <div class="intro__buttons">
                <input type="submit" value="Submit" class="intro__buttons--submit"/>
                <a href="/eform"><img class="intro__buttons--reload" src="/figma/src/icons/reload_cherry_good-form.png" alt="reload" /></a>
            </div>
            <div class="intro__head--partition">
                <div class="intro__head">
                    <img class="intro__head--title" src="/figma/src/logos/e-form_title.png" alt="e-form title"/>
                    <div class="intro__head--subtitle">
                        <h3>Welcome to e-Form!</h3>
                        <img src="/figma/src/icons/hand.svg" alt="waving hand" />
                    </div>
                    <p class="intro__head--text">
                        Promote your events here for FREE.<br/>
                        Millions of tourists and KL Lites want to know about your event. <a href="/eform-gallery">E-form gallery</a>
                    </p>
                </div>

                <div class="intro__form">
                    <label class="form__container--fill" for="event">
                        <span>Name</span>
                        <input type="text" id="event" name="name" placeholder="Fun Run With KL" required></input>
                    </label>
                    <label class="form__container--fill" for="event">
                        <span>E-Form Tab</span>
                        <select class="form__container--fill__select" name="eform_type" id="event-list" required>
                            <option class="form__container--fill__option" value="" disabled selected>Choose one</option>
                            <option class="form__container--fill__option" value="event">Event</option>
                            <option class="form__container--fill__option" value="deals">Deals & Packages</option>
                            <option class="form__container--fill__option" value="products">Products & Services</option>
                          </select>
                    </label>                    
                    <div class="intro__form--mid">
                        <label class="form__container--fill" for="date-start">
                            <span>Start Date</span>
                            <input type="date" id="date-start" name="date_start" placeholder="25 June 2022" required></input>
                        </label>
                        <label class="form__container--fill" for="time-start">
                            <span>Start Time</span>
                            <input type="time" id="time-start" name="time_start" placeholder="10 am" required></input>
                        </label>
                    </div>
                    <label class="form__container--fill" for="venue">
                        <span>Venue</span>
                        <input type="text" id="venue" name="venue" placeholder="Dataran Merdeka, Kuala Lumpur" required></input>
                    </label>
                    <div class="intro__form--mid">
                        <label class="form__container--fill" for="date-end">
                            <span>End Date</span>
                            <input type="date" id="date-end" name="date_end" placeholder="25 July 2022" required></input>
                        </label>
                        <label class="form__container--fill" for="time-end">
                            <span>End Time</span>
                            <input type="time" id="time-end" name="time_end" placeholder="10 pm" required></input>
                        </label>
                    </div>
                </div>
            </div>
            

            <section class="form__container">
                    <label class="form__container--description" for="description">
                        <span>Description</span>
                        <textarea id="description" name="description" placeholder="A 5km Marathon event." required></textarea>
                    </label>

                    <div class="form__container--grid">
                        <div class="form__container--grid__division">
                            <label class="form__container--fill" for="event-list">
                                <span>Category</span>
                                <select class="form__container--fill__select" name="event_type" id="event-list" required>
                                    <option class="form__container--fill__option" value="" disabled selected>Choose one</option>
                                    <option class="form__container--fill__option" value="travel">Travel</option>
                                    <option class="form__container--fill__option" value="accomodations">Accomodations</option>
                                    <option class="form__container--fill__option" value="food_&_entertainment">Food & Entertainment</option>
                                    <option class="form__container--fill__option" value="arts_&_culture">Arts & Culture</option>
                                    <option class="form__container--fill__option" value="places_to_go">Places To Go</option>
                                    <option class="form__container--fill__option" value="health_&_wellness">Health & Wellness</option>
                                    <option class="form__container--fill__option" value="mice">MICE</option>
                                    <option class="form__container--fill__option" value="shopping">Shopping</option>
                                    <option class="form__container--fill__option" value="sports">Sports</option>
                                    <option class="form__container--fill__option" value="education">Education</option>
                                  </select>
                            </label>
                            <label class="form__container--fill" for="link">
                                <span>Link</span>
                                <input type="url" id="link" name="link" placeholder="Fill in here" required></input>
                            </label>
                            <label class="form__container--fill" for="tel">
                                <span>Contact No.</span>
                                <input type="tel" id="tel" name="tel" placeholder="Fill in here" required></input>
                            </label>
                            <label class="form__container--fill" for="email">
                                <span>Email</span>
                                <input type="email" id="tel" name="email" placeholder="Fill in here" required></input>
                            </label>
                        </div>

                        <div class="form__container--grid__division">
                            <label class="form__container--fill" for="company">
                                <span>Company Name</span>
                                <input type="text" id="company" name="company" placeholder="Fill in here" required></input>
                            </label>
                            <label class="form__container--fill" for="fax">
                                <span>Fax</span>
                                <input type="text" id="fax" name="fax" placeholder="Fill in here" required></input>
                            </label>

                            <label class="form__container--fill" for="fax">
                                <span>Promotional Code (Optional)</span>
                                <input type="text" id="code" name="code" placeholder="Fill in here"></input>
                            </label>                            

                            <div class="form__container--buttons__division">
                                <label class="form__container--buttons__division--label">
                                    <span>Upload Banner</span>
                                    <input type="file" id="banners" name="banner" required/>
                                </label>
                                <label class="form__container--buttons__division--label">
                                    <span>Upload Approved DBKL License</span>
                                    <input type="file" id="license" name="license" required/>
                                </label>
                            </div>
                        </div>
                        
                    </div>
                    
            </section>
        </form>

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