<?php include "inc/html-top.inc";?>
    
    <body>
        <section class = "banner">
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>
        </section>

        <div class = "container">
        
        <article>
            
		<div class= "container" style="z-index: 1;">

		<!--Meghan, add a jquery slider here--> 
		<div class = "slider" style="z-index: -1;"> 
        	<img src="images/aa.jpg" alt="Alejandro Abreu Picture">
			<img src="images/cb.jpg" alt="Casey Brentnall Picture">
			<img src="images/bl.jpg" alt="Bei Lu Picture">
		</div>

		<article>


		<h2>Alejandro Abreu</h2>
			<figure> 
				<img src="images/aa.jpg" alt="New York City Skyline">
				<figcaption>New York City Skyline</figcaption>
			</figure>
			<p>My name is Alejandro Abreu, and I was born on September 6th, 1995. I was born in Monte Sinai hospital in Manhattan, and a few months later moved to the Bronx where I currently reside. I am from New York City, more specifically, the Bronx. As a youth, I was very active and in love with sports. I spent most of my time at the park or at the gym either playing baseball or basketball. <a class="readmore" href = "aa-about.php"> Read More</a></p>

		<h2>Casey Brentnall</h2>
			<figure>
				<img src="images/cb.jpg" alt="Rochester City Skyline">
				<figcaption>Rochester City Skyline</figcaption>
			</figure>
			<p>I was born in Farmington, New York. Farmington is a town located in the northern part of Ontario County, New York, United States. The population was 11,825 at the 2010 census. Farmington is about twenty-five miles southeast of Rochester, New York. The town was named after Farmington, Connecticut. Farmington was part of the Phelps and Gorham Purchase. The town was formed along with its county in 1789, and settlement of the region began the same year. <a class="readmore" href = "cb-about.php"> Read More</a></p>

		<h2>Bei Lu</h2>
			<figure>
				<img src="images/bl.jpg" alt="Shanghai City Skyline">
				<figcaption>Shanghai City Skyline</figcaption>
			</figure>
			<p>Charlie studies in University of Rochester, double majoring in psychology and computer science. During her time in Rochester, she passionately devotes to social and developmental psychology and human computer interaction. Her interest in developmental psychology led her to contribute in the university kid's lab, while her knowledge in computer science helps her come up with solutions to meliorate the behavior coding system in psychology researches. She also has research experience in Zhejiang University , where she assisted similar developmental psychology researches on children's temperament. <a class="readmore" href = "bl-about.php"> Read More</a></p>


		<!--Different Profile--> 
		<h2> Olatunde Oshulaja </h2>
			<figure>
				<img src="images/oo.jpg" alt="Olatunde Oshunlaja">
				<figcaption> London Skyline </figcaption>
			</figure>
			<p>My name is Olatunde Oshunlaja. I know right pretty complex to pronounce so you can just call me "Ola". I am Junior who is majoring in Business and minoring in Computer Science.I Love traveling the world and experiencing new cultures. An interesting tidbit about me is that I have been to school in three different countries Nigeria, England and now the US. I speak two languages English and Yoruba. <a class="readmore" href = "olatunde.php"> Read More</a></p>
		</article>


		<body>
			<h1>Leave Us Your Feedback:</h1>
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
		            <input type="submit" value="Submit Feedback">
		        </form>
		</body>


		<?php include "inc/footer.inc"; ?>
		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
	<!---1d6627fd0cdc7ce7db5827026208a8eb28efe067-->
</html>