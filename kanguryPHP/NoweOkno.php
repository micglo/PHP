<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 20:01
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Ciekawostki";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->embeddedScript = "
<script type=\"text/javascript\">

        var imageclock=new Object();
        imageclock.digits=[\"images/c0.gif\", \"images/c1.gif\", \"images/c2.gif\", \"images/c3.gif\", \"images/c4.gif\", \"images/c5.gif\", \"images/c6.gif\", \"images/c7.gif\", \"images/c8.gif\", \"images/c9.gif\", \"images/cam.gif\", \"images/cpm.gif\", \"images/colon.gif\"];
        imageclock.instances=0;
        var preloadimages=[];

        for (var i=0; i<imageclock.digits.length; i++){
            preloadimages[i]=new Image();
            preloadimages[i].src=imageclock.digits[i];
        }

        imageclock.imageHTML=function(timestring){ //zwraca string z obrazka
            var sections=timestring.split(\":\")
            if (sections[0]==\"0\")
                sections[0]=\"12\";

            else if (sections[0]>=13)
                sections[0]=sections[0]-12+\"\";

            for (var i=0; i<sections.length; i++){
                if (sections[i].length==1)
                    sections[i]='<img src=\"'+imageclock.digits[0]+'\" />'+'<img src=\"'+imageclock.digits[parseInt(sections[i])]+'\" />';
                else
                    sections[i]='<img src=\"'+imageclock.digits[parseInt(sections[i].charAt(0))]+'\" />'+'<img src=\"'+imageclock.digits[parseInt(sections[i].charAt(1))]+'\" />';
            }
            return sections[0]+'<img src=\"'+imageclock.digits[12]+'\" />'+sections[1]+'<img src=\"'+imageclock.digits[12]+'\" />'+sections[2];
        }

        imageclock.display=function(){
            var clockinstance=this;
            this.spanid=\"clockspan\"+(imageclock.instances++);
            document.write('<span id=\"'+this.spanid+'\"></span>');
            this.update();
            setInterval(function(){clockinstance.update()}, 1000);
            var x = location.href;;
            document.getElementById(\"demo\").innerHTML = \"Adres linku pod ktorym sie znajdujesz: \" + x;
        }

        imageclock.display.prototype.update=function(){
            var dateobj=new Date();
            var currenttime=dateobj.getHours()+\":\"+dateobj.getMinutes()+\":\"+dateobj.getSeconds(); //tworzy string
            var currenttimeHTML=imageclock.imageHTML(currenttime)+'<img src=\"'+((dateobj.getHours()>=12)? imageclock.digits[11] : imageclock.digits[10])+'\" />';
            document.getElementById(this.spanid).innerHTML=currenttimeHTML;
        }
    </script>
";
$pageData->section = "
<div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\" style=\"margin-bottom: 20px\">
                  <div id=\"demo\"></div>
                  <div class=\"line\" style=\"margin-top: 20px; margin-bottom: 20px\"></div>
                  <script type=\"text/javascript\">

                      new imageclock.display()

                  </script>
                  <div class=\"line\" style=\"margin-top: 20px; margin-bottom: 20px\"></div>
                  <script language=\"javascript\">
                      function day_title(day_name){
                          document.write(\"<TD ALIGN=center WIDTH=35>\"+day_name+\"</TD>\");
                      }
                      function fill_table(month,month_length)
                      {
                          day=1;
                          document.write(\"<TABLE BORDER=3 CELLSPACING=3 CELLPADDING=%3><TR>\");
                          document.write(\"<TD COLSPAN=7 ALIGN=center><B>\"+month+\"   \"+year+\"</B><TR>\");
                          day_title(\"Sun\");
                          day_title(\"Mon\");
                          day_title(\"Tue\");
                          day_title(\"Wed\");
                          day_title(\"Thu\");
                          day_title(\"Fri\");
                          day_title(\"Sat\");
                         document.write(\"</TR><TR>\");
                          for (var i=1;i<start_day;i++){
                              document.write(\"<TD>\");
                          }
                          for (var i=start_day;i<8;i++){
                              document.write(\"<TD ALIGN=center>\"+day+\"</TD>\");
                              day++;
                          }
                          document.write(\"<TR>\")
                          while (day <= month_length) {
                              for (var i=1;i<=7 && day<=month_length;i++){
                                  document.write(\"<TD ALIGN=center>\"+day+\"</TD>\");
                                  day++;
                              }
                              document.write(\"</TR><TR>\");
                              start_day=i;
                          }
                          document.write(\"</TR></TABLE><BR>\");
                      }
                  </script>

                  <script language=\"javascript\">
                      year=2016;

                      today= new Date(\"January 1, \"+year);
                      start_day = today.getDay() + 1;
                      fill_table(\"January\",31);
                      fill_table(\"February\",29);
                      fill_table(\"March\",31);
                      fill_table(\"April\",30);
                      fill_table(\"May\",31);
                      fill_table(\"June\",30);
                      fill_table(\"July\",31);
                      fill_table(\"August\",31);
                      fill_table(\"September\",30);
                      fill_table(\"October\",31);
                      fill_table(\"November\",30);
                      fill_table(\"December\",31);
                  </script>
              </div>
          </div>
      </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;