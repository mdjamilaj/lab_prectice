$( "#autocomplete" ).autocomplete({

        minLength: 3,
        source: function( request, response ) {
        	// var id = $('#tagsid').val();
            $.ajax( {
              url: base_url +"users/test",
              dataType: "json",
              data: {
                term: request.term
              },
              autoFocus: true,
              success: function( data ) {

                // console.log(data)

                var ab=[];
                for (var i=0; i<data.suggestions.length; i++) {

                    ab.push({value:data.suggestions[i].name,id:data.suggestions[i].id})
                }
                // console.log(data)
                response(ab);
              }
            } );
          },
          autoFocus: true,
    });


    $('#autocomplete').on('autocompleteselect', function (e, ui) {

    	// console.log( "Selected: " + ui.item.value + " aka " + ui.item.id );
       $('#tagsname').html('You selected: ' + ui.item.value);
       $('#tagsid').val(ui.item.id);

       
    });



    $( "#autocomplete1" ).autocomplete({

      minLength: 3,
      source: function( request, response ) {
        // var id = $('#tagsid').val();
          $.ajax( {
            url: base_url +"users/data_table_search_search",
            dataType: "json",
            data: {
              term: request.term
            },
            autoFocus: true,
            success: function( data ) {

              // console.log(data)

              var ab=[];
              for (var i=0; i<data.suggestions.length; i++) {

                  ab.push({value:data.suggestions[i].name,id:data.suggestions[i].id})
              }
              // console.log(data)
              response(ab);
            }
          } );
        },
        autoFocus: true,
  });




    $('#autocomplete').on('autocompleteselect', function (e, ui) {

    	// console.log( "Selected: " + ui.item.value + " aka " + ui.item.id );
       $('#tagsname').html('You selected: ' + ui.item.value);
       $('#tagsid').val(ui.item.id);

       
    });






    $( "#name" ).autocomplete({
        source: function( request, response ) {
          // var id = $('#tagsid').val();
            $.ajax( {
              url: base_url +"users/search_name",
              dataType: "json",
              data: {
                name: request.term
              },
              success: function( data ) {

               // console.log(data)

                var ab=[];
                for (var i =0; i < data.suggestions.length; i++) {

                    ab.push({value:data.suggestions[i].name,id:data.suggestions[i].id})
                }
                // console.log(ab)
                response(ab);
              }
            } );
          },
    });





$( "#address" ).autocomplete({
        source: function( request, response ) {
          // var id = $('#tagsid').val();
            $.ajax( {
              url: base_url +"users/search_address",
              dataType: "json",
              data: {
                address: request.term
              },
              success: function( data ) {

                // console.log(data)

                var ab=[];
                for (var i =0; i < data.suggestions.length; i++) {

                    ab.push({value:data.suggestions[i].address,id:data.suggestions[i].id})
                }
                // console.log(ab)
                response(ab);
              }
            } );
          },
    });




$( "#contact" ).autocomplete({
        source: function( request, response ) {
          // var id = $('#tagsid').val();
            $.ajax( {
              url: base_url +"users/search_contact",
              dataType: "json",
              data: {
                contact: request.term
              },
              success: function( data ) {

                // console.log(data)

                var ab=[];
                for (var i =0; i < data.suggestions.length; i++) {

                    ab.push({value:data.suggestions[i].contact,id:data.suggestions[i].id})
                }
                // console.log(data)
                response(ab);
              }
            } );
          },
    });


$(document).ready(function() {
  //input check box redio
  $( function() {
    $("input[type='radio']").checkboxradio();
  } );
});