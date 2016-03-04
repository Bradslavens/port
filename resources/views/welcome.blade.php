<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Brad Slavens Portfolio</title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>

  </head>
  <body>

    <style type="text/css">

        * {
            text-align: center;
            margin: 0px;
            padding: 0px;
            font-family: 'Open Sans', sans-serif;
        }

        video {
            width: 100%;
            z-index: -100px;
            background-color: gray;
            opacity: .7;
        }

        #headshot {
            display: block;
            position: relative;
            top: -45px;
            height: 10vw;
            margin: 0 auto;
            box-shadow: 5px 5px 5px #888888;
            border-style: solid;
            border-width: 10px;
            border-color: white;
            border-radius: 40px 0;

        }

        #nav {
            background-color: rgba(0,0,0,.5);
            text-align: center;
            color: white;
            position: absolute;
            width: 100%;
            top: 250px;
            z-index: 100px;
        }

        #nav li {
            display: inline-block;
        }

        a {
            text-decoration: none;
            color: white;
            padding-right: 1vw;
            padding-left: 1vw;
        }


        a:hover {
            text-decoration: none;
            color: green;
            background-color: yellow;
            padding-right: 1vw;
            padding-left: 1vw;
        }

        #portfolio {
            margin: 20px 0;
            float: left;
            width: 100%;
        }

        h1  {
            padding-bottom: 20px;
        }

        .i_wrapper {
            float: left;
            position: relative;
            width: 33%;
        }

        .i_wrapper iframe {
            display: block;
            margin: 0 auto;
            overflow: hidden;
            height: 30vw;
            border-style: solid;
            border-width: 10px;
            border-color: white;
            border-radius: 40px 0;
        }

        .i_wrapper a {
            display: inline-block;
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: 0px;
            right: 0px;
            z-index: 100;
        }

        .i_wrapper a:hover{
            background-color: transparent;
        }

        .capt {
            text-align: center;
            padding-left: 100px;
            padding-right: 100px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        em {
            color: gray;
        }

    </style>

    <video preload="none" autoplay="" loop="">
          <source src="/vid/FullSizeRender.mp4" type="video/mp4">
            <!-- add sources  -->
          <!-- <source src="movie.ogg" type="video/ogg"> -->
          Your browser does not support the video tag.
    </video>
    <div id="nav">
    <img id="headshot" src="/img/bf.jpg">
    <h1>Bradley D. Slavens, Website Design</h1>
        <ul>
            <li><a href="#"> Home </a></li>
            <li><a href="#portfolio"> Portfolio </a></li>
            <li><a href="#"> Snippets </a></li>
            <li><a href="#"> About </a></li>
            <li><a href="#"> Quote </a></li>
            <li><a href="#"> Contact </a></li>
        </ul>
    </div>

    <section id="portfolio">
        <h1>Portfolio</h1>
        <div class="i_wrapper">
                <iframe scrolling="no" src="http://www.coefoto.com"></iframe>
                <a href="http://www.coefoto.com"></a>
                <article class="capt"><h2>Photo Service order/registration app</h2> 
                    <p><em>For this site I used bootstrap, jquery, mailchimp, php, and mysql. I set up user accounts, automated email responses and user verification. I also used recaptcha to check for robots.  I used the codeigniter php mvc framework.</em></p>
                </article>
        </div>
        <div class="i_wrapper">
                <iframe scrolling="no" src="http://www.slavensrealty.org"></iframe>
                <a href="http://www.slavensrealty.org"></a>
                <article class="capt"><h2>Sales Agent Recruiting App</h2> 
                    <p><em>For this site I used bootstrap, jquery, mailchimp, php, and mysql. I set up user accounts and automated email responses. I also used a honeypot to trick robots. I used the codeigniter php mvc framework.</em></p>
                </article>
        </div>
        <div class="i_wrapper">
                <iframe scrolling="no" src="http://tc.srsample.us"></iframe>
                <a href="http://tc.srsample.us"></a>
                <article class="capt"><h2>Real Estate Transaction Management App</h2> 
                    <p><em>For this site I used bootstrap, jquery, mailchimp, php, and mysql. I set up user accounts, automated email responses and user verification. I also used recaptcha to check for robots. This one includes complex mysql queries and automated email alerts based on due dates. It is a customer relationship sytem. I used the codeigniter php mvc framework.</em></p>
                </articl>
        </div>
    </section > <!-- portfolio -->


    <section id="get_quote" class="container">
        <div class="content">
            Call 619-253-0529 for a quote
        </div>
    </section> <!-- get_quote -->
    <span id="reload_form"></span>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->

  </body>
</html>

