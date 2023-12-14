@extends('frontend.masterTemp')
@section('fmenuname')
    Video Gallery
@endsection
@section('front-main-content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        .abcd {
            max-width: 1200px;
            margin: 25px auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
        }

        .abcd .main-video-container {
            flex: 1 1 700px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
        }

        .abcd .main-video-container .main-video {
            margin-bottom: 7px;
            border-radius: 5px;
            width: 100%;
        }

        .abcd .main-video-container .main-vid-title {
            font-size: 20px;
            color: #444;
        }

        .abcd .video-list-container {
            flex: 1 1 350px;
            height: 485px;
            overflow-y: scroll;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
        }

        .abcd .video-list-container::-webkit-scrollbar {
            width: 10px;
        }

        .abcd .video-list-container::-webkit-scrollbar-track {
            background-color: #fff;
            border-radius: 5px;
        }

        .abcd .video-list-container::-webkit-scrollbar-thumb {
            background-color: #444;
            border-radius: 5px;
        }

        .abcd .video-list-container .list {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            background-color: #eee;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .abcd .video-list-container .list:last-child {
            margin-bottom: 0;
        }

        .abcd .video-list-container .list.active {
            background-color: #444;
        }

        .abcd .video-list-container .list.active .list-title {
            color: #fff;
        }

        .abcd .video-list-container .list .list-video {
            width: 100px;
            border-radius: 5px;
        }

        .abcd .video-list-container .list .list-title {
            font-size: 17px;
            color: #444;
        }

        @media (max-width:1200px) {

            .abcd {
                margin: 0;
            }

        }

        @media (max-width:450px) {

            .abcd .main-video-container .main-vid-title {
                font-size: 15px;
                text-align: center;
            }

            .abcd .video-list-container .list {
                flex-flow: column;
                gap: 10px;
            }

            .abcd .video-list-container .list .list-video {
                width: 100%;
            }

            .abcd .video-list-container .list .list-title {
                font-size: 15px;
                text-align: center;
            }

        }
    </style>
    <div class="content-wrapper">
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>
        <div class="space20"></div>

        <div class="col-md-12">
            <h1 class="heading text-center">Hi, This is <b data-aos="zoom-in" data-aos-easing="ease-out-cubic"
                    data-aos-duration="3000" style="color:rgb(5, 66, 66)"> Mainul Islam </b>
            </h1>

            <h2 data-aos="fade-down " style="color:rgb(24, 138, 138)" class="sub-heading2 text-center">
                {{ $aboutme->title }}
            </h2>
        </div>
        <div class="abcd">

            <div class="main-video-container">
                <video src="" loop controls class="main-video"></video>
                <h3 class="main-vid-title">No video selected</h3>
            </div>

            @php
                // dd($allrecentimages);
            @endphp
            <div class="video-list-container">
                @foreach ($allrecentimages as $evdo)
                    <div class="list">
                        <video src="{{ asset('/storage/' . $evdo->video) }}" class="list-video"></video>
                        <h3 class="list-title">{{ $evdo->title }}</h3>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <script>
        let videoList = document.querySelectorAll('.video-list-container .list');

        videoList.forEach(vid => {
            vid.onclick = () => {
                videoList.forEach(remove => {
                    remove.classList.remove('active')
                });
                vid.classList.add('active');
                let src = vid.querySelector('.list-video').src;
                let title = vid.querySelector('.list-title').innerHTML;
                document.querySelector('.main-video-container .main-video').src = src;
                document.querySelector('.main-video-container .main-video').play();
                document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
            };
        });
    </script>
@endsection
