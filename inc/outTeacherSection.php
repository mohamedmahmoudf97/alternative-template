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

        createTeacher("images/mother.svg", "Government education", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"),
        createTeacher("images/father.svg", "Private education", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"),
        createTeacher("images/03_undraw_collab_8oes.svg", "Education for people with special needs", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"),
        createTeacher("images/undraw_true_friends_c94g.png", "Supporting students", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua"),

    );

?>

<!--	Out Teacher	-->
<!--	Start section of Out Teacher	-->
<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Kinds Of</span> Education</h2>
				<p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                </p>
			</div>
		</div>
		<div class="row">
            <?php
                foreach($teachers as $teacher){

                    echo "
                        <div class='col-md-6 col-lg-3 ftco-animate shadow-sm'>
                            <div class='staff'>
                                <div class='img-wrap d-flex align-items-stretch'>
                                    <img class='w-100 h-100' src='" . $teacher->img ."' />
                                </div>
                                <div class='text pt-3 text-center'>
                                    <h3>" .$teacher->name . "</h3>
                                    <span class='position mb-2'>" .$teacher->job . "</span>
                                    
                                    <a href='' class='btn btn-secondary'>Learn Now</a>
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
