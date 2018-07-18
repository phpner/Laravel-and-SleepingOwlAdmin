<!doctype html>
<html lang="{{ app()->getLocale() }}">
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
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
        </style>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" ></script>
          <script src="{{ asset('/js/bootstrap.min.js') }}"  defer></script>       
         <link rel="stylesheet" href="{{ asset('/css/app.css') }}">   
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">admin</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>

                </div>
            </div>
        </div>

<style>
/*  style for кнопка */
.bigEntrance{
    -webkit-animation: bigEntrance 750ms linear both;
    -moz-animation-name: bigEntrance 750ms linear both;
    -o-animation-name: bigEntrance 750ms linear both;
    animation: bigEntrance 750ms linear both;

    visibility: visible !important;         
}


.phone-call_wave {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  border-radius: 50% !important;
}
.phone-call_wave__stroke {
  border: 2px solid #2ECC71;
  width: 90%;
  height: 90%;
  opacity: .9;
  -webkit-animation: wave-stroke 1.5s infinite cubic-bezier(.42, 0, .85, .75);
  -moz-animation: wave-stroke 1.5s infinite cubic-bezier(.42, 0, .85, .75);
  -o-animation: wave-stroke 1.5s infinite cubic-bezier(.42, 0, .85, .75);
  animation: wave-stroke 1.5s infinite cubic-bezier(.42, 0, .85, .75);
}
/*    Волна без заливки*/
@-webkit-keyframes wave-stroke {
  100% {
    width: 200%;
    height: 200%;
    border-color: transparent;
    opacity: 0;
  }
}
@-moz-keyframes wave-stroke {
  100% {
    width: 200%;
    height: 200%;
    border-color: transparent;
    opacity: 0;
  }
}
@-o-keyframes wave-stroke {
  100% {
    width: 200%;
    height: 200%;
    border-color: transparent;
    opacity: 0;
  }
}
@keyframes wave-stroke {
  100% {
    width: 200%;
    height: 200%;
    border-color: transparent;
    opacity: 0;
  }
}
.phpner_call-btn {
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8IURPQ1RZUEUgc3ZnICBQVUJMSUMgJy0vL1czQy8vRFREIFNWRyAxLjEvL0VOJyAgJ2h0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCc+CjxzdmcgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSIxMDBweCIgaWQ9IkxheWVyXzIiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSIxMDBweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgb3JpZ2luYWw9IiMyNkI5OUEiPgogIDxzdHlsZT4KICAgICBALXdlYmtpdC1rZXlmcmFtZXMgdHdpcmwtcGhvbmUgewogICAgICAwJSB7CgogICAgICB9CiAgICAgIDMwJSB7CiAgICAgICAgLXdlYmtpdC10cmFuc2Zvcm06IHJvdGF0ZSgtNmRlZykgdHJhbnNsYXRlWSgtMTBweCk7CiAgICAgIH0KICAgICAgNzUlIHsKICAgICAgICAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKDVkZWcpIHRyYW5zbGF0ZVkoLTIwcHgpOwogICAgICB9CiAgICAgIDEwMCUgewogICAgICAgIC13ZWJraXQtdHJhbnNmb3JtOiByb3RhdGUoMGRlZykgdHJhbnNsYXRlWSgwcHgpOwogICAgICB9CgogICAgfQogICAgQC1tb3ota2V5ZnJhbWVzIHR3aXJsLXBob25lIHsKICAgICAgMCUgewoKICAgICAgfQogICAgICAzMCUgewogICAgICAgIC1tb3otdHJhbnNmb3JtOiByb3RhdGUoLTZkZWcpIHRyYW5zbGF0ZVkoLTEwcHgpOwogICAgICB9CiAgICAgIDc1JSB7CiAgICAgICAgLW1vei10cmFuc2Zvcm06IHJvdGF0ZSg1ZGVnKSB0cmFuc2xhdGVZKC0yMHB4KTsKICAgICAgfQogICAgICAxMDAlIHsKICAgICAgICAtbW96LXRyYW5zZm9ybTogcm90YXRlKDBkZWcpIHRyYW5zbGF0ZVkoMHB4KTsKICAgICAgfQoKICAgIH0KICAgIEAtby1rZXlmcmFtZXMgdHdpcmwtcGhvbmUgewogICAgICAwJSB7CgogICAgICB9CiAgICAgIDMwJSB7CiAgICAgICAgLW8tdHJhbnNmb3JtOiByb3RhdGUoLTZkZWcpIHRyYW5zbGF0ZVkoLTEwcHgpOwogICAgICB9CiAgICAgIDc1JSB7CiAgICAgICAgLW8tdHJhbnNmb3JtOiByb3RhdGUoNWRlZykgdHJhbnNsYXRlWSgtMjBweCk7CiAgICAgIH0KICAgICAgMTAwJSB7CiAgICAgICAgLW8tdHJhbnNmb3JtOiByb3RhdGUoMGRlZykgdHJhbnNsYXRlWSgwcHgpOwogICAgICB9CgogICAgfQogICAgQGtleWZyYW1lcyB0d2lybC1waG9uZSB7CiAgICAgIDAlIHsKCiAgICAgIH0KICAgICAgMzAlIHsKICAgICAgICB0cmFuc2Zvcm06IHJvdGF0ZSgtNmRlZykgdHJhbnNsYXRlWSgtMTBweCk7CiAgICAgIH0KICAgICAgNzUlIHsKICAgICAgICB0cmFuc2Zvcm06IHJvdGF0ZSg1ZGVnKSB0cmFuc2xhdGVZKC0yMHB4KTsKICAgICAgfQogICAgICAxMDAlIHsKICAgICAgICB0cmFuc2Zvcm06IHJvdGF0ZSgwZGVnKSB0cmFuc2xhdGVZKDBweCk7CiAgICAgIH0KCiAgICB9CgogICAgI2xiX3Bob25lLWhlYWQgewogICAgICAtd2Via2l0LXRyYW5zZm9ybS1vcmlnaW46IDUwJSA1MCU7CiAgICAgIC13ZWJraXQtYW5pbWF0aW9uOiB0d2lybC1waG9uZSAwLjVzIGFsdGVybmF0ZSBpbmZpbml0ZSBsaW5lYXI7CgogICAgICAtbW96LXRyYW5zZm9ybS1vcmlnaW46IDUwJSA1MCU7CiAgICAgIC1tb3otYW5pbWF0aW9uOiB0d2lybC1waG9uZSAwLjVzIGFsdGVybmF0ZSBpbmZpbml0ZSBsaW5lYXI7CgogICAgICAtby10cmFuc2Zvcm0tb3JpZ2luOiA1MCUgNTAlOwogICAgICAtby1hbmltYXRpb246IHR3aXJsLXBob25lIDAuNXMgYWx0ZXJuYXRlIGluZmluaXRlIGxpbmVhcjsKCiAgICAgIHRyYW5zZm9ybS1vcmlnaW46IDUwJSA1MCU7CiAgICAgIGFuaW1hdGlvbjogdHdpcmwtcGhvbmUgMC41cyBhbHRlcm5hdGUgaW5maW5pdGUgbGluZWFyOwoKICAgIH0KICA8L3N0eWxlPgoJPGc+CgkJPGc+CgkJCTxwYXRoIGlkPSJmaWxsLWJhY2tncm91bmQiIGQ9Ik01MTIsMjU2YzAsMTQxLjM5My0xMTQuNjA3LDI1Ni0yNTYsMjU2Yy0zLjc0MiwwLTcuNDQyLTAuMDc3LTExLjE0Ni0wLjIzNCAgICAgQzEwOC42MjMsNTA1LjkzNSwwLDM5My42NSwwLDI1NkMwLDExNC42MTEsMTE0LjYxMSwwLDI1NiwwYzEzNS4zNjUsMCwyNDYuMTU0LDEwNS4wMzksMjU1LjM2OSwyMzguMDQyICAgICBDNTExLjgwNCwyNDMuOTg4LDUxMiwyNDkuOTc3LDUxMiwyNTZ6IiBmaWxsPSIjMkVDQzcxIi8+CgkJCTxwYXRoIGQ9Ik01MTIsMjU2YzAsMTQxLjM5My0xMTQuNjA3LDI1Ni0yNTYsMjU2Yy0zLjc0MiwwLTcuNDQyLTAuMDc3LTExLjE0Ni0wLjIzNCAgICAgYy0xNy4yMTEtMTIuMDEyLTExMS45MzEtMTEzLjA3My0xMTUuNjczLTExMy43MDRjLTQuMzMxLTAuNzUtNy43NTgtNC4wOTYtOC41ODQtOC4zODljLTIuODczLTE1LjQzOC00LjkyMy0zMC45OTYtNi4wNjUtNDYuNjMxICAgICBjLTAuMDM5LTAuMzE1LTAuMDc3LTAuNjMxLTAuMDc3LTAuOTg0aC0wLjE1OGMtMC4wODEsMC0wLjE1Ny0wLjAzOC0wLjIzOC0wLjExOWMtMC4wMzktMC4wNzctMC4wMzktMC4xOTYtMC4wMzktMC4yNzcgICAgIGM1LjMxNS0xNS40MzgsMTEuNzM5LTMxLjY2NSwxOC44NjYtNDguMzIybC00MC42MDQtNDIuMDYyYy0zLjUwOC0wLjcxMi02LjM4MS0yLjU2Mi04LjExNS01LjIzOWwtMS40NTgtMi4yNDZsMC4xNTgtMC4wMzggICAgIGwtMjUuOTkyLTQwLjk2MmMtMS41NzctMi40MDMtMS4zLTUuMTU3LTAuODI3LTcuMDg4YzEuNDE2LTUuMzk2LDUuOTQ2LTEwLjYzNSwxMi4xNjktMTMuOTQyICAgICBjNTkuMjczLTMxLjgyMywxMjYuMjI3LTQ4LjYsMTkzLjU3My00OC42YzY3LjM1MSwwLDEzNC4zMDQsMTYuNzc3LDE5My42MTYsNDguNmM1LjUxNSwyLjkxNSw5LjY4OCw3LjM2NSwxMS41NDIsMTIuMDkyICAgICBjMC4xNTcsMC4wNzcsMTkuODUsMTkuNjkyLDQ0LjQyMyw0NC4xODhDNTExLjgwNCwyNDMuOTg4LDUxMiwyNDkuOTc3LDUxMiwyNTZ6IiBvcGFjaXR5PSIwLjIiLz4KCQkJPGc+CgkJCQk8cGF0aCBkPSJNMzE5LjU1LDIyOS4xMzVoLTI1LjYxOXYtMzMuNTMxYzAtNC42MywzLjc1OC04LjM5Miw4LjM5Ni04LjM5Mmg4LjgzMWM0LjYzNCwwLDguMzkyLDMuNzYyLDguMzkyLDguMzkyICAgICAgVjIyOS4xMzV6IiBmaWxsPSIjMEQyMDM4Ii8+CgkJCQk8cGF0aCBkPSJNMjI1Ljk1LDIyOS4xMzVoLTI1LjYxNXYtMzMuNTMxYzAtNC42MywzLjc1Ny04LjM5Miw4LjM5Ni04LjM5Mmg4LjgyN2M0LjYzNSwwLDguMzkzLDMuNzYyLDguMzkzLDguMzkyICAgICAgVjIyOS4xMzV6IiBmaWxsPSIjMEQyMDM4Ii8+CgkJCQk8cGF0aCBkPSJNMjA4LjczLDE4Ny4yMTFjLTQuNjM5LDAtOC4zOTYsMy43NjItOC4zOTYsOC4zOTZ2MzMuNTI3aDEyLjc3NnYtNDEuOTIzSDIwOC43M3oiIGZpbGw9IiNGRkZGRkYiIG9wYWNpdHk9IjAuMSIvPgoJCQkJPHBhdGggZD0iTTMwMi4zMjcsMTg3LjIxMWMtNC42MzksMC04LjM5NiwzLjc2Mi04LjM5Niw4LjM5NnYzMy41MjdoMTIuNzc3di00MS45MjNIMzAyLjMyN3oiIGZpbGw9IiNGRkZGRkYiIG9wYWNpdHk9IjAuMSIvPgoJCQkJPHBhdGggZD0iTTExNC41MzEsMzQzLjA1OGMxLjE1NCwxNS42MDcsMy4xNzMsMzEuMTYxLDYuMDg0LDQ2LjYwMWMwLjgxMiw0LjMwOCw0LjIzMSw3LjY2MSw4LjU2Miw4LjM5MiAgICAgIGM5MC41NjIsMTUuMjk2LDE3My42ODgsMTUuMjY2LDI2NC4yODEtMC4wOTJjNC4zMjMtMC43MzEsNy43NDItNC4wNzcsOC41NTgtOC4zOTNjMi45MDctMTUuNDE1LDQuOTM1LTMwLjk2Miw2LjA4OC00Ni41NDYgICAgICBDMzEwLjQ2NiwzNTIuMjQyLDIxMi4xNzMsMzUyLjI1NCwxMTQuNTMxLDM0My4wNTh6IiBmaWxsPSIjMEQyMDM4Ii8+CgkJCQk8cGF0aCBkPSJNNDA4LjE2OSwzNDEuOTc3Yy0xMi4yNDYtMzUuNzQyLTMwLjE1Ny03NS40MTktNTAuMzkyLTExNi4xNzdjLTEuNTc3LTMuMTgxLTQuNjYyLTUuMzQyLTguMTg2LTUuNzU0ICAgICAgYy01OS44NDYtNi45NzctMTE3LjI0Mi02Ljk3Ny0xNzcuMDg4LDBjLTMuNTIzLDAuNDEyLTYuNjExLDIuNTgxLTguMTg4LDUuNzU0Yy0yMC4xNzcsNDAuNjM1LTM4LjAzNSw4MC4xOTYtNTAuMjc3LDExNS44NTEgICAgICBjLTAuMDMxLDAuMDkyLTAuMDIsMC4xOTUsMC4wMzUsMC4yNzJjMC4wNTQsMC4wODUsMC4xMzgsMC4xMzEsMC4yMzgsMC4xMzljMC4wNDYsMC4wMDQsMC4wODgsMC4wMDQsMC4xMzUsMC4wMDQgICAgICBjMC4wMjMsMC4zMzEsMC4wNTgsMC42NjEsMC4wODQsMC45OTJjOTcuNjQyLDkuMTk2LDE5NS45MzUsOS4xODUsMjkzLjU3My0wLjAzOGMwLjAyMy0wLjMxMiwwLjA1OC0wLjYxNSwwLjA4MS0wLjkyNCAgICAgIEM0MDguMTg4LDM0Mi4wNTQsNDA4LjE4MSwzNDIuMDEyLDQwOC4xNjksMzQxLjk3N3oiIGZpbGw9IiMwRDIwMzgiLz4KCQkJCTxnPgoJCQkJCTxwYXRoIGQ9Ik0xNzIuNTA0LDIyMC4wNDZjLTMuNTIzLDAuNDEyLTYuNjExLDIuNTgxLTguMTg4LDUuNzU0ICAgICAgIGMtMjAuMTc3LDQwLjYzNS0zOC4wMzUsODAuMTk2LTUwLjI3NywxMTUuODUxYy0wLjAzMSwwLjA5Mi0wLjAyLDAuMTk1LDAuMDM1LDAuMjcyYzAuMDU0LDAuMDg1LDAuMTM4LDAuMTMxLDAuMjM4LDAuMTM5ICAgICAgIGMwLjA0NiwwLjAwNCwwLjA4OCwwLjAwNCwwLjEzNSwwLjAwNGMwLjAyMywwLjMzMSwwLjA1OCwwLjY2MSwwLjA4NCwwLjk5MmM5LjkzOCwwLjkzMSwxOS44ODEsMS43NTQsMjkuODI3LDIuNDk2ICAgICAgIGMxMC4wNjUtMzUuNjM1LDI3LjU3Ny04OS41MTIsNDIuMDUtMTI2LjkzNUMxODEuNzc3LDIxOS4wODEsMTc3LjE1OCwyMTkuNTA0LDE3Mi41MDQsMjIwLjA0NnoiIGZpbGw9IiNGRkZGRkYiIG9wYWNpdHk9IjAuMiIvPgoJCQkJCTxwYXRoIGQ9Ik00MDguMTg1LDM0Mi4wOTZjMC4wMDQtMC4wNDItMC4wMDQtMC4wODQtMC4wMTYtMC4xMTljLTEyLjI0Ni0zNS43NDItMzAuMTU3LTc1LjQxOS01MC4zOTItMTE2LjE3NyAgICAgICBjLTEuNTc3LTMuMTgxLTQuNjYyLTUuMzQyLTguMTg2LTUuNzU0Yy00Ljk4OC0wLjU4LTkuOTQxLTEuMDQyLTE0Ljg5OS0xLjUyNmMxNC4xNzMsMzYuNDUzLDMzLjMwNCw5MC42MjMsNDQuMDIsMTI2Ljk2OSAgICAgICBjOS44MDQtMC43MzgsMTkuNi0xLjU0NiwyOS4zOTItMi40NjlDNDA4LjEyNywzNDIuNzA4LDQwOC4xNjEsMzQyLjQwNCw0MDguMTg1LDM0Mi4wOTZ6IiBmaWxsPSIjMEQyMDM4Ii8+CgkJCQkJPHBhdGggZD0iTTE4Ni40MDgsMjE4LjYxOWMtMTQuNDczLDM3LjQyMy0zMS45ODUsOTEuMy00Mi4wNSwxMjYuOTM1Yzc4LjAwOCw1Ljg0MywxNTYuMzUxLDUuODE5LDIzNC4zNTQtMC4wNjUgICAgICAgYy0xMC43MTYtMzYuMzQ2LTI5Ljg0Ny05MC41MTYtNDQuMDItMTI2Ljk2OUMyODQuODA4LDIxMy42NDMsMjM2LjMxMiwyMTMuNjgxLDE4Ni40MDgsMjE4LjYxOXoiIGZpbGw9IiMwRDIwMzgiLz4KCQkJCQk8Zz4KCQkJCQkJPHBhdGggZD0iTTM3OC4zODEsMzQ1LjUyYzAuMTExLDAuMDA0LDAuMjE5LDAuMDA4LDAuMzMxLDAuMDE2bC04LjY4OCw1Ni4wMzggICAgICAgIGM3Ljc2NS0xLjEwMSwxNS41NjItMi4yNzcsMjMuNDM1LTMuNjE1YzQuMzIzLTAuNzMxLDcuNzQyLTQuMDc3LDguNTU4LTguMzkzYzIuOTA3LTE1LjQxNSw0LjkzNS0zMC45NjIsNi4wODgtNDYuNTQ2ICAgICAgICBDMzk4LjIwNCwzNDMuOTU4LDM4OC4yOTYsMzQ0Ljc3LDM3OC4zODEsMzQ1LjUyeiIgZmlsbD0iIzBEMjAzOCIvPgoJCQkJCQk8cGF0aCBkPSJNMTE0LjUzMSwzNDMuMDU4YzEuMTU0LDE1LjYwNywzLjE3MywzMS4xNjEsNi4wODQsNDYuNjAxICAgICAgICBjMC44MTIsNC4zMDgsNC4yMzEsNy42NjEsOC41NjIsOC4zOTJjNy43MjcsMS4zMDgsMTUuMzg1LDIuNDYyLDIzLjAxNiwzLjUzOWwtNy44MjMtNTYuMDM1ICAgICAgICBDMTM0LjQxOSwzNDQuODEyLDEyNC40NjksMzQzLjk4OCwxMTQuNTMxLDM0My4wNTh6IiBmaWxsPSIjRkZGRkZGIiBvcGFjaXR5PSIwLjEiLz4KCQkJCQkJPHBhdGggZD0iTTM3OC4zODEsMzQ1LjUyYy03Ny44OTMsNS44NTQtMTU2LjExNSw1Ljg2OS0yMzQuMDEyLDAuMDM0bDcuODIzLDU2LjAzNSAgICAgICAgYzc0LjAwNCwxMC41LDE0My44MjMsMTAuNDkyLDIxNy44MzEtMC4wMTZsOC42ODgtNTYuMDM4QzM3OC42LDM0NS41MjcsMzc4LjQ5MiwzNDUuNTIzLDM3OC4zODEsMzQ1LjUyeiIgZmlsbD0iIzBEMjAzOCIvPgoJCQkJCQk8cGF0aCBkPSJNMzc4LjM4MSwzNDUuNTJjLTc3Ljg5Myw1Ljg1NC0xNTYuMTE1LDUuODY5LTIzNC4wMTIsMC4wMzRsNy44MjMsNTYuMDM1ICAgICAgICBjNzQuMDA0LDEwLjUsMTQzLjgyMywxMC40OTIsMjE3LjgzMS0wLjAxNmw4LjY4OC01Ni4wMzhDMzc4LjYsMzQ1LjUyNywzNzguNDkyLDM0NS41MjMsMzc4LjM4MSwzNDUuNTJ6IiBmaWxsPSIjRkZGRkZGIiBvcGFjaXR5PSIwLjA1Ii8+CgkJCQkJPC9nPgoJCQkJCTxwYXRoIGQ9Ik0xODYuNDA4LDIxOC42MTljLTE0LjQ3MywzNy40MjMtMzEuOTg1LDkxLjMtNDIuMDUsMTI2LjkzNSAgICAgICBjNzguMDA4LDUuODQzLDE1Ni4zNTEsNS44MTksMjM0LjM1NC0wLjA2NWMtMTAuNzE2LTM2LjM0Ni0yOS44NDctOTAuNTE2LTQ0LjAyLTEyNi45NjkgICAgICAgQzI4NC44MDgsMjEzLjY0MywyMzYuMzEyLDIxMy42ODEsMTg2LjQwOCwyMTguNjE5eiIgZmlsbD0iI0ZGRkZGRiIgb3BhY2l0eT0iMC4xIi8+CgkJCQk8L2c+CgkJCQk8cGF0aCBkPSJNMjYxLjA0MiwyMzQuNTU4Yy0zNy4xODUsMC02Ny4zMTUsMjQuOTgtNjcuMzE1LDU1LjgwOGMwLDMwLjgzMSwzMC4xMyw1NS44MTIsNjcuMzE1LDU1LjgxMiAgICAgIGMzNy4xODgsMCw2Ny4zMTktMjQuOTgsNjcuMzE5LTU1LjgxMkMzMjguMzYxLDI1OS41MzgsMjk4LjIzLDIzNC41NTgsMjYxLjA0MiwyMzQuNTU4eiIgZmlsbD0iIzBEMjAzOCIvPgoJCQkJPHBhdGggZD0iTTI2MS4wNDIsMjI4Ljc3N2MtMzcuMTg1LDAtNjcuMzE1LDI0Ljk4LTY3LjMxNSw1NS44MDRjMCwzMC44MywzMC4xMyw1NS44MTUsNjcuMzE1LDU1LjgxNSAgICAgIGMzNy4xODgsMCw2Ny4zMTktMjQuOTg1LDY3LjMxOS01NS44MTVDMzI4LjM2MSwyNTMuNzU4LDI5OC4yMywyMjguNzc3LDI2MS4wNDIsMjI4Ljc3N3oiIGZpbGw9IiNGRkZGRkYiLz4KCQkJCTxwYXRoIGQ9Ik0yNjEuMDQyLDI0OS4wNWMtMjMuNjczLDAtNDIuODU3LDE1LjkwOC00Mi44NTcsMzUuNTMxYzAsMTkuNjMxLDE5LjE4NSwzNS41MzQsNDIuODU3LDM1LjUzNCAgICAgIGMyMy42NzcsMCw0Mi44NjItMTUuOTAzLDQyLjg2Mi0zNS41MzRDMzAzLjkwNCwyNjQuOTU4LDI4NC43MTksMjQ5LjA1LDI2MS4wNDIsMjQ5LjA1eiIgZmlsbD0iI0RCREJEQiIvPgoJCQkJPGcgaWQ9ImxiX3Bob25lLWhlYWQiPgoJCQkJCTxwYXRoIGQ9Ik00NjYuODE1LDIwMi42NzdsLTI2LjAxMiw0MC45ODhsLTAuMDkyLDAuMTM5bC04MC4zNDctMzUuOThsMC4wNjktMC4yNTRsMi42MDctOS43ODEgICAgICBjMS4xOTItNC41NDIsMC41MTYtOS40NTctMS45MDctMTMuNDg0Yy0yLjQtNC4wMzEtNi4zODUtNi45NjEtMTAuOTQ2LTguMDYyYy0yOC45LTYuOTYxLTU4LjY0My0xMC40NzctODguMzgxLTEwLjQ3NyAgICAgIHMtNTkuNDgsMy41MTUtODguMzgxLDEwLjQ3N2MtNC41NjUsMS4xLTguNTQ2LDQuMDMxLTEwLjk0Miw4LjA2MmMtMi40MjcsNC4wMjctMy4xLDguOTQyLTEuOTExLDEzLjQ4NGwzLjU0MiwxMy4zNDMgICAgICBjMS43MTksNi44LTIuOTM1LDE0LjMtMTAuNjQyLDE2Ljk3N2MtMTYuNzk2LDUuNzczLTMzLjI4MSwxMi45NzQtNDguOTU0LDIxLjM4MWMtMi42ODEsMS40Mi01LjY1OCwyLjE2Ni04LjYxNSwyLjE2NiAgICAgIGMtNS4wMzUsMC05LjI2OS0yLjA3My0xMS42NDYtNS43MDhsLTI3LjM4OS00My4xNWMtMS41NTgtMi4zOTktMS4zLTUuMTY5LTAuODEyLTcuMTA3YzEuMzk2LTUuNCw1LjkzOC0xMC42MTUsMTIuMTU0LTEzLjk0NiAgICAgIGM1OS4yOTItMzEuNzkyLDEyNi4yNDYtNDguNTgxLDE5My41OTYtNDguNTgxYzY3LjM1MSwwLDEzNC4zMDQsMTYuNzg5LDE5My41OTcsNDguNTgxYzYuMjE5LDMuMzMxLDEwLjc2MSw4LjU0NiwxMi4xNTcsMTMuOTQ2ICAgICAgQzQ2OC4wNSwxOTcuNjI3LDQ2OC4zMDQsMjAwLjM5Niw0NjYuODE1LDIwMi42Nzd6IiBmaWxsPSIjMEQyMDM4Ii8+CgkJCQkJPHBhdGggZD0iTTU3LjYxOSwyMDMuOTczYzIuMTUtMy45NDEsNS44ODktNy41NDYsMTAuNTkyLTEwLjA2NCAgICAgIGM1OS4yOTItMzEuNzg5LDEyNi4yNDYtNDguNTgxLDE5My41OTYtNDguNTgxYzY3LjM1MSwwLDEzNC4zMDQsMTYuNzkyLDE5My41OTcsNDguNTgxYzQuNzAzLDIuNTE5LDguNDQxLDYuMTE5LDEwLjU5MiwxMC4wNjEgICAgICBsMC44MTktMS4yOTJjMS40ODgtMi4yOCwxLjIzNC01LjA1LDAuNzQ2LTYuOTg4Yy0xLjM5Ni01LjQtNS45MzgtMTAuNjE1LTEyLjE1Ny0xMy45NDYgICAgICBjLTU5LjI5My0zMS43OTItMTI2LjI0Ni00OC41ODEtMTkzLjU5Ny00OC41ODFjLTY3LjM1LDAtMTM0LjMwNCwxNi43ODktMTkzLjU5Niw0OC41ODEgICAgICBjLTYuMjE1LDMuMzMxLTEwLjc1Nyw4LjU0Ni0xMi4xNTQsMTMuOTQ2Yy0wLjQ4OCwxLjkzOC0wLjc0Niw0LjcwOCwwLjgxMiw3LjEwN0w1Ny42MTksMjAzLjk3M3oiIGZpbGw9IiNGRkZGRkYiIG9wYWNpdHk9IjAuMSIvPgoJCQkJCTxwYXRoIGQ9Ik0zNTkuNTIzLDIxMS4wMTJjLTEuNzM1LDYuOTIzLDIuOTI3LDE0LjQyNywxMC42LDE3LjA4MWMxNi44MTIsNS43OCwzMy4yOTYsMTIuOTc3LDQ4Ljk2NiwyMS4zNzYgICAgICBjMi42ODEsMS40MjgsNS42NjUsMi4xODYsOC42MzgsMi4xODZjNS4wMjMsMCw5LjI3LTIuMDgxLDExLjU2OS01LjYwMWwxLjQyMy0yLjI0MmwtODAuMzUtMzUuOTg0TDM1OS41MjMsMjExLjAxMnoiIGZpbGw9IiNGRkZGRkYiLz4KCQkJCQk8cGF0aCBkPSJNMTYzLjkxOSwyMTEuMDEyYzEuNzM4LDYuOTIzLTIuOTIzLDE0LjQyNy0xMC41OTYsMTcuMDgxYy0xNi44MTksNS43OC0zMy4zLDEyLjk3Ny00OC45NjksMjEuMzc2ICAgICAgYy0yLjY4MSwxLjQyOC01LjY2NiwyLjE4Ni04LjYzNSwyLjE4NmMtNS4wMjcsMC05LjI2OS0yLjA4MS0xMS41NjktNS42MDFsLTEuNDI3LTIuMjQybDgwLjM1NC0zNS45ODRMMTYzLjkxOSwyMTEuMDEyeiIgZmlsbD0iI0ZGRkZGRiIvPgoJCQkJPC9nPgoJCQkJPHBhdGggZD0iTTMxNC4wNzcsMjk5LjQ1Yy0yLjA3My0xLjcxNi01LjEzNS0xLjYzMS03LjA3MywwLjMwOGMtMS45NDIsMS45NDItMi4wMjcsNS0wLjMwOCw3LjA2OSAgICAgIGMwLjE1MywwLjI2MiwxMS41NzMsMTUuOTY5LDExLjk2NSwxNi4zNjFjMy4yNTQsMy4yNTQsOC41MjMsMy4yNTQsMTEuNzc3LDAuMDA4YzMuMjU0LTMuMjU4LDMuMjU0LTguNTI3LTAuMDA0LTExLjc4NSAgICAgIEMzMzAuMDQyLDMxMS4wMiwzMTQuMzM5LDI5OS42MDQsMzE0LjA3NywyOTkuNDV6IiBmaWxsPSIjRTY0RjMwIi8+CgkJCQk8Zz4KCQkJCQk8cmVjdCBmaWxsPSIjRUZFQ0UzIiBoZWlnaHQ9IjEzLjE3OCIgd2lkdGg9IjM0LjkwNCIgeD0iMjIzLjYwNyIgeT0iMzczLjEwNCIvPgoJCQkJCTxyZWN0IGZpbGw9IiNGRkZGRkYiIGhlaWdodD0iMTMuMTc4IiB3aWR0aD0iMzUuNDE5IiB4PSIyNTguNTEyIiB5PSIzNzMuMTA0Ii8+CgkJCQk8L2c+CgkJCQk8cG9seWdvbiBvcGFjaXR5PSIwLjIiIHBvaW50cz0iMjI2LjY1LDM3Ni4xNDYgMjYxLjU1NCwzNzYuMTQ2IDI5My45MzEsMzc2LjE0NiAyOTMuOTMxLDM3My4xMDQgMjU4LjUxMiwzNzMuMTA0ICAgICAgIDIyMy42MDcsMzczLjEwNCAyMjMuNjA3LDM4Ni4yODEgMjI2LjY1LDM4Ni4yODEgICAgICIvPgoJCQk8L2c+CgkJPC9nPgoJPC9nPgo8L3N2Zz4=) no-repeat scroll center center transparent!important;
    background-size: contain!important;
    width: 80px;
    height: 80px;
    opacity: 0.5;
    z-index: 100000;
    cursor: pointer;

    visibility: hidden;

    -moz-transition-duration: 1s;
    -o-transition-duration: 1s;
    -webkit-transition-duration: 1s;
    transition-duration: 1s;
}
.phpner_call-btn:hover {
    opacity: 1!important;
}

/* tooltip */
.phpner_button_tooltip--container {
    font-family: 'Open Sans', sans-serif !important;
    top: 50%!important;
    transform: translateY(-50%)!important;

    bottom: 0!important;
    display: table!important;

    position: absolute!important;

    z-index: 501!important;
}
.phpner_button_tooltip--container.phpner_button_tooltip--left {
    right: auto!important;
    left: -206px!important;
}
.phpner_button_tooltip--container.phpner_button_tooltip--right {
    right: -206px!important;
    left: auto!important;
}
.phpner_button_tooltip {
    font-size: 13px!important;

    line-height: normal!important;
    
    width: 190px!important;
    height: auto!important;
    min-height: 54px!important;

    padding: 10px!important;
    text-align: left!important;
    vertical-align: middle!important;
    opacity: 0!important; 
    border-radius: 5px!important;
    background: rgba(0,0,0,.8)!important;
    box-shadow: 0 1px 3px rgba(0,0,0,.2)!important;

    cursor: pointer!important;
    outline: 0!important;

    box-sizing: border-box!important;
    
    font-weight: 100;
    -webkit-font-smoothing: subpixel-antialiased;
}
.phpner_button_tooltip.phpner_button_tooltip--show {
    opacity: 1!important;
    display: table!important;
    -webkit-animation: phpner-tooltip-animation 1000ms linear both;
    animation: phpner-tooltip-animation 1000ms linear both;
}
.phpner_button_tooltip.phpner_button_tooltip--show.phpner_button_tooltip--alert {
    opacity: 1!important;
    display: table!important;
    -webkit-animation: phpner-tooltip-animation-alert 3800ms linear infinite both;
    animation: phpner-tooltip-animation-alert 3800ms linear infinite both;
}
.phpner_button_tooltip.phpner_button_tooltip--hide {
    opacity: 0!important;
    display: none!important;
    -webkit-animation:none;
    animation: none;
}
#phpner_button-call:hover .phpner_button_tooltip.phpner_button_tooltip--hide.phpner_button_tooltip--hover {
    opacity: .95!important;
    display: table!important;
    transition: all 0.5s ease!important;
}
#phpner_button-call:hover .phpner_button_tooltip.phpner_button_tooltip--hide.phpner_button_tooltip--hover .phpner_button_tooltip--close {
    display: none!important;
}
#phpner_button-call:hover .phpner_button_tooltip.phpner_button_tooltip--alert {
    opacity: 1!important;
    display: table!important;
    -webkit-animation: none;
    animation: none;
}
.phpner_button_tooltip--text {
    font-size: 13px!important;
    font-weight: 100;
    -webkit-font-smoothing: subpixel-antialiased;
    line-height: 1.3em!important;
    color: #fff!important;
    display: table-cell!important;
    vertical-align: middle!important;
    word-break: break-word;
    text-overflow: ellipsis;
}
.phpner_button_tooltip--close {
    transition: all 1s!important;

    color: #000!important;
    font-size: 15px!important;
    font-weight: 300!important;
    line-height: 40px!important;
    position: absolute!important;
    opacity: .6!important;
    top: -30px!important;
    right: -10px!important;
}
.phpner_button_tooltip::before {
    top: 50%!important;
    transform: translateY(-50%)!important;
    right: -16px!important;
    bottom: auto!important;
    left: auto!important;
    border-top-color: transparent!important;
    border-right-color: transparent!important;
    border-bottom-color: transparent!important;
    border-left-color: rgba(0,0,0,.8)!important;

    margin: 0!important;
    border-width: 8px!important;
    border-style: solid!important;
    border-top-color: transparent!important;
    border-bottom-color: transparent!important;

    position: absolute!important;
    z-index: 500!important;
    content: ''!important;
    background: 0 0!important;

    box-sizing: border-box!important;
}
.phpner_button_tooltip::before {
    top: 50%!important;
    transform: translateY(-50%)!important;
    bottom: auto!important;
    border-top-color: transparent!important;
    border-bottom-color: transparent!important;

    margin: 0!important;
    border-width: 8px!important;
    border-style: solid!important;
    border-top-color: transparent!important;
    border-bottom-color: transparent!important;

    position: absolute!important;
    z-index: 500!important;
    content: ''!important;
    background: 0 0!important;

    box-sizing: border-box!important;
}
/* end style for кнопка */

/* style for form */
    .modal-content .phpner_h1, .modal-content .phpner_h1 > span {
        font-size: 24pt !important;
        line-height: 30px !important;
        margin-top: 0px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
        margin-bottom: 10px !important;
        padding: 0px !important;
    }
    .modal-content .phpner_h2, .modal-content .phpner_h2 > span {
        font-size: 18pt !important;
        line-height: 30px !important;
        margin-top: 0px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
        padding: 0px !important;
    }
    .modal-content .phpner_h3, .modal-content .phpner_h3 > span {
        font-size: 25px !important;
        line-height: 30px !important;
        margin-top: 0px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;
        padding: 0px !important;
    }
    .modal-content .phpner_h1,
    .modal-content .phpner_h2,
    .modal-content .phpner_h3 {
        text-align: center !important;
    }

      .modal-content .phpner_input {
        outline: none;
        display: inline-block !important;
        margin-left: 0 !important;
        -webkit-border-radius: 8px !important;
        -moz-border-radius: 8px !important;
        -ms-border-radius: 8px !important;
        -o-border-radius: 8px !important;
        border-radius: 8px !important;
        padding: 6px 15px !important;
        font-size: 18px !important;
        color: #333 !important;
        font-style: italic !important;
        font-weight: 100 !important;
        border: 4px solid #ccc !important;
        margin: 0 auto !important;
        background-color: #fff !important;

        height: 38px !important;
        width: 210px !important;
        top: 2px !important;
        position: relative !important;
        margin-right: 5px !important;
        box-sizing: content-box !important;

        -webkit-writing-mode: initial !important;
        vertical-align: initial !important;
    }
     .modal-content .phpner_input:-moz-placeholder {
        color: #c9c9c9 !important;
    }
     .modal-content .phpner_input::-webkit-input-placeholder {
        color: #c9c9c9 !important;
    }
          .modal-content  .phpner_button {
        display: initial;
        position: relative !important;
        color: white !important;
        text-decoration: none !important;
        background-color: #424242 !important;
        font-size: 24px !important;
        font-weight: normal !important;
        padding: 0 20px 0 20px !important;
        border: 0 !important;
        -webkit-border-radius: 8px !important;
        -moz-border-radius: 8px !important;
        -ms-border-radius: 8px !important;
        -o-border-radius: 8px !important;
        border-radius: 8px !important;
        -webkit-box-shadow: 0px 9px 0px #333, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;
        -moz-box-shadow: 0px 9px 0px #333, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;
        box-shadow: 0px 9px 0px #333, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;
        margin: 10px auto !important;
        text-align: center !important;
        cursor: pointer !important;
        width: 245px !important;
        height: 50px !important;
        float: initial !important;
        vertical-align: initial !important;
        text-transform: initial !important;
        text-overflow: initial !important;
        transition: initial !important;
        white-space: initial !important;
        letter-spacing: initial !important;
        line-height: initial !important;
        overflow: initial !important;
        left: initial !important;
        transform: initial !important;
    }
  .modal-content  .phpner_button:active {
        -webkit-box-shadow: 0px 3px 0px #333, 0px 3px 6px rgba(0, 0, 0, 0.9) !important;
        -moz-box-shadow: 0px 3px 0px #333, 0px 3px 6px rgba(0, 0, 0, 0.9) !important;
        box-shadow: 0px 3px 0px #333, 0px 3px 6px rgba(0, 0, 0, 0.9) !important;
        position: relative !important;
        top: 6px !important;
    }
    .modal-content .phpner_button {
        outline: none;
        background-color: #e74c3c !important;background: #e74c3c !important;-webkit-box-shadow: 0px 9px 0px #db4839, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;-moz-box-shadow: 0px 9px 0px #d04436, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;box-shadow: 0px 9px 0px #c64133, 0px 9px 25px rgba(0, 0, 0, 0.7) !important;}#phpner_widget-root .phpner_wrapper-bg {background-color: rgba(46,16,12,0.7) !important;background: rgba(46,16,12,0.7) !important;}
.modal-content .phpner_form {
    text-align: center;
}
.modal-dialog{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%)!important;
}
/* end style for form */
</style>


   <!--Model-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>
                <div class="modal-body">
                    <div class="phpner_widget-container">
                        <div class="phpner_header phpner_pt-page-moveFromTopFade" id="phpner_widget-invite">
                            <div class="phpner_h1">У ВАС ОСТАЛИСЬ ВОПРОСЫ?</div>
                            <div class="phpner_h3">БЕСПЛАТНАЯ Консультация!</div>
                        </div>

                        <div class="phpner_form phpner_pt-page-moveFromTopFade" id="phpner_widget-form">
                            <input type="text" class="phpner_input" placeholder="+380" id="phpner_phone">
                            <button class="phpner_button phpner_hide_when_calling" id="phpner_send">ЖДУ ЗВОНКА!</button>
                           <div class="phpner_eula-container phpner_eula--hide_if_off">
                               <input type="checkbox" checked="checked">&nbsp;Согласен с <a href="{$eula_link}" class="phpner_eula--link" target="_blank">политикой конфиденциальности</a>
                              
                           </div>

                            <div class="phpner_help phpner_eula--hide_if_on">Звонок бесплатный</div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
    <!--end Model-->
   <!-- modal after -->
       <div class="modal fade" id="myModal-after" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                 <div class="phpner_widget-message">
                     <div class="phpner_header">
                         <div class="phpner_h2 phpner_message_title--success">Спасибо! Сейчас наш менеджер позвонит вам.</div>
                     </div>
                     <div class="phpner_form">
                         <button class="phpner_button" id="phpner_close" wfd-id="629">Закрыть</button>
                     </div>
                 </div>                   
                </div>
            </div>
        </div>
    </div>  
   <!-- end modal after --> 
    <!-- Кнопка -->
    <div id="phpner_button-wrapper" style="position: fixed; bottom: 50px; right: 50px; z-index: 19999998; display: block;" title="Нажмите, чтобы заказать обратный звонок или перетащите, если кнопка мешает навигации."> 
            <div id="phpner_button-call" style="position: relative; top: 0; left: 0;" data-toggle="modal" data-target="#myModal">
            <span class="phpner_button_tooltip--container phpner_button_tooltip--left">
                <span class="phpner_button_tooltip phpner_button_tooltip--hide phpner_button_tooltip--hover">
                    <span class="phpner_button_tooltip--text">Есть вопросы? Нажмите и мы перезвоним вам!</span>
                    <span class="phpner_button_tooltip--close">x</span>
                </span>
            </span>
            <div class="phpner_call-btn bigEntrance phpner-pulse" style="opacity: 1;">
                <div class="phone-call_wave phone-call_wave__stroke"></div>
            </div>
        </div>
    </div>
    <!-- end Кнопка -->
<script>
    $(function(){
        $(".phpner_hide_when_calling").on("click",function(){
           $('#myModal').modal('hide');
           $('#myModal-after').modal('show');
           $("#phpner_close").click(function(){ $('#myModal-after').modal('hide');})
        console.log( this);
        });
    });
</script>
    </body>
</html>
