<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projecten</title>
    <link rel="stylesheet" href="../Views/Portfoliocss.css">

</head>
<body>

<div class="golfanim GolfAnimatieClss">
    <div class="golfanimbinnenkant bgtop">
        <div class="golf golftop" style="background-image: url('../images/golfjes/wave-top.png')"></div>
    </div>
    <div class="golfanimbinnenkant bgMiddle">
        <div class="golf golfmidden" style="background-image: url('../images/golfjes/wave-mid.png')"></div>
    </div>
    <div class="golfanimbinnenkant bgBottom">
        <div class="golf golfbodem" style="background-image: url('../images/golfjes/wave-bodem.png')"></div>
    </div>

</div>
<?php require 'Views/layouts/Header.php'; ?>


<!--items achtergrond-->


<div class="container">
    <div class="row">
        <div class="col">
            <div class="main-timeline">
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2021</span>
                        <div class="timeline-icon">
                            <i class="fa fa-rocket" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Fully functioning 3d survival game</h3>
                            <p class="description">
                                In the year 2020 and 2021 I focussed on making a functioning survival horror game, being inspired by many other games I played before.
                                The game was developed in the Unreal Engine version 4.26 coding in C++ and making use of the blueprint system.
                                I made almost all of the assets in Blender.
                                <img src="../images/Projectpictures/survivalgameimage.png" class="projectimage">
                            </p>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2022-2023</span>
                        <div class="timeline-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Technasium master's thesis</h3>
                            <p class="description">
                                During my last year in secondary school, in the subject "Technasium" me and 2 other group members had to work together with a company, and help them with a problem they were encountering.
                                After interviewing a bunch of companies, we ended up working together with a company called "SecuMailer".
                                This IT company worked in Email protection, being used all over the globe. What they lacked was a way to properly show the
                                customer how their product worked. Me, and my other 2 group members (Sven Frank and Aryan Penninkhof) got to work and ended up making
                                a full 2d animation to fully explain how the product worked. The animation was made in Adobe Aftereffects and can be found here:
                                <video src="../images/Projectpictures/secumailervideo.mp4" controls class="projectimage">
                                </video>

                            </p>
                        </div>
                    </a>
                </div>


                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2023</span>
                        <div class="timeline-icon">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Small indie horror game</h3>
                            <p class="description">
                                In 2023 I decided to develop a small horror game inside the Unreal Engine. After my survival game project I wanted to learn something new,
                                and this genre always interested me. The game is currently not available for download but will be soon.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2024</span>
                        <div class="timeline-icon">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">First release on a music label</h3>
                            <p class="description">
                                I have been playing instruments for the past decade, having played guitar and piano. In 2021 I got into the producing of digital music, with a
                                focus on the EDM subgenre "Hardstyle". After having produced this genre for a few years I became more serious in my production. Getting better each
                                and every track, got me into eventually being able to work with a large music label on which I published my first officical track. Having gathered a total of more than 1 million streams on my artist profile.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="timeline">
                    <a href="#" class="timeline-content">
                        <span class="timeline-year">2024</span>
                        <div class="timeline-icon">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Portfolio site Software Engineering </h3>
                            <p class="description">
                                In 2024 I started at the University of Applied Sciences Windesheim at the study of Software Engineering.
                                In the first period of this year I had to develop a portfolio website for myself. This site would help me learn HTML, CSS, Javascript, PHP and SQL.
                                This is where I learned a nice base for web development that will benefit me in the future.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- Bij het toevoegen van een nieuwe project kopieer en plak je vanaf div class tot en met het sluiten van die div. -->



</body>
</html>