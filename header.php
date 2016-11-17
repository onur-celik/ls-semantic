<html>
    <head>
        <title>Logsign - Semantic-UI</title>
        <link rel="stylesheet" href="assets/semantic/semantic.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="assets/semantic/semantic.min.js"></script>
        <script>
            $(function(){
                
                $('.message .close').on('click', function() {
                    $(this).closest('.message').transition('fade');
                });

                $('.dropdown').dropdown();

                $('.ui.checkbox').checkbox();

                $('.ui.accordion').accordion();
            });
        </script>
    </head>
    <body>
        <?php if (!$_GET['hidecontainer']): ?>
        <div class="ui container">
        <?php endif; ?>
            
                
            
    
        
    