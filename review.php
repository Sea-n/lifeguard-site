<!DOCTYPE HTML>
<html lang="zh-TW">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>隊員心得 - 清水救生隊</title>
		<link rel="icon" type="image/png" href="/images/logo-192.jpg" sizes="192x192">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="keywords" content="清水救生隊, 泳訓班, 海訓, 溪訓, 紅十字會, 喵咪" />
		<meta name="description" content="新北市清水救生隊，擁有專業的教練團，以及充滿熱忱的助教們，是您成為救生員的好選擇。" />
    	<meta property="og:title" content="隊員心得" />
    	<meta property="og:site_name" content="清水救生隊" />
    	<meta property="og:description" content="新北市清水救生隊，擁有專業的教練團，以及充滿熱忱的助教們，是您成為救生員的好選擇。" />
    	<meta property="og:image" content="https://lifeguard.sean.taipei/images/logo.jpg" />
		<link rel="stylesheet" href="assets/css/solid-state.css" />
		<noscript><link rel="stylesheet" href="assets/css/solid-state-noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
				<h1><strong>清水救生隊</strong> 學員心得</h1>
				<nav>
					<ul>
						<li><a href="/" class="icon fa fa-comments">活動簡介</a></li>
						<li><a href="#classes" class="icon fa fa-info-circle">開班資訊</a></li>
					</ul>
				</nav>
			</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>隊員心得</h2>
							<p>經過一個月的洗禮，每個人都有留下了豐富的回憶</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

<?php
$list = [
	[
		"name" => "韋詠祥",
		"pic" => "sean",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2016 年 29 期學員"
	],
	[
		"name" => "韋詠欣",
		"pic" => "eva",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2018 年 33 期學員"
	],
	[
		"name" => "伊布",
		"pic" => "tmp1",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2049 年 42 期學員"
	],
	[
		"name" => "六尾",
		"pic" => "tmp4",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2049 年 42 期學員"
	],
	[
		"name" => "雷伊",
		"pic" => "tmp5",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2049 年 42 期學員"
	],
	[
		"name" => "Doge",
		"pic" => "tmp6",
		"text" => "Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim		  dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.",
		"footer" => "2049 年 42 期學員"
	],
];

$keys = array_keys($list);
shuffle($keys);

for ($seq = 1; $seq <= 6; $seq++) {
	$data = $list[$keys[$seq-1]];
?>
							<section id="review<?= $seq ?>" class="wrapper <?= $seq % 2 ? "alt" : "" ?> spotlight style<?= $seq ?>">
								<div class="inner">
									<a href="#" class="image"><img src="images/avatars/<?= $data['pic'] ?>.jpg" alt="<?= $data['name'] ?>" /></a>
									<div class="content">
										<h2 class="major"><?= $data['name'] ?></h2>
										<p><?= $data['text'] ?></p>
										<q><?= $data['footer'] ?></q>
									</div>
								</div>
							</section>
<?php
}
?>


							<section id="classes" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">開班資訊</h2>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3 class="major">救生訓練班</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">小小救生班</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3 class="major">成人初級班</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<h3 class="major">十式精進班</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>
									<ul class="actions">
										<li><a href="/" class="button">查看照片</a></li>
									</ul>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2>如何參與</h2>
							<p>經過救生班洗禮，成為隊上的一份子後，更有許多精彩活動等著您</p>
							<p>清水救生隊期待您的加入，歡迎直接來泳池詢問，或是透過以下管道與我們聯絡</p>

							<h2>立即加入清水大家庭</h2>
							<ul class="icons">
								<li><a target="_blank" href="https://t.me/SeanChannel" class="icon fab fa-telegram"> <span class="label">Telegram</span></a></li>
								<li><a target="_blank" href="https://fb.com/349426416046/" class="icon fab fa-facebook"> <span class="label">Facebook Page</span></a></li>
								<li><a target="_blank" href="https://fb.com/436696979716143" class="icon fa fa-users"> <span class="label">Facebook Group</span></a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/solid-state.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

	</body>
</html>
