<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="margin-top: 20px;">
    <!-- Sidebar user panel -->  

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
       <?php
        $colorpos=strpos($loadthemebody,'light');
        if($colorpos!==FALSE) $colorclass='orange';
        else $colorclass='';
        ?> 
         

      <?php
          $all_links=array();
          foreach($menus as $single_menu) 
          {
             
              $only_admin = $single_menu['only_admin'];
              $only_member = $single_menu['only_member']; 
              $module_access = explode(',', $single_menu['module_access']);
              $module_access = array_filter($module_access);

              if($single_menu['is_external']=='1') $site_url1=""; else $site_url1=site_url(); // if external link then no need to add site_url()
              if($single_menu['is_external']=='1') $parent_newtab=" target='_BLANK'"; else $parent_newtab=''; // if external link then open in new tab
              $menu_html = "<li> <a {$parent_newtab} href='".$site_url1.$single_menu['url']."' class='hvr-icon-pulse-grow'> <i style='font-size:18px' class='hvr-icon ".$colorclass.' '.$single_menu['icon']."'></i> &nbsp;&nbsp;<span>" . $this->lang->line($single_menu['name'])."</span>";   
              array_push($all_links, $site_url1.$single_menu['url']);  
              if(isset($menu_child_1_map[$single_menu['id']]) && count($menu_child_1_map[$single_menu['id']]) > 0)
              {
                $menu_html .= "<i class='fa fa-angle-left pull-right'></i>";
                $menu_html .= "</a>";
                $menu_html .= "<ul class='treeview-menu'>";
                foreach($menu_child_1_map[$single_menu['id']] as $single_child_menu)
                {                  
                     $only_admin2 = $single_child_menu['only_admin'];
                     $only_member2 = $single_child_menu['only_member']; 



                    if($single_child_menu['is_external']=='1') $site_url2=""; else $site_url2=site_url(); // if external link then no need to add site_url()
                    if($single_child_menu['is_external']=='1') $child_newtab=" target='_BLANK'"; else $child_newtab=''; // if external link then open in new tab
                    $menu_html .= "<li><a {$child_newtab} href='".$site_url2.$single_child_menu['url']."' class='hvr-icon-wobble-horizontal'><i class='hvr-icon ".$colorclass.' '.$single_child_menu['icon']."'></i> ".$this->lang->line($single_child_menu['name']);

                    array_push($all_links, $site_url2.$single_child_menu['url']);


                    if(isset($menu_child_2_map[$single_child_menu['id']]) && count($menu_child_2_map[$single_child_menu['id']]) > 0)
                    {
                      $menu_html .= "<i class='fa fa-angle-left pull-right'></i>";
                      $menu_html .= "</a>";
                      $menu_html .= "<ul class='treeview-menu'>";
                      foreach($menu_child_2_map[$single_child_menu['id']] as $single_child_menu_2)
                      {                  
                         if($single_child_menu_2['is_external']=='1') $site_url3=""; else $site_url3=site_url(); // if external link then no need to add site_url()
                         if($single_child_menu_2['is_external']=='1') $child2_newtab=" target='_BLANK'"; else $child2_newtab=''; // if external link then open in new tab                   
                         $menu_html .= "<li><a {$child2_newtab} href='".$site_url3.$single_child_menu_2['url']."' class='hvr-icon-forward'><i class='hvr-icon ".$colorclass.' '.$single_child_menu_2['icon']."'></i> ".$this->lang->line($single_child_menu_2['name'])."</a></li>";
                         array_push($all_links, $site_url3.$single_child_menu_2['url']);
                      }
                      $menu_html .= "</ul>";
                    }
                    else
                    {
                      $menu_html .= "</a>";
                    }

                    $menu_html .= "</li>";
                }
                $menu_html .= "</ul>";
              }
              else
              {
                $menu_html .= "</a>";
              }

              $menu_html .= "</li>";
              if($only_admin == '1') 
              {
                if($this->session->userdata('user_type') == 'Admin') 
                echo $menu_html;
              }
              else if($only_member == '1') 
              {
                if($this->session->userdata('user_type') == 'Member') 
                echo $menu_html;
              } 
              else 
              {
                if($this->session->userdata("user_type")=="Admin" || empty($module_access) || count(array_intersect($this->module_access, $module_access))>0 ) 
                echo $menu_html;
              } 
       
          
       
          }
        ?>
        <li>&nbsp;</li>
       
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<?php 
$all_links=array_unique($all_links);

// echo "<pre style='padding-left:300px;'>";
// print_r($all_links);
// exit;
$unsetkey = array_search (base_url().'#', $all_links); 
if($unsetkey!=FALSE)
unset($all_links[$unsetkey]); // removing links without a real url

