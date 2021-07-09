$(()=> {
    $( "#datepicker" ).datepicker({
        changeMonth: true, 
        changeYear: true, 
        dateFormat: 'dd-mm-yy',
        minDate: 'today', // 0 days offset = today
        maxDate: new Date(new Date().setMonth(new Date().getMonth() + 2)),
    });
  } );

