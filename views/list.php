<?php include_once './views/main.php'; ?>

<form action="" method="get" name="go">
     <input type="text" class="form-control" placeholder="Поиск среди студентов..." name="search" type="text" size="40">
</form>
<table class="table">
<tr>
    <tr>
    <td><a href="?page=list&sort=name<?php if($sort =='name' && $dir =='desc') echo '&dir=asc'; ?>">Имя</a></td>
    <td><a href="?page=list&sort=surname<?php if($sort =='surname' && $dir =='desc') echo '&dir=asc'; ?>">Фамилия</td>
    <td><a href="?page=list&sort=sex<?php if($sort =='sex' && $dir =='desc') echo '&dir=asc'; ?>">Пол</td>
    <td><a href="?page=list&sort=groupNumber<?php if($sort =='groupNumber' && $dir =='desc') echo '&dir=asc'; ?>">Группа</td>
    <td><a href="?page=list&sort=mark<?php if($sort =='mark' && $dir =='desc') echo '&dir=asc'; ?>">Средний бал</td>
    <td><a href="?page=list&sort=local<?php if($sort =='local' && $dir =='desc') echo '&dir=asc'; ?>">Местный/Приезжий</td>
    <td><a href="?page=list&sort=dateBirth<?php if($sort =='dateBirth' && $dir =='desc') echo '&dir=asc'; ?>">Год рождения</td>
</tr>


<?php foreach ($students as $i => $student) : ?>
<tr>
            <td> <?=$students[$i]->name?></td> 
            <td><?= $students[$i]->surname ?></td>
            <td><?=$students[$i]->sex ?></td>
            <td><?=$students[$i]->groupNumber ?></td>
            <td><?=$students[$i]->mark ?></td>
            <td><?=$students[$i]->local ?></td>
            <td><?=$students[$i]->birthDate ?></td>
        </tr>
    <?php endforeach; ?>
     <div class="pagination">
     <ul>

    <?php foreach ($pages as $page) : ?>
   
        <li><a href="index.php?current=<?php echo $page ?>&sort=<?php echo $sort?>&dir=<?php echo $dir?>"><?php echo $page ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
</table>