/* 
links that are not in database [custom link = sibebar parent]
No need to add a custom link if it's parent is controller/index
*/
$custom_links=array
(
  base_url("admin_config")=>base_url("admin_config/configuration"),
  base_url("config")=>base_url("config/index"),
  base_url("admin_config_ad/index")=>base_url("admin_config_ad/ad_config"),
  base_url("payment/add_package")=>base_url("payment/package_settings"),
  base_url("payment/update_package")=>base_url("payment/package_settings"),
  base_url("payment/details_package")=>base_url("payment/package_settings"),
  base_url("domain_details_visitor/add_domain")=>base_url("domain_details_visitor/domain_list_visitor"),
  base_url("domain_details_visitor/domain_details")=>base_url("domain_details_visitor/domain_list_visitor"),
  base_url("domain/add_domain")=>base_url("domain/domain_list_for_domain_details"),
  base_url("rank/alexa_details")=>base_url("rank/alexa_rank_full"),
  base_url("rank/similar_web_details")=>base_url("rank/similar_web"),
  base_url("url_shortener/url_analytics_result")=>base_url("url_shortener/url_analytics_page_loader"),
  base_url("domain/domain_details_view")=>base_url("domain/domain_list_for_domain_details"),
  base_url("sitedoctor/index")=>base_url("sitedoctor/add_domain"),

  base_url("addons/upload")=>base_url("addons/lists")
);
$custom_links_assoc_str="{";
$loop=0;
foreach ($custom_links as $key => $value) 
{
  $loop++;
  array_push($all_links, $key); // adding custom urls in all urls array

  /* making associative link -> parent array for js, js dont support special chars */
  $custom_links_assoc_str.=str_replace(array('/',':','-','.'), array('FORWARDSLASHES','COLONS','DASHES','DOTS'), $key).":'".$value."'";
  if($loop!=count($custom_links)) $custom_links_assoc_str.=',';
}
$custom_links_assoc_str.="}";
// echo "<pre style='padding-left:300px;'>";
// print_r($custom_links);
// echo "</pre>"; 
?>

<script type="text/javascript">

  var all_links_JS = [<?php echo '"'.implode('","', $all_links).'"' ?>]; // all urls includes database & custom urls
  var custom_links_JS= [<?php echo '"'.implode('","', array_keys($custom_links)).'"' ?>]; // only custom urls
  var custom_links_assoc_JS = <?php echo $custom_links_assoc_str?>; // custom urls associative array link -> parent
  
  var sideBarURL = window.location;
  sideBarURL=String(sideBarURL).trim();
  sideBarURL=sideBarURL.replace('#_=_',''); // redirct from facebook login return extra chars with url

  function removeUrlLastPart(the_url)   // function that remove last segment of a url
  {
      var theurl = String(the_url).split('/');
      theurl.pop();      
      var answer=theurl.join('/');
      return answer;
  }

  // get parent url of a custom url
  function matchCustomUrl(find)
  {
    var parentUrl='';
    var tempu1=find.replace(/\//g, 'FORWARDSLASHES'); // decoding special chars that was encoded to make js array
    tempu1=tempu1.replace(/:/g, 'COLONS');
    tempu1=tempu1.replace(/-/g, 'DASHES');
    tempu1=tempu1.replace(/\./g, 'DOTS');

    if(typeof(custom_links_assoc_JS[tempu1])!=='undefined')
    parentUrl=custom_links_assoc_JS[tempu1]; // getting parent value of custom link

    return parentUrl;
  }

  if(jQuery.inArray(sideBarURL, custom_links_JS) !== -1) // if the current link match custom urls
  {    
    sideBarURL=matchCustomUrl(sideBarURL);
  } 
  else if(jQuery.inArray(sideBarURL, all_links_JS) !== -1) // if the current link match known urls, this check is done later becuase all_links_JS also contains custom urls
  {
     sideBarURL=sideBarURL;
  }
  else // url does not match any of known urls
  {  
    var remove_times=1;
    var temp_URL=sideBarURL;
    var temp_URL2="";
    var tempu2="";
    while(true) // trying to match known urls by remove last part of url or adding /index at the last
    {
      temp_URL=removeUrlLastPart(temp_URL); // url may match after removing last
      temp_URL2=temp_URL+'/index'; // url may match after removing last part and adding /index

      if(jQuery.inArray(temp_URL, custom_links_JS) !== -1) // trimmed url match custom urls
      {
        sideBarURL=matchCustomUrl(temp_URL);
        break;
      }
      else if(jQuery.inArray(temp_URL, all_links_JS) !== -1) //trimmed url match known links
      {
        sideBarURL=temp_URL;
        break;
      }
      else // trimmed url does not match known urls, lets try extending url by adding /index
      {
        if(jQuery.inArray(temp_URL2, custom_links_JS) !== -1) // extended url match custom urls
        {
          sideBarURL=matchCustomUrl(temp_URL2);
          break;
        }
        else if(jQuery.inArray(temp_URL2, all_links_JS) !== -1)  // extended url match known urls
        {
          sideBarURL=temp_URL2;
          break;
        }
      }
      remove_times++;
      if(temp_URL.trim()=="") break;
    }    
  }

  $('ul.sidebar-menu a').filter(function() {
     return this.href == sideBarURL;
  }).parent().addClass('active');
  $('ul.treeview-menu a').filter(function() {
     return this.href == sideBarURL;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>


