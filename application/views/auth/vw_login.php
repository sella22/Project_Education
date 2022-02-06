<link href="<?= base_url('assets3/') ?>./login.css" rel="stylesheet" />

<div class="login-page">
    <div class="form">
      <form class="login-form" method="post" action="<?= base_url('Auth');?>">
      <h2>Sign In</h2>
      <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control form-control-lg" placeholder="username" required="" autofocus="">
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
        
        <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control form-control-lg" placeholder="Password" required="">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        
        <button type="submit">login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>

<script src="<?= base_url('assets3/') ?>./login.js"></script>
