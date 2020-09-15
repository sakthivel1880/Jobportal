<style>
.mail{
    text-transform: lowercase;
}
    </style>
<footer class="footer">
           
         <div class="row no-padding">
                <div class="container">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">About Us</h3>
                            <div class="textwidget">
                                <p>lennim is a global online employment solution for people seeking jobs and the employers who need great people.</p>
                                <!-- <p>7860 North Park Place
                                    <br>San Francisco, CA 94120</p>
                                <p><strong>Email:</strong> Support@careerdesk</p>
                                <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">Contact Us</h3>
                            <div class="textwidget">
                            <p>7860 North Park Place
                                    <br>San Francisco, CA 94120</p>
                                <p><strong>Email:</strong><span class="mail"> support@lennim.com</span></p>
                                <p><strong>Call:</strong> <a href="tel:+15555555555">555-555-1234</a></p>
                                <!-- <div class="textwidget">
                                    <ul class="footer-navigation">
                                         <li><a href="manage-company.html" title=""></a></li>
                                        <li><a href="manage-company.html" title="">Android Developer</a></li>
                                        <li><a href="manage-company.html" title="">CMS Development</a></li>
                                        <li><a href="manage-company.html" title="">PHP Development</a></li>
                                        <li><a href="manage-company.html" title="">IOS Developer</a></li>
                                        <li><a href="manage-company.html" title="">Iphone Developer</a></li> 
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">Stay Connected</h3>
                            <div class="textwidget">
                                <?php 
                                $sql="SELECT * FROM `socialmedia` ORDER BY socialmedia_id LIMIT 1";
                                $result=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($result);
                                ?>
                            <ul class="footer-social">
                                    <li><a href="<?php echo $row['fb']; ?> " target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                                    <li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                                    <li><a href="<?php echo $row['tweet']; ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                                    <li><a href="<?php echo $row['Instagram']; ?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                                    <li><a href="<?php echo $row['link']; ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <h3 class="widgettitle widget-title">Connect Us</h3>
                            <div class="textwidget">
                                <form class="footer-form">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div> 
            <div class="row copyright">
                <div class="container">
                    <p>Copyright Lennim © 2019. All Rights Reserved </p>
                </div>
            </div>
        </footer>
        <div class="clearfix"></div>
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                                <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                            </ul>
                            <div class="tab-content" id="myModalLabel2">
                                <div role="tabpanel" class="tab-pane fade in active" id="login"><img src="assets/img/logo.png" class="img-responsive" alt="" />
                                    <div class="subscribe wow fadeInUp">
                                        <form class="form-inline" method="post">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Username" required="">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                                    <div class="center">
                                                        <button type="submit" id="login-btn" class="submit-btn"> Login </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="register"><img src="assets/img/logo.png" class="img-responsive" alt="" />
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Your Name" required="">
                                                <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                                                <input type="email" name="email" class="form-control" placeholder="Username" required="">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                                <div class="center">
                                                    <button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button> -->
        <!-- <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
            <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
                </li>
                <li>
                    <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
                </li>
            </ul>
        </div> -->
        <!-- Scripts==================================================-->
        <script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
        <script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
        <script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
        <script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
        <script type="text/javascript" src="assets/plugins/js/loader.js"></script>
        <script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/jQuery.style.switcher.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#styleOptions').styleSwitcher();
            });
        </script>
        <script>
            function openRightMenu() {
                 document.getElementById("rightMenu").style.display = "block";
            }

            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>
    </div>
</body>


</html>