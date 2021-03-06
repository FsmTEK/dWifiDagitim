<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deneme Konu</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<br>
<label> Seciniz: </label>
<Select id="secim" style="background-color: white; width: 250px; height: 30px;">
    <option value="1">Kurumsal</option>
    <option value="2">Şahıs</option>
</Select>
<br>
<br>
<div id="kurumsal" class="colors" style="display:none">
    <form method="post">
        Kurum Adı: <input type="text">
        Kişi Adı: <input type="text">
        Vergi No: <input type="text">
    </form>
</div>
<div id="sahis" class="colors" style="display:none">
    <form method="post">
        Adı:   <input type="text">
        Soyadı: <input type="text">
        T.c No: <input type="text">
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#kurumsal').hide();
        $('#sahis').hide();
        $('#secim').change(function () {
            var s=$(this).val();
            if (s==1){
                $('#kurumsal').show();
                $('#sahis').hide();
            }else{
                $('#sahis').show();
               $('#kurumsal').hide();
            }
        });
    });
</script>

</body>
</html>