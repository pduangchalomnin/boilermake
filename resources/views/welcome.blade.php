<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }


            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #map {
                  height: 400px;
                  width: 100%;
              }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    <a href="{{ url('/logout') }}">Logout</a>
                </div>
            @if(Auth::check())
                {{Auth::user()->given_name}} <img src="{{Auth::user()->image_url}}" alt="">
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <div style="width: 500px;height: 500px"><div id="map"></div></div>
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <script src="https://cdn.auth0.com/js/lock/10.9.1/lock.min.js"></script>
                <script>
                    var lock = new Auth0Lock('vkAYdxw31NEK0v2tCWP9yEGu16L8V8H9', 'rigstatus.auth0.com', {
                        auth: {
                            redirectUrl: 'http://104.131.42.15/auth0/callback/',
                            responseType: 'code',
                            params: {
                                scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
                            }
                        },
                        additionalSignUpFields: [
                            {
                                name: "name",
                                placeholder: "Enter your full name"
                            }]
                    });
                </script>
                <button onclick="lock.show();">Login</button>
                <script>
                    function initMap() {
                        var uluru = {lat: -25.363, lng: 131.044};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 4,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8NdM0BgGIIukS9Yp9N5L3qrO8A8FLPqQ&callback=initMap">
                </script>

            </div>
        </div>
    </body>
</html>
