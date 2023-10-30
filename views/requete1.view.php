<?php require 'partials/header.php' ?>
<section class="note">
    <?php //dd($nations) ?>
    <table>
    <tr>
        <th>#</th>
        <th>Countries</th>
        <th>Region</th>
        <th>Continent</th>
    </tr>
    
    <?php 
    $i=1;
    foreach ($nations as $nation) : ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$nation['country']?></td>
        <td><?=$nation['region']?></td>
        <td><?=$nation['continent']?></td>
        </tr>
    <?php 
    $i = $i + 1;
    endforeach; ?>

    </table>

</section>


<?php require 'partials/footer.php' ?>