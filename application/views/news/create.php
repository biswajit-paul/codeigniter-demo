<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create', array( 'id' => 'news_create', 'class' => 'news_create news_form' )); ?>

	<div class="input-group">
	  <label for="title">Title</label>
	  <input type="input" name="title" class="form-control" />		
	</div>

	<div class="input-group">
	  <label for="text">Text</label>
	  <textarea name="text" class="form-control" rows="5"></textarea>		
	</div>

	<div class="input-group">
  	<input type="submit" name="submit" class="btn btn-default" value="Create news item" />
  </div>

<?php echo form_close(); ?>