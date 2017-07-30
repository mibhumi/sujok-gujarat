<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Vali Admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Vali</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"></div>
            <div class="pull-left info">
              <p>John Doe</p>
              <p class="designation">Frontend Developer</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="bootstrap-componants.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                <li><a href="ui-font-awesome.html"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
              </ul>
            </li>
            <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Forms</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Form Componants</a></li>
                <li><a href="form-custom.html"><i class="fa fa-circle-o"></i> Custom Componants</a></li>
                <li><a href="form-samples.html"><i class="fa fa-circle-o"></i> Form Samples</a></li>
                <li><a href="form-notifications.html"><i class="fa fa-circle-o"></i> Form Notifications</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Tables</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="table-basic.html"><i class="fa fa-circle-o"></i> Basic Tables</a></li>
                <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Data Tables</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Login Page</a></li>
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> User Page</a></li>
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen Page</a></li>
                <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Error Page</a></li>
                <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Invoice Page</a></li>
                <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i> Calendar Page</a></li>
                <li><a href="page-mailbox.html"><i class="fa fa-circle-o"></i> Mailbox</a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"><i class="fa fa-share"></i><span>MultiLavel Menu</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i><span> Level One</span><i class="fa fa-angle-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="blank-page.html"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span> Level Two</span></a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
          <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>59</td>
                      <td>2012/08/06</td>
                      <td>$137,500</td>
                    </tr>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>55</td>
                      <td>2010/10/14</td>
                      <td>$327,900</td>
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>39</td>
                      <td>2009/09/15</td>
                      <td>$205,500</td>
                    </tr>
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>23</td>
                      <td>2008/12/13</td>
                      <td>$103,600</td>
                    </tr>
                    <tr>
                      <td>Jena Gaines</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>30</td>
                      <td>2008/12/19</td>
                      <td>$90,560</td>
                    </tr>
                    <tr>
                      <td>Quinn Flynn</td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2013/03/03</td>
                      <td>$342,000</td>
                    </tr>
                    <tr>
                      <td>Charde Marshall</td>
                      <td>Regional Director</td>
                      <td>San Francisco</td>
                      <td>36</td>
                      <td>2008/10/16</td>
                      <td>$470,600</td>
                    </tr>
                    <tr>
                      <td>Haley Kennedy</td>
                      <td>Senior Marketing Designer</td>
                      <td>London</td>
                      <td>43</td>
                      <td>2012/12/18</td>
                      <td>$313,500</td>
                    </tr>
                    <tr>
                      <td>Tatyana Fitzpatrick</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>19</td>
                      <td>2010/03/17</td>
                      <td>$385,750</td>
                    </tr>
                    <tr>
                      <td>Michael Silva</td>
                      <td>Marketing Designer</td>
                      <td>London</td>
                      <td>66</td>
                      <td>2012/11/27</td>
                      <td>$198,500</td>
                    </tr>
                    <tr>
                      <td>Paul Byrd</td>
                      <td>Chief Financial Officer (CFO)</td>
                      <td>New York</td>
                      <td>64</td>
                      <td>2010/06/09</td>
                      <td>$725,000</td>
                    </tr>
                    <tr>
                      <td>Gloria Little</td>
                      <td>Systems Administrator</td>
                      <td>New York</td>
                      <td>59</td>
                      <td>2009/04/10</td>
                      <td>$237,500</td>
                    </tr>
                    <tr>
                      <td>Bradley Greer</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>41</td>
                      <td>2012/10/13</td>
                      <td>$132,000</td>
                    </tr>
                    <tr>
                      <td>Dai Rios</td>
                      <td>Personnel Lead</td>
                      <td>Edinburgh</td>
                      <td>35</td>
                      <td>2012/09/26</td>
                      <td>$217,500</td>
                    </tr>
                    <tr>
                      <td>Jenette Caldwell</td>
                      <td>Development Lead</td>
                      <td>New York</td>
                      <td>30</td>
                      <td>2011/09/03</td>
                      <td>$345,000</td>
                    </tr>
                    <tr>
                      <td>Yuri Berry</td>
                      <td>Chief Marketing Officer (CMO)</td>
                      <td>New York</td>
                      <td>40</td>
                      <td>2009/06/25</td>
                      <td>$675,000</td>
                    </tr>
                    <tr>
                      <td>Caesar Vance</td>
                      <td>Pre-Sales Support</td>
                      <td>New York</td>
                      <td>21</td>
                      <td>2011/12/12</td>
                      <td>$106,450</td>
                    </tr>
                    <tr>
                      <td>Doris Wilder</td>
                      <td>Sales Assistant</td>
                      <td>Sidney</td>
                      <td>23</td>
                      <td>2010/09/20</td>
                      <td>$85,600</td>
                    </tr>
                    <tr>
                      <td>Angelica Ramos</td>
                      <td>Chief Executive Officer (CEO)</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2009/10/09</td>
                      <td>$1,200,000</td>
                    </tr>
                    <tr>
                      <td>Gavin Joyce</td>
                      <td>Developer</td>
                      <td>Edinburgh</td>
                      <td>42</td>
                      <td>2010/12/22</td>
                      <td>$92,575</td>
                    </tr>
                    <tr>
                      <td>Jennifer Chang</td>
                      <td>Regional Director</td>
                      <td>Singapore</td>
                      <td>28</td>
                      <td>2010/11/14</td>
                      <td>$357,650</td>
                    </tr>
                    <tr>
                      <td>Brenden Wagner</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>28</td>
                      <td>2011/06/07</td>
                      <td>$206,850</td>
                    </tr>
                    <tr>
                      <td>Fiona Green</td>
                      <td>Chief Operating Officer (COO)</td>
                      <td>San Francisco</td>
                      <td>48</td>
                      <td>2010/03/11</td>
                      <td>$850,000</td>
                    </tr>
                    <tr>
                      <td>Shou Itou</td>
                      <td>Regional Marketing</td>
                      <td>Tokyo</td>
                      <td>20</td>
                      <td>2011/08/14</td>
                      <td>$163,000</td>
                    </tr>
                    <tr>
                      <td>Michelle House</td>
                      <td>Integration Specialist</td>
                      <td>Sidney</td>
                      <td>37</td>
                      <td>2011/06/02</td>
                      <td>$95,400</td>
                    </tr>
                    <tr>
                      <td>Suki Burks</td>
                      <td>Developer</td>
                      <td>London</td>
                      <td>53</td>
                      <td>2009/10/22</td>
                      <td>$114,500</td>
                    </tr>
                    <tr>
                      <td>Prescott Bartlett</td>
                      <td>Technical Author</td>
                      <td>London</td>
                      <td>27</td>
                      <td>2011/05/07</td>
                      <td>$145,000</td>
                    </tr>
                    <tr>
                      <td>Gavin Cortez</td>
                      <td>Team Leader</td>
                      <td>San Francisco</td>
                      <td>22</td>
                      <td>2008/10/26</td>
                      <td>$235,500</td>
                    </tr>
                    <tr>
                      <td>Martena Mccray</td>
                      <td>Post-Sales support</td>
                      <td>Edinburgh</td>
                      <td>46</td>
                      <td>2011/03/09</td>
                      <td>$324,050</td>
                    </tr>
                    <tr>
                      <td>Unity Butler</td>
                      <td>Marketing Designer</td>
                      <td>San Francisco</td>
                      <td>47</td>
                      <td>2009/12/09</td>
                      <td>$85,675</td>
                    </tr>
                    <tr>
                      <td>Howard Hatfield</td>
                      <td>Office Manager</td>
                      <td>San Francisco</td>
                      <td>51</td>
                      <td>2008/12/16</td>
                      <td>$164,500</td>
                    </tr>
                    <tr>
                      <td>Hope Fuentes</td>
                      <td>Secretary</td>
                      <td>San Francisco</td>
                      <td>41</td>
                      <td>2010/02/12</td>
                      <td>$109,850</td>
                    </tr>
                    <tr>
                      <td>Vivian Harrell</td>
                      <td>Financial Controller</td>
                      <td>San Francisco</td>
                      <td>62</td>
                      <td>2009/02/14</td>
                      <td>$452,500</td>
                    </tr>
                    <tr>
                      <td>Timothy Mooney</td>
                      <td>Office Manager</td>
                      <td>London</td>
                      <td>37</td>
                      <td>2008/12/11</td>
                      <td>$136,200</td>
                    </tr>
                    <tr>
                      <td>Jackson Bradshaw</td>
                      <td>Director</td>
                      <td>New York</td>
                      <td>65</td>
                      <td>2008/09/26</td>
                      <td>$645,750</td>
                    </tr>
                    <tr>
                      <td>Olivia Liang</td>
                      <td>Support Engineer</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td>2011/02/03</td>
                      <td>$234,500</td>
                    </tr>
                    <tr>
                      <td>Bruno Nash</td>
                      <td>Software Engineer</td>
                      <td>London</td>
                      <td>38</td>
                      <td>2011/05/03</td>
                      <td>$163,500</td>
                    </tr>
                    <tr>
                      <td>Sakura Yamamoto</td>
                      <td>Support Engineer</td>
                      <td>Tokyo</td>
                      <td>37</td>
                      <td>2009/08/19</td>
                      <td>$139,575</td>
                    </tr>
                    <tr>
                      <td>Thor Walton</td>
                      <td>Developer</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2013/08/11</td>
                      <td>$98,540</td>
                    </tr>
                    <tr>
                      <td>Finn Camacho</td>
                      <td>Support Engineer</td>
                      <td>San Francisco</td>
                      <td>47</td>
                      <td>2009/07/07</td>
                      <td>$87,500</td>
                    </tr>
                    <tr>
                      <td>Serge Baldwin</td>
                      <td>Data Coordinator</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td>2012/04/09</td>
                      <td>$138,575</td>
                    </tr>
                    <tr>
                      <td>Zenaida Frank</td>
                      <td>Software Engineer</td>
                      <td>New York</td>
                      <td>63</td>
                      <td>2010/01/04</td>
                      <td>$125,250</td>
                    </tr>
                    <tr>
                      <td>Zorita Serrano</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>56</td>
                      <td>2012/06/01</td>
                      <td>$115,000</td>
                    </tr>
                    <tr>
                      <td>Jennifer Acosta</td>
                      <td>Junior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>43</td>
                      <td>2013/02/01</td>
                      <td>$75,650</td>
                    </tr>
                    <tr>
                      <td>Cara Stevens</td>
                      <td>Sales Assistant</td>
                      <td>New York</td>
                      <td>46</td>
                      <td>2011/12/06</td>
                      <td>$145,600</td>
                    </tr>
                    <tr>
                      <td>Hermione Butler</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2011/03/21</td>
                      <td>$356,250</td>
                    </tr>
                    <tr>
                      <td>Lael Greer</td>
                      <td>Systems Administrator</td>
                      <td>London</td>
                      <td>21</td>
                      <td>2009/02/27</td>
                      <td>$103,500</td>
                    </tr>
                    <tr>
                      <td>Jonas Alexander</td>
                      <td>Developer</td>
                      <td>San Francisco</td>
                      <td>30</td>
                      <td>2010/07/14</td>
                      <td>$86,500</td>
                    </tr>
                    <tr>
                      <td>Shad Decker</td>
                      <td>Regional Director</td>
                      <td>Edinburgh</td>
                      <td>51</td>
                      <td>2008/11/13</td>
                      <td>$183,000</td>
                    </tr>
                    <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                      <td>$183,000</td>
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>$112,000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<hr>
	
	<div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                	<div id="datatable-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="datatable-editable_length"><label>Show <select name="datatable-editable_length" aria-controls="datatable-editable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="datatable-editable_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="datatable-editable" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped add-edit-table table-bordered dataTable no-footer" id="datatable-editable" role="grid" aria-describedby="datatable-editable_info">
	                                    <thead>
	                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" style="width: 400px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" style="width: 421px;" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="datatable-editable" rowspan="1" colspan="1" style="width: 386px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 205px;" aria-label="Actions">Actions</th></tr>
	                                    </thead>
	                                    <tbody>
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                        
	                                    <tr class="gradeA odd" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Firefox 1.0</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA even" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Firefox 1.5</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA odd" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Firefox 2.0</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA even" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Firefox 3.0</td>
	                                            <td>Win 2k+ / OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA odd" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Camino 1.0</td>
	                                            <td>OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA even" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Camino 1.5</td>
	                                            <td>OSX.3+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA odd" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Netscape 7.2</td>
	                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA even" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Netscape Browser 8</td>
	                                            <td>Win 98SE+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA odd" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Netscape Navigator 9</td>
	                                            <td>Win 98+ / OSX.2+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr><tr class="gradeA even" role="row">
	                                            <td class="sorting_1">Gecko</td>
	                                            <td>Mozilla 1.0</td>
	                                            <td>Win 95+ / OSX.1+</td>
	                                            <td class="actions">
	                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
	                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
	                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
	                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
	                                            </td>
	                                        </tr></tbody>
	                                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="datatable-editable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable-editable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="datatable-editable" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="datatable-editable" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="datatable-editable" tabindex="0" id="datatable-editable_next"><a href="#">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>