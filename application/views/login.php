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
        <label style="font-size: xx-large; text-align: center; vertical-align: middle;" class="kalin">Hoşgeldiniz</label>
        </div>
        <div class="col-md-12">
            <div class="col-md-6 ortala">
                <button type="button" class="form-control">Test</button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="col-md-4">
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
                        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Freference%2Fplugins%2Flike&send=false&layout=button_count&width=80&show_faces=false&font&colorscheme=light&action=like&height=20&appId=568581339861351" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:20px;" allowTransparency="true">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4">
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
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="mariuCSS">
                            Tweet
                        </a>
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
                <div class="col-md-4">
                    <div class="google button">
                        <i class="icon">
                            <i class="fa fa-google-plus">
                            </i>
                        </i>
                        <div class="slide">
                            <p>
                                google+
                            </p>
                        </div>
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium">
                        </div>

                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                            (function() {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/plusone.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                }
                            )();
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>