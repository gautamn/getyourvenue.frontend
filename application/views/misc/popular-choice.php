<?php
$this->load->model('popularchoice_model');
$popular_choice_model=new Popularchoice_model();
$popular_choices=$popular_choice_model->get_popular_choice();
?>
<div class="popular-choice">
	<h3>Popular Choice</h3>
	<ul>
		<?php foreach ($popular_choices as $popular_choice): ?>
		<li><a href="#"><?php echo $popular_choice['popularchoicename'] ?></a></li>
		<?php endforeach ?>
	</ul>
</div>