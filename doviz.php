
<?php

$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Döviz Anlık</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            margin: 30px;
        }
    </style>
</head>
<body>


    <div class="container">

        <h1>Anlık Döviz Bilgisi</h1>

    <h5 class="btn btn-success">
        <i class="fas fa-dollar-sign"></i> Dolar Alış Fiyatı: <?php  echo $usd_buying  ?>
    </h5>
        <h5 class="btn btn-success">
            <i class="fas fa-dollar-sign"></i>   Dolar Satış Fiyatı: <?php echo $usd_selling ?>
        </h5>

        <h5 class="btn btn-danger">
            <i class="fas fa-euro-sign"></i> Euro Alış Fiyatı: <?php  echo $euro_buying  ?>
        </h5>

        <h5 class="btn btn-danger">
            <i class="fas fa-euro-sign"></i>    Euro Alış Fiyatı: <?php  echo $euro_selling  ?>
        </h5>

    </div>









    <script src="https://kit.fontawesome.com/0f4c9b9802.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
