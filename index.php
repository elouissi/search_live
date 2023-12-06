<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container" style="max-width: 50%" >
    <div>
        <h2>php ajax search live coding</h2>
    </div>
    <input type="text" name="" id="live_search" class="from-control" autocomplete="off" placeholder="search...." > 

    </div>
    <div id="searchresult" ></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" >
        //garantie que le code jquery a l'interieur de la fonction ne exute entant que le DOM ne charger
    
                // alert(input);

                if(input != ""){
                    $.ajax({ //permission de communicer de maniere asynchrone
                        url:"livesearch.php",
                        method:"POST",
                        data:{input:input},
                        //exucuton si la requete ajax a reussi
                        success:function(data){
                            $("#searchresult").html(data); 
                            
                        }

                    });
                }else{
                    $("#searchresult").css("display","none");
                }
            });


        });
        
    </script>
    
</body>
</html>