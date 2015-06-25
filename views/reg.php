<?php include_once './views/main.php'; ?>
<div class="container-fluid">
  <form class="form-horizontal" action="profile.php" method="post">
    <div class="form-group <?= !empty($validation->errors['name']) ? "has-error" : '' ?>">
  <label for="Name" class="control-label col-sm-2">
    Имя:
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="Name" name="Name" placeholder="Введите имя"
    value="
<?=h($student->name);?>
">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['name']) ? h($validation->errors['name']) : "" ?>
  
  </p>
  </div>
  
  <div class="form-group <?= !empty($validation->errors['surname']) ? "has-error" : '' ?>">
  <label for="Surname" class="control-label col-sm-2">
    Фамилия:
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Введите фамилию"
    value="<?=h($student->surname);?>">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['surname']) ? h($validation->errors['surname']) : "" ?>
  
  </p>
  </div>
  
  <label class="control-label col-sm-2">
	Пол:
  </label>
  <div class="cotrol-group col-sm-offset-2">
    <div class="radio">
      <label for="M">
        <input type="radio" name="Sex" id="M" value="<?= $student::GENDER_MALE ?>" 
  <?php echo ($student->sex == $student::GENDER_MALE ? "checked" : ""); ?>>
  Мужской
  </label>
  </div>
  <div class="radio">
    <label for="F">
      <input type="radio" name="Sex" id="F" value="<?= $student::GENDER_FEMALE ?>"
  <?php echo ($student->sex == $student::GENDER_FEMALE ? "checked" : ""); ?>
  >Женский
  </label>
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['sex']) ? h($validation->errors['sex']) : "" ?>
  
  </p>
  </div>
  <br>
  
  <div class="form-group 
<?= !empty($validation->errors['groupNumber']) ? "has-error" : '' ?>">
  <label for="GroupNumber" class="control-label col-sm-2">
    Номер группы:
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="GroupNumber" name="GroupNumber" placeholder="Введите номер группы"
    value="
<?=h($student->groupNumber);?>
">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['groupNumber']) ? h($validation->errors['groupNumber']) : "" ?>
  
  </p>
  </div>
  
  <div class="form-group 
<?= !empty($validation->errors['email']) ? "has-error" : '' ?>">
  <label for="Email" class="control-label col-sm-2">
    e-mail:
  </label>
  <div class="col-sm-3">
    <input type="email" class="form-control" id="Email" name="Email" placeholder="Введите адрес электронной почты"
    value="
<?=h($student->email);?>
">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['email']) ? h($validation->errors['email']) : "" ?>
  
  </p>
  </div>
  
  <div class="form-group 
<?= !empty($validation->errors['mark']) ? "has-error" : '' ?>
">
  <label for="Mark" class="control-label col-sm-2">
    Оценка за ЕГЭ:
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="Mark" name="Mark" placeholder="Укажите оценку за ЕГЭ"
    value="
<?=h($student->mark);?>">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['mark']) ? h($validation->errors['mark']) : "" ?>
  </p>
  
  </div>
  
  <label class="control-label col-sm-2">
	Местный\Приезжий:
  </label>
  <div class="cotrol-group col-sm-offset-2">
    <div class="radio">
      <label for="L">
        <input type="radio" name="Local" id="L" value="<?=$student::RESIDENCE_LOCAL ?>" 
  <?php echo ($student->local == $student::RESIDENCE_LOCAL ? "checked" : ""); ?>
  >Местный
  </label>
  </div>
  <div class="radio">
    <label for="N">
      <input type="radio" name="Local" id="N" value="<?=$student::RESIDENCE_NOT_LOCAL ?>"
  <?php echo ($student->local == $student::RESIDENCE_NOT_LOCAL ? "checked" : ""); ?>>Приезжий
  </label>
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['local']) ? h($validation->errors['local']) : "" ?>
  
  </p>
  </div>
  <br>
  <div class="form-group 
<?= !empty($validation->errors['birthDate']) ? "has-error" : '' ?>
">
  <label for="BirthDate" class="control-label col-sm-2">
    Год рождения:
  </label>
  <div class="col-sm-3">
    <input type="text" class="form-control" id="BirthDate" name="BirthDate" placeholder="19хх\20хх"
    value="
<?=h($student->birthDate);?>
">
  </div>
  <p class="text-danger">
	<?= !empty($validation->errors['birthDate']) ? h($validation->errors['birthDate']) : "" ?>
  </p>
  
  </div>
  <input type="hidden" name="token" value="
<?= htmlspecialchars($token, ENT_QUOTES) ?>
">
  <div class="form-group">
	<div class="col-sm-offset-2 col-sm-3">
      <?php if (!isset($user)) : ?>
      <input type="submit" name="submit" class="btn btn-primary" value="Ввести данные">
      <?php else : ?>
      <input type="submit" name="edit" class="btn btn-primary" value="Редактировать мои данные">
      <?php endif; ?>
  </div>
  </div>
  </form>
</div>