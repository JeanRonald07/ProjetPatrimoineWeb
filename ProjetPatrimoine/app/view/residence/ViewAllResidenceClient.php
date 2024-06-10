
<!-- ----- début viewAllResidenceClient-->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentPatrimoineMenu2.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>
        
        <h2 class="text-danger">Liste des résidences avec leurs propriétaires</h2>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr class = "table-success">
                    <th>client_nom</th>
                    <th>client_prenom</th>
                    <th>residence_label</th>
                    <th>residence_ville</th>
                    <th>residence_prix</th>
                    


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($results as $residence) {
                    echo "<tr> 
                        <td>" . $residence['nom'] . "</td><td>" . $residence['prenom'] . "</td><td>" . $residence['residence_label'] . "</td><td>" . $residence['ville'] . "</td><td>" . $residence['prix'] ."</td></tr>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewAllResidenceClient -->

