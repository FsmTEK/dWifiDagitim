<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Ekranı Sayfası</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <scprit src="<?php echo base_url('elz/login.js');?>"></scprit>
    <link rel="stylesheet" href="<?php echo base_url('elz/giris.css');?>">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center asagi">
        <label style="color: white; font-size: xx-large; text-align: center; vertical-align: middle;" class="kalin">Hoşgeldiniz</label>
        </div>
        <div class="col-md-12">
            <div class="col-md-6 ortala">
                <button type="button" class="form-control" style="color: #bbf3c3; background-color: white;" data-toggle="dropdown">Kayıtlı Kullanıcı<span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li>
                        <form class="form" action="<?=base_url('ilk/giriskontrol'); ?>" method="post">
                            <input name="kadi" type="text" placeholder="Kullanıcı Adı">
                            <input name="sifre" type="password" placeholder="Şifre">
                            <button type="submit" id="login-button" class="btn btn-outline-info">Giriş</button>
                            <h5 style="color: black;"><?php echo @$hata; ?></h5>
                        </form>
                    </li>
                </ul>
            </div>
        <div class="col-md-12" id="buttons">
            <div class="btn-group btn-group-left">
                <div class="col">
                    <div class="facebook button">
                        <i class="icon">
                            <i class="fa fa-facebook">
                            </i>
                        </i>
                        <div class="slide">
                            <p>
                                facebook
                            </p>
                        </div>
                        <div class="fb-like" data-href="https://www.facebook.com/Developer.deneme-2141705205861651/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>                    </div>
                </div>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v3.1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="col">
                    <div class="twitter button">
                        <i class="icon">
                            <i class="fa fa-twitter">
                            </i>
                        </i>
                        <div class="slide">
                            <p>
                                twitter
                            </p>
                        </div>
<!--                        <a href="https://twitter.com/arzumutu2018/status/1039825897044553729?text=Hadi gir artik" class="twitter-share-button">-->
<!--                            Tweet-->
<!--                        </a>-->
<!--                        <a href="https://twitter.com/arzumutlu2018/status/1039825897044553729" class="twitter popup" data-show-count="false">Tweet</a>-->
                        <a href="https://twitter.com/arzumutlu2018/status/1039825897044553729" class="twitter-share-button orta" data-size="large" data-lang="tr" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script>
                            !function(d,s,id){
                                var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){
                                    js=d.createElement(s);
                                    js.id=id;
                                    js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                        </script>
                    </div>
                </div>
                <div class="col">
                    <div class="google button">
                        <i class="icon">
                            <i class="fa fa-instagram">
                            </i>
                        </i>
                        <div class="slide">
                            <p>
                                    google+
                            </p>
                        </div>
<!--                        <!-- Place this tag where you want the +1 button to render. -->
<!--                        <div class="g-plusone" data-size="large">-->
<!--                        </div>-->

<!--                        <div class="g-plusone" data-size="standart" data-href="https://plus.google.com/u/0/113596846715607788542/posts/ZzZkUGZrGSu"></div>-->

                        <!-- Bu etiketi, paylaş düğmesi adlı widget'ın oluşturulmasını istediğiniz yere ekleyin. -->
                        <div class="g-plusone" data-action="share" data-width="120" data-href="https://plus.google.com/u/0/113596846715607788542/posts/ZzZkUGZrGSu"></div>
                        <script src="https://apis.google.com/js/platform.js" async defer>
                        </script>
                        <script type="text/javascript">gapi.plus.go();</script>

                        <!-- Place this tag after the last +1 button tag. -->
<!--                        <script type="text/javascript">-->
<!--                            (function() {-->
<!--                                    var po = document.createElement('script');-->
<!--                                    po.type = 'text/javascript';-->
<!--                                    po.async = true;-->
<!--                                    po.src = 'https://apis.google.com/js/plusone.js';-->
<!--                                    var s = document.getElementsByTagName('script')[0];-->
<!--                                    s.parentNode.insertBefore(po, s);-->
<!--                                }-->
<!--                            )();-->
<!--                        </script>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>


</body>
</html>