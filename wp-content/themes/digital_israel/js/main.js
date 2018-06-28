
$( document ).ready(function() {

  $( function() {
    $( ".datepicker" ).datepicker();
  } );

  $('.datepicker-icon').click(function(){
        $(this).prev().datepicker("show");
  });

  $('.list-circle').click(function(){
	  	$('.list-circle').css("border-color" , "#c1c1c1");
        $(this).css("border-color" , "#19badf");
  });


  // var test = [name: "fields[size_of_authority]", value: "בינונית"];
  // console.log(test)

});

