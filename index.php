<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" charset="UTF-8" />
    <title>DEMOsite</title>
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
</head>
<link rel="icon" type="image/ico" href="img/favicon.ico">
<body>
<div class="watch-wrapper">
    <div id="screen-container">
        <div class="view" id="home">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 text-sm-right text-center">
            <textarea id="contentTxt" class="content-txt"></textarea>
        </div>
        <div class="col-md-6 text-sm-left text-center">
            <button id="addBtn" class="btn btn-danger">追加</button>
            <button id="autoAddBtn" class="btn btn-danger">自動追加</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div id="validate" class="alert alert-danger validate-alert"></div>
        </div>
    </div>
</div>


<div class="modal modal-color" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div id="modalCloseBtn" class="close"></div>

    <div class="container">
        <div class="card">
            <div class="header">
                <div class="hamburger-menu">
                    <div class="center"></div>
                </div>
                <div class="main">
                    <div id="profileImg" class="image">
                        <div class="hover">
                            <i class="fas fa-camera fa-2x"></i>
                        </div>
                    </div>
                    <h3 class="name">HIDEAKI</h3>
                    <h3 class="sub-name">@GOODRACING</h3>
                </div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="about-container">
                        <h3 class="title">About</h3>
                        <p id="profileDesc" class="text profile-desc">This page will be your profile.</p>
                    </div>
                    <div class="icons-container">
                        <a href="#" class="icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="buttons-wrap">
                        <div class="follow-wrap">
                            <a href="#" class="follow">Post</a>
                        </div>
                        <div class="share-wrap">
                            <a href="#" class="share">comment</a>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div>
                        <h3 class="number">91</h3>
                        <h3 class="number-title">Posts</h3>
                    </div>
                    <div>
                        <h3 class="number">2.4K</h3>
                        <h3 class="number-title">Following</h3>
                    </div>
                    <div>
                        <h3 class="number">4.7K</h3>
                        <h3 class="number-title">Followers</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- <script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script> -->
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/fastclick.js"></script>
<script type="text/javascript" src="scripts/all.min.js"></script>
<script type="text/javascript" src="scripts/app.js"></script>
</body>
</html>
