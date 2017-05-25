<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?php
if((!empty($_POST['checkid'])) &&(!empty($_POST['exports']))){

$mapping = array('Linnworks Code','Category','Product name','Amazon SKU','Web SKU','Web UK RRP','DM RRP','Amazon UK RRP','Web Sale Price UK','Web Sale Price Tesco','Web Sale Price dm','Amazon UK Sale Price','Web DE RRP','Amazon DE RRP','Web FR RRP','Amazon FR RRP','Web DE Sale Price','Amazon DE Sale Price','Web FR Sale Price','Amazon FR Sale Price','Errors');
echo $csv->addRow($mapping);

foreach ($code_listings as $code_listing):
$line_code = array($code_listing['MainListing']['linnworks_code']);
$line_cate = array($code_listing['InventoryCode']['category']);
$line_name = array($code_listing['InventoryCode']['product_name']);
$line_ams = array($code_listing['MainListing']['amazon_sku']);
$line_sku = array($code_listing['Listing']['web_sku']);
$web_uk_rp = array($code_listing['Listing']['web_price_uk']);
$tasko_rp = array($code_listing['Listing']['web_price_dm']);
$uk_rp = array($code_listing['MainListing']['price_uk']);
$web_uk = array($code_listing['Listing']['web_sale_price_uk']);
$web_tasko = array($code_listing['Listing']['web_sale_price_tesco']);
$web_dm = array($code_listing['Listing']['web_sale_price_dm']);
$sale_price_uk = array($code_listing['MainListing']['sale_price_uk']);
$web_rrp_de = array($code_listing['Listing']['web_price_de']);
$rrp_de = array($code_listing['MainListing']['price_de']);
$web_rrp_fr = array($code_listing['Listing']['web_price_fr']);
$rrp_fr = array($code_listing['MainListing']['price_fr']);
$web_de = array($code_listing['Listing']['web_sale_price_de']);
$sale_price_de = array($code_listing['MainListing']['sale_price_de']);
$web_fr = array($code_listing['Listing']['web_sale_price_fr']);
$sale_price_fr = array($code_listing['MainListing']['sale_price_fr']);
$sale_error = array($code_listing['MainListing']['error']);
$line = array_merge($line_code, $line_cate,$line_name,$line_ams,$line_sku,$web_uk_rp,$tasko_rp,$uk_rp,$web_uk,$web_tasko,$web_dm,$sale_price_uk,$web_rrp_de,$rrp_de,$web_rrp_fr,$rrp_fr,$web_de,$sale_price_de,$web_fr,$sale_price_fr,$sale_error);
echo $csv->addRow($line);
endforeach;
$filename='code_listings';
echo $csv->render($filename);
}else{	
// echo $this->Session->flash(); ?>
 <hr>
<?php $actual_link = 'http://'.$_SERVER['HTTP_HOST']; ?>
 <h1 class="sub-header"><?=__('Linnworks codes and All Prices Comparison');?></h1>
 <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
      <?php  // echo $form->create('MainListing',array('action'=>'index','id'=>'saveForm')); ?>
        <div class="col-md-8 mobile-bottomspace">
         <?php // echo $form->checkbox('error',array('label'=>'','value'=>'error','class'=>'wid-20')); ?><?php echo $this->Paginator->sort('Error', 'error', array('direction' => 'desc','class'=>'btn btn-info btn-sm')); ?>
        <?php echo $this->Html->link(__('Import Prices', true), array('controller' => 'main_listings', 'action' => 'importcode'),array('class' => 'btn btn-info btn-sm')); ?>
         <button type="submit" disabled="disabled" value="exports" name="exports" id="exportfile" class="btn btn-primary btn-sm">Export Data</button>
        <?php echo $this->Html->link(__('Replace Or Del sku', true), array('controller' => 'main_listings', 'action' => 'repdelcode'),array('class' => 'btn btn-info btn-sm')); ?>
        </div>
        <div class="col-md-4">
         <div class="form-group margin-bottom-0">
           <div class="input-group">
            <span class="search-icon"><i aria-hidden="true" class="fa fa-search"></i></span>
            <?php echo $this->Form->input('all_item',array('label'=>'','placeholder'=>'Search Linnworks Code...', 'class'=>'form-control pa-left')); ?>
            <div class="input-group-btn"><?php echo $this->Form->button('Search', array('value'=>'submit','name'=>'submit','id'=>'submit','class'=>'btn btn-primary','type'=>'submit')); ?></div>
       </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
 <div class="table-responsive catname">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr id="head-table">
         <th colspan="5"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></th>
          <th colspan="6" class="text-center text-uppercase color-white gbp-bg"><?= __('Sale Price (GBP)');?></th>
          <th></th>
          <th colspan="7" class="text-center text-uppercase color-white eur-bg"><?= __('Sale Price (EUR)');?></th>         
        </tr>
       <tr>
        <th class="wid-20"><input name="selecctall" id="selecctall" type="checkbox"></th>
         <th><?= __('Linnworks code');?></th>
           <th><ul class="select-drop">
              <li class="dropdown"><a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Category <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php foreach ($categories as $category): ?>                     
                    <li><a href="<?php  echo  $actual_link ; ?>/main-listings/category/<?php  echo rawurlencode($category->CategoryName); ?>" target="_self"><?php  echo $category->CategoryName; ?></a></li>
                  <?php  endforeach; ?> 
                </ul>
              </li>
            </ul>
          </th>
          <th><?= __('Product name');?></th>
          <th class="<?= __('pink-price');?>"><?= __('RRP');?></th>
          <th><?= __('Web UK');?></th>
          <th><?= __('Tesco');?></th>
          <th><?= __('Amazon UK');?></th>
          <th><?= __('Amazon UK Prime');?></th>
          <th><?= __('Daily Mail');?></th> 
          <th><?= __('EBay');?></th>  
          <th class="<?= __('pink-price');?>"><?= __('RRP');?></th>
          <th><?= __('Web DE');?></th>
          <th><?= __('Amazon DE');?></th>
          <th><?= __('Amazon DE Prime');?></th>
          <th><?= __('Web FR');?></th>
          <th><?= __('Amazon FR');?></th>
          <th><?= __('Amazon FR Prime');?></th> 
          <th><?= __('CDiscount');?></th>  
        </tr>
      </thead>
      <tbody>
      <?php foreach ($mainListings as $mainListing): ?>
        <tr>
            <td><?php $productid = $this->Number->format($mainListing->id); if(!empty($mainListing->error)){$class ='checkerror';}else{$class ='checkbox1';}
            echo $this->Form->input('id',array('class'=>$class, 'selected'=>'selected','label'=>false,'multiple' => 'checkbox', 'value' =>$productid,'name'=>'checkid[]', 'type'=>'checkbox')); ?> <?php if(!empty($mainListing->error)){echo "&#8595;";} ?></td>
            <td class="wid-20"><?= h($mainListing->linnworks_code) ?></td>
            <td><?= h($mainListing->inventory_code->category) ?></td>
			  <td><?= h($mainListing->inventory_code->product_name) ?></td>          
            <td><?= h($mainListing->price_uk) ?></td>
            <td></td>
            <td></td>
             <td><?= h($mainListing->sale_price_uk) ?></td>
            <td><?= h($mainListing->sale_price_uk) ?></td>
            <td></td>
             <td><?= h($mainListing->sale_price_ebay) ?></td>
             <td><?= h($mainListing->price_de) ?></td> 
              <td></td>
              <td><?= h($mainListing->sale_price_de) ?></td>
              <td><?= h($mainListing->sale_price_de) ?></td>
               <td></td>
                <td><?= h($mainListing->sale_price_fr) ?></td>
				<td><?= h($mainListing->sale_price_fr) ?></td>
				<td><?= h($mainListing->sale_price_cdiscount) ?></td>

				
						 
			 </tr>
    <?php endforeach; ?>
    <?php echo $this->Form->end();?>
      </tbody>
    </table>
  </div>
 <hr>
<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
<ul class="pagination pagination-sm margin-0">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
</ul>
<script type="text/javascript">
$(document).ready(function() {
    $('#MainListingError').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkerror').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1" 
                $('#exportfile').removeAttr('disabled');
		$('#selecctall').attr('disabled','disabled');
            });
        }else{
            $('.checkerror').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
		$('#exportfile').attr("disabled", "disabled");
		$('#selecctall').removeAttr('disabled','disabled');
            });        
        }
    });
   
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1" 
		$('#exportfile').removeAttr('disabled');
		$('#MainListingError').attr('disabled','disabled');
            });
		$('.checkerror').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1" 
		 $('#exportfile').removeAttr('disabled');
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
		$('#exportfile').attr("disabled", "disabled");
		$('#MainListingError').removeAttr('disabled','disabled');
            }); 
		$('.checkerror').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
		$('#exportfile').attr("disabled", "disabled");
            }); 
        }
    });
   
});
</script>

<?php } 
