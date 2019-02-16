<?php
/* Smarty version 3.1.30, created on 2019-01-17 17:47:18
  from "/home/MSF/www/smarty/templates/MediaEditor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40b196944ae8_01089642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80bed7e64f3caa6f562881e95580366f445ac04e' => 
    array (
      0 => '/home/MSF/www/smarty/templates/MediaEditor.tpl',
      1 => 1496304950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5c40b196944ae8_01089642 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['web_pages_title']->value;?>
</title>

  <link rel="stylesheet" type="text/css" href="./css/tableau.css">
  <link rel="stylesheet" type="text/css" href="./css/player.css">
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link type="text/css" href="./scripts/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="./css/tooltipster.css" />
  <link href="./scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="./css/panels.css">

        
    <style type="text/css">
      .highlight{ background-color: #945710 ; color: #ffffff }
        /* Cibler les éléments <li> appartenant à un élément de classe "icone" */
        .channel {
           list-style-type: none;
           display: inline-block;
           width: 18px;
           height: 19px;
           background: url('images/Number-icon-set1.png') 0 40px;
        }
        .channel-1 { left: 0px; }
        .channel-2 { left: 18px; background: url('images/Number-icon-set1.png') -16px 40px;}
        
        .user {
           list-style-type: none;
           display: inline-block;
           width: 18px;
           height: 18px;
           background: url('images/Number-icon-set1.png') 0 142px;
        }
        .user-1 { left: 0px; }
        .user-2 { left: 17px; background: url('images/Number-icon-set1.png') -17px 142px;}
        .user-3 { left: 34px; background: url('images/Number-icon-set1.png') -34px 142px;}
        .user-4 { left: 52px; background: url('images/Number-icon-set1.png') -52px 142px;}
        .user-5 { left: 67px; background: url('images/Number-icon-set1.png') -67px 142px;}
        .user-6 { left: 84px; background: url('images/Number-icon-set1.png') -84px 142px;}
        .user-7 { left: 101px; background: url('images/Number-icon-set1.png') -101px 142px;}
        .user-8 { left: 116px; background: url('images/Number-icon-set1.png') -116px 142px;}
        .user-9 { left: 133px; background: url('images/Number-icon-set1.png') -133px 142px;}
        .user-10 { left: 150px; background: url('images/Number-icon-set1.png') -150px 142px;}
        
    </style>
      
      <?php echo '<script'; ?>
 type="text/javascript" src="scripts/Fonctions.js"><?php echo '</script'; ?>
>

  <!-- CSS and javascript import to use JQuery API --> 
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery.custom.min.js"><?php echo '</script'; ?>
>

  <!-- CSS and javascript import to use tooltipster API --> 
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jquery.tooltipster.min.js"><?php echo '</script'; ?>
>

  <!-- javascript import to build the JWPlayer --> 
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/jwplayer.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">jwplayer.key="1lj3vCgtr59lPqG48KTHfSJAQ1Ey8m6x4ltKew==";<?php echo '</script'; ?>
>

  <!-- javascript anc css import to manage MediaView --> 
  <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/mediaviews.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
 src="./scripts/jtable/jquery.jtable.js" type="text/javascript"><?php echo '</script'; ?>
>
  

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, ((string)$_SESSION['lang']).".txt", null, 0);
?>


<div align="left">
<font size=4 color=#ff0000>
    <b><?php echo $_smarty_tpl->tpl_vars['MessageDeRetour']->value;?>
</b></br>
</font>
  
  <button class="btn btn-info" onClick="history.go(-1);"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Back');?>
</span></button>

  <div align="center">
  
    <div class="jtable-busy-message" id="busy-message" style="left:300px; display: none;"><?php echo $_smarty_tpl->tpl_vars['PleaseWait']->value;?>
</br></div>
    <font size=5 color=#0000ff><br>  </font> 
  
      <?php echo '<script'; ?>
