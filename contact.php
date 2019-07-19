<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- style -->
    <link href="css/styleRes.css" rel="stylesheet" type="text/css"/>
    <link href="css/we.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-rtl.css" rel="stylesheet"/>

</head>

<body>

<div align="center">
    <!-- navbar --------------------------->

    <div class="head">
        <div class="header navbar-fixed-top">
            <div class="container">

                <ul class="list-inline">

                    <li class="pull-left">
                        <ul class="list-inline contact-icon">
                            <li style=" color: #fff;"><i class="fas fa-map-marker-alt social"></i>غزة -الرمال - برج
                                الشروق - الطابق الخامس
                            </li>
                        </ul>
                    </li>

                    <li class="pull-right">
                        <ul class="list-inline social-icon">
                            <li><a href="https://www.linkedin.com/feed/?trk=onboarding-landing" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/khateeb.group.since1984/" target="_blank"><i
                                            class="fa fa-facebook-square"></i></a></li>
                            <li><a href="https://twitter.com/Khateeb_Group?fbclid=IwAR0uD9q3k5KZvuuibg2lQB0V_X1eevysEBSjNroRyMXXrstREk-kWLKnu2E" target="_blank"><i class="fa fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="container">
                <nav class="navbar navbar-inverse navbar-fixed-top " style=" background-color: #0b166f; height: 75px;">
                    <div class="container " id="sec1">
                        <div class="navbar-header" style="float: left">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><img src="image/logo.png" class="img-responsive logo"></a>
                        </div>
                        <div class="navbar-collapse collapse" id="myNavbar" >
                            <ul class="nav navbar-nav navbar-right text-uppercase">
                                <li class="cool-link scrollToTop " id="index"><a href="index.html.html">الرئيسية </a>
                                </li>
                                <li class="cool-link  " id="weAre"><a href="weAre.html">عن الشركة</a></li>
                                <li class="cool-link "><a href="services.html">الخدمات</a></li>
                                <li class="cool-link "><a href="course.html">الدورات</a></li>
                                <li class="cool-link active" id="contact"><a href="contact.php">اتصل بنا</a></li>

                            </ul>
                        </div>
                    </div>

                </nav>
            </div>
        </div>
    </div>


    <!-- end navbar --------------------------->

    <!-- slider --------------------------->
    <div class="slider" style="margin-top: 100px">
        <img class="photo" src="image/contact.jpg">
    </div>

    <!-- end slider --------------------------->


    <!-- services --------------------------->
    <?php
    if (isset($_POST['send'])) {

        function SendEmail($NameS, $EmailS, $NameM, $EmailM, $Sub, $Body)
        {
            $Sub = "=?UTF-8?B?" . base64_encode('....' . $Sub) . "?=";
            $varHeader = "From: =?UTF-8?B?" . base64_encode($NameS) . "?=<$EmailS> \r\n";
            $varHeader .= "Return-Path: $EmailS\r\n";
            $Body = "<html><body>" . $Body . "</body></html>";
            return mail($EmailM, $Sub, $Body, $varHeader);
        }

        $emailTo = 'khateeb.group84@gmail.com';
        $name = $_POST['firstname'] . $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $country = $_POST['country'];
        $Message = "<table style=\"direction: rtl;width:100%;border:1px solid #eee;border-collapse: collapse;\">
    <thead style=\"font-size: 16px;line-height: 40px;background-color: #dddddd;text-align: center;\">
    <th colspan=\"2\">
        رسالة من صفحة اتصل بنا
    </th>
    </thead>
    <tr>
        <td style=\"margin:0;border: 1px solid #ddd;width: 150px;font-size: 16px;font-weight:700;line-height: 40px;background-color: #f8f8f8;padding-right:15px\">الإسم</td>
        <td style=\"margin:0;border: 1px solid #ddd;padding-right: 15px\">{$name}</td>
    </tr>
    <tr>
        <td style=\"margin:0;border: 1px solid #ddd;width: 150px;font-size: 16px;font-weight:700;line-height: 40px;background-color: #f8f8f8;padding-right:15px\">البريد الإلكتروني</td>
        <td style=\"margin:0;border: 1px solid #ddd;padding-right: 15px\">{$email}</td>
    </tr>
    <tr>
        <td style=\"margin:0;border: 1px solid #ddd;width: 150px;font-size: 16px;font-weight:700;line-height: 40px;background-color: #f8f8f8;padding-right:15px\">المدينة</td>
        <td style=\"margin:0;border: 1px solid #ddd;padding-right: 15px\">{$country}</td>
    </tr>
        
    <tr>
        <td style=\"margin:0;border: 1px solid #ddd;width: 150px;font-size: 16px;font-weight:700;line-height: 40px;background-color: #f8f8f8;padding-right:15px\">الرسالة</td>
        <td style=\"margin:0;border: 1px solid #ddd;padding-right: 15px\">{$subject}</td>
    </tr>
</table>";
        if ($Send = @SendEmail($name, $email, 'شركة الخطيب', $emailTo, 'شركة الخطيب', $Message)) {
            echo "<div class='alert alert-success'>تم إرسال الرسالة بنجاح</div>";
        } else {
            echo "<div class='alert alert-danger'>فشل الارسال</div>";
        }
    }
    ?>
    <div class="contactUs">
        <div class="container">

            <div class="row">
            <div class="col-sm-6" style="margin-bottom: 20px">
                <div class="formContact">
                    <form class="formCont" method="post" action="contact.php">
                        <label for="fname">الاسم الأول </label>
                        <input type="text" id="fname" name="firstname" style="margin-top: 20px;"
                               placeholder="ادخل اسمك الأول ..">

                        <label for="lname">الاسم الأخير</label>
                        <input type="text" id="lname" name="lastname" placeholder="ادخل اسمك الأخير ..">

                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" placeholder="ادخل البريد الإلكتروني .."  style="    width: 77%;height: 45px;margin-bottom: 12px;">

                        <label for="country">المدينة</label>
                        <select id="country" name="country" style="    margin-right: 31px">
                            <option value="وسط قطاع غزة">وسط قطاع غزة</option>
                            <option value="شمال غزة">شمال غزة</option>
                            <option value="جنوب غزة">جنوب غزة</option>

                        </select>

                        <textarea id="subject" name="subject"
                                  placeholder="نسعد بتواصلك معنا بامكانك كتابة رسالتك هنا ... "
                                  style="height:200px;  margin-top: 20px;  margin-right: 68px;"></textarea>

                        <input type="submit" name="send" value="ارسل">
                    </form>
                </div>

            </div>
            <div class="map col-sm-6 " >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425.1628118371913!2d34.44942018528595!3d31.5158508326396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f13a10dc81f%3A0x40009ded133031fa!2zMzHCsDMwJzU3LjAiTiAzNMKwMjYnNTYuOSJF!5e0!3m2!1sar!2s!4v1540835042883"
                        width="95%;" height="552px" frameborder="0" style="border:0" allowfullscreen></iframe>


            </div>
            </div>
        </div>

    </div>


    <!-- end feature --------------------------->

    <!-- footer --------------------------->
    <footer style=" " class="footer">
        <div class="col-sm-4 part1">
            <h3 class="text" style="    margin-right: -143px;">تواصل معنا : </h3>
            <ul class="social-icon" style="display: grid; list-style: none">

                <li><i class="fas fa-map-marker-alt social"></i></i> الرمال - برج الشروق الطابق الخامس</li>
                <li style="margin-right:-106px"><i class="fas fa-mobile-alt social"></i></i> 0594050783</li>
                <li style="margin-right:-117px"><i class="fa fa-phone social "></i> 245051313</li>

            </ul>

        </div>
        <div class="col-sm-4 part2">
            <img class="imgLogo" src="image/logo.png">
        </div>
        <div class="col-sm-4 part3">

            <h3 class="text">تابعنا على : </h3>
            <ul class=" social-icon" style="display: grid; ;  list-style: none;">
                <li><a href="https://www.linkedin.com/feed/?trk=onboarding-landing" target="_blank"><i class="fa fa-linkedin-square"> </i> linkedin</a></li>
                <li style="margin-right:10px"><a href="https://www.facebook.com/khateeb.group.since1984/" target="_blank"><i class="fa fa-facebook-square"></i>
                        facebook</a></li>
                <li><a href="https://twitter.com/Khateeb_Group?fbclid=IwAR0uD9q3k5KZvuuibg2lQB0V_X1eevysEBSjNroRyMXXrstREk-kWLKnu2E " target="_blank"><i class="fa fa-twitter-square"></i> Tweeter </a></li>
            </ul>


        </div>
    </footer>


    <!--  end footer --------------------------->


</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<
<script src="js/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    $(document).scroll(function () {
        if ($(this).scrollTop() > 150) {

            $('.navbar-inverse').css({"background": "#0b166f", "height": "75px"});
        } else {
            $('.navbar-inverse').css({"background": "0b166f"});
        }
    });
</script>



</body>
</html>
































