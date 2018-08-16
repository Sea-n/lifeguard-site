<!DOCTYPE HTML>
<html lang="zh-TW">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>活動簡介 - 清水救生隊</title>
		<link rel="icon" type="image/png" href="/images/logo-192.jpg" sizes="192x192">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="keywords" content="清水救生隊, 泳訓班, 海訓, 溪訓, 紅十字會, 喵咪" />
		<meta name="description" content="新北市清水救生隊，擁有專業的教練團，以及充滿熱忱的助教們，是您成為救生員的好選擇。" />
    	<meta property="og:title" content="活動簡介" />
    	<meta property="og:site_name" content="清水救生隊" />
    	<meta property="og:description" content="新北市清水救生隊，擁有專業的教練團，以及充滿熱忱的助教們，是您成為救生員的好選擇。" />
    	<meta property="og:image" content="https://lifeguard.sean.taipei/images/logo.jpg" />
		<link rel="stylesheet" href="assets/css/multiverse.css" />
		<noscript><link rel="stylesheet" href="assets/css/multiverse-noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header">
				<h1><strong>清水救生隊</strong> 活動簡介</h1>
				<nav>
					<ul>
						<li><a href="review" class="icon fa fa-comments">學員心得</a></li>
						<li><a href="#footer" class="icon fa fa-info-circle">開班資訊</a></li>
					</ul>
				</nav>
			</header>

			<!-- Main -->
			<div id="main">
<?php
$photos = [
	1 => [
		"救生員訓練班",
		"每年暑假，都有新血注入清水隊，除了教練團教導，也有許多學長姐們，自發性的回來提攜後輩"
	],

	2 => [
		"萬里海訓",
		"參加救生泳訓班的第三週，假日一齊到萬里海邊，體驗器材實際操作、練習救生技巧"
	],

	10 => [
		"淨灘活動",
		"作為公益性團體，保握海訓機會，協助讓環境變得更加美好"
	],

	5 => [
		"室內急救課程",
		"當救生員的必要資格之一，就是取得急救員證了",
		"每期救生班，都會有三天的室內課，教授實用的急救、包紮技術，以及相關法律常識"
	],

	16 => [
		"初級泳訓班",
		"除了精實的救生班外，清水隊每年會開設成人泳訓班",
		"經過兩週的基礎課程後，讓您學會游泳、不再怕水"
	],

	4 => [
		"小小救生班",
		"每天早起游泳，養成小孩規律的生活"
	],

	3 => [
		"大豹溪協勤",
		"為了分攤消防弟兄的負擔，每年暑假玩水旺季，隊員都會於假日輪班至八仙橋協助警消勤務，並達成數年的零死亡人數成績"
	],

	14 => [
		"十式精進班",
		"短短一個月的救生班，多數人已經學會救生四式",
		"對於想要精進泳技的你，可以參加十式班微調動作，打好紮實的基本功"
	],

	15 => [
		"身障游泳比賽",
		"一年一度的慧行杯身障游泳比賽，都有熱心的隊員們戒護，保護這群天使們"
	],

	13 => [
		"年度會員大會",
		"下轄紅十字總會的清水救生隊，每年會例行性的招開會員大會，回顧一年來的精彩點滴"
	],

	6 => [
		"新科教練授帽",
		"除了畢業的學長姐擔任助教外，也有些熱心志工會進入教練班受訓，帶給學員更優質的教學內容"
	],

	17 => [
		"理監事會議"
	],

	18 => [
		"獲頒感謝狀"
	],

	19 => [
		"中正橋防汛演習"
	],

	20 => [
		"秋季旅遊"
	],

	22 => [
		"教練先修班"
	],

	27 => [
		"防溺協勤實習"
	],

	28 => [
		"結訓餐會"
	],

	32 => [
		"水考"
	],

	33 => [
		"結訓慶祝"
	],

	36 => [
		"溪訓長泳"
	],

	38 => [
		"溪訓操艇"
	],

	39 => [
		"獨木舟操練"
	],

	40 => [
		"清水電影院"
	],

	41 => [
		"淨港祈福"
	],

	42 => [
		"龍舟戒護"
	],

	23 => [
		"橫渡日月潭"
	],
];

foreach ($photos as $id => $desc) {
?>
				<article class="thumb">
				<a href="images/fulls/<?php printf('%02d', $id); ?>.jpg" class="image"><img src="images/thumbs/<?php printf('%02d', $id); ?>.jpg" alt="<?= $desc[0] ?>" /></a>
					<h2><?= $desc[0] ?></h2>
					<p><?= $desc[1] ?? 'OuO' ?></p>
				</article>
<?php } ?>
			</div>

			<!-- Footer -->
			<footer id="footer" class="panel">
				<div class="inner split">
					<div>
						<section>
							<h2>開班資訊</h2>
							<p>每年暑假，開設多種泳訓班，適合各年齡層參與</p>
							<h3>救生員訓練班 <small>(七月)</small></h3>
							<p>經由一個月的訓練，讓自己學會自救、救溺及救生技能，讓自己的身邊不要發生溺斃事件的遺憾。</p>
							<h3>小小救生班 <small>(八月)</small></h3>
							<p>為宣導防溺自救觀念，特別開設此班供國中小學童參與</p>
							<h3>成人初級班 <small>(六月、八月)</small></h3>
							<p>兩週的訓練，讓您不再害怕溺水</p>
						</section>
					</div>
					<div>
						<section>
							<h2>如何參與</h2>
							<p>經過救生班洗禮，成為隊上的一份子後，更有許多精彩活動等著您</p>
							<p>清水救生隊期待您的加入，歡迎直接來泳池詢問，或是透過以下管道與我們聯絡</p>
						</section>
						<section>
							<h2>立即加入清水大家庭</h2>
							<ul class="icons">
								<li><a target="_blank" href="https://t.me/SeanChannel" class="icon fab fa-telegram"> <span class="label">Telegram</span></a></li>
								<li><a target="_blank" href="https://fb.com/349426416046/" class="icon fab fa-facebook"> <span class="label">Facebook Page</span></a></li>
								<li><a target="_blank" href="https://fb.com/436696979716143" class="icon fa fa-users"> <span class="label">Facebook Group</span></a></li>
								<!-- <li><a href="#" class="icon fab fa-line"><span class="label">LINE</span></a></li> -->
							</ul>
						</section>
						<p class="copyright">
							&copy; 2018 清水救生隊. Design: <a target="_blank" href="http://html5up.net">HTML5 UP</a>.
						</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="assets/js/jquery.poptrox.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/multiverse.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

	</body>
</html>
