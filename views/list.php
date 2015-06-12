<?php include_once './views/main.php'; ?>

<form action="" method="get" name="go">
     <input type="text" class="form-control" placeholder="Поиск среди студентов..." name="search" type="text" size="40">
</form>
<?php if (empty($students)) : ?>
    <p><?= "Студент с такими данными не найден в базе"?></p>
<?php else : ?> 
<table class="table">
<tr>
    <tr>
    <td><a href="?sort=name<?php if($sort =='name' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Имя</a></td>
    <td><a href="?sort=surname<?php if($sort =='surname' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Фамилия</td>
    <td><a href="?sort=sex<?php if($sort =='sex' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Пол</td>
    <td><a href="?sort=groupNumber<?php if($sort =='groupNumber' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Группа</td>
    <td><a href="?sort=mark<?php if($sort =='mark' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Средний бал</td>
    <td><a href="?sort=local<?php if($sort =='local' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Местный/Приезжий</td>
    <td><a href="?sort=dateBirth<?php if($sort =='dateBirth' && $dir =='desc') echo '&dir=asc'; ?>&amp;search=<?php echo u($search)?>">Год рождения</td>
</tr>

<?php foreach ($students as $i => $student) : ?>
<tr>
            <td><?=h($student->name)?></td> 
            <td><?=h($student->surname) ?></td>
            <td><?=h($student->sex) ?></td>
            <td><?=h($student->groupNumber) ?></td>
            <td><?=h($student->mark) ?></td>
            <td><?=h($student->local) ?></td>
            <td><?=h($student->birthDate) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

    <?php if(count($pages) !== 1) : ?>
     <div class="pagination">
     <ul>

    <?php foreach ($pages as $page) : ?>
   
        <li<?= $page == $current ? ' class ="active"' : "" ?>>
        <a href="<?=$paginator->pagesLinks($page, $sort, $dir, $search)?>"><?= h($page) ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php endif; ?>
<?php endif; ?>
