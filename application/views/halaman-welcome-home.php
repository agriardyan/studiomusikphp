<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <title>Sabha IS</title>
        <link rel="shortcut icon" href="<?php echo utility_helper::resources_url().'img/OM-Item_Logo.png' ?>" type="image/png">
        <link href="<?php echo utility_helper::resources_url().'/semantic-ui/packaged/css/semantic.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo utility_helper::resources_url().'/bxslider/jquery.bxslider.css'; ?>" rel="stylesheet" type="text/css">
<!--        <link href="${pageContext.request.contextPath}/resources/semantic-ui/packaged/css/semantic.css" rel="stylesheet" type="text/css">
        <link href="${pageContext.request.contextPath}/resources/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css">-->
    </head>
    <body>
        <!-- Menu bar -->
<!--        <div class="ui blue inverted main menu">
            <div class="container">
                <a class="active item" href="welcome">
                    <i class="home icon"></i> HOME
                </a>
                <a class="item" href="member">
                    <i class="user icon"></i> MEMBER AREA
                </a>
                <a class="item" href="help">
                    <i class="video icon"></i> BANTUAN
                </a>
                <div class="right menu">
                    <a class="item" id="loginButton">
                        <i class="sign in icon"></i> LOGIN
                    </a>
                </div>
            </div>
        </div>-->
        <!-- end of Menu bar -->
        
        <!--Main body-->
        <div class="main container">
            <div class="ui grid" style="position: absolute;">
                <div class="row">
                    <div class="three wide column">
                        <h4 class="ui top attached center aligned inverted blue block header">
                            KEUNTUNGAN MEMBER
                        </h4>
                        <div class="ui segment attached">
                            <img src="<?php echo utility_helper::resources_url().'img/OMitem_Benefit.png' ?>" style="width: 90%">
                        </div>
                    </div>
                    <div class="ten wide column">
                        <h4 class="ui top center aligned attached inverted blue block header">
                            WARTA TERBARU
                        </h4>
                        <div class="ui segment attached">
                            <ul id="slider1">
                                <li><img src="<?php echo utility_helper::resources_url().'img/Kucing Berdoa.jpg' ?>" alt="slide1" title="Kucing Berdoa"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/Kucing Galau.jpg' ?>" alt="slide2" title="Kucing Galau"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/Kucing Natal.jpg' ?>" alt="slide2" title="Kucing Natal"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/Kucing Fotografer.jpg' ?>" alt="slide2" title="Kucing Fotografer"></li>
                            </ul>
                        </div>
                        <h4 class="ui top center aligned attached inverted blue block header">
                            EVENT YANG AKAN DATANG
                        </h4>
                        <div class="ui segment attached">
                            <ul id="slider2">
                                <li><img src="<?php echo utility_helper::resources_url().'img/11.jpg' ?>" alt="slide1" title="Domo"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/12.jpg' ?>" alt="slide2" title="AKB48"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/13.jpg' ?>" alt="slide3" title="The North Face"></li>
                                <li><img src="<?php echo utility_helper::resources_url().'img/12.jpg' ?>" alt="slide2" title="AKB48"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Main body-->
        

        <!--Script-->
        <script src="<?php echo utility_helper::resources_url().'/semantic-ui/packaged/javascript/jquery-2.1.1.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo utility_helper::resources_url().'/bxslider/jquery.bxslider.js'; ?>" type="text/javascript"></script>
        <script src="<?php echo utility_helper::resources_url().'semantic-ui/packaged/javascript/semantic.js' ?>" type="text/javascript"></script>
<!--        <script src="${pageContext.request.contextPath}/resources/semantic-ui/packaged/javascript/jquery-2.1.1.js" type="text/javascript"></script>
        <script src="${pageContext.request.contextPath}/resources/bxslider/jquery.bxslider.js" type="text/javascript"></script>
        <script src="${pageContext.request.contextPath}/resources/semantic-ui/packaged/javascript/semantic.js" type="text/javascript"></script>-->
        <script type="text/javascript">
            $(document).ready(function() {
                //Slideshow 1
                $('#slider1').bxSlider({
                    speed: 1000, //transition speed
                    mode: 'horizontal', //transition mode
                    captions: true, //captions based on its title
                    auto: true, //auto slide
                    autoStart: true, //auto start when the page load
                    autoControls: false,
                    adaptiveHeight: true
                });

                //Slideshow 2
                $('#slider2').bxSlider({
                    speed: 1000,
                    auto: true,
                    autoStart: true,
                    autoControls: false,
                    captions: true,
                    slideWidth: 200,
                    minSlides: 4,
                    maxSlides: 4,
                    moveSlides: 1
                });

            });
        </script>
    </body>
</html>
