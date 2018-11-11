<?= $this->Form->create('comandos',['id'=>'form_comando'])?>
<?= $this->Form->control('inicio')?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>
<?php
//debug($dias);
if(!empty($dias)){
	foreach ($dias as $key => $dia) {
		echo "{$key} - ".date("d/m/Y", strtotime($dia))."<br>";
	}
}
