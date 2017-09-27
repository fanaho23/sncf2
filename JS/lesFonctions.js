function AfficherFormation()
    {
        $.ajax 
        (
            {
                data:"activite"+$('#lstActivites').select()
            }
        );
    }