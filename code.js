$(document).ready(function() {
  $("#q-box1").hide();
});

$(document).ready(function() {
  $("#q-drag-drop1").click(function() {
    $("#q-box1").show();
  });
});

$(function() {
 $('#q-drag-drop1').click(function(){
   $(".arrow").attr('src',"img/arrow.png");
 });
});


$(function() {
  // int i = 0;
  $( "#draggable2" ).draggable({ 
    revert: "invalid"
  });
  // Accept all to drag
  $( "#draggable2, #draggable-nonvalid" ).draggable({
  });
  // Accept just droppable class to drop
  $( "#droppable" ).droppable({
    accept: "#draggable2",
    tolerance: "fit",
    //activeClass: "ui-state-hover",
    //hoverClass: "ui-state-active",
    drop: function( event, ui ) {
      $( this )
        .addClass( "ui-state-highlight" )
        .find( "p" )
          .html( "Correct!" );
      i = 1;
      alert("Correto!!! +" + i + " xp");
      $( "#draggable2" ).draggable( 
        "disable"
      );
    }
    // out: function( event, ui ) {
    //   $(this)
    //     .find("p")
    //       .html("Tentar novamente?");
    //}
  });
});
