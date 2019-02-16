<?php
/* Smarty version 3.1.30, created on 2019-01-17 14:31:30
  from "/home/MSF/www/smarty/templates/AdminListJobs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4083b25036e9_27644872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71d167817f907ccdb0ab22a251c537fc1b50e5a' => 
    array (
      0 => '/home/MSF/www/smarty/templates/AdminListJobs.tpl',
      1 => 1478076723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5c4083b25036e9_27644872 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/home/MSF/www/SmartyEngine/plugins/function.html_options.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>
    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>


          
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
    <link href="./scripts/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href="./scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
    <link class="include" rel="stylesheet" type="text/css" href="./scripts/jquery.jqplot.min.css" />
    <link rel="stylesheet" media="all" type="text/css" href="./scripts/jquery-ui-timepicker-addon.css" />

    <?php echo '<script'; ?>
 src="./scripts/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/jtable/jquery.jtable.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./scripts/jquery-ui-timepicker-addon.js" type="text/javascript" ><?php echo '</script'; ?>
>

  </head>
  <body>
      <?php echo '<script'; ?>
 type="text/javascript" src="scripts/Fonctions.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">

        $(document).ready(function() {
          $('#chart2').hide();
          
          //Prepare jTable
          $('#ProcessList').jtable({
          
            title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ProcessList');?>
',
          
            paging: true,
            pageSize: 20,
            sorting: true,
            defaultSorting: '',
            columnResizable : true,
            actions: {
              listAction: './scripts/jQListJobs.php?action=list'
            },
            fields: {
              idprocess: {
                title: 'Job Id',
                key: true,
                create: false,
                edit: false,
                list: true
              },
          
      <?php if ($_smarty_tpl->tpl_vars['role']->value == 'A') {?>
          
              username: {
          
                title: "<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Username');?>
"
          
              },
          
      <?php }?>
          
              processname: {
                title: 'Type'
              },
              sourcename: {
                title: 'Src'
              },
              ModelName: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Model');?>
',
          
                sorting: false
          
              },
              typelang: {
                title: 'type & lang'
              },
          
      <?php if ($_smarty_tpl->tpl_vars['role']->value == 'A') {?>
          
                      
              hostrunner: {
                title: 'Hostname'
              },
          
      <?php }?>
          
              audiofile: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'AudioFile');?>
'
          
              },
              audioduration: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'FileDur');?>
',
          
                sorting: false
              },
              status: {
                title: 'Status'
              },
              links: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Results');?>
',
          
                sorting: false,
                width: '10%'
              },
              datesubmit: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SubmitDate');?>
'
          
              },
              datestart: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'StartDate');?>
'
          
              },
              datestop: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EndDate');?>
'
          
              },
              processduration: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Duration');?>
'
          
              },
              processratio: {
                title: 'Ratio'
              }
            },
            //Register to selectionChanged event to hanlde events
            recordsLoaded : function () {
/*              var ROWNUMBER = 2;
              var $row = $('#ProcessList').find(".jtable tbody tr:eq(" + ROWNUMBER + ")");    
              $row.css("background", "#FF0000");            */
            }
            
          });

          //Re-load records when user click 'filter' button.
          $('#RefreshButton').click(function(e) {
            e.preventDefault();
            var xmlHttp = null;

             xmlHttp = new XMLHttpRequest();
             xmlHttp.open( "GET", "./scripts/jQListJobs.php?action=WhichMode", false );
             xmlHttp.send( null );
             //console.log( xmlHttp.responseText);
            if (xmlHttp.responseText == "Search")
                $('#SearchRecordsButton').click();
            else
                $('#FilterButton').click();
          });
                
          //Re-load records when user click 'filter' button.
          $('#FilterButton').click(function(e) {
            e.preventDefault();
            
            
            var dateStringStart = $( "#datepickerStart" ).datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
            var dateStringStop = $( "#datepickerStop" ).datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
            
            if ((dateStringStart!=="") || (dateStringStop!==""))
              $('#chart2').show(); //affiche le graphique
            
            $('#ProcessList').jtable('load', {
              FilterOrSearch: 'Filter',
              DateStart: dateStringStart,
              DateStop: dateStringStop,
              UserFilter: $('#UserFilter').val()
            });
            ShowGraph($('#UserFilter').val(), dateStringStart, dateStringStop);
          });

          $('#SearchRecordsButton').click(function(e) {
            e.preventDefault();
            $('#ProcessList').jtable('load', {
              FilterOrSearch: 'Search',
              SearchJobId: $('#SearchJobId').val(),
              SearchJobAudioFileName: $('#SearchJobAudioFileName').val()
            });
            //mlm
            //$('.jtable-goto-page select option:selected').val("1").change();  
          });

          $("#datepickerStart").datetimepicker({dateFormat: 'yy-mm-dd'});
          $("#datepickerStop").datetimepicker({dateFormat: 'yy-mm-dd'});

          $('#ResetSearch').click(function(e)
          {
            e.preventDefault();
            $('#ClearFilter').click();
          });
          
          //Re-load records when user click 'clear Filter' button.
          $('#ClearFilter').click(function(e)
          {
            e.preventDefault();

            $('#datepickerStart').val('');
            $('#datepickerStop').val('');
            $('#UserFilter').val(0);
            //document.getElementById("chart2").style.display = "none";
            $('#chart2').hide();


            //fait un reset du cookie qui maintient les valeurs des filtres
            var xmlHttp = null;

             xmlHttp = new XMLHttpRequest();
             xmlHttp.open( "GET", "./scripts/jQListJobs.php?action=ResetFilters", false );
             xmlHttp.send( null );
             //console.log( xmlHttp.responseText);
    
    
            $('#ProcessList').jtable('load', {
              SearchJobId: $('#SearchJobId').val(),
              SearchJobAudioFileName: $('#SearchJobAudioFileName').val(),
              UserFilter: $('#UserFilter').val()
            });
          });

          //Load all records when page is first shown
          $('#FilterButton').click();
        });

      <?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 type="text/javascript">
        function Cancel(jobid)
        {
        var xmlHttp = null;

           xmlHttp = new XMLHttpRequest();
           xmlHttp.open( "GET", "./scripts/jQListJobs.php?Cancel="+jobid, false );
           xmlHttp.send( null );
          
          
          $('#RefreshButton').click();
        }
        
        function Delete(jobid,IdUser)
        {
        var xmlHttp = null;

           xmlHttp = new XMLHttpRequest();
           xmlHttp.open( "GET", "./scripts/jQListJobs.php?Delete="+jobid+"&IdUser="+IdUser, false );
           xmlHttp.send( null );
          
          $('#FilterButton').click();
        }
        
        function RemoveUser(UserName)
        {
        var xmlHttp = null;

           xmlHttp = new XMLHttpRequest();
           xmlHttp.open( "GET", "./scripts/jQListJobs.php?NewRemoved="+UserName, false );
           xmlHttp.send( null );
           $('#FilterButton').click();
        }
        

        function ShowGraph(UserFilter, dateStringStart, dateStringStop)
        {
          if (!$('#chart2').is(":visible"))
            return;

          // Our ajax data renderer which here retrieves a text file.
          // it could contact any source and pull data, however.
          // The options argument isn't used in this renderer.
          var ajaxDataRenderer = function(url, plot, options)
          {
            var ret = null;
            $.ajax({
              // have to use synchronous here, else the function 
              // will return before the data is fetched
              async: false,
              url: url,
              dataType: "json",
              success: function(data) {
                ret = data;
              }
            });
            //alert(ret);
            return ret;
          };

          // The url for our json data
          //  var jsonurl = "./jsondata.txt";
          var jsonurl = "./scripts/jQGraphJobs.php?action=list&UserId=" + UserFilter +
              "&DateStart=" + dateStringStart + "&DateStop=" + dateStringStop;
          if (dateStringStart.substring(0,10) === dateStringStop.substring(0,10))
            $Format = '%H:%M';
          else
            $Format = '%Y-%m-%d';
          
          console.log(jsonurl);

          var xmlHttp = null;
          xmlHttp = new XMLHttpRequest();
          xmlHttp.open( "GET", "./scripts/jQGraphJobs.php?action=getsums&UserId=" + UserFilter +
              "&DateStart=" + dateStringStart + "&DateStop=" + dateStringStop, false );
          xmlHttp.send( null );
          //console.log( xmlHttp.responseText);
          
          var obj = jQuery.parseJSON(xmlHttp.responseText);
          TotalHours = obj[0];
          TotalQt    = obj[1];
          
          // passing in the url string as the jqPlot data argument is a handy
          // shortcut for our renderer.  You could also have used the
          // "dataRendererOptions" option to pass in the url.
          var plot2 = $.jqplot('chart2', jsonurl, {
            title: "Processes",
            seriesDefaults:
                {
                  //renderer: $.jqplot.BarRenderer,
                  shadow: true,            
                  rendererOptions: {
                    // Put a 30 pixel margin between bars.
                    //barMargin: 10,
                    //barWidth: 50,
                    // Highlight bars when mouse button pressed.
                    // Disables default highlighting on mouse over.
                    //highlightMouseDown: true
                  }
                },
            axes:
                {
                  xaxis:
                      {
                        renderer: $.jqplot.DateAxisRenderer,
                        tickOptions: {formatString: $Format}
                            //min:'2012-11',
                            //tickInterval: '2 months',
                            //tickOptions: {formatString: '%Y-%m'}
                      },
                  yaxis: {
                    //pad: 1.05,
                    tickOptions: {formatString: '%d'}
                  }

                },
            series: [
              {
                label: 'H : '+TotalHours,
                pointLabels: {
                  show: true,
                  location: 'no'
                }
              },
              {
                label: 'Qt : '+TotalQt,
                pointLabels: {
                  show: true,
                  location: 'ne'
                }}
            ],
            // Show the legend and put it outside the grid, but inside the
            // plot container, shrinking the grid to accomodate the legend.
            // A value of "outside" would not shrink the grid and allow
            // the legend to overflow the container.
            legend: {
              show: true,
              placement: 'outsideGrid'
            },
            dataRenderer: ajaxDataRenderer,
            //series:[{lineWidth:4, markerOptions:{style:'square'}}],
            dataRendererOptions: {unusedOptionalUrl: jsonurl}
          });
            
          plot2.replot(null);//oblige le réeffacement de tout le graph

        }
      <?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 class="include" type="text/javascript" src="./scripts/jquery.jqplot.min.js"><?php echo '</script'; ?>
