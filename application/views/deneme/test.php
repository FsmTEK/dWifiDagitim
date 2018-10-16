<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deneme Konu</title>
<style></style>

</head>
<body>

    <select name="test" class="form" style="background-color: white; width: 200px; height: 20px;">
        <option id="1" value="kurumsal" name="kurum"> Kurumsal </option>
        <option id="2" value="sahis" name="sahis"> Şahıs </option>
    </select>
    <br>
    <br>
    <br>

<div>
    <form action="" method="post">
        Adı:   <input type="text">
        Soyadı:<input type="text">
        T.c No:<input type="text">
    </form>
</div>

    <br>
    <br>
    <br>

<div>
    <form action="" method="post">
        Kurum Adı:<input type="text">
        Kişi Adı: <input type="text">
        Vergi No: <input type="text">
    </form>
</div>
    <script>
    $(document).ready(function(){
    $(".form").click(function(){
    $("div").toggle();
    });
    });
    </script>

</body>
</html>