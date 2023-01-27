<!DOCTYPE html>
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
                    <div class="link item div active">
                        <div class="conted">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="32px" height="32px" fill-rule="nonzero"><g fill="#5a85fc" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M16,2.59375l-0.71875,0.6875l-13,13l1.4375,1.4375l1.28125,-1.28125v11.5625h9v-10h4v10h9v-11.5625l1.28125,1.28125l1.4375,-1.4375l-13,-13zM16,5.4375l9,9v11.5625h-5v-10h-8v10h-5v-11.5625z"></path></g></g></svg>
                            <span>Home</span>
                        </div>
                    </div>
                    <div class="link item div">
                        <div class="conted">
                            <img src="edm.png"/>
                            <span>EDM</span>
                        </div>
                    </div>
                    <div class="link item div">
                        <div class="conted"><img src="gal.png"/><span>Gallery</span></div>
                    </div>
                    <div class="link item div">
                        <div class="conted"><img src="event.png"/><span>Event</span></div>
                    </div>
                    <div class="link item div">
                        <div class="conted"><img src="shed.png"/><span>Schedule</span></div>
                    </div>
                    <div class="link item div">
                        <div class="conted"><img src="about.png"/><span>About</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="content" class="my-scroller">
        <section id="mainBG">
            <img src="mainBG_hero.png"/>
            <div class="firstTextBox">
                <div style="heighgt:100%"><img src="logo.png" id="justforview" style="height:150px;object-fit:cover; margin-right:20px;"></div>
                <div class="left">
                    <h2>Explore the</h2>
                    <h1 class="story-indicator">Tesseract</h1>
                </div>
                <div class="right" id="mainRight">
                    <p>The annual Science and Technical Fest of PDEU</p>
                </div>
            </div>
        </section>
        <section id="second">
            <div class="container">
                <h1>Great start of 2023</h1>
                <p>Tesseract, the annual Science and Technical Fest of PDEU, is one of Gujarat's biggest technical college fests. Tesseract provides a platform for tech nerds from colleges such as Pandit Deendayal Energy University and many others to interact, share and celebrate aspirations, creativity, and innovations. It attracts over 6,000 people each year and gives all the students who attend a platform to network and learn about cutting-edge developments in the areas of science and technology.</p>
            </div>
        </section>
    </main>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous"></script> -->
    <script>;
        $('.item').click(function(e) {

            $('.item').removeClass('active');

            var $this = $(this);
            if (!$this.hasClass('active')) {
                $this.addClass('active');
            }
            //e.preventDefault();
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
                document.getElementById('justforview').style.display = 'block';
                document.getElementById("sidebar").classList.add("first");
                document.getElementById("mainRight").style.marginLeft =  (powerPLus + (limit * multiplyer) )+ "px";
            }else if(multiplyer >=0.71){
                document.getElementById("sidebar").classList.remove("first");
                document.getElementById('justforview').style.display = 'none';
            }        
        }
    </script>
</body>
</html>