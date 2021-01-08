<?php 

    class Teacher {
        var $img;
        var $name;
        var $job;
        var $word;
        var $twitter;
        var $facebook;
        var $linkedin;
        var $instagram;
    }

    function createTeacher($img, $name, $job,
        $word = "I am an ambitious workaholic, but apart from that, pretty simple person.",
        $twitter = "#",
        $facebook = "#", 
        $linkedin = "#", 
        $instagram = "#"
       ) {
        $teacher = new Teacher;

			$teacher->img = $img;
			$teacher->name = $name;
			$teacher->job = $job;
			$teacher->word = $word;
			$teacher->twitter = $twitter;
			$teacher->facebook = $facebook;
			$teacher->linkedin = $linkedin;
			$teacher->instagram = $instagram;
			
        return $teacher;
    }

    $teachers = array(

        createTeacher("images/teacher-1.jpg", "Bianca Wilson", "Teacher"),
        createTeacher("images/teacher-2.jpg", "Mitch Parker", "English Teacher"),
        createTeacher("images/teacher-3.jpg", "Stella Smith", "Art Teacher"),
        createTeacher("images/teacher-4.jpg", "Monshe Henderson", "Science Teacher"),

    );

?>

<!--	Out Teacher	-->
<!--	Start section of Out Teacher	-->
<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Certified</span> Teachers</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
            <?php 
                foreach($teachers as $teacher){

                    echo "
                        <div class='col-md-6 col-lg-3 ftco-animate'>
                            <div class='staff'>
                                <div class='img-wrap d-flex align-items-stretch'>
                                    <div class='img align-self-stretch' style='background-image: url(" . $teacher->img .");'></div>
                                </div>
                                <div class='text pt-3 text-center'>
                                    <h3>" .$teacher->name . "</h3>
                                    <span class='position mb-2'>" .$teacher->job . "</span>
                                    <div class='faded'>
                                        <p>" .$teacher->word . "</p>
                                        <ul class='ftco-social text-center'>
                                            <li class='ftco-animate'><a href='" .$teacher->twitter . "'><span class='icon-twitter'></span></a></li>
                                            <li class='ftco-animate'><a href='" .$teacher->facebook . "'><span class='icon-facebook'></span></a></li>
                                            <li class='ftco-animate'><a href='" .$teacher->linkedin . "'><span class='icon-linkedin'></span></a></li>
                                            <li class='ftco-animate'><a href='" .$teacher->instagram . "'><span class='icon-instagram'></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";

                };
            ?>
		</div>
	</div>
</section>
<!--	Start section of Out Teacher	-->
