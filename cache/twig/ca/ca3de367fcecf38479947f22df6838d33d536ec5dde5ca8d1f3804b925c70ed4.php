<?php

/* home.twig */
class __TwigTemplate_6ffe4bde708100904676d28448c5201bcb46a6e75a450ce7b9a99a0f5d950daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<title>AGSatTrack - Online</title>

<script type=\"text/javascript\" src=\"js/cvi_busy_lib.js\"></script>
<script type=\"text/javascript\">
    ctrl = getBusyOverlay(document.documentElement, {color:'black', opacity:0.5, text: 'Loading Please Wait ...'});
</script>

<link rel=\"stylesheet\" href=\"/css/agsattrack.css\">
<link rel=\"stylesheet\" href=\"/css/ribbon.css\">
<link rel=\"stylesheet\" href=\"/css/statusbar.css\">
<link rel=\"stylesheet\" href=\"/css/views.css\">
<link rel=\"stylesheet\" href=\"/css/windows.css\">

<link rel=\"stylesheet\" href=\"/js/cesium/Cesium/Widgets/widgets.css\">


<link rel=\"stylesheet\" type=\"text/css\" href=\"/js/easyui/themes/gray/easyui.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/js/easyui/themes/icon.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/js/jqueryui/smoothness/jquery-ui.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/js/agchecklist/checkList.css\">

<script type=\"text/javascript\" src=\"/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery-migrate-1.2.1.min.js\"></script>

<script type=\"text/javascript\" src=\"/js/jqueryui/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/easyui/jquery.easyui.min.js\"></script>

<script type=\"text/javascript\" src=\"/js/konva/konva.js\"></script>
<script type=\"text/javascript\" src=\"/js/agsattrack.js\"></script>
<script type=\"text/javascript\" src=\"/js/cookies/jquery.cookies.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/querystring.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/settings.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/datamanager.js\"></script>
<script type=\"text/javascript\" src=\"/js/agchecklist/jquery.ui.agcheckList.js\"></script>

<script type=\"text/javascript\" src=\"/js/classes/views/passesview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/3dview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/polarview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/skyview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/timelineview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/listview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/options.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/debug.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/home.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/azelview.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views/dx.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/observer.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/spmengine.js\"></script>

<script type=\"text/javascript\" src=\"/js/classes/ui.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/tles.js\"></script>

<script type=\"text/javascript\" src=\"/js/classes/sunmoon.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/planets.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/date.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/util.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/images.js\"></script>
<script type=\"text/javascript\" src=\"/js/classes/views.js\"></script>  
<script type=\"text/javascript\" src=\"/js/classes/windows.js\"></script>  
<script type=\"text/javascript\" src=\"/js/agsatbox/agsatbox.js\"></script>
            
<link href=\"/js/ribbon/ribbon/ribbon.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"/js/ribbon/soft_button.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"/js/ribbon/ribbon/ribbon.js\"></script>
<script type=\"text/javascript\" src=\"/js/ribbon/ribbon/jquery.tooltip.min.js\"></script>


<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxcore.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxdata.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxbuttons.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxscrollbar.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxlistbox.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxcheckbox.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxdragdrop.js\"></script>  
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxdropdownlist.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxmenu.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxpanel.js\"></script>
<script type=\"text/javascript\" src=\"/js/jqwidgets/jqxwindow.js\"></script>
<link rel=\"stylesheet\" href=\"/js/jqwidgets/styles/jqx.base.css\" type=\"text/css\" />

<script src=\"/js/jscolor/jscolor.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\" src=\"/js/joyride/jquery.joyride-2.0.2.js\"></script>
<link href=\"/js/joyride/joyride-2.0.2.css\" rel=\"stylesheet\" type=\"text/css\" />

<script src=\"/js/modernizer.js\"></script>
<script src=\"/js/platform.js\"></script>
<script src=\"/js/startup.js\"></script>

<link href=\"/js/cookiecuttr/cookiecuttr.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"/js/cookiecuttr/jquery.cookiecuttr.js\"></script>

<script src=\"http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places\"></script>
<script src=\"/js/geocomplete/jquery.geocomplete.min.js\"></script>


<script src=\"/js/imagecombo/ddslick.js\"></script>
   
</head>
<body class='easyui-layout default' style=\"display: none\" id=\"body\">
    <div data-options=\"region:'north', title:'&nbsp;'\" style=\"height: 120px;\">



        <div id=\"ribbon\">
            <span class=\"ribbon-window-title\"></span>

            <div class=\"ribbon-tab file\" id=\"info-tab\">
                <span class=\"ribbon-title\">Info</span>
                <div class=\"ribbon-backstage\">
                    <table with=\"100%\">
                        <tr>
                            <td width=\"50%\" valign=\"top\">
                                <h2>Credits</h2>
                                <h3>Satellite Orbit tracked (iSat) <a target=\"_blank\" href=\"https://github.com/koansys/isat\">Visit on GitHub<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                
                                Without the excellent work being done on this project <em>AgSatTrack - Online</em> would not exists. The SOT project provided the initial code to build a test version of <em>AgSatTrack - Online</em> prior to starting development on the full blown version. 
            
                                <h3>Cesium <a target=\"_blank\" href=\"http://cesium.agi.com/\">Visit Cesium Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>

<div style=\"float:left;\">                                
    <a href=\"http://cesium.agi.com/\" target=\"_blank\"><img src=\"/images/cesium_logo.svg\" width=\"100\" /></a>
