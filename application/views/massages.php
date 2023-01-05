<?php if ($this->session->has_userdata('succes')) { ?>
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-check"></i> Peringatan!</h5>
	<?=$this->session->flashdata('succes'); ?>
</div>
<?php }?>

<?php if ($this->session->has_userdata('trash')) { ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-trash"></i> Peringatan!</h5>
	<?=$this->session->flashdata('trash'); ?>
</div>
<?php }?>


<?php if ($this->session->has_userdata('error')) { ?>
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-ban"></i> Peringatan!</h5>
	<?=$this->session->flashdata('error'); ?>
</div>
<?php }?>

<?php if ($this->session->has_userdata('update')) { ?>
<div class="alert alert-info alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-info"></i> Peringatan!</h5>
	<?=$this->session->flashdata('update'); ?>
</div>
<?php }?>

<?php if ($this->session->has_userdata('warning')) { ?>
<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan!</h5>
	<?=$this->session->flashdata('warning'); ?>
</div>
<?php }?>