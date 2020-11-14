@extends('master')

@section('isi_halaman');


<a href="/mobil/tambah"> + Add a new car</a>

<br />
<br />

<div class="text-center">
  <table border="1">
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

        <a href="/mobil/hapus/{{ $m->mobil_id }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>


@endsection