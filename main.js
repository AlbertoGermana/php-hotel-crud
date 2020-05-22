$(document).ready(function(){
  $.ajax({
    url: 'getPagamenti.php',
    method: 'GET',
    success: function(data){
      for (var key of data) {
        $('#list').append('<tr><td>' + key.status + '</td><td>' + key.price + '</td></tr>');
      }
    },
    error: function(err){

    }
  });

  $.ajax({
    url: 'getGroupPagamenti.php',
    method: 'GET',
    success: function(data){
      for (var key of data) {
        $('#group').append('<tr><td>' + key.status + '</td><td>' + key.totals + '</td></tr>');
      }
    },
    error: function(err){

    }
  });
});
