
    
$("#formulario").on("submit", function (event) {
    console.log('entroooo');        
        event.prevenDefault();
    var serializedData = $(this).serialize();
    console.log(serializedData);
        $.post("ej8.php",serializedData ,
            function(response){
        alert("Response: " + response);
    });
    });