>

      <?php echo '<script'; ?>
 class="include" language="javascript" type="text/javascript" src="./scripts/plugins/jqplot.json2.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 class="include" language="javascript" type="text/javascript" src="./scripts/plugins/jqplot.dateAxisRenderer.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 class="include" language="javascript" type="text/javascript" src="./scripts/plugins/jqplot.categoryAxisRenderer.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 class="include" language="javascript" type="text/javascript" src="./scripts/plugins/jqplot.pointLabels.min.js"><?php echo '</script'; ?>
>
        

    <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div id="chart2" style="height:300px; width:1000px;left:100px" ></div>
      
      <FONT FACE="courier">
        <div class="filtering" align="center">
          <table border=0>
            <tr>
              <td>
                <div class="jtable-main-container">
                <div class="jtable-busy-panel-background jtable-busy-panel-background-invisible" style="display: none; width: 1331px; height: 139px;"></div>
                <div class="jtable-busy-message" style="display: none;"></div>

                <div class="jtable-title">
                <div class="jtable-title-text"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ApplyFilterToList');?>
</div>
                <div class="jtable-toolbar"></div>
                </div>                

                <form>
                  <table class="jtable">
                    <tr>
                      <td >
                        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'StartDate');?>

                      </td>
                      <td colspan="2">
                        <input type="text" id="datepickerStart" value="<?php echo $_smarty_tpl->tpl_vars['datepickerStart']->value;?>
