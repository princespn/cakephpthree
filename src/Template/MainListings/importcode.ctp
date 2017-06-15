<hr>
<h1 class="sub-header"><?php __('Import Amazon Inventory');?></h1>
<hr>

 <div class="panel panel-info import-panel">
      <div class="panel-heading">
        <h3 class="panel-title"><?php __('Import Amazon data Inventory');?></h3>
      </div>
      <div class="panel-body">
	     <?php  echo $this->Form->create('main-listings', ['url' => ['action' => 'importcode'],'enctype' => 'multipart/form-data']); ?>
        <?php // echo $this->Form->create('MainListing',array('action' => 'importcode','enctype'=>'multipart/form-data'));?>
          <div class="form-group">          
            <?php echo $this->Form->input('file', array('label'=>'Import Amazon Compare Inventory','type'=>'file') );?> 
          </div>
      <?php echo $this->Form->button('Import listing', array('id'=>'submit','class'=>'btn btn-primary btn-sm','disabled'=>'disabled','type'=>'submit'));
?> <?php echo $this->Form->end();?>
      </div>
 </div>
<?php if (!empty($anything)){ ?>
<div class="table-responsive">    
    <?php $key = $anything['errors']; if(!empty($key)):?>
   <table class="table table-bordered table-striped table-hover">
       <thead>        
        <tr>
          <th class="wid-20">#</th>
          <th class="wid-200">SKU</th>
          <th>Error</th>
        </tr>
      </thead>

<?php endif; $str = 0; foreach ($key as $value){  ?>
  <tbody><?php if(!empty($value)): ?>
                    <tr>  
                        <td></td>
                        <td><?php $res = explode(":", $value);	if($str !== $res[1]){echo $res[1];$str = $res[1];} ?></td>
                        <td><?php $res1 = explode("sku", $res[0]); echo $res1[1]; ?></td>
                    </tr>
  <?php endif ?>                   
<?php } ?>
  </tbody>
  </table>
  </div>
 <?php } else { ?>
 <div id="progress" style="display: none;"><?php //echo $html->image('home2.gif');?></div>
<?php } ?>
<script>
$(document).ready(function(){
	$('#file').change(function(){
	$('#submit').removeAttr('disabled');
	
	});
	$('#submit').click(function(){
		$('#progress').show(1000);	
	
	});
    
});
</script>