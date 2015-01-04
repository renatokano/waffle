/************************************************

  Global Variables

************************************************/

var i = 5;
var deg = 0;

/************************************************

  Document Ready Function

************************************************/

$(document).ready(function() {
  $("#q-box1").hide();
  $("#q-drag-drop1").click(function() {
    $("#q-box1").toggle("clip", 1200);
    if (deg === 0){
      $(".arrow").css('transform','rotate(' + 90 + 'deg)');
      deg = 1;
    } else {
      $(".arrow").css('transform','rotate(' + 0 + 'deg)');
      deg = 0;
    };
  });
});

/************************************************

  General Functions

************************************************/

function TestFinishedLesson(i){
  if (i === 6){
    alert("Exercício Finalizado!");
  }
}


/************************************************

  Functions activated by events

************************************************/

$(function() {
  // int i = 0;
  $( "#draggable2" ).draggable({ 
    revert: "invalid"
  });
  // Accept all to drag
  $( "#draggable2, #draggable-nonvalid" ).draggable({
      containment:"#q-box1",
      snap: true,
      snapMode: "inner"
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
            .html( "Parabéns!" );
      $( "#draggable2, #draggable-nonvalid" ).draggable( 
        "disable"
      );
      i++;
      $("#draggable2").addClass('correct');
      alert("Correto!!! +" + i + " xp");
      TestFinishedLesson(i);

    }
  });
});
