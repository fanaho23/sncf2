        <?php

        foreach ($lesFormations as $formation)      
        {
            echo "<input type='radio' onclick='AfficherAgent(this.value)' name='formation' value='".$formation->code. "'>".$formation->intitule;?><br><?php
        }

        ?>   
