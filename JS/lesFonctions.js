function AfficherFormation()
    {
        $.ajax 
        (
            {
                type:"get",
                url:"index.php/CtrlSncf2/AfficherLesFormations",
                data:"numActivite="+$('#lstActivites').val(),
                success:function(data)
                {
                    $('#divFormations').empty();
                $('#divFormations').append(data);
 
                },
                error:function()
                {
                    alert('Erreur');
                }
            }
        );
    }