<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#top" class="anchor navbar-brand"><img id="logo"
                                                                src="{{ URL::asset('images/logo.png') }}"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                    <li><a href="{{url('/')}}" class="anchor">Strona główna</a></li>
                    <li><a href="#page_1" class="anchor">Formularz</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>