<div class="input-append pull-right">
	<?php
		//debug($this->request);
		echo $this->Form->create();
			echo $this->Form->input('search',array('url'=>$this->request->here.'?'.time(),'div'=>false, 'class'=>'','label'=>false));
			echo $this->Form->submit('Search',array('class'=>'btn','div'=>false));
		echo $this->Form->end();
	?>
</div>