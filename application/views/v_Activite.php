

<html>
    <head>
        <title>sncf2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        
        <h1><?php echo $activite ; ?></h1>
        <select id="lesActivites">
            <?php 
            foreach ($lesActivites as $act)
                {
                
        
                   echo "<option value='".$act->numero."'>".$act->libelle."</option>";        
        
            }
            ?>
        </select>
    </body>
</html>







