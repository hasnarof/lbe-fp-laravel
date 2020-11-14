@extends('master')

@section('isi_halaman');

<a href="/mobil"> Back</a>


<form action="/mobil/store" method="post">
  <div class="col-3">
    <input type="text" class="effect-1" name="model" required="required" placeholder="Model">
    <span class="focus-border"></span>
  </div>

  <div class="col-3">
    <input type="text" class="effect-2" name="model" required="required" placeholder="Brand">
    <span class="focus-border"></span>
  </div>

  <div class="col-3">
    <input type="text" class="effect-3" name="model" required="required" placeholder="Price">
    <span class="focus-border"></span>
  </div>

  <div class="col-3">
    <input type="text" class="effect-4" name="model" required="required" placeholder="Body Type">
    <span class="focus-border"></span>
  </div>

  <div class="col-3">
    <input type="text" class="effect-5" name="model" required="required" placeholder="Transmission">
    <span class="focus-border"></span>
  </div>

  <div class="col-3">
    <input type="text" class="effect-6" name="model" required="required" placeholder="Fuel Type">
    <span class="focus-border"></span>
  </div>

  <input class="buttonsave" type="submit" value="Save">


</form>

<!-- <form action="/mobil/store" method="post">
    {{ csrf_field() }}
    Model <input type="text" name="model" required="required"> <br />
    Brand <input type="text" name="merk" required="required"> <br />
    Price <input type="number" name="harga" required="required"> <br />
    Body Type <input type="text" name="tipe_bodi" required="required"> <br />
    Transmission <input type="text" name="transmisi" required="required"> <br />
    Fuel Type <input type="text" name="tipe_bahan_bakar" required="required"> <br />
    <input type="submit" value="Save">
  </form> -->

@endsection