<table class="table">
<tr>
    <td><a href="?page=list&sort=name">Имя</a></td>
    <td><a href="?page=list&sort=surname">Фамилия</td>
    <td><a href="?page=list&sort=sex">Пол</td>
    <td><a href="?page=list&sort=groupNumber">Группа</td>
    <td><a href="?page=list&sort=mark">Средний бал</td>
    <td><a href="?page=list&sort=local">Местный/Приезжий</td>
    <td><a href="?page=list&sort=dateBirth">Год рождения</td>
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