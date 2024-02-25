<!DOCTYPE html>
<html lang="en">

<head>
	<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
	<link rel="stylesheet" href="style.min.css">
</head>


<body>
  <header>
		<?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
	</header>

  <main>
    <noscript>
      <b>Warning: JavaScript had to be enabled.</b>
      <br><br>
    </noscript>

    <div id="center">
      <div class="text">This browser appears to be</div>
      <div class="text" id="browsertext"></div>
      <div class="wrapper">
        <div class="browser chrome"></div>
        <div class="browser edge"></div>
        <div class="browser firefox"></div>
        <div class="browser msie"></div>
        <div class="browser opera"></div>
        <div class="browser safari"></div>
      </div>
      <details class="agent">
        <summary class="agent">more infos</summary>
        <p class="agent" id="agent"></p>
      </details>
    </div>
  </main>

  <script src="script.min.js"></script>
</body>

</html>
