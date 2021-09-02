

$("#provincia").change(function(event){
  $.get("distritosget/"+event.target.value+"", function(response,provincia){
      $("distrito").empty();
     for(i=0; i<response.length; i++){

     	$("#distrito").append("<option value='"+response[i].id+"'>"+response[i].nomedt+"</option>");
     }

  });

});
