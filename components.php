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
	<body class="w-full p-0 text-white bg-zinc-900" style="font-family: Nunito Sans, sans-serif;">	

		<section class="w-full h-[100vh] overflow-hidden">
			
			<div class="w-full h-[8vh] border-b border-zinc-700 px-8 flex items-center justify-between">
				
				<a href="index.php"><h1 class="text-[20px] text-white">dQw4 Library - Tailwind Components</h1></a>

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
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 1</p>

						<div class="w-full">
							
							<div class="border-t-4 border-green-900/50 bg-green-100 px-4 py-3 text-green-800"><strong class="text-sm font-bold"> Exemple d'alerte </strong></div>

							<div class="mt-2 rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800"><strong class="text-sm font-bold"> Post has been published! </strong></div>

							<div class="mt-2 rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800"><strong class="text-sm font-bold"> Post has been published! </strong></div>

							<div class="mt-2 rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800"><strong class="text-sm font-bold"> Post has been published! </strong></div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;/div&gt;
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 2</p>

						<div class="w-full">
							
							<div class="rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800"><strong class="text-sm font-bold"> Post has been published! </strong><p class="mt-1 text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.</p></div>

							<div class="mt-2 rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800"><strong class="text-sm font-bold"> Post has been published! </strong><p class="mt-1 text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.</p></div>

							<div class="mt-2 rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800"><strong class="text-sm font-bold"> Post has been published! </strong><p class="mt-1 text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.</p></div>

							<div class="mt-2 rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800"><strong class="text-sm font-bold"> Post has been published! </strong><p class="mt-1 text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.</p></div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;p class=&quot;mt-1 text-xs&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.&lt;/p&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;p class=&quot;mt-1 text-xs&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.&lt;/p&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;p class=&quot;mt-1 text-xs&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.&lt;/p&gt;&lt;/div&gt;		

&lt;div class=&quot;rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;p class=&quot;mt-1 text-xs&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id erat eu nisl lobortis pretium.&lt;/p&gt;&lt;/div&gt;						
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 3</p>

						<div class="w-full">
							
							<div class="rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800"><strong class="text-sm font-bold"> Post has been published! </strong><ul class="mt-1 ml-2 list-inside list-disc text-xs"><li>Lorem ipsum dolor sit</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet consectetur</li></ul></div>

							<div class="mt-2 rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800"><strong class="text-sm font-bold"> Post has been published! </strong><ul class="mt-1 ml-2 list-inside list-disc text-xs"><li>Lorem ipsum dolor sit</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet consectetur</li></ul></div>

							<div class="mt-2 rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800"><strong class="text-sm font-bold"> Post has been published! </strong><ul class="mt-1 ml-2 list-inside list-disc text-xs"><li>Lorem ipsum dolor sit</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet consectetur</li></ul></div>

							<div class="mt-2 rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800"><strong class="text-sm font-bold"> Post has been published! </strong><ul class="mt-1 ml-2 list-inside list-disc text-xs"><li>Lorem ipsum dolor sit</li><li>Lorem ipsum dolor sit amet</li><li>Lorem ipsum dolor sit amet consectetur</li></ul></div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;ul class=&quot;mt-1 ml-2 list-inside list-disc text-xs&quot;&gt;&lt;li&gt;Lorem ipsum dolor sit&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet consectetur&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;ul class=&quot;mt-1 ml-2 list-inside list-disc text-xs&quot;&gt;&lt;li&gt;Lorem ipsum dolor sit&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet consectetur&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;

&lt;div class=&quot;rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;ul class=&quot;mt-1 ml-2 list-inside list-disc text-xs&quot;&gt;&lt;li&gt;Lorem ipsum dolor sit&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet consectetur&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;	

&lt;div class=&quot;rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800&quot;&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Post has been published! &lt;/strong&gt;&lt;ul class=&quot;mt-1 ml-2 list-inside list-disc text-xs&quot;&gt;&lt;li&gt;Lorem ipsum dolor sit&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;&lt;li&gt;Lorem ipsum dolor sit amet consectetur&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;								
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 4</p>

						<div class="w-full">
							
							<div class="border-l-4 border-green-700 bg-green-100 px-4 py-3 text-green-800"><h3 class="text-sm font-bold">Post has been published!</h3></div>

							<div class="mt-2 border-l-4 border-red-700 bg-red-100 px-4 py-3 text-red-800"><h3 class="text-sm font-bold">Post has been published!</h3></div>

							<div class="mt-2 border-l-4 border-yellow-700 bg-yellow-100 px-4 py-3 text-yellow-800"><h3 class="text-sm font-bold">Post has been published!</h3></div>

							<div class="mt-2 border-l-4 border-blue-700 bg-blue-100 px-4 py-3 text-blue-800"><h3 class="text-sm font-bold">Post has been published!</h3></div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;border-l-4 border-green-700 bg-green-100 px-4 py-3 text-green-800&quot;&gt;&lt;h3 class=&quot;text-sm font-bold&quot;&gt;Post has been published!&lt;/h3&gt;&lt;/div&gt;

