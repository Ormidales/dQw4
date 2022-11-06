<?php 

$bdd = new PDO('mysql:host=localhost;dbname=hugodoueil-station;', 'root', '');

$sidebars = $bdd->query('SELECT * FROM dqw4_sidebar ORDER BY nom');

?>
<!DOCTYPE html>
<html lang="fr">
	<head>

		<!-- INFOS IMPORTANTES -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#FFCB2A"/>
		<link rel="apple-touch-icon" href="img/img-profile.webp">
		<link rel="icon" type="image/ico" href="img/img-profile.ico"/>
		<title>Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack</title>

		<!-- DESCRIPTION DU SITE + FORMATS LIENS DANS LES RESEAUX SOCIAUX -->
		<meta name="title" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta name="description" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta name="keywords" content="hugo, HUGO, Hugo, doueil, Doueil, DOUEIL, Hugo Doueil, hugo doueil, HUGO DOUEIL, portfolio, développement, dev, web, html, css, php, tailwind, tailwindcss, dev web, developpement, developpement web, bts, sio, 2022, 2023, BTS, SIO, Pardailhan, pardailhan, saint, gaudens, SAINT, GAUDENS, Saint, Gaudens, Saint-Gaudens, saint-gaudens, villeneuve, rivière, VILLENEUVE, RIVIERE, Villeneuve, Rivière, Villeneuve de Rivière, 31800, Toulouse, DQL, dql, Licence, licence, bac+3, bac, +3, BAC, Paul Sabatier, Informatique, département">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://hugodoueil.fr/">
		<meta property="og:title" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta property="og:description" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta property="og:image" content="https://hugodoueil.fr/img/bg.webp">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://hugodoueil.fr/">
		<meta property="twitter:title" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta property="twitter:description" content="Hugo Doueil | Portfolio 2022 | Développeur Web / Fullstack">
		<meta property="twitter:image" content="https://hugodoueil.fr/img/bg.webp">

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

		<!-- TAILWIND -->
		<script src="https://cdn.tailwindcss.com"></script>

		<link rel="stylesheet" type="text/css" href="prism.css">

	</head>
	<body class="w-full p-4 text-white bg-zinc-900" style="font-family: Nunito Sans, sans-serif;">	

		<pre><code class="language-json rounded">{
  "color-primary-100": "#CCDAFF",
  "color-primary-200": "#99B4FF",
  "color-primary-300": "#668CFF",
  "color-primary-400": "#406BFF",
  "color-primary-500": "#0135FF",
  "color-primary-600": "#0028DB",
  "color-primary-700": "#001EB7",
  "color-primary-800": "#001593",
  "color-primary-900": "#000E7A",
  "color-success-100": "#ECFED5",
  "color-success-200": "#D4FDAC",
  "color-success-300": "#B5F981",
  "color-success-400": "#97F461",
  "color-success-500": "#68ED2F",
  "color-success-600": "#49CB22",
  "color-success-700": "#30AA17",
  "color-success-800": "#1B890E",
  "color-success-900": "#0C7109",
  "color-info-100": "#CCFEF6",
  "color-info-200": "#99FEF5",
  "color-info-300": "#66FDFC",
  "color-info-400": "#40EDFB",
  "color-info-500": "#02D4F9",
  "color-info-600": "#01A5D6",
  "color-info-700": "#017CB3",
  "color-info-800": "#005990",
  "color-info-900": "#004077",
  "color-warning-100": "#FFF9CF",
  "color-warning-200": "#FFF29F",
  "color-warning-300": "#FFEA6F",
  "color-warning-400": "#FFE14B",
  "color-warning-500": "#FFD30F",
  "color-warning-600": "#DBB10A",
  "color-warning-700": "#B79007",
  "color-warning-800": "#937104",
  "color-warning-900": "#7A5B02",
  "color-danger-100": "#FEEAD4",
  "color-danger-200": "#FECFA9",
  "color-danger-300": "#FCAD7E",
  "color-danger-400": "#FA8D5E",
  "color-danger-500": "#F7592A",
  "color-danger-600": "#D43B1E",
  "color-danger-700": "#B12215",
  "color-danger-800": "#8F0F0D",
  "color-danger-900": "#76080E"
}
</code></pre>

		<script src="prism.js"></script>

	</body>
</html>