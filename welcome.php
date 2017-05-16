<html>
<body>
  <?php

   echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


   define("Start","Learning PHP ");
   $x = "kshitija Suresh Karkar";
   $len = strlen($x);
   $count = str_word_count($x);
  
   $languages = array("PHP"=>"Entry level","C++"=>"Intermediate","JAVA"=>"Not much","Python"=>"Predictive Algorithms");
   rsort($languages);

   foreach ($languages as $x => $x_value)
  {
	echo "Key   ".$x ."   Value   ".$x_value."<br>" ;
  }

  echo "$len<br>".$count."<br>";
	echo Start;

   ?>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>



</body>
</html>
