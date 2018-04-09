<?php
/* @var $this SiteController
 * @var $question Question */

$this->pageTitle=Yii::app()->name;

$nextUrl = Yii::app()->createUrl('site/question',array('id'=>$question->id+1));
$prevUrl = Yii::app()->createUrl('site/question',array('id'=>$question->id-1));

?>

<div class="question center-block">
	<h1><?php echo $question->text; ?></h1>
</div>

<div class="answers center-block">

	<ul>
		<?php foreach($question->answers as $answer): ?>

		<li class="answer list-group-item">
			<div class="answer-text hidden">
				<?php echo $answer->text; ?>
				<span class="score">
					<?php echo $answer->score; ?>
				</span>
			</div></li>

		<?php endforeach; ?>

	</ul>

</div>


<script type="text/javascript">

	$(document).ready(function(){

		$(".answer").click(function(event){

			$(this).find(".answer-text").removeClass('hidden');

		})

	})


	var nextUrl = '<?php echo $nextUrl; ?>';
	var prevUrl = '<?php echo $prevUrl; ?>';

	$(document).keydown(function(e){
		if (e.keyCode == 39) {
			window.location.href = nextUrl;
			return false;
		}
		if (e.keyCode == 37) {
			window.location.href = prevUrl;
			return false;
		}
	});

</script>