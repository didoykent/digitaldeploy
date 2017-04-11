@extends('layouts.mainpage')


@section('content')



<div class="container">

  @if(Session::has('success'))

<br>
  <div class="row">
      <div class="col-md-4 col-md-offset-4">


  <div class="alert alert-success">




  <center>
                 {{ Session::get('success') }}
  </center>
             </div>
          </div>
  </div>

  @endif

  <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron hero-spacer">
          <h1>A Warm Welcome!</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
          <p><a class="btn btn-primary btn-large">Call to action!</a>
          </p>
      </header>

      <hr>

      <!-- Title -->
      <div class="row">
          <div class="col-lg-12">
              <h3>Latest Features</h3>
          </div>
      </div>
      <!-- /.row -->

      <!-- Page Features -->
      <div class="row text-center">

          <div v-for = "item in items">
          <div class="col-md-3 col-sm-6 hero-feature">
              <div class="thumbnail">
                  <img src="@{{item.itemImagePath}}" alt="">
                  <div class="caption">
                      <h3 style="font-family: 'PT Sans Narrow', sans-serif; font-size: 30px;">@{{item.itemName}}</h3>
                      <small style="color: brown; " >Stocks: @{{item.itemQuantity}}</small>
                      <p style="font-weight:bold;color:#9BBD65;
   font-size: 20px;   ">Price: ₱@{{item.itemSrp}} </p>

                      <p>
                      <button type = "button"  @click.prevent = "AddCart(item)" class="btn btn-primary">Buy Now!</button> <a href="#" class="btn btn-default">More Info</a>
                      </p>
                  </div>
              </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

      <hr>

      <!-- Footer -->
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <p>Copyright &copy; Kent Robledo 2017</p>
              </div>
          </div>
      </footer>

  </div>


@endsection
