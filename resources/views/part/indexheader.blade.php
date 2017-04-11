
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('user.index')}}">Start Bootstrap</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>

                  @if(Auth::check())
                <li>
                    <a href="{{route('user.logout')}}">Log Out</a>
                </li>

@else
                <li>
                    <a href="{{route('user.signin')}}">Sign In</a>
                </li>
                <li>
                    <a href="{{route('user.signup')}}">Sign Up</a>
                </li>
@endif
<li>

  <a href="{{route('admin.ShoppingCart')}}"><i class="fa fa-2x fa-shopping-cart">
                           <lavel id="cart-badge" class="badge badge-warning" style="margin-bottom: 15px;" >@{{totalCartItems}}</lavel></i></a>
</li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->

</nav>
