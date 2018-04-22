<html>
  <body>
    <?php
      echo("Creating backup using bash. Please wait...");
    	 passthru("mysqldump -u admin it350 > test350.sql",$err);
       echo("<br><br>");
       echo("Back up created in the root of this folder.");
       //passthru("myverysecurepassword");
    ?>
    <br><br><a href="loggedin.php"><button type="loggedin">Back to Admin Site</button><br><br></a>
  </body>
</html>


<!--https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-6.2.4.tar.gz