" style="width:140px" />
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EndDate');?>

                      </td>
                      <td colspan="2">
                        <input type="text" id="datepickerStop"  value="<?php echo $_smarty_tpl->tpl_vars['datepickerStop']->value;?>
" style="width:140px" />
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Username');?>

                      </td>
                      <td>
                        <select id="UserFilter" name="UserFilter" style="width:150px">
                          <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['UserIds']->value,'output'=>$_smarty_tpl->tpl_vars['Usernames']->value,'selected'=>$_smarty_tpl->tpl_vars['UserSelected']->value),$_smarty_tpl);?>

                        </select>
                      </td>
                    </tr>
                  </table>
                  <center>
                    <button class="btn btn-info" id="FilterButton" type="submit" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Filter');?>
</button>
                    <button class="btn btn-warning" id="ClearFilter"  type="submit" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ClearFilter');?>
</button>
                  </center>
                </form>
               </div>
              </td>
              <td style="width:100px">
              </td>
              <td valign="bottom">
                <div class="jtable-main-container">
                <div class="jtable-busy-panel-background jtable-busy-panel-background-invisible" style="display: none; width: 1331px; height: 139px;"></div>
                <div class="jtable-busy-message" style="display: none;"></div>

                <div class="jtable-title">
                <div class="jtable-title-text"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SearchJob');?>
</div>
                <div class="jtable-toolbar"></div>
                </div>                
                <form>
                  <table class="jtable">
                    <tr>
                      <td>
                        Job Id 
                      </td>
                      <td> <input type="text" name="SearchJobId" id="SearchJobId" style="width:80px"/>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'AudioFile');?>

                      </td>
                      <td> <input type="text" name="SearchJobAudioFileName" id="SearchJobAudioFileName" ></input>        
                      </td>
                    </tr>
                  </table>
                  <center>
                    <button class="btn btn-info" type="submit" id="SearchRecordsButton"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Search');?>
</button>
                    <button class="btn btn-warning" id="ResetSearch"  type="submit" ><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ResetSearch');?>
</button>
                  </center>
                </form>
              </td>
            </tr>
          </table>
        </div>
        <div align=left>
        <INPUT class="btn btn-info" id="RefreshButton" TYPE="button"  VALUE="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'BTN_Refresh');?>
"> 
        </div>

        <div id="ProcessList" style="width:100%"></div>
      </FONT> 
      <br/>
      <br/>
  </body>
</html>

<?php }
}
