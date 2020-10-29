<?php 

$_datas = array('lastname' => 'Lesueur', 'age' => 25);
$_datas['firstname'] = array('Jonathan','Christian','Georges');

?>
<table>
    <tbody>
        <tr>
            <th>Nom :</th>
            <td><?= $_datas['lastname'] ?></td>
        </tr>
        <tr>
            <th>Prénom(s) :</th>
            <td><?= implode(', ', $_datas['firstname']) ?></td>
        </tr>
        <tr>
            <th>Âge :</th>
            <td><?= $_datas['age'] ?></td>
        </tr>
    </tbody>
</table>