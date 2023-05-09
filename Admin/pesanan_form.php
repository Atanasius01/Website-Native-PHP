
<br>

<?php
$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->Pesanan();
?>
<H2>FORM DATA PESANAN</H2><br>
<form action="pesanan_controler.php" method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Total</label> 
    <div class="col-8">
      <input id="total" name="total" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Pelanggan ID</label> 
    <div class="col-8">
      <input id="pelanggan_id" name="pelanggan_id" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>