<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <h2>Cars E-Catalogue</h2>
  <h3>Cars' List</h3>

  <a href="/mobil"> Back</a>

  <br />
  <br />

  <form action="/mobil/store" method="post">
    {{ csrf_field() }}
    Model <input type="text" name="model" required="required"> <br />
    Brand <input type="text" name="merk" required="required"> <br />
    Price <input type="number" name="harga" required="required"> <br />
    Body Type <input type="text" name="tipe_bodi" required="required"> <br />
    Transmission <input type="text" name="transmisi" required="required"> <br />
    Fuel Type <input type="text" name="tipe_bahan_bakar" required="required"> <br />
    <input type="submit" value="Save">
  </form>


</body>

</html>