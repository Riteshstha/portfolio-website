<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6b5a74c894.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<script src="index.js"></script>
</head>
<body>        
    <div id="header">
         <div class="container">
            <div class="parallex">
            <nav>
                <div class="head">VOX</div>
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </nav>
            <div class="header-text">
                
                
                    <h1> Welcome to Vox's portfolio!!</h1>
            </div>
         </div>
        </div>
    </div>

    <!--abouttttttttttttttttt-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col1">
                    <img src="image.jpg">
                </div>
                <div class="about-col2">
            <h1 class="sub-title">About me</h1>
            <p>Hi, I'm Ritesh Shrestha, a passionate guitarist with a deep love for creating music that speaks to the soul. Whether strumming acoustic melodies, shredding electric solos, or exploring new styles, the guitar has always been my voice and my outlet for creativity.

                I specialize in rock music and have been honing my craft for 5 years. For me, music is about connection—connecting with myself, my audience, and the endless possibilities that each note brings.
                
                When I'm not playing, I'm composing, collaborating, or discovering fresh inspiration from the world around me. Let's make music together!</p>
            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                <p class="tab-links" onclick="opentab('experience')"> Experience</p>
                <p class="tab-links" onclick="opentab('education')">Education   </p>
                  
           
            </div>
            <div class="tab-contents active-tab" id="skills">
                <ul>
                    <li><span>Finger Dexterity and Coordination</span><br>The ability to move fingers independently</li>
                    <li><span>Music Theory Knowledge</span><br>Understanding scales, chords, and progressions helps in improvisation and songwriting.</li>
                    <li><span>Rhythm and Timing</span><br>A great guitarist has impeccable rhythm, whether playing lead or accompanying</li>
                </ul>
            </div>
            <div class="tab-contents" id="experience">
                <ul>
                    <li><span>Performing Live on Stage</span><br>Played as a lead guitarist in <i><b> Metamorphic band.</i></b></i></li>
                    <li><span>Recording in a Studio</span><br>Worked on recording sessions for album <b>evade</b></li>
                    <li><span>Teaching Guitar Lessons</span><br>Provided lessons to beginner and intermediate players, focusing on technique, music theory, and song-building. Sharing knowledge reinforced fundamental skills and created meaningful connections with aspiring musicians.</li>
                </ul>
            </div>
            <div class="tab-contents" id="education">
                <ul>
                    <li><span>Formal Music Education</span><br>Completed a degree/diploma in Music Performance or Music Theory from Kathmandu University, specializing in guitar techniques, composition, and ensemble playing.</li>
                    <li><span>Private Lessons</span><br>Studied under <b>Guthrie Govan</b>, focusing on advanced techniques like fingerstyle, improvisation, or jazz theory, which significantly enhanced technical and creative skills.</li>
                    <li><span>Self-Taught Journey</span><br>Dedicated 6 years to mastering the guitar through self-study, online courses, and practice. Developed a unique style influenced by rock music community.</li>
                </ul>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!--services-->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-music"></i>
                    <h2> Live Performances</h2>
                <p>Available for gigs, events, and special occasions, delivering engaging performances tailored to the audience. Whether it’s acoustic melodies for intimate settings or electric solos for energetic crowds, I bring passion and professionalism to every stage.</p>
                <a href="#">Learn more</a>
                </div>
               
                <div>
                    <i class="fa-solid fa-guitar"></i>  
                    <h2>Session Guitarist</h2>
                        <p>Provide guitar tracks for studio recordings, jingles, and collaborations. Skilled in various genres, I can craft rhythm, lead, or ambient parts to complement your project and bring your vision to life.</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-book"></i>                    <h2>Guitar Lessons</h2>
                    <p>Teach personalized lessons for beginners and intermediate players, covering techniques, music theory, and songs. My goal is to inspire and guide students to find their unique voice on the guitar while building confidence and skill.</p>
                    <a href="#">Learn more</a>
                </div>

            </div>
        </div>
    </div>
    <!--   portfolio  -->
       <div id="portfolio">
        <div class="container">
<h1 class="sub-title">My Work</h1>
<div class="work-list">
<div class="work">
    <img src="live.jpg">
    <div class="layer">
        <h3>Live Performances      </h3>
        <p>Engaging audiences at venues, events, and festivals, bringing energy and emotion to every stage.</p>
        <a href="#"><i class="fa-solid fa-link"></i></a>
    </div>
</div>
<div class="work">
    <img src="studio.jpg">
    <div class="layer">
        <h3>Studio Recording</h3>
        <p>Crafting guitar tracks for albums, singles, and collaborations with fellow musicians.</p>
        <a href="#"><i class="fa-solid fa-link"></i></a>
    </div>
</div>
<div class="work">
    <img src="composition.JPG">
    <div class="layer">
        <h3>Composition</h3>
        <p>Writing original pieces that blend creativity and technicality, reflecting my unique musical style.</p>
        <a href="#"><i class="fa-solid fa-link"></i></a>
    </div>
    
    
</div>
</div>
<a href="#" class="btn">See more</a>
        </div>
       </div>
       <!-- contacts  -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact me</h1>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>  Riteshvox@gmail.com
                            <p> <i class="fa-solid fa-phone"></i>9746850655<p>
                       
                        <div class="social-icons">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i> </a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                        <a href="#" class="but">Download CV</a>
                    </div>
                    <div class="contact-right">
                        <form action="#" autocomplete="off" onsubmit="return validation()">
                            <input type="text" id="name" placeholder="Your name" name="users" > <br>
                            <span id="user"></span>
                            <input type="email" id="email" placeholder="Your email" name ="emails"><br>
                            <span id="emaill"></span>
                            <textarea id="message" rows="6" placeholder="Your Message" name="messages"></textarea><br>
                            <span id="messages"></span>
                            <button type="submit" class="but" name="sub">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

</body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
</html>
<?php
$un=$_GET["users"];
$em=$_GET["emails"];
$mg=$_GET["messages"];

$query="INSERT INTO fans values('$un','$em','$mg')";
$result=mysqli_query($conn,$query);
if($result){
    //echo"recorded succesfully";
}
else{
    echo"failed!!!!!";
}


?>

   