>

        function Convert()
        {
          $('#busy-message').show();
          //fait un reset du cookie qui maintient les valeurs des filtres
          var xmlHttp = null;

           xmlHttp = new XMLHttpRequest();
           
           xmlHttp.open( "GET", "./MediaEditor.php?function=convert&jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&IdUser=<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
", false );
           
           xmlHttp.send( null );
           //console.log( xmlHttp.responseText);
           
           $('#busy-message').hide();
        }
        
        $(document).ready(function() 
        {
            $(".trigger").click(function(){
                    $(".panel").toggle("fast");
                    $(this).toggleClass("active");
                    ShowGraph();
            $('#InfosList').jtable('load', {
            });                    
                    return false;
            });
            
            $("#Editable").change(function()
            {
              $("#SaveModifications").toggle();
              //var Value =  this.checked;
              $('#ContentEdit').attr('contenteditable', this.checked) ;
            });           
          //Prepare jTable
          $('#InfosList').jtable({
          
            title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'InfosList');?>
',
          
            paging: false,
            pageSize: 20,
            sorting: false,
            defaultSorting: '',
            columnResizable : true,
            actions: {

        
              listAction: './scripts/jQGraphStatsTrans.php?JobId=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Stats=Infos&Username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&DateSubmit="<?php echo $_smarty_tpl->tpl_vars['DateSubmit']->value;?>
"&AudioType=<?php echo $_smarty_tpl->tpl_vars['ExecAudioType']->value;?>
&Language=<?php echo $_smarty_tpl->tpl_vars['ExecLanguage']->value;?>
'

                
            },
            fields: {
              Parameter: {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Parameter');?>
'
          
              },
              Value : {
          
                title: '<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Value');?>
'
          
              }
            },
            //Register to selectionChanged event to hanlde events
            recordsLoaded : function () {
/*              var ROWNUMBER = 2;
              var $row = $('#ProcessList').find(".jtable tbody tr:eq(" + ROWNUMBER + ")");    
              $row.css("background", "#FF0000");            */
            }
            
          });


          <?php if ($_smarty_tpl->tpl_vars['DoConvert']->value == 1) {?>
           Convert();
          <?php }?>
           
        });
        
      <?php echo '</script'; ?>
>
          
          
          <div align="center"><font size=4 color=#0000ff><?php echo $_smarty_tpl->tpl_vars['AudioFileName']->value;?>
</font></div>
    <table>
      <tr>
        <td>
<?php if ($_smarty_tpl->tpl_vars['DisablePlayer']->value == 1) {?>            
    <font size=8 color=#ff0000> Player disabled &nbsp; &nbsp; &nbsp;</font>
<?php } else { ?>
          <div id="player" style="margin-bottom: 5px; width: 600px;" >Loading the player ...</div>
<?php }?>          
        </td>
        <td>
          <a class="btn btn-info"  href="download.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Type=results&format=Text"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DownloadTextFile');?>
</a></br></br>
          <a class="btn btn-info"  href="download.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Type=results&format=Xml"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DownloadXmlFile');?>
</a></br></br>
          <a class="btn btn-info"  href="download.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Type=results&format=Srt"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DownloadSrtFile');?>
</a></br></br>
          <a class="btn btn-info"  href="download.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Type=results&format=Lex"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DownloadLexFile');?>
</a></br></br>
          <a class="btn btn-info"  href="download.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Type=results&format=Json"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DownloadJsonFile');?>
</a></br>
        </td>
      </tr>
    </table>

<?php if ($_smarty_tpl->tpl_vars['DisablePlayer']->value == 0) {?>      
     
           
        <?php echo '<script'; ?>
 type="text/javascript">
          var playerInstance = jwplayer("player").setup({
            flashplayer: "./scripts/jwplayer.swf",            

      <?php if ($_smarty_tpl->tpl_vars['DoConvert']->value == 1) {?>
            file: '<?php echo $_smarty_tpl->tpl_vars['MediaMp3']->value;?>
',
      <?php } else { ?>
            file: '<?php echo $_smarty_tpl->tpl_vars['Media']->value;?>
',
       <?php }?>

            image: '',
            height: '340',
            width: '600',
            stretching: "uniform",
            events: 
            {
              onPlay: function() 
              {
                updateValues();
              }
            }                
          })
          .onError(function(event){
            console.log('onError', 'message=='+event.message+'');
            if (confirm('Error loading media, try to reencode the media ?'))
            {
              Convert();
              jwplayer("player").setup({
                  file: '<?php echo $_smarty_tpl->tpl_vars['MediaMp3']->value;?>
',
                  height: '340',
                  width: '600',
                  events: 
                  {
                    onPlay: function() 
                    {
                      updateValues();
                    }
                  }                
              });

            }
            
          });


        if('contentEditable' in document.createElement('span')){
            //alert('ContentEditable is supported by your browser');
        }else{
            alert('ContentEditable is not supported by your browser');
        }               
          
        <?php echo '</script'; ?>
>
      
<?php }?>
      </br>
      <?php if (empty($_smarty_tpl->tpl_vars['ShowSpeakers']->value)) {?>
      <label><input type="checkbox" Id="Editable" value="Edit"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'EditTheText');?>
 (Beta test)</label>
      <?php }?>
       &nbsp; &nbsp; &nbsp;
      <!-- <button onclick="window.location.href='MediaEditor2.php?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&IdUser=<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
'">New player with VLC</button> -->
      </br>
    <table>
      <tr>
        <td>
      
          <ul id="ContentEdit"  contenteditable="false">
          <div spellcheck="true">
          <div id="speech2text" lang="<?php echo $_smarty_tpl->tpl_vars['Lang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['Dir']->value;?>
