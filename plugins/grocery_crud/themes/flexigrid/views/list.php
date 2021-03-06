<?php 

	// $column_width = (int)(80/count($columns));
	// 3 % space reserved for SL
	$column_width = (int)(77/count($columns));
	
	if(!empty($list)){
?><div class="bDiv" style="padding:0 15px !important;">
		<table cellspacing="0" cellpadding="0" border="0" id="flex1">
		<thead>
			<tr class='hDiv'>
				<?php foreach($columns as $column){?>
				<th width='<?php if($column->field_name != "SL") echo $column_width.'%'; else echo "3%";?>'>
					<div class="text-center field-sorting <?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?><?php echo $order_by[1]?><?php }?>" 
						rel='<?php echo $column->field_name?>'>
						<?php  if($column->field_name != "SL") echo $column->display_as?>
					</div>
				</th>
				<?php }?>
				<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
				<th align="left" abbr="tools" axis="col1" class="" width='20%'>
					<div class="text-center">
						<?php echo $this->l('list_actions'); ?>
					</div>
				</th>
				<?php }?>
			</tr>
		</thead>		
		<tbody>
<?php foreach($list as $num_row => $row){ ?>        
		<tr  <?php if($num_row % 2 == 1){?>class="erow"<?php }?>>
			<?php foreach($columns as $column){?>
			<td width='<?php if($column->field_name != "SL") echo $column_width.'%'; else echo "3%";?>' class='<?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?>sorted<?php }?>'>
				<div class='text-center' <?php if($column->field_name=="SL") echo "style='background: rgba(0, 0, 0, 0) linear-gradient(to bottom, #f9f9f9 0px, #efefef 100%) repeat-x scroll 0 0;'"; ?>><?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?></div>
			</td>
			<?php }?>
			<?php if(!$unset_delete || !$unset_edit || !$unset_read || !empty($actions)){?>
			<td align="left" width='20%'>
				<div class='tools'>					
					<?php if(!$unset_read){?>
						<a href='<?php echo $row->read_url?>' title='<?php echo $this->l('list_view')?> <?php echo $subject?>' class="edit_button btn btn-outline-info"><i class='fa fa-eye'></i></a>
					<?php }?>
					<?php if(!$unset_edit){?>
						<a href='<?php echo $row->edit_url?>' title='<?php echo $this->l('list_edit')?> <?php echo $subject?>' class="edit_button btn btn-outline-warning"><i class='fa fa-edit'></i></a>
					<?php }?>
					<?php if(!$unset_delete){?>
                    	<!-- <a href='<?php echo $row->delete_url?>' title='<?php echo $this->l('list_delete')?> <?php echo $subject?>' class="delete-row btn btn-outline-danger" >
                    		<i class='fa fa-trash'></i>
                    	</a> -->
                    	<!-- delete function has been moved to js_include_back.php to implement alertify -->
                    	<a title='<?php echo $this->l('list_delete')?> <?php echo $subject?>' onclick='delete_crud_row("<?php echo $row->delete_url?>")' class="btn btn-outline-danger" >
                    		<i class='fa fa-trash'></i>
                    	</a>
                    <?php }?>
					<?php 
					if(!empty($row->action_urls)){
						foreach($row->action_urls as $action_unique_id => $action_url){ 
							$action = $actions[$action_unique_id];
					?>
							<a href="<?php echo $action_url; ?>" title="<?php echo $action->label?>" class="btn btn-outline-primary <?php echo $action->css_class;?> crud-action" title="<?php echo $action->label?>"><?php 
								if(!empty($action->image_url))
								{
									if (strpos($action->image_url, 'login.png') !== false) $ACTIONIMAGEURL='fa fa-facebook'; // becuase we passed image url as param in past
									else $ACTIONIMAGEURL=$action->image_url;
									?><i class='<?php echo $ACTIONIMAGEURL; ?>'></i><?php 	
								}
							?></a>		
					<?php }
					}
					?>					
                    <div class='clear'></div>
				</div>
			</td>
			<?php }?>
		</tr>
<?php } ?>        
		</tbody>
		</table>
	</div>
<?php }else{?>
	<br/>
	&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $this->l('list_no_items'); ?>
	<br/>
	<br/>
<?php }?>

	
