@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->


    
    <style>
  .card {
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 550px;
    margin: 0 auto;
  }

  .card-body {
    padding: 50px;
  }

  .card-body table {
    width: 100%;
  }

  .card-body table td {
    padding: 8px;
  }

  .card-body img {
    width: 100%;
    max-width: 250px;
    display: block;
    margin: 0 auto;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-body a {
    color: #007bff;
    text-decoration: none;
  }

  .card-body a:hover {
    text-decoration: underline;
  }
</style>

<div class="card">
  <div class="card-body" style="background-color: rgb(180, 205, 230);">
    <table>
      <tr>
        <td colspan="2" align="center">
          <img src="pantai.jpeg" alt="Foto Pantai" />
        </td>
      </tr>
      <tr>
        <td align="right">NIM:</td>
        <td>2111500118</td>
      </tr>
      <tr>
        <td align="right">Nama Lengkap:</td>
        <td>Tunggul Bayu Kusuma</td>
      </tr>
      <tr>
        <td align="right">Alamat Email:</td>
        <td>
          <a href="mailto:tunggul.bayu24@gmail.com">Tunggul.bayu24@gmail.com</a>
        </td>
      </tr>
      <tr>
        <td align="right">Nomor HP:</td>
        <td>087720912755</td>
      </tr>
      <tr>
        <td align="right">Instagram:</td>
        <td>
          <a href="https://instagram.com/tnggulbyksma?igshid=MzRlODBiNWFlZA==">https://instagram.com/Tngglbyksma</a>
        </td>
      </tr>
    </table>
  </div>
</div>

    

	

@endsection
