<section id="contact_us_dialog_content" class="hide">
  <div class="help_text">
    Please feel free to contact us with your queries. We generally respond with 48 hours. Alternatively, you could also reach us through the contact information at the bottom of this page.
  </div>
  <div class="horoizontal_clip">
    <div class="container_16 form">
      <div class="clearfix">
        <div class="grid_3 label">
          <label>Name:</label>
        </div>
        <div class="grid_5 field">
          <div class="field_wrap">
            <input type="text" />
          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_3 label">
          <label>College:</label>
        </div>
        <div class="grid_5 field">
          <div class="field_wrap">
            <input type="text" />
          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_3 label">
          <label>Year of College:</label>
        </div>
        <div class="grid_5 field">
          <div class="field_wrap">
            <input type="text" />
          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_3 label">
          <label>Your Query:</label>
        </div>
        <div class="grid_5 field">
          <div class="field_wrap">
            <textarea cols="32" rows="5"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">

  $('.contact_us_dialog').click(function(){
    $('#contact_us_dialog_content').dialog({
      title: 'Reach out to Zastra',
      modal: true,
      resizable: false,
      width: 500,
      height: 425,
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
  });
  
</script>