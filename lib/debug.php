<div class="row">
	<div class="col-sm-4">
		<h2>SERVER </h2>
		<?php var_dump($_SERVER); ?>
	</div>
	<div class="col-sm-4">
		<h2>CONSTANTS</h2>
		<?php var_dump(get_defined_constants()); ?>
	</div>
	<div class="col-sm-4">
		<h2>SESSION</h2>
		<?php var_dump($_SESSION); ?>
	</div>
</div>