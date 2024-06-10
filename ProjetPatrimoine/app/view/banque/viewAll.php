
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>
        
        <h2 class="text-danger">Liste des banques</h2>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr class = "table-success">
                    <th scope = "col">label</th>
                    <th scope = "col">pays</th>
                </tr>
            </thead>
            <tbody>
                <?php
                          
                foreach ($results as $element) {
                    printf("<tr><td>%s</td><td>%s</td></tr>",
                            $element->getLabel(), $element->getPays());
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewAll -->




