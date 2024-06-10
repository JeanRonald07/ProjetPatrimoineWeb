
<!-- ----- début viewAllCompte -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>
        
        <h2 class="text-danger">Liste des comptes </h2>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr class = "table-success">
                    <th>client_nom</th>
                    <th>client_prenom</th>
                    <th>banque_label</th>
                    <th>banque_pays</th>
                    <th>compte_label</th>
                    <th>compte_montant</th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $compte) {
                    echo "<tr> 
                        <td>" . $compte['nom'] . "</td><td>" . $compte['prenom'] . "</td><td>" . $compte['banque_label'] . "</td><td>" . $compte['banque_pays'] . "</td><td>" . $compte['compte_label'] ."</td><td>" . $compte['montant'] . "</td></tr>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewAllCompte -->






