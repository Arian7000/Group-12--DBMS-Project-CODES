<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    

    <title>Eco Crisis.</title>
</head>

<body>
    <div id="loginPage" class="login-page">
        <div class="login-container">
            <h2>Login or Register</h2>
            <form id="loginForm" class="login-form" action="login_form.php" method="post">
                <!-- Your form fields -->
                <label for="loginUsername">Username:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
                <br>
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <br>
                <button type="submit" class="cta-button">Login</button>
            </form>

            <p>Don't have an account? <a href="registration.php">Register Now</a>  <br> <a href="#" id="viewAsGuest">View as Guest</a></p>

            
        </div>
    </div>

    <div id="mainContent" class="main-content">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <img src="Capture.png" alt="Your Logo">
                    </div>
                    
                    <ul>
                        
                        <li><a href="#home">Home</a></li>
                        <li><a href="#climateData">Climate Data</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="#support">Support</a></li>
                        <li><a href="#contact">Contact</a></li>

                    </ul>
                    <button id="logoutButton">Logout</button>
                </nav>
            </div>
        </header>

        <main>
            <section id="home" class="hero">
                <div class="container">
                    <h2>About EcoCrisis: Navigating the Impact of Climate Change</h2>
                    <p>Welcome to EcoCrisis, your dedicated platform for exploring the profound effects of climate change on our planet. At EcoCrisis, we strive to illuminate the intricate connections between human activities and the rapidly evolving climate, fostering a deeper understanding of the critical issues that shape our environmental landscape.</p>
                    <h2>Our Purpose</h2>

<p>EcoCrisis is driven by the purpose of providing clear insights into the repercussions of climate change. By dissecting the complex web of environmental challenges, we aim to empower individuals, communities, and decision-makers with the knowledge needed to address the urgent issues at hand.</p>
                    <h2>What Sets Us Apart</h2>


<p>Focused Expertise: Dive into our specialized content that delves into the specific effects of climate change. From rising temperatures and extreme weather events to shifts in ecosystems, we deliver focused insights on the multifaceted impacts.

Informative Resources: Access a wealth of resources designed to inform and educate. Our articles, data visualizations, and educational materials are crafted to bring clarity to the complex interplay between human activities and climate change.

Call to Action: Beyond awareness, we believe in inspiring action. Explore practical steps, solutions, and collective efforts that can contribute to mitigating the impacts of climate change and fostering a sustainable future.</p>

                    <h2>Why EcoCrisis? </h2>


<p>In a world grappling with the consequences of climate change, staying informed is paramount. EcoCrisis stands as your reliable guide, providing a comprehensive understanding of the effects on climate change and a pathway towards collective solutions.

Join us at EcoCrisis, where we unravel the narrative of climate change and empower you to be a part of the solution. Together, let's navigate the complexities and work towards a resilient and sustainable future.</p>
                    <a href="#contact" class="cta-button">Get in Touch</a>
                </div>
            </section>


<section id="climateData" class="climate-data">
                <div class="container">
                    <h2>Climate Data</h2>
                    <p>Explore climate data for different divisions:</p>
                    <a href="climate-data.html" class="cta-button">Explore Data</a>
                </div>
            </section>
           

