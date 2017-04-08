<?php
?>
<html>
  <head>
    <script src = "basicjs.js"></script>
    <title>Hello</title></head>
<body>Hello, Again
  <button type = "button" onclick="lowKeyAddBtnFunc()">Click Me</button>
</body>
</html> <?
echo "hello"; ?>
<p> Please enter <b>five</b> keywords with the lowest priority:<br /></p>
<div id = "lowKeyDiv">
  <form action="lowKeyForm.php" method = "post">
    <input type = "text" name = "lowKey1"><br /><br />
    <input type = "text" name = "lowKey2"><br /><br />
    <input type = "text" name = "lowKey3"><br /><br />
    <input type = "text" name = "lowKey4"><br /><br />

    <input type = "submit" value = "Submit">
  </form>
</div>

<p> Please enter <b>five</b> keywords with medium priority:<br /></p>
<div id = "mediumKeyDiv">
  <form action = "mediumKeyForm.php" method = "POST">
    <input type = "text" name = "mediumKey1"><br /><br />
    <input type = "text" name = "mediumKey2"><br /><br />
    <input type = "text" name = "mediumKey3"><br /><br />
    <input type = "text" name = "mediumKey4"><br /><br />

    <input type = "submit" value = "Submit">
  </form>
<p> Please enter <b>five</b> keywords with the highest priority:<br /></p>
<div id = "highKeyDiv">
  <form action = "highKeyForm.php" method = "POST">
      <input type = "text" name = "highKey1"><br /><br />
      <input type = "text" name = "highKey2"><br /><br />
      <input type = "text" name = "highKey3"><br /><br />
      <input type = "text" name = "highKey4"><br /><br />

      <input type = "submit" value = "Submit">
  </form>
</div>
<?

?>
