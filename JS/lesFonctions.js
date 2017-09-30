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
                    alert('Erreur1');
                }
            }
        
        );
        
    }
    function AfficherAgent()
    {
        $.ajax( 
            {
                type:"get",
                url:"index.php/CtrlSncf2/AfficherLesAgents",
                data:"numFormation="+$('#divFormations').val(),
                success:function(data)
                {
                    $('#divAgents').empty();
                    $('#divAgents').append(data);
                },
                error:function()
                {
                    alert('Erreur2');
                }
                
                
            });
    }