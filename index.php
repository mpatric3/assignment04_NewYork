<?php include "inc/html-top.inc";?>
    
    <body>
        <section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section> <!--.banner-->

<<<<<<< HEAD
        <div class = "container">
        
        <article>
            <h2>Bei Lu</h2>

            <div class="info">
                <!--no bullet points, just a list next to the picture-->
                <ul>
                    <li>Major: Computer Science and Psychology</li>
                    <li>Graduation Year: 2019</li>
                    <li>Hometown: Shanghai, China</li>
                </ul>
            </div>

            <div class="pic">
                        <!--images of place where each person is from, round-->
                <figure class="place"> 
                    <img class="scale" src="images/bl.jpg" alt="Bei Lu Picture">
                </figure>
            </div>

            <div class="article-info">

            <!--About and their work experience, two seperate headings-->
            <h3>About</h3>
                <p>Charlie studies in University of Rochester, double majoring in psychology and computer science. During her time in Rochester, she passionately devotes to social and developmental psychology and human computer interaction. Her interest in developmental psychology led her to contribute in the university kid's lab, while her knowledge in computer science helps her come up with solutions to meliorate the behavior coding system in psychology researches. She also has research experience in Zhejiang University , where she assisted similar developmental psychology researches on children's temperament. Charlie is enthusiastic about child development and hopes to turn this passion into a career.</p>

                <p>I am currently double majoring in psychology and computer science, which gives me 2 different sets of problem-solving techniques. My academic background in computational coding inspired me a lot when I do behavior coding and helps me coming up with ways to optimize the coding system. Also, due to the nature of most of the computer science classes, I have a lot of experience working on teams for projects.</p>
        </div>
     </article>

     <aside>
    <div class="aside-info">
            <h3>Work Experience</h3>
                <p>As for my research experiences, last summer I was a research assistant at Zhejiang University’s developmental psychology lab. I scheduled meetings with families while doing behavior coding, and constantly came up with questions and solutions which made the experiment more rigorous and precise. For example, there was a task in the experiment where experimenter came into the room and pretend to be injured. The goal of the task was to measure child’s level of empathy. However, the original design was the parents sit on a chair in the room with the child and they were told to do nothing. I immediately raised question about the possibility that children’s action might be affected by parents doing nothing. Afterwards, I proposed to add an indicator in the coding system which measures how many times the child look back and forth between the “injured” experimenter and the parent, which can show the level of behavior inhibition due to parent’s presence. The research team took my proposal and modified their coding system.</p>

                <p>As for my experiences with kids, I have been doing volunteer work since I was 13. I had experience of teaching in summer school when I was 16. Also, in high school I started up a project to help out the local orphanage by organizing volunteers visiting the orphanage once a week and plan activities to raise money for the kids. I also had experiences working with families when I was a research assistant. I enjoy working with kids and have the ability to answer parents’ concerns in a professional setting.</p>
        </div>             
        </aside>

        <?php include "inc/footer.inc";?>

        </div><!--.container -->
        
        <?php include "inc/scripts.inc";?>
    </body>
=======
		<div class= "container" style="z-index: 1;">


		<div class = "slider" style="z-index: -1;"> <!--slider of images of place where each person is from-->
        	<img src="images/aa.jpg" alt="Alejandro Abreu Picture">
			<img src="images/cb.jpg" alt="Casey Brentnall Picture">
			<img src="images/bl.jpg" alt="Bei Lu Picture">
		</div>

		<article >


		
		<!--list the three people - under the slider-->
		<!--order of last name-->

		<h2>Alejandro Abreu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/aa.jpg" alt="New York City Skyline">
				<figcaption>New York City Skyline</figcaption>
			</figure>
			<p>My name is Alejandro Abreu, and I was born on September 6th, 1995. I was born in Monte Sinai hospital in Manhattan, and a few months later moved to the Bronx where I currently reside. I am from New York City, more specifically, the Bronx. As a youth, I was very active and in love with sports. I spent most of my time at the park or at the gym either playing baseball or basketball. <a class="readmore" href = "aa-about.php"> Read More</a></p><!---insert small about me-->

		<h2>Casey Brentnall</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/cb.jpg" alt="Rochester City Skyline">
				<figcaption>Rochester City Skyline</figcaption>
			</figure>
			<p>I was born in Farmington, New York. Farmington is a town located in the northern part of Ontario County, New York, United States. The population was 11,825 at the 2010 census. Farmington is about twenty-five miles southeast of Rochester, New York. The town was named after Farmington, Connecticut. Farmington was part of the Phelps and Gorham Purchase. The town was formed along with its county in 1789, and settlement of the region began the same year. <a class="readmore" href = "cb-about.php"> Read More</a></p><!---insert small about me-->

		<h2>Bei Lu</h2>
			<figure> <!--images of place where each person is from, round-->
				<img src="images/bl.jpg" alt="Shanghai City Skyline">
				<figcaption>Shanghai City Skyline</figcaption>
			</figure>
			<p>Charlie studies in University of Rochester, double majoring in psychology and computer science. During her time in Rochester, she passionately devotes to social and developmental psychology and human computer interaction. Her interest in developmental psychology led her to contribute in the university kid's lab, while her knowledge in computer science helps her come up with solutions to meliorate the behavior coding system in psychology researches. She also has research experience in Zhejiang University , where she assisted similar developmental psychology researches on children's temperament. <a class="readmore" href = "bl-about.php"> Read More</a></p><!---insert small about me-->
		</article>


		<body>
			<h1>Leave Us Your Feedback</h1>
		        <form method = "post" action = "form.php">
		            <div>
		                <label for="">Name: </label>
		                <input type="text" name="name" id="name">
		            </div>
		            <div>
		                <label for="">Email: </label>
		                <input type="text" name="email" id="email">
		            </div>
		            <div>
		                <label for="">Tell us how computer science and business interconnect in careers: </label>
		                <input type="text" name="careers" id="careers">
		            </div>
		            <input type="submit">
		        </form>
		</body>


		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
>>>>>>> 1d6627fd0cdc7ce7db5827026208a8eb28efe067
</html>