</div>

                                Cesium is a JavaScript library for creating 3D globes and 2D maps in a web browser without a plugin. It uses WebGL for hardware-accerlated graphics, and is cross-platform, cross-browser, and tuned for dynamic-data visualization. Cesium is open source under the Apache 2.0 license. It is free for commercial and non-commercial use.

                                <h2>Other Libraries used</h2>
                                <h3>jQuery <a target=\"_blank\" href=\"http://jquery.com/\">Visit jQuery Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>jQuery UI <a target=\"_blank\" href=\"http://jqueryui.com/\">Visit jQuery UI Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>EasyUI <a target=\"_blank\" href=\"http://www.jeasyui.com/\">Visit EasyUI Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>jQWidgets <a target=\"_blank\" href=\"http://www.jqwidgets.com/\">Visit jQWidgets Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>Joyride <a target=\"_blank\" href=\"http://www.zurb.com/playground/jquery-joyride-feature-tour-plugin\">Visit Joyride Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>Kinetic <a target=\"_blank\" href=\"http://kineticjs.com/\">Visit Kinetic Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>Modernizer <a target=\"_blank\" href=\"http://modernizr.com/\">Visit Modernizer Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>

                                <h3>Gpredict <a target=\"_blank\" href=\"http://gpredict.oz9aec.net/\">Visit Gpredict Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                <h3>PredictLib <a target=\"_blank\" href=\"http://andrewtwest.com/orbtrak/\">Visit PredictLib Home<span class=\"imageanchor\"><img src=\"/images/external_link.gif\"></span></a></h3>
                                
                                
                                <h2>Special Thanks To</h2>
                                Steve (aka Virus) for the logo
                            </td>
                            <td valign=\"top\">
                                <h2>Licence</h2>
                                <p>Copyright 2012-2013 Alex Greenland</p>
                                <p>Licensed under the Apache License, Version 2.0 (the \"License\");<br /> you may not use this file except in compliance with the License. You may obtain a copy of the License at</p>
                                <a target=\"_blank\" href=\"http://www.apache.org/licenses/LICENSE-2.0\">http://www.apache.org/licenses/LICENSE-2.0</a>
                                <p>Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an \"AS IS\" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.</p>                                
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class=\"ribbon-tab\" id=\"format-tab\">
                <span class=\"ribbon-title\">Home</span>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\" data-tab=\"home\">View</span>
                    <div class=\"ribbon-button ribbon-button-large\" id=\"view-select\" data-type=\"dropdownmenu\">
                        <span class=\"button-title\">Select <img src=\"js/ribbon/arrow_down.png\"></span> 
                        <span class=\"button-help\"><strong>Select view.</strong><br /><br />Selects the view you wish to display.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/view.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/view.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/view.png\" />
                        <div class=\"ribbon-menu ribbon-menu-closed\">
                            <div class=\"title\">Select View</div>
                            <ul>
                                <li class=\"satview\" data-options=\"list\"><img src=\"images/ribbon/list.png\"><span>List View</span></li>
                                <li class=\"satview\" data-options=\"passes\"><img src=\"images/ribbon/table.png\"><span>Passes View</span></li>
                                <li class=\"satview\" data-options=\"3d\"><img src=\"images/ribbon/globe.png\"><span>3D View</span></li>
                                <li class=\"satview\" data-options=\"polar\"><img src=\"images/ribbon/polar.png\"><span>Polar View</span></li>
                                <li class=\"satview\" data-options=\"sky\"><img src=\"images/ribbon/sky.png\"><span>Sky View</span></li>
                                <li class=\"satview\" data-options=\"timeline\"><img src=\"images/ribbon/timeline.png\"><span>Timeline View</span></li>
                                <li class=\"satview\" data-options=\"dx\"><img src=\"/js/ribbon/icons/normal/dx-16.png\"><span>Dx View</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"ribbon-button ribbon-button-large view-reset\">
                        <span class=\"button-title\">Reset</span>
                        <span class=\"button-help\"><strong>Reset view.</strong><br /><br />Resets the current view to its defaults.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                    </div>
                </div>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Satellites</span>
                    
                    <div class=\"ribbon-fl\">
                        <div class=\"ribbon-button ribbon-button-large\" id=\"sat-group-selector\"  data-type=\"dropdownmenu\">
                            <span class=\"button-title\">Groups <img src=\"js/ribbon/arrow_down.png\"></span> 
                            <span class=\"button-help\"><strong>Select Satellite Group.</strong><br /><br />Selects the group of satellites.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/group.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/group.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/group.png\" />
                            <div class=\"ribbon-menu ribbon-menu-closed\">
                                <div class=\"title\">Select Group</div>
                                <div id=\"sat-group-selector-listbox\"></div>
                            </div>
                        </div>
                        <div class=\"ribbon-button ribbon-button-large\" id=\"sat-selector\" data-type=\"dropdownmenustay\">
                            <span class=\"button-title\">Select <img src=\"js/ribbon/down.png\" /></span> 
                            <span class=\"button-help\"><strong>Select Satellites.</strong><br /><br />Selects the satellites to display and show orbits for.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/satellite.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/satellite.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/satellite.png\" />
                            <div class=\"ribbon-menu ribbon-menu-closed\">
                                <div class=\"title\">Select Satellite</div>
                                <div id=\"ag-satselector\"> </div>
                            </div>                        
                        </div>
                    </div>
                    <div class=\"ribbon-fl\">
                        <div class=\"ribbon-button ribbon-button-small\" id=\"sat-display-all\">
                            <span class=\"button-title\"></span>
                            <span class=\"button-help\"><strong>Display All Satellites.</strong><br /><br />Display all satellites in the current group.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/satellite_all.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/satellite_all.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/satellite_all.png\" />
                        </div>
                        <div class=\"ribbon-button ribbon-button-small\" id=\"sat-display-none\">
                            <span class=\"button-title\"></span> 
                            <span class=\"button-help\"><strong>Remove All Satellites.</strong><br /><br />Remove all satellites from display.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/satellite_delete_all.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/satellite_delete_all.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/satellite_delete_all.png\" />
                        </div>                     
                    </div>
                    <div class=\"ribbon-button ribbon-button-large disabled\" id=\"home-update-elements\" data-event=\"agsattrack.updategroup\">
                        <span class=\"button-title\">Update <br />Elements</span>
                        <span class=\"button-help\"><strong>Update Elements.</strong><br /><br />Update the elements for this satellite group.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/download.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/download.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/download.png\" />
                    </div>                                      
                </div>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Settings</span>
                    <div style=\"float:left\">
                        <div class=\"ribbon-button ribbon-button-large\" id=\"options\">
                            <span class=\"button-title\">Options</span> 
                            <span class=\"button-help\"></span> 
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/settings.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/settings.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/settings.png\" />
                        </div>
                        <div class=\"ribbon-button ribbon-button-large\" id=\"options\" data-event=\"agsattrack.resetoptions\">
                            <span class=\"button-title\">Reset All<br />Options</span> 
                            <span class=\"button-help\"></span> 
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                        </div>                        
                    </div>
                    <div style=\"float:left\">                    
                        <div class=\"ribbon-button ribbon-button-small disabled\" id=\"options-save\" unselectable=\"on\">
                            <span class=\"button-help\" unselectable=\"on\"></span>
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/save.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/save.png\" />
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/save.png\" />
                            <span class=\"button-title\" unselectable=\"on\">Save</span>
                        </div>
                    </div>
                </div>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Help</span>
                    <div style=\"float:left\">
                        <div class=\"ribbon-button ribbon-button-large\" id=\"help-help\">
                            <span class=\"button-title\">Help</span> 
                                <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/help.png\" /> 
                                <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/help.png\" /> 
                                <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/help.png\" />
                        </div>
                    </div>
                    <div style=\"float:left\">                    
                        <div class=\"ribbon-button ribbon-button-small\" id=\"help-tour\" unselectable=\"on\">
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/tour.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/tour.png\" />
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/tour.png\" />
                            <span class=\"button-title\" unselectable=\"on\">Tour</span>
                        </div>
                        <div class=\"ribbon-button ribbon-button-small\" id=\"help-contact\" unselectable=\"on\">
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/email.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/email.png\" />
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/email.png\" />
                            <span class=\"button-title\" unselectable=\"on\">Contact</span>
                        </div>
                        <div class=\"ribbon-button ribbon-button-small disabled\" id=\"help-forum\" unselectable=\"on\">
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/forum.png\" />
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/forum.png\" />
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/forum.png\" />
                            <span class=\"button-title\" unselectable=\"on\">Community</span>
                        </div>                                                  
                    </div>
                </div>                                        
            </div>
            
            <div class=\"ribbon-tab\" id=\"list-tab\">
                <span class=\"ribbon-title\" data-tab=\"list\">List View</span>
                
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    
                    <div class=\"ribbon-fl\" unselectable=\"on\">            
                        
                        <div class=\"ribbon-button ribbon-button-large view-reset\" id=\"list-view-reset\">
                            <span class=\"button-title\">Reset</span> 
                            <span class=\"button-help\"><strong>Reset view.</strong><br /><br />Resets the list view to its defaults.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                        </div>
                            
                        <div class=\"ribbon-button ribbon-button-large\" id=\"list-view-show-mutual\" data-type=\"togglebutton\" data-event=\"agsattrack.listviewshowmutuallocations\">
                            <span class=\"button-title\">Show<br/>Mutual</span> 
                            <span class=\"button-help\"><strong>Show Mutual.</strong><br /><br />Adds a column to the table which indicates if the satellite is visible from both your location and the mutual observer.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/mutual.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/mutual.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/mutual.png\" />
                        </div>                                                 
                    </div>
                </div>
            </div>

            <div class=\"ribbon-tab\" id=\"3d-tab\">
                <span class=\"ribbon-title\" data-tab=\"3d\">3D View</span>
                
                <div class=\"ribbon-section\">                

                </div>
                                                    
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>

                    <div class=\"ribbon-fl\">

                        <div class=\"ribbon-button ribbon-button-large\" id=\"3d-projection\" data-type=\"dropdownmenu\">
                            <span class=\"button-title\">Views <img src=\"js/ribbon/arrow_down.png\"></span> <span class=\"button-help\"></span>
                            <span class=\"button-help\"><strong>Select view.</strong><br /><br />Choose from 3d, 2d or 2.5d views.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/viewselect.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/viewselect.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/viewselect.png\" />
                            <div class=\"ribbon-menu ribbon-menu-closed\">
                                <div class=\"title\">Select View</div>
                                <ul>
                                    <li class=\"3dview\" data-options=\"twod\"><img src=\"images/ribbon/list.png\"><span>2D View</span></li>
                                    <li class=\"3dview\" data-options=\"twopointfived\"><img src=\"images/ribbon/table.png\"><span>2.5D View</span></li>
                                    <li class=\"3dview\" data-options=\"threed\"><img src=\"images/ribbon/globe.png\"><span>3D View</span></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class=\"ribbon-button ribbon-button-large\" id=\"3d-provider\" data-type=\"dropdownmenu\" style=\"width:95px;\">
                            <span class=\"button-title\">Provider <img src=\"js/ribbon/arrow_down.png\"></span> 
                            <span class=\"button-help\"><strong>Map Provider.</strong><br /><br />Select the provider for the globe rendering.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/tile.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/tile.png\" />
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/tile.png\" />
                            <div class=\"ribbon-menu ribbon-menu-closed\">
                                <div class=\"title\">Select Provider</div>
                                <ul>
                                    <li class=\"tile\" data-options=\"staticimage\"><img src=\"js/ribbon/icons/normal/image.png\"><span>Static Image</span></li>
                                    <li class=\"tile\" data-options=\"bing\"><img src=\"js/ribbon/icons/normal/bing.png\"><span>Bing maps</span></li>
                                    <li class=\"tile\" data-options=\"osm\"><img src=\"js/ribbon/icons/normal/openstreetmap.png\"><span>Open StreetMap</span></li>
                                    <li class=\"tile\" data-options=\"arcgis\"><img src=\"js/ribbon/icons/normal/arcgis.png\"><span>Arc Gis</span></li>

                                </ul>
                            </div>
                        </div>                    
                                            
                        <div class=\"ribbon-button ribbon-button-large view-reset\" id=\"3d-view-reset\" style=\"width:60px;\">
                            <span class=\"button-title\">Reset</span> 
                            <span class=\"button-help\"><strong>Reset view.</strong><br /><br />Resets the 3d view to its defaults.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                        </div>
                                            
                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showatmosphere\" id=\"3d-atmosphere\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/atmoshpere-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/atmoshpere-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/atmoshpere-16.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Atmoshpere.</strong><br /><br />Toggle displaying the atmoshpere.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showskybox\" id=\"3d-skybox\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/cube.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/cube.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/cube.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Skybox.</strong><br /><br />Toggle displaying the skybox.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        </div>                                             
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showfps\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/fps.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/fps.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/fps.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show FrameRate.</strong><br /><br />Display the frame rate.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        </div>                                             

                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showmousepos\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/mousepos.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/mousepos.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/mousepos.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Mouse Pos.</strong><br /><br />Toggle displaying the lat and lon of the mouse position.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                             </div>
                        
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showterrain\" id=\"3d-show-terrain\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/terrain.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/terrain.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/terrain.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Terrain.</strong><br /><br />Toggle displaying terrain data<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        </div>
                        
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showcities\" id=\"3d-show-cities\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/citybutton.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/citybutton.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/citybutton.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Cities.</strong><br /><br />Toggle displaying Cities<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        </div>                                                 
                    </div>                                        
                </div>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Satellite Options</span>
                    
                    <div class=\"ribbon-button ribbon-button-large\" id=\"3d-view-sat-info-locations\" data-type=\"togglebutton\" data-event=\"agsattrack.showmutuallocations\">
                        <span class=\"button-title\">Show<br/>Mutual</span> 
                        <span class=\"button-help\"><strong>Show Mutual Locations.</strong><br /><br />Show Mutual locations visible from the selected satellite.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/mutual.png\" />
                    </div>   
                                        
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showsatlabels\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/label.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/label.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/label.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Satellite Labels.</strong><br /><br />Toggle displaying the name of the satellites.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                                 </div>                    
                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.setfootprinttype\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/filledfootprint.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/filledfootprint.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/filledfootprint.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show footprints as filled circles.</strong><br /><br />Toggle displaying the  footprint as a filled circle.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>
                        </div>  
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.setssp\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/ssp.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/ssp.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/ssp.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Satellite ssp.</strong><br /><br />Toggle displaying the sub satellite points for a pass.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>
                        </div>  
                    </div>
                </div>
                
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Information</span>
                    <div class=\"ribbon-button ribbon-button-large\" id=\"3d-view-sat-info-locations\" data-type=\"button\" data-event=\"agsattrack.show3dlocationinfo\" style=\"width:60px;\">
                        <span class=\"button-title\">Visible<br/>Locations</span> 
                        <span class=\"button-help\"><strong>Visible Locations.</strong><br /><br />Show locations visible from the selected satellite.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/earth.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/earth.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/earth.png\" />
                    </div>                    
                </div>
                
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Follow</span>
                    <div class=\"ribbon-button ribbon-button-large\" id=\"3d-follow-sat\" data-type=\"grouptogglebutton\" data-event=\"agsattrack.followsatellite\" data-group=\"follow\">
                        <span class=\"button-title\">From<br />Satellite</span> 
                        <span class=\"button-help\"><strong>Follow Satellite.</strong><br /><br />Follows the selected satellite, looking at your location.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"/js/ribbon/icons/normal/orbit.png\" />
                        <img class=\"ribbon-icon ribbon-hot\" src=\"/js/ribbon/icons/hot/orbit.png\" />
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"/js/ribbon/icons/disabled/orbit.png\" />
                    </div>
                    <div class=\"ribbon-button ribbon-button-large\" id=\"3d-follow-obs\" data-type=\"grouptogglebutton\" data-event=\"agsattrack.followsatelliteobs\" data-group=\"follow\">
                        <span class=\"button-title\">From<br />Home</span> 
                        <span class=\"button-help\"><strong>Follow Satellite.</strong><br /><br />Follows the selected satellite, looking from your location. This will ONLY work when the satellite is visible.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"/js/ribbon/icons/normal/follow-obs.png\" />
                        <img class=\"ribbon-icon ribbon-hot\" src=\"/js/ribbon/icons/hot/follow-obs.png\" />
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"/js/ribbon/icons/disabled/follow-obs.png\" />
                    </div>
                    <div class=\"ribbon-button ribbon-button-large\" id=\"3d-follow-view\" data-type=\"grouptogglebutton\" data-event=\"agsattrack.followsatelliteview\" data-group=\"follow\">
                        <span class=\"button-title\">Satellite<br/>View</span> 
                        <span class=\"button-help\"><strong>Satellite View.</strong><br /><br />Shows the view of the earth from the satellites perspective.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"/js/ribbon/icons/normal/follow-view.png\" />
                        <img class=\"ribbon-icon ribbon-hot\" src=\"/js/ribbon/icons/hot/follow-view.png\" />
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"/js/ribbon/icons/disabled/follow-view.png\" />
                    </div>  
                </div>

                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Select And Fly To Satellite</span>
                    <select class=\"easyui-combobox\" id=\"3d-sat-finder\" style=\"width:200px;\">
                    </select>                    
                </div>                
                
                <div style=\"float:right;\">
                    <a href=\"http://cesium.agi.com/\" target=\"_blank\"><img src=\"/images/cesium_logo.svg\" width=\"300\" /></a>
                    <div id=\"camera-pos\">POS</div>
                </div>
                
            </div>

            <div class=\"ribbon-tab\" id=\"passes-tab\">
                <span class=\"ribbon-title\" data-tab=\"passes\">Passes View</span>
                
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    <div class=\"ribbon-button ribbon-button-large view-reset\">
                        <span class=\"button-title\">Reset</span>
                        <span class=\"button-help\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                    </div>  

                    <div class=\"ribbon-button ribbon-button-large\" id=\"passes-view-show-mutual\" data-type=\"togglebutton\" data-event=\"agsattrack.passesshowmutuallocations\">
                        <span class=\"button-title\">Show<br/>Mutual</span> 
                        <span class=\"button-help\"><strong>Show Mutual.</strong><br /><br />Adds a column to the passes grid indicating if the selected satellite is visible from your home location and the mutual observers location.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/mutual.png\" />
                    </div> 
                                        
                    <div style=\"width: 100px; float:left;\">
                        <table width=\"100%\">
                            <tr>
                                <td colspan=\"2\" style=\"border:1px solid #ccc\" align=\"center\">Pass Table</td>
                            </tr>
                            <tr>
                                <td width=\"50%\" style=\"border:1px solid #ccc\">
                                
                                    <div class=\"ribbon-button ribbon-button-small\" id=\"passes-bl-view-select\" data-type=\"dropdownmenu\" data-event=\"agsattrack.passesblview\">
                                        <span class=\"button-title\"><img src=\"/js/ribbon/arrow_down-16.png\"></span> 
                                        <img class=\"ribbon-icon ribbon-normal\" src=\"/images/ribbon/polar.png\" /> 
                                        <img class=\"ribbon-icon ribbon-hot\" src=\"/images/ribbon/polar.png\" /> 
                                        <img class=\"ribbon-icon ribbon-disabled\" src=\"/images/ribbon/polar.png\" />
                                        <div class=\"ribbon-menu ribbon-menu-wide ribbon-menu-closed\">
                                            <div class=\"title\">Select Bottom left View</div>
                                            <ul>
                                                <li class=\"passesbl\" data-event-param=\"3d\" data-icon=\"/images/ribbon/globe.png\"><img src=\"/images/ribbon/globe.png\"><span>3D View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"polar\" data-icon=\"/images/ribbon/polar.png\"><img src=\"/images/ribbon/polar.png\"><span>Polar View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"sky\" data-icon=\"/images/ribbon/sky.png\"><img src=\"/images/ribbon/sky.png\"><span>Sky View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"azel\" data-icon=\"/images/ribbon/azel-16.png\"><img src=\"/images/ribbon/azel-16.png\"><span>Az/El View</span></li>
                                            </ul>
                                        </div>
                                    </div>                                
                                </td>
                                <td style=\"border:1px solid #ccc\">
                                    <div class=\"ribbon-button ribbon-button-small\" id=\"passes-br-view-select\" data-type=\"dropdownmenu\" data-event=\"agsattrack.passesbrview\">
                                        <span class=\"button-title\"><img src=\"/js/ribbon/arrow_down-16.png\"></span> 
                                        <img class=\"ribbon-icon ribbon-normal\" src=\"/images/ribbon/sky.png\" /> 
                                        <img class=\"ribbon-icon ribbon-hot\" src=\"/images/ribbon/sky.png\" /> 
                                        <img class=\"ribbon-icon ribbon-disabled\" src=\"/images/ribbon/sky.png\" />
                                        <div class=\"ribbon-menu ribbon-menu-wide ribbon-menu-closed\">
                                            <div class=\"title\">Select Bottom Right View</div>
                                            <ul>
                                                <li class=\"passesbl\" data-event-param=\"3d\" data-icon=\"/images/ribbon/globe.png\"><img src=\"/images/ribbon/globe.png\"><span>3D View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"polar\" data-icon=\"/images/ribbon/polar.png\"><img src=\"/images/ribbon/polar.png\"><span>Polar View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"sky\" data-icon=\"/images/ribbon/sky.png\"><img src=\"/images/ribbon/sky.png\"><span>Sky View</span></li>
                                                <li class=\"passesbl\" data-event-param=\"azel\" data-icon=\"/images/ribbon/azel-16.png\"><img src=\"/images/ribbon/azel-16.png\"><span>Az/El View</span></li>
                                            </ul>
                                        </div>
                                    </div>                                 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                     
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Date And Time</span>
                    <div class=\"ribbon-button ribbon-button-large ribbon-fl ribbon-button-large-active\" id=\"passes-view-24\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.toggle24\">
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/disabled/clock.png\" />
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/disabled/clock.png\" />
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/clock.png\" />
                        <span class=\"button-title\" unselectable=\"on\">Show Next<br/>24 Hours</span>
                    </div>                    
                    <div class=\"ribbon-button ribbon-button-large disabled\" id=\"passes-view-start\" data-type=\"dropdownmenustay\">
                        <span class=\"button-title\">Start Date <img src=\"js/ribbon/arrow_down.png\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/calendar.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/calendar.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/calendar.png\" />
                        <div class=\"ribbon-menu ribbon-menu-closed\">
                            <div class=\"title\">Select Start date</div>
                            <input class=\"easyui-datetimebox\" id=\"passes-view-start-cal\" style=\"width:150px\" data-options=\"showSeconds:false\">
                        </div>
                    </div>
                    <div class=\"ribbon-button ribbon-button-large disabled\" id=\"passes-view-end\" data-type=\"dropdownmenustay\">
                        <span class=\"button-title\">End Date <img src=\"js/ribbon/arrow_down.png\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/calendar.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/calendar.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/calendar.png\" />
                        <div class=\"ribbon-menu ribbon-menu-closed\">
                            <div class=\"title\">Select End date</div>
                            <input class=\"easyui-datetimebox\" id=\"passes-view-end-cal\" style=\"width:150px\" data-options=\"showSeconds:false\">
                        </div>
                    </div>                                     
                    <div class=\"ribbon-button ribbon-button-large disabled\" id=\"passes-view-calc\" data-type=\"button\" data-event=\"agsattrack.passescalc\">
                        <span class=\"button-title\">Find<br/>Passes</span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/calc.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/calc.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/calc.png\" />
                    </div> 
                </div>
                                               
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">Satellite</span>
                    <select id=\"passes-sat\"></select>
                </div>
                
                <div class=\"ribbon-section\" id=\"passes-available\" style=\"display: none\">
                    <span class=\"section-title\">Available Passes</span>
                    <select id=\"passes-passes\"></select>
                </div>                
                
            </div>

            <div class=\"ribbon-tab\" id=\"polar-tab\">
                <span class=\"ribbon-title\" data-tab=\"polar\">Polar View</span>
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    
                    <div class=\"ribbon-fl\">
                        <div class=\"ribbon-button ribbon-button-large view-reset\">
                            <span class=\"button-title\">Reset</span> 
                            <span class=\"button-help\"></span> 
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                        </div>
                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showplanets\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Planets</strong><br /><br />Toggle displaying planets.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>
                    </div>                        
                                        
                 </div>                
            </div>

            <div class=\"ribbon-tab\" id=\"sky-tab\">
                <span class=\"ribbon-title\" data-tab=\"sky\">Sky View</span>
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>

                    <div class=\"ribbon-fl\">
                        <div class=\"ribbon-button ribbon-button-large view-reset\">
                            <span class=\"button-title\">Reset</span> 
                            <span class=\"button-help\"></span> 
                            <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                            <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                        </div>  
                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showplanets\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/show-planets-16.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show Planets</strong><br /><br />Toggle displaying planets.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>
                        <div class=\"ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl\" unselectable=\"on\" data-type=\"togglebutton\" data-event=\"agsattrack.showcity\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/show-city-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/show-city-16.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/show-city-16.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Show City</strong><br /><br />Toggle displaying the city.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>                        
                    </div>                                         
                 </div>                
            </div>

            <div class=\"ribbon-tab\" id=\"timeline-tab\">
                <span class=\"ribbon-title\" data-tab=\"timeline\">Timeline View</span>
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    <div class=\"ribbon-button ribbon-button-large view-reset\" unselectable=\"on\" data-type=\"button\" id=\"timline-reset\" data-event=\"agsattrack.timeline-reset\">
                        <span class=\"button-title\">Reset</span> 
                        <span class=\"button-help\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                    </div>  
                    <div class=\"ribbon-button ribbon-button-large\" id=\"timeline-view-show-mutual\" data-type=\"togglebutton\" data-event=\"agsattrack.timelineviewshowmutuallocations\">
                        <span class=\"button-title\">Show<br/>Mutual</span> 
                        <span class=\"button-help\"><strong>Show Mutual.</strong><br /><br />Displays mutal visibility in the timeline view.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for more information</span></span>                        
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/mutual.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/mutual.png\" />
                    </div>
                    <div class=\"ribbon-fl\" style=\"width:30px;\">
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"button\" id=\"timline-zoom-in\" data-event=\"agsattrack.timeline-zoom-in\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/zoom_in.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/zoom_in.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/zoom_in.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Zoom In</strong><br /><br />Zoom In.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>
                        <div class=\"ribbon-button ribbon-button-small ribbon-fl\" unselectable=\"on\" data-type=\"button\" id=\"timline-zoom-out\" data-event=\"agsattrack.timeline-zoom-out\">
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-normal\" src=\"js/ribbon/icons/normal/zoom_out.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-hot\" src=\"js/ribbon/icons/normal/zoom_out.png\" />
                            <img class=\"ribbon-icon ribbon-button-small-no-title ribbon-disabled\" src=\"js/ribbon/icons/normal/zoom_out.png\" />
                            <span class=\"button-title\" unselectable=\"on\"></span>
                            <span class=\"button-help\"><strong>Zoom Out</strong><br /><br />Zoom Out.<br /><hr><img src=\"js/ribbon/help-16.png\" class=\"ribbon-help-small\"/><span> See Help for mor information</span></span>                        
                        </div>                        
                    </div>                                                              
                 </div>                
            </div> 

            <div class=\"ribbon-tab\" id=\"dx-tab\">
                <span class=\"ribbon-title\" data-tab=\"dx\">DX View</span>
                
                                
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    <div class=\"ribbon-button ribbon-button-large view-reset\">
                        <span class=\"button-title\">Reset</span> 
                        <span class=\"button-help\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                    </div>  
                 </div>              
                
            </div>
                            
            <div class=\"ribbon-tab\" id=\"debug-tab\">
                <span class=\"ribbon-title\" data-tab=\"debug\">Debug View</span>
                <div class=\"ribbon-section\">
                    <span class=\"section-title\">View Options</span>
                    <div class=\"ribbon-button ribbon-button-large view-reset\">
                        <span class=\"button-title\">Reload<br />Data
                        </span> <span class=\"button-help\"></span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/reset.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/reset.png\" />
                    </div>  
                 </div>
                <div class=\"ribbon-section\" style=\"min-width: 80px;\">
                    <span class=\"section-title\">Cache Options</span>
                    <div class=\"ribbon-button ribbon-button-large ribbon-fl disabled\" id=\"debug-clear-cache\" data-type=\"button\" data-event=\"agsattrack.deletesatcache\">
                        <span class=\"button-title\">Clear</span> 
                        <img class=\"ribbon-icon ribbon-normal\" src=\"js/ribbon/icons/normal/trash.png\" /> 
                        <img class=\"ribbon-icon ribbon-hot\" src=\"js/ribbon/icons/hot/trash.png\" /> 
                        <img class=\"ribbon-icon ribbon-disabled\" src=\"js/ribbon/icons/disabled/trash.png\" />
                    </div>
                 </div>                                      
            </div>
                                   
        </div>




    </div>
    <div data-options=\"region:'west',split:true\" title=\"Information\" style=\"width: 270px;\">
        <div id=\"satinfot\" class=\"easyui-tabs\" data-options=\"fit:true\">
            <div title=\"Satellite Info.\" style=\"overflow: auto; padding: 5px;\">
                <div id=\"sat-info-selector\"></div>
                <div id=\"satinfo-message\">
                    <h2><center>No Satellite Selected</center></h2>
                    <p><center>Please select a satellite to display its information.</center></p>
                </div>
                
                <table width=\"100%\" class=\"satinfo\" style=\"display:none\">
                    <tr>
                        <th colspan=\"2\">Element Values</th>
                    </tr>
                    <tr>
                        <td width=\"50%\">Cat Num</td>
                        <td id=\"noradid\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td id=\"name\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Owner</td>
                        <td id=\"owner\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Period</td>
                        <td id=\"period\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Inclination</td>
                        <td id=\"inclination\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Apogee</td>
                        <td id=\"apogee\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Perigee</td>
                        <td id=\"perigee\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <th colspan=\"2\">Calculated Values</th>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td id=\"latitude\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td id=\"longitude\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Latitude</td>
                        <td id=\"latitudedec\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Longitude</td>
                        <td id=\"longitudedec\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Locator</td>
                        <td id=\"locator\" class=\"sat-info\"></td>
                    </tr>                    
                    <tr>
                        <td>Altitude</td>
                        <td id=\"altitude\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Orbit Number</td>
                        <td id=\"orbitnumber\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Visible</td>
                        <td id=\"visible\" class=\"sat-info\"></td>
                    </tr>
                    
                    <tr>
                        <td>Velocity</td>
                        <td id=\"velocity\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Footprint</td>
                        <td id=\"footprint\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Range</td>
                        <td id=\"range\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Range rate</td>
                        <td id=\"rangerate\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Doppler Shift (Hz)</td>
                        <td id=\"doppler\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Signal Loss (dB)</td>
                        <td id=\"loss\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Signal Delay (ms)</td>
                        <td id=\"delay\" class=\"sat-info\"></td>
                    </tr>                                                               
                    <tr>
                        <td>Elevation</td>
                        <td id=\"elevation\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Azimuth</td>
                        <td id=\"azimuth\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Orbital Phase</td>
                        <td id=\"orbitalphase\" class=\"sat-info\"></td>
                    </tr>
                    <tr>
                        <td>Geostationary</td>
                        <td id=\"geostationary\" class=\"sat-info\"></td>
                    </tr>                    
                </table>
            </div>

            <div title=\"Satellite Selector\" style=\"padding: 5px;\">
                <div id=\"quick-sat-selector\"></div>
            </div>            
        </div>
    </div>

    <div data-options=\"region:'center'\" id=\"center-panel\">
        <div id=\"viewtabs\" class=\"easyui-tabs\" data-options=\"fit:true\">
            <div title=\"List\" style=\"overflow: hidden;\" id=\"list\">
                <table id=\"sat-list-grid\"></table>
            </div>
            <div title=\"3D View\" id=\"3d\"></div>
            <div title=\"Passes\" style=\"overflow: hidden\" id=\"passes\">
                
                <div id=\"pass-info-geostationary\" class=\"hidden\">
                    <h1>The selected satellite is Geostationary</h1>
                    <p>A geostationary orbit, or Geostationary Earth Orbit (GEO), is a circular orbit 35,786 kilometres (22,236 mi) above the Earth's equator and following the direction of the Earth's rotation. An object in such an orbit has an orbital period equal to the Earth's rotational period (one sidereal day), and thus appears motionless, at a fixed position in the sky, to ground observers. Communications satellites and weather satellites are often given geostationary orbits, so that the satellite antennas that communicate with them do not have to move to track them, but can be pointed permanently at the position in the sky where they stay.</p>
                    <img src=\"/images/orbits.png \"/>
                </div>

                <table width=\"98%\" height=\"100%\" id=\"pass-info-table\">
                    <tr>
                        <td height=\"50%\" width=\"100%\" colspan=\"2\" valign=\"top\">                    
                            <table id=\"passesgrid\" class=\"easyui-datagrid\" title=\"Passes\" data-options=\"rownumbers:true, singleSelect:true, autoRowHeight:false, pagination:true, pageSize:20\">
                                <thead>
                                    <tr>
                                        <th field=\"date\" width=\"170\">Date</th>
                                        <th field=\"az\" width=\"70\">Azimuth</th>
                                        <th field=\"el\" width=\"70\">Elevation</th>
                                        <th field=\"viz\" width=\"70\">Visibility</th>
                                        <th field=\"range\" width=\"60\" align=\"right\">Range</th>
                                        <th field=\"footprint\" width=\"60\" align=\"right\">Footprint</th>
                                        <th field=\"doppler\" width=\"105\" align=\"right\">Doppler Shift (Hz)</th>
                                        <th field=\"loss\" width=\"105\" align=\"right\">Signal Loss (dB)</th>
                                        <th field=\"delay\" width=\"105\" align=\"right\">Signal Delay (ms)</th>
                                        <th field=\"mv\" width=\"105\" align=\"right\">Mutual Visible</th>
                                    </tr>
                                </thead>
                            </table>                        
                        </td>
                    </tr>
                    <tr>
                        <td height=\"50%\" width=\"50%\" class=\"backblack\"><div id=\"passbottomleft\"></div></td>
                        <td height=\"50\" width=\"50%\" class=\"backblack\"><div id=\"passbottomright\"></div></td>
                    </tr>                    
                </table>




            </div>
            <div title=\"Polar View\" id=\"polar\" style=\"overflow: hidden;\"></div>
            <div title=\"Sky View\" id=\"sky\" style=\"overflow: hidden;\"></div>
            
            <div title=\"Timeline View\" id=\"timeline\" style=\"overflow: hidden;\">
                <div id=\"timelinelegend\" style=\"float: left;width:200px\"></div>                
                <div id=\"timelineview\" style=\"float: left;overflow: auto;\"></div>                
            </div>            
            
            <div title=\"Settings\" width=1000 height=600 id=\"options\">
                <div id=\"window-preferences-tabs\" class=\"easyui-tabs\" data-options=\"fit:true\">
                    <div title=\"General\" data-options=\"\" style=\"padding: 20px;\">
                        <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                        <h2>General Options</h2>
                        
                        <h3>Debugging</h3>
                        <table class=\"form-table\">
                            <tr valign=\"top\">
                                <th>Enable Debug View</th>
                                <td>
                                    <input type=\"checkbox\" id=\"debugger-show\" value=\"on\" class=\"options-cb\">
                                    <p class=\"description\"><strong>NOTE:</strong> This is only intended for developers to examine internal data from the SPM engines.</p>
                                </td>
                            </tr>                          
                        </table>
                                                
                    </div>
                    
                    <div title=\"Observer\" data-options=\"\" style=\"padding: 20px;\">
                    
                    
                        <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                        <h2>Observer Options</h2>
                        
                        <h3>Home Location</h3>
                        <table class=\"form-table\">
                            <tr valign=\"top\">
                                <th>Use Browser To Find Location</th>
                                <td>
                                    <input type=\"checkbox\" id=\"observergelocate\" value=\"on\">
                                    <p class=\"description\">Selecting this option will attempt to use the browsers inbuilt Geo Location. If you do not select this option you can manually specify your location below.</p>
                                </td>
                            </tr>                          
                            <tr valign=\"top\">
                                <th>Location name</th>
                                <td>
                                    <input size=15 id=\"observername\" class=\"observerhome\">
                                    <button type=\"submit\" id=\"geoshow\"><img src=\"/images/geo.png\" width=16> Select On Map</button>
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Latitude</th>
                                <td>
                                    <input size=20 id=\"observerlatitude\" class=\"observerhome\">
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Longitude</th>
                                <td>
                                    <input size=20 id=\"observerlongitude\" class=\"observerhome\">
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Altitude</th>
                                <td>
                                    <input size=10 id=\"observeraltitude\" class=\"observerhome\">
                                </td>
                            </tr>                                                       
                        </table>
                        
                        <h3>Mutual Location</h3>
                        <table class=\"form-table\">
                            <tr valign=\"top\">
                                <th>Enable Mutual Observer</th>
                                <td>
                                    <input type=\"checkbox\" id=\"mutualobserver\" value=\"on\">
                                    <p class=\"description\">Selecting this option will enable certain features allowing indicating when a satellite is visible to both your location ansd a mutual observers location.</p>
                                </td>
                            </tr>    
                            <tr valign=\"top\">
                                <th>Location name</th>
                                <td>
                                    <input size=15 id=\"mutualobservername\" class=\"observerhome\">
                                    <button type=\"submit\" id=\"mutualgeoshow\"><img src=\"/images/geo.png\" width=16> Select On Map</button>
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Latitude</th>
                                <td>
                                    <input size=20 id=\"mutualobserverlatitude\" class=\"observerhome\">
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Longitude</th>
                                <td>
                                    <input size=20 id=\"mutualobserverlongitude\" class=\"observerhome\">
                                </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>Location Altitude</th>
                                <td>
                                    <input size=10 id=\"mutualobserveraltitude\" class=\"observerhome\">
                                </td>
                            </tr>                                                       
                        </table>
                                                                    
                    </div>
                    <div title=\"Satellites\" data-options=\"\" style=\"padding: 20px;\">
                        <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                        <h2>Satellite Options</h2>
                        
                        <h3>Position Calculations</h3>
                        <table class=\"form-table\">
                            <tr valign=\"top\">
                                <th>Calculate Every (Seconds)</th>
                                <td>
                                    <input id=\"window-preferences-calc-timer\" class=\"easyui-numberspinner\" style=\"width: 60px;\" required=\"required\" data-options=\"min:1,max:50,editable:false\">
                                    <p class=\"description\">If you have a slower PC then try increasing this value to improve performance.</p>
                                    </td>
                            </tr>
                            <tr valign=\"top\">
                                <th>AoS When Above (In Degrees)</th>
                                <td>
                                    <input id=\"window-preferences-aos\" class=\"easyui-numberspinner\" style=\"width: 60px;\" required=\"required\" data-options=\"min:-10,max:100,editable:false\">
                                </td>
                            </tr>
                        </table>
                        
                        <h3>Satellite Groups</h3>
                        <table class=\"form-table\">
                            <tr valign=\"top\">
                                <th>Default TLE Group</th>
                                <td>
                                    <select id=\"options-sat-group-selector-listbox\"></select>
                                    <p class=\"description\">Select the satellite group to load at startup.</p>
                                </td>
                            </tr>                          
                            <tr valign=\"top\">
                                <th>Auto Add From TLE Group</th>
                                <td>
                                    <input type=\"checkbox\" id=\"sats-autoadd\" value=\"on\">
                                    <p class=\"description\">Automatically add all of the satellites in a group when its selected. <strong>NOTE:</strong> This will also add all of the satellites from the default group when the page is loaded.</p>
                                </td>
                            </tr>                          
                        </table>
                    </div>
                    
                    <div title=\"Views\" data-options=\"\" style=\"padding: 0px;\">
                        <div id=\"window-preferences-tabs-views\" class=\"easyui-tabs\" data-options=\"fit:true\">
                            <div title=\"Polar View\" data-options=\"\" style=\"padding: 5px;\">
                                <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                                <h2>Polar View Options</h2>
                                
                                <table width=\"100%\">
                                    <tr>
                                        <td rowspan=\"2\" width=\"50%\" valign=\"top\">
                                            <h3>View Colours</h3>
                                            <table width=\"100%\">
                                                <tr>
                                                    <th width=\"50%\">Background Colour</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-background-color\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Border Colour</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-border-color\" type=\"text\" value=\"\" /></td>
                                                </tr>                                                
                                                <tr>
                                                    <th width=\"50%\">Gradient Start</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-gradient-start\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Gradient End</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-gradient-end\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Grid Colour</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-grid\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Text Colour</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-text\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Degree Text Colour</th>
                                                    <td width=\"50%\"><input class=\"jscolor polarcolour\" id=\"polar-degrees-text\" type=\"text\" value=\"\" /></td>
                                                </tr>
                                                <tr>
                                                    <th width=\"50%\">Reset Colours To Defaults</th>
                                                    <td width=\"50%\"><button id=\"polar-reset-colours\">Default</button></td>
                                                </tr>                                                  
                                            </table>

                                        </td>
                                        <td width=\"50%\">
                                            <div id=\"polar-preview\" style=\"width:400px; height:400px\"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                                
                            </div>
                            <div title=\"Passes View\" data-options=\"\" style=\"padding: 5px;\">
                                <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                                <h2>Passes View Options</h2>
                                <h3>Default views</h3>
                                <p>The passes view has two views that can be set by default. Select the default views to be shown below. The views can be altered on the passes ribbon tab. <strong>NOTE:</strong> You will need to refresh the page for these settinsg to take effect.</p>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th>Bottom Left View</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-passes-view-bottomleft\">
                                                <option value=\"3d\">3D View</option>
                                                <option value=\"polar\">Polar View</option>
                                                <option value=\"sky\">Sky View</option>
                                                <option value=\"azel\">Az/El View</option>
                                            </select>
                                        </td>
                                    </tr>                          
                                    <tr valign=\"top\">
                                        <th>Bottom Right View</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-passes-view-bottomright\">
                                                <option value=\"3d\">3D View</option>
                                                <option value=\"polar\">Polar View</option>
                                                <option value=\"sky\">Sky View</option>
                                                <option value=\"azel\">Az/El View</option>                                               
                                            </select>
                                        </td>
                                    </tr>                          
                                </table>                                
                            </div>
                            <div title=\"3D View\" data-options=\"\" style=\"padding: 5px;\">
                                <div class=\"icon32\" id=\"icon-options-general\"><br></div>
                                <h2>3D View Options</h2>
                                <h3>Static Map Image</h3>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th>Static Map Image
                                        </th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-view-staticimage\">
                                                <option value=\"land_ocean_ice_lights_2048.jpg\">Land Ocean Ice Lights 2048</option>
                                                <option value=\"land_ocean_ice_lights_512.jpg\">Land Ocean Ice Lights 512</option>
                                                <option value=\"NE2_50M_SR_W_2048.jpg\">NE2 50M SR W 2048</option>
                                                <option value=\"NE2_50M_SR_W_4096.jpg\">NE2 50M SR W 4096</option>
                                            </select>
                                            <p class=\"description\">Select the static map image to use in the 3D view.</p>

                                        </td>
                                        <td>
                                            <img src=\"\" id=\"options-3d-view-staticimage-image\" width=\"200\">
                                        </td>
                                    </tr>                                                    
                                </table>
                                
                                <h3>Views and providers</h3>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th>Default View</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-view\">
                                                <option value=\"threed\">3D View</option>
                                                <option value=\"twod\">2D View</option>
                                                <option value=\"twopointfived\">2.5D View</option>
                                            </select>                                            
                                        </td>
                                        <th>Default Provider</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-provider\">
                                                <option value=\"staticimage\">Static Image</option>
                                                <option value=\"bing\">Bing Maps</option>
                                                <option value=\"osm\">Open Street Map</option>
                                                <option value=\"arcgis\">Arc Gis</option>
                                            </select>                                            
                                        </td>                                        
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Use Terrain Provider</th>
                                        <td>
                                            <input type=\"checkbox\" id=\"options-3d-terrainprovider\" value=\"on\" class=\"options-cb\">
                                            <p class=\"description\">The Terrain Provider will show elevation data on the 3D view.</p>
                                        </td>
                                        <th></th>
                                        <td></td>                                        
                                    </tr>
                                </table>                                
                                
                                
                                <h3>Satellites</h3>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th width=\"30%\" colspan=\"2\"><strong>Unselected</strong></th>
                                        <th colspan=\"1\">Selected</th>
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Icon</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-icon-unselected\">
                                                <option value=\"1\" data-imagesrc=\"/images/satellites/satellite0-32.png\">Icon 1</option>
                                                <option value=\"2\" data-imagesrc=\"/images/satellites/satellite1-32.png\">Icon 2</option>
                                            </select>                                            
                                        </td>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-icon-selected\">
                                                <option value=\"1\" data-imagesrc=\"/images/satellites/satellite0-32.png\">Icon 1</option>
                                                <option value=\"2\" data-imagesrc=\"/images/satellites/satellite1-32.png\">Icon 2</option>
                                            </select>                                            
                                        </td>
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Icon Size</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-icon-unselected-size\">
                                                <option value=\"16\">16 Pixels</option>
                                                <option value=\"24\">24 Pixels</option>
                                                <option value=\"32\">32 Pixels</option>
                                                <option value=\"64\">64 Pixels</option>
                                                <option value=\"128\">128 Pixels</option>
                                                <option value=\"256\">256 Pixels</option>
                                            </select>                                          
                                        </td>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-icon-selected-size\">
                                                <option value=\"16\">16 Pixels</option>
                                                <option value=\"24\">24 Pixels</option>
                                                <option value=\"32\">32 Pixels</option>
                                                <option value=\"64\">64 Pixels</option>
                                                <option value=\"128\">128 Pixels</option>
                                                <option value=\"256\">256 Pixels</option>
                                            </select>                                          
                                        </td>
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Label Size</th>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-label-unselected-size\">
                                                <option value=\"8\">8 Pixels</option>
                                                <option value=\"10\">10 Pixels</option>
                                                <option value=\"12\">12 Pixels</option>
                                                <option value=\"14\">14 Pixels</option>
                                                <option value=\"16\">16 Pixels</option>
                                                <option value=\"18\">18 Pixels</option>
                                                <option value=\"20\">20 Pixels</option>
                                                <option value=\"22\">22 Pixels</option>
                                                <option value=\"24\">24 Pixels</option>
                                            </select>                                          
                                        </td>
                                        <td>
                                            <select class=\"options-cb\" id=\"options-3d-sat-label-selected-size\">
                                                <option value=\"8\">8 Pixels</option>
                                                <option value=\"10\">10 Pixels</option>
                                                <option value=\"12\">12 Pixels</option>
                                                <option value=\"14\">14 Pixels</option>
                                                <option value=\"16\">16 Pixels</option>
                                                <option value=\"18\">18 Pixels</option>
                                                <option value=\"20\">20 Pixels</option>
                                                <option value=\"22\">22 Pixels</option>
                                                <option value=\"24\">24 Pixels</option>
                                            </select>                                         
                                        </td>
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Label Colour</th>
                                        <td><input class=\"jscolor polarcolour\" id=\"3d-label-colour-unselected\" type=\"text\" value=\"\" /></td>
                                        <td><input class=\"jscolor polarcolour\" id=\"3d-label-colour-selected\" type=\"text\" value=\"\" /></td>
                                    </tr>
                                </table>  
                                
                                
                                
                                                              
                                <h3>Following Options</h3>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th>Height Above Observer Location</th>
                                        <td>
                                            <input id=\"options-3d-view-followobs-height\" class=\"easyui-numberspinner\" style=\"width: 60px;\" required=\"required\" data-options=\"min:0,max:1000,editable:false\" value=\"1\">                                        
                                            <p class=\"description\">Select the height above the observer location, this is in meters.</p>
                                        </td>
                                        <th>Height Above Satellite</th>
                                        <td>
                                            <input id=\"options-3d-view-followsat-height\" class=\"easyui-numberspinner\" style=\"width: 60px;\" required=\"required\" data-options=\"min:0,max:10000,editable:false\">                                        
                                            <p class=\"description\">Select the height above the satellite location, this is in meters.</p>
                                        </td>                                        
                                    </tr>
                                </table>
                                
                                <h3>Cities</h3>
                                <table class=\"form-table\">
                                    <tr valign=\"top\">
                                        <th>Show Cities</th>
                                        <td>
                                            <input id=\"options-3d-view-show-cities\" type=\"checkbox\" class=\"options-cb\" value=\"on\">                                      
                                            <p class=\"description\">Enable this option to show cities on the 3d view.</p>
                                        </td>
                                        <th>Font Size</th>
                                        <td>
                                            <input id=\"options-3d-view-city-font-size\" type=\"text\" size=\"3\" class=\"options-spinner\"> px                                      
                                            <p class=\"description\">The font size for the city labels in pixels</p>
                                        </td>                                        
                                    </tr>
                                    <tr valign=\"top\">
                                        <th>Population Limit</th>
                                        <td>
                                            <input id=\"options-3d-view-city-pop-limit\" class=\"easyui-numberspinner\" style=\"width: 30px;\" required=\"required\" data-options=\"min:0,max:10,increment:0.1,editable:true\"> Million                                      
                                            <p class=\"description\">Cities will only be displayed if their population is above or equal to this limit.</p>
                                        </td>
                                        <th>Label Colour</th>
                                        <td>
                                            <input id=\"options-3d-view-city-font-colour\" type=\"text\" class=\"jscolor\">                                      
                                            <p class=\"description\">The label colour</p>
                                        </td>                                         
                                    </tr>                                                                                         
                                </table>
                                
                                                                                                                         
                            </div>                            
                        </div>
                    </div>                    
                    
                </div>
            </div>
            
            <div title=\"Debug View\" width=1000 height=600 id=\"debug\">   
                <table id=\"debuggrid\" class=\"easyui-treegrid\" style=\"width:600px;height:400px\"  
                        data-options=\"idField:'id',treeField:'satellite',title:'Satellite Data',fit:true\">  
                    <thead>  
                        <tr>  
                            <th data-options=\"field:'satellite',width:250\">Satellite</th>  
                            <th data-options=\"field:'orbits',width:60,align:'right'\">Orbits</th>  
                            <th data-options=\"field:'orbitno',width:80\">Orbit Number</th>  
                            <th data-options=\"field:'aos',width:120\">AoS</th>  
                            <th data-options=\"field:'los',width:120\">LoS</th>  
                            <th data-options=\"field:'points',width:80\">Points</th>  
                            <th data-options=\"field:'calctime',width:110\">Calc Time (ms)</th>  
                        </tr>  
                    </thead>  
                </table>                      
            </div>    
            
            <div title=\"Home View\" id=\"home\">   
                <div><img src=\"/images/logo-128-noborder.png\" class=\"vertical\" /><span class=\"heading\">Welcome to AGSatTrack - Online</span></div>
                
                <h2>Basic Concepts</h2>
                <p><strong>Your Location.</strong> When first started the browser will ask you if the site is allowed to use your location. if you answer yes then the browser will attempt to determine your approximate location. <strong>note</strong> this is not generally that accurate. Under options->observer you can select your exact location.</p>
                <p><strong>Satellites</strong> are loaded from groups, these match the standard groups available on sites like celestrak. A default group is loaded at startup, unless you have changed this the 'amateur' group is loaded. To load a group select the 'Groups' dropdown from the Home ribbon menu. You can also specify the default group to load in the options, under satellites.</p>
                <p>Once a group is loaded you need to add satellites to display. When a satellite is displayed its data is calculated. Those satellites not being displayed will not have any data calculated for them. By default all satellites in the loaded group are automatically added. You can disable this in Options->satellites.</p>
                <p>Satellites can be 'selected', this can be done from the list viewe, Satellite Selector or generally by clicking on a satellite in any view. Once a satellite is selected more data will be displayed, generally its orbit and passes. The Satellite info pannel on the left will also show more information. If multiple satellites are selected then a drop down will appear allowing you to select the satellite to show more detailed information for.</p>
                <h2>Views</h2>
                <p>There are 7 main views available.</p>
                <ul>
                    <li><strong>List View.</strong> This is a basic list of all satellites loaded and is updated to reflect current data. For large groups of satellites the list is paged. The page size can be set at the botom of the view.</li>
                    <li><strong>3D View.</strong> This is a rotatable, zoomable view of the earth. satellites will be displayed, along with their orbits of there are selected. if the current orbit has a pass over your location this will be shown in green on the orbit path. The imagry for the earth can be selected in the 'provider' drop down. You can follow a selected satellite either from your location or from the satellite. The 'View' option also allows for a 2D and 2.5D view.</li>
                    <li><strong>Passes View.</strong> This view displays pass information for a satellite. The satellite and pass can be selected in the ribbon menu. The two bottom views can be selected in the ribbon menu. the default for these two views can be specified in the options.</li>
                    <li><strong>Polar View.</strong> This displays a Polar, or radar, view.</li>
                    <li><strong>Sky View.</strong> This displays a view looking South from your location. This can be handy for visual satellite observation. The horizon image can be dragged up and down if its in the way or turned off in the ribbon menu.</li>
                    <li><strong>Timeline View.</strong> This will show all passes for the selectedd satellites within the next 24 hours.</li>
                    <li><strong>Az/El View.</strong> This is <strong>only</strong> available in the passes view. It shows a graph of Azimuth and elevation for a selected pass.</li>
                </ul>
                <h4>Debug View</h4>
                <p>This must be enabled in the options. This view is primarily intended to debug issues. It shows all of the available satellites along with information about the internal calculation engine.</p>
            </div>
            
            <div title=\"DX View\" id=\"dx\">
            </div>                                  
            
        </div>
    </div>

    <div data-options=\"region:'south'\" id=\"south-panel\">
        <div id=\"statusbar\">
            <div id=\"status\" class=\"panel\"><strong>Initialising</strong></div>
            <div id=\"statusgroup\" class=\"panel\"><strong>Group:</strong> NONE</div>
            <div id=\"statusfollowing\" class=\"panel\"><strong>Following:</strong> NONE</div>
            <div id=\"statustotalloaded\" class=\"panel\">0 Satellites Loaded</div>
            <div id=\"currenttime\" class=\"panel\"></div>
            <div id=\"credits\" class=\"panel\"></div>
                        
            <div id=\"social-fb\" class=\"panel last-panel\">
                <div id=\"fb-root\"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = \"//connect.facebook.net/en_GB/all.js#xfbml=1&appId=218900791485439\";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class=\"fb-like\" data-href=\"http://www.facebook.com/agsattrack\" data-send=\"true\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\"></div>
            </div>
            <div id=\"social-twitter\" class=\"panel\">
                <iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"https://platform.twitter.com/widgets/tweet_button.html?via=agsattrack\" style=\"width:105px; height:20px;\"></iframe>
                <iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"//platform.twitter.com/widgets/follow_button.html?screen_name=agsattrack\" style=\"width:200px; height:20px;\"></iframe>
            </div>            
        </div>
    </div>
        
    <div id=\"contact-window\" class=\"easyui-window\" data-options=\"title:'Contact',closed:true, resizable:false, minimizable:false,maximizable:false, collapsible: false\" style=\"width:500px;height:200px;padding:5px;\">
        <div class=\"easyui-layout\" data-options=\"fit:true\">
            <div data-options=\"region:'center',border:false\" style=\"padding:10px;background:#fff;border:1px solid #ccc;\">
                <h2>Contact</h2>
                <p>To contact me please send an email to alex AT agsattrack.com</p>
            </div>
            <div data-options=\"region:'south',border:false\" style=\"text-align:right;padding:5px 0;\">
                <a class=\"easyui-linkbutton\" href=\"javascript:void(0)\" onclick=\"jQuery('#contact-window').window('close');\">Ok</a>
            </div>
        </div>
    </div>

    <div id=\"help-window\" class=\"easyui-window\" data-options=\"title:'Help',closed:true, resizable:false, minimizable:false,maximizable:false, collapsible: false\" style=\"width:900px;height:600px;padding:0px\">
        <div class=\"easyui-layout\" data-options=\"fit:true\">
            <div data-options=\"region:'center',border:false\" style=\"background:#fff;border:1px solid #ccc;\">
                <div class=\"easyui-layout\" data-options=\"fit:true\">
                    <div data-options=\"region:'west',split:true,title:'Topics'\" style=\"width:200px;overflow:auto\">
                        <ul id=\"help-tree\" class=\"easyui-tree\">  
                            <li>  
                                <span>Help Topics</span>  
                                <ul>  
                                    <li>  
                                        <span>Introduction</span>  
                                        <ul>  
                                            <li>  
                                                <span><a href=\"help/whatis.html\" class=\"tree-help-item\">What is AgSatTrack</a></span>  
                                            </li>   
                                        </ul>                  
                                    </li>
                                    <li>  
                                        <span>How To</span>  
                                        <ul>  
                                            <li>  
                                                <span><a href=\"help/loadgroups.html\" class=\"tree-help-item\">Load Groups</a></span>  
                                            </li>  
                                        </ul>                  
                                    </li>                
                                </ul>  
                            </li>  
                        </ul>                    
                    </div>
                    <div data-options=\"region:'center',title:'Help'\">
                        <div id=\"help-content\" style=\"padding:2px\">
                        </div>
                    </div>
                </div>
            </div>
            <div data-options=\"region:'south',border:false\" style=\"text-align:right;padding:5px 0;\">
                <a class=\"easyui-linkbutton\" href=\"javascript:void(0)\" onclick=\"jQuery('#help-window').window('close');\">Ok</a>
            </div>
        </div>
    </div>
            
    <ol id=\"joyRideTipContent\">
      <li data-id=\"sat-group-selector\" data-button=\"Next\" data-options=\"tipLocation:top;tipAnimation:fade\">
        <h2>Select a Group</h2>
        <p>This drop down contains the groups you can use. Amateur is loaded by default. Selecting another group will load the satellites from that group.</p>
      </li>
      <li data-id=\"sat-selector\" data-button=\"Next\" data-options=\"tipLocation:top;tipAnimation:fade\">
        <h2>Select Satellites</h2>
        <p>Select the satellites you wish to display. Satellites in the right hand listbox will be displayed. Checking the checkbox will also display the orbit and footprint.</p>
      </li>
      <li data-id=\"view-select\" data-button=\"Next\" data-options=\"tipLocation:top;tipAnimation:fade\">
        <h2>Switch View</h2>
        <p>Select the view to display. You can also set the ribbon bar to switch view when you click on a tab, look in the settings under views.</p>
      </li>      
      <li data-id=\"ribbon-tab-header-strip\" data-button=\"Next\" data-options=\"tipLocation:top;tipAnimation:fade\">
        <h2>View Tabs</h2>
        <p>Each view has customisable options</p>
      </li> 
      <li data-id=\"satinfot\" data-button=\"Next\" data-options=\"tipLocation:right;tipAnimation:fade\">
        <h2>Satellite Information</h2>
        <p>The left hand pane contains details about the selected satellite. If multiple satellites are selected then a drop down will be available to select which satellite to show data for.</p>
      </li>       
      <li data-id=\"options\" data-button=\"Close\" data-options=\"tipLocation:top;tipAnimation:fade\">
        <h2>Program Options</h2>
        <p>Setup Agsattrack how you like it :-)</p>
      </li>  
           
    </ol>
    
 <--   
    <div id='jqxListViewMenu'>
        <ul>
            <li><a href=\"#\">Home</a></li>
            <li>About Us
                <ul>
                    <li><a href=\"#\">History</a></li>
                    <li><a href=\"#\">Our Vision</a></li>
                    <li><a href=\"#\">The Team</a>
                        <ul>
                            <li><a href=\"#\">Brigita</a></li>
                            <li><a href=\"#\">John</a></li>
                            <li><a href=\"#\">Michael</a></li>
                            <li><a href=\"#\">Peter</a></li>
                            <li><a href=\"#\">Sarah</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Clients</a></li>
                    <li><a href=\"#\">Testimonials</a></li>
                    <li><a href=\"#\">Press</a></li>
                    <li><a href=\"#\">FAQs</a></li>
                </ul>
            </li>
            <li>Services
                <ul>
                    <li><a href=\"#\">Product Development</a></li>
                    <li><a href=\"#\">Delivery</a></li>
                    <li><a href=\"#\">Shop Online</a></li>
                    <li><a href=\"#\">Support</a></li>
                    <li><a href=\"#\">Training &amp; Consulting</a></li>
                </ul>
            </li>
            <li>Products
                <ul>
                    <li><a href=\"#\">New</a>
                        <ul>
                            <li><a href=\"#\">Corporate Use</a></li>
                            <li><a href=\"#\">Private Use</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Used</a>
                        <ul>
                            <li><a href=\"#\">Corporate Use</a></li>
                            <li><a href=\"#\">Private Use</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Featured</a></li>
                    <li><a href=\"#\">Top Rated</a></li>
                    <li><a href=\"#\">Prices</a></li>
                </ul>
            </li>
            <li><a href=\"#\">Contact Us</a>
                <ul>
                    <li><a href=\"#\">Enquiry Form</a></li>
                    <li><a href=\"#\">Map &amp; Driving Directions</a></li>
                    <li><a href=\"#\">Your Feedback</a></li>
                </ul>
            </li>
        </ul>
    </div>
 -->                   

 <div id=\"help-1\" class=\"helpwrapper\">
     <div style=\"width: 220px\" class=\"helptext\">       
     <h2><span><img src=\"/images/info.png\" width=32 /></span>Information</h2>
     <p>There are {tlecount} satellites loaded but none are current being displayed.</p>
     <p>before satellites are displayed you need to add them. There are two ways to add satellites.</p>
     <ul>
        <li><img src=\"/js/ribbon/icons/hot/satellite.png\"><span>Use the satellite selector on the home ribbon tab</span></li>
        <li><img src=\"/js/ribbon/icons/hot/satellite_all.png\"><span>Use the add all satellites button on the home ribbon tab</span></li>
     </ul>
     </div>
 </div>
                
    <script type=\"text/javascript\">
        var href = document.location.href;
        
        if (href.indexOf('local') === -1) {
            if (AGSETTINGS.cookiesOk()) {
                var _gaq = _gaq || [];
                _gaq.push([ '_setAccount', 'UA-36758800-1' ]);
                _gaq.push([ '_trackPageview' ]);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl'
                            : 'http://www')
                            + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            }
        }
    </script>

