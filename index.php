<?php 
// include './data.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    <?php include 'style.css';?>
    </style>
    <title>Tesseract 8| Home</title>    
</head>
<body>
    <div id="fixer">
    <section id="sidebar" class="first"> 
        <div id="inSidebar">
            <div id="blurLayout">
                <div class="logo">
                    <figure>
                        <img src="logo.png" alt="tesseract 8.0" width="99">
                    </figure>
                    <!-- <hamberber bars> -->
                    <div class="capative l-hide" id="switchCon" onclick="myswitch();">
                        <div class="bars"></div>
                        <div class="bars"></div>
                        <div class="bars"></div>
                    </div>
                </div>
                <!-- 000000000 -->
                <!-- links -->
                <div class="link con" id="linkCon">
                    <div class="link item div active" onclick="scrollerFunction('mainBG',this)">
                        <div class="conted">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="32px" height="32px" fill-rule="nonzero"><g fill="#5a85fc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M16,2.59375l-0.71875,0.6875l-13,13l1.4375,1.4375l1.28125,-1.28125v11.5625h9v-10h4v10h9v-11.5625l1.28125,1.28125l1.4375,-1.4375l-13,-13zM16,5.4375l9,9v11.5625h-5v-10h-8v10h-5v-11.5625z"></path></g></g></svg>
                            <span>Home</span>
                        </div>
                    </div>
                    <div class="link item div" onclick="scrollerFunction('edm',this)">
                        <div class="conted">
                            <img src="edm.png"/>
                            <span>EDM</span>
                        </div>
                    </div>
                    <div class="link item div" onclick="scrollerFunction('gallery',this)">
                        <div class="conted"><img src="gal.png"/><span>Gallery</span></div>
                    </div>
                    <div class="link item div" onclick="scrollerFunction('event',this)">
                        <div class="conted"><img src="event.png"/><span>Event</span></div>
                    </div>
                    <div class="link item div" onclick="scrollerFunction('shed',this)">
                        <div class="conted"><img src="shed.png"/><span>Schedule</span></div>
                    </div>
                    <div class="link item div" onclick="scrollerFunction('about',this)">
                        <div class="conted"><img src="about.png"/><span>About</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="content" class="my-scroller">
        <section id="mainBG" data-key="0">
            <img src="mainBG_hero.png"/>
            <div class="firstTextBox">
                <div style="heighgt:100%"><img src="logo.png" id="justforview" style="height:150px;object-fit:cover; margin-right:20px;"></div>
                <div class="left" id="mainLeft">
                    <h2>Explore the</h2>
                    <h1 class="story-indicator">Tesseract</h1>
                </div>
                <div class="right" id="mainRight">
                    <p>The annual Science and Technical Fest of PDEU</p>
                </div>
            </div>
        </section>
        <section id="second" data-key="0">
            <div class="container">
                <h1 class="title gold">Great start of 2023</h1>
                <p class="text">Tesseract, the annual Science and Technical Fest of PDEU, is one of Gujarat's biggest technical college fests. Tesseract provides a platform for tech nerds from colleges such as Pandit Deendayal Energy University and many others to interact, share and celebrate aspirations, creativity, and innovations. It attracts over 6,000 people each year and gives all the students who attend a platform to network and learn about cutting-edge developments in the areas of science and technology.</p>
            </div>
        </section>

        <!-- edm -->
        <section id="edm" data-key="1">
            <div class="mix title">EDM</div>
        </section>
        <!-- gallery -->
        <section id="gallery" data-key="2">
            <div class="green title"> Gallery Room</div>
            <p class="text capitalize">click botton to Load gallery</p>
            <div id="galleryBinder">
                <div class="btn myBtnDEF" onclick="loading();">Load</div>
                <p class="text" id="toast"> only after clicking in load images will be shown, this happens to save internet and fast loading...</p>
                <div id="galleryChange">
                </div>
            </div>
        </section>
        <section id="event" data-key="3">
        <div class="gold title"> Events </div>
        </section>
        <section id="shed" data-key="4">
        <div class="green title"> Scheduls </div>
        </section>
        <section id="about" data-key="5">
        <div class="gold title"> About </div>
        </section>
    </main>
    </div>
    <script src="jquery-3.6.0.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous"></script> -->
    <script>
        var firstTimeLoad = true;
        //navigation functions
        function scrollerFunction(e,elm){
            document.getElementById(e).scrollIntoView({ behavior: 'smooth' });
            if(window.innerWidth < 768){
                myswitch();
            }
            $('.item').removeClass('active');
            elm.classList.add('active');
        }
        // // event handler for scroll behaviour handler
        let mainNavLinks = document.querySelectorAll(".link.item.div");
        let mainSections = document.querySelectorAll("main section");
        function changer(i){
            $('.item').removeClass('active');
            mainNavLinks[i].classList.add("active");
        }
       // document.getElementById("content").addEventListener("scroll", event => {
        //    let fromTop = window.scrollY;
                /*if($("#second").is(":visible")) {changer(0);
                }else*/
                // if($("#about").is(":visible")) {changer(5);
                 //}else if($("#shed").is(":visible")) {changer(4);
                 //}else if($("#event").is(":visible")) {changer(3);
                 //}else if($("#gallery").is(":visible")) {changer(2);
                //}else if($("#edm").is(":visible")) {changer(1);
                //}else if($("#mainBG").is(":visible")) {changer(0);
        //        }
    //});
        $.fn.isInViewport = function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();

            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            return elementBottom > viewportTop && elementTop < viewportBottom;
        };
        $("#content").scroll(function() {
            if ($('#about').isInViewport()) {changer(5);
            }else if ($('#shed').isInViewport()) {changer(4);
            }else if ($('#event').isInViewport()) {changer(3);
            }else if ($('#gallery').isInViewport()) {changer(2);
            }else if ($('#edm').isInViewport()) {changer(1);
            }else if ($('#second').isInViewport()) {changer(0);
            }else if ($('#mainBG').isInViewport()) {changer(0);
            }
        });
        let switchcase = false;
        function myswitch(){
            if(switchcase){
                //closing
                document.getElementById('switchCon').classList.remove('on');
                document.getElementById('linkCon').classList.remove('up')
                document.getElementById('content').style.zIndex = 2;
                switchcase = !switchcase;
            }else{
                //opening
                document.getElementById('switchCon').classList.add('on');
                document.getElementById('linkCon').classList.add('up');
                switchcase = !switchcase;
                document.getElementById('content').style.zIndex = -1;
            }
        }
        // scrolling effect
        var frBox = document.getElementById("content");
        document.getElementById('justforview').style.display = 'block';
        document.getElementById("mainRight").style.marginLeft = "50px";
        // frBox.style.position = "fixed";
        frBox.onscroll = function() {myFunction(frBox)};
        function myFunction(elem) {
            let num = elem.scrollTop;
            var h = window.innerHeight;
            let powerPLus = frBox.offsetHeight*0.05;
            let limit = frBox.offsetHeight*0.6;
            var multiplyer = (num*1.258) / limit;
            if (num > 3 && multiplyer < 0.7) {
                document.getElementById('justforview').classList.remove("l-hide");//= 'block';
                document.getElementById("sidebar").classList.add("first");
                document.getElementById("mainRight").style.marginLeft =  (powerPLus + (limit * multiplyer) )+ "px";
                if(window.innerWidth < 790 && multiplyer < 0.54){
                    document.getElementById("mainLeft").style.transform =  "translateY("+ (limit * multiplyer)+ "px)";
                    document.getElementById("mainRight").style.transform =  "translateY("+ ( (limit * multiplyer)*(-1) + 40)+ "px)";
                }
            }else if(multiplyer >=0.71){
                document.getElementById("sidebar").classList.remove("first");
                document.getElementById('justforview').classList.add("l-hide");// = 'none';
            }        
        }

        ///lazy loading
  var lazyloadImages = document.querySelectorAll("img.lazy");       
    
    function loading() {
        if(firstTimeLoad){
            firstTimeLoad = false;
            let $data = [  
                "https://drive.google.com/uc?id=1mOFSx5kTeAkv5dESmJE-B5j-RQQbVU6v",
                "https://drive.google.com/uc?id=1XwSEDvfS6B93CJvWGC0UPcdwTr0Mfe4h",
                "https://drive.google.com/uc?id=1XDmjWJOSPnvcAyNW_0M6icjR3ulZz2gW",
                "https://drive.google.com/uc?id=1NM-dV4j-ateLsTQMZYqxZkBWde39lKx8",
                "https://drive.google.com/uc?id=1NPXQzH2eRiUmm18vFpa57k2srkANPCxC",
                "https://drive.google.com/uc?id=1dB-b18sjj-r48_lDjNt7sSSepfW3FvNP",
                "https://drive.google.com/uc?id=1KcAIlTcUuM6gb4O-QeOgVzQeu3xlyNgk",
                "https://drive.google.com/uc?id=1nNVq5Ed5AeVdhRM81yZmDdfaf1MIPeIm",
                "https://drive.google.com/uc?id=1nqNLujY6AIj-FXbw68YqsCVMcY3S8Yr8",
                "https://drive.google.com/uc?id=10TEcs-V2NTDcZci0POcz8WyuNzDCYssE",
                "https://drive.google.com/uc?id=11yEP8YUS0rDGY5Wd94_LHK3luAQSK0GL"
            ];
            var inserHtml = "";
            var divider = 1;
            if(window.innerWidth < 790){
                divider = 3;
            }else{
                divider = 4;
            }
            for(i=0;i<$data.length;i++){
                if(i%divider === 0){
                    inserHtml += "<div class=\"myRows\">";
                }
                inserHtml += "<div class=\"myCols\">";
                inserHtml += '<img loading="lazy" class="lazy" src="'+$data[i]+'" />';
                inserHtml += "</div>";
                if(i%divider == (divider - 1)){
                    inserHtml += "</div>";
                }
            }
            document.getElementById('galleryChange').innerHTML = inserHtml;
            document.getElementById('toast').innerText = "please wait we are Loading....";            
            setTimeout(() => {
                document.getElementById('toast').style.display = "none";            
            }, 2000);
            var scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function(img) {
                if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                }
            });
        }else{
            alert("already added")
        }
    }



    </script>
</body>
</html>