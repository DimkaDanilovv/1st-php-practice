<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <h2>Добавить сотрудника<br> в отдел кадров</h2>
      <div class="column">
      <label>Имя<br><input type="text" name="name" placeholder="Иван" required></label>
   <label>Фамилия<br><input type="text" name="surname" placeholder="Иванов" required></label>
   <label>Отчество<br><input type="text" name="patronymic" placeholder="Иванович" required></label>
   <label>Логин<br><input type="text" name="login" placeholder="example" required></label>
   <label>Пароль<br><input type="password" name="password" placeholder="****" required></label>                      
   <label>Пол<br><select name="gender" id="gender">
      <option value="none">Я не знаю</option>
      <option value="man">Мужчина</option>
      <option value="woman">Женщина</option>
   </select></label>
   <label>Дата рождения<br><input type="date" name="date" required></label>
   <label>Адрес прописки<br><input type="text" name="visa" placeholder="Ул. Пушкина 54" required></label>
   <label>Должность<br><select name="gender" id="gender">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
   </select></label>
   <label>Подразделение<br><select name="gender" id="gender">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
   </select></label>
   <button>Добавить</button>
</div>
</div>
</div>
</form> 