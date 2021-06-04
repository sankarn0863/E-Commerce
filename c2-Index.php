<?php
// Start the session
session_start();
?>

<html>

<head>
    <title>DATA MANAGMENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="c2-Index.js"></script>
    <style>
    /********************************************************************/
    /*** PANEL PRIMARY ***/
    .with-nav-tabs.panel-primary .nav-tabs>li>a,
    .with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
        color: #fff;
    }

    .with-nav-tabs.panel-primary .nav-tabs>.open>a,
    .with-nav-tabs.panel-primary .nav-tabs>.open>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>.open>a:focus,
    .with-nav-tabs.panel-primary .nav-tabs>li>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>li>a:focus {
        color: #fff;
        background-color: #3071a9;
        border-color: transparent;
    }

    .with-nav-tabs.panel-primary .nav-tabs>li.active>a,
    .with-nav-tabs.panel-primary .nav-tabs>li.active>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>li.active>a:focus {
        color: #428bca;
        background-color: #fff;
        border-color: #428bca;
        border-bottom-color: transparent;
    }

    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu {
        background-color: #428bca;
        border-color: #3071a9;
    }

    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a {
        color: #fff;
    }

    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
        background-color: #3071a9;
    }

    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a,
    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
    .with-nav-tabs.panel-primary .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
        background-color: #4a9fe9;
    }

    .table-bordered td,
    th {
        word-break: break-all !important;
    }

    .create-record-form {
        display: none;
    }

    .create-record-form .col-lg-12 {
        margin: 20px 0px;
    }

    .align-dropdown {
        padding: 10px 0px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-13">
                <p>USER INTERACTIONS</p>
                <div class="col-lg-2 align-dropdown">
                    <select class="form-control user-level-access">
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="staff">Staff</option>
                        <option value="user">User</option>
                        <option value="guest">Guest</option>
                    </select>
                </div>
                <div class="col-lg-10">
                    <?php include("c2-dashboard.php")?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>