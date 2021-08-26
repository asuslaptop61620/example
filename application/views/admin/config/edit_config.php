<?php $this->load->view('admin/theme/message'); ?>
<section class="content-header">
   <section class="content">
   		<div class="" id="modal-id">
   			<div class="modal-dialog" style="width: 100%;margin:0;">
   				<div class="modal-content">
   					<div class="modal-header">
   						<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
   						<h4 class="modal-title"><i class="fa fa-cogs"></i> <?php echo $this->lang->line("general settings");?></h4>
   					</div>
   					<form class="form-horizontal text-c" enctype="multipart/form-data" action="<?php echo site_url().'admin_config/edit_config';?>" method="POST">		     
			        <div class="modal-body">
			        	<div class="row">
			        		<!-- brand settings -->
			        		<div class="col-xs-12 col-md-6">
			        			<fieldset style="padding:30px; min-height: 450px;">
			        				<legend class="block_title"><i class="fa fa-flag"></i> <?php echo $this->lang->line('Brand Settings'); ?></legend>

						           	<div class="form-group">
						             	<label for=""><i class="fa fa-globe"></i> <?php echo $this->lang->line("Application Name");?> </label>
				               			<input name="product_name" value="<?php echo $this->config->item('product_name');?>"  class="form-control" type="text">		          
				             			<span class="red"><?php echo form_error('product_name'); ?></span>
						            </div>

						            <div class="form-group">
						             	<label for=""><i class="fa fa-compress"></i> <?php echo $this->lang->line("Application Short Name");?> </label>
				               			<input name="product_short_name" value="<?php echo $this->config->item('product_short_name');?>"  class="form-control" type="text">
				             			<span class="red"><?php echo form_error('product_short_name'); ?></span>
						            </div>

			        				
					              	<div class="form-group">
						              	<label for=""><i class="fa fa-briefcase"></i> <?php echo $this->lang->line("company name");?></label>
				               			<input name="institute_name" value="<?php echo $this->config->item('institute_address1');?>"  class="form-control" type="text">	
				             			<span class="red"><?php echo form_error('institute_name'); ?></span>
						            </div>
						            <div class="form-group">
						             	<label for=""><i class="fa fa-map-marker"></i> <?php echo $this->lang->line("company address");?></label>
				               			<input name="institute_address" value="<?php echo $this->config->item('institute_address2');?>"  class="form-control" type="text">
				             			<span class="red"><?php echo form_error('institute_address'); ?></span>
						           </div>
						           <div class="row">
							           <div class="col-xs-12 col-md-6">
								           <div class="form-group">
								             	<label for=""><i class="fa fa-envelope"></i> <?php echo $this->lang->line("company email");?> *</label>
						               			<input name="institute_email" value="<?php echo $this->config->item('institute_email');?>"  class="form-control" type="email">
						             			<span class="red"><?php echo form_error('institute_email'); ?></span>
								           </div>  
								        </div>
								        <div class="col-xs-12 col-md-6">	
								            <div class="form-group">
								             	<label for=""><i class="fa fa-mobile"></i> <?php echo $this->lang->line("company phone/ mobile");?></label>
						               			<input name="institute_mobile" value="<?php echo $this->config->item('institute_mobile');?>"  class="form-control" type="text">
						             			<span class="red"><?php echo form_error('institute_mobile'); ?></span>
								           </div>
							       		</div>
						           </div>
						          
			        			</fieldset>
			        		</div>

							<!-- preferences settings -->
		        			<div class="col-xs-12 col-md-6">
				        		<fieldset style="padding:30px;min-height: 450px;">
				        			<legend class="block_title"><i class="fa fa-tasks"></i> <?php echo $this->lang->line('Preference Settings'); ?></legend>			        		        			

									<!-- complete visitor and SEO analytics -->
						           	<div class="form-group">
						             	<label for="" style="margin-top: -7px;"><i class="fa fa-shield-alt"></i> <?php echo $this->lang->line("slogan");?></label>
			             	  			<input name="slogan" value="<?php echo $this->config->item('slogan');?>"  class="form-control" type="text">		          
			             				<span class="red"><?php echo form_error('slogan'); ?></span>
						           	</div>

									<!-- Email sending option -->
						           	<div class="form-group">
						             	<label for="email_sending_option"><i class="fa fa-at"></i> <?php echo $this->lang->line('Email sending option');?></label> 
				               			<?php	
					               			if($this->config->item('email_sending_option') == '') $selected = 'php_mail';
					               			else $selected = $this->config->item('email_sending_option');
					               			$email_sending_option['php_mail']=$this->lang->line('I want to use native PHP mail option.');
					               			$email_sending_option['smtp']=$this->lang->line('I want to use SMTP option.');
											echo form_dropdown('email_sending_option',$email_sending_option,$selected,'class="form-control" id="email_sending_option"');  
										?>
				             			<span class="red"><?php echo form_error('email_sending_option'); ?></span>
						           	</div>

									<!-- Time Zone -->
						            <div class="form-group">
						             	<label for=""><i class="fa fa-clock-o"></i> <?php echo $this->lang->line("time zone");?></label>          			
				               			<?php	$time_zone['']=$this->lang->line('time zone');
										echo form_dropdown('time_zone',$time_zone,$this->config->item('time_zone'),'class="form-control" id="time_zone"');  ?>		          
				             			<span class="red"><?php echo form_error('time_zone'); ?></span>
						            </div> 
									
									<!-- Master Password -->
						           	<div class="form-group">
						             	<label for=""><i class="fa fa-key"></i> <?php echo $this->lang->line("Master Password (will be used for login as user.)");?></label>
				               			<input name="master_password" value="******"  class="form-control" type="text">
				             			<span class="red"><?php echo form_error('master_password'); ?></span>
						           	</div>

									<!-- Language and Back-end Theme -->
		                         	<div class="row">
		           		            	<!-- language -->
		                         		<div class="col-xs-12 col-md-6">
			           			            <div class="form-group">
			           			             	<label for=""><i class="fa fa-language"></i> <?php echo $this->lang->line("language");?></label>            			
			           	               			<?php
			           							$select_lan="english";
			           							if($this->config->item('language')!="") $select_lan=$this->config->item('language');
			           							echo form_dropdown('language',$language_info,$select_lan,'class="form-control" id="language"');  ?>		          
			           	             			<span class="red"><?php echo form_error('language'); ?></span>
			           			            </div>
		           			        	</div>
		           					
			           					<!-- Back-end Theme settings -->
			           					<div class="col-xs-12 col-md-6">
			           			            <div class="form-group">
			           			             	<label for=""><i class="fa fa-window-restore"></i> <?php echo $this->lang->line("Back-end Theme");?> </label>            			
			           	               			<?php 
			           	               			$select_theme="skin-black-light";
			           							if($this->config->item('theme')!="") $select_theme=$this->config->item('theme');
			           							echo form_dropdown('theme',$themes,$select_theme,'class="form-control" id="theme"');  ?>		          
			           	             			<span class="red"><?php echo form_error('Back-end Theme'); ?></span>
			           			            </div>
			           			        </div>
		           		        	</div>
						        </fieldset>
						    </div>
			        		     		
			        	</div>

			        	<br>
			        	<div class="row">		        	
							<div class="col-xs-12 col-md-6">
				        		<fieldset style="padding:30px;min-height: 480px;">
				        			   <legend class="block_title"><i class="fa fa-image"></i> <?php echo $this->lang->line("Logo & Favicon Settings");?></legend>

				        			   <!-- Logo -->
							           <div class="form-group text-center">
							             	<label for=""><?php echo $this->lang->line("logo");?></label>
						           			<div class='text-center' style="padding:10px;"><img class="img-responsive center-block" src="<?php echo base_url().'assets/images/logo.png';?>" alt="Logo"/></div>
					               			<small><?php echo $this->lang->line("Max Dimension");?> : 600 x 300, <?php echo $this->lang->line("Max Size");?> : 200KB,  <?php echo $this->lang->line("Allowed Format");?> : png</small>
					               			<input name="logo" class="form-control" type="file">		          
					             			<span class="red"> <?php echo $this->session->userdata('logo_error'); $this->session->unset_userdata('logo_error'); ?></span>
							           </div> 
										<br><br>
							           <div class="form-group text-center">
							             	<center><label for=""><?php echo $this->lang->line("favicon");?></label></center>
					             			<div class='text-center'><img class="img-responsive center-block" src="<?php echo base_url().'assets/images/favicon.png';?>" alt="Favicon"/></div>
					               			 <small><?php echo $this->lang->line("Max Dimension");?> : 32 x 32, <?php echo $this->lang->line("Max Size");?> : 50KB, <?php echo $this->lang->line("Allowed Format");?> : png</small>
					               			<input name="favicon"  class="form-control" type="file">		          
					             			<span class="red"><?php echo $this->session->userdata('favicon_error'); $this->session->unset_userdata('favicon_error'); ?></span>
							           </div>
				        		</fieldset>	
			        		</div>	        		
			        	</div>             
			        </div> <!-- /.box-body --> 
   					<div class="modal-footer" style="text-align:center;">
   						<button name="submit" type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i> <?php echo $this->lang->line("Save");?></button>
	              		<button  type="button" class="btn btn-default btn-lg" onclick='goBack("admin_config",1)'><i class="fa fa-remove"></i> <?php echo $this->lang->line("Cancel");?></button>
   					</div>
   					</form>
   				</div>
   			</div>
   		</div>     	
   </section>
</section>




