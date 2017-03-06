<!DOCTYPE html>
<html>
<head>
    <meta charset=="UTF-8">
    <meta name="robots" content="noarchive">
    <title>Dumblr</title>
    <link rel="icon" type="image/png" href="{{ URL::asset('Resources/logodumblrv2.png') }}"/>
    
    <link href="{{ URL::asset('css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ URL::asset('Fonts.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('FrontStyle.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('jquery-3.1.1.min.js') }}  " type="text/javascript"></script>    
    <script src="{{ URL::asset('js/bootstrap.min.js') }}  "></script>
    
</head>
<body>
    <div>
        <div class="searchbar">
            <div class="logodiv">
            <span class="logo"></span>
            </div>
            
            <div><input type="text" class="transparente" placeholder="Buscar caciones..."></div>
            <span class="glyphicon glyphicon-search"></span>
            <span class= "menu">Listas</span>
             <span class= "menu">Esteban Eduardo</span>
            
        
        </div>
    </div>
    
    
    <div class="subscriptions">
    <ul class="sublist">

        <li class="subelement"><div class="subscribedto"><div class="subfotodiv"><span class="subfoto"></span></div><div class="subname"><label>Edgar</label></div></div></li>    
        <li class="subelement"><div class="subscribedto"><div class="subfotodiv"><span class="subfoto"></span></div><div class="subname"><label>Karen</label></div></div></li>    
        <li class="subelement"><div class="subscribedto"><div class="subfotodiv"><span class="subfoto"></span></div><div class="subname"><label>Walter</label></div></div></li>    

    </ul>
    </div>
     
    
    <div class="songfeed">
        
    <ul>
        
        <li class="playlistsong">
        <div class="playlisttrack">
            <div class="bar colororange"></div>
            <div class="trackbackground">
               <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label><label class="postedby" style="float:right">17/02/2017</label>
                <div style="display:flex">
            <div class="playbutton" data-songid="Resources/01. Lone Digger.mp3">
                <span class="glyphicon glyphicon-play"></span>
            </div>
            <div class="trackblock">
                <label>Lone Digger</label><br>
                <label>Caravan Palace</label>
                <div class="trackbarcontrols">
                    <div class="trackbarview">
                        
                        <div class="trackbar-remaining"></div>
                        
                         <div class="trackbar-progress"></div>
                        <div class="diamond"></div>
                    </div>
                    <div class="tracktime">
                    <label >23:03</label>
                        </div>
                    </div>
            </div>
                    </div>
                </div>
            <div>
            <span class="trackart"></span>
            </div>
        </div> 
        </li>s
        <li class="playlistsong">
        <div class="playlisttrack">
            <div class="bar colorwhite"></div>
            <div class="trackbackground">
               <label class="postedby">Posted by: Esteban Eduardo Cerda Sepulveda</label>  <label class="postedby" style="float:right">17/02/2017</label>
                <div style="display:flex">
            <div class="playbutton" data-songid="Resources/whatstheuse.mp3">
                <span class="glyphicon glyphicon-play"></span>
            </div>
            <div class="trackblock">
                <label>What's the use of feeling blue</label><br>
                <label>Rebecca Sugar</label>
                <div class="trackbarcontrols">
                    <div class="trackbarview">
                        
                        <div class="trackbar-remaining"></div>
                        
                         <div class="trackbar-progress"></div>
                        <div class="diamond"></div>
                    </div>
                    <div class="tracktime">
                    <label >23:03</label>
                        </div>
                    </div>
            </div>
                    </div>
                </div>
            <div>
            <span class="trackart" style="background-image:url(Resources/blue.png);"></span>
            </div>
        </div> 
        </li>
    </ul>
    
    </div>

            <div class="songplayer">
 <div style="display:flex;margin-right:20px;padding-left:30px;">
              <span class="glyphicon glyphicon-step-backward playericon"></span>
                <span class="glyphicon glyphicon-play playericon"></span>
            <span class="glyphicon glyphicon-step-forward playericon"></span>
                 <span class="glyphicon glyphicon-repeat playericon" style="font-size:15px"></span>
     </div>
                                <div class="trackbarcontrols" style="margin-top:15px">
                    <div class="playerbarview" style="width:800px">
                        
                        <div class="player-track-remaining" style="width:800px"></div>
                        
                         <div class="player-track-progress" ></div>
                        <div class="diamond" id="diamondthumb"></div>
                    </div>
                                        </div>
            <span class= "songname">Lone Digger-</span>
             <span class= "songname">Caravan Palace</span>
                <span class="playerart"></span>
                
        </div>
    
    <script>
        
    var mousex =0;
    var mousedownn;
    var trackbarfocus;
        
        
    var lasttrack; 
    var playing=false;
    var songstatus; 
    var trackdown=false;
    var playerdown=false;
        
        $(document).ready(function(){
            $(".songplayer").hide();
                       });
        
        function pixelsToSeconds(pixels,maxpixel,maxtime){
            return pixels*maxtime/maxpixel;
            
        }
        
        
        function secondsToPixels(seconds,maxpixel,maxtime){
            return seconds*maxpixel/maxtime;
            
        }
        
 
        
    $(".trackbarview").on("mousedown",function(event){
        event.preventDefault();
        trackbarfocus=$(this);
        mousex=event.pageX-$(this).offset().left;
        mousedownn=true;
        trackdown=true;
        movebar();
        });
        
    $(".playerbarview").on("mousedown",function(event){
        event.preventDefault();
        mousex=event.pageX-$(this).offset().left;
        mousedownn=true;
        playerdown=true;
        moveplayerbar();
        });
        
