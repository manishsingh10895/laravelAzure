<!DOCTYPE html>
<html>
<head>
	<title>Master</title>
<link rel='stylesheet' href="resources/views/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div>
	 <nav id="myNavbar" class="navbar navbar-inverse" style="background:#002034" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">Thy Forum</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class='nav navbar-nav navbar-right'>
                    <li>
                        <a href='/signup'>Sign up</a>      
                    </li>
                    <li><a href='/login'>Login</a></li>
                </ul>
                <div>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search for questions"/>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                
            </div><!-- /.navbar-collapse -->
        </div>
        
        
    </nav>
</div>
	<div class="container">
		@yield('content')
	</div>
	<div class="footer">
		
	</div>
</body>
</html>