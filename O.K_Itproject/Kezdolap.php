
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="IT projekt">
    <meta name="keywords" content="HTML, CSS, php,project,training">
    <meta name="author" content="Ozorák Krisztián">
    <title>Kezdőlap</title>
    <link rel="stylesheet" href="css/Kezdolap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
</head>
<body>

<nav>
    <input type="checkbox" id="res-menu">
    <label for="res-menu">
        <i class="fa fa-bars" id="sign-one"></i>
        <i class="fa fa-times" id="sign-two"></i>
    </label>
    <h1 id="logo"><span id="logobef">IT</span>Project</h1>
    <ul>
        <li><a href="Kezdolap.php">Kezdőlap</a></li>
        <li><a href="Edzesformak.html">Edzés formák</a></li>
        <li><a href="rolam.html">Rólam</a></li>
    </ul>
</nav>

<div class="welcome"><span id="full"><span id="udv"><span id="still">Üdvözöllek a</span> weboldalamon!</span></span></div>


<div class="fullLeft">
    <a href="#mksz">
        <div id="informacio">Miért készült a <span class="restext">weboldal?</span><br>
<img src="képek/why.jpg" alt="why?" id="whypic"></div>
    </a>
</div>
<div class="fullMiddle">
    <a href="#pir">
        <div id="informacio3">Pár információ <span class="restext">rólam</span><br>
        <img src="képek/About%20me.jpg" alt="aboutme" id="aboutme"></div>
    </a>
</div>
<div class="fullRight">
    <a href="#fullRightInfo">
        <div id="informacio2">A weboldal <span class="restext">témája</span><br>
<img src="képek/theme.jpg" alt="tema" id="themepic"></div>
    </a>

    <span id="mksz">.</span>
</div>



<div class="currentTime">
    <a href="#logo"><i class="fas fa-arrow-up"></i></a>
<div class="dayTime">
<?php
echo date("Y / m / d.") . "<br>";
echo date("H:i:s");

$napok=date("l");

if($napok == "Monday")
{
    echo" Hétfő";
}
else if($napok == "Tuesday")
{
    echo" Kedd";
}
else if($napok=="Wednesday")
{
    echo " Szerda";
}
else if($napok=="Thursday")
{
    echo " Csütörtök";
}
else if($napok =="Friday")
{
    echo " Péntek";
}
else if($napok == "Saturday")
{
    echo " Szombat";
}
else
{
    echo " Vasárnap";
}

?>
</div>
</div>

<div id="fullLeftInfo">
    <img src="képek/why.jpg" alt="tema" id="themepic2">
    <div id="why">A weboldal szemináriumi munkának készült,Internet Technológia tantárgyból
        hogy bevezessen bennünket a weboldal készités alapjaiban. Ezzel át tudjuk adni
        ,hogy mit sikerült elsajátitanunk a szemeszter folyamán és kicsit sajátmagunkat is
        bele tudjuk tenni a munkába.
    </div>
</div>
<div id="pir">.</div>

<div id="fullMiddleInfo">
    <img src="képek/About%20me.jpg" alt="rolam" id="aboutmepic2">
    <div id="why">Ozorák Krisztiánnak hívnak,20 éves vagyok,Topolyán születtem.
        Sinkovics József Műszaki Középiskolában fejeztem, mint számítógép-elektrotechnikus.
        Jelenleg a Szabadkai Műszaki Szakfőiskolán tanulok mint Műszaki Informatikus.
        Hobbi szinten videókat szerkesztek és sportolok.
    </div>
</div>


<div id="fullRightInfo">
    <img src="képek/theme.jpg" alt="theme" id="temapic2">
    <div id="why">A weboldalon megtalálható a két legismertebb edzési forma és az is,hogy melyik edzés kiknek ajánlatott.
    </div>
</div>

</body>
</html>
