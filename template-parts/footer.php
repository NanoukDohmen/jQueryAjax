<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/fullpage.min.js"></script>
<script src="https://vjs.zencdn.net/7.4.1/video.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<script>

    $(document).ready(function() {
        $("#ani1").fadeIn(2500 , function () {
            $("#ani1").html( "Until I bought a bag of chips ..." );
            $("#ani1") .animate({
                marginLeft: "+=300px",
            }, 5000, 'easeInOutBounce');
        });

        $('#fullpage').fullpage({
            //options here
            // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#000'],
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
            autoScrolling:true,
            scrollHorizontally: true,
            sectionSelector: '.section',
            slideSelector: '.slide',
            keyboardScrolling: true,
            controlArrows: true,
            continuousHorizontal: true,
            continuousVertical: true,

            afterLoad: function(index,origin, destination, direction){
                var loadedSection = this;

                //using index
                if(origin.index == 2){
                    // alert("Section 3 wordt rood");
                    $(".section").css("background-color", "crimson");
                    $("#ani2").addClass("startAnimate");

                }else{
                    $(".section").css("background-color","#bdc8cd");
                }
            }
        });
        //methods
        $.fn.fullpage.setAllowScrolling(false);

        //OpenLayers map
        var lat = 50.85;
        var long = 5.69;
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM({
                        "url" : "http://{a-c}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png"
                    })
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([long, lat]),
                zoom: 7.5
            })
        });
        //API
        console.log(ol);

        //click functie panelen
        var button = $(".blok a");
        button.click(function (event) {
            event.preventDefault();

            var href = $(this).attr('href');
            var panel = $(this).parent();

            if(panel.hasClass("active")){
                panel.removeClass("active");
                $(".btn").html("Open");
                $(".article").fadeOut(1500, function(){
                    $(".article").remove();
                });
            }else {
                panel.addClass("active");
                $(".btn").html("Close");

                $.ajax({
                    beforeSend: function(){
                      $("#content").html("LOADING");  
                    },
                    url: href,
                    success: function(data){
                        
                        //ik heb via de setTimeout een delay toegevoegd zodat de tekst LOADING zichtbaar werkt (voor de opdracht) anders laadt hij te snel
                        
                        setTimeout(function(){
                            $("#content").html("");
                        }, 2000);
                        
                        
                        setTimeout(function(){
                           $("#content").prepend(data).hide().fadeIn(1500); 
                        }, 2500);
                    }

                });
                //einde ajax
            }

        })
    });


</script>
