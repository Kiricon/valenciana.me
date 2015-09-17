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
