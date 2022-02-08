<?php
session_start();
$_SESSION['opinion'] = $_POST['opinion'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form action="index.php" method="post">
    <p>変換したい文字列(制限値：1042byte)</p>
    <p><textarea name="opinion" cols="50" rows="5">
<?php echo($_SESSION['opinion']); ?>
</textarea></p>
    <p><input type="submit" name="submitBtn" value="　⬇変換する⬇　"></p>
  </form>

<?php
$str = $_POST['opinion'];
$STR = strtoupper($str);
?>


    <p>変換された文字列</p>
    <p><textarea name="opinion" cols="50" rows="5">
<?php
if(strlen($str) > 1024){
    echo "制限値オーバー";
}else{
echo $STR;
    }

?>
</textarea></p>

</body>
</html>