&lt;div class=&quot;border-l-4 border-red-700 bg-red-100 px-4 py-3 text-red-800&quot;&gt;&lt;h3 class=&quot;text-sm font-bold&quot;&gt;Post has been published!&lt;/h3&gt;&lt;/div&gt;		

&lt;div class=&quot;border-l-4 border-yellow-700 bg-yellow-100 px-4 py-3 text-yellow-800&quot;&gt;&lt;h3 class=&quot;text-sm font-bold&quot;&gt;Post has been published!&lt;/h3&gt;&lt;/div&gt;		

&lt;div class=&quot;border-l-4 border-blue-700 bg-blue-100 px-4 py-3 text-blue-800&quot;&gt;&lt;h3 class=&quot;text-sm font-bold&quot;&gt;Post has been published!&lt;/h3&gt;&lt;/div&gt;	
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 5</p>

						<div class="w-full">
							
							<div class="flex items-center justify-between gap-4 rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800"><div class="flex items-center gap-4"><span class="rounded-full bg-green-600 p-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><p><strong class="text-sm font-bold"> Hooray! </strong><span class="block text-xs">This post has been published.</span></p></div></div>

							<div class="mt-2 flex items-center justify-between gap-4 rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800"><div class="flex items-center gap-4"><span class="rounded-full bg-red-600 p-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><p><strong class="text-sm font-bold"> Hooray! </strong><span class="block text-xs">This post has been published.</span></p></div></div>

							<div class="mt-2 flex items-center justify-between gap-4 rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800"><div class="flex items-center gap-4"><span class="rounded-full bg-yellow-600 p-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><p><strong class="text-sm font-bold"> Hooray! </strong><span class="block text-xs">This post has been published.</span></p></div></div>

							<div class="mt-2 flex items-center justify-between gap-4 rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800"><div class="flex items-center gap-4"><span class="rounded-full bg-blue-600 p-2 text-white"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span><p><strong class="text-sm font-bold"> Hooray! </strong><span class="block text-xs">This post has been published.</span></p></div></div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">&lt;div class=&quot;flex items-center justify-between gap-4 rounded border border-green-900/50 bg-green-100 px-4 py-3 text-green-800&quot;&gt;&lt;div class=&quot;flex items-center gap-4&quot;&gt;&lt;span class=&quot;rounded-full bg-green-600 p-2 text-white&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-5 w-5&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot;&gt;&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Hooray! &lt;/strong&gt;&lt;span class=&quot;block text-xs&quot;&gt;This post has been published.&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;

&lt;div class=&quot;flex items-center justify-between gap-4 rounded border border-red-900/50 bg-red-100 px-4 py-3 text-red-800&quot;&gt;&lt;div class=&quot;flex items-center gap-4&quot;&gt;&lt;span class=&quot;rounded-full bg-red-600 p-2 text-white&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-5 w-5&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot;&gt;&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Hooray! &lt;/strong&gt;&lt;span class=&quot;block text-xs&quot;&gt;This post has been published.&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;

&lt;div class=&quot;flex items-center justify-between gap-4 rounded border border-yellow-900/50 bg-yellow-100 px-4 py-3 text-yellow-800&quot;&gt;&lt;div class=&quot;flex items-center gap-4&quot;&gt;&lt;span class=&quot;rounded-full bg-yellow-600 p-2 text-white&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-5 w-5&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot;&gt;&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Hooray! &lt;/strong&gt;&lt;span class=&quot;block text-xs&quot;&gt;This post has been published.&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;

