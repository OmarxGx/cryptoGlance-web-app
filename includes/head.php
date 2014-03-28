<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="favicon.png">
    
    <title>cryptoGlance - Dashboard</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HubSpot / messenger (https://github.com/HubSpot/messenger) styles -->
    <link href="css/messenger.css" rel="stylesheet">
    <link href="css/messenger-spinner.css" rel="stylesheet">
    <link href="css/messenger-theme-flat.css" rel="stylesheet">
    <!-- jQuery Slider styles -->
    <link href="css/slider.css" rel="stylesheet">
    <!-- Glyph Icon Font from WebHostingHub (http://www.webhostinghub.com/glyphs/) styles -->
    <link href="css/whhg.css" rel="stylesheet">
    <!-- jQuery PrettyCheckable by arthurgouveia (http://arthurgouveia.com/prettyCheckable/) styles -->
    <link href="css/prettyCheckable.css" rel="stylesheet">
    <!-- Custom cryptoGlance styles -->
    <link href="css/cryptoglance-base.css" rel="stylesheet">
      
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php
    if (isset($cryptoGlance)) {
        $settings = $cryptoGlance->getSettings();
        
    } else {
        $settings = array(
            'general' => array(
                'temps' => array(
                   'warning' => 75,            
                   'danger' => 85,            
                ),
                'updateTimes' => array(
                    'rig' => 2,
                    'pool' => 120,
                    'wallet' => 600,
                ),
            )
        );
    }
    ?>
    <script type="text/javascript">
        var CURRENT_VERSION = '<?php echo CURRENT_VERSION?>';
        var devHeatWarning = <?php echo $settings['general']['temps']['warning'] ?>;
        var devHeatDanger = <?php echo $settings['general']['temps']['danger'] ?>;
        var devHWWarning = 5;
        var rigUpdateTime = <?php echo $settings['general']['updateTimes']['rig'] ?>;
        var poolUpdateTime = <?php echo $settings['general']['updateTimes']['pool'] ?>;
        var walletUpdateTime = <?php echo $settings['general']['updateTimes']['wallet'] ?>;
    </script>     
</head>