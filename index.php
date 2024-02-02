<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ricerca</title>
    <link rel="stylesheet" href="style.css">
    <script src="suggerimenti.js"></script>
</head>

<body>
<form action="Server.php" method="POST">
    <input id="ricerca" type="text" name="ricerca" placeholder="Parola da ricercare..." onkeyup="ShowSuggerimenti(this.value)">
</form>

<div class="suggerimenti-container">
    <ul id="suggerimenti"></ul>
</div>
</body>

</html>

