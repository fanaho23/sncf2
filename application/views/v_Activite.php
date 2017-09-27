

<html>
    <head>
        <title>sncf2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
            $.(
                function()
                {
                    $('#lesActivites').select()
                    {
                        function AfficherLesFormation();
                    }    
                }
            );
            
            
            
        </script>
    </head>
    <body>
        
        <h1><?php echo $activite ; ?></h1>
        <select id="lstActivites">
            <?php 
                foreach ($lesActivites as $act)
                    {
                       echo "<option id='opt1' value='".$act->numero."'>".$act->libelle."</option>";
                    }
            ?>
        </select><br>
        <select id ="lstFormations">
            <?php
                foreach($lesFormations as $formation)
                {
                    echo "<option value='".$formation->code."'>".$formation->intitule."</option>";
                } 
            ?>
        </select>
    </body>
</html>







