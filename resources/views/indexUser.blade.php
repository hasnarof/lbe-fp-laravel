<!DOCTYPE html>
<html>

<head>
  <title>asd</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap');

    * {
      margin: 0;
      padding: 0;
      outline: 0;
    }

    .filter {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
      opacity: .7;

      background: rgb(17, 67, 87);
      background: linear-gradient(90deg, rgba(17, 67, 87, 1) 0%, rgba(242, 148, 146, 1) 100%);
    }

    table {
      position: absolute;
      z-index: 2;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);

      width: 60%;
      border-collapse: collapse;
      border-spacing: 0;
      border-radius: 12px 12px 0 0;
      overflow: hidden;
      box-shadow: 0 5px 10px rgba(32, 32, 32, .3);
      background: #fafafa;
      text-align: center;
    }

    th,
    td {

      padding: 12px 15px;
    }

    th {
      font-family: 'Lato', sans-serif;
      background: #F29492;
      color: #fafafa;
      text-transform: uppercase;
    }

    td {
      font-family: 'Montserrat', sans-serif;
    }

    tr:nth-child(odd) {
      background-color: #eeeeee;
    }

    h2 {
      font-family: 'Lato', sans-serif;
      color: #ffffff;
      text-shadow: 0 5px 10px rgba(32, 32, 32, .3);
      font-size: 50px;
      position: absolute;

      left: 50%;
      top: 20%;
      transform: translate(-50%, -20%);
      overflow: hidden;
      z-index: 10;


    }

    a {
      text-decoration: none;

    }

    .add {
      position: relative;
      left: 45%;
      top: 250px;
      z-index: 2;
      color: #ffffff;
      font-size: 20px;
    }
  </style>
</head>

<body>

  <div class="filter">

  </div>

  <h2>Cars E-Catalogue</h2>


  <a class="add" href="/mobil/tambah"> + Add a new car</a>



  <table>
    <tr>
      <th>Model</th>
      <th>Brand</th>
      <th>Price</th>
      <th>Body Type</th>
      <th>Transmission</th>
      <th>Fuel Type</th>
      <th>Action</th>
    </tr>
    @foreach($mobil as $m)
    <tr>
      <td>{{ $m->model }}</td>
      <td>{{ $m->merk }}</td>
      <td>{{ $m->harga }}</td>
      <td>{{ $m->tipe_bodi }}</td>
      <td>{{ $m->transmisi }}</td>
      <td>{{ $m->tipe_bahan_bakar }}</td>
      <td>
        <a href="/mobil/edit/{{ $m->mobil_id }}">Edit</a>
        |
        <a href="/mobil/hapus/{{ $m->mobil_id }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>


</body>

</html>