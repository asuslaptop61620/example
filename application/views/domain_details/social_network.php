<style>
	.info-box .progress .progress-bar {
	    background: #eee;
	}
	.info-box .progress {
	    background: #fff;
	}
	.info-box .progress .progress-bar {
	    background: #fff;
	}
</style>
<div role="tabpanel" class="tab-pane fade" id="social_network">
	<div id="social_network_success_msg" class="text-center" ></div>		
	<!-- <div id="social_network_name"></div> -->

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<div class="text-center"><h2 class="box-title"><?php echo $this->lang->line('Social Network Comparison'); ?></h2></div>
			<div class="box-body">
				<div class="row">
					<div class="col-md-8 col-xs-12">
						<div class="chart-responsive">
							<canvas id="social_network_pieChart" height="220"></canvas>
						</div><!-- ./chart-responsive -->
					</div><!-- /.col -->
					<div class="col-md-4 col-xs-12" style="padding-top:35px;">
						<ul class="chart-legend clearfix" id="color_codes">
						</ul>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.box-body -->
		</div>		
	</div>
	
	<div class="row" style="margin-top: 25px;"></div>

	<div class="row">


		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('Facebook Share'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<h1 id="fb_total_share"></h1>
					 Facebook Share
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('Facebook Reaction'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<h1 id="fb_total_reaction"></h1>
					 Facebook Reaction
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('Facebook Comment'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<h1 id="fb_total_comment"></h1>
					 Facebook Comment
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('Facebook Comment Plugin'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<h1 id="fb_total_comment_plugin"></h1>
					 Facebook Comment Plugin
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-pinterest-p"></i> <?php echo $this->lang->line('Pinterest Info'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<h1 id="pinterest_pin"></h1>
				      Pinterest Pin
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-btc"></i> <?php echo $this->lang->line('Buffer Info'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<h1 id="buffer_share"></h1>
					 Buffer Share
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-xing"></i> <?php echo $this->lang->line('Xing Info'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div><!-- /.box-tools -->
				</div><!-- /.box-header -->
				<div class="box-body">
					<h1  id="xing_share"></h1>
					 Xing Share
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	<!-- 	<div class="col-xs-12 col-sm-12 col-md-4">
			<div class="box box-warning">
				<div class="box-header with-border" >
					<h3 class="box-title text-center"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('Stumbleupon Info'); ?></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<h1 id="stumbleupon_total_view"></h1>
					 Stumbleupon View
				</div>
			</div>
		</div> -->
	</div>

	<div class="row" >
		<div class="col-xs-12 text-center"><h2 class="box-title"><?php echo $this->lang->line('Reddit Information'); ?></h2></div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box">
				<span class="info-box-icon"><i class="fa fa-reddit orange"></i></span>
				<div class="info-box-content">
					<!-- <span class="info-box-text">Inventory</span> -->
					<span class="info-box-number" id="reddit_score"></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<?php echo $this->lang->line('Reddit Score'); ?>
					</span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box">
				<span class="info-box-icon"><i class="fa fa-reddit orange"></i></span>
				<div class="info-box-content">
					<!-- <span class="info-box-text">Inventory</span> -->
					<span class="info-box-number" id="reddit_ups"></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<?php echo $this->lang->line('Reddit Ups'); ?>
					</span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box">
				<span class="info-box-icon"><i class="fa fa-reddit orange"></i></span>
				<div class="info-box-content">
					<!-- <span class="info-box-text">Inventory</span> -->
					<span class="info-box-number" id="reddit_downs"></span>
					<div class="progress">
						<div class="progress-bar" style="width: 70%"></div>
					</div>
					<span class="progress-description">
						<?php echo $this->lang->line('Reddit Downs'); ?>
					</span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->
		</div>
	</div>

</div>