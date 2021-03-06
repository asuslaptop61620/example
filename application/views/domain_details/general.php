<style type="text/css">
	.box-body-content{
		margin-bottom: 5px;
		padding-left: 15px;
		font-size: 16px;
		color:#2B4150;
		/*border: 1px solid gray;*/
	}
	.box-header{
		background-color: #fff !important;
	}

	.info-box-icon{

		background-color:#fff;border-right: 1px solid #eee;

	}

</style>

<div role="tabpanel" class="tab-pane fade in active" id="general">
	<div id="general_success_msg" class="text-center" ></div>	
	<div id="general_name"></div>
	
	<div id="hide_after_ajax">


		<div class="row" style="padding-top:10px;">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

				<div class="row">
					<div class="col-xs-12">						
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title"><i class="fa fa-street-view"></i> &nbsp&nbsp <?php echo $this->lang->line('WhoIs Information'); ?></h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->
							<div class="box-body table-responsive" style="background: white; color: black; padding-bottom: 28px;">
								<table class="table table-hover">
									<tr>
										<td>Registered</td>
										<td>
											<?php 
												if($domain_info[0]['whois_is_registered'] == 'yes')
													echo '<span class="label label-success">Yes</span>'; 
												else
													echo '<span class="label label-danger">No</span>';
											?> 
										</td>
									</tr>
									<tr>
										<td>Domain Age</td>
										<td>
											<?php 
												if($domain_info[0]['whois_created_at'] != '0000-00-00'){									
													$end = date("Y-m-d");
													$start = date("Y-m-d",strtotime($domain_info[0]['whois_created_at']));
													echo calculate_date_differece($end,$start); 
												}
											?>
										</td>
									</tr>
									<!-- <tr>
										<td>Tech Email</td>
										<td><?php echo $domain_info[0]['whois_tech_email']; ?></td>
									</tr> -->
									<tr>
										<td>Name Servers</td>
										<td><?php echo $domain_info[0]['whois_name_servers']; ?></td>
									</tr>
									<tr>
										<td>Created At</td>
										<td><?php if($domain_info[0]['whois_created_at'] != '0000-00-00') echo date("d-M-Y",strtotime($domain_info[0]['whois_created_at'])); ?></td>
									</tr>
									<tr>
										<td>Changed At</td>
										<td><?php if($domain_info[0]['whois_changed_at'] != '0000-00-00') echo date("d-M-Y",strtotime($domain_info[0]['whois_changed_at'])); ?></td>
									</tr>
									<tr>
										<td>Expire At</td>
										<td><?php if($domain_info[0]['whois_expire_at'] != '0000-00-00') echo date("d-M-Y",strtotime($domain_info[0]['whois_expire_at'])); ?></td>
									</tr>
									<tr>
										<td>Registrant Url</td>
										<td><?php echo $domain_info[0]['whois_registrar_url']; ?></td>
									</tr>
								<!-- 	<tr>
										<td>Registrant Name</td>
										<td><?php echo $domain_info[0]['whois_registrant_name']; ?></td>
									</tr> -->
					<!-- 				<tr>
										<td>Admin Name</td>
										<td><?php echo $domain_info[0]['whois_admin_name']; ?></td>
									</tr>
									<tr>
										<td>Registrant Email</td>
										<td><?php echo $domain_info[0]['whois_registrant_email']; ?></td>
									</tr>
									<tr>
										<td>Admin Email</td>
										<td><?php echo $domain_info[0]['whois_admin_email']; ?></td>
									</tr>
									<tr>
										<td>Registrant Country</td>
										<td><img style="height: 15px; width: 20px; margin-top: -3px;" alt=" " src="<?php echo base_url().'assets/images/flags/'.$domain_info[0]['whois_registrant_country'].'.png' ?>" >&nbsp;<?php echo $domain_info[0]['whois_registrant_country']; ?></td>
									</tr>
									<tr>
										<td>Admin Country</td>
										<td><img style="height: 15px; width: 20px; margin-top: -3px;" alt=" " src="<?php echo base_url().'assets/images/flags/'.$domain_info[0]['whois_admin_country'].'.png' ?>" >&nbsp;<?php echo $domain_info[0]['whois_admin_country']; ?></td>
									</tr>
									<tr>
										<td>Registrant Phone</td>
										<td><?php echo $domain_info[0]['whois_registrant_phone']; ?></td>
									</tr>
									<tr>
										<td>Admin Phone</td>
										<td><?php echo $domain_info[0]['whois_admin_phone']; ?></td>
									</tr>	 -->					
								</table>					
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>				
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="info-box">
							<span class="info-box-icon" style="height: 100px;"><i class="fa fa-link blue"></i></span>
							<div class="info-box-content" style="padding: 6px 10px;">								
								<table class="table table-hover table-condensed" style="margin-bottom: 0px">
									<tr>
										<td>BackLink Count</td>
										<td><?php echo $domain_info[0]['google_back_link_count']; ?></td>
									</tr>
									
									<tr>
										<td>Total Link Count</td>
										<td>
										
										<?php
										
											$total_link_count=$domain_info[0]['moz_links'];
											if($total_link_count=="")
												$total_link_count=0;
										 	echo number_format($total_link_count); 
										 
										 ?>
										 
										 </td>
									</tr>
									
									<tr>
										<td>MozRank</td>
										<td><?php echo round($domain_info[0]['moz_url_normalized'])."/10"; ?></td>
									</tr>
									
									
									<!--<tr>
										<td>Yahoo Back Link</td>
										<td><?php echo $domain_info[0]['yahoo_back_link_count']; ?></td>
									</tr>
									<tr>
										<td>Bing Back Link</td>
										<td><?php echo $domain_info[0]['bing_back_link_count']; ?></td>
									</tr>-->
									<!-- <tr>
										<td>Google Page Rank</td>
										<td><?php echo $domain_info[0]['google_page_rank']."/10"; ?></td>
									</tr> -->
								</table>
							</div><!-- /.info-box-content -->
						</div><!-- /.info-box -->
					</div>					
				</div>

			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				
				<div class="row" style="margin-bottom: 30px;">
					<div class="col-xs-12 text-center">						
						<img class="img-responsive img-thumbnail" src="http://free.pagepeeker.com/v2/thumbs.php?size=x&url=<?php echo $domain_info[0]['domain_name']; ?>" alt="">
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title"><i class="fa fa-medium"></i>  <?php echo $this->lang->line('MOZ Information'); ?></h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->
							<div class="box-body table-responsive">
								<table class="table table-hover table-striped">
									<tr class="active">
										<td>Subdomain Normalized</td>
										<td><?php echo $domain_info[0]['moz_subdomain_normalized']; ?></td>
									</tr>
									<tr class="">
										<td>Subdomain Raw</td>
										<td><?php echo $domain_info[0]['moz_subdomain_raw']; ?></td>
									</tr>
									<tr class="success">
										<td>URL Normalized</td>
										<td><?php echo $domain_info[0]['moz_url_normalized']; ?></td>
									</tr>
									<tr class="">
										<td>URL Raw</td>
										<td><?php echo $domain_info[0]['moz_url_raw']; ?></td>
									</tr>
									<tr class="info">
										<td>HTTP Status Code</td>
										<td><?php echo $domain_info[0]['moz_http_status_code']; ?></td>
									</tr>
									<tr class="">
										<td>Domain Authority</td>
										<td><?php echo $domain_info[0]['moz_domain_authority']; ?></td>
									</tr>
									<tr class="warning">
										<td>Page Authority</td>
										<td><?php echo $domain_info[0]['moz_page_authority']; ?></td>
									</tr>
									<tr class="">
										<td>External Quality Link</td>
										<td><?php echo $domain_info[0]['moz_external_equity_links']; ?></td>
									</tr>
									<tr class="active">
										<td>Links</td>
										<td><?php echo $domain_info[0]['moz_links']; ?></td>
									</tr>
								</table>
							</div><!-- /.box-body -->
						</div><!-- /.box -->

					</div>				
				</div>
				
			</div>

		</div>

		<div class="row" style="padding-top:10px;">
			<div class="col-xs-12 col-md-8">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-mobile"></i> <?php echo $this->lang->line('Mobile Friendly Check'); ?></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body" style="background: white; color: black;">	
						<div class="row">
							<div class="col-xs-12 col-md-7">
								<?php 							
								$mobile_ready_data=json_decode($domain_info[0]['mobile_ready_data'],true);

								$pass="Unknown";
								$score="Unknown";

								if(isset($mobile_ready_data["ruleGroups"]["USABILITY"]["pass"]))
								$pass=$mobile_ready_data["ruleGroups"]["USABILITY"]["pass"];
								if(isset($mobile_ready_data["ruleGroups"]["USABILITY"]["score"]))
								$score=$mobile_ready_data["ruleGroups"]["USABILITY"]["score"];
								
								if($pass=="1")  
								echo "<br><h3 style='margin-top:0px;'><span class='label label-success'>Mobile Friendly : Yes <br></span></h3> Score : ".$score;
								else if($pass=="Unknown")  
								echo "<br><h3 style='margin-top:0px;'><span class='label label-danger'>Mobile Friendly : Unknown <br></span></h3> Score : ".$score;
								else echo "<br><h3 style='margin-top:0px;'><span class='label label-danger'>Mobile Friendly : No <br></span></h3> Score : ".$score;

								?>
								<br><br>
								<div class=" table-responsive">
									<table class="table table-hover table-striped">
										<tr>
											<th>Localized Rule Name</th>
											<th>Rule Impact</th>
										</tr>
										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["UseLegibleFontSizes"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["UseLegibleFontSizes"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["UseLegibleFontSizes"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["UseLegibleFontSizes"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["UseLegibleFontSizes"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidPlugins"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidPlugins"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["AvoidPlugins"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidPlugins"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["AvoidPlugins"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeContentToViewport"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeContentToViewport"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["SizeContentToViewport"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeContentToViewport"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["SizeContentToViewport"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeTapTargetsAppropriately"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeTapTargetsAppropriately"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["SizeTapTargetsAppropriately"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["SizeTapTargetsAppropriately"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["SizeTapTargetsAppropriately"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidInterstitials"]["localizedRuleName"]) || isset($mobile_ready_data["formattedResults"]["ruleResults"]["ConfigureViewport"]["ruleImpact"]))
										{?>		
											<tr>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidInterstitials"]["localizedRuleName"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["AvoidInterstitials"]["localizedRuleName"];
													?>
												</td>
												<td>
													<?php 
													if(isset($mobile_ready_data["formattedResults"]["ruleResults"]["AvoidInterstitials"]["ruleImpact"]))
													echo $mobile_ready_data["formattedResults"]["ruleResults"]["AvoidInterstitials"]["ruleImpact"];
													?>
												</td>
											</tr>
										<?php 
										} ?>

										<?php if(!isset($mobile_ready_data["formattedResults"]["ruleResults"])) 
										{?>		
											<tr>
												<td colspan="2" class="text-center">No data to show.</td>
											</tr>
										<?php 
										} ?>

									</table>
								</div>

								<div class="well">
									<b>CMS:</b> <?php if(isset($mobile_ready_data["pageStats"]["cms"])) echo $mobile_ready_data["pageStats"]["cms"];?>								
									<br><b>Locale:</b> <?php if(isset($mobile_ready_data["formattedResults"]["locale"])) echo $mobile_ready_data["formattedResults"]["locale"];?>								
									<br><b>Roboted Resources:</b> <?php if(isset($mobile_ready_data["pageStats"]["numberRobotedResources"])) echo $mobile_ready_data["pageStats"]["numberRobotedResources"];?>								
									<br><b>Transient Fetch Failure Resources:</b> <?php if(isset($mobile_ready_data["pageStats"]["numberTransientFetchFailureResources"])) echo $mobile_ready_data["pageStats"]["numberTransientFetchFailureResources"];?>								
									<br>
								</div>

							</div>
							<div class="col-xs-12 col-md-5" style="padding-left:12px;min-height:530px;background: url('<?php echo base_url("assets/images/mobile.png");?>') no-repeat !important;">
								<?php 
								$mobile_ready_data=json_decode($domain_info[0]["mobile_ready_data"],true);
														
								if(isset($mobile_ready_data["screenshot"]["data"]))
								{
									$src=str_replace("_", "/", $mobile_ready_data["screenshot"]["data"]);
									$src=str_replace("-", "+", $src);
									echo '<img src="data:image/jpeg;base64,'.$src.'" style="max-width:225px !important;margin-top:52px;">';
								}
								?>
							</div>
						</div>				
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>	
			<div class="col-xs-12 col-md-4">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-map-marker"></i> <?php echo $this->lang->line('IP Information'); ?></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body table-responsive" style="background: white; color: black;">
						<table class="table table-condensed table-striped">
							<tr>
								<th>ISP</th>
								<td><?php echo $domain_info[0]['ipinfo_isp']; ?></td>
							</tr>
							<tr>
								<th>IP</th>
								<td><?php echo $domain_info[0]['ipinfo_ip']; ?><?php $x= trim(strtoupper($domain_info[0]['ipinfo_country']));?></td>
							</tr>
							<tr>
								<th>Country</th>
								<td><img style="height: 15px; width: 20px; margin-top: -3px;" alt=" " src="<?php $s_country = array_search($x, $country_list); echo base_url().'assets/images/flags/'.$s_country.'.png'; ?>">&nbsp;<?php echo $x; ?></td>
							</tr>
							<tr>
								<th>City</th>
								<td><?php echo $domain_info[0]['ipinfo_city']; ?></td>
							</tr>
							<tr>
								<th>Region</th>
								<td><?php echo $domain_info[0]['ipinfo_region']; ?></td>
							</tr>
							<tr>
								<th>Timezone</th>
								<td><?php echo $domain_info[0]['ipinfo_time_zone']; ?></td>
							</tr>
							<tr>
								<th>Latitude</th>
								<td><?php echo $domain_info[0]['ipinfo_latitude']; ?></td>
							</tr>
							<tr>
								<th>Longitude</th>
								<td><?php echo $domain_info[0]['ipinfo_longitude']; ?></td>
							</tr>
							<tr>
							</tr>
						</table>					
					</div><!-- /.box-body -->
				</div><!-- /.box -->

				<div class="box box-warning">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-shield"></i> <?php echo $this->lang->line('Malware Scan Info'); ?></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body  table-responsive">
						<table class="table table-condensed table-striped">
							<tr>
								<th>Google Safe Browser</th>
								<th>Norton</th>
							</tr>
							<tr>
								<td><?php echo $domain_info[0]['google_safety_status']; ?></td>
								<td><?php echo $domain_info[0]['norton_status']; ?></td>
							</tr>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->

				<div class="box box-danger">
					<div class="box-header with-border">
						<h3 class="box-title"><i class="fa fa-sort-numeric-asc"></i> <?php echo $this->lang->line('Search Engine Index Info'); ?></h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div><!-- /.box-tools -->
					</div><!-- /.box-header -->
					<div class="box-body">
						<table class="table table-condensed table-striped">
							<tr>
								<th><i class="fa fa-google" style="color: orange;"></i> Google Index</th>
								<th><i class="fa fa-windows" style="color: orange;"></i> Bing Index</th>
								<th><i class="fa fa-yahoo" style="color: orange;"></i> Yahoo Index</th>
							</tr>
							<tr>
								<td><?php echo $domain_info[0]['google_index_count']; ?></td>
								<td><?php echo $domain_info[0]['bing_index_count']; ?></td>
								<td><?php echo $domain_info[0]['yahoo_index_count']; ?></td>
							</tr>
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->


			</div>		
			
		</div>

		<div class="row" style="padding-top: 10px;">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-info">
							<div class="box-header with-border  table-responsive">
								<h3 class="box-title" style="color: blue;"><i class="fa fa-clone"></i> <?php echo $this->lang->line('Sites in Same IP'); ?></h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->
							<div class="box-body">
								<table class="table table-condensed table-striped">
									<tr>
										<?php 
											$sites_in_same_ip = json_decode($domain_info[0]["sites_in_same_ip"],true);
											if(is_array($sites_in_same_ip))
											{
												$sites_in_same_ip=array_slice($sites_in_same_ip,0,18);
												$i=0;
												echo '<tr>';
												foreach($sites_in_same_ip as $key=>$value)
												{
													$i++;
													echo '<td><i class="fa fa-circle-o" style="color:orange;"></i> '.strip_tags($value).'</td>';
													if($i%2 == 0)
													echo '</tr><tr>'; 
												}
											}
										?>
									</tr>
									<?php if(count($sites_in_same_ip)==0) echo "<tr><td colspan='2' class='text-center'>No data to show</td></tr>"; ?>
								</table>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>				
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row">
					<div class="col-xs-12">
						<div class="box box-info">
							<div class="box-header with-border  table-responsive">
								<h3 class="box-title" style="color: blue;"><i class="fa fa-clone"></i> <?php echo $this->lang->line('Related Websites'); ?></h3>
								<div class="box-tools pull-right">
									<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
								</div><!-- /.box-tools -->
							</div><!-- /.box-header -->
							<div class="box-body">
								<table class="table table-condensed table-striped">
									<tr>
										<?php 
											$similar_sites = explode(',', $domain_info[0]['similar_site']);
											$i=0;
											echo '<tr>';
											foreach($similar_sites as $key=>$value){
												$i++;
												echo '<td><i class="fa fa-circle-o" style="color:orange;"></i> '.$value.'</td>';
												if($i%2 == 0)
												echo '</tr><tr>'; 
											}
										?>
									</tr>
									<?php if(count($similar_sites)==0) echo "<tr><td colspan='2' class='text-center'>No data to show</td></tr>"; ?>
								</table>
							</div><!-- /.box-body -->
						</div><!-- /.box -->
					</div>				
				</div>
			</div>
		</div>

	</div>
</div>

