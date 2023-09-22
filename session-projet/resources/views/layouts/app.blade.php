<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projet ville</title>
    <link rel="icon" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <!-- HEADER -->
        <header>
            <div class="left">
                <a id="logo" href="/"><img src="{{ asset('img/logoVille.png') }}" alt="Logo image"></a>
                <h1>Gestion des formulaires SST</h1>
            </div>
            <nav class="right">
                <a href="#" class="notif-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20"
                        fill="none">
                        <path
                            d="M8 19.75C9.1 19.75 10 18.85 10 17.75H6C6 18.2804 6.21071 18.7891 6.58579 19.1642C6.96086 19.5393 7.46957 19.75 8 19.75ZM14 13.75V8.75C14 5.68 12.36 3.11 9.5 2.43V1.75C9.5 0.92 8.83 0.25 8 0.25C7.17 0.25 6.5 0.92 6.5 1.75V2.43C3.63 3.11 2 5.67 2 8.75V13.75L0 15.75V16.75H16V15.75L14 13.75Z"
                            fill="#1BBF00" />
                    </svg>
                </a>
                <a href="#" id="menu-btn" class="menu-btn">
                    <svg class="hb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" stroke="#eee"
                        stroke-width=".6" fill="rgba(0,0,0,0)" stroke-linecap="round" style="cursor: pointer">
                        <path d="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7">
                            <animate dur="0.2s" attributeName="d"
                                values="M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7;M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7"
                                fill="freeze" begin="start.begin" />
                            <animate dur="0.2s" attributeName="d"
                                values="M3,3L5,5L7,3M5,5L5,5M3,7L5,5L7,7;M2,3L5,3L8,3M2,5L8,5M2,7L5,7L8,7"
                                fill="freeze" begin="reverse.begin" />
                        </path>
                        <rect width="10" height="10" stroke="none">
                            <animate dur="2s" id="reverse" attributeName="width" begin="click" />
                        </rect>
                        <rect width="10" height="10" stroke="none">
                            <animate dur="0.001s" id="start" attributeName="width" values="10;0" fill="freeze"
                                begin="click" />
                            <animate dur="0.001s" attributeName="width" values="0;10" fill="freeze"
                                begin="reverse.begin" />
                        </rect>
                    </svg>
                    <path
                        d="M1.78571 0.5H10.7143C11.1879 0.5 11.6421 0.679107 11.977 0.997919C12.3119 1.31673 12.5 1.74913 12.5 2.2C12.5 2.65087 12.3119 3.08327 11.977 3.40208C11.6421 3.72089 11.1879 3.9 10.7143 3.9H1.78571C1.31211 3.9 0.85791 3.72089 0.523024 3.40208C0.188137 3.08327 0 2.65087 0 2.2C0 1.74913 0.188137 1.31673 0.523024 0.997919C0.85791 0.679107 1.31211 0.5 1.78571 0.5ZM14.2857 14.1H23.2143C23.6879 14.1 24.1421 14.2791 24.477 14.5979C24.8119 14.9167 25 15.3491 25 15.8C25 16.2509 24.8119 16.6833 24.477 17.0021C24.1421 17.3209 23.6879 17.5 23.2143 17.5H14.2857C13.8121 17.5 13.3579 17.3209 13.023 17.0021C12.6881 16.6833 12.5 16.2509 12.5 15.8C12.5 15.3491 12.6881 14.9167 13.023 14.5979C13.3579 14.2791 13.8121 14.1 14.2857 14.1ZM1.78571 7.3H23.2143C23.6879 7.3 24.1421 7.47911 24.477 7.79792C24.8119 8.11673 25 8.54913 25 9C25 9.45087 24.8119 9.88327 24.477 10.2021C24.1421 10.5209 23.6879 10.7 23.2143 10.7H1.78571C1.31211 10.7 0.85791 10.5209 0.523024 10.2021C0.188137 9.88327 0 9.45087 0 9C0 8.54913 0.188137 8.11673 0.523024 7.79792C0.85791 7.47911 1.31211 7.3 1.78571 7.3Z"
                        fill="white" />
                    </svg>
                </a>
            </nav>
        </header>
        <nav class="dropdown-menu">
            <ul>
                <li>
                    <a href="">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.19785 16.3276V11.3276H11.1979V16.3276C11.1979 16.8776 11.6479 17.3276 12.1979 17.3276H15.1979C15.7479 17.3276 16.1979 16.8776 16.1979 16.3276V9.32761H17.8979C18.3579 9.32761 18.5779 8.75761 18.2279 8.45761L9.86785 0.927607C9.48785 0.587607 8.90785 0.587607 8.52785 0.927607L0.167852 8.45761C-0.172148 8.75761 0.0378519 9.32761 0.497852 9.32761H2.19785V16.3276C2.19785 16.8776 2.64785 17.3276 3.19785 17.3276H6.19785C6.74785 17.3276 7.19785 16.8776 7.19785 16.3276Z"
                                fill="#2F4858" />
                        </svg>
                        <p>Accueil</p>
                    </a>
                </li>
                <li>
                    <p>Nouveau formulaire</p>
                    <ul class="n-form">
                        <li><a href=""> <svg width="22" height="27" viewBox="0 0 22 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.625 21.6H12.375V17.55H16.5V14.85H12.375V10.8H9.625V14.85H5.5V17.55H9.625V21.6ZM2.75 27C1.99375 27 1.34613 26.7354 0.807127 26.2062C0.268127 25.677 -0.000914332 25.0416 2.33447e-06 24.3V2.7C2.33447e-06 1.9575 0.269502 1.32165 0.808502 0.792452C1.3475 0.263252 1.99467 -0.000897708 2.75 2.29202e-06H13.75L22 8.1V24.3C22 25.0425 21.7305 25.6783 21.1915 26.2075C20.6525 26.7367 20.0053 27.0009 19.25 27H2.75ZM12.375 9.45H19.25L12.375 2.7V9.45Z"
                                        fill="#597383" />
                                </svg>
                                <p>Formulaire de déclaration d'accident</p>
                            </a></li>
                        <li><a href=""> <svg width="22" height="27" viewBox="0 0 22 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.625 21.6H12.375V17.55H16.5V14.85H12.375V10.8H9.625V14.85H5.5V17.55H9.625V21.6ZM2.75 27C1.99375 27 1.34613 26.7354 0.807127 26.2062C0.268127 25.677 -0.000914332 25.0416 2.33447e-06 24.3V2.7C2.33447e-06 1.9575 0.269502 1.32165 0.808502 0.792452C1.3475 0.263252 1.99467 -0.000897708 2.75 2.29202e-06H13.75L22 8.1V24.3C22 25.0425 21.7305 25.6783 21.1915 26.2075C20.6525 26.7367 20.0053 27.0009 19.25 27H2.75ZM12.375 9.45H19.25L12.375 2.7V9.45Z"
                                        fill="#597383" />
                                </svg>
                                <p>Formulaire de signalement <br> d'une situation dangereuse</p>
                            </a></li>
                        <li><a href=""> <svg width="22" height="27" viewBox="0 0 22 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.625 21.6H12.375V17.55H16.5V14.85H12.375V10.8H9.625V14.85H5.5V17.55H9.625V21.6ZM2.75 27C1.99375 27 1.34613 26.7354 0.807127 26.2062C0.268127 25.677 -0.000914332 25.0416 2.33447e-06 24.3V2.7C2.33447e-06 1.9575 0.269502 1.32165 0.808502 0.792452C1.3475 0.263252 1.99467 -0.000897708 2.75 2.29202e-06H13.75L22 8.1V24.3C22 25.0425 21.7305 25.6783 21.1915 26.2075C20.6525 26.7367 20.0053 27.0009 19.25 27H2.75ZM12.375 9.45H19.25L12.375 2.7V9.45Z"
                                        fill="#597383" />
                                </svg>
                                <p>Formulaire d'atelier mécanique</p>
                            </a></li>
                        <li><a href=""> <svg width="22" height="27" viewBox="0 0 22 27"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.625 21.6H12.375V17.55H16.5V14.85H12.375V10.8H9.625V14.85H5.5V17.55H9.625V21.6ZM2.75 27C1.99375 27 1.34613 26.7354 0.807127 26.2062C0.268127 25.677 -0.000914332 25.0416 2.33447e-06 24.3V2.7C2.33447e-06 1.9575 0.269502 1.32165 0.808502 0.792452C1.3475 0.263252 1.99467 -0.000897708 2.75 2.29202e-06H13.75L22 8.1V24.3C22 25.0425 21.7305 25.6783 21.1915 26.2075C20.6525 26.7367 20.0053 27.0009 19.25 27H2.75ZM12.375 9.45H19.25L12.375 2.7V9.45Z"
                                        fill="#597383" />
                                </svg>
                                <p> Audit SST</p>
                            </a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.75 0.5C0.334375 0.5 0 0.834375 0 1.25V2.75C0 3.16563 0.334375 3.5 0.75 3.5H2.25C2.66563 3.5 3 3.16563 3 2.75V1.25C3 0.834375 2.66563 0.5 2.25 0.5H0.75ZM5.5 1C4.94688 1 4.5 1.44687 4.5 2C4.5 2.55312 4.94688 3 5.5 3H14.5C15.0531 3 15.5 2.55312 15.5 2C15.5 1.44687 15.0531 1 14.5 1H5.5ZM5.5 6C4.94688 6 4.5 6.44688 4.5 7C4.5 7.55312 4.94688 8 5.5 8H14.5C15.0531 8 15.5 7.55312 15.5 7C15.5 6.44688 15.0531 6 14.5 6H5.5ZM5.5 11C4.94688 11 4.5 11.4469 4.5 12C4.5 12.5531 4.94688 13 5.5 13H14.5C15.0531 13 15.5 12.5531 15.5 12C15.5 11.4469 15.0531 11 14.5 11H5.5ZM0 6.25V7.75C0 8.16563 0.334375 8.5 0.75 8.5H2.25C2.66563 8.5 3 8.16563 3 7.75V6.25C3 5.83437 2.66563 5.5 2.25 5.5H0.75C0.334375 5.5 0 5.83437 0 6.25ZM0.75 10.5C0.334375 10.5 0 10.8344 0 11.25V12.75C0 13.1656 0.334375 13.5 0.75 13.5H2.25C2.66563 13.5 3 13.1656 3 12.75V11.25C3 10.8344 2.66563 10.5 2.25 10.5H0.75Z"
                                fill="#2F4858" />
                        </svg>
                        <p>Formulaires soumis</p>
                    </a>
                </li>
                <li>
                    <a href="/deconnexion" id="dec">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 0H11C11.5304 0 12.0391 0.210714 12.4142 0.585786C12.7893 0.960859 13 1.46957 13 2V4H11V2H2V18H11V16H13V18C13 18.5304 12.7893 19.0391 12.4142 19.4142C12.0391 19.7893 11.5304 20 11 20H2C1.46957 20 0.960859 19.7893 0.585786 19.4142C0.210714 19.0391 0 18.5304 0 18V2C0 1.46957 0.210714 0.960859 0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0Z"
                                fill="#2F4858" />
                            <path d="M12.09 13.59L13.5 15L18.5 10L13.5 5L12.09 6.41L14.67 9H5V11H14.67L12.09 13.59Z"
                                fill="#2F4858" />
                        </svg>
                        <p>Deconnexion</p>
                    </a>
                </li>
            </ul>
        </nav>
{{-- 
        <nav class="dropdown-menu">
            <ul> --}}
                {{-- @foreach ($notifications as $notification)
          @php
              $data = json_decode($notification->data, true);
          @endphp
          <li>
              <div >
                  <div>
                      <strong> User ID:</strong> <span style="color: #495057;">{{ $notification->id_user }}</span><br>
                      <strong>Message:</strong> <span style="color: #495057;">{{ $data['message'] }}</span><br>
                      <strong>Type:</strong> <span style="color: {{ $data['type'] === 'info' ? '#17a2b8' : '#dc3545' }};">{{ ucfirst($data['type']) }}</span><br>
                      <strong>Seen:</strong> <span style="color: {{ $notification->vu ? '#28a745' : '#dc3545' }};">{{ $notification->vu ? 'Yes' : 'No' }}</span><br>
                  </div>
                  <div>
                      <strong>Timestamp:</strong> <span style="color: #495057;">{{ $notification->created_at }}</span>
                  </div>
              </div>
          </li>
       @endforeach --}}
{{-- 
                <li>
                    <div>
                        <div>
                            <strong> User ID:</strong> <span
                                style="color: #495057;">{{ $notification->id_user }}</span><br>
                            <strong>Message:</strong> <span style="color: #495057;">{{ $data['message'] }}</span><br>
                            <strong>Type:</strong> <span
                                style="color: {{ $data['type'] === 'info' ? '#17a2b8' : '#dc3545' }};">{{ ucfirst($data['type']) }}</span><br>
                            <strong>Seen:</strong> <span
                                style="color: {{ $notification->vu ? '#28a745' : '#dc3545' }};">{{ $notification->vu ? 'Yes' : 'No' }}</span><br>
                        </div>
                        <div>
                            <strong>Timestamp:</strong> <span
                                style="color: #495057;">{{ $notification->created_at }}</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <strong> User ID:</strong> <span
                                style="color: #495057;">{{ $notification->id_user }}</span><br>
                            <strong>Message:</strong> <span style="color: #495057;">{{ $data['message'] }}</span><br>
                            <strong>Type:</strong> <span
                                style="color: {{ $data['type'] === 'info' ? '#17a2b8' : '#dc3545' }};">{{ ucfirst($data['type']) }}</span><br>
                            <strong>Seen:</strong> <span
                                style="color: {{ $notification->vu ? '#28a745' : '#dc3545' }};">{{ $notification->vu ? 'Yes' : 'No' }}</span><br>
                        </div>
                        <div>
                            <strong>Timestamp:</strong> <span
                                style="color: #495057;">{{ $notification->created_at }}</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <strong> User ID:</strong> <span
                                style="color: #495057;">{{ $notification->id_user }}</span><br>
                            <strong>Message:</strong> <span style="color: #495057;">{{ $data['message'] }}</span><br>
                            <strong>Type:</strong> <span
                                style="color: {{ $data['type'] === 'info' ? '#17a2b8' : '#dc3545' }};">{{ ucfirst($data['type']) }}</span><br>
                            <strong>Seen:</strong> <span
                                style="color: {{ $notification->vu ? '#28a745' : '#dc3545' }};">{{ $notification->vu ? 'Yes' : 'No' }}</span><br>
                        </div>
                        <div>
                            <strong>Timestamp:</strong> <span
                                style="color: #495057;">{{ $notification->created_at }}</span>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        @if (isset($errors) && $errors->any())
            <div class="alert alert-danger ">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <!--erreur -->
 --}}

        @yield('Mid') <!--nom de la section  -->

        <!-- LINKS -->
        <section class="link">
            <div class="logos">
                <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>

            </div>
            <div class="sub-links">
                <ul>
                    Normalement c'est les aspect legaux et tout
                </ul>
            </div>
        </section>
        <!-- END OF LINKS -->


        <!-- FOOTER -->
        <footer>
            <p> Zakaria , Brice, Antoine, Inc.</p>
            <p> Projet ville </p>
        </footer>
    </div>
    <script src="js/pop.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <script>
        document.querySelector('.menu-btn').addEventListener('click', function() {
            var dropdownMenu = document.querySelector('.dropdown-menu');
            if (dropdownMenu.classList.contains('open')) {
                dropdownMenu.classList.remove('open');
            } else {
                dropdownMenu.classList.add('open');
            }
        });
    </script>

</body>

</html>
