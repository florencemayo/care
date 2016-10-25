
<!DOCTYPE html>
<html lang="en" ng-app="excelAnalyser">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>HospIS</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href=" <?php echo asset('assets/css/toolkit-light.css') ?>" rel="stylesheet">
    <link href="<?php echo asset('assets/css/application.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('libs/tree/angular-multi-select-tree-0.1.0.min.css') ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo asset("libs/spinkit/angular-spinkit.min.css") ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo asset("libs/angular-motion/dist/angular-motion.min.css") ?>">

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
    </style>
</head>

<!--body>
<!--div class="bw">
    <div class="fu">
        <div class="hc aps">
           <div ui-view></div>
        </div>
    </div>
</div-->


<body>
<body>
  <div class="bw">
    <div class="fu">
      <div class="ge aom">
        <nav class="aot">
          <div class="aon">
            <!--button class="amy amz aoo" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
              <span class="ct">Toggle nav</span>
            </button-->
            <a class="ol tu" href="../index.html">
              <h1>HospIS</h1>
            </a>
          </div>

          <div class="collapse and" id="nav-toggleable-sm">
            <ul class="nav of nav-stacked">
              <li class="tq">Dashboards</li>
              <li>
                <a href="./#patient">Find Patient</a>
              </li>
              <li>
                <a href="./#registerPatient">Register Patient</a>
              </li>
              <li>
                <a href="./#metadata">Metadata</a>
              </li>
              <li class="tq">Settings</li>
              <li >
                <a href="../docs/index.html">
                  Manage Users
                </a>
              </li>
            </ul>
            <hr class="rw aky">
          </div>
        </nav>
      </div>
      <div class="hc aps">
            <div class="apa">
              <div class="apb">
                <h4 class="apd">Dashboards/?</h4>
              </div>
            </div>

            <hr class="aky">
            <div ui-view></div>

        </div>
 </div>
</div>


</body>

<script src="<?php echo  asset('assets/js/jquery.min.js')  ?> "></script>
<script src="<?php echo  asset('assets/js/chart.js')  ?>  "></script>
<script src="<?php echo  asset('assets/js/tablesorter.min.js')  ?>  "></script>
<script src="<?php echo  asset('assets/js/toolkit.js')  ?>  "></script>
<script src="<?php echo  asset('assets/js/application.js')  ?>  "></script>

<script type="text/javascript" src="<?php echo  asset('js/angular.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-resource.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-route.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-sanitize.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo  asset('js/angular-animate.min.js') ?>"></script>

<script src="<?php echo  asset("libs/tree/angular-multi-select-tree-0.1.0.min.js") ?>"></script>
<script src="<?php echo  asset("libs/tree/angular-multi-select-tree-0.1.0.tpl.js") ?>"></script>
<script src="<?php echo  asset("libs/angular-bootstrap-multiselect/angular-bootstrap-multiselect.js") ?>"></script>
<script src="<?php echo  asset("libs/spinkit/angular-spinkit.min.js") ?>"></script>
<script src="<?php echo  asset("libs/ng-csv/ng-csv.js") ?>"></script>
<script src="<?php echo  asset("libs/moment/moment.min.js") ?>"></script>

<script type="text/javascript" src="<?php echo  asset("js/app.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/services.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/directives.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/controllers.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("js/filters.js") ?>"></script>

<!--controllers-->
<script type="text/javascript" src="<?php echo  asset("controllers/mainController.js") ?>"></script>

<script type="text/javascript" src="<?php echo  asset("controllers/patientController.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("controllers/metadataController.js") ?>"></script>

<script type="text/javascript" src="<?php echo  asset("controllers/login/authController.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("controllers/login/userController.js") ?>"></script>

<script src="<?php echo  asset("libs/pagination/dirPagination.js") ?>"></script>

<script src="<?php echo  asset("libs/angular-strap/angular-strap.js") ?>" data-semver="v2.3.7"></script>
<script src="<?php echo  asset("libs/angular-strap/angular-strap.tpl.js") ?>" data-semver="v2.3.7"></script>
<script src="<?php echo  asset("libs/angular-strap/angular-strap.docs.tpl.js") ?>" data-semver="v2.3.7"></script>
<script src="<?php echo  asset("libs/satellizer/dist/satellizer.js") ?>"></script>
<script src="<?php echo  asset("libs/angular-ui-router/release/angular-ui-router.js") ?>"></script>

<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/highcharts.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/exporting.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/highcharts-more.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/solid-gauge.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/Highcharts/js/modules/data.js") ?>"></script>
<script type="text/javascript" src="<?php echo  asset("libs/highcharts-ng/dist/highcharts-ng.min.js") ?>"></script>


<script>
    // execute/clear BS loaders for docs
    $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
</script>
<!--/body-->
</html>