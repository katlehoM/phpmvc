<br>
<div class= "index large-4 medium-4 large-offset-4 medium-offset-4 columns">
<div class="panel">
    <h2 class="text-center">Upload File</h2>
    <?= $this->Form->create();?>
        <?= $this->Form->input('name');?>
        
        <?= $this->Form->submit('Upload', array('class' => 'button'));?>

    <?= $this->Form->end(); ?>
    </div>






</div>