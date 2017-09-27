

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <h1><?php echo $activite ?></h1>
    
    <?php 
            foreach ($lesActivites as $act) {
                ?>
        
        <a href ="index.php/CtrlSncf2/AfficherLesFormations/<?php echo $act->numero; ?>"><?php echo $act->libelle; ?><br></a>
        <?php
            }
    
    
    ?>
    
    
    
    
    
    </body>
</html>







