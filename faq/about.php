<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/landio.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/axstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>Tentang Kami - Mobilan Indonesia</title>
</head>
<body>
<header>
	<h1>Tentang Kami - Mobilan Indonesia</h1>
</header>
<section id="topFAQ" class="body-wrapper">
	<h2 class="section-title">Tentang Mobilan </h2>
	<div align="center">
		<img src="../img/dashboard_icon/headericon-90-90.png" alt="Mobilan Indonesia" class="img-responsive">
	</div>
	<p class="section-text">Mobilan merupakan layanan yang digunakan untuk beriklan dengan MOBIL sebagai medianya. Jika anda ingin memperkenalkan brand atau event anda di suatu daerah, Mobilan merupakan pilihan yang bisa anda coba, karena brand atau event anda akan berkeliling kota di daerah yang anda tuju dengan mobil yang menjadi partner Mobilan.<br>
	Ada benefit tambahan jika anda beriklan di Mobilan :
	<ol class="section section-sub-1">
		<li>Brand atau event anda dapat dikenalkan lewat suara atau audio yang nanti dapat di putar di Mobil partner Mobilan (Mober) sehingga dapat diperkenalkan ke penumpang Mobil dari partner kami, karena partner kami pada umumnya adalah pengemudi taksi Online.</li>
	</ol>
	</p>

	<h1 align="center" style="line-height: 2em; border-top:#CCC 1px solid; padding-top: 2em; margin-top:2em;">Pertanyaan mengenai Mobilan Indonesia dapat dikirim melalui <br><br>
	<a class="btn btn-sm btn-success" href="mailto:admin@mobilan.id">admin@mobilan.id</a></h1>
</section> <!-- cd-faq -->

<!-- Footer
    ================================================== -->
<?php include('footer.php'); ?>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<script>
      // Smooth scrolling
      $(function() {
        $('a[href*="#"]:not([href="#"]):not([href="#collapsingNavbar"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      }); // Smooth scrolling
    </script>
</script>
</body>
</html>