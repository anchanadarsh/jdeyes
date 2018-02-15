<!DOCTYPE html>
<html>

<head>
    <style>
        .box-full {
            position: relative;
            width: 150px;
            margin-left: 160px;
            margin-top: 160px;
        }
        
        .top-trans-strip {
            position: absolute;
            top: -10px;
            z-index:3;
            width: 100%;
            height: 10px;
        }
        
        .right-trans-strip {
            position: absolute;
            right: -10px;
            z-index:3;
            height: 100%;
            width: 10px;
        }
        
        .bottom-trans-strip {
            position: absolute;
            bottom: -10px;
            z-index:3;
            width: 100%;
            height: 10px;
        }
        
        .left-trans-strip {
            position: absolute;
            left: -10px;
            z-index:3;
            height: 100%;
            width: 10px;
        }
        
        .box {
            width: 150px;
            height: 150px;
            background: red;
        }
        
        .box-overlay {
            width: 100%;
            height: 100%;
            background: yellow;
            position: absolute;
            left: -100%;
            top: 0px;
            transition: all 0.3s linear;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        //        $(document).ready(function() {
        //            var getwitdhbox = $(".box").width();
        //            var getheightbox = $(".box").height();
        //            var getxy = $(".box").offset();
        //            $(".box-full").mousemove(function(event) {
        //                var getleft = event.pageX - getxy.left;
        //                var gettop = event.pageY - getxy.top;
        //                var getright = getwitdhbox - (event.pageX - getxy.left);
        //                var getbottom = getheightbox - (event.pageY - getxy.top);
        //                $(".left").text(getleft);
        //                $(".top").text(gettop);
        //                $(".bottom").text(getbottom);
        //                $(".right").text(getright);
        //                if (getleft > 0) {
        //                    $(".box-overlay").css("transform", "translateX(150px)");
        //                } else if (getright < 2) {
        //                    $(".box-overlay").css("transform", "translateX(300px)");
        //                }
        //            });
        //            $(".box-full").mousemove(function(event) {
        //                var getleft = event.pageX - getxy.left;
        //                var gettop = event.pageY - getxy.top;
        //                var getright = getwitdhbox - (event.pageX - getxy.left);
        //                var getbottom = getheightbox - (event.pageY - getxy.top);
        //                $(".left").text(getleft);
        //                $(".top").text(gettop);
        //                $(".bottom").text(getbottom);
        //                $(".right").text(getright);
        //            });
        //        });

    </script>
    <script>
        $(document).ready(function() {
            $(".box-full").prepend("<div class='left-trans-strip'></div><div class='top-trans-strip'></div><div class='right-trans-strip'></div><div class='bottom-trans-strip'></div>");
            $(".left-trans-strip").hover(function(){
                $(".box-overlay").css("left","0");
            });
        });

    </script>
</head>

<body>
    <div class="box-full">
        <div class="box"></div>
        <div class="box-overlay"></div>
    </div>

    <p>left : <span class="left"></span></p>
    <p>right : <span class="right"></span></p>
    <p>top : <span class="top"></span></p>
    <p>bottom : <span class="bottom"></span></p>

</body>

</html>
