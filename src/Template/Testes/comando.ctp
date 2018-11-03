<?= $this->Form->create()?>
<?= $this->Form->control('comando',['options'=>['on'=>'on','off'=>'off'],'value'=>$comando['comando']])?>
<?= $this->Form->submit()?>
<?= $this->Form->end()?>