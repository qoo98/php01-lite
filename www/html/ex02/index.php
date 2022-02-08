<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<script>
  window.onload = function () {
  
  // textarea要素を取得
  var hoge = document.getElementById("textarea");
  // 表示用
  var obj = document.getElementsByClassName('badge-primary')[0];
  // 入力時に発生
  hoge.addEventListener('input', (event) => {
    //　入力された値を表示
    obj.textContent = hoge.value.replace(/{/g, " {\n  ").replace(/;/g, ";\n  ").replace(/}/g, "}\n\n").replace(/:/g, ": ");
    $_SESSION['before'] = hoge.value;

  });


  }
</script>
</head>

<body>

  <form action="index.php" method="get">
    <p>変換前のコード</p>
    <textarea name="opinion" cols="50" class="form-control" rows="5" id="textarea">
      <?php echo($_SESSION['before']); ?>
    </textarea>
  </form>






    <p>変換された文字列</p>
<textarea name="opinion" cols="50" rows="5" class="badge badge-primary">

</textarea>

</body>
</html>



