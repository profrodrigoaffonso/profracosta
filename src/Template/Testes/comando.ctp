<?= $this->Form->create('comandos',['id'=>'form_comando'])?>
<?= $this->Form->control('comando',['onchange'=>'alterar','options'=>['on'=>'on','off'=>'off'],'value'=>$comando['comando']])?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>
<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript">
	function alterar(){
		alert('alterar');
	}
</script>