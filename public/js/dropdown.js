
$("#provincia").change(function(event){
  $.get("distritosget/"+event.target.value+"", function(response,provincia){
      $("#distrito").empty();
     for(i=0; i<response.length; i++){

     	$("#distrito").append("<option value='"+response[i].id+"'>"+response[i].nomedt+"</option>");
     }

  });

});


$("#stk_idd").change(function(event){
  $.get("distritosget/"+event.target.value+"", function(response,stk_idd){
      $("#distrito").empty();
     for(i=0; i<response.length; i++){

     	$("#distrito").append("<option value='"+response[i].id+"'>"+response[i].nomedt+"</option>");
     }

  });

});



$("#cliente_action").change(function(event){
  $.get("client_equip_get/"+event.target.value+"", function(response,cliente_action){
      $("#equip_action").empty();
     for(i=0; i<response.length; i++){

     	$("#equip_action").append("<option value='"+response[i].id+"'>"+response[i].nr_serie+"</option>");
     }

  });

});



    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
    }

