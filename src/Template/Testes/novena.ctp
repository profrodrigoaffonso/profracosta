<?= $this->Form->create('comandos',['id'=>'form_comando','autocomplete'=>'off'])?>
<?= $this->Form->control('inicio',['value'=>$dt_inicio])?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>
<?php
//debug($dias);
if(!empty($dias)){
	foreach ($dias as $key => $dia) {
		echo "{$key} - ".date("d/m/Y", strtotime($dia))."<br>";
	}
}
?>
<link rel="stylesheet" type="text/css" href="/jquery-ui/jquery-ui.min.css">
<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript">
	$('#inicio').datepicker({ dateFormat: 'dd/mm/yy' });
</script>