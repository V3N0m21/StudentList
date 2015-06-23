<?php include_once './views/main.php'; ?>

<form action="" method="get" name="go">
     <input type="text" class="form-control" placeholder="Введите имя студента здесь" value="<?= !empty($students) ? h($search) : '';?>" name="search" type="text" size="40">
</form>
<p><?= !empty($search) && !empty($students) ? "Показаны студенты соответствующие запросу '$search'" : ''; ?></p>
<?php if (empty($students)) : ?>
    <p class="text-warning"><?= "Студент с такими данными не найден в базе"?></p>
<?php else : ?> 
<table class="table table-striped">
<tr>
    <tr>
    <td><a href="<?=getSortingLink('name', $sort, $dir, $search)?>"><?=getArrow('name',$sort,$dir)?>Имя</a></td>
    <td><a href="<?=getSortingLink('surname', $sort, $dir, $search)?>"><?=getArrow('surname',$sort,$dir)?>Фамилия</td>
    <td><a href="<?=getSortingLink('sex', $sort, $dir, $search)?>"><?=getArrow('sex',$sort,$dir)?>Пол</td>
    <td><a href="<?=getSortingLink('groupNumber', $sort, $dir, $search)?>"><?=getArrow('groupNumber',$sort,$dir)?>Группа</td>
    <td><a href="<?=getSortingLink('mark', $sort, $dir, $search)?>"><?=getArrow('mark',$sort,$dir)?>Средний бал</td>
    <td><a href="<?=getSortingLink('local', $sort, $dir, $search)?>"><?=getArrow('local',$sort,$dir)?>Местный/Приезжий</td>
    <td><a href="<?=getSortingLink('dateBirth', $sort, $dir, $search)?>"><?=getArrow('dateBirth',$sort,$dir)?>Год рождения</td>
</tr>

<?php foreach ($students as $i => $student) : ?>
<tr>
            <td><?=h($student->name)?></td> 
            <td><?=h($student->surname) ?></td>
            <td><?=h($student->displaySex()) ?></td>
            <td><?=h($student->groupNumber) ?></td>
            <td><?=h($student->mark) ?></td>
            <td><?=h($student->displayLocal()) ?></td>
            <td><?=h($student->birthDate) ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

    <?php if(count($pages) !== 1) : ?>
     <div>
     <ul class="pagination">

    <?php foreach ($pages as $page) : ?>
   
        <li<?= $page == $current ? ' class ="active"' : "" ?>>
        <a href="?<?=h($paginator->pagesLinks($page, $sort, $dir, $search))?>"><?= h($page) ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php endif; ?>
<?php endif; ?>
