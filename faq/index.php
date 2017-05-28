<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/landio.css">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ - Mobilan Indonesia</title>
</head>
<body>
<header>
	<h1>FAQ - Mobilan Indonesia</h1>
</header>
<section id="topFAQ" class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#dasar">Pengertian Dasar</a></li>
		<li><a href="#ketentuan">Ketentuan Umum</a></li>
		<li><a href="#paket">Paket</a></li>
		<li><a href="#lainnya">Lainnya</a></li>
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="dasar" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Pengertian Dasar</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Apa itu Mobilan Indonesia ?</a>
				<div class="cd-faq-content">
					<p>Mobilan Indonesia merupakan layanan car advertising  dengan system tracking yang memudahkan anda untuk beriklan dijalan dan berpotensi dilihat para pengguna jalan.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Apa itu Adser?</a>
				<div class="cd-faq-content">
					<p>Adser adalah sebutan bagi pengiklan yang beriklan di Mobilan Indonesia.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Apa itu Mober?</a>
				<div class="cd-faq-content">
					<p>Mober adalah singkatan dari Mobilan Partner, salah satunya adalah anda yang memiliki Mobil pribadi yang ingin mendapatkan tambahan penghasilan dapat bergabung dengan Mobilan Indonesia.</p>
				</div> <!-- cd-faq-content -->
			</li>

		</ul> <!-- cd-faq-group -->

		<ul id="ketentuan" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Ketentuan Umum</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Bagaimana cara bergabung menjadi Mober?</a>
				<div class="cd-faq-content">
					<p>Silahkan mendaftar menjadi Mober di link berikut ini.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Apakah syarat minimum menjadi Mober ?</a>
				<div class="cd-faq-content">
					<p>-Minimal menempuh jarak 40 km per hari
					<br>-Berdomisili di area Soloraya </p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Apakah harga layanan di Mobilan Indonesia terjangkau ?</a>
				<div class="cd-faq-content">
					<p>Sangat terjangkau, karena di Mobilan Indonesia memiliki paket bersama yang dapat menekan biaya beriklan untuk brand atau bisnis anda.</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul>

		<ul id="paket" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Paket</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Apakah paket bersama itu?</a>
				<div class="cd-faq-content">
					<p>Seperti yang telah dijelaskan diatas bahwa paket bersama dari Mobilan memberikan harga yang jauh lebih hemat untuk brand yang ingin beriklan bersama Mobilan. <br>Untuk info paket ini dapat menghubungi  atau WA <br> di No. <strong>0821 3394 0007</strong> </p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul>

		<ul id="lainnya" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Lainnya</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Apakah ada kontak yang bisa dihubungi jika ingin bertanya lebih detail mengenai Layanan dari Mobilan Indonesia ?</a>
				<div class="cd-faq-content">
					<p>Ada, silahkan dapat menghubungi atau WA ke 0821 3394 0007 <br>Bisa juga dating langsung ke kantor Mobilan Indonesia di Jl. Dr. Soepomo No 66, Surakarta</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Apakah Mobilan Indonesia membuka kesempatan kerjasama dengan organisasi, komunitas ,atau para startup?</a>
				<div class="cd-faq-content">
					<p>Mobilan Indonesia selalu terbuka mengenai kerjasama dengan organisasi, komunitas ataupun  para startup, sejauh hal tersebut memberikan dampak positif untuk kedua belah pihak dan masyarakat. <br> Jika ingin mengajak kerjasama dapat mengirimkan proposal kerjasama ke <a href="mailto:admin@mobilan.id">admin@mobilan.id</a> atau silahkan datang langsung ke kantor Mobilan di Jl. Dr Soepomo No.66, Surakarta untuk membicarakan mengenai kerjasama tersebut. Tim Mobilan Indonesia akan menyambut kedatangan anda. </p>
				</div> <!-- cd-faq-content -->
			</li>			
		</ul>
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
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