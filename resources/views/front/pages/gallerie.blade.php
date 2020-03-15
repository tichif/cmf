@extends('front.layout.app')

@section('content')
  <section id="gallerie">
    <h1 class="text-center my-5">Gallerie</h1>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <article class="album">
            <a href="#">
              <img src="https://images.pexels.com/photos/3862130/pexels-photo-3862130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="100%" >
            </a>
            <p class="text-center" style="margin-top: 10px;" > test 1</p>
          </article>
        </div>

        <div class="col-md-4">
          <article class="album">
            <a href="#">
              <img src="https://images.pexels.com/photos/3862130/pexels-photo-3862130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="100%" >
            </a>
            <p class="text-center" style="margin-top: 10px;" > test 1</p>
          </article>
        </div>

        <div class="col-md-4">
          <article class="album">
            <a href="#">
              <img src="https://images.pexels.com/photos/3862130/pexels-photo-3862130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="100%" >
            </a>
            <p class="text-center" style="margin-top: 10px;" > test 1</p>
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection