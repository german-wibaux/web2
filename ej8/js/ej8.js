
    
$("#formulario").on("submit", function (event) {
            
        event.preventDefault();
    let serializedData = $(this).serialize();
    console.log(serializedData);
        $.post("ej8.php",serializedData ,
            function(response){
        $("#data").html(response);
});
});
