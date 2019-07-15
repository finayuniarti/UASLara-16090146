@if (Auth:: check())

<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>sinergi.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>sinergi.com
                </div>
            </div>
        </div>
</header>
 <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="{{ asset('images/sinergi.png') }}" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="{{ asset('images/th.jpg') }}" alt="" class="img-rounded" />
                                    {{ Auth::user()->name }} <span class="media-heading"></span></a>

										<ul><a class="btn btn-danger" href="{{ url('logout') }}">Logout</a></ul>
											<form id="logout-form" action="{{ url('logout') }}" style="display: none;">
												@csrf
											</form>
											</div>
										</li>
									</ul>

                            </div>
                        </li></ul>
                </div>
            </div>
        </div>
    </div>

    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            {{--- Item ---}}
							@if (!empty($halaman) && $halaman == 'item')
							<li class="active"><a href="{{ url('item')}} ">ITEM<span class="sr-only">(current)</span></a></li>
							@else
							<li><a href="{{ url('sadmin/item') }}">ITEM</a></li>
							@endif
							{{--- Notifikasi ---}}
							@if (!empty($halaman) && $halaman == 'order')
							<li class="active"><a href="{{ url('sadmin/order')}} ">Notifikasi<span class="sr-only">(current)</span></a></li>
							@else
							<li><a href="{{ url('sadmin/order') }}">Notifikasi</a></li>
							@endif
							{{--- Akun ---}}
							@if (!empty($halaman) && $halaman == 'akun')
							<li class="active"><a href="{{ url('sadmin/akun') }} ">Akun<span class="sr-only">(current)</span></a></li>
							@else
							<li><a href="{{ url('sadmin/akun') }}">Akun</a></li>
							@endif

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
	</div>
</div>
</nav>
@endif