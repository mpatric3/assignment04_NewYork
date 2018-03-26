<?php include "inc/html-top.inc";?>
	<body>
		<!--computer style/design, techno, fonts should be modern/techy-->
		<!--banner (header) and navigation need to be positoined as fixed so that when you slide down you can still see them-->

		<section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section> <!--.banner-->

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

		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
</html>