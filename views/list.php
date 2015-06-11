<?php include_once './views/main.php'; ?>

<form action="" method="get" name="go">
     <input type="text" class="form-control" placeholder="Поиск среди студентов..." name="search" type="text" size="40">
</form>
<table class="table">
<tr>
    <tr>
    <td><a href="?page=list&amp;sort=name<?php if($sort =='name' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Имя</a></td>
    <td><a href="?page=list&amp;sort=surname<?php if($sort =='surname' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Фамилия</td>
    <td><a href="?page=list&amp;sort=sex<?php if($sort =='sex' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Пол</td>
    <td><a href="?page=list&amp;sort=groupNumber<?php if($sort =='groupNumber' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Группа</td>
    <td><a href="?page=list&amp;sort=mark<?php if($sort =='mark' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Средний бал</td>
    <td><a href="?page=list&amp;sort=local<?php if($sort =='local' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo $search?>">Местный/Приезжий</td>
    <td><a href="?page=list&amp;sort=dateBirth<?php if($sort =='dateBirth' && $dir =='desc') echo '&dir=asc'; ?>">Год рождения</td>
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
   
        <li><a href="index.php?current=<?php echo $page ?>&amp;sort=<?php echo $sort?>&amp;dir=<?php echo $dir?>&amp;search=<?php echo $search?>"><?php echo $page ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
</table>