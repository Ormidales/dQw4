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
		<link rel="stylesheet" type="text/css" href="../ressources/dqw4.css">

		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

		<!-- TAILWIND -->
		<script src="https://cdn.tailwindcss.com"></script>

		<!-- PRISM -->
		<link rel="stylesheet" type="text/css" href="../ressources/prism.css">

	</head>
	<body class="w-full p-0 text-white bg-zinc-900" style="font-family: Nunito Sans, sans-serif;">	

		<section class="w-full h-[100vh] overflow-hidden">
			
			<div class="w-full h-[8vh] border-b border-zinc-700 px-8 flex items-center justify-between">
				
				<a href="../index.php"><h1 class="text-[20px] text-white">dQw4 Library - Tailwind Components</h1></a>

				<div class="flex items-center">
					
					<a href="#" class="text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">Installation</a>

					<a href="#" class="ml-10 text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">Composants</a>

					<a href="#" class="ml-10 text-[16px] text-zinc-300 hover:text-white hover:scale-105 active:scale-95 transition-all">hugodoueil.fr</a>

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
						
						<p class="text-[30px] text-white font-bold">Alertes</p>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Basiques</p>

						<div class="w-full">
							
							<div class="px-4 py-3 bg-[#0135FF] text-white text-md">Exemple d'alerte</div>

							<div class="mt-2 px-4 py-3 bg-[#68ED2F] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 px-4 py-3 bg-[#02D4F9] text-white text-md">Exemple d'alerte</div>

							<div class="mt-2 px-4 py-3 bg-[#FFD30F] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 px-4 py-3 bg-[#F7592A] text-black text-md">Exemple d'alerte</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;px-4 py-3 bg-[#0135FF] text-white text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#68ED2F] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#02D4F9] text-white text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#FFD30F] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#F7592A] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Avec commentaire ou description</p>

						<div class="w-full">
							
							<div class="px-4 py-3 bg-[#0135FF]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<p class="mt-1 text-white text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#68ED2F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<p class="mt-1 text-black text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#02D4F9]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<p class="mt-1 text-white text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#FFD30F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<p class="mt-1 text-black text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#F7592A]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<p class="mt-1 text-black text-sm">Exemple de commentaire ou description</p>
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;px-4 py-3 bg-[#0135FF]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;p class=&quot;mt-1 text-white text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#68ED2F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;p class=&quot;mt-1 text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#02D4F9]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;p class=&quot;mt-1 text-white text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#FFD30F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;p class=&quot;mt-1 text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#F7592A]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;p class=&quot;mt-1 text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;				
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Avec des points</p>

						<div class="w-full">
							
							<div class="px-4 py-3 bg-[#0135FF]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<ul class="mt-1 list-inside list-disc text-white text-sm">
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
								</ul>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#68ED2F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<ul class="mt-1 list-inside list-disc text-black text-sm">
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
								</ul>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#02D4F9]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<ul class="mt-1 list-inside list-disc text-white text-sm">
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
								</ul>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#FFD30F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<ul class="mt-1 list-inside list-disc text-black text-sm">
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
								</ul>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#F7592A]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<ul class="mt-1 list-inside list-disc text-black text-sm">
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
									<li>Exemple de texte descriptif</li>
								</ul>
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;px-4 py-3 bg-[#0135FF]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;ul class=&quot;mt-1 list-inside list-disc text-white text-sm&quot;&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#68ED2F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;ul class=&quot;mt-1 list-inside list-disc text-black text-sm&quot;&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#02D4F9]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;ul class=&quot;mt-1 list-inside list-disc text-white text-sm&quot;&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#FFD30F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;ul class=&quot;mt-1 list-inside list-disc text-black text-sm&quot;&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#F7592A]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;ul class=&quot;mt-1 list-inside list-disc text-black text-sm&quot;&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
		&lt;li&gt;Exemple de texte descriptif&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;								
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Avec une bordure à gauche</p>

						<div class="w-full">
							
							<div class="border-l-4 border-[#0135FF] px-4 py-3 bg-[#99B4FF] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 border-l-4 border-[#68ED2F] px-4 py-3 bg-[#D4FDAC] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 border-l-4 border-[#02D4F9] px-4 py-3 bg-[#99FEF5] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 border-l-4 border-[#FFD30F] px-4 py-3 bg-[#FFF29F] text-black text-md">Exemple d'alerte</div>

							<div class="mt-2 border-l-4 border-[#F7592A] px-4 py-3 bg-[#FECFA9] text-black text-md">Exemple d'alerte</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;border-l-4 border-[#0135FF] px-4 py-3 bg-[#99B4FF] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;border-l-4 border-[#68ED2F] px-4 py-3 bg-[#D4FDAC] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;border-l-4 border-[#02D4F9] px-4 py-3 bg-[#99FEF5] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;border-l-4 border-[#FFD30F] px-4 py-3 bg-[#FFF29F] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;

&lt;div class=&quot;border-l-4 border-[#F7592A] px-4 py-3 bg-[#FECFA9] text-black text-md&quot;&gt;Exemple d&#39;alerte&lt;/div&gt;
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Avec une barrière au milieu</p>

						<div class="w-full">
							
							<div class="px-4 py-3 bg-[#0135FF]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<div class="mt-2 mb-2 w-full border-t border-white/25"></div>
								<p class="text-white text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#68ED2F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<div class="mt-2 mb-2 w-full border-t border-black/25"></div>
								<p class="text-black text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#02D4F9]">
								<p class="text-white text-md">Exemple de titre d'alerte</p>
								<div class="mt-2 mb-2 w-full border-t border-white/25"></div>
								<p class="text-white text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#FFD30F]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<div class="mt-2 mb-2 w-full border-t border-black/25"></div>
								<p class="text-black text-sm">Exemple de commentaire ou description</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#F7592A]">
								<p class="text-black text-md">Exemple de titre d'alerte</p>
								<div class="mt-2 mb-2 w-full border-t border-black/25"></div>
								<p class="text-black text-sm">Exemple de commentaire ou description</p>
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;px-4 py-3 bg-[#0135FF]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;div class=&quot;mt-2 mb-2 w-full border-t border-white/25&quot;&gt;&lt;/div&gt;
	&lt;p class=&quot;text-white text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#68ED2F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;div class=&quot;mt-2 mb-2 w-full border-t border-black/25&quot;&gt;&lt;/div&gt;
	&lt;p class=&quot;text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#02D4F9]&quot;&gt;
	&lt;p class=&quot;text-white text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;div class=&quot;mt-2 mb-2 w-full border-t border-white/25&quot;&gt;&lt;/div&gt;
	&lt;p class=&quot;text-white text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#FFD30F]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;div class=&quot;mt-2 mb-2 w-full border-t border-black/25&quot;&gt;&lt;/div&gt;
	&lt;p class=&quot;text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#F7592A]&quot;&gt;
	&lt;p class=&quot;text-black text-md&quot;&gt;Exemple de titre d&#39;alerte&lt;/p&gt;
	&lt;div class=&quot;mt-2 mb-2 w-full border-t border-black/25&quot;&gt;&lt;/div&gt;
	&lt;p class=&quot;text-black text-sm&quot;&gt;Exemple de commentaire ou description&lt;/p&gt;
&lt;/div&gt;
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Avec icones</p>

						<div class="w-full">
							
							<div class="px-4 py-3 bg-[#0135FF] text-white text-md flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
								</svg>
								<p>Exemple d'alerte avec icone</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#68ED2F] text-black text-md flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
								</svg>
								<p>Exemple d'alerte avec icone</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#02D4F9] text-white text-md flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
								</svg>
								<p>Exemple d'alerte avec icone</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#FFD30F] text-black text-md flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
								</svg>
								<p>Exemple d'alerte avec icone</p>
							</div>

							<div class="mt-2 px-4 py-3 bg-[#F7592A] text-black text-md flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
								</svg>
								<p>Exemple d'alerte avec icone</p>
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;px-4 py-3 bg-[#0135FF] text-white text-md flex items-center&quot;&gt;
	&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6 mr-2&quot;&gt;
	  	&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z&quot; /&gt;
	&lt;/svg&gt;
	&lt;p&gt;Exemple d&#39;alerte avec icone&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#68ED2F] text-black text-md flex items-center&quot;&gt;
	&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6 mr-2&quot;&gt;
	  	&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z&quot; /&gt;
	&lt;/svg&gt;
	&lt;p&gt;Exemple d&#39;alerte avec icone&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#02D4F9] text-white text-md flex items-center&quot;&gt;
	&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6 mr-2&quot;&gt;
	  	&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z&quot; /&gt;
	&lt;/svg&gt;
	&lt;p&gt;Exemple d&#39;alerte avec icone&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#FFD30F] text-black text-md flex items-center&quot;&gt;
	&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6 mr-2&quot;&gt;
	  	&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z&quot; /&gt;
	&lt;/svg&gt;
	&lt;p&gt;Exemple d&#39;alerte avec icone&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;px-4 py-3 bg-[#F7592A] text-black text-md flex items-center&quot;&gt;
	&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;1.5&quot; stroke=&quot;currentColor&quot; class=&quot;w-6 h-6 mr-2&quot;&gt;
	  	&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z&quot; /&gt;
	&lt;/svg&gt;
	&lt;p&gt;Exemple d&#39;alerte avec icone&lt;/p&gt;
&lt;/div&gt;
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-24 flex justify-end">
						
						<p class="text-[15px] text-white">Hugo Doueil | dQw4 Library - Tailwind Components</p>

					</div>

				</div>

			</div>

		</section>

		<script src="../ressources/prism.js"></script>

	</body>
</html>