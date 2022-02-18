<!doctype html>

<!--用en中間文字部分也打到中文字可以嗎?-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nefer Seating List</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    
    <h1 class="txt">Nefer Seating List</h1>
    <div class="seat">
    <table>
        <?php
        header("Content-type:text/html;charset=utf-8");
        $PHP="PHP";
        $VUE="VUE";
        $QA="QA";
        $IOS="IOS";
        $Android="Android";
        $Infra="Infra";
        $UIUX="UIUX";
        $PM="PM";?>
            <tr>
                <!--1-->
                <td class="tg-0" colspan="2">主任<br/>Alan</td>
                <td class="tg-0" colspan="2">Ryan</td>
                <td class="tg-0" colspan="2">Milly<br/>Abby</td>
                <td class="tg-0" colspan="2">組長<br>Baron</td>
                <td class="tg-0" colspan="2">Thomas</td>
                <td class="tg-0" colspan="2">組長<br>Daniel</td>
                <td class="tg-0" colspan="5" rowspan="3">機房</td>
                <td class="tg-0" colspan="4" rowspan="3">倉庫</td>
                <td class="tg-0" rowspan="3">櫃子</td>
                <td class="tg-0" colspan="3" rowspan="3" style="border-bottom: none;">大門</td>
                <td class="tg-0" rowspan="2">櫃子</td>
                <td class="tg-0" rowspan="2">冰箱</td>
                <td class="tg-0" colspan="3">茶水間</td>
            </tr>
            <tr>
                <!--2-->
                <td class="tg-0" style="border-right: none;"></td>
                <td class="none-rl" colspan="9"></td>
                <td class="tg-0" style="border-bottom: none;border-right: none;border-left:none;"></td>
                <td class="tg-0" style="border-bottom: none;border-left:none;"></td>
                <td class="tg-0" style="border-right: none;border-bottom:none;"></td>
                <td class="tg-0" style="border-right:none;border-left: none;border-bottom: none;"></td>
                <td class="tg-0" style="border-bottom: none;border-left:none"></td>
            </tr>
            <tr>
                <!--3-->
                <td class="tg-0" colspan="2">Tim</td>
                <td class="tg-0" colspan="2">組長<br>Shaq</td>
                <td class="tg-0" colspan="2">Eddie</td>
                <td class="tg-0" colspan="2">Roy<br>Jasper</td>
                <td class="tg-0" colspan="2">Owen<br>Tom</td>
                <td class="tg-0" colspan="2" style="border-top:none;">iCare</td>
                <td class="tg-0" style="border-right: none;border-bottom: none;"></td>
                <td class="tg-0" style="border-right: none;border-bottom: none;border-left: none;"></td>
                <td class="tg-0" colspan="3" style="border-top: none;border-left: none;"></td>
            </tr>
            <tr>
                <!--4-->
                <td class="tg-0" style="border-right: none;border-bottom: none"></td>
                <td class="none-rl" colspan="4"></td>
                <td class="none-rlb"></td>
                <td class="none-rl" colspan="4"></td>
                <td class="none-rlb"></td>
                <td class="none-rl" colspan="4"></td>
                <td class="none-rlb"></td>
                <td class="none-rl" colspan="4"></td>
                <td class="none-rlb"></td>
                <td class="none-rl" colspan="2"></td>
                <td class="none-trl" colspan="2"></td>
                <td class="tg-0" style="border: none;"></td>
                <td class="tg-0" style="border-top: none;border-left: none;"></td>
                <td class="tg-0" colspan="3">吧檯</td>
            </tr>
            <tr>
                <!--5-->
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>Sam";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>Eric";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$VUE";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$QA<br>Allan";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$QA";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$IOS";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Android<br>組長<br>Hemly"?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Infra";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Infra";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"研發B";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="4" rowspan="8">休息區</td>
            </tr>
            <tr>
                <!--6-->
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--7-->
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>Kay";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>David";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$VUE<br>Ray";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PM<br>助理<br>Nikki";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$QA";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$IOS<br>Jenny";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Android<br>Willam"?></td>
                <td class="tg-0" colspan="2" rowspan="2">運維副理<br>Jack</td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Infra<br>Tim";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"研發B";?></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--8-->
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--9-->
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>Mia";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$VUE<br>Jason";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PM<br>助理<br>Sherry";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$UIUX<br>Jude";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$IOS<br>Tom";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$Android<br>Willy";?></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"研發B";?></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--10-->
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--11-->
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2">技術總監<br>Riven</td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PHP<br>Lu";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$VUE";?></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$PM<br>Winnie";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"$UIUX<br>Kiara";?></td>
                <td class="tg-0" colspan="2" rowspan="2">APP副理<br>Rico</td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2" rowspan="2"></td>
                <td class="tg-0" colspan="2" rowspan="2"><?PHP echo"研發B";?></td>
                <td class="none-tb"></td>
            </tr>
            <tr>
                <!--12-->
                <td class="none-t"></td>
                <td class="none-t"></td>
                <td class="none-t"></td>
                <td class="none-t"></td>
                <td class="none-t"></td>
                <td class="none-t"></td>
            </tr>
            <tr>
                <!--13-->
                <td class="tg-0" colspan="6" rowspan="4">總經理室<br><br>總經理<br>Luke</td>
                <td class="none-rb"></td>
                <td class="none-rl" colspan="6">管理部</td>
                <td class="none-rlb"></td>
                <td class="tg-0" colspan="2" rowspan="2" style="border-left: none;"></td>
                <td class="tg-0" colspan="10" rowspan="4">大會議室</td>
                <td class="tg-0" colspan="4" rowspan="4">小會議室</td>
            </tr>
            <tr>
                <!--14-->
                <td class="none-tb" rowspan="2"></td>
                <td class="tg-0" colspan="2" rowspan="2">經理<br>Kelly</td>
                <td class="tg-0" colspan="2">行政<br>Vicky</td>
                <td class="tg-0" colspan="2"></td>
                <td class="none-trb"></td>

            </tr>
            <tr>
                <!--15-->
                <td class="tg-0" colspan="2"><?PHP echo"人資<br>Yuna";?></td>
                <td class="tg-0" colspan="2"><?PHP echo"人資<br>Mira";?></td>
                <td class="none-tb"></td>
                <td class="tg-0" colspan="2">影印機</td>
            </tr>
            <tr>
                <!--16-->
                <td class="none-tr"></td>
                <td class="none-rl" colspan="6"></td>
                <td class="none-trl"></td>
                <td class="none-l" colspan="2"></td>
            </tr>

    </table>
    </div>
</body>
</html>