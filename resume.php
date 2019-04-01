<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- The purpose of this document is to provide a template for you to follow.
        Your resume will be two files, this one resume_template.html to help you to 
        define the CONTENT for your resume and resume.css to help you to define the 
        LOOK of your resume. I will try to put a comment tag pointing out the places 
        you should fill out with your own content. Most should seem obvious.
        -->

        <!-- **** you need to put in y our own title below -->
        <title>Robert Duarte Resume</title>

        <meta content="charset=utf-8" >

        <!-- **** you need to in your own description in the content below -->	
        <meta name="description" content="A junior majoring in computer science at the University of Vermont. Hire me while I'm still on the hunt for work!" >

        <!-- **** you need to in your name in the content below -->
        <meta name="author" content="Robert Duarte" >

        <!-- **** the href below is the name of your style sheet that will define the
        look for your resume. -->	


        <link href='resume.css' rel='stylesheet' type='text/css' media='screen' >

    </head>
    <body id="resume">
        <main>
            <!-- *************   Your personal information ***************************  -->
            <!-- **** change the id here and in the style sheet to  your name -->
            <section id="hcard-Robert-Duarte" class="vcard">
                <div class ='transBox'>

                <!-- ****  put in  your name and your url -->
                <h1 id="name"><a class="url fn" href="https://raduarte.w3.uvm.edu/cs142/sitemap.php">
                        Robert Duarte</a></h1>


                <!-- ****  in all the following span tags put in your address info -->	
                <p class="adr">
                    <span class="street-address">56 Hickok Pl</span>, 
                    <span class="locality">Burlington</span>,  
                    <span class="region">Vermont</span>, 
                    <span class="postal-code">05405</span>
                    <span class="country-name">USA</span>
                </p>

                <p class="email">
                    <span class="type">Email: </span>

                    <!-- ****  notice you need to put your address in twice, once for the link and 
                    once to display -->		
                    <span class="value"><a class="email" href="mailto:robert.duarte@uvm.edu">
                            robert.duarte@uvm.edu</a></span>
                </p>

                <!-- ****  type in your contact numbers, delete extra, copy if you need more -->
                <p class="tel">
                    <span class="type">Cell: </span>
                    <span class="value">1.603.809.7861</span>
                </p>

                </div>
            </section>  <!-- ends vcard -->

            <!-- 
            the main code above was modified from the generator found below.
            This <a href="http://microformats.org/wiki/hcard">hCard</a> created with 
            the <a href="http://microformats.org/code/hcard/creator">hCard creator</a>. 
            ***********  end of personal information ********************************** -->


            <!-- This section is for work that you do that is directly related to your 
            career. Internships, projects etc.  if you do not have any GET some, till then
            just comment this section out ********************* -->
            <section id="profExperience">
                <h2>Professional Experience</h2>
                
                <ol>
                    <li class="job">
                        <span class="dates">present</span>
                        <a href="https://www.baesystems.com/en/home" class="company">BAE Systems</a>,  
                        <a href="https://www.google.com/maps/place/Nashua,+NH/@42.7527901,-71.5667503,
                           12z/data=!3m1!4b1!4m5!3m4!1s0x89e3b0e42dfabf85:0xb6660811428bea55!8m2!3d42.
                           7653662!4d-71.467566" class="location">
                            Nashua, NH</a>

                        <span class="jobtitle">Software Intern III</span>

                        <p class="description">Working with senior software engineers on new and cutting
                            edge technology, responsible for the testing and debugging of advanced software
                            used by the government and military.</p>
                    </li><!-- end of this job -->

                    <!-- past other jobs here descending by dates -->


                </ol>		

                <!-- **** notice the comments for a job, to have more than one copy from Begin 
                job  to end of job and replace the text as needed. They list the most recent first
                
                change the id coName to the name of the	company HERE and in the 
                STYLE SHEET if you want to style it.
                
                use google maps, yahoo maps or anyone you like. its neat to click on it to 
                see the building.
                -->

                <!-- Begin job -->
                		
            </section> <!-- end of your Experience-->


            <!-- Skill set section *********************************************-->
            <section id="skills">
                <h2>Skills</h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>C++</li>
                    <li>Java</li>
                    <li>Python</li>
                </ul>
            </section> <!-- ends skill sets -->

            <!-- Education section *********************************************
            
            only list college education (high school education is not needed.
            Always list most recent first 
            
            change the id to the abbreviation for the school.
            
            -->

            <section id="education">
                <h2>Education</h2>

                <ol>
                    <li class="school" id="uvm">
                        <span class="dates">2016 - present</span>
                        <a href="http://www.uvm.edu" class="institution">University of Vermont</a>, 
                        <a href="http://maps.google.com/maps?q=+colchester+ave%2C+Burlington%2C+VT+05401%2C+
                           United+States&amp;l=explore&amp;utm_campaign=en&amp;utm_medium=ha&amp;utm_source=en
                           -ha-na-us-gns-lt&amp;utm_term=searchbox&amp;submit.x=116&amp;submit.y=23&amp;submit=
                           Explore+this+place" 
                           class="location">Burlington, VT</a>

                        <span class="MajorDegree">Computer Science</span>
                        <span class="gpa">Cumulative GPA 3.0 (3.0)</span>

                        <!-- List the most important courses for your major that you have taken (or will take). 
                        This gives you some common ground when interviewing and something to talk about. list 
                        the NAME not the number. If there is a link for your course put it in but be sure the 
                        link will always
                        be available. -->
                        <h3 class="subtitle">Course of Study </h3>
                        <ul class="courses major">
                            <li>Beginner Programming (Python)</li>
                            <li>Intermediate Programming (Java)</li>
                            <li>Advanced Programming (C++)</li>
                            <li>Calculus I, II, and III </li>
                            <li>Combinatorial Theory</li>
                            <li>Algorithm Design and Analysis</li>
                            <li>Computability and Complexity</li>
                            <li>Statistics for Engineers</li>
                            <li>Discrete Structures</li>
                            <li>Basic Web Development</li>
                        </ul>

                    </li> <!-- end school  -->

                    <!-- add another school here if you attended more than one. Same as with Experience
                    just copy and paste the code changing the relevant info. -->



                </ol>
            </section> <!-- end education -->


            <!-- Work History ***************************************************
            This is just what you have been doing to make money, if it is related to your profession then it belongs up above in professional Experience.
            
            Your work history goes here with the most recent first. However, if the work is related to your major then it belongs above in Professional Experience, if they were just jobs to help pay your way, list them here as Work Experience. this is the same as professional
            experience only the work is not related to your career but shows that you can work  -->

            <section id="experience">
                <h2>Work Experience</h2>
                <!-- Begin job -->
                
                
                
                <ol>
                    <li class="job" id="BAE"> 
                        <span class="dates">2018</span>
                        <a href="https://www.baesystems.com/en/home" class="company">BAE Systems</a>, 

                        <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
                        validate -->
                        <a href="https://www.google.com/maps/place/Nashua,+NH/@42.7527901,-71.5667503,12z/data=
                           !3m1!4b1!4m5!3m4!1s0x89e3b0e42dfabf85:0xb6660811428bea55!8m2!3d42.7653662!4d-71.467566" 
                           class="location">Nashua, NH</a>

                        <span class="jobtitle">Technical Intern II.</span>

                        <p class="description">
                            Worked with engineers, factory managers, and project managers to ensure all devices
                            in the New Hampshire and Massachusetts area were up to DFARS compliance.
                            Part of a team responsible for the surveillance of 1,500 devices in NH alone.
                        </p>
                    </li><!-- end of this job -->
                    
                    <li class="job" id="CNC"> 
                        <span class="dates">2017</span>
                        <a href="https://www.cncauto.com/" class="company">CNC Automation</a>, 

                        <!-- notice i change the google maps url. everyplace it has a & made it &amp; so it would 
                        validate -->
                        <a href="https://www.google.com/maps?q=amherst+nh&rlz=1C1CHBF_enUS697US697&um=1&ie=UTF
                           -8&sa=X&ved=0ahUKEwibnfXd1KXhAhVNT98KHX44BmkQ_AUIDigB"
                           class="location">Amherst, NH</a>

                        <span class="jobtitle">C++ Developer.</span>

                        <p class="description">
                            Modified an existing Windows MFC application.  Added UI controls and modified gcode
                            generation.
                        </p>
                    </li><!-- end of this job -->


                    <!-- past other jobs here, descending by dates -->


                </ol>
                                
             
                
            </section> <!-- end of your Experience-->

            <!-- Interests section *************************************************
            You have to have something that interests you. This is to let everyone know that you have a life 
            beyond working. -->
            <section id="interests">
                <h2>Interests</h2>
                
                <ol class="intBar">
                    <li class="int">4 year Varsity hockey player in High School</li>
                    <li class="int">4 year Varsity lacrosse player in High School</li>
                    <li class="int">2 year Junior Varsity golf team member in High School</li>
                    <li class="int">Taught children ages 4-12 how to ice skate through a learn-to-skate camp</li>
                </ol>
                
            </section> <!-- ends interests -->

        </main>
    </body>
</html>