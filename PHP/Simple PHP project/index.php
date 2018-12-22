<!DOCTYPE html>
<html>
  <head>
  <title>Adrian Szlegel</title>
  </head>
  <body>
    <h1>Adrian Szlegel - Week 5 Assignment</h1>
    <p>The SHA256 of "Adrian Szlegel" is</p>
    <p><?php print hash('sha256', 'Adrian Szlegel'); ?></p>
    <h3>ASCII Art:</h3>
    <pre>
      <?php
        $firstLine = "        *\n";
        $secondLine = "             * *\n";
        $thirdLine = "            *   *\n";
        $fourthLine = "           *******\n";
        $fifthLine = "          *       *\n";
        $sixthLine = "         *         *\n";
        $seventhLine = "        *           *\n";
        echo $firstLine.$secondLine.$thirdLine.$fourthLine.$fifthLine.$sixthLine.$seventhLine;
      ?>
    </pre>
    <a href="check.php">Click here to check the error setting</a></br>
    <a href="fail.php">Click here to cause a traceback</a>
  </body>
</html>
