<!-- Header-->
<header id="header" class="header">

	<div class="header-menu">

			<div class="col-sm-7">
					<a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
					<div class="header-left">
							<button class="search-trigger"><i class="fa fa-search"></i></button>
							<div class="form-inline">
									<form class="search-form">
											<input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
											<button class="search-close" type="submit"><i class="fa fa-close"></i></button>
									</form>
							</div>
					</div>
			</div>

			<div class="col-sm-5">
					<div class="user-area dropdown float-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img class="user-avatar rounded-circle" src="/images/admin.jpg" alt="User Avatar">
							</a>
							<div class="user-menu dropdown-menu">
								<a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
									</form>
									Logout
								</a>
							</div>
					</div>

					<div class="language-select pull-right" style="Padding:2%;" >
					 <p>You logged in as <strong>{{Auth::user()->name}}</strong></p>
					</div>

			</div>
	</div>

</header><!-- /header -->
<!-- Header-->