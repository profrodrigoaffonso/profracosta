<?=$this->Form->create('gerar',['id'=>'form_gerar'])?>
<?=$this->Form->control('tipo',['type'=>'hidden','value'=>'N'])?>
<?=$this->Form->end()?>
<button onclick="gerar('N')">Normal</button>
<button onclick="gerar('P')">Preferencial</button>
<script type="text/javascript" src="/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript">
	function gerar(tipo){
		$('#tipo').val(tipo);
		$('#form_gerar').submit();
	}
</script>
