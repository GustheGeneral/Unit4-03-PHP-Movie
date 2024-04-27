<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--Meta data-->
  <meta charset="UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>Age Checker</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>

<!--PHP Code for Body-->
<body>
  <h1><i>Age Checker</i></h1>
  <h3><b><u>MOVIE BACKGROUND CHECKER</u></b></h3>
  <img src="./images/age.png" alt="guess" style="float: right; margin: 0 10px;">
  <p><b><u>Enter your age:</u></b></p>

  <!--Gets result from result.php-->
  <form action="result.php" method="post" target = "results">
    <label for="age"><u><b>Age:</b></u></label>
    <input type="number" id="age" name="age" placeholder="Your Age..">
    <br><br>
    <button type="submit">Submit</button>
  </form>

  <!--Targets output and displays in iframe below the submit button-->
<p id="output"></p>
  <iframe name="results" id="results" src="result.php"></iframe>
</body>
</html>
