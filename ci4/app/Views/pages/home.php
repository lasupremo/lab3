<body>
    <nav id="desktop-nav">
        <div class="logo">Liam Supremo</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li> 
                <li><a href="#experience">Experience</a></li> 
                <li><a href="#hobbies">Hobbies</a></li> 
                <li><a href="#contact">Contact</a></li> 
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Liam Supremo</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about" onclick="toggleMenu()">About</a></li> 
                <li><a href="#experience" onclick="toggleMenu()">Experience</a></li> 
                <li><a href="#hobbies" onclick="toggleMenu()">Projects</a></li> 
                <li><a href="#contact" onclick="toggleMenu()">Contact</a></li> 
            </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="images/profile-pic.gif" alt="Liam Supremo profile picture">
        </div>
        <div class="section__text">
            <p class="section__text__p1"> Hello, I'm</p>
            <h1 class="title">Liam Supremo</h1>
            <p class="section__text__p2">2nd Year CS Student</p>
            <div ckass="btn-container">
                <button class="btn btn-color-1" onclick="location.href='#contact'">
                Contact Info
                </button>
            </div>
            <div id="socials-container">
                <img 
                src="images/linkedin.png" 
                alt="My LinkedIn profile" 
                class="icon" 
                onclick="location.href='https://www.linkedin.com/in/liam-miguel-supremo-448a2022a/'">
                
                <img 
                src="images/github.png" 
                alt="My Github profile" 
                class="icon" 
                onclick="location.href='https://github.com/lasupremo'">
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get to Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container">
                <img src="images/akira.png" alt="Profile picture" 
                class="about-pic">
            </div>
            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img src="images/experience.png" alt="Experience Icon"
                        class="icon">
                        <h3>Experience</h3>
                        <p>Lorem <br />Ipsum</p>
                    </div>
                    <div class="details-container">
                        <img 
                        src="images/education.png" 
                        alt="Education Icon"
                        class="icon">
                        <h3>Education</h3>
                        <p>Lorem <br />Ipsum</p>
                    </div>
                </div>
                <div class="text-container">
                    <?php
                    $school = "Asia Pacific College";
                    $course = "Computer Science";
                    $birthdate = "2004-07-02";
                    $games = array("Terraria", "Pokemon", "Dark Souls");
                    $ngames = count($games);
                    $game1 = $games[0];

                    $currentDate = new DateTime();
                    $birthDateObj = new DateTime($birthdate);

                    $age = $currentDate->diff($birthDateObj)->y;

                    echo "<p>I am $age years old. Currently, a sophomore in $school studying $course. I aspire to create a video game that a lot of people can enjoy. There are $ngames games that I currently enjoy. One of them being $game1.</p>"
                    ?>
                </div>
            </div>
        </div>
        <img 
        src="images/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#experience'">
    </section>
    <section id="experience">
        <p class="section__text__p1">Explore My</p>
        <h1 class="title">Experience</h1>
        <div class="experience-details-container">
            <div class="about-containers">
                <div class="details-container">
                    <h2 class="experience-sub-title">Frontend Development</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="images/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>HTML</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="images/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>CSS</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="images/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>JavaScript</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="details-container">
                    <h2 class="experience-sub-title">Programming</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="images/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>Python</h3>
                                <p>Intermediate</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="images/checkmark.png" 
                            alt="Experience icon" 
                            class="icon">
                            <div>
                                <h3>Java</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <img 
        src="images/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#hobbies'">
    </section>
    <section id="hobbies">
        <p class="section__text__p1">These Are My</p>
        <h1 class="title">Hobbies</h1>
        <div class="experience-details-container">
            <div class="about-containers">
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="images/hobby-1.jpg" 
                    alt="Hobby 1" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Playing Video Games</h2>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="images/hobby-2.gif" 
                    alt="Hobby 2" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Watching TV shows & Movies</h2>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="images/hobby-3.png" 
                    alt="Hobby 3" 
                    class="hobby-img">
                </div>
                <h2 class="experience-sub-title hobby-title">Collecting Cards</h2>
            </div>
        </div>
        </div>
        <img 
        src="images/arrow.png" 
        alt="Arrow icon" 
        class="icon arrow"
        onclick="location.href='#contact'">
    </section>
    <section id="contact">
        <p class="section__text__p1">My Contacts</p>
        <?php 
        $currentTime = date("H:i:s");

        $awake = ':3';
        $sleep = 'ᶻ 𝗓 𐰁 "( – ⌓ – )';
        if ($currentTime >= "07:30" && $currentTime < "23:00") {
            echo '<h1 class="title">' . $awake . '</h1>';
        } else {
            echo '<h1 class="title">' . $sleep . '</h1>';
        }
        ?>
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img 
                src="images/email.png" 
                alt="Email icon" 
                class="icon contact-icon email-icon">
                <p><a href="mailto:lasupremo@student.apc.edu.ph">lasupremo@student.apc.edu.ph</a></p>
            </div>
            <div class="contact-info-container">
                <img 
                src="images/linkedin.png" 
                alt="LinkedIn icon" 
                class="icon contact-icon">
                <p><a href="https://www.linkedin.com/in/liam-miguel-supremo-448a2022a/">LinkedIn</a></p>
            </div>
        </div>
    </section>