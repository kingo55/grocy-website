<!DOCTYPE html>
<html lang="@yield('lang')">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	@if(isset($noindex))
		<meta name="robots" content="noindex,nofollow,noodp,noydir">
	@else
		<meta name="robots" content="noodp,noydir">
	@endif
	<meta name="format-detection" content="telephone=no">

	<meta name="author" content="Bernd Bestel (bernd@berrnd.de)">
	<link rel="icon" href="/img/grocy_icon.svg">

	<title>@yield('title')</title>

	@yield('headerAdditional')

	<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/node_modules/simplelightbox/dist/simplelightbox.min.css" rel="stylesheet">
	<link href="/vendor_unmanaged/poppins-v1-latin/poppins-v1-latin.min.css" rel="stylesheet">
	<link href="/vendor_unmanaged/news-cycle-v13-latin/news-cycle-v13-latin.min.css" rel="stylesheet">
	<link href="/vendor_unmanaged/merriweather-v14-latin/merriweather-v14-latin.min.css" rel="stylesheet">
	<link href="/style.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light mb-4">
		<div class="container">
			<a class="navbar-brand py-2" href="/"><img src="/img/grocy_logo.svg" alt="grocy logo" title="grocy logo" height="30"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#languageNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			@yield('navAdditional')
		</div>
	</nav>

	<main class="text-center">

		@yield('content')

	</main>

	<footer class="container text-center pb-3">
		<div class="row">
			<div class="col">

				<div class="legal-navigation">
					<ul>
						<li>
							<a class="discrete-link" href="/impressum">Impressum</a>
						</li>
						<li>
							<a class="discrete-link" href="/datenschutz">Datenschutz</a>
						</li>
					</ul>
				</div>

				<div class="pt-3">
					grocy is a project by <a href="https://berrnd.de" target="_blank">Bernd Bestel</a>
					<br>
					Created with passion since 2017 and hosted on <a href="https://berrnd.net" target="_blank">berrnd.net</a> infrastructure
					<br>
					Life runs on code
				</div>

			</div>
		</div>
	</footer>

	<script src="/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="/node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
	<script src="/node_modules/simplelightbox/dist/simple-lightbox.min.js"></script>
	<script src="/site.js"></script>
	<script src="//kiwip.berrnd.org/js/ads/banner.js"></script>
	<script>
		var _paq = _paq || [];
		_paq.push(["setDomains", ["*.grocy.info"]]);
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		_paq.push(['enableHeartBeatTimer', 10]);
		if (typeof window.PIWIK_NO_ADBLOCKER_RECOGNIZED == 'undefined') { _paq.push(['setCustomVariable', '1', 'Adblocker recognized', 'true']); } else { _paq.push(['setCustomVariable', '1', 'Adblocker recognized', 'false']); }
		(function() {
		var u="//kiwip.berrnd.org/";
		_paq.push(['setTrackerUrl', u+'js/']);
		_paq.push(['setSiteId', 17]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'js/'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//kiwip.berrnd.org/kiwip.php?idsite=17&rec=1" style="border:0;" alt=""></p></noscript>
</body>
</html>
