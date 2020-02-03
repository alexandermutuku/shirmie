<!-- start main navbar -->
<nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
	<div class="container">
			<div class="navbar-brand">
		
				<a class="navbar-item" href="#">
						<img src="{{asset('images/logos/geosol-black.svg')}}" alt="" width="112" height="28">
				</a>

				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
				</a>
			</div>

			<div id="cloned-navbar-menu" class="navbar-menu">
				<div class="navbar-start">

				</div>

				<div class="navbar-item is-hidden-mobile">
						<div id="" class="menu-icon-wrapper" style="visibility: visible;">
								<svg width="1000px" height="1000px">
										<path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
										<path class="path2" d="M 300 500 L 700 500"></path>
										<path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
								</svg>
								<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
						</div>	
				</div>
			</div>
	</div>
</nav><!-- end of navbar -->


<nav id="navbar-menu" class="navbar-menu is-static">
		<div class="navbar-end">
			<div class="is-hidden-desktop">
					<a href="#" class="navbar-item is-secondary">
							Home
					</a>
					<a href="#" class="navbar-item is-secondary">
							What We do
					</a>
					<div class="navbar-item has-dropdown is-hoverable">
						<a class="navbar-link">
								Our Story
						</a>

						<div class="navbar-dropdown">
								<a class="navbar-item">
										Our Projects
								</a>
								<a class="navbar-item">
										Our team
								</a>
								<a class="navbar-item">
										Our Blog  
								</a>
						</div>

					<a href="#" class="navbar-item is-secondary">
							Contact us
					</a>
					</div>
				</div>

		</div>
</nav>


<!-- Start of navbar-clone collpases on scroll -->
<nav id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
		<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="#">
						<img src="{{asset('images/logos/geosol-black.svg')}}" alt="" width="112" height="28">
					</a>
					
					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="cloned-navbar-menu">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>

				<div id="cloned-navbar-menu" class="navbar-menu is-fixed">
					<div class="navbar-start">

					</div>

					<div class="navbar-item is-hidden-mobile">
						<div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
							<svg width="1000px" height="1000px">
									<path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
									<path class="path2" d="M 300 500 L 700 500"></path>
									<path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
							</svg>
							<button id="menu-icon-trigger" class="menu-icon-trigger"></button>
						</div>
					</div>
				</div>
		</div>
	</div>
</nav> <!-- end of navbar-clone -->
