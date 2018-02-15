<!doctype html>
<html lang="en-US">

<head>
    <title>Colors</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
    <style>
        .color-box {
            height: 100px;
            border-radius: 5px;
        }
        
        .primary {
            background: #E25031;
        }
        
        .secondary {
            background: #DA8468;
        }
        
        .dark {
            background: #15171A;
        }
        
        .dark-secondary {
            background: #979798;
        }
        
        .light {
            background: #FBFBFB;
        }
        
        .light-secondary {
            background: ;
        }

    </style>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
    </header>
    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none bg-f1f">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6" style="height:100vh">
                    <img src="img/jdeyes_logo.jpg" class="img-responsive" style="margin:auto">
                </div>
                <div class="col-xs-6" style="height:100vh;background:url(img/blackbg.gif) repeat">
                    <div class="row m-tb-md">
                        <div class="col-xs-2">
                            <div class=" color-box primary"></div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class=" color-box secondary"></div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class=" color-box dark"></div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class=" color-box dark-secondary"></div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class=" color-box light"></div>
                        </div>
                        <div class="col-xs-2 ">
                            <div class=" color-box light-secondary"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <footer>
        <?php include '_partial/footer.php' ?>
    </footer>
    <?php include '_partial/footer-scripts.php' ?>
</body>

</html>