" style="
               background-color:#222222; color: #AAA; text-align: justify; font-size:17px;  
                width: 800px;   height: 400px; margin-top:8px; margin-left:8px; margin-right:8px;
               overflow:auto; 
               border:1px solid #ccc; -moz-border-radius:6px;-webkit-border-radius : 6px" >
                <p>
                  <?php echo $_smarty_tpl->tpl_vars['SubTitles']->value;?>

                </p>
            </div>
            </div>
        </ul>
        </td>
        <td>
          If colors are displayed :</br> 
          <font color=#33b506>High confidency </font></br>
          <font color=#c4c61a>Medium confidency</font></br> 
          <font color=#ff0000>Low confidency</font></br>
            </br></br></br>
        </td>
      </tr>
    </table>
    
      <?php echo '<script'; ?>
 type="text/javascript">
        //on envoie les données modifiées vers MSF et elles remplaceront celles
        //de la transcription exacte
        function ValidateModifications()
        {  
          var selectors = $("#speech2text p ");
          var Result="";
           $('#busy-message-save').show();
          $.each( selectors, function( index, value )
              {
                //Result += value.className + "=" + value.innerHTML + "\n";
                Result += value.innerHTML + " ";
              });          
              //console.log( Result ); 
              
           var data = new FormData();
           data.append('function', 'ModifyText');
    
           data.append('jobid', '<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
');
           data.append('IdUser', '<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
');
    
           data.append('EditedText', Result);
           
           xmlHttp = new XMLHttpRequest();
           xmlHttp.onreadystatechange = function()
           {
              if(xmlHttp.readyState == 4)
              {
                var result = xmlHttp.responseText;      
                console.log( result);

                if ( xmlHttp.responseText === "1" )
                  alert("successfuly saved");
                else
                  alert("ERROR saving text : "+xmlHttp.responseText);
                 $('#busy-message-save').hide();
              }
           }           
           xmlHttp.open( "POST", "./MediaEditor.php", true );
           xmlHttp.send( data );
          
              
        }
       <?php echo '</script'; ?>
>
    
    <div class="jtable-busy-message" id="busy-message-save" style="left:300px; display: none;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SavingInProgress');?>
</br></div>
    <input class="btn btn-info" id="SaveModifications" type="button" onClick="ValidateModifications();" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SaveModifications');?>
" style="display: none">
      </br> 

   </div>


    </br>

</br></br></br></br></br> 


      <?php echo '<script'; ?>
>
       function ShowGraph()
        {
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

          var jsonurl = "./scripts/jQGraphStatsTrans.php?JobId=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Stats=Gender";

          
          var PlotGender = $.jqplot('ChartGender', jsonurl, {
            title: "Gender",
            seriesDefaults:
                {
                  renderer: $.jqplot.PieRenderer,
                  shadow: true,            
                  rendererOptions: {
                    showDataLabels: true,
                    // By default, data labels show the percentage of the donut/pie.
                    // You can show the data 'value' or data 'label' instead.
                    dataLabels: 'label'                      
                  }
                },
            dataRenderer: ajaxDataRenderer,
            dataRendererOptions: {unusedOptionalUrl: jsonurl}
          });

          jsonurl = "./scripts/jQGraphStatsTrans.php?JobId=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&Stats=SpeachTime";

          var PlotSpeakTime = $.jqplot('ChartSpeachTime', jsonurl, {
            title: "Speakers",
            seriesDefaults:
                {
                  renderer: $.jqplot.PieRenderer,
                  shadow: true,            
                  rendererOptions: {
                    showDataLabels: true,
                    // By default, data labels show the percentage of the donut/pie.
                    // You can show the data 'value' or data 'label' instead.
                    dataLabels: 'label'                      
                  }
                },
            dataRenderer: ajaxDataRenderer,
            dataRendererOptions: {unusedOptionalUrl: jsonurl}
          });


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
    <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/plugins/jqplot.pieRenderer.min.js"><?php echo '</script'; ?>
>

<div id="container">

</div>


<div class="panel">
    <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PlayOption');?>
</b><br>
    <a class="btn btn-info"  href="?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
&IdUser=<?php echo $_smarty_tpl->tpl_vars['IdUser']->value;?>
&ShowSpeakers"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ShowSpeakers');?>
</a>
    <a class="btn btn-info"  href="?jobid=<?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'HideSpeakers');?>
</a></br></br>
    <b><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Statistics');?>
</b><br>
        <table>
            <tr>
                <td>
                    <div id="ChartGender" style="height:200px; width:200px;left:10px;" ></div>
                </td>
                <td>
                    <div id="ChartSpeachTime" style="height:200px; width:200px;left:10px;" ></div>
                </td>
            <tr>
        </table>
        <div id="InfosList" style="width:100%"></div>
        
        
</div>
<a class="trigger" href="#"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ShowOptionnalfields');?>
</a>
</body>
</html>


<?php }
}
