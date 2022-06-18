$(document).ready(function () {
    
    var $FORM = $('#timesheet_user');
    $('.outer').hide();    
    
    $('.form-add').click(function () {
        
        var $clone = $('div.hide').clone(true).removeClass('hide');
        $FORM.find('div.inner').append($clone); 
        
      });

      $('.form-remove').click(function () {   
        $(this).closest('.add').remove();        
      });

      function ajaxChart(){
        $.ajax({
          type: "POST",
          url: "chart.php",
          data: {               
                  'datefrom': $('#date_from').val(),
                  'chart' : $chart,
                  'users' : $users_weekly,
                },
          dataType:"Json",
  
          success:function(result)
          {
            $('.pieDiv').show();
            $('.barDiv').hide();      
            google.charts.load('current', {
              'packages': ['corechart']
            }); 
  
            console.log(result); 
  
            google.charts.setOnLoadCallback(function(){
              drawBarChartWeekly(result);
            });
          }
        });
      }
});
