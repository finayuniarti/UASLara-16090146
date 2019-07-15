<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                      <img src="images/sinergi.png" class="img-fluid" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                          @if (!empty($halaman) && $halaman == 'home')
                          <li class="nav-item"> <a class="nav-link active" href="home">HOME
                            <span class="sr-only">(current)</span></a></li>
                            @else
                            <li class="nav-item"> <a class="nav-link" href="home">HOME</a> </li>
                            @endif

                          @if (!empty($halaman) && $halaman == 'order')
                          <li class="nav-item"> <a class="nav-link active" href="order">ORDER
                            <span class="sr-only">(current)</span></a> </li>
                            @else
                            <li class="nav-item"> <a class="nav-link" href="order">ORDER</a> </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
