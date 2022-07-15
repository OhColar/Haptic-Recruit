<?php
    
    include "inc/functions.php";

    $app = $_GET['app'];        
    if(!$app) { $app = "manage"; }

    foreach(array_keys($_POST) as $key)
    {
      $_POST[$key] = mysql_real_escape_string($_POST[$key]);
    }

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <title>Haptic Recruit CMS</title>

        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="/admin/js/tinymce/tinymce.min.js"></script>

        <script type="text/javascript">
            tinymce.init({
               selector: 'textarea',
               relative_urls: false,
               images_upload_base_path: '/uploads/',
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'media table contextmenu paste code help '
                  ],
               valid_elements: "@[id|class|style|title|dir<ltr?rtl|lang|xml::lang|onclick|ondblclick|"
+ "onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onkeypress|"
+ "onkeydown|onkeyup],a[rel|rev|charset|hreflang|tabindex|accesskey|type|"
+ "name|href|target|title|class|onfocus|onblur],strong/b,em/i,strike,u,"
+ "#p,-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|"
+ "src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup,"
+ "-blockquote,-table[border=0|cellspacing|cellpadding|width|frame|rules|"
+ "height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|"
+ "height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,"
+ "#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor"
+ "|scope],#th[colspan|rowspan|width|height|align|valign|scope],caption,-div,"
+ "-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face"
+ "|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite],"
+ "object[classid|width|height|codebase|*],param[name|value|_value],embed[type|width"
+ "|height|src|*],script[src|type|language],map[name],area[shape|coords|href|alt|target],bdo,"
+ "button,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|"
+ "valign|width],dfn,fieldset,form[action|accept|accept-charset|enctype|method],"
+ "input[accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value],"
+ "kbd,label[for],legend,noscript,optgroup[label|disabled],option[disabled|label|selected|value],"
+ "q[cite],samp,select[disabled|multiple|name|size],small,"
+ "textarea[cols|rows|disabled|name|readonly],tt,var,big",
extended_valid_elements : "iframe[src|frameborder|style|scrolling|class|width|height|name|align]",

               toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help code | image',
               file_browser_callback: RoxyFileBrowser
            });


            function RoxyFileBrowser(field_name, url, type, win) {
              var cmsURL = '/fileman/index.html';  // script URL - use an absolute path!
              if (cmsURL.indexOf("?") < 0) {
                cmsURL = cmsURL + "?type=" + type;
              }
              else {
                cmsURL = cmsURL + "&type=" + type;
              }
              cmsURL += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;
              tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Roxy File Browser',
                width: 850, // Your dimensions may differ - toy around with them!
                height: 650,
                resizable: "yes",
                plugins: "media",
                inline: "yes", // This parameter only has an effect if you use the inlinepopups plugin!
                close_previous: "no"
                }, {
                window: win,
                input: field_name
                  });
              return false;
            }

            // Show Roxy on input
            function openCustomRoxy(){
              $('#roxyCustomPanel').dialog({modal:true, width:875,height:600});
            }
            function openCustomRoxy1(){
              $('#roxyCustomPanel1').dialog({modal:true, width:875,height:600});
            }
            function openCustomRoxy2(){
              $('#roxyCustomPanel2').dialog({modal:true, width:875,height:600});
            }
            function closeCustomRoxy(){
              $('#roxyCustomPanel').dialog('close');
            }
            function closeCustomRoxy1(){
              $('#roxyCustomPanel1').dialog('close');
            }
            function closeCustomRoxy2(){
              $('#roxyCustomPanel2').dialog('close');
            }
        </script>

        

    </head>

    <body>

        <section id="container">

            <aside>
                <nav>
                    <p>Welcome, Haptic! &nbsp;<a href="/">[logout]</a></p>
                    <h3>Pages</h3>
                    <ul>
                        <li><a href="?app=add">Add a Page</a></li>
                        <li><a href="?app=manage">Manage Pages</a></li>     
                    </ul>
                    <h3>Blog Management</h3>
                    <ul>
                        <li><a href="?app=add_blog">Add a Post</a></li>
                        <li><a href="?app=manage_blog">Manage Posts</a></li>     
                    </ul>
                    <h3>Job Management</h3>
                    <ul>
                        <li><a href="?app=add_job">Add a Job</a></li>
                        <li><a href="?app=manage_job">Manage Jobs</a></li>     
                    </ul>
                    <h3>Hub Management</h3>
                    <ul>
                        <li><a href="?app=add_hub">Add a Hub</a></li>
                        <li><a href="?app=manage_hub">Manage Hubs</a></li>     
                    </ul>
                    <h3>Team Management</h3>
                    <ul>
                        <li><a href="?app=editTeam&page=1">Edit Hannah</a></li>
                        <li><a href="?app=editTeam&page=2">Edit James</a></li>     
                    </ul>
                </nav>
            </aside>
            <main>

                <div class="content">
                <?php
                    
                    if($app){
                        include "apps/$app.php";
                    }
                    
                ?>
                </div>
            </main>

        </section>




            <!-- <div class="block">

                <h2>Need help?</h2>
    
                <p>If you encounter any problems while using our CMS, please let us know by emailing <a href="mailto:support@.com">support@.com</a></p>
    
            </div>   -->
<!--     
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 -->
                        

    </body>

</html>