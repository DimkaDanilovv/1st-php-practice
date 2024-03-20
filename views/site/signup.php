<h3><?= $message ?? ''; ?></h3>
<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <h2>Регистрация</h2>
      <div class="column">
      <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <label>Логин<br><input type="text" name="login" placeholder="example" required></label>
   <label>Пароль<br><input type="password" name="password" placeholder="****" required></label>                     
   <button>Зарегистрироваться</button>
</div>
</div>
</div>
</form> 