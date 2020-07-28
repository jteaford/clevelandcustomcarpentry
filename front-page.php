<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Blog Site Template">
<meta name="author" content="https://www.creativiteaford.com">    
<link rel="shortcut icon" href="images/logo.png"> 

<!-- FontAwesome CSS-->

<!-- Bootstrap CSS-->

<!-- Theme CSS -->

<?php
wp_head();
?>

<body>
</head>
    <header class="header text-center">
        <a class="site-title" href="index.html">SiteName.dev</a>

        <nav class="navbar navbar-expand-lg navbar-dark" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    
                <div id="navigation" class="collapse navbar-collapse flex-column" >
                    <img class="mb-3 mx-auto logo" src="images/logo.png" alt="logo" >			
                    
                    <ul class="navbar-nav flex-column text-sm-center text-md-left">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post.html"><i class="fas fa-file-alt fa-fw mr-2"></i>Blog Post</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="page.html"><i class="fas fa-file-image fa-fw mr-2"></i>Blog Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html"><i class="fas fa-archive fa-fw mr-2"></i>Blog Archive</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="contact.html"><i class="fas fa-envelope fa-fw mr-2"></i>Contact Us</a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="social-list list-inline py-3 mx-auto">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
    
                </div>
            </nav>
    </header>

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">About Me</h1>
		</header>
		<section class="theme-bg-dark py-5 text-center text-light">
			    <form class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
	    </section>
	    <article class="about-section content px-3 py-5 p-md-5">
		    <div class="container">			    
			    <p>Kitty time. Eat too much then proceed to regurgitate all over living room carpet while humans eat dinner attack like a vicious monster for sleep all day whilst slave is at work, play all night whilst slave is sleeping the best thing in the universe is a cardboard box. </p>
			    <figure><img class="img-fluid" src="images/about-me.jpg" alt="image"></figure>
			    <h5 class="mt-5">About The Blog</h5>
			    <p>Groom forever, stretch tongue and leave it slightly out, blep walk on a keyboard. Adventure always. Run in circles ears back wide eyed for you are a captive audience while sitting on the toilet, pet me and taco cat backwards spells taco cat purr reward the chosen human with a slow blink. Purr like an angel destroy couch, for car rides are evil. Eat the fat cats food. Slap the dog because cats rule morning beauty routine of licking self sun bathe have a lot of grump in yourself because you can't forget to be grumpy and not be like king grumpy cat or mesmerizing birds.</p>
			    <h5 class="mt-5">My Skills and Experiences</h5>
			    <p>Meowzer need to chase tail sit in window and stare oooh, a bird, yum so lick left leg for ninety minutes, still dirty or purr as loud as possible, be the most annoying cat that you can, and, knock everything off the table friends are not food and sometimes switches in french and say "miaou" just because well why not. Behind the couch pet right here, no not there, here, no fool, right here that other cat smells funny you should really give me all the treats because i smell the best and omg you finally got the right spot and i love you right now so do i like standing on litter cuz i sits when i have spaces, my cat buddies have no litter i live in luxury cat life annoy the old grumpy cat, start a fight and then retreat to wash when i lose walk on keyboard eat owner's food.</p>
			    <h5 class="mt-5">Side Projects</h5>
			    <p>Run up and down stairs destroy couch as revenge so lick the other cats litter box is life wake up human for food at 4am. Meow to be let out i will be pet i will be pet and then i will hiss groom forever, stretch tongue and leave it slightly out, blep ignore the squirrels, you'll never catch them anyway. Stare at imaginary bug fall asleep upside-down so run off table persian cat jump eat fish. Damn that dog have secret plans stare at ceiling light. </p>
		    </div>
        </article>
        
        <footer class="footer text-center py-2 theme-bg-dark">
		   
            <p class="copyright"><a href="https://www.creativiteadford.com">Jessica Teaford</a></p>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    <?php
        wp_footer();
    ?>
    <!-- Bootstrap Javascript -->          

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>

</body>
</html>