<!doctype html>
<html lang="en-US">

<head>
    <title>Contact Us - JD Eyes Entertainment</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
    </header>
    <div class="clearfix"></div>
    <section id="section-page-header" class="container-fluid p-lr-none">
        <div class="container">
            <div class="page-title m-t-xxl text-center">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="contact-area p-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 p-none">
                    <div class="contact-form-box">
                        <h4>Get In Touch</h4>
                        <form>
                            <div class="sb-form-input">
                                <p>Name</p>
                                <input class="contact-field" type="text" placeholder="" name="name" onkeypress="return keycheckval(event);" required>
                            </div>
                            <div class="sb-form-input">
                                <p>E-mail</p>
                                <input class="contact-field" type="email" placeholder="" name="email" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Phone</p>
                                <input class="contact-field" type="text" placeholder="" name="phone" id="mobile" onkeypress="return isNumber(event);" onchange="return checkmobile();" maxlength="10" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Query</p>
                                <textarea rows="3" class="contact-field" type="text" placeholder="" name="query" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-jd-default">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 p-none address-box-outer">
                    <div class="address-box">
                        <table>
                            <tr>
                                <td width="30px"><i class="fa fa-home"></i></td>
                                <td>
                                    <p>38 Woodburn Square,<br>IM1 4DD London,<br>UK - 12345</p>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-envelope"></i></td>
                                <td>
                                    <p>abc@qwertyui.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-phone"></i></td>
                                <td>
                                    <p>9876543210</p>
                                </td>
                            </tr>
                        </table>
                        <div class="social-box m-t-50">
                            <ul>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-youtube fa-2x"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram fa-2x"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 p-none">
                    <div class="address-map p-none">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.051502899235!2d72.91070231483754!3d19.061473057382443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c60e135a8a1b%3A0xbc6bed63cf20447c!2sQuantspire!5e0!3m2!1sen!2sin!4v1511173295421" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <?php include '_partial/footer.php' ?>
    </footer>
    <?php include '_partial/footer-scripts.php' ?>
    <script>
        $(document).ready(function() {
            $("#contact").addClass("menu-active");
        });

    </script>
</body>

</html>
