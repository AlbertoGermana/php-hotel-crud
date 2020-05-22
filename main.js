$(document).ready(function(){
  $.ajax({
    url: 'getPagamenti.php',
    method: 'GET',
    success: function(data){
      for (var key of data) {
        $('#list').append('<li>' + key.status + ' ' + key.price + '</li>');
      }
    },
    error: function(err){

    }
  });
});
