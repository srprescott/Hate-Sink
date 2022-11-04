<?php
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $input=$_POST["input"];

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Replace My Sink</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/ee5902d563.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-196933956-1">
            </script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-196933956-1');
            </script>
        
    </head>
    
    <body>
        
        
         <!-- NAV BAR BEGIN -->
        
        <div class="topnav" id="myTopnav"> 
            <a href="index.html">Home</a> 
            <a href="#about">About Us</a> 
            <!-- <a href="#services">Services</a> -->
            <a href="#projects">Projects</a> 
            <a href="#reviews">Reviews</a> 
            <a href="#contact">Contact Us</a>
            <p class="this-page">Home</p> 
            <a href="javascript:void(0);" style="font-size:20px;" class="icon" onclick="myFunction()">&#9776;</a> 
        </div>
        
        <!-- NAV BAR END -->
        
       
        
        
    
        
        
    
    <div class="container-fluid">
            
        <div class="row">
            
            <div class="spacer"></div>
            
            
            <section class="one" id="home">
               
                <!--
                <div class="heading">
                    <p class="head-text">Call today</p>
                    <p class="head-sub-text-one">to schedule your <em>FREE</em> and easy half hour, In-Home Estimate!</p>
                    <a class="head-sub-text-two" href="tel:1-772-486-4002" class="sub-p-cs">(772) 486-4002</a>
                </div>
                <p class="intro-contact">Replace My Sink, LLC</p>
                
                -->
                <div class="buffer"></div>
                <img class="logo shade" src="images/logo2.png" alt="Replace My Sink Logo">
                
                
            </section>  
            
            
            
            <section class="two" id="about">
               
                <div class="heading">
                
                    <form class="contact-form" action="contactform.php" method="post">
                                <label class="white-text-sub">Name</label>
                                <input type="text" name="name" placeholder="Full Name">
                                <label class="white-text-sub">City</label>
                                <input type="text" name="city" placeholder="City">
                                <label class="white-text-sub">Email Address</label>
                                <input type="text" name="mail" placeholder="Email">
                                <label class="white-text-sub">Phone Number</label>
                                <input type="text" name="phone" placeholder="Phone Number">
                                <label class="white-text-sub">What can we help you with?</label>
                                <textarea name="message" placeholder="Message"></textarea>
                                <button class="submit" type="submit" name="submit">Submit</button>
                            </form>
                
                </div>
                
                <p class="head-p">Keep your countertop, replace your sink!</p>
                <div class="intro">
                    <p class="intro-p">Tired of your old, boring sink? Ready for a fully functional upgrade to fit your style? Tired of cracked countertops at the front or back of your sink? We cut Granite, Quartz, Corian, and more to fit the sink of your dreams! </p>
                    <div class="words">
                        <div class="blurb-little">
                            <img src="images/icons/002-estimation.png" alt="Estimate Icon">
                            <p class="sub-p">Schedule your FREE In-Home Estimate, and we will travel to you to help you discover the perfect sink for your beautiful home! </p>
                        </div>
                        <div class="blurb-little">
                            <img src="images/icons/004-countertop.png" alt="Countertop Icon">
                            <p class="sub-p">Cracked granite in front or back of sink? Not a problem. We can install a top-mount or under-mount standard or farm front sink in most cases.</p>
                        </div>
                        <div class="blurb-little">
                            <img src="images/icons/003-sweeping.png" alt="Clean Install Icon">
                            <p class="sub-p">You can expect a clean and DUST FREE install with the use of our proprietary YAK Dust Room, your home is our top priority! </p>
                        </div>
                    
                    </div>
                    
                </div>
                
            </section>  
            
            
            <!-- <section class="three" id="services">
                
                    
                
            </section>    -->
            
            <div id="projects"></div>
            
            <section class="four">
               <p class="head-p">Our Projects</p>
                <div class="before-after">
                    <div class="before project-image">
                        <p class="intro-p project-intro-p">Before</p>
                        <img class="shade left" src="images/before-after/three-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <p class="intro-p project-intro-p">After</p>
                        <img class="shade right" src="images/before-after/three-after.jpg" loading="lazy">
                    </div>
                </div>
                   
                <div class="before-after">
                    <div class="before project-image">
                        <img class="shade left" src="images/before-after/one-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <img class="shade right" src="images/before-after/one-after.jpg" loading="lazy">
                    </div>
                </div>
                  
                <div class="before-after">
                    <div class="before project-image">
                        <img class="shade left" src="images/before-after/two-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <img class="shade right" src="images/before-after/two-after.jpg" loading="lazy">
                    </div>
                </div>     
                        
                <div class="before-after">
                    <div class="before project-image">
                        <img class="shade left" src="images/before-after/four-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <img class="shade right" src="images/before-after/four-after.jpg" loading="lazy">
                    </div>
                </div>           
                   
                <div class="before-after">
                    <div class="before project-image">
                        <img class="shade left" src="images/before-after/five-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <img class="shade right" src="images/before-after/five-after.jpg" loading="lazy">
                    </div>
                </div>
                      
                <div class="before-after">
                    <div class="before project-image">
                        <img class="shade left" src="images/before-after/six-before.jpg" loading="lazy">
                    </div>
                    <div class="after project-image">
                        <img class="shade right" src="images/before-after/six-after.jpg" loading="lazy">
                    </div>
                </div>   
                    
                
            </section> 
            
            
            
            <div id="reviews"></div>
            
            <section class="five">
                <p class="head-p">Our Customers Love Us!</p>
                <div class="reviews-section">
                   <div class="review-block">
                       <p class="review-quote">"</p>
                       <p class="reviews">I can't say enough about my new sink! We are thrilled to have found "Replace My Sink." We had no idea that we could replace our old porcelain sink without replacing our granite countertop. This company did a fantastic job. Prompt, professional and efficient. I highly recommend them.</p>
                       <p class="review-quote end">"</p>
                       <p class="review-customer"> - Malia from Palm City</p>
                       
                   </div>
                   
                   <div class="review-block">
                       <p class="review-quote">"</p>
                       <p class="reviews">So after 13 years in a house we built, my better half was smitten with the idea of replacing our "experienced two tub undermount sink" with the latest, "one big stainless steel tub" and a goose necked faucet. I argued that the granite counter needed to be cut. I spoke with Bradley from Replace My Sink and he convinced me that these jobs are what they do and do well. Well let me just say they did do an amazing job. I am happy we did it and my wife is ecstatic!</p>
                       <p class="review-quote end">"</p>
                       <p class="review-customer"> - Scott from West Palm Beach</p>
                       
                   </div>
                   
                   <div class="review-block">
                       <p class="review-quote start">"</p>
                       <p class="reviews">Sink looks great. You have two very personable, professional and very efficient guys. We were very happy with their work and clean up.</p>
                       <p class="review-quote end">"</p>
                       <p class="review-customer"> - Dally and Ralph from Port St Lucie</p>
                       
                   </div>
                   
                   <div class="review-block">
                       <p class="review-quote">"</p>
                       <p class="reviews">Brad and his guys were very professional, skilled and punctual. I felt very comfortable from the initial design meeting and throughout the whole installation process.I would highly recommend Replace My Sink.</p>
                       <p class="review-quote end">"</p>
                       <p class="review-customer"> - Kathleen from Boynton Beach</p>
                       
                   </div>
                   
                   <div class="review-block">
                       <p class="review-quote">"</p>
                       <p class="reviews">The new sink shape really modernizes my kitchen look, and the work done to cut and polish the granite was exceptional. The sink looks great and my overall kitchen appearance looks much more up to date.</p>
                       <p class="review-quote end">"</p>
                       <p class="review-customer"> - Jeannie from Vero Beach</p>
                       
                   </div>
                    
                    
                </div>
                
            </section>  
            
            
            
            <section class="six" id="contact">
                
                <p class="head-p-cs">Contact Us</p>
                <div class="contact">
                   <div class="c-blurb">
                       <p class="sub-p-cs-lg">CALL US</p>
                       <a href="tel:1-772-486-4002" class="sub-p-cs">(772) 486-4002</a>
                   </div>
                   
                   
                   <div class="c-blurb">
                       <p class="sub-p-cs-lg">EMAIL US</p>
                       <a href="mailto:info@replacemysink.com" target="_top" class="sub-p-cs">info@replacemysink.com</a>
                   </div>
                   
                   
                    <div class="c-blurb">
                       <p class="sub-p-cs-lg">FIND US</p>
                       <p class="sub-p-cs">337 W Indiantown Rd, </p>
                       <p class="sub-p-cs">Jupiter, FL 33458</p>
                   </div>
                   
                   
                   <div class="c-blurb">
                       <p class="sub-p-cs-lg">LICENSE NUMBER</p>
                       <p class="sub-p-cs">CFC1431113</p>
                       <p class="sub-p-cs">Licensed, insured and bonded.</p>
                   </div>
                   
                   
                   <div class="c-blurb">
                       <p class="sub-p-cs-lg">AREAS OF SERVICE</p>
                       <p class="sub-p-cs">Palm Beach County</p>
                       <p class="sub-p-cs">Martin County</p>
                       <p class="sub-p-cs">St. Lucie County</p>
                       <p class="sub-p-cs">Indian River County</p>
                   </div>
                    
            
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d322885.43749061413!2d-80.45842744537897!3d26.603180330277706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88debaaecea0d6f3%3A0x899a17a886209003!2sPalm%20Beach%20County%2C%20FL!5e0!3m2!1sen!2sus!4v1621896122006!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                
                
            </section>  
            
            
        </div>
        
        
        
        
    </div>
        
        
        
        
        
        
        
        
        
        
        
        
    <footer>
        <div class="footer">
            <p class="ackn">Copyright Replace My Sink 2022. Designed and Developed by <a href="http://www.prescottdev.com" class="link">Prescott Web Development</a></p>
        </div>
    </footer>
    
    
    
    
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
                document.querySelector('.this-page').style.display = "none";
            }
            else {
                x.className = "topnav";
                document.querySelector('.this-page').style.display = "block";
                
            }
        }
    </script>
        
        
        
        
        
        

    </body>

</html>