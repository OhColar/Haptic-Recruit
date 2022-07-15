    <?php
        // Show popup form
        if($page == "home") {

            include('pages/app/contact_candidate.php');
            include('pages/app/contact_client.php');
            include('pages/app/contact_refer.php');

        } else {}


        if($page == "contact-us") {} else {
    ?>
        <section class="banner bannerBlue aboutBanner print_hide">

            <div class="content">

                <h2>GET IN TOUCH</h2>

                <!-- <p>Whether you're looking for a new job or looking to hire let us help you find what you're looking for. <br>With our wide network of global gaming hubs we're sure to find you the right fit!</p> -->

                <p><a href="/contact-us" class="btn">Let's Chat</a></p>
            </div>

        </section>
    <?php 
        }

        if($page == "contact-us") {} else {
    ?>
        <!-- <section class="banner socialBanner patternBg">
            <div class="content">

                <h2>Follow Us</h2>
                <p>content coming soon</p>

            </div>
        </section> -->
    <?php } ?>
        <footer>
            <div class="content">

                <div class="grid grid--gutters">
                    
                    <div class="grid-cell">
                        <div class="footer_logo">
                            <a href="/"><img src="/img/haptic_logo.png" alt="haptic logo"></a>
                        </div>
                    </div>

                    <div class="grid-cell">
                        <div class="footer_nav">
                            <nav>
                                <ul>
                                   <li class="<?php if($page == 'home' ) { echo 'active';}?>"><a href="/">Home</a></li>
                                   <li class="<?php if($page == 'about-us' ) { echo 'active';}?>"><a href="/about-us">About us</a></li>
                                   <li class="<?php if($page == 'client' ) { echo 'active';}?>"><a href="/client">For the studios</a></li>
                                   <li class="<?php if($page == 'candidates' ) { echo 'active';}?>"><a href="/candidates">For the candidates</a></li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>

                     <div class="grid-cell">
                        <div class="footer_nav">
                            <nav>
                                <ul>
                                   <li class="<?php if($page == 'jobs' ) { echo 'active';}?>"><a href="/jobs">Live Jobs</a></li>
                                   <li class="<?php if($page == 'blog' ) { echo 'active';}?>"><a href="/blog">Blog</a></li>
                                   <li class="<?php if($page == 'contact-us' ) { echo 'active';}?>"><a href="/contact-us">Contact us</a></li>
                                    <!-- <li><a href="#">Terms &amp; Conditions</a></li> -->
                                    <li><a href="/docs/haptic-privacy-policy.pdf">Privacy Policy</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="grid-cell">
                        <div class="footer_nav footer_social">
                            <nav>
                                <ul>
                                    <li><a href="https://www.facebook.com/hapticrecruit/" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                                    <li><a href="https://twitter.com/HapticRecruit" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                                    <li><a href="https://www.instagram.com/hapticrecruit/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                                    <li><a href="https://www.linkedin.com/company/haptic-recruit/" target="_blank"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <p><small>&copy;<?php echo date("Y"); ?> Haptic Recruit Ltd - All rights reserved | Haptic Recruit, White Collar Factory, 1 Old Street Yard, London EC1Y 8AF</small></p>
            </div>
        </footer>

        <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
        
        <script defer src="/js/vendor/modernizr-3.5.0.min.js"></script>
        <script defer src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script defer src="/js/plugins.js"></script>
        <script defer src="/js/main.js?v=11"></script>

        <!-- Quantcast Tag -->
        <script type="text/javascript">
        window._qevents = window._qevents || [];

        (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
        })();

        window._qevents.push({
        qacct:"p-SkA9XsNStASQG",
        uid:"__INSERT_EMAIL_HERE__"
        });
        </script>

        <noscript>
        <div style="display:none;">
        <img src="//pixel.quantserve.com/pixel/p-SkA9XsNStASQG.gif" border="0" height="1" width="1" alt="Quantcast"/>
        </div>
        </noscript>
        <!-- End Quantcast tag -->

        
        <?php 
        
          
        if($page == "home") {
            ?>
           
        
        <!-- POPUP FORM JS -->
        

        <!-- SEND CANDIDATE JS -->
        <script type="text/javascript">
            // Candidate Submit
            $("#candidateSubmit").click(function(e) {
                    
                   var proceed = true;

                   if(proceed) //everything looks good! proceed...
                {

                   //data to be sent to server        
                    var m_data = new FormData();   
                    m_data.append( 'fullName', $('#fullName').val());
                    m_data.append( 'email', $('#email').val());
                    m_data.append( 'telephone', $('#telephone').val());

                    var chkArray = [];

                    /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
                    $(".get_value:checked").each(function() {
                        chkArray.push($(this).val());
                    });
                    
                    /* we join the array separated by the comma */
                    var selected;
                    selected = chkArray.join(',') ;

                    m_data.append('hub', selected);

                    m_data.append( 'interest', $('#interest').val());
                    // m_data.append( 'contactDate', $('#contactDate').val());
                    m_data.append( 'file_attach', $('input[name=file_attach]')[0].files[0]);
                    m_data.append( 'termsCheck', $('#termsCheck').val());
                      
                    //instead of $.post() we are using $.ajax()
                    //that's because $.ajax() has more options and flexibly.

                    $.ajax({
                      url: '/candidateProcess.php',
                      data: m_data,
                      processData: false,
                      contentType: false,
                      type: 'POST',
                      dataType:'json',
                      success: function(response){
                         //load json data from server and output message    
                        if(response.type == 'error'){ //load json data from server and output message    
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#candidateForm #fail').fadeIn("fast");
                            },300);
                        }else{
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#candidateForm #success').fadeIn("fast");
                            },300);
                            
                        }
                        
                      }
                    });
                     

                }
                return false;   
            });
        </script>

        <!-- SEND CLIENT JS -->
        <script type="text/javascript">
            // Candidate Submit
            $("#clientSubmit").click(function(e) {
                   var proceed = true;

                   if(proceed) //everything looks good! proceed...
                {

                   //data to be sent to server        
                    var m_data = new FormData();   
                    m_data.append( 'studio', $('#studio').val());
                    m_data.append( 'location', $('#location').val());
                    m_data.append( 'name_position', $('#name_position').val());
                    m_data.append( 'client_email', $('#client_email').val());
                    m_data.append( 'client_telephone', $('#client_telephone').val());
                    m_data.append( 'client_termsCheck', $('#client_termsCheck').val());
                      
                    //instead of $.post() we are using $.ajax()
                    //that's because $.ajax() has more options and flexibly.

                    $.ajax({
                      url: '/clientProcess.php',
                      data: m_data,
                      processData: false,
                      contentType: false,
                      type: 'POST',
                      dataType:'json',
                      success: function(response){
                         //load json data from server and output message    
                        if(response.type == 'error'){ //load json data from server and output message    
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#clientForm #client_fail').fadeIn("fast");
                            },300);
                        }else{
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#clientForm #client_success').fadeIn("fast");
                            },300);
                            
                        }
                        
                      }
                    });
                     

                }
                return false;   
            });
        </script>

        <!-- SEND Refer JS -->
        <script type="text/javascript">
            // Candidate Submit
            $("#referSubmit").click(function(e) {
                   var proceed = true;

                   if(proceed) //everything looks good! proceed...
                {

                   //data to be sent to server        
                    var m_data = new FormData();   
                    m_data.append( 'your_name', $('#your_name').val());
                    m_data.append( 'your_email', $('#your_email').val());
                    m_data.append( 'friends_name', $('#friends_name').val());
                    m_data.append( 'friends_email', $('#friends_email').val());
                    m_data.append( 'friend_specialism', $('#friend_specialism').val());
                    m_data.append( 'refer_termsCheck', $('#refer_termsCheck').val());
                      
                    //instead of $.post() we are using $.ajax()
                    //that's because $.ajax() has more options and flexibly.

                    $.ajax({
                      url: '/referProcess.php',
                      data: m_data,
                      processData: false,
                      contentType: false,
                      type: 'POST',
                      dataType:'json',
                      success: function(response){
                         //load json data from server and output message    
                        if(response.type == 'error'){ //load json data from server and output message    
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#referForm #refer_fail').fadeIn("fast");
                            },300);
                        }else{
                            $('.question').fadeOut('fast');
                             setTimeout(function(){
                             //$("#message-green").fadeOut("slow");
                             $('#referForm #refer_success').fadeIn("fast");
                            },300);
                            
                        }
                        
                      }
                    });
                     

                }
                return false;   
            });
        </script>

        <?php
        } else {} ?>
        <script async data-uid="90622048fa" src="https://deft-teacher-1468.ck.page/90622048fa/index.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23151202-5"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23151202-5');
        </script>

      
    </body>
</html>