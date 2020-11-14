<!DOCTYPE html>
<html>

<head>
  <title>Cartusiast Catalogue</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<style>
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;

  }

  h2 {
    margin-top: 5%;
    font-size: 50px;
    font-weight: 800;
    color: #000000;
    text-align: center;
  }

  form {
    margin-top: 5%;
  }

  a {
    position: relative;
    font-size: 20px;
    color: #000000;
    display: block;
    text-decoration: none;
    float: right;
    margin-right: 10%;


  }

  a::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: #000000;
    cursor: pointer;
    transition: width .3s;
  }

  a:hover::after {
    width: 100%;
    transition: width .3s;
  }


  :focus {
    outline: none;
  }


  .col-3 {
    float: left;
    width: 27.33%;
    margin: 40px 3%;
    position: relative;
  }


  input[type="text"] {
    font: 15px/24px "Lato", Arial, sans-serif;
    color: #0000;
    width: 100%;
    box-sizing: border-box;

    letter-spacing: 2px;
  }

  .effect-1,
  .effect-2,
  .effect-3,
  .effect-4,
  .effect-5,
  .effect-6 {
    border: 0;
    padding: 7px 0;
    border-bottom: 3px solid #000000;
  }

  .effect-1~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-1:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }

  .effect-2~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-2:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }

  .effect-3~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-3:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }


  .effect-4~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-4:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }


  .effect-5~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-5:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }


  .effect-6~.focus-border {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #ff2800;
    transition: 0.4s;
  }

  .effect-6:focus~.focus-border {
    width: 100%;
    transition: 0.4s;
    left: 0;
  }


  .buttonsave {

    position: relative;
    left: 48%;
    width: 100px;
  }

  table {
    margin: auto;
  }

  th,
  td {
    width: 150px;
  }
</style>

<body>

  <h2 class="Cars">CARTUSIAST</h2>

  <div class="container-fluid">
    @yield('isi_halaman');
  </div>


</body>

</html>