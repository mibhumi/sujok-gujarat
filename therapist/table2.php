<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- Plugin Css-->
        <link rel="stylesheet" href="../plugins/magnific-popup/css/magnific-popup.css">
        <link rel="stylesheet" href="../plugins/jquery-datatables-editable/datatables.css">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\core.css" rel="stylesheet" type="text/css">
        <link href="assets\css\components.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.css" rel="stylesheet" type="text/css">
        <link href="assets\css\pages.css" rel="stylesheet" type="text/css">
        <link href="assets\css\menu.css" rel="stylesheet" type="text/css">
        <link href="assets\css\responsive.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets\js\modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>


    <body class="fixed-left">

        <!-- Loader -->




                        <div class="panel">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                	<table class="table table-striped add-edit-table table-bordered" id="datatable-editable">
	                                    <thead>
	                                        <tr>
	                                            <th>Rendering engine</th>
	                                            <th>Browser</th>
	                                            <th>Platform(s)</th>
	                                            <th>Actions</th>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <tr class="gradeX">
	                                            <td>Trident</td>
	                                            <td>Internet
	                                                Explorer 4.0
	                                            </td>
	                                            <td>Win 95+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Trident</td>
	                                            <td>Internet
	                                                Explorer 5.0
	                                            </td>
	                                            <td>Win 95+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Trident</td>
	                                            <td>Internet
	                                                Explorer 5.5
	                                            </td>
	                                            <td>Win 95+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Trident</td>
	                                            <td>Internet
	                                                Explorer 6
	                                            </td>
	                                            <td>Win 98+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Trident</td>
	                                            <td>Internet Explorer 7</td>
	                                            <td>Win XP SP2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Trident</td>
	                                            <td>AOL browser (AOL desktop)</td>
	                                            <td>Win XP</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Firefox 1.0</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Firefox 1.5</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Firefox 2.0</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Firefox 3.0</td>
	                                            <td>Win 2k+ / OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Camino 1.0</td>
	                                            <td>OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Camino 1.5</td>
	                                            <td>OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Netscape 7.2</td>
	                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Netscape Browser 8</td>
	                                            <td>Win 98SE+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Netscape Navigator 9</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.0</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.1</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.2</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.3</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.4</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.5</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.6</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.7</td>
	                                            <td>Win 98+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Mozilla 1.8</td>
	                                            <td>Win 98+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Seamonkey 1.1</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Gecko</td>
	                                            <td>Epiphany 2.20</td>
	                                            <td>Gnome</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>Safari 1.2</td>
	                                            <td>OSX.3</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>Safari 1.3</td>
	                                            <td>OSX.3</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>Safari 2.0</td>
	                                            <td>OSX.4+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>Safari 3.0</td>
	                                            <td>OSX.4+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>OmniWeb 5.5</td>
	                                            <td>OSX.4+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>iPod Touch / iPhone</td>
	                                            <td>iPod</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Webkit</td>
	                                            <td>S60</td>
	                                            <td>S60</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 7.0</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 7.5</td>
	                                            <td>Win 95+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 8.0</td>
	                                            <td>Win 95+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 8.5</td>
	                                            <td>Win 95+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 9.0</td>
	                                            <td>Win 95+ / OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 9.2</td>
	                                            <td>Win 88+ / OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera 9.5</td>
	                                            <td>Win 88+ / OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Opera for Wii</td>
	                                            <td>Wii</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Nokia N800</td>
	                                            <td>N800</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Presto</td>
	                                            <td>Nintendo DS browser</td>
	                                            <td>Nintendo DS</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>KHTML</td>
	                                            <td>Konqureror 3.1</td>
	                                            <td>KDE 3.1</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>KHTML</td>
	                                            <td>Konqureror 3.3</td>
	                                            <td>KDE 3.3</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>KHTML</td>
	                                            <td>Konqureror 3.5</td>
	                                            <td>KDE 3.5</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeX">
	                                            <td>Tasman</td>
	                                            <td>Internet Explorer 4.5</td>
	                                            <td>Mac OS 8-9</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Tasman</td>
	                                            <td>Internet Explorer 5.1</td>
	                                            <td>Mac OS 7.6-9</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Tasman</td>
	                                            <td>Internet Explorer 5.2</td>
	                                            <td>Mac OS 8-X</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Misc</td>
	                                            <td>NetFront 3.1</td>
	                                            <td>Embedded devices</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeA">
	                                            <td>Misc</td>
	                                            <td>NetFront 3.4</td>
	                                            <td>Embedded devices</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeX">
	                                            <td>Misc</td>
	                                            <td>Dillo 0.8</td>
	                                            <td>Embedded devices</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeX">
	                                            <td>Misc</td>
	                                            <td>Links</td>
	                                            <td>Text only</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeX">
	                                            <td>Misc</td>
	                                            <td>Lynx</td>
	                                            <td>Text only</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Misc</td>
	                                            <td>IE Mobile</td>
	                                            <td>Windows Mobile 6</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeC">
	                                            <td>Misc</td>
	                                            <td>PSP browser</td>
	                                            <td>PSP</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                        <tr class="gradeU">
	                                            <td>Other browsers</td>
	                                            <td>All others</td>
	                                            <td>-</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr>
	                                    </tbody>
	                                </table>
                                </div>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->



                    </div> <!-- container -->

                </div> <!-- content -->

            
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets\js\jquery.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\detect.js"></script>
        <script src="assets\js\fastclick.js"></script>
        <script src="assets\js\jquery.blockUI.js"></script>
        <script src="assets\js\waves.js"></script>
        <script src="assets\js\jquery.slimscroll.js"></script>
        <script src="assets\js\jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Examples -->
	    <script src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	    <script src="../plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
	    <script src="../plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="../plugins/tiny-editable/mindmup-editabletable.js"></script>
	    <script src="../plugins/tiny-editable/numeric-input-example.js"></script>

        <!-- App js -->
        <script src="assets\js\jquery.core.js"></script>
        <script src="assets\js\jquery.app.js"></script>

        <script src="assets\pages\jquery.datatables.editable.init.js"></script>

	    <script>
			$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
		</script>

    </body>
</html>