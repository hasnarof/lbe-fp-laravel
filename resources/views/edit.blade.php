<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <h2>Cars E-Catalogue</h2>
  <h3>Edit Car's Detail</h3>

  <a href="/mobil"> Kembali</a>

  <br />
  <br />

  @foreach($mobil as $m)
  <form action="/mobil/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$m->mobil_id}}"> <br />
    Model <input type="text" name="model" required="required" value="{{$m->model}}"> <br />
    Brand <input type="text" name="merk" required="required" value="{{$m->merk}}"> <br />
    Price <input type="number" name="harga" required="required" value="{{$m->harga}}"> <br />
    Body Type <input type="text" name="tipe_bodi" required="required" value="{{$m->tipe_bodi}}"> <br />
    Transmission <input type="text" name="transmisi" required="required" value="{{$m->transmisi}}"> <br />
    Fuel Type <input type="text" name="tipe_bahan_bakar" required="required" value="{{$m->tipe_bahan_bakar}}"> <br />
    <input type="submit" value="Save">
  </form>
  @endforeach


</body>

</html>