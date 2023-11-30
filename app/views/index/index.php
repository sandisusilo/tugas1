<h2>Masuk</h2>

<div class="info">Selamat datang di Halaman Login </div>
    
<form action="<?php echo URL; ?>/Dashboard/index" method="post">
      <input type='text' name='user_email' placeholder='Username' required><br>
      <input type='password' name='user_password' placeholder='Password' required><br>
      <button type='submit'>Login</button>
</form>