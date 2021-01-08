<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stories</title>
<link rel="stylesheet" a href="../stylesheet/main.css">
<link rel="icon" a href="../img/logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2family=Lobster&family=Roboto:wght@300&display=swap"rel="stylesheet">
<!------video pop up------------------->
<link rel="stylesheet" href="../css/modal-video.min.css">
<!------swiper links--------------->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<?php include '../nav.php';?>	
<div class="top-content-stories">
	<h1>We rise by lifting others</h1>
		</div>
	</div>

<div class="stories">
<div class="swiper-container">
	<h2>Afrikanske historier</h2>
    <div class="swiper-wrapper">
	
      <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad1.jpg" alt="Roger Kongolo"></div></div>
	  <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad3.jpg" alt="Beatirce Kongolo"></div></div>
	  <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad4.jpg" alt="Beatirce Kongolo"></div></div><div class="swiper-slide"><div class="js-video-button" data-video-id='Yu3A0r0dPnY'><img src="../img/mad5.jpg" alt="Beatirce Kongolo"></div></div>
		<div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad6.jpg" alt="Beatirce Kongolo"></div></div>
		<div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/_DSC0036.jpg" alt="Beatirce Kongolo"></div></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>

  </div>

		<div class="swiper-container">
	<h2>Asiatiske historier</h2>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad1.jpg" alt="Roger Kongolo"></div>	</div>
	  <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad3.jpg" alt="Beatirce Kongolo"></div></div>
	  <div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad4.jpg" alt="Beatirce Kongolo"></div></div><div class="swiper-slide"><div class="js-video-button" data-video-id='Yu3A0r0dPnY'><img src="../img/mad5.jpg" alt="Beatirce Kongolo"></div></div>
		<div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/mad6.jpg" alt="Beatirce Kongolo"></div></div>
		<div class="swiper-slide"><div class="js-video-button" data-video-id='nCuuarIqnpk'><img src="../img/_DSC0036.jpg" alt="Beatirce Kongolo"></div></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>

  </div>
</div>
	
  <script src="../package/swiper-bundle.min.js"></script>

  
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 3,
	  slidesPerGroup: 2,
      navigation: {
        nextEl: '.swiper-button-next',	
		prevEl: '.swiper-button-prev',
      },
    });
  </script> 
	<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
	<script src="../js/jquery-modal-video.min.js"></script>
	<script>
		$(".js-video-button").modalVideo({
			youtube:{
				controls:0,
				nocookie: true
			}
		});
	</script>
</body>
</html>