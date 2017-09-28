        <?php

        foreach ($lesFormations as $formation)      
        {
            echo "<input type='radio' name='formation' value='".$formation->code. "'>".$formation->intitule;
        }

        ?>   
