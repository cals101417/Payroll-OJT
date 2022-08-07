$(document).ready(function(){
    $("#rate, #workdays").keyup(function(){
    
    var total=0;
    var x = Number($("#rate").val());
    var y = Number($("#workdays").val());
    var total = x * y;
    
    $('#initialamount').val(total);
    
    });
    });