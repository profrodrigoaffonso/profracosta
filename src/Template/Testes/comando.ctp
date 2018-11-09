<?= $this->Form->create('comandos',['id'=>'form_comando'])?>
<?= $this->Form->control('comando',['options'=>['lon'=>'on','loff'=>'off'],'value'=>$comando['comando']])?>
<?= $this->Form->end()?>
<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript">
	$('#comando').change(function(){
		$('#form_comando').submit();
	})
</script>