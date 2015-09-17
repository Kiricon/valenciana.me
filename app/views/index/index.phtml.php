<!DOCTYPE html>
<html ng-app="app">

<head lang="en">
  <meta charset="UTF-8">
<title>Valenciana</title>
<meta name="author" content="Dominic Valenciana">
<meta name="description" content="The person website of Dominic Valenciana. This website displays works of Dominic Valencian as a developer and designer.">
<meta name="keywords" content="Dominic,Valenciana,kiricon,web,design,html,css,html5,development,developer">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="theme-color" content="#76717c">
<link rel="shortcut icon" href="img/favicon.ico" />
<link rel="icon" sizes="192x192" href="img/min/favicon.png">
<base href="/">
 <style>
    html {
        height: 100%;
        width: 100%;
        margin: 0px !important;
        overflow-y: hidden;
    }
    body {
        width: 100%;
        height: 100%;
        display: table;
        margin: 0px;
        background: url('http://www.mrwallpaper.com/wallpapers/paris-eiffel-tower-blurred-1366x768.jpg') no-repeat center center fixed !important;
        background-size: 100% 100% !important;
        background-color: black;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    .center-content {
        position:absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        display:table;
        margin: 20px auto 0px auto;
        text-align: center;
    }

    @media screen and (max-width: 600px) {
      .center-content {
        position: relative !important;
        top: 0% !important;
        left: 0% !important;
        transform: translate(0%, 0%) !important;
      }

        #nav-bar {
          width: 98% !important;
          margin: 0px 0px !important;
          padding: 1% !important;
          font-size: 1em !important;
        }
        html {
          overflow-y: auto !important;
        }

    }

    #title {
        position: relative;
        margin-bottom: 20px;
        font-family: 'open sans';
        width: 100%;
        text-align: center;
        font-size: 3.5em;
        text-transform: uppercase;
        font-weight: 300;
        color: white;
        line-height: 1.2;
        text-shadow: 0 0 0.07em white;
        padding-bottom: 2px;
    }

    #title::after{
        content: "";
        position: absolute;
        bottom: 2px;
        left: 0;
        height: 1px;
        width: 100%;
        background: white;
        background: -webkit-linear-gradient(left, transparent 0%,#fff 50%,transparent 100%);
        background: -moz-linear-gradient(left, transparent 0%,#fff 50%,transparent 100%);
        background: -o-linear-gradient(left, transparent 0%,#fff 50%,transparent 100%);
        background: linear-gradient(left, transparent 0%,#fff 50%,transparent 100%);
    }
    #explore {
        display: table;
        font-family: 'open sans';
        text-align: center;
        font-size: 1.5em;
        /* text-transform: uppercase; */
        font-weight: 300;
        color: rgba(255,255,255, 1);
        line-height: 1.2;
        text-shadow: 0 0 0.07em white;
        padding: 15px 25px;
        border-radius: 10px;
        border: solid 2px white;
        margin: 0px auto;
        position: relative;
        overflow:hidden;
        cursor: pointer;
    }
    #explore span {
        font-size: 32px;
        text-shadow: none;
    }
    #title-description {
        height: 100%;
        margin-bottom: 20px;
        font-family: 'open sans';
        width: 100%;
        text-align: center;
        font-size: 3.5em;
        text-transform: uppercase;
        font-weight: bold;
        color: white;
        line-height: 1.2;
        text-shadow: 0 0 0.07em white;

    }

    #social {
        magin-top: 5px;
        text-align: center;
        font-size: 32px;
        color: rgba(255,255,255, 1);
        opacity: 0.6;
    }

    #center-content img {
        height: 50%;
        width: 50%;
    }

    #overlay {
        position: absolute;
        height: 100%;
        width: 100%;
        opacity:0.6;
        background: #000;
    }

</style>

</head>

<body ng-controller="TabController as tab">
  <div id="background"></div>
  <div id="overlay"></div>
  <div id="center-content" class="center-content" style="">
    <div id="title"><a href="welcome">Dominic Valenciana</a></div>
    <a href="welcome">
      <img id="headshot" onload="this.style.opacity='1';" src="img/min/profile.jpg" style="border-radius:50%; box-shadow: 0 6px 20px 0 rgba(0,0,0,.19);">
    </a>
    <div id="title-description">
      <span class="rotate">Developer</span>
    </div>
    <div id="explore">
      <a ng-click="tab.transend()">
        <span class="helper"></span>Explore</a>
    </div>
    <div id="social">
    <span class="devicons devicons-codepen"></span>
    <span class="devicons devicons-stackoverflow"></span>
    <span class="devicons devicons-github_badge"></span>
    <span class="devicons devicons-bitbucket"></span>
    <span class="devicons devicons-npm"></span>
</div>
  </div>
  <div id="nav-bar" style="opacity: 0; border-radius: 10px !important; padding: 0px !important; margin-bottom: 20px;">
    <div id="nav-wrapper">
      <div class="nav-item" ng-class="{active:tab.isSet('/skills')}"><a href="skills">Skills</a></div>
      <div class="nav-item" ng-class="{active:tab.isSet('/experience')}"><a href="experience">Experience</a></div>
      <div class="nav-item" ng-class="{active:tab.isSet('/about')}"><a href="about">About</a></div>
    </div>
  </div>

  <div ng-view class="ngview"></div>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="components/ace/ace.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/app.js"></script>
  <!--<script src="js/app.min.js"></script> -->
  <script>
    $(".rotate").append(', Designer, Kiricon');
    $(".rotate").textrotator({
      animation: "flipUp",
      speed: 2000
    });
  </script>
  <link href="css/simpletextrotator.css" rel='stylesheet' type='text/css'>
  <link href="css/main.css" rel='stylesheet' type='text/css'>
  <link href="css/about.css" rel='stylesheet' type='text/css'>
  <link href="css/nav.css" rel='stylesheet' type='text/css'>
  <link href="css/experience.css" rel='stylesheet' type='text/css'>
  <link href="css/skills.css" rel='stylesheet' type='text/css'>
</body>

</html>
