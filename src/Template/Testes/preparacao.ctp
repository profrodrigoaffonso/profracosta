<?= $this->Form->create('comandos',['id'=>'form_comando','autocomplete'=>'off'])?>
<?= $this->Form->control('inicio',['label'=>'Data de consagração','value'=>$dt_inicio])?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>
<?php
//debug($dias);
if(!empty($dias)){
	echo "Preparação: de ".date("d/m/Y", strtotime($dias['preparacao']['de']))." até ".date("d/m/Y", strtotime($dias['preparacao']['ate'])).'<br>';
	echo "1ª semana: de ".date("d/m/Y", strtotime($dias['1_semana']['de']))." até ".date("d/m/Y", strtotime($dias['1_semana']['ate'])).'<br>';
	echo "2ª semana: de ".date("d/m/Y", strtotime($dias['2_semana']['de']))." até ".date("d/m/Y", strtotime($dias['2_semana']['ate'])).'<br>';
	echo "3ª semana: de ".date("d/m/Y", strtotime($dias['3_semana']['de']))." até ".date("d/m/Y", strtotime($dias['3_semana']['ate'])).'<br>';
}

?>
<link rel="stylesheet" type="text/css" href="/jquery-ui/jquery-ui.min.css">
<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript">
	$('#inicio').datepicker({ dateFormat: 'dd/mm/yy' });
</script>