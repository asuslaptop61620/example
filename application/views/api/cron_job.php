<div class="well well_border_left">
	<h4 class="text-center"> <i class="fa fa-clock-o"></i> <?php echo $this->lang->line("Cron Job"); ?></h4>
</div>
<?php $this->load->view('admin/theme/message'); ?>
<section class="content-header">
   <section class="content">
	     	<?php 
			$text="Generate Your ".$this->config->item("product_short_name")." API Key";
			$get_key_text="Get Your ".$this->config->item("product_short_name")." API Key";
			if(isset($api_key) && $api_key!="") 
			{
				$text="Re-generate Your ".$this->config->item("product_short_name")." API Key";
				$get_key_text="Your ".$this->config->item("product_short_name")." API Key";
	   		} 
	   		?>
		    	
		       		<!-- form start -->
		    <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url().'cron_job/get_api_action';?>" method="GET">
		        <div class="box-body" style="padding-top:0;">
		           	<div class="form-group">
		           		<div class="small-box bg-blue" style="background:#fff !important; color:#777 !important;border-color:#ccc;">
							<div class="inner">
								<h4><?php echo $get_key_text; ?></h4>
								<p>									
		   							<h2><?php echo $api_key; ?></h2>
								</p>
								<input name="button" type="submit" class="btn btn-primary btn-lg btn " value="<?php echo $text; ?>"/>
							</div>
							<div class="icon">
								<i class="fa fa-key"></i>
							</div>
						</div>
		            </div>	           
	         		               
		           </div> <!-- /.box-body -->      
		    </form> 
		<?php $call_sync_contact_url=site_url("cron_job/sync_contact"); ?>

		<?php
		if($api_key!="") { ?>
			<div id=''>
					<h4 style="margin:0">
						<div class="alert alert-info" style="margin-bottom:0;background:#fff !important; color:<?php echo $THEMECOLORCODE;?> !important;border-color:#fff;">
							<i class="fa fa-clock-o"></i> <?php echo $this->lang->line("Send Notification");?> [<?php echo $this->lang->line("Once per day");?>]
						</div>
					</h4>
					<div class="well" style="background:#fff;margin-top:0;border-radius:0;">
						<?php echo "curl ".site_url("cron_job/send_notification")."/".$api_key; ?>
					</div>
			</div>			
			<div id=''>
					<h4 style="margin:0">
						<div class="alert alert-info" style="margin-bottom:0;background:#fff !important; color:<?php echo $THEMECOLORCODE;?> !important;border-color:#fff;">
							<i class="fa fa-clock-o"></i> <?php echo $this->lang->line("Auction Domain");?> [<?php echo $this->lang->line("Once per day");?>]
						</div>
					</h4>
					<div class="well" style="background:#fff;margin-top:0;border-radius:0;">
						<?php echo "curl ".site_url("cron_job/auction_domain")."/".$api_key; ?>
					</div>
			</div>			

			<div id=''>
					<h4 style="margin:0">
						<div class="alert alert-info" style="margin-bottom:0;background:#fff !important; color:<?php echo $THEMECOLORCODE;?> !important;border-color:#fff;">
							<i class="fa fa-clock-o"></i> <?php echo $this->lang->line("Keyword Rank Tracking");?> [<?php echo $this->lang->line("Once per day");?>]
						</div>
					</h4>
					<div class="well" style="background:#fff;margin-top:0;border-radius:0;">
						<?php echo "curl ".site_url("cron_job/get_keyword_position_data")."/".$api_key; ?>
					</div>
			</div>


			<?php }?>


		</section>
</section>	