
$("#cliente_action").change(function(event){
  $.get("client_equip_get/"+event.target.value+"", function(response,cliente_action){
      $("#equip_action").empty();
     for(i=0; i<response.length; i++){

     	$("#equip_action").append("<option value='"+response[i].id+"'>"+response[i].nome+"</option>");
     }

  });

});
