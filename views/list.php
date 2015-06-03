<table class="table">
<tr>
    <td><a href="?page=list&sort=name<?php if($sort =='name' && $dir =='desc') echo '&dir=asc'; ?>">Имя</a></td>
    <td><a href="?page=list&sort=surname<?php if($sort =='surname' && $dir =='desc') echo '&dir=asc'; ?>">Фамилия</td>
    <td><a href="?page=list&sort=sex<?php if($sort =='sex' && $dir =='desc') echo '&dir=asc'; ?>">Пол</td>
    <td><a href="?page=list&sort=groupNumber<?php if($sort =='groupNumber' && $dir =='desc') echo '&dir=asc'; ?>">Группа</td>
    <td><a href="?page=list&sort=mark<?php if($sort =='mark' && $dir =='desc') echo '&dir=asc'; ?>">Средний бал</td>
    <td><a href="?page=list&sort=local<?php if($sort =='local' && $dir =='desc') echo '&dir=asc'; ?>">Местный/Приезжий</td>
    <td><a href="?page=list&sort=dateBirth<?php if($sort =='dateBirth' && $dir =='desc') echo '&dir=asc'; ?>">Год рождения</td>
</tr>
<?php for ($k = 0; $k < count($data); $k++): ?>
<tr>
            <td> <?=$data[$k]['Name'] ?></td>
            <td><?= $data[$k]['Surname'] ?></td>
            <td><?=$data[$k]['Sex'] ?></td>
            <td><?=$data[$k]['GroupNumber'] ?></td>
            <td><?=$data[$k]['Mark'] ?></td>
            <td><?=$data[$k]['Local'] ?></td>
            <td><?=$data[$k]['BirthDate'] ?></td>
        </tr>
    <?php endfor ?>
    <?php echo $text; ?>
</table>