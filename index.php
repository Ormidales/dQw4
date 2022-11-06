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
		<meta name="theme-color" content="#0135FF"/>
		<link rel="apple-touch-icon" href="https://hugodoueil.fr/img/img-profile.webp">
		<link rel="icon" type="image/ico" href="https://hugodoueil.fr/img/img-profile.ico"/>
		<title>dQw4 Library / Tailwind Components Library - Hugo Doueil</title>

		<!-- DESCRIPTION DU SITE + FORMATS LIENS DANS LES RESEAUX SOCIAUX -->
		<meta name="title" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta name="description" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta name="keywords" content="dqw4, DQW4, dQw4, library, librarie, components, COMPONENTS, hugo, doueil, Hugo, Doueil, Ormidales, ormidales">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://hugodoueil.fr/dQw4">
		<meta property="og:title" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta property="og:description" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta property="og:image" content="https://hugodoueil.fr/img/bg.webp">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://hugodoueil.fr/dQw4">
		<meta property="twitter:title" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta property="twitter:description" content="dQw4 Library / Tailwind Components Library - Hugo Doueil">
		<meta property="twitter:image" content="https://hugodoueil.fr/img/bg.webp">

		<!-- DQW4 -->
		<link rel="stylesheet" type="text/css" href="ressources/dqw4.css">

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

		<!-- TAILWIND -->
		<script src="https://cdn.tailwindcss.com"></script>

		<!-- PRISM -->
		<link rel="stylesheet" type="text/css" href="ressources/prism.css">

	</head>
	<body class="w-full p-0 text-white bg-zinc-900" style="font-family: Nunito Sans, sans-serif;">	

		<section class="w-full h-[100vh] overflow-hidden">
			
			<div class="w-full h-[8vh] border-b border-zinc-700 px-8 flex items-center justify-between">
				
				<a href="index.php"><h1 class="text-[20px] text-white">dQw4 Library - Tailwind Components</h1></a>

				<div class="flex items-center">
					
					<a href="ressources/installation.php" class="text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">Installation</a>

					<a href="ressources/components.php" class="ml-10 text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">Composants</a>

					<a href="https://hugodoueil.fr" class="ml-10 text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">hugodoueil.fr</a>

				</div>

			</div>

			<div class="w-full h-[92vh] overflow-hidden flex items-center">
				
				<div class="w-1/5 h-[92vh] overflow-y-auto border-r border-zinc-700 px-8 py-12">

					<p class="text-[15px] text-zinc-300 font-bold mb-7">Listes des composants</p>
					
					<ul class="space-y-3">

						<?php while($sidebar = $sidebars->fetch()) { ?>
				        <li>
				            <a href="<?= $sidebar['lien'] ?>" class="flex items-center px-4 py-3 text-[16px] font-normal text-zinc-300 rounded-lg bg-zinc-900 hover:bg-zinc-800 hover:text-white hover:px-6 transition-all">
				               <span style="line-height: 16px;"><?= $sidebar['nom'] ?></span>
				            </a>
				        </li>
				    	<?php } ?>
				    </ul>

				</div>

				<div class="w-4/5 h-[92vh] overflow-y-auto p-12">

					<div class="w-full">
						
						<p class="text-[30px] text-white font-bold">Bienvenue sur dQw4 !</p>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Comment installer les components de dQw4 ?</p>

						<div class="w-full">
							
							<a href="ressources/installation.php"><div class="px-4 py-3 bg-[#0135FF] text-white text-md hover:px-6 transition-all">Aller sur la page d'installation</div></a>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Voir les components de dQw4</p>

						<div class="w-full">
							
							<a href="ressources/components.php"><div class="px-4 py-3 bg-[#0135FF] text-white text-md hover:px-6 transition-all">Aller sur la page des Components</div></a>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

				</div>

			</div>

		</section>

		<script src="ressources/prism.js"></script>

	</body>
</html>