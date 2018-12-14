<?php
if(isset($notification))
{
	$type = $notification['type'];
	$message = $notification['message'];
	if($type == "error")
	{
		?>
		<div class="notification notification_error"><i class='fas fa-exclamation-triangle'></i> <?php echo $message?></div>
		<?php
	}
	elseif($type == "success")
	{
		?>
		<div class="notification notification_success"><i class="fas fa-check-circle"></i> <?php echo $message?></div>
		<?php
	}
}
?>