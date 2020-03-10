<div id="container-user-akses">

  <form action="<?php echo BASE_URL."proses_register"; ?>" method="POST">

    <div class="elemen-form">
      <label>Nama Lengkap</label>
      <span><input type="text" name="nama_lengkap" /></span>
    </div>

    <div class="elemen-form">
      <label>Email</label>
      <span><input type="email" name="email" /></span>
    </div>

    <div class="elemen-form">
      <label>Nomor Telepon / Handphone</label>
      <span><input type="text" name="phone" /></span>
    </div>

    <div class="elemen-form">
      <label>Alamat</label>
      <span><textarea name="alamat"></textarea></span>
    </div>

    <div class="elemen-form">
      <label>Password</label>
      <span><input type="password" name="password" /></span>
    </div>

    <div class="elemen-form">
      <label>Re-type Password</label>
      <span><input type="password" name="re_password" /></span>
    </div>

    <div class="elemen-form">
      <span><input type="submit" value="register" /></span>
    </div>



  </form>


</div>
