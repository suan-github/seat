<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Member</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Zen+Kaku+Gothic+Antique:wght@300&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<form class="MemForm" action="seat.php" method="post">
    <fieldset>
        <legend id="formtitle"> New Member </legend>
        <label>
        title : <input id="title" type="text" name="title" required="required"><br>
        name : <input id="name" type="text" name="name" required="required"><br>
        </label>
        <input style="margin-top: 8px;"
               type="submit" value="新增">

<!--        --><?php //
//            while(true)
//                {
//                    echo "新增成功!"."</br>".
//                        "title : ". $_POST["title"]."</br>".
//                        "name : ". $_POST["name"];
//                }
//            ?>

    </fieldset>
</form>

</body>