function AfficherFormation()
    {
        $.ajax 
        (
            {
                data:"data="+$('#lstCategories').select(),
                success:function($data)
                {
                    alert('Salut');
                },
                error:function($data)
                {
                    alert('Bye');
                }
            }
        );
    }