<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>

  <h2>Database Mobil</h2>
  <!-- <h3></h3> -->

  <a href="/mobil/tambah"> + Add a new car</a>

  <br />
  <br />

  <table border="1">
    <tr>
      <th>Model</th>
      <th>Merk</th>
      <th>Harga</th>
      <th>Tipe Bodi</th>
      <th>Transmisi</th>
      <th>Tipe Bahan Bakar</th>
      <th>Aksi</th>
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
        <a href="/mobil/hapus/{{ $m->mobil_id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </table>


</body>

</html>