<section id="features" class="features">
    <div class="container">
        <h2>News</h2>
        <div class="slideshow-container">
            
            <div class="feature fade">
                <img src="normal.jpg" alt="Research Articles">
                <h3>Recent Research Articles</h3>
                <p>This recent research article investigates the accelerating impact of melting glaciers on global sea levels. Utilizing advanced satellite imagery and climate models, the study analyzes the contributions of major glaciers to sea level rise over the past decade. The findings reveal a concerning trend, with some glaciers contributing more rapidly than previously estimated. The research underscores the urgency of addressing the root causes of glacier melting and highlights potential implications for coastal communities. By shedding light on the intricacies of this process, the study contributes valuable insights to the broader understanding of climate change dynamics and informs strategies for mitigating its effects.</p>
                <button class="see-more-btn" onclick="redirectTo('https://www.nature.com/nclimate/research-articles?year=2021')">See More</button>
            </div>
            
            <div class="feature fade">
                <img src="etao bonna.webp" alt="Recent Disaster">
                <h3>Recent Disasters in Bangladesh</h3>
                <p>This recent disaster has left an indelible mark on Bandarban, causing widespread devastation and prompting urgent humanitarian responses. The event, whether it be a hurricane, earthquake, wildfire, or other natural or human-made disaster, has significantly affected the lives of residents, infrastructure, and the environment. Emergency response teams are mobilizing to provide immediate assistance, including shelter, medical care, and food distribution. The aftermath highlights the need for robust disaster preparedness and mitigation strategies, emphasizing the importance of community resilience in the face of escalating climate-related challenges. This incident serves as a stark reminder of the ongoing vulnerabilities faced by regions prone to such disasters and underscores the global imperative to address climate change and enhance disaster resilience.</p>
                <button class="see-more-btn" onclick="redirectTo('https://www.prothomalo.com/bangladesh/district/lv447d7nle')">See More</button>
            </div>

            <div class="feature fade">
                <img src="bonna.jpg" alt="Disasters worldwide">
                <h3>Recent Disasters Worldwide</h3>
                <p>The world continues to grapple with a spectrum of disasters, ranging from natural calamities such as hurricanes, earthquakes, and floods to human-made crises like industrial accidents and conflicts. These events, occurring with increasing frequency and intensity, underscore the complex and interconnected challenges facing our global community. Disasters not only disrupt lives, displace communities, and strain resources but also highlight the urgency of fostering resilience, preparedness, and international cooperation. As we navigate an era of environmental uncertainty and socio-political complexities, a concerted effort is required to address the root causes, mitigate impacts, and build sustainable and resilient societies. The lessons learned from each disaster propel us toward a collective responsibility to safeguard human lives, preserve ecosystems, and work collaboratively towards a more resilient and adaptive future.</p>
                <button class="see-more-btn" onclick="redirectTo('https://www.bing.com/search?q=recent+research+articles+on+disasters&qs=n&form=QBRE&sp=-1&ghc=1&lq=0&pq=recent+research+articles+on+disaster&sc=11-36&sk=&cvid=9BDF362F5D17457CACAAC52CED2CFD23&ghsh=0&ghacc=0&ghpl=')">See More</button>
            </div>
            
            <div class="feature fade">
                <img src="etaongo.png" alt="NGO">
                <h3>NGOs</h3>
                <p>Non-Governmental Organizations (NGOs) dedicated to disaster relief play a crucial role in providing immediate assistance and fostering long-term resilience for communities affected by natural disasters. These organizations tirelessly deploy resources, including emergency aid, medical care, and infrastructure support, offering a lifeline to those in distress. Beyond immediate relief efforts, these NGOs contribute to community rebuilding, sustainable development, and proactive measures to mitigate future risks. In the face of adversity, these organizations stand as beacons of compassion, embodying the collective commitment to alleviate suffering and rebuild lives. Their unwavering dedication highlights the profound impact NGOs can have in shaping a more resilient and compassionate world.</p>
                <button class="see-more-btn" onclick="redirectTo('https://glintplus.com/blog/natural-disasters-ngos-leading-the-way-in-emergency-relief/')">See More</button>
            </div>
            <button id="nextButton" onclick="nextSlide()">Next</button>
        </div>
    </div>
</section>








            <section id="support" class="support">
                <div class="container">
                    <h2>Support Us</h2>
                    <p>Your support is crucial in sustaining our mission to address the challenges posed by climate change. By making a donation, you contribute directly to our efforts in raising awareness, providing valuable resources, and fostering positive change. Together, we can build a sustainable future for our planet. Join us in making a difference today.</p>
                    
                    <br>
        <a href="donate.html" class="cta-button">Donate Now</a>

                </div>
            </section>
        </main>

        <section id="contact" class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Have questions or want to learn more? Reach out to us!</p>
                <br>
                <form action="#" method="post" class="contact-form">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit" class="cta-button">Send Message</button>
                </form>
            </div>
        </section>

        


        <footer>

            <div class="container">
                <p>&copy; 2023 Your Company | All Rights Reserved</p>
            </div>

        </footer>
    </div>

    <script src="script.js"></script>
</body>

</html>
