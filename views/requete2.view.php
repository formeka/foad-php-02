<?php require 'partials/header.php' ?>
<section class="note">
    <table>
    <tr>
        <th>#</th>
        <th>Region</th>
        <th>Nombre de pays par region</th>
    </tr>
    
    <?php 
    $i=1;
    foreach ($regions as $region) : ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$region['name']?></td>
        <td><?=$region['nb_pays']?></td>
        </tr>
    <?php 
    $i = $i + 1;
    endforeach; ?>

    </table>

</section>


<?php require 'partials/footer.php' ?>