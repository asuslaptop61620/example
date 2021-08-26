<?php 
if($ip_info["status"]!="success") 
{
	$ip_info['city']="";
	$ip_info['country']="";
	$ip_info['postal']="";
	$ip_info['org']="";
	$ip_info['hostname']="";
	$ip_info['region']="";
	$ip_info['latitude']="";
	$ip_info['longitude']="";
}
?>
<style>
	.info-box-icon{
		background: #fff;
		border-right: 1px solid #eee;
	}
</style>

<div class="container-fluid">	
	<div class="row">

		<div class="well well_border_left">
			<h4 class="text-center"> <i class="fa fa-map-marker"></i> <?php echo $this->lang->line("my ip information");?></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-tag orange"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">IP Address</span>
					<span class="info-box-number" ><?php echo $my_ip; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-map-marker orange"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Latitude</span>
					<span class="info-box-number" ><?php echo $ip_info["latitude"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-map-marker orange"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Longitude</span>
					<span class="info-box-number" ><?php echo $ip_info["longitude"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-building blue2"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Organization</span>
					<span class="info-box-number" ><?php echo $ip_info["org"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-server blue2"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Hostname</span>
					<span class="info-box-number" ><?php echo $ip_info["hostname"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-globe green"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Country</span>
					<span class="info-box-number" ><?php echo $ip_info["country"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-map green"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Region</span>
					<span class="info-box-number" ><?php echo $ip_info["region"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-home green"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">City</span>
					<span class="info-box-number" ><?php echo $ip_info["city"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>	

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<div class="info-box" style="border-bottom:2px solid #fff;">
				<span class="info-box-icon"><i class="fa fa-envelope green"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Postal Code</span>
					<span class="info-box-number" ><?php echo $ip_info["postal"]; ?></span>
				</div><!-- /.info-box-content -->
			</div>
		</div>		
	</div>
</div>
