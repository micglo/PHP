<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 2016-05-01
 * Time: 20:06
 */
include_once 'models/Common.php';
$pageData = new PageData();
$pageData->title = "Kontakt";
$pageData->AddScript('js/jquery-1.7.min.js');
$pageData->section = "
<div class=\"container top4\">
          <div class=\"grid_2\">
              <div class=\"left1\">
                  <script>
                      var mylocation=NoweOkno.php
                      var winheight=100;
                      var winsize=100;
                      var x=5;

                      function go()
                      {
                          win2=window.open(\"\",\"\",\"scrollbars\");
                          if (!document.layers&&!document.all)
                          {
                              win2.location=mylocation;
                              return;
                          }
                          win2.resizeTo(100,100);
                          win2.moveTo(0,0);
                          go2();
                      }

                      function go2()
                      {
                          if (winheight>=screen.availHeight-3)
                              x=0;
                          win2.resizeBy(5,x);
                          winheight+=5;
                          winsize+=5;
                          if (winsize>=screen.width-5)
                          {
                              win2.location=mylocation;
                              winheight=100;
                              winsize=100;
                              x=5;
                              return;
                          }
                          setTimeout(\"go2()\",50);
                      }

                  </script>
                  <a href=\"javascript:go()\" onMouseover=\"window.status='open window';return true\" onMouseout=\"window.status=''\" >Otworz nowe okno</a>
              </div>
          </div>
      </div>
";
$page = include_once "views/MainPageTemplate.php";
echo $page;