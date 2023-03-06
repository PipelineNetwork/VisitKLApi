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

    <main>
        <form class="intro" >
            
            <div class="intro__buttons">
                <input type="submit" value="Submit" class="intro__buttons--submit"/>
                <img class="intro__buttons--reload" src="/figma/src/icons/reload_cherry_good-form.png" alt="reload" />
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
                        Millions of tourists and KL Lites want to know about your event.
                    </p>
                </div>

                <div class="intro__form">
                    <label class="form__container--fill" for="event">
                        <span>Event or Promotion Name</span>
                        <input type="text" id="event" name="name" value="{{$eform->name}}" required></input>
                    </label>
                    <div class="intro__form--mid">
                        <label class="form__container--fill" for="date-start">
                            <span>Start Date</span>
                            <input type="date" id="date-start" name="date_start" value="{{$eform->date_start}}" required></input>
                        </label>
                        <label class="form__container--fill" for="time-start">
                            <span>Start Time</span>
                            <input type="time" id="time-start" name="time_start" value="{{$eform->time_start}}" required></input>
                        </label>
                    </div>
                    <label class="form__container--fill" for="venue">
                        <span>Venue</span>
                        <input type="text" id="venue" name="venue" value="{{$eform->venue}}" required></input>
                    </label>
                    <div class="intro__form--mid">
                        <label class="form__container--fill" for="date-end">
                            <span>End Date</span>
                            <input type="date" id="date-end" name="date_end" value="{{$eform->date_end}}" required></input>
                        </label>
                        <label class="form__container--fill" for="time-end">
                            <span>End Time</span>
                            <input type="time" id="time-end" name="time_end" value="{{$eform->time_end}}" required></input>
                        </label>
                    </div>
                </div>
            </div>
            

            <section class="form__container">
                    <label class="form__container--description" for="description">
                        <span>Event / Promotion Description</span>
                        <textarea id="description" name="description" value="{{$eform->description}}" required></textarea>
                    </label>

                    <div class="form__container--grid">
                        <div class="form__container--grid__division">
                            <label class="form__container--fill" for="event-list">
                                <span>Type of Event</span>
                                <p>{{$eform->event_type}}</p>
                            </label>
                            <label class="form__container--fill" for="link">
                                <span>Link</span>
                                <input type="url" id="link" name="link" value="{{$eform->link}}" required></input>
                            </label>
                            <label class="form__container--fill" for="tel">
                                <span>Contact No.</span>
                                <input type="tel" id="tel" name="tel" value="{{$eform->tel}}" required></input>
                            </label>
                            <label class="form__container--fill" for="email">
                                <span>Email</span>
                                <input type="email" id="tel" name="email" value="{{$eform->email}}" required></input>
                            </label>
                        </div>

                        <div class="form__container--grid__division">
                            <label class="form__container--fill" for="company">
                                <span>Company Name</span>
                                <input type="text" id="company" name="company" value="{{$eform->company}}" required></input>
                            </label>
                            <label class="form__container--fill" for="fax">
                                <span>Fax</span>
                                <input type="text" id="fax" name="fax" value="{{$eform->fax}}" required></input>
                            </label>

                            <div class="form__container--buttons__division">
                                <label class="form__container--buttons__division--label">
                                    <span>Upload Banner</span>
                                    <p><a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$eform->banner}}">Link</a></p>
                                </label>
                                <label class="form__container--buttons__division--label">
                                    <span>Upload Approved DBKL License</span>
                                    <p><a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$eform->license}}">Link</a></p>
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