<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $pageTitle }} &bull; Nova NextGen Guide</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.3.2/hint.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/hidpi2x.css" media="only screen and (-moz-min-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)">
		<link rel="stylesheet" href="/css/hidpi3x.css" media="only screen and (-moz-min-device-pixel-ratio: 3), only screen and (-o-min-device-pixel-ratio: 3/1), only screen and (-webkit-min-device-pixel-ratio: 3), only screen and (min-device-pixel-ratio: 3)">
    </head>
    <body>
        <header>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<span class="product">Nova 3 Guide</span>
					</div>
					<div class="col-sm-6">
						<input type="search" class="form-control" placeholder="Search...">
					</div>
					<div class="col-sm-3">
						<div class="anodyne-logo pull-right"></div>
					</div>
				</div>
			</div>
		</header>
        <main>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-3">
                        @include('_partials.nav')
                    </div>

                    <div class="col-md-8 col-lg-9">
						<article>
							<h1>
								<div class="pull-right">
                                    @if ( ! empty($prevLink))
									    <a href="{{ $prevLink }}" class="hint--bottom-left hint--rounded hint--no-animate" aria-label="{{ $prevName }}"><i class="fa fa-arrow-left"></i></a>
                                    @endif
									&nbsp;
                                    @if ( ! empty($nextLink))
									    <a href="{{ $nextLink }}" class="hint--bottom-left hint--rounded hint--no-animate" aria-label="{{ $nextName }}"><i class="fa fa-arrow-right"></i></a>
                                    @endif
								</div>
								{{ $header }}
							</h1>

							@yield('content')

							<!--<div class="callout callout__info">
								<h4 class="callout__title"><i class="fa fa-info-circle fa-fw"></i> Theme Developers</h4>
								<p>While Nova's new themeing system is mostly complete, there are still areas that are receiving attention and will continue to be updated over the coming preview releases. As such, themes you begin to build before the theme system is completed may require additional work to display properly on future preview releases.</p>
							</div>

							<div class="callout callout__success">
								<h4 class="callout__title"><i class="fa fa-check fa-fw"></i> Completed</h4>
								<p>The Page Manager is now feature complete!</p>
								<p>This means that we consider the Page Manager to be in its near final state. We currently have no plans to make significant changes to this feature before the release of Nova 3.0. As such, you can consider the information in this section final.</p>
								<p>We will continue to monitor any issue reports and tweak the Page Manager as necessary until it's as good as it can be for the final release, but no significant new features will be added for Nova 3.0.</p>
							</div>

							<div class="callout callout__danger">
								<h4 class="callout__title"><i class="fa fa-exclamation-circle fa-fw"></i> Coming Soon</h4>
								<p>The settings page hasn't been built yet. Once there is a user interface for managing Nova's settings, we'll provide more complete guidance. Until then, you'll need to modify any of Nova's settings by manually updating the <code>nova_settings</code> table in the database.</p>
							</div>

							<div class="callout callout__warning">
								<h4 class="callout__title"><i class="fa fa-exclamation-triangle fa-fw"></i> Extensions</h4>
								<p>The extension system is in its earliest phases of development. While some of the pieces are place, more development work is necessary to bring extensions to the place where we want them. Keep your eyes on this space for updated information about extension development in the future.</p>
							</div>

							<pre>$this->foo = 'bar';</pre>-->

                            @if ( ! empty($nextName))
    							<footer>
    								<strong>Up next:</strong> <a href="{{ $nextLink }}">{{ $nextName }}</a>
    							</footer>
                            @endif
						</article>
					</div>
                </div>
            </div>
        </main>
    </body>
</html>
