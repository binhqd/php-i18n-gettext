<p><?php echo _t("This is first paragraph");?></p>
	
<h2><?php echo _t("This is heading 2");?></h2>

<?php $people = 9;?>
<h3><?php echo _t("There are {number_of_people} {peopleText} in this room", array(
	"{number_of_people}"	=> $people,
	"{peopleText}"	=> _p("person", "people", $people)
));?></h3>
	
<h2><?php echo _tmz("This is member zone");?></h2>