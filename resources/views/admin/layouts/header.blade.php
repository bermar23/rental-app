@section('header')


<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> MOBILE</a></li>
							<li><a href="mailto:EMAIL"><i class="fa fa-envelope"></i> EMAIL</a></li><!---->
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->

	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-md-4 clearfix">
					<div class="logo pull-left">
						<a href="{{ url('admin/home') }}"><img src="{{ url('/') }}/images/logo.png" alt="" /></a>
					</div>
				</div>
				<div class="col-md-8 clearfix">
					<div class="shop-menu clearfix pull-right">
						<ul class="nav navbar-nav">
							<li><a href=""><i class="fa fa-user"></i> Account</a></li>
							<li><a href="{{ url('login') }}"><i class="fa fa-lock"></i> Login</a></li>
							<li><a href="{{ url('register') }}"><i class="fa fa-lock"></i> Register</a></li><!---->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="{{ url('/') }}/admin/home" class="active">Home</a></li>
							<li><a href="{{ url('/') }}/admin/users">Users</a></li>
							<li><a href="{{ url('/') }}/admin/items">Products</a></li>
							<li><a href="{{ url('/') }}/admin/categories">Categories</a></li>
							<li><a href="{{ url('/') }}/admin/transactions">Transactions</a></li>
							<li><a href="{{ url('/') }}/admin/invoices">Invoices</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<!--<div class="search_box pull-right">
						<input type="text" placeholder="Search"/>
					</div>-->
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->
@stop
