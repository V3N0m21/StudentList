<table class="table">
<tr>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Пол</td>
    <td>Группа</td>
    <td>Средний бал</td>
    <td>Местный/Приезжий</td>
    <td>Год рождения</td>
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
</table>