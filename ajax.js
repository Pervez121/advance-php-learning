 function loadUser(id){
    $(".user-datail").fadeIn();

   // the ajex method

   $.ajax( {
      url: "user-details.php",
      data: {
         user_id : id
      },     
      type: "GET",
      success: function(result){
         $('.user-datail').html(result);
      } 

      }
   );
 }