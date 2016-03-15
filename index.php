<?php
echo<<<EOF
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="it" lang="it">
<head>
    <title>API AltBeacon - Documentazione</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="API AltBeacon - Documentazione" />
    <meta name="author" content="Federico Tavella" />
    <meta name="language" content="italian it" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body>
<form action="validate.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" type="password">
<input name="submit" type="submit" value=" Login ">
</form>
</body>
EOF;
?>