<div class="container">

    <div id="fullpage">

        <!-- section 1: tijdzone + date php, animatie vierkant -->
        <div class="section"> 
            <h1>First section of the page</h1>
            <h2>
                <?php
                date_default_timezone_set("Europe/Amsterdam");
                    $datum = date("d/m/Y");
                    $tijd = date("H:i");

                    echo "Today it is " . $datum . ", " . $tijd . " hour.";

                ?>
            </h2>
            <h2>View this website by using your <span id="yellow">keyboard</span> keys to scroll.
            This website focusses on the use of jQuery, Ajax and animations.
            </h2>
            <div id="ani1"> All my life I thought air was free,</div>
        </div>

        <!-- section 2: video.js -->
        <div class="section">
            <h1>Second section of the page</h1>
            <h2>This video begins automatically.</h2>
            <video id="vbVideo" class="video-js" controls autoplay muted data-setup="{}">
                <source src="vid/vb_video.mp4" type='video/mp4'>
                <source src="vid/vb_video.webm" type='video/webm'>
                <!-- indien foutmelding-->
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>

        <!-- section 3: slides -> slide 1: animatie vierkant, slide 2: ajax -->
        <div class="section"><!--Section 3: slides-->
            <div class="slide">
                <h1>Slide 1</h1>
                <h2>This box will enlarge by making an animation using CSS.</h2>
                <div id="ani2"></div>
            </div>
            <div class="slide"><!--Slide 2-->
                <div id="blok1" class="blok"><a href="page/about.php" class="btn">Open</a>
                    <div id="content"></div>
                </div>
                <div id="blok2" class="blok"><a href="">Open</a></div>
                <div id="blok3" class="blok"><a href="">Open</a></div>
            </div>
            <div class="slide">
                <h1>Slide 3</h1>
                <div id="coffeetime">
                    <h2> Time for some coffee now!</h2>
                </div>
            </div>
        </div>

        <!-- section 4: OpenLayers map -->
        <div class="section">
            <h1>Fourth section of the page</h1>
            <h2>This is a map. Not Google maps because, well... Google.</h2>
            <div id="map" class="map"></div>
        </div>

    </div>

</div>