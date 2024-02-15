<?php require "header.php"; ?>
<div>
    <table>
        <tbody>
        <?php foreach ($labels as $label): ?>
            <tr>
                <td><?= $label['lab_id'] ?></td>
                <td><?= $label['lab_name'] ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>