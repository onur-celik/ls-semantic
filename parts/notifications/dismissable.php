<script>
    $(function(){
        $('.message .close').on('click', function() {
            $(this).closest('.message').transition('fade');
        });
    });
</script>
<div class="ui message transition visible">
  <i class="close icon"></i>
  <div class="header">
    Welcome back!
  </div>
  <p>This is a special notification which you can dismiss if you're bored with it.</p>
</div>