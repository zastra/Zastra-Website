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
        alert('to save');
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