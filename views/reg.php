<?php include_once './views/main.php'; ?>

<form action="profile.php" method="post">
Имя:<br> <input type="text" name="Name" value="<?=htmlspecialchars($student->name);?>">
<?php if (isset($validation->errors['name'])) {echo $validation->errors['name'];} ?><br>
Фамилия:<br> <input type="text" name="Surname" value="<?=htmlspecialchars($student->surname);?>">
<?php if (isset($validation->errors['surname'])) {echo $validation->errors['surname'];} ?><br>
Пол:<br>
<input type="radio" name="Sex" value="M" 
<?php echo (isset($student->sex) && $student->sex == 'M' ? "checked" : ""); ?>>Мужской<br>
<input type="radio" name="Sex" value="F"
<?php echo (isset($student->sex) && $student->sex == 'F' ? "checked" : ""); ?>>Женский<br><br>
Номер группы:<br> <input type="text" name="GroupNumber" value="<?=htmlspecialchars($student->groupNumber);?>">
<?php if (isset($validation->errors['groupNumber'])) {echo $validation->errors['groupNumber'];} ?><br>
e-mail:<br> <input type="email" name="Email" value="<?=htmlspecialchars($student->email);?>">
<?php if (isset($validation->errors['email'])) {echo $validation->errors['email'];} ?><br>
Оценка за ЕГЭ:<br> <input type="text" name="Mark" value="<?=htmlspecialchars($student->mark);?>">
<?php if (isset($validation->errors['mark'])) {echo $validation->errors['mark'];} ?><br>
Местный\Приезжий: <br><input type="radio" name="Local" value="L"
							 <?php echo (isset($student->local) && $student->local == 'L' ? "checked" : ""); ?>>  Местный  <br>
					  <input type="radio" name="Local" value="N"
					  <?php echo (isset($student->local) && $student->local == 'N' ? "checked" : "");?>>  Приезжий 
<br>Год рождения:<br> <input type="text" name="BirthDate" value="<?=htmlspecialchars($student->birthDate);?>">
<?php if (isset($validation->errors['birthDate'])) {echo $validation->errors['birthDate'];} ?><br>
<input type="hidden" name="token" value="<?= htmlspecialchars($token, ENT_QUOTES) ?>">
<?php if (!isset($user)) : ?>
	<input type="submit" name="submit" value="Ввести данные">
<?php else : ?>
	<input type="submit" name="edit" value="Редактировать мои данные">
<?php endif; ?>
</form>