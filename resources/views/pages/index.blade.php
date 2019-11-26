@extends('layouts.app')

@section('content')

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Speak it Into Existence.</h1>
        <p class="lead">Have you ever wanted to make a wish and want it granted? <br>What are you waiting for? Speak it into existence right now!!</p>
        <code class="small">Wishes do come true..</code>
      </div>
      
      {!! Form::open(['action' =>'PostsController@store', 'method' => 'POST']) !!}

      <div class="container">
        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Name</h4>
            </div>
            <div class="card-body">
                <small class="text-muted" style="font-size:40px;">e.g   </small><h1 class="card-title pricing-card-title" style="display:inline">Jide Dough</h1>
              <ul class="list-unstyled mt-3 mb-4">
                {{Form::text('name', '', ['class' => 'form-control', 'style'=>"width:100%; padding:12px 20px; margin 8px 0; box-sizing:border-box; border-radius:2px; border:none; border-bottom:2px solid #007bff", 'placeholder' => ''])}}
               <!-- <input class="name" type ="text" style="width:100%; padding:12px 20px; margin 8px 0; box-sizing:border-box; border-radius:2px; border:none; border-bottom:2px solid blue">-->
              </ul>
              {{-- <button type="button" class="btn btn-sm  btn-primary">Next</button> --}}
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Mail</h4>
            </div>
            <div class="card-body">
                <small class="text-muted"></small><h1 class="card-title pricing-card-title">your<small class="text-muted">@mail.com</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                    {{Form::Email('mail', '', ['class' => 'form-control', 'style'=>"width:100%; padding:12px 20px; margin 8px 0; box-sizing:border-box; border-radius:2px; border:none; border-bottom:2px solid #007bff", 'placeholder' => ''])}}
                </ul>
              {{-- <button type="button" class="btn btn-sm btn-primary">Submit</button> --}}
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Make a wish</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Do <small class="text-muted">it</small></h1>
              
              <ul class="list-unstyled mt-3 mb-4">
                    {{Form::text('wish', '', ['class' => 'form-control', 'style'=>"width:100%; padding:12px 20px; margin 8px 0; box-sizing:border-box; border-radius:2px; border:none; border-bottom:2px solid #007bff", 'placeholder' => ''])}}
              </ul>
              {!!Form::submit('Place my Wish', ['class' => 'btn btn-primary'])!!}
              {{-- <button type="button" class="btn btn-sm btn-outline-primary">Wish</button> --}}
            </div>
          </div>
        </div>
      </div>
      {!!Form::close()!!}
@endsection