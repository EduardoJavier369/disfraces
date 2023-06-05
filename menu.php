<?php $class = 'active-menu';?>
<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a  class="logo">
						<img src="imagenes/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="<?php echo (isset($menu) && $menu == 'inicio' ? $class : '') ?>">
								<a href="index.php">Inicio</a>
							
							</li>

							<li class="<?php echo (isset($menu) && $menu == 'productos' ? $class : '') ?>">
								<a href="productos.php">Productos</a>
							</li>


							<li class="<?php echo (isset($menu) && $menu == 'nosotros' ? $class : '') ?>">
								<a href="nosotros.php">Nosotros</a>
							</li>

							<li class="<?php echo (isset($menu) && $menu == 'contacto' ? $class : '') ?>">
								<a href="contacto.php">Contacto</a>
							</li>
							<li>
								<a href="https://wa.me/524427171586" target="_blank"><li class="fa fa-whatsapp"></li>  
								442-38-46-973
								</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a ><img src="imagenes/logo.png" alt="IMG-LOGO"></a>
			</div>


			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			
			<ul class="main-menu-m">
				<li>
					<a href="index.php">Inicio</a>
					
				
				</li>

				<li>
					<a href="productos.php">Productos</a>
				</li>


				<li>
					<a href="nosotros.php">Nosotros</a>
				</li>

				<li>
					<a href="contacto.php">Contacto</a>
				</li>

				<li>
					<a href="https://wa.me/524427171586" target="_blank" class="fa fa-whatsapp"> 
								(442)3846973
							</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>