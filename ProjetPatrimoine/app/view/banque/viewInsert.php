
<!-- ----- début viewInsert -->

<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?> 
        <h2 class="text-danger">Formulaire pour l'ajout d'une banque</h2>
        <form role="form" method='get' action='router1.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='banqueCreated'>        
                <label class='w-25' for="id"><b>Label : </b> </label>
                <br>
                <input type="text" name='label' size='60' class='border rounded-3'>
                <br>
                <br>
                <label class='w-25' for="id"> <b>Pays :</b> </label>
                <br>
                <input type="text" name='pays' size='60' class='border rounded-3'> <br/>         
            </div>
            <p/>
            <br/> 
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewInsert -->