function movediamond()
        {
         trackbarfocus.on("mousemove",function(e){
        mousex=event.pageX-$(this).offset().left;
        e.preventDefault(); 
        });
            
        trackbarfocus.children(".diamond").css({ left:mousex, position:'absolute'});    
    
       trackbarfocus.children(".trackbar-progress").css({ width:mousex, position:'absolute'}); 
        }
        
function moveplayerdiamond()
        {
        
        $(".playerbarview").on("mousemove",function(e){
        mousex=event.pageX-$(this).offset().left;
        e.preventDefault(); 
        });
            
        $("#diamondthumb").css({ left:mousex, position:'absolute'});    
    
        $(".player-track-progress").css({ width:mousex, position:'absolute'}); 
        }
        
function movebar(){
        if (!mousedownn) { return; }  
    if(mousedownn){
        timeout = (setInterval(movediamond ,10));
                    }   
}; 
        
function moveplayerbar(){
        if (!mousedownn) { return; }  
    if(mousedownn){
        timeout2 = (setInterval(moveplayerdiamond ,10));
                    }   
}; 
       
    $(document).on("mouseup",function(event){
        if(mousedownn){
            
        mousedownn=false;
            if(trackdown){
            
                trackdown=false;
        clearInterval(timeout);
        song.currentTime = pixelsToSeconds(mousex,trackbarfocus.width(),song.duration); 
            }
            if(playerdown){
                
                playerdown=false;
        
        clearInterval(timeout2);
            var barwidth= $(".player-track-remaining").width();        
        song.currentTime = pixelsToSeconds(mousex,barwidth,song.duration);
            }
        }
    });
     

    song = new Audio('Resources/01. Lone Digger.ogg','Resources/01. Lone Digger.mp3');
        
        if (song.canPlayType('audio/mpeg;')) {
  	song.type= 'audio/mpeg';
  	song.src= 'Resources/01. Lone Digger.mp3';
	} else {
  	song.type= 'audio/ogg';
  	song.src= 'Resources/01. Lone Digger.ogg';
	}
        
    $(".playbutton").on("click",function (e){     
        
        if(lasttrack&&songstatus==true)
            {
                       
                lasttrack.find("span").toggleClass("glyphicon-play glyphicon-pause");
                if($(this).is(lasttrack)&&songstatus==true)
                {
                    song.pause();
                    songstatus=false;
                    lasttrack=$(this);
             
                    return;
                }
                songstatus=true;
                lasttrack=$(this);
            }
        else{
            lasttrack=$(this);
            songstatus=true;
            $(".songplayer").show();
            }
           trackbarfocus=lasttrack.parent().find(".trackbarview");
        
            $(this).find("span").toggleClass("glyphicon-play glyphicon-pause");

        
            song.src=$(this).data("songid");
            e.preventDefault();
		    song.play();
        
            
        });
 
                 
                 
song.addEventListener("timeupdate",function (){
    if(!mousedownn){
    curtime = parseInt(song.currentTime, 10);
    
    bartime=secondsToPixels(curtime,trackbarfocus.width(),song.duration);
     
    trackbarfocus.children(".trackbar-progress").css({ width:bartime}); 
    
    trackbarfocus.children(".diamond").css({left:bartime}); 
        
    var barwidth= $(".player-track-remaining").width();
    bartime=secondsToPixels(curtime,barwidth,song.duration);
        
    $(".player-track-progress").css({ width:bartime}); 

     $("#diamondthumb").css({ left:bartime}); 
    }
});     

        
var leftInit = $(".subscriptions").offset().left;
var top = $('.subscriptions').offset().top - parseFloat($('.subscriptions').css('margin-top').replace(/auto/, 0));


$(window).scroll(function(event) {
    var x = 0 - $(this).scrollLeft();
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= top) {
        // if so, ad the fixed class
        $('.subscriptions').addClass('fixed');
    } else {
        // otherwise remove it
        $('.subscriptions').removeClass('fixed');
    }

    $(".subscriptions").offset({
        left: x + leftInit
    });

});
    </script>
</body>
</html>