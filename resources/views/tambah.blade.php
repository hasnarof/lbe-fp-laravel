<!DOCTYPE html>
<html>
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
</style>



<head>
  <title>Catalogue</title>
</head>

<body>

  <h2 class="Cars">Cars E-Catalogue</h2>

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


</body>

</html>