</body>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="UTF-8">*/
/* <title>AGSatTrack - Online</title>*/
/* */
/* <script type="text/javascript" src="js/cvi_busy_lib.js"></script>*/
/* <script type="text/javascript">*/
/*     ctrl = getBusyOverlay(document.documentElement, {color:'black', opacity:0.5, text: 'Loading Please Wait ...'});*/
/* </script>*/
/* */
/* <link rel="stylesheet" href="/css/agsattrack.css">*/
/* <link rel="stylesheet" href="/css/ribbon.css">*/
/* <link rel="stylesheet" href="/css/statusbar.css">*/
/* <link rel="stylesheet" href="/css/views.css">*/
/* <link rel="stylesheet" href="/css/windows.css">*/
/* */
/* <link rel="stylesheet" href="/js/cesium/Cesium/Widgets/widgets.css">*/
/* */
/* */
/* <link rel="stylesheet" type="text/css" href="/js/easyui/themes/gray/easyui.css">*/
/* <link rel="stylesheet" type="text/css" href="/js/easyui/themes/icon.css">*/
/* <link rel="stylesheet" type="text/css" href="/js/jqueryui/smoothness/jquery-ui.min.css">*/
/* <link rel="stylesheet" type="text/css" href="/js/agchecklist/checkList.css">*/
/* */
/* <script type="text/javascript" src="/js/jquery.js"></script>*/
/* <script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>*/
/* */
/* <script type="text/javascript" src="/js/jqueryui/jquery-ui.min.js"></script>*/
/* <script type="text/javascript" src="/js/easyui/jquery.easyui.min.js"></script>*/
/* */
/* <script type="text/javascript" src="/js/konva/konva.js"></script>*/
/* <script type="text/javascript" src="/js/agsattrack.js"></script>*/
/* <script type="text/javascript" src="/js/cookies/jquery.cookies.js"></script>*/
/* <script type="text/javascript" src="/js/classes/querystring.js"></script>*/
/* <script type="text/javascript" src="/js/classes/settings.js"></script>*/
/* <script type="text/javascript" src="/js/classes/datamanager.js"></script>*/
/* <script type="text/javascript" src="/js/agchecklist/jquery.ui.agcheckList.js"></script>*/
/* */
/* <script type="text/javascript" src="/js/classes/views/passesview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/3dview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/polarview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/skyview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/timelineview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/listview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/options.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/debug.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/home.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/azelview.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views/dx.js"></script>*/
/* <script type="text/javascript" src="/js/classes/observer.js"></script>*/
/* <script type="text/javascript" src="/js/classes/spmengine.js"></script>*/
/* */
/* <script type="text/javascript" src="/js/classes/ui.js"></script>*/
/* <script type="text/javascript" src="/js/classes/tles.js"></script>*/
/* */
/* <script type="text/javascript" src="/js/classes/sunmoon.js"></script>*/
/* <script type="text/javascript" src="/js/classes/planets.js"></script>*/
/* <script type="text/javascript" src="/js/classes/date.js"></script>*/
/* <script type="text/javascript" src="/js/classes/util.js"></script>*/
/* <script type="text/javascript" src="/js/classes/images.js"></script>*/
/* <script type="text/javascript" src="/js/classes/views.js"></script>  */
/* <script type="text/javascript" src="/js/classes/windows.js"></script>  */
/* <script type="text/javascript" src="/js/agsatbox/agsatbox.js"></script>*/
/*             */
/* <link href="/js/ribbon/ribbon/ribbon.css" rel="stylesheet" type="text/css" />*/
/* <link href="/js/ribbon/soft_button.css" rel="stylesheet" type="text/css" />*/
/* <script type="text/javascript" src="/js/ribbon/ribbon/ribbon.js"></script>*/
/* <script type="text/javascript" src="/js/ribbon/ribbon/jquery.tooltip.min.js"></script>*/
/* */
/* */
/* <script type="text/javascript" src="/js/jqwidgets/jqxcore.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxdata.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxbuttons.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxscrollbar.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxlistbox.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxcheckbox.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxdragdrop.js"></script>  */
/* <script type="text/javascript" src="/js/jqwidgets/jqxdropdownlist.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxmenu.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxpanel.js"></script>*/
/* <script type="text/javascript" src="/js/jqwidgets/jqxwindow.js"></script>*/
/* <link rel="stylesheet" href="/js/jqwidgets/styles/jqx.base.css" type="text/css" />*/
/* */
/* <script src="/js/jscolor/jscolor.js" type="text/javascript"></script>*/
/* */
/* <script type="text/javascript" src="/js/joyride/jquery.joyride-2.0.2.js"></script>*/
/* <link href="/js/joyride/joyride-2.0.2.css" rel="stylesheet" type="text/css" />*/
/* */
/* <script src="/js/modernizer.js"></script>*/
/* <script src="/js/platform.js"></script>*/
/* <script src="/js/startup.js"></script>*/
/* */
/* <link href="/js/cookiecuttr/cookiecuttr.css" rel="stylesheet" type="text/css" />*/
/* <script src="/js/cookiecuttr/jquery.cookiecuttr.js"></script>*/
/* */
/* <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>*/
/* <script src="/js/geocomplete/jquery.geocomplete.min.js"></script>*/
/* */
/* */
/* <script src="/js/imagecombo/ddslick.js"></script>*/
/*    */
/* </head>*/
/* <body class='easyui-layout default' style="display: none" id="body">*/
/*     <div data-options="region:'north', title:'&nbsp;'" style="height: 120px;">*/
/* */
/* */
/* */
/*         <div id="ribbon">*/
/*             <span class="ribbon-window-title"></span>*/
/* */
/*             <div class="ribbon-tab file" id="info-tab">*/
/*                 <span class="ribbon-title">Info</span>*/
/*                 <div class="ribbon-backstage">*/
/*                     <table with="100%">*/
/*                         <tr>*/
/*                             <td width="50%" valign="top">*/
/*                                 <h2>Credits</h2>*/
/*                                 <h3>Satellite Orbit tracked (iSat) <a target="_blank" href="https://github.com/koansys/isat">Visit on GitHub<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 */
/*                                 Without the excellent work being done on this project <em>AgSatTrack - Online</em> would not exists. The SOT project provided the initial code to build a test version of <em>AgSatTrack - Online</em> prior to starting development on the full blown version. */
/*             */
/*                                 <h3>Cesium <a target="_blank" href="http://cesium.agi.com/">Visit Cesium Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/* */
/* <div style="float:left;">                                */
/*     <a href="http://cesium.agi.com/" target="_blank"><img src="/images/cesium_logo.svg" width="100" /></a>*/
/* </div>*/
/* */
/*                                 Cesium is a JavaScript library for creating 3D globes and 2D maps in a web browser without a plugin. It uses WebGL for hardware-accerlated graphics, and is cross-platform, cross-browser, and tuned for dynamic-data visualization. Cesium is open source under the Apache 2.0 license. It is free for commercial and non-commercial use.*/
/* */
/*                                 <h2>Other Libraries used</h2>*/
/*                                 <h3>jQuery <a target="_blank" href="http://jquery.com/">Visit jQuery Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>jQuery UI <a target="_blank" href="http://jqueryui.com/">Visit jQuery UI Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>EasyUI <a target="_blank" href="http://www.jeasyui.com/">Visit EasyUI Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>jQWidgets <a target="_blank" href="http://www.jqwidgets.com/">Visit jQWidgets Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>Joyride <a target="_blank" href="http://www.zurb.com/playground/jquery-joyride-feature-tour-plugin">Visit Joyride Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>Kinetic <a target="_blank" href="http://kineticjs.com/">Visit Kinetic Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>Modernizer <a target="_blank" href="http://modernizr.com/">Visit Modernizer Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/* */
/*                                 <h3>Gpredict <a target="_blank" href="http://gpredict.oz9aec.net/">Visit Gpredict Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 <h3>PredictLib <a target="_blank" href="http://andrewtwest.com/orbtrak/">Visit PredictLib Home<span class="imageanchor"><img src="/images/external_link.gif"></span></a></h3>*/
/*                                 */
/*                                 */
/*                                 <h2>Special Thanks To</h2>*/
/*                                 Steve (aka Virus) for the logo*/
/*                             </td>*/
/*                             <td valign="top">*/
/*                                 <h2>Licence</h2>*/
/*                                 <p>Copyright 2012-2013 Alex Greenland</p>*/
/*                                 <p>Licensed under the Apache License, Version 2.0 (the "License");<br /> you may not use this file except in compliance with the License. You may obtain a copy of the License at</p>*/
/*                                 <a target="_blank" href="http://www.apache.org/licenses/LICENSE-2.0">http://www.apache.org/licenses/LICENSE-2.0</a>*/
/*                                 <p>Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.</p>                                */
/*                             </td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="ribbon-tab" id="format-tab">*/
/*                 <span class="ribbon-title">Home</span>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title" data-tab="home">View</span>*/
/*                     <div class="ribbon-button ribbon-button-large" id="view-select" data-type="dropdownmenu">*/
/*                         <span class="button-title">Select <img src="js/ribbon/arrow_down.png"></span> */
/*                         <span class="button-help"><strong>Select view.</strong><br /><br />Selects the view you wish to display.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>*/
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/view.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/view.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/view.png" />*/
/*                         <div class="ribbon-menu ribbon-menu-closed">*/
/*                             <div class="title">Select View</div>*/
/*                             <ul>*/
/*                                 <li class="satview" data-options="list"><img src="images/ribbon/list.png"><span>List View</span></li>*/
/*                                 <li class="satview" data-options="passes"><img src="images/ribbon/table.png"><span>Passes View</span></li>*/
/*                                 <li class="satview" data-options="3d"><img src="images/ribbon/globe.png"><span>3D View</span></li>*/
/*                                 <li class="satview" data-options="polar"><img src="images/ribbon/polar.png"><span>Polar View</span></li>*/
/*                                 <li class="satview" data-options="sky"><img src="images/ribbon/sky.png"><span>Sky View</span></li>*/
/*                                 <li class="satview" data-options="timeline"><img src="images/ribbon/timeline.png"><span>Timeline View</span></li>*/
/*                                 <li class="satview" data-options="dx"><img src="/js/ribbon/icons/normal/dx-16.png"><span>Dx View</span></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ribbon-button ribbon-button-large view-reset">*/
/*                         <span class="button-title">Reset</span>*/
/*                         <span class="button-help"><strong>Reset view.</strong><br /><br />Resets the current view to its defaults.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Satellites</span>*/
/*                     */
/*                     <div class="ribbon-fl">*/
/*                         <div class="ribbon-button ribbon-button-large" id="sat-group-selector"  data-type="dropdownmenu">*/
/*                             <span class="button-title">Groups <img src="js/ribbon/arrow_down.png"></span> */
/*                             <span class="button-help"><strong>Select Satellite Group.</strong><br /><br />Selects the group of satellites.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/group.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/group.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/group.png" />*/
/*                             <div class="ribbon-menu ribbon-menu-closed">*/
/*                                 <div class="title">Select Group</div>*/
/*                                 <div id="sat-group-selector-listbox"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-large" id="sat-selector" data-type="dropdownmenustay">*/
/*                             <span class="button-title">Select <img src="js/ribbon/down.png" /></span> */
/*                             <span class="button-help"><strong>Select Satellites.</strong><br /><br />Selects the satellites to display and show orbits for.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/satellite.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/satellite.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/satellite.png" />*/
/*                             <div class="ribbon-menu ribbon-menu-closed">*/
/*                                 <div class="title">Select Satellite</div>*/
/*                                 <div id="ag-satselector"> </div>*/
/*                             </div>                        */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ribbon-fl">*/
/*                         <div class="ribbon-button ribbon-button-small" id="sat-display-all">*/
/*                             <span class="button-title"></span>*/
/*                             <span class="button-help"><strong>Display All Satellites.</strong><br /><br />Display all satellites in the current group.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/satellite_all.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/satellite_all.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/satellite_all.png" />*/
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small" id="sat-display-none">*/
/*                             <span class="button-title"></span> */
/*                             <span class="button-help"><strong>Remove All Satellites.</strong><br /><br />Remove all satellites from display.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/satellite_delete_all.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/satellite_delete_all.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/satellite_delete_all.png" />*/
/*                         </div>                     */
/*                     </div>*/
/*                     <div class="ribbon-button ribbon-button-large disabled" id="home-update-elements" data-event="agsattrack.updategroup">*/
/*                         <span class="button-title">Update <br />Elements</span>*/
/*                         <span class="button-help"><strong>Update Elements.</strong><br /><br />Update the elements for this satellite group.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/download.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/download.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/download.png" />*/
/*                     </div>                                      */
/*                 </div>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Settings</span>*/
/*                     <div style="float:left">*/
/*                         <div class="ribbon-button ribbon-button-large" id="options">*/
/*                             <span class="button-title">Options</span> */
/*                             <span class="button-help"></span> */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/settings.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/settings.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/settings.png" />*/
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-large" id="options" data-event="agsattrack.resetoptions">*/
/*                             <span class="button-title">Reset All<br />Options</span> */
/*                             <span class="button-help"></span> */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                         </div>                        */
/*                     </div>*/
/*                     <div style="float:left">                    */
/*                         <div class="ribbon-button ribbon-button-small disabled" id="options-save" unselectable="on">*/
/*                             <span class="button-help" unselectable="on"></span>*/
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/save.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/save.png" />*/
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/save.png" />*/
/*                             <span class="button-title" unselectable="on">Save</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Help</span>*/
/*                     <div style="float:left">*/
/*                         <div class="ribbon-button ribbon-button-large" id="help-help">*/
/*                             <span class="button-title">Help</span> */
/*                                 <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/help.png" /> */
/*                                 <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/help.png" /> */
/*                                 <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/help.png" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div style="float:left">                    */
/*                         <div class="ribbon-button ribbon-button-small" id="help-tour" unselectable="on">*/
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/tour.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/tour.png" />*/
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/tour.png" />*/
/*                             <span class="button-title" unselectable="on">Tour</span>*/
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small" id="help-contact" unselectable="on">*/
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/email.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/email.png" />*/
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/email.png" />*/
/*                             <span class="button-title" unselectable="on">Contact</span>*/
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small disabled" id="help-forum" unselectable="on">*/
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/forum.png" />*/
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/forum.png" />*/
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/forum.png" />*/
/*                             <span class="button-title" unselectable="on">Community</span>*/
/*                         </div>                                                  */
/*                     </div>*/
/*                 </div>                                        */
/*             </div>*/
/*             */
/*             <div class="ribbon-tab" id="list-tab">*/
/*                 <span class="ribbon-title" data-tab="list">List View</span>*/
/*                 */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     */
/*                     <div class="ribbon-fl" unselectable="on">            */
/*                         */
/*                         <div class="ribbon-button ribbon-button-large view-reset" id="list-view-reset">*/
/*                             <span class="button-title">Reset</span> */
/*                             <span class="button-help"><strong>Reset view.</strong><br /><br />Resets the list view to its defaults.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                         </div>*/
/*                             */
/*                         <div class="ribbon-button ribbon-button-large" id="list-view-show-mutual" data-type="togglebutton" data-event="agsattrack.listviewshowmutuallocations">*/
/*                             <span class="button-title">Show<br/>Mutual</span> */
/*                             <span class="button-help"><strong>Show Mutual.</strong><br /><br />Adds a column to the table which indicates if the satellite is visible from both your location and the mutual observer.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/mutual.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/mutual.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/mutual.png" />*/
/*                         </div>                                                 */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="ribbon-tab" id="3d-tab">*/
/*                 <span class="ribbon-title" data-tab="3d">3D View</span>*/
/*                 */
/*                 <div class="ribbon-section">                */
/* */
/*                 </div>*/
/*                                                     */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/* */
/*                     <div class="ribbon-fl">*/
/* */
/*                         <div class="ribbon-button ribbon-button-large" id="3d-projection" data-type="dropdownmenu">*/
/*                             <span class="button-title">Views <img src="js/ribbon/arrow_down.png"></span> <span class="button-help"></span>*/
/*                             <span class="button-help"><strong>Select view.</strong><br /><br />Choose from 3d, 2d or 2.5d views.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/viewselect.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/viewselect.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/viewselect.png" />*/
/*                             <div class="ribbon-menu ribbon-menu-closed">*/
/*                                 <div class="title">Select View</div>*/
/*                                 <ul>*/
/*                                     <li class="3dview" data-options="twod"><img src="images/ribbon/list.png"><span>2D View</span></li>*/
/*                                     <li class="3dview" data-options="twopointfived"><img src="images/ribbon/table.png"><span>2.5D View</span></li>*/
/*                                     <li class="3dview" data-options="threed"><img src="images/ribbon/globe.png"><span>3D View</span></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                         <div class="ribbon-button ribbon-button-large" id="3d-provider" data-type="dropdownmenu" style="width:95px;">*/
/*                             <span class="button-title">Provider <img src="js/ribbon/arrow_down.png"></span> */
/*                             <span class="button-help"><strong>Map Provider.</strong><br /><br />Select the provider for the globe rendering.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>*/
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/tile.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/tile.png" />*/
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/tile.png" />*/
/*                             <div class="ribbon-menu ribbon-menu-closed">*/
/*                                 <div class="title">Select Provider</div>*/
/*                                 <ul>*/
/*                                     <li class="tile" data-options="staticimage"><img src="js/ribbon/icons/normal/image.png"><span>Static Image</span></li>*/
/*                                     <li class="tile" data-options="bing"><img src="js/ribbon/icons/normal/bing.png"><span>Bing maps</span></li>*/
/*                                     <li class="tile" data-options="osm"><img src="js/ribbon/icons/normal/openstreetmap.png"><span>Open StreetMap</span></li>*/
/*                                     <li class="tile" data-options="arcgis"><img src="js/ribbon/icons/normal/arcgis.png"><span>Arc Gis</span></li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>                    */
/*                                             */
/*                         <div class="ribbon-button ribbon-button-large view-reset" id="3d-view-reset" style="width:60px;">*/
/*                             <span class="button-title">Reset</span> */
/*                             <span class="button-help"><strong>Reset view.</strong><br /><br />Resets the 3d view to its defaults.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                         </div>*/
/*                                             */
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showatmosphere" id="3d-atmosphere">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/atmoshpere-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/atmoshpere-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/atmoshpere-16.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Atmoshpere.</strong><br /><br />Toggle displaying the atmoshpere.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showskybox" id="3d-skybox">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/cube.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/cube.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/cube.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Skybox.</strong><br /><br />Toggle displaying the skybox.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         </div>                                             */
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showfps">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/fps.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/fps.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/fps.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show FrameRate.</strong><br /><br />Display the frame rate.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         </div>                                             */
/* */
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showmousepos">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/mousepos.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/mousepos.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/mousepos.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Mouse Pos.</strong><br /><br />Toggle displaying the lat and lon of the mouse position.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                             </div>*/
/*                         */
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showterrain" id="3d-show-terrain">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/terrain.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/terrain.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/terrain.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Terrain.</strong><br /><br />Toggle displaying terrain data<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         </div>*/
/*                         */
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showcities" id="3d-show-cities">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/citybutton.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/citybutton.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/citybutton.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Cities.</strong><br /><br />Toggle displaying Cities<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         </div>                                                 */
/*                     </div>                                        */
/*                 </div>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Satellite Options</span>*/
/*                     */
/*                     <div class="ribbon-button ribbon-button-large" id="3d-view-sat-info-locations" data-type="togglebutton" data-event="agsattrack.showmutuallocations">*/
/*                         <span class="button-title">Show<br/>Mutual</span> */
/*                         <span class="button-help"><strong>Show Mutual Locations.</strong><br /><br />Show Mutual locations visible from the selected satellite.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/mutual.png" />*/
/*                     </div>   */
/*                                         */
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showsatlabels">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/label.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/label.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/label.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Satellite Labels.</strong><br /><br />Toggle displaying the name of the satellites.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                                 </div>                    */
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.setfootprinttype">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/filledfootprint.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/filledfootprint.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/filledfootprint.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show footprints as filled circles.</strong><br /><br />Toggle displaying the  footprint as a filled circle.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>*/
/*                         </div>  */
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.setssp">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/ssp.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/ssp.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/ssp.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Satellite ssp.</strong><br /><br />Toggle displaying the sub satellite points for a pass.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>*/
/*                         </div>  */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Information</span>*/
/*                     <div class="ribbon-button ribbon-button-large" id="3d-view-sat-info-locations" data-type="button" data-event="agsattrack.show3dlocationinfo" style="width:60px;">*/
/*                         <span class="button-title">Visible<br/>Locations</span> */
/*                         <span class="button-help"><strong>Visible Locations.</strong><br /><br />Show locations visible from the selected satellite.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/earth.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/earth.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/earth.png" />*/
/*                     </div>                    */
/*                 </div>*/
/*                 */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Follow</span>*/
/*                     <div class="ribbon-button ribbon-button-large" id="3d-follow-sat" data-type="grouptogglebutton" data-event="agsattrack.followsatellite" data-group="follow">*/
/*                         <span class="button-title">From<br />Satellite</span> */
/*                         <span class="button-help"><strong>Follow Satellite.</strong><br /><br />Follows the selected satellite, looking at your location.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="/js/ribbon/icons/normal/orbit.png" />*/
/*                         <img class="ribbon-icon ribbon-hot" src="/js/ribbon/icons/hot/orbit.png" />*/
/*                         <img class="ribbon-icon ribbon-disabled" src="/js/ribbon/icons/disabled/orbit.png" />*/
/*                     </div>*/
/*                     <div class="ribbon-button ribbon-button-large" id="3d-follow-obs" data-type="grouptogglebutton" data-event="agsattrack.followsatelliteobs" data-group="follow">*/
/*                         <span class="button-title">From<br />Home</span> */
/*                         <span class="button-help"><strong>Follow Satellite.</strong><br /><br />Follows the selected satellite, looking from your location. This will ONLY work when the satellite is visible.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="/js/ribbon/icons/normal/follow-obs.png" />*/
/*                         <img class="ribbon-icon ribbon-hot" src="/js/ribbon/icons/hot/follow-obs.png" />*/
/*                         <img class="ribbon-icon ribbon-disabled" src="/js/ribbon/icons/disabled/follow-obs.png" />*/
/*                     </div>*/
/*                     <div class="ribbon-button ribbon-button-large" id="3d-follow-view" data-type="grouptogglebutton" data-event="agsattrack.followsatelliteview" data-group="follow">*/
/*                         <span class="button-title">Satellite<br/>View</span> */
/*                         <span class="button-help"><strong>Satellite View.</strong><br /><br />Shows the view of the earth from the satellites perspective.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="/js/ribbon/icons/normal/follow-view.png" />*/
/*                         <img class="ribbon-icon ribbon-hot" src="/js/ribbon/icons/hot/follow-view.png" />*/
/*                         <img class="ribbon-icon ribbon-disabled" src="/js/ribbon/icons/disabled/follow-view.png" />*/
/*                     </div>  */
/*                 </div>*/
/* */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Select And Fly To Satellite</span>*/
/*                     <select class="easyui-combobox" id="3d-sat-finder" style="width:200px;">*/
/*                     </select>                    */
/*                 </div>                */
/*                 */
/*                 <div style="float:right;">*/
/*                     <a href="http://cesium.agi.com/" target="_blank"><img src="/images/cesium_logo.svg" width="300" /></a>*/
/*                     <div id="camera-pos">POS</div>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/* */
/*             <div class="ribbon-tab" id="passes-tab">*/
/*                 <span class="ribbon-title" data-tab="passes">Passes View</span>*/
/*                 */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     <div class="ribbon-button ribbon-button-large view-reset">*/
/*                         <span class="button-title">Reset</span>*/
/*                         <span class="button-help"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                     </div>  */
/* */
/*                     <div class="ribbon-button ribbon-button-large" id="passes-view-show-mutual" data-type="togglebutton" data-event="agsattrack.passesshowmutuallocations">*/
/*                         <span class="button-title">Show<br/>Mutual</span> */
/*                         <span class="button-help"><strong>Show Mutual.</strong><br /><br />Adds a column to the passes grid indicating if the selected satellite is visible from your home location and the mutual observers location.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/mutual.png" />*/
/*                     </div> */
/*                                         */
/*                     <div style="width: 100px; float:left;">*/
/*                         <table width="100%">*/
/*                             <tr>*/
/*                                 <td colspan="2" style="border:1px solid #ccc" align="center">Pass Table</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td width="50%" style="border:1px solid #ccc">*/
/*                                 */
/*                                     <div class="ribbon-button ribbon-button-small" id="passes-bl-view-select" data-type="dropdownmenu" data-event="agsattrack.passesblview">*/
/*                                         <span class="button-title"><img src="/js/ribbon/arrow_down-16.png"></span> */
/*                                         <img class="ribbon-icon ribbon-normal" src="/images/ribbon/polar.png" /> */
/*                                         <img class="ribbon-icon ribbon-hot" src="/images/ribbon/polar.png" /> */
/*                                         <img class="ribbon-icon ribbon-disabled" src="/images/ribbon/polar.png" />*/
/*                                         <div class="ribbon-menu ribbon-menu-wide ribbon-menu-closed">*/
/*                                             <div class="title">Select Bottom left View</div>*/
/*                                             <ul>*/
/*                                                 <li class="passesbl" data-event-param="3d" data-icon="/images/ribbon/globe.png"><img src="/images/ribbon/globe.png"><span>3D View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="polar" data-icon="/images/ribbon/polar.png"><img src="/images/ribbon/polar.png"><span>Polar View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="sky" data-icon="/images/ribbon/sky.png"><img src="/images/ribbon/sky.png"><span>Sky View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="azel" data-icon="/images/ribbon/azel-16.png"><img src="/images/ribbon/azel-16.png"><span>Az/El View</span></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>                                */
/*                                 </td>*/
/*                                 <td style="border:1px solid #ccc">*/
/*                                     <div class="ribbon-button ribbon-button-small" id="passes-br-view-select" data-type="dropdownmenu" data-event="agsattrack.passesbrview">*/
/*                                         <span class="button-title"><img src="/js/ribbon/arrow_down-16.png"></span> */
/*                                         <img class="ribbon-icon ribbon-normal" src="/images/ribbon/sky.png" /> */
/*                                         <img class="ribbon-icon ribbon-hot" src="/images/ribbon/sky.png" /> */
/*                                         <img class="ribbon-icon ribbon-disabled" src="/images/ribbon/sky.png" />*/
/*                                         <div class="ribbon-menu ribbon-menu-wide ribbon-menu-closed">*/
/*                                             <div class="title">Select Bottom Right View</div>*/
/*                                             <ul>*/
/*                                                 <li class="passesbl" data-event-param="3d" data-icon="/images/ribbon/globe.png"><img src="/images/ribbon/globe.png"><span>3D View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="polar" data-icon="/images/ribbon/polar.png"><img src="/images/ribbon/polar.png"><span>Polar View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="sky" data-icon="/images/ribbon/sky.png"><img src="/images/ribbon/sky.png"><span>Sky View</span></li>*/
/*                                                 <li class="passesbl" data-event-param="azel" data-icon="/images/ribbon/azel-16.png"><img src="/images/ribbon/azel-16.png"><span>Az/El View</span></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>                                 */
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                      */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Date And Time</span>*/
/*                     <div class="ribbon-button ribbon-button-large ribbon-fl ribbon-button-large-active" id="passes-view-24" unselectable="on" data-type="togglebutton" data-event="agsattrack.toggle24">*/
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/disabled/clock.png" />*/
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/disabled/clock.png" />*/
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/clock.png" />*/
/*                         <span class="button-title" unselectable="on">Show Next<br/>24 Hours</span>*/
/*                     </div>                    */
/*                     <div class="ribbon-button ribbon-button-large disabled" id="passes-view-start" data-type="dropdownmenustay">*/
/*                         <span class="button-title">Start Date <img src="js/ribbon/arrow_down.png"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/calendar.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/calendar.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/calendar.png" />*/
/*                         <div class="ribbon-menu ribbon-menu-closed">*/
/*                             <div class="title">Select Start date</div>*/
/*                             <input class="easyui-datetimebox" id="passes-view-start-cal" style="width:150px" data-options="showSeconds:false">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ribbon-button ribbon-button-large disabled" id="passes-view-end" data-type="dropdownmenustay">*/
/*                         <span class="button-title">End Date <img src="js/ribbon/arrow_down.png"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/calendar.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/calendar.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/calendar.png" />*/
/*                         <div class="ribbon-menu ribbon-menu-closed">*/
/*                             <div class="title">Select End date</div>*/
/*                             <input class="easyui-datetimebox" id="passes-view-end-cal" style="width:150px" data-options="showSeconds:false">*/
/*                         </div>*/
/*                     </div>                                     */
/*                     <div class="ribbon-button ribbon-button-large disabled" id="passes-view-calc" data-type="button" data-event="agsattrack.passescalc">*/
/*                         <span class="button-title">Find<br/>Passes</span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/calc.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/calc.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/calc.png" />*/
/*                     </div> */
/*                 </div>*/
/*                                                */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">Satellite</span>*/
/*                     <select id="passes-sat"></select>*/
/*                 </div>*/
/*                 */
/*                 <div class="ribbon-section" id="passes-available" style="display: none">*/
/*                     <span class="section-title">Available Passes</span>*/
/*                     <select id="passes-passes"></select>*/
/*                 </div>                */
/*                 */
/*             </div>*/
/* */
/*             <div class="ribbon-tab" id="polar-tab">*/
/*                 <span class="ribbon-title" data-tab="polar">Polar View</span>*/
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     */
/*                     <div class="ribbon-fl">*/
/*                         <div class="ribbon-button ribbon-button-large view-reset">*/
/*                             <span class="button-title">Reset</span> */
/*                             <span class="button-help"></span> */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showplanets">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Planets</strong><br /><br />Toggle displaying planets.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>*/
/*                     </div>                        */
/*                                         */
/*                  </div>                */
/*             </div>*/
/* */
/*             <div class="ribbon-tab" id="sky-tab">*/
/*                 <span class="ribbon-title" data-tab="sky">Sky View</span>*/
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/* */
/*                     <div class="ribbon-fl">*/
/*                         <div class="ribbon-button ribbon-button-large view-reset">*/
/*                             <span class="button-title">Reset</span> */
/*                             <span class="button-help"></span> */
/*                             <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                             <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                         </div>  */
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showplanets">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/show-planets-16.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show Planets</strong><br /><br />Toggle displaying planets.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-button-small-active ribbon-fl" unselectable="on" data-type="togglebutton" data-event="agsattrack.showcity">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/show-city-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/show-city-16.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/show-city-16.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Show City</strong><br /><br />Toggle displaying the city.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>                        */
/*                     </div>                                         */
/*                  </div>                */
/*             </div>*/
/* */
/*             <div class="ribbon-tab" id="timeline-tab">*/
/*                 <span class="ribbon-title" data-tab="timeline">Timeline View</span>*/
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     <div class="ribbon-button ribbon-button-large view-reset" unselectable="on" data-type="button" id="timline-reset" data-event="agsattrack.timeline-reset">*/
/*                         <span class="button-title">Reset</span> */
/*                         <span class="button-help"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                     </div>  */
/*                     <div class="ribbon-button ribbon-button-large" id="timeline-view-show-mutual" data-type="togglebutton" data-event="agsattrack.timelineviewshowmutuallocations">*/
/*                         <span class="button-title">Show<br/>Mutual</span> */
/*                         <span class="button-help"><strong>Show Mutual.</strong><br /><br />Displays mutal visibility in the timeline view.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for more information</span></span>                        */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/mutual.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/mutual.png" />*/
/*                     </div>*/
/*                     <div class="ribbon-fl" style="width:30px;">*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="button" id="timline-zoom-in" data-event="agsattrack.timeline-zoom-in">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/zoom_in.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/zoom_in.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/zoom_in.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Zoom In</strong><br /><br />Zoom In.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>*/
/*                         <div class="ribbon-button ribbon-button-small ribbon-fl" unselectable="on" data-type="button" id="timline-zoom-out" data-event="agsattrack.timeline-zoom-out">*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-normal" src="js/ribbon/icons/normal/zoom_out.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-hot" src="js/ribbon/icons/normal/zoom_out.png" />*/
/*                             <img class="ribbon-icon ribbon-button-small-no-title ribbon-disabled" src="js/ribbon/icons/normal/zoom_out.png" />*/
/*                             <span class="button-title" unselectable="on"></span>*/
/*                             <span class="button-help"><strong>Zoom Out</strong><br /><br />Zoom Out.<br /><hr><img src="js/ribbon/help-16.png" class="ribbon-help-small"/><span> See Help for mor information</span></span>                        */
/*                         </div>                        */
/*                     </div>                                                              */
/*                  </div>                */
/*             </div> */
/* */
/*             <div class="ribbon-tab" id="dx-tab">*/
/*                 <span class="ribbon-title" data-tab="dx">DX View</span>*/
/*                 */
/*                                 */
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     <div class="ribbon-button ribbon-button-large view-reset">*/
/*                         <span class="button-title">Reset</span> */
/*                         <span class="button-help"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                     </div>  */
/*                  </div>              */
/*                 */
/*             </div>*/
/*                             */
/*             <div class="ribbon-tab" id="debug-tab">*/
/*                 <span class="ribbon-title" data-tab="debug">Debug View</span>*/
/*                 <div class="ribbon-section">*/
/*                     <span class="section-title">View Options</span>*/
/*                     <div class="ribbon-button ribbon-button-large view-reset">*/
/*                         <span class="button-title">Reload<br />Data*/
/*                         </span> <span class="button-help"></span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/reset.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/reset.png" />*/
/*                     </div>  */
/*                  </div>*/
/*                 <div class="ribbon-section" style="min-width: 80px;">*/
/*                     <span class="section-title">Cache Options</span>*/
/*                     <div class="ribbon-button ribbon-button-large ribbon-fl disabled" id="debug-clear-cache" data-type="button" data-event="agsattrack.deletesatcache">*/
/*                         <span class="button-title">Clear</span> */
/*                         <img class="ribbon-icon ribbon-normal" src="js/ribbon/icons/normal/trash.png" /> */
/*                         <img class="ribbon-icon ribbon-hot" src="js/ribbon/icons/hot/trash.png" /> */
/*                         <img class="ribbon-icon ribbon-disabled" src="js/ribbon/icons/disabled/trash.png" />*/
/*                     </div>*/
/*                  </div>                                      */
/*             </div>*/
/*                                    */
/*         </div>*/
/* */
/* */
/* */
/* */
/*     </div>*/
/*     <div data-options="region:'west',split:true" title="Information" style="width: 270px;">*/
/*         <div id="satinfot" class="easyui-tabs" data-options="fit:true">*/
/*             <div title="Satellite Info." style="overflow: auto; padding: 5px;">*/
/*                 <div id="sat-info-selector"></div>*/
/*                 <div id="satinfo-message">*/
/*                     <h2><center>No Satellite Selected</center></h2>*/
/*                     <p><center>Please select a satellite to display its information.</center></p>*/
/*                 </div>*/
/*                 */
/*                 <table width="100%" class="satinfo" style="display:none">*/
/*                     <tr>*/
/*                         <th colspan="2">Element Values</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td width="50%">Cat Num</td>*/
/*                         <td id="noradid" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Name</td>*/
/*                         <td id="name" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Owner</td>*/
/*                         <td id="owner" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Period</td>*/
/*                         <td id="period" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Inclination</td>*/
/*                         <td id="inclination" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Apogee</td>*/
/*                         <td id="apogee" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Perigee</td>*/
/*                         <td id="perigee" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th colspan="2">Calculated Values</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Latitude</td>*/
/*                         <td id="latitude" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Longitude</td>*/
/*                         <td id="longitude" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Latitude</td>*/
/*                         <td id="latitudedec" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Longitude</td>*/
/*                         <td id="longitudedec" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Locator</td>*/
/*                         <td id="locator" class="sat-info"></td>*/
/*                     </tr>                    */
/*                     <tr>*/
/*                         <td>Altitude</td>*/
/*                         <td id="altitude" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Orbit Number</td>*/
/*                         <td id="orbitnumber" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Visible</td>*/
/*                         <td id="visible" class="sat-info"></td>*/
/*                     </tr>*/
/*                     */
/*                     <tr>*/
/*                         <td>Velocity</td>*/
/*                         <td id="velocity" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Footprint</td>*/
/*                         <td id="footprint" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Range</td>*/
/*                         <td id="range" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Range rate</td>*/
/*                         <td id="rangerate" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Doppler Shift (Hz)</td>*/
/*                         <td id="doppler" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Signal Loss (dB)</td>*/
/*                         <td id="loss" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Signal Delay (ms)</td>*/
/*                         <td id="delay" class="sat-info"></td>*/
/*                     </tr>                                                               */
/*                     <tr>*/
/*                         <td>Elevation</td>*/
/*                         <td id="elevation" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Azimuth</td>*/
/*                         <td id="azimuth" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Orbital Phase</td>*/
/*                         <td id="orbitalphase" class="sat-info"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Geostationary</td>*/
/*                         <td id="geostationary" class="sat-info"></td>*/
/*                     </tr>                    */
/*                 </table>*/
/*             </div>*/
/* */
/*             <div title="Satellite Selector" style="padding: 5px;">*/
/*                 <div id="quick-sat-selector"></div>*/
/*             </div>            */
/*         </div>*/
/*     </div>*/
/* */
/*     <div data-options="region:'center'" id="center-panel">*/
/*         <div id="viewtabs" class="easyui-tabs" data-options="fit:true">*/
/*             <div title="List" style="overflow: hidden;" id="list">*/
/*                 <table id="sat-list-grid"></table>*/
/*             </div>*/
/*             <div title="3D View" id="3d"></div>*/
/*             <div title="Passes" style="overflow: hidden" id="passes">*/
/*                 */
/*                 <div id="pass-info-geostationary" class="hidden">*/
/*                     <h1>The selected satellite is Geostationary</h1>*/
/*                     <p>A geostationary orbit, or Geostationary Earth Orbit (GEO), is a circular orbit 35,786 kilometres (22,236 mi) above the Earth's equator and following the direction of the Earth's rotation. An object in such an orbit has an orbital period equal to the Earth's rotational period (one sidereal day), and thus appears motionless, at a fixed position in the sky, to ground observers. Communications satellites and weather satellites are often given geostationary orbits, so that the satellite antennas that communicate with them do not have to move to track them, but can be pointed permanently at the position in the sky where they stay.</p>*/
/*                     <img src="/images/orbits.png "/>*/
/*                 </div>*/
/* */
/*                 <table width="98%" height="100%" id="pass-info-table">*/
/*                     <tr>*/
/*                         <td height="50%" width="100%" colspan="2" valign="top">                    */
/*                             <table id="passesgrid" class="easyui-datagrid" title="Passes" data-options="rownumbers:true, singleSelect:true, autoRowHeight:false, pagination:true, pageSize:20">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th field="date" width="170">Date</th>*/
/*                                         <th field="az" width="70">Azimuth</th>*/
/*                                         <th field="el" width="70">Elevation</th>*/
/*                                         <th field="viz" width="70">Visibility</th>*/
/*                                         <th field="range" width="60" align="right">Range</th>*/
/*                                         <th field="footprint" width="60" align="right">Footprint</th>*/
/*                                         <th field="doppler" width="105" align="right">Doppler Shift (Hz)</th>*/
/*                                         <th field="loss" width="105" align="right">Signal Loss (dB)</th>*/
/*                                         <th field="delay" width="105" align="right">Signal Delay (ms)</th>*/
/*                                         <th field="mv" width="105" align="right">Mutual Visible</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                             </table>                        */
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td height="50%" width="50%" class="backblack"><div id="passbottomleft"></div></td>*/
/*                         <td height="50" width="50%" class="backblack"><div id="passbottomright"></div></td>*/
/*                     </tr>                    */
/*                 </table>*/
/* */
/* */
/* */
/* */
/*             </div>*/
/*             <div title="Polar View" id="polar" style="overflow: hidden;"></div>*/
/*             <div title="Sky View" id="sky" style="overflow: hidden;"></div>*/
/*             */
/*             <div title="Timeline View" id="timeline" style="overflow: hidden;">*/
/*                 <div id="timelinelegend" style="float: left;width:200px"></div>                */
/*                 <div id="timelineview" style="float: left;overflow: auto;"></div>                */
/*             </div>            */
/*             */
/*             <div title="Settings" width=1000 height=600 id="options">*/
/*                 <div id="window-preferences-tabs" class="easyui-tabs" data-options="fit:true">*/
/*                     <div title="General" data-options="" style="padding: 20px;">*/
/*                         <div class="icon32" id="icon-options-general"><br></div>*/
/*                         <h2>General Options</h2>*/
/*                         */
/*                         <h3>Debugging</h3>*/
/*                         <table class="form-table">*/
/*                             <tr valign="top">*/
/*                                 <th>Enable Debug View</th>*/
/*                                 <td>*/
/*                                     <input type="checkbox" id="debugger-show" value="on" class="options-cb">*/
/*                                     <p class="description"><strong>NOTE:</strong> This is only intended for developers to examine internal data from the SPM engines.</p>*/
/*                                 </td>*/
/*                             </tr>                          */
/*                         </table>*/
/*                                                 */
/*                     </div>*/
/*                     */
/*                     <div title="Observer" data-options="" style="padding: 20px;">*/
/*                     */
/*                     */
/*                         <div class="icon32" id="icon-options-general"><br></div>*/
/*                         <h2>Observer Options</h2>*/
/*                         */
/*                         <h3>Home Location</h3>*/
/*                         <table class="form-table">*/
/*                             <tr valign="top">*/
/*                                 <th>Use Browser To Find Location</th>*/
/*                                 <td>*/
/*                                     <input type="checkbox" id="observergelocate" value="on">*/
/*                                     <p class="description">Selecting this option will attempt to use the browsers inbuilt Geo Location. If you do not select this option you can manually specify your location below.</p>*/
/*                                 </td>*/
/*                             </tr>                          */
/*                             <tr valign="top">*/
/*                                 <th>Location name</th>*/
/*                                 <td>*/
/*                                     <input size=15 id="observername" class="observerhome">*/
/*                                     <button type="submit" id="geoshow"><img src="/images/geo.png" width=16> Select On Map</button>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Latitude</th>*/
/*                                 <td>*/
/*                                     <input size=20 id="observerlatitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Longitude</th>*/
/*                                 <td>*/
/*                                     <input size=20 id="observerlongitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Altitude</th>*/
/*                                 <td>*/
/*                                     <input size=10 id="observeraltitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>                                                       */
/*                         </table>*/
/*                         */
/*                         <h3>Mutual Location</h3>*/
/*                         <table class="form-table">*/
/*                             <tr valign="top">*/
/*                                 <th>Enable Mutual Observer</th>*/
/*                                 <td>*/
/*                                     <input type="checkbox" id="mutualobserver" value="on">*/
/*                                     <p class="description">Selecting this option will enable certain features allowing indicating when a satellite is visible to both your location ansd a mutual observers location.</p>*/
/*                                 </td>*/
/*                             </tr>    */
/*                             <tr valign="top">*/
/*                                 <th>Location name</th>*/
/*                                 <td>*/
/*                                     <input size=15 id="mutualobservername" class="observerhome">*/
/*                                     <button type="submit" id="mutualgeoshow"><img src="/images/geo.png" width=16> Select On Map</button>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Latitude</th>*/
/*                                 <td>*/
/*                                     <input size=20 id="mutualobserverlatitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Longitude</th>*/
/*                                 <td>*/
/*                                     <input size=20 id="mutualobserverlongitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>Location Altitude</th>*/
/*                                 <td>*/
/*                                     <input size=10 id="mutualobserveraltitude" class="observerhome">*/
/*                                 </td>*/
/*                             </tr>                                                       */
/*                         </table>*/
/*                                                                     */
/*                     </div>*/
/*                     <div title="Satellites" data-options="" style="padding: 20px;">*/
/*                         <div class="icon32" id="icon-options-general"><br></div>*/
/*                         <h2>Satellite Options</h2>*/
/*                         */
/*                         <h3>Position Calculations</h3>*/
/*                         <table class="form-table">*/
/*                             <tr valign="top">*/
/*                                 <th>Calculate Every (Seconds)</th>*/
/*                                 <td>*/
/*                                     <input id="window-preferences-calc-timer" class="easyui-numberspinner" style="width: 60px;" required="required" data-options="min:1,max:50,editable:false">*/
/*                                     <p class="description">If you have a slower PC then try increasing this value to improve performance.</p>*/
/*                                     </td>*/
/*                             </tr>*/
/*                             <tr valign="top">*/
/*                                 <th>AoS When Above (In Degrees)</th>*/
/*                                 <td>*/
/*                                     <input id="window-preferences-aos" class="easyui-numberspinner" style="width: 60px;" required="required" data-options="min:-10,max:100,editable:false">*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                         */
/*                         <h3>Satellite Groups</h3>*/
/*                         <table class="form-table">*/
/*                             <tr valign="top">*/
/*                                 <th>Default TLE Group</th>*/
/*                                 <td>*/
/*                                     <select id="options-sat-group-selector-listbox"></select>*/
/*                                     <p class="description">Select the satellite group to load at startup.</p>*/
/*                                 </td>*/
/*                             </tr>                          */
/*                             <tr valign="top">*/
/*                                 <th>Auto Add From TLE Group</th>*/
/*                                 <td>*/
/*                                     <input type="checkbox" id="sats-autoadd" value="on">*/
/*                                     <p class="description">Automatically add all of the satellites in a group when its selected. <strong>NOTE:</strong> This will also add all of the satellites from the default group when the page is loaded.</p>*/
/*                                 </td>*/
/*                             </tr>                          */
/*                         </table>*/
/*                     </div>*/
/*                     */
/*                     <div title="Views" data-options="" style="padding: 0px;">*/
/*                         <div id="window-preferences-tabs-views" class="easyui-tabs" data-options="fit:true">*/
/*                             <div title="Polar View" data-options="" style="padding: 5px;">*/
/*                                 <div class="icon32" id="icon-options-general"><br></div>*/
/*                                 <h2>Polar View Options</h2>*/
/*                                 */
/*                                 <table width="100%">*/
/*                                     <tr>*/
/*                                         <td rowspan="2" width="50%" valign="top">*/
/*                                             <h3>View Colours</h3>*/
/*                                             <table width="100%">*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Background Colour</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-background-color" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Border Colour</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-border-color" type="text" value="" /></td>*/
/*                                                 </tr>                                                */
/*                                                 <tr>*/
/*                                                     <th width="50%">Gradient Start</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-gradient-start" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Gradient End</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-gradient-end" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Grid Colour</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-grid" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Text Colour</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-text" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Degree Text Colour</th>*/
/*                                                     <td width="50%"><input class="jscolor polarcolour" id="polar-degrees-text" type="text" value="" /></td>*/
/*                                                 </tr>*/
/*                                                 <tr>*/
/*                                                     <th width="50%">Reset Colours To Defaults</th>*/
/*                                                     <td width="50%"><button id="polar-reset-colours">Default</button></td>*/
/*                                                 </tr>                                                  */
/*                                             </table>*/
/* */
/*                                         </td>*/
/*                                         <td width="50%">*/
/*                                             <div id="polar-preview" style="width:400px; height:400px"></div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                 </table>*/
/*                                 */
/*                             </div>*/
/*                             <div title="Passes View" data-options="" style="padding: 5px;">*/
/*                                 <div class="icon32" id="icon-options-general"><br></div>*/
/*                                 <h2>Passes View Options</h2>*/
/*                                 <h3>Default views</h3>*/
/*                                 <p>The passes view has two views that can be set by default. Select the default views to be shown below. The views can be altered on the passes ribbon tab. <strong>NOTE:</strong> You will need to refresh the page for these settinsg to take effect.</p>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th>Bottom Left View</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-passes-view-bottomleft">*/
/*                                                 <option value="3d">3D View</option>*/
/*                                                 <option value="polar">Polar View</option>*/
/*                                                 <option value="sky">Sky View</option>*/
/*                                                 <option value="azel">Az/El View</option>*/
/*                                             </select>*/
/*                                         </td>*/
/*                                     </tr>                          */
/*                                     <tr valign="top">*/
/*                                         <th>Bottom Right View</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-passes-view-bottomright">*/
/*                                                 <option value="3d">3D View</option>*/
/*                                                 <option value="polar">Polar View</option>*/
/*                                                 <option value="sky">Sky View</option>*/
/*                                                 <option value="azel">Az/El View</option>                                               */
/*                                             </select>*/
/*                                         </td>*/
/*                                     </tr>                          */
/*                                 </table>                                */
/*                             </div>*/
/*                             <div title="3D View" data-options="" style="padding: 5px;">*/
/*                                 <div class="icon32" id="icon-options-general"><br></div>*/
/*                                 <h2>3D View Options</h2>*/
/*                                 <h3>Static Map Image</h3>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th>Static Map Image*/
/*                                         </th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-view-staticimage">*/
/*                                                 <option value="land_ocean_ice_lights_2048.jpg">Land Ocean Ice Lights 2048</option>*/
/*                                                 <option value="land_ocean_ice_lights_512.jpg">Land Ocean Ice Lights 512</option>*/
/*                                                 <option value="NE2_50M_SR_W_2048.jpg">NE2 50M SR W 2048</option>*/
/*                                                 <option value="NE2_50M_SR_W_4096.jpg">NE2 50M SR W 4096</option>*/
/*                                             </select>*/
/*                                             <p class="description">Select the static map image to use in the 3D view.</p>*/
/* */
/*                                         </td>*/
/*                                         <td>*/
/*                                             <img src="" id="options-3d-view-staticimage-image" width="200">*/
/*                                         </td>*/
/*                                     </tr>                                                    */
/*                                 </table>*/
/*                                 */
/*                                 <h3>Views and providers</h3>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th>Default View</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-view">*/
/*                                                 <option value="threed">3D View</option>*/
/*                                                 <option value="twod">2D View</option>*/
/*                                                 <option value="twopointfived">2.5D View</option>*/
/*                                             </select>                                            */
/*                                         </td>*/
/*                                         <th>Default Provider</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-provider">*/
/*                                                 <option value="staticimage">Static Image</option>*/
/*                                                 <option value="bing">Bing Maps</option>*/
/*                                                 <option value="osm">Open Street Map</option>*/
/*                                                 <option value="arcgis">Arc Gis</option>*/
/*                                             </select>                                            */
/*                                         </td>                                        */
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Use Terrain Provider</th>*/
/*                                         <td>*/
/*                                             <input type="checkbox" id="options-3d-terrainprovider" value="on" class="options-cb">*/
/*                                             <p class="description">The Terrain Provider will show elevation data on the 3D view.</p>*/
/*                                         </td>*/
/*                                         <th></th>*/
/*                                         <td></td>                                        */
/*                                     </tr>*/
/*                                 </table>                                */
/*                                 */
/*                                 */
/*                                 <h3>Satellites</h3>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th width="30%" colspan="2"><strong>Unselected</strong></th>*/
/*                                         <th colspan="1">Selected</th>*/
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Icon</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-icon-unselected">*/
/*                                                 <option value="1" data-imagesrc="/images/satellites/satellite0-32.png">Icon 1</option>*/
/*                                                 <option value="2" data-imagesrc="/images/satellites/satellite1-32.png">Icon 2</option>*/
/*                                             </select>                                            */
/*                                         </td>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-icon-selected">*/
/*                                                 <option value="1" data-imagesrc="/images/satellites/satellite0-32.png">Icon 1</option>*/
/*                                                 <option value="2" data-imagesrc="/images/satellites/satellite1-32.png">Icon 2</option>*/
/*                                             </select>                                            */
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Icon Size</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-icon-unselected-size">*/
/*                                                 <option value="16">16 Pixels</option>*/
/*                                                 <option value="24">24 Pixels</option>*/
/*                                                 <option value="32">32 Pixels</option>*/
/*                                                 <option value="64">64 Pixels</option>*/
/*                                                 <option value="128">128 Pixels</option>*/
/*                                                 <option value="256">256 Pixels</option>*/
/*                                             </select>                                          */
/*                                         </td>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-icon-selected-size">*/
/*                                                 <option value="16">16 Pixels</option>*/
/*                                                 <option value="24">24 Pixels</option>*/
/*                                                 <option value="32">32 Pixels</option>*/
/*                                                 <option value="64">64 Pixels</option>*/
/*                                                 <option value="128">128 Pixels</option>*/
/*                                                 <option value="256">256 Pixels</option>*/
/*                                             </select>                                          */
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Label Size</th>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-label-unselected-size">*/
/*                                                 <option value="8">8 Pixels</option>*/
/*                                                 <option value="10">10 Pixels</option>*/
/*                                                 <option value="12">12 Pixels</option>*/
/*                                                 <option value="14">14 Pixels</option>*/
/*                                                 <option value="16">16 Pixels</option>*/
/*                                                 <option value="18">18 Pixels</option>*/
/*                                                 <option value="20">20 Pixels</option>*/
/*                                                 <option value="22">22 Pixels</option>*/
/*                                                 <option value="24">24 Pixels</option>*/
/*                                             </select>                                          */
/*                                         </td>*/
/*                                         <td>*/
/*                                             <select class="options-cb" id="options-3d-sat-label-selected-size">*/
/*                                                 <option value="8">8 Pixels</option>*/
/*                                                 <option value="10">10 Pixels</option>*/
/*                                                 <option value="12">12 Pixels</option>*/
/*                                                 <option value="14">14 Pixels</option>*/
/*                                                 <option value="16">16 Pixels</option>*/
/*                                                 <option value="18">18 Pixels</option>*/
/*                                                 <option value="20">20 Pixels</option>*/
/*                                                 <option value="22">22 Pixels</option>*/
/*                                                 <option value="24">24 Pixels</option>*/
/*                                             </select>                                         */
/*                                         </td>*/
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Label Colour</th>*/
/*                                         <td><input class="jscolor polarcolour" id="3d-label-colour-unselected" type="text" value="" /></td>*/
/*                                         <td><input class="jscolor polarcolour" id="3d-label-colour-selected" type="text" value="" /></td>*/
/*                                     </tr>*/
/*                                 </table>  */
/*                                 */
/*                                 */
/*                                 */
/*                                                               */
/*                                 <h3>Following Options</h3>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th>Height Above Observer Location</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-followobs-height" class="easyui-numberspinner" style="width: 60px;" required="required" data-options="min:0,max:1000,editable:false" value="1">                                        */
/*                                             <p class="description">Select the height above the observer location, this is in meters.</p>*/
/*                                         </td>*/
/*                                         <th>Height Above Satellite</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-followsat-height" class="easyui-numberspinner" style="width: 60px;" required="required" data-options="min:0,max:10000,editable:false">                                        */
/*                                             <p class="description">Select the height above the satellite location, this is in meters.</p>*/
/*                                         </td>                                        */
/*                                     </tr>*/
/*                                 </table>*/
/*                                 */
/*                                 <h3>Cities</h3>*/
/*                                 <table class="form-table">*/
/*                                     <tr valign="top">*/
/*                                         <th>Show Cities</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-show-cities" type="checkbox" class="options-cb" value="on">                                      */
/*                                             <p class="description">Enable this option to show cities on the 3d view.</p>*/
/*                                         </td>*/
/*                                         <th>Font Size</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-city-font-size" type="text" size="3" class="options-spinner"> px                                      */
/*                                             <p class="description">The font size for the city labels in pixels</p>*/
/*                                         </td>                                        */
/*                                     </tr>*/
/*                                     <tr valign="top">*/
/*                                         <th>Population Limit</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-city-pop-limit" class="easyui-numberspinner" style="width: 30px;" required="required" data-options="min:0,max:10,increment:0.1,editable:true"> Million                                      */
/*                                             <p class="description">Cities will only be displayed if their population is above or equal to this limit.</p>*/
/*                                         </td>*/
/*                                         <th>Label Colour</th>*/
/*                                         <td>*/
/*                                             <input id="options-3d-view-city-font-colour" type="text" class="jscolor">                                      */
/*                                             <p class="description">The label colour</p>*/
/*                                         </td>                                         */
/*                                     </tr>                                                                                         */
/*                                 </table>*/
/*                                 */
/*                                                                                                                          */
/*                             </div>                            */
/*                         </div>*/
/*                     </div>                    */
/*                     */
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div title="Debug View" width=1000 height=600 id="debug">   */
/*                 <table id="debuggrid" class="easyui-treegrid" style="width:600px;height:400px"  */
/*                         data-options="idField:'id',treeField:'satellite',title:'Satellite Data',fit:true">  */
/*                     <thead>  */
/*                         <tr>  */
/*                             <th data-options="field:'satellite',width:250">Satellite</th>  */
/*                             <th data-options="field:'orbits',width:60,align:'right'">Orbits</th>  */
/*                             <th data-options="field:'orbitno',width:80">Orbit Number</th>  */
/*                             <th data-options="field:'aos',width:120">AoS</th>  */
/*                             <th data-options="field:'los',width:120">LoS</th>  */
/*                             <th data-options="field:'points',width:80">Points</th>  */
/*                             <th data-options="field:'calctime',width:110">Calc Time (ms)</th>  */
/*                         </tr>  */
/*                     </thead>  */
/*                 </table>                      */
/*             </div>    */
/*             */
/*             <div title="Home View" id="home">   */
/*                 <div><img src="/images/logo-128-noborder.png" class="vertical" /><span class="heading">Welcome to AGSatTrack - Online</span></div>*/
/*                 */
/*                 <h2>Basic Concepts</h2>*/
/*                 <p><strong>Your Location.</strong> When first started the browser will ask you if the site is allowed to use your location. if you answer yes then the browser will attempt to determine your approximate location. <strong>note</strong> this is not generally that accurate. Under options->observer you can select your exact location.</p>*/
/*                 <p><strong>Satellites</strong> are loaded from groups, these match the standard groups available on sites like celestrak. A default group is loaded at startup, unless you have changed this the 'amateur' group is loaded. To load a group select the 'Groups' dropdown from the Home ribbon menu. You can also specify the default group to load in the options, under satellites.</p>*/
/*                 <p>Once a group is loaded you need to add satellites to display. When a satellite is displayed its data is calculated. Those satellites not being displayed will not have any data calculated for them. By default all satellites in the loaded group are automatically added. You can disable this in Options->satellites.</p>*/
/*                 <p>Satellites can be 'selected', this can be done from the list viewe, Satellite Selector or generally by clicking on a satellite in any view. Once a satellite is selected more data will be displayed, generally its orbit and passes. The Satellite info pannel on the left will also show more information. If multiple satellites are selected then a drop down will appear allowing you to select the satellite to show more detailed information for.</p>*/
/*                 <h2>Views</h2>*/
/*                 <p>There are 7 main views available.</p>*/
/*                 <ul>*/
/*                     <li><strong>List View.</strong> This is a basic list of all satellites loaded and is updated to reflect current data. For large groups of satellites the list is paged. The page size can be set at the botom of the view.</li>*/
/*                     <li><strong>3D View.</strong> This is a rotatable, zoomable view of the earth. satellites will be displayed, along with their orbits of there are selected. if the current orbit has a pass over your location this will be shown in green on the orbit path. The imagry for the earth can be selected in the 'provider' drop down. You can follow a selected satellite either from your location or from the satellite. The 'View' option also allows for a 2D and 2.5D view.</li>*/
/*                     <li><strong>Passes View.</strong> This view displays pass information for a satellite. The satellite and pass can be selected in the ribbon menu. The two bottom views can be selected in the ribbon menu. the default for these two views can be specified in the options.</li>*/
/*                     <li><strong>Polar View.</strong> This displays a Polar, or radar, view.</li>*/
/*                     <li><strong>Sky View.</strong> This displays a view looking South from your location. This can be handy for visual satellite observation. The horizon image can be dragged up and down if its in the way or turned off in the ribbon menu.</li>*/
/*                     <li><strong>Timeline View.</strong> This will show all passes for the selectedd satellites within the next 24 hours.</li>*/
/*                     <li><strong>Az/El View.</strong> This is <strong>only</strong> available in the passes view. It shows a graph of Azimuth and elevation for a selected pass.</li>*/
/*                 </ul>*/
/*                 <h4>Debug View</h4>*/
/*                 <p>This must be enabled in the options. This view is primarily intended to debug issues. It shows all of the available satellites along with information about the internal calculation engine.</p>*/
/*             </div>*/
/*             */
/*             <div title="DX View" id="dx">*/
/*             </div>                                  */
/*             */
/*         </div>*/
/*     </div>*/
/* */
/*     <div data-options="region:'south'" id="south-panel">*/
/*         <div id="statusbar">*/
/*             <div id="status" class="panel"><strong>Initialising</strong></div>*/
/*             <div id="statusgroup" class="panel"><strong>Group:</strong> NONE</div>*/
/*             <div id="statusfollowing" class="panel"><strong>Following:</strong> NONE</div>*/
/*             <div id="statustotalloaded" class="panel">0 Satellites Loaded</div>*/
/*             <div id="currenttime" class="panel"></div>*/
/*             <div id="credits" class="panel"></div>*/
/*                         */
/*             <div id="social-fb" class="panel last-panel">*/
/*                 <div id="fb-root"></div>*/
/*                     <script>(function(d, s, id) {*/
/*                       var js, fjs = d.getElementsByTagName(s)[0];*/
/*                       if (d.getElementById(id)) return;*/
/*                       js = d.createElement(s); js.id = id;*/
/*                       js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=218900791485439";*/
/*                       fjs.parentNode.insertBefore(js, fjs);*/
/*                     }(document, 'script', 'facebook-jssdk'));</script>*/
/*                     <div class="fb-like" data-href="http://www.facebook.com/agsattrack" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>*/
/*             </div>*/
/*             <div id="social-twitter" class="panel">*/
/*                 <iframe allowtransparency="true" frameborder="0" scrolling="no" src="https://platform.twitter.com/widgets/tweet_button.html?via=agsattrack" style="width:105px; height:20px;"></iframe>*/
/*                 <iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=agsattrack" style="width:200px; height:20px;"></iframe>*/
/*             </div>            */
/*         </div>*/
/*     </div>*/
/*         */
/*     <div id="contact-window" class="easyui-window" data-options="title:'Contact',closed:true, resizable:false, minimizable:false,maximizable:false, collapsible: false" style="width:500px;height:200px;padding:5px;">*/
/*         <div class="easyui-layout" data-options="fit:true">*/
/*             <div data-options="region:'center',border:false" style="padding:10px;background:#fff;border:1px solid #ccc;">*/
/*                 <h2>Contact</h2>*/
/*                 <p>To contact me please send an email to alex AT agsattrack.com</p>*/
/*             </div>*/
/*             <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0;">*/
/*                 <a class="easyui-linkbutton" href="javascript:void(0)" onclick="jQuery('#contact-window').window('close');">Ok</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="help-window" class="easyui-window" data-options="title:'Help',closed:true, resizable:false, minimizable:false,maximizable:false, collapsible: false" style="width:900px;height:600px;padding:0px">*/
/*         <div class="easyui-layout" data-options="fit:true">*/
/*             <div data-options="region:'center',border:false" style="background:#fff;border:1px solid #ccc;">*/
/*                 <div class="easyui-layout" data-options="fit:true">*/
/*                     <div data-options="region:'west',split:true,title:'Topics'" style="width:200px;overflow:auto">*/
/*                         <ul id="help-tree" class="easyui-tree">  */
/*                             <li>  */
/*                                 <span>Help Topics</span>  */
/*                                 <ul>  */
/*                                     <li>  */
/*                                         <span>Introduction</span>  */
/*                                         <ul>  */
/*                                             <li>  */
/*                                                 <span><a href="help/whatis.html" class="tree-help-item">What is AgSatTrack</a></span>  */
/*                                             </li>   */
/*                                         </ul>                  */
/*                                     </li>*/
/*                                     <li>  */
/*                                         <span>How To</span>  */
/*                                         <ul>  */
/*                                             <li>  */
/*                                                 <span><a href="help/loadgroups.html" class="tree-help-item">Load Groups</a></span>  */
/*                                             </li>  */
/*                                         </ul>                  */
/*                                     </li>                */
/*                                 </ul>  */
/*                             </li>  */
/*                         </ul>                    */
/*                     </div>*/
/*                     <div data-options="region:'center',title:'Help'">*/
/*                         <div id="help-content" style="padding:2px">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div data-options="region:'south',border:false" style="text-align:right;padding:5px 0;">*/
/*                 <a class="easyui-linkbutton" href="javascript:void(0)" onclick="jQuery('#help-window').window('close');">Ok</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*             */
/*     <ol id="joyRideTipContent">*/
/*       <li data-id="sat-group-selector" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">*/
/*         <h2>Select a Group</h2>*/
/*         <p>This drop down contains the groups you can use. Amateur is loaded by default. Selecting another group will load the satellites from that group.</p>*/
/*       </li>*/
/*       <li data-id="sat-selector" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">*/
/*         <h2>Select Satellites</h2>*/
/*         <p>Select the satellites you wish to display. Satellites in the right hand listbox will be displayed. Checking the checkbox will also display the orbit and footprint.</p>*/
/*       </li>*/
/*       <li data-id="view-select" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">*/
/*         <h2>Switch View</h2>*/
/*         <p>Select the view to display. You can also set the ribbon bar to switch view when you click on a tab, look in the settings under views.</p>*/
/*       </li>      */
/*       <li data-id="ribbon-tab-header-strip" data-button="Next" data-options="tipLocation:top;tipAnimation:fade">*/
/*         <h2>View Tabs</h2>*/
/*         <p>Each view has customisable options</p>*/
/*       </li> */
/*       <li data-id="satinfot" data-button="Next" data-options="tipLocation:right;tipAnimation:fade">*/
/*         <h2>Satellite Information</h2>*/
/*         <p>The left hand pane contains details about the selected satellite. If multiple satellites are selected then a drop down will be available to select which satellite to show data for.</p>*/
/*       </li>       */
/*       <li data-id="options" data-button="Close" data-options="tipLocation:top;tipAnimation:fade">*/
/*         <h2>Program Options</h2>*/
/*         <p>Setup Agsattrack how you like it :-)</p>*/
/*       </li>  */
/*            */
/*     </ol>*/
/*     */
/*  <--   */
/*     <div id='jqxListViewMenu'>*/
/*         <ul>*/
/*             <li><a href="#">Home</a></li>*/
/*             <li>About Us*/
/*                 <ul>*/
/*                     <li><a href="#">History</a></li>*/
/*                     <li><a href="#">Our Vision</a></li>*/
/*                     <li><a href="#">The Team</a>*/
/*                         <ul>*/
/*                             <li><a href="#">Brigita</a></li>*/
/*                             <li><a href="#">John</a></li>*/
/*                             <li><a href="#">Michael</a></li>*/
/*                             <li><a href="#">Peter</a></li>*/
/*                             <li><a href="#">Sarah</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="#">Clients</a></li>*/
/*                     <li><a href="#">Testimonials</a></li>*/
/*                     <li><a href="#">Press</a></li>*/
/*                     <li><a href="#">FAQs</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Services*/
/*                 <ul>*/
/*                     <li><a href="#">Product Development</a></li>*/
/*                     <li><a href="#">Delivery</a></li>*/
/*                     <li><a href="#">Shop Online</a></li>*/
/*                     <li><a href="#">Support</a></li>*/
/*                     <li><a href="#">Training &amp; Consulting</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Products*/
/*                 <ul>*/
/*                     <li><a href="#">New</a>*/
/*                         <ul>*/
/*                             <li><a href="#">Corporate Use</a></li>*/
/*                             <li><a href="#">Private Use</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="#">Used</a>*/
/*                         <ul>*/
/*                             <li><a href="#">Corporate Use</a></li>*/
/*                             <li><a href="#">Private Use</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="#">Featured</a></li>*/
/*                     <li><a href="#">Top Rated</a></li>*/
/*                     <li><a href="#">Prices</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li><a href="#">Contact Us</a>*/
/*                 <ul>*/
/*                     <li><a href="#">Enquiry Form</a></li>*/
/*                     <li><a href="#">Map &amp; Driving Directions</a></li>*/
/*                     <li><a href="#">Your Feedback</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*  -->                   */
/* */
/*  <div id="help-1" class="helpwrapper">*/
/*      <div style="width: 220px" class="helptext">       */
/*      <h2><span><img src="/images/info.png" width=32 /></span>Information</h2>*/
/*      <p>There are {tlecount} satellites loaded but none are current being displayed.</p>*/
/*      <p>before satellites are displayed you need to add them. There are two ways to add satellites.</p>*/
/*      <ul>*/
/*         <li><img src="/js/ribbon/icons/hot/satellite.png"><span>Use the satellite selector on the home ribbon tab</span></li>*/
/*         <li><img src="/js/ribbon/icons/hot/satellite_all.png"><span>Use the add all satellites button on the home ribbon tab</span></li>*/
/*      </ul>*/
/*      </div>*/
/*  </div>*/
/*                 */
/*     <script type="text/javascript">*/
/*         var href = document.location.href;*/
/*         */
/*         if (href.indexOf('local') === -1) {*/
/*             if (AGSETTINGS.cookiesOk()) {*/
/*                 var _gaq = _gaq || [];*/
/*                 _gaq.push([ '_setAccount', 'UA-36758800-1' ]);*/
/*                 _gaq.push([ '_trackPageview' ]);*/
/* */
/*                 (function() {*/
/*                     var ga = document.createElement('script');*/
/*                     ga.type = 'text/javascript';*/
/*                     ga.async = true;*/
/*                     ga.src = ('https:' == document.location.protocol ? 'https://ssl'*/
/*                             : 'http://www')*/
/*                             + '.google-analytics.com/ga.js';*/
/*                     var s = document.getElementsByTagName('script')[0];*/
/*                     s.parentNode.insertBefore(ga, s);*/
/*                 })();*/
/*             }*/
/*         }*/
/*     </script>*/
/* */
/* </body>*/
