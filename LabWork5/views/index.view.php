<table class="table table-striped">
    <?php $i = 0; ?>
    <?php foreach($model['pages'] as $page): ?>
    <tr>
        <td><?=$i+1;  ?></td>
        <td><a href="<?= "5.$i" ?>.php"><?=$page?></a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>