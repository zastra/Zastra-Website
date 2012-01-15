$('.contact_us_dialog').live('click', function(){
  $('#contact_us_dialog_content').dialog({
    title: 'Reach out to Zastra',
    modal: true,
    resizable: false,
    width: 700,
    height: 500,
    zIndex: 30000,
    buttons: [{
      text: 'Send',
      click: function(){
        var f = $('#contact_form');
        $.ajax({
          url: f.attr('action'),
          type: 'POST',
          data: f.serialize(),
          success: function(response){
            if(response == "SUCCESS"){
              $('#contact_us_dialog_content').html('<br/><br/><br/><br/><br/><br/><br/><br/><br/><center>Thank you for reaching out to us. If you have asked us a query, we will respond to you shortly.</center>');
            }
            $('#contact_us_dialog_content').dialog('option', 'buttons', [{
              text: 'Close',
              click: function(){
                $(this).dialog('destroy');
              }
            }]);
          }
        });
      }
    }, {
      text: 'Cancel',
      click: function(){
        $(this).dialog('destroy');
      }
    }]
  });
  
  return false;
});