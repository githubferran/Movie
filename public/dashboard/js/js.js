function route(element){
    
    var tag = document.getElementById("tagEliminar");
      
    tag.setAttribute("href", "http://gestion_de_peliculas.test/eliminar/"+element);

    $("#myModal").modal("show");

}

function eliminarCategoria(element){
    
    var tag = document.getElementById("tagEliminar");
      
    tag.setAttribute("href", "http://gestion_de_peliculas.test/eliminar-categoria/"+element);

    $("#myModal").modal("show");

}