<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="color:red; text-align:left; font-size: 6px; " ><b><?php echo $error ?></b></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
