
<!-- ----- début viewCompte -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <?php
             // récupération du label de la banque pour son affichage
            $banquelabel = $_GET['label'];
            echo "<h2 class='text-danger'> Liste des comptes de cette banque : " . $banquelabel . "</h2>";
        
        
        ?>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr class = "table-success">
                    <th>Prénom</th>
                    <th>nom</th>
                    <th>banque</th>
                    <th>compte</th>
                    <th>montant</th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $compte) {
                    echo "<tr> 
                        <td>" . $compte['prenom'] . "</td><td>" . $compte['nom'] . "</td><td>" . $compte['banque_label'] . "</td><td>" . $compte['compte_label'] . "</td><td>" . $compte['montant'] ."</td></tr>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewCompte -->