&lt;div class=&quot;flex items-center justify-between gap-4 rounded border border-blue-900/50 bg-blue-100 px-4 py-3 text-blue-800&quot;&gt;&lt;div class=&quot;flex items-center gap-4&quot;&gt;&lt;span class=&quot;rounded-full bg-blue-600 p-2 text-white&quot;&gt;&lt;svg xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;h-5 w-5&quot; fill=&quot;none&quot; viewBox=&quot;0 0 24 24&quot; stroke=&quot;currentColor&quot; stroke-width=&quot;2&quot;&gt;&lt;path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; d=&quot;M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;p&gt;&lt;strong class=&quot;text-sm font-bold&quot;&gt; Hooray! &lt;/strong&gt;&lt;span class=&quot;block text-xs&quot;&gt;This post has been published.&lt;/span&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;		
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 6</p>

						<div class="w-full">
							
							<div class="bg-gray-800 text-sm text-white rounded-md p-4 dark:bg-white dark:text-gray-800" role="alert">
							  <span class="font-bold">Dark</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-gray-500 text-sm text-white rounded-md p-4" role="alert">
							  <span class="font-bold">Secondary</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-blue-500 text-sm text-white rounded-md p-4" role="alert">
							  <span class="font-bold">Info</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-green-500 text-sm text-white rounded-md p-4" role="alert">
							  <span class="font-bold">Success</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-red-500 text-sm text-white rounded-md p-4" role="alert">
							  <span class="font-bold">Danger</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-orange-500 text-sm text-white rounded-md p-4" role="alert">
							  <span class="font-bold">Warning</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-white text-sm text-gray-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Light</span> alert! You should check in on some of those fields below.
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">	
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 7</p>

						<div class="w-full">
							
							<div class="bg-gray-50 border border-gray-200 text-sm text-gray-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Secondary</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-gray-800/[.1] border border-gray-200 text-sm text-gray-600 rounded-md p-4 dark:bg-gray-900/[.1] dark:border-gray-700 dark:text-white" role="alert">
							  <span class="font-bold">Secondary</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-blue-50 border border-blue-200 text-sm text-blue-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Info</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-green-50 border border-green-200 text-sm text-green-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Success</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-red-50 border border-red-200 text-sm text-red-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Danger</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-orange-50 border border-orange-200 text-sm text-orange-600 rounded-md p-4" role="alert">
							  <span class="font-bold">Warning</span> alert! You should check in on some of those fields below.
							</div>

							<div class="mt-2 bg-white/[.1] border border-white/[.1] text-sm text-gray-600 rounded-md p-4 dark:text-gray-400" role="alert">
							  <span class="font-bold">Light</span> alert! You should check in on some of those fields below.
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">	
</code></pre>

						</div>

						<div class="mt-5 w-full border-b border-zinc-700"></div>

					</div>

					<div class="w-full mt-12">
						
						<p class="text-[20px] text-white mb-5">Alertes | Section 8</p>

						<div class="w-full">
							
							<div class="bg-yellow-50 border border-yellow-200 rounded-md p-4" role="alert">
							  <div class="flex">
							    <div class="flex-shrink-0">
							      <svg class="h-4 w-4 text-yellow-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							      </svg>
							    </div>
							    <div class="ml-4">
							      <h3 class="text-sm text-yellow-800 font-semibold">
							        Cannot connect to the database
							      </h3>
							      <div class="mt-1 text-sm text-yellow-700">
							        We are unable to save any progress at this time.
							      </div>
							    </div>
							  </div>
							</div>

							<div class="mt-2 bg-red-50 border border-red-200 rounded-md p-4" role="alert">
							  <div class="flex">
							    <div class="flex-shrink-0">
							      <svg class="h-4 w-4 text-red-400 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
							      </svg>
							    </div>
							    <div class="ml-4">
							      <h3 class="text-sm text-red-800 font-semibold">
							        A problem has been occurred while submitting your data.
							      </h3>
							      <div class="mt-2 text-sm text-red-700">
							        <ul class="list-disc space-y-1 pl-5">
							          <li>
							            This username is already in use
							          </li>
							          <li>
							            Email field can't be empty
							          </li>
							          <li>
							            Please enter a valid phone number
							          </li>
							        </ul>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="mt-2 bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
							  <div class="flex">
							    <div class="flex-shrink-0">
							      <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
							        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
							      </svg>
							    </div>
							    <div class="ml-4">
							      <h3 class="text-gray-800 font-semibold">
							        YouTube would like you to send notifications
							      </h3>
							      <div class="mt-2 text-sm text-gray-600">
							        Notifications may include alerts, sounds and icon badges. These can be configured in Settings.
							      </div>
							      <div class="mt-4">
							        <div class="flex space-x-3">
							          <button type="button" class="inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-medium text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
							            Don't allow
							          </button>
							          <button type="button" class="inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-medium text-blue-600 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
							            Allow
							          </button>
							        </div>
							      </div>
							    </div>
							  </div>
							</div>

						</div>

						<div class="w-full mt-5">
							
							<pre><code class="language-html rounded">	
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

		<script src="prism.js"></script>

	</body>
</html>