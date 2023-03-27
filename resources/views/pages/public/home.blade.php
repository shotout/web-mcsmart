@extends('layouts.pub')

@push('page-css')
    <style>
        .c-title {
            font-family: 'Montserrat', sans-serif;
        }
        .c-subtitle {
            font-family: 'Montserrat', sans-serif;
        }
        .c-content {
            font-family: 'Inter', sans-serif;
            text-align: justify;
        }
        .c-bg-skyblue {
            background-color: rgba(255, 229, 90, 0.25); 
        }
        .c-text-center {
            text-align: center;
        }
        .c-border {
            border: 1px solid #B7B7B7;
            border-radius: 10px;
        }
        .c-width {
            width: 70%;
            margin: auto;
        }

        @media only screen and (min-width: 768px) {
            .c-text-center {
                text-align: left !important;
            }
        }
        @media only screen and (min-width: 900px) {
            .c-padding {
                padding: 0 90px !important;
            }
        }
    </style>

    <style>
        .carousel-indicators {
            margin-top: -35px;
            bottom: unset;
        }

        .carousel-indicators li {
            border: 1px solid #000000;
            height: 30px;
            border-radius: 50%;
            
            opacity: 1;
            background-color: transparent;
            color: #000000;
            text-indent: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .carousel-indicators .active {
            background-color: #000000;
            color: #fff;
        }

        .carousel-inner {
            overflow: unset;
        }
    </style>
@endpush

@section('main')
<div class="c-hmobile">
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-md-4 c-text-center">
                <a href="https://mcsmart.app" style="text-decoration: none;" rel="noopener noreferrer">
                    <img src="{{url('/assets/images/logo.png')}}" alt="McSmart App Logo" width="150">
                </a>
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-end">
                <div class="c-hmobile c-border p-2">
                    <span class="f-inter">Available on: </span>
                    <a style="text-decoration: none;" href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/apple.svg')}}" class="ml-2" alt="App Store Logo">
                    </a>
                    <a style="text-decoration: none;" href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="c-title text-center">Be the smartest person in the room with McSmart!</h2>
            </div>
        </div>
    </div>

    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-4 mb-4 text-center">
                <img src="{{url('/assets/images/mcsmart1.png')}}" alt="McSmart App Image" class="w-100">
                <div class="c-dmobile">
                    <div class="f-inter mb-1">Download now:</div>
                    <div>
                        <a style="text-decoration: none;" href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                        </a>
                        <a style="text-decoration: none;" href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="c-text-center">
                    <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image">
                    <h4 class="c-subtitle mt-2 mb-3">
                        Your Ultimate Source for Mind-Blowing General Knowledge Facts!
                    </h4>
                </div>
                <p class="c-content">
                    Introducing McSmart, the ultimate app for general knowledge facts that you can use in any situation! Whether you're at work, hanging out with friends, on a date, or spending time with family, McSmart has got you covered. With 10 categories to choose from, including celebrities, science and technology, and wonders of the world, you'll have a wealth of fascinating information at your fingertips.
                </p>
            </div>
        </div>
    </div>

    <div class="c-bg-skyblue mb-4 py-4">
        <div class="container c-padding">
            <div class="row">
                <div class="col-lg-8">
                    <div class="c-text-center">
                        <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image">
                        <h4 class="c-subtitle mt-2 mb-3">
                            Be the Ultimate Conversation Starter with McSmart: The App That Makes You the Life of the Party!
                        </h4>
                    </div>
                    <p class="c-content">
                        Imagine impressing your colleagues with your knowledge of global economy and business trends, or dazzling your date with facts about exotic locations and travel destinations. With McSmart, you can become the go-to person for interesting conversation starters and fun facts that will keep everyone engaged and entertained.
                    </p>
                    <p class="c-content">
                        Whether you're hanging out with friends or meeting new people, knowing interesting facts about music, movies, and celebrities can make you the life of the party. With McSmart's entertainment category, you'll never run out of conversation starters. From the latest box office hits to the most iconic rock bands of all time, McSmart's entertainment facts will make sure you're the most interesting person in the room.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{url('/assets/images/mcsmart2.png')}}" alt="McSmart App Image" class="w-100">
                    <div class="f-inter mb-1">Download now:</div>
                    <div>
                        <a style="text-decoration: none;" href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                        </a>
                        <a style="text-decoration: none;" href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{url('/assets/images/mcsmart3.png')}}" alt="McSmart App Image" class="w-100">
                <div class="f-inter mb-1">Download now:</div>
                <div>
                    <a style="text-decoration: none;" href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                    </a>
                    <a style="text-decoration: none;" href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="c-text-center">
                    <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image">
                    <h4 class="c-subtitle mt-2 mb-3">
                        Unlock a World of Knowledge and Happiness
                    </h4>
                </div>
                <p class="c-content">
                    But that's not all - did you know that learning new things can actually make you happier and more fulfilled? Studies have shown that acquiring knowledge and skills can lead to increased self-confidence, a sense of purpose, and even better mental health. With McSmart, you can improve your wellbeing while also having fun and expanding your mind.
                </p>
                <p class="c-content">
                    So why wait? Download McSmart today and start impressing everyone with your newfound knowledge!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="c-dmobile">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 c-text-center">
                <a href="https://mcsmart.app" style="text-decoration: none;" rel="noopener noreferrer">
                    <img src="{{url('/assets/images/logo.png')}}" alt="McSmart App Logo" width="180">
                </a>
            </div>
        </div>
        <div class="row mt-2 pb-3">
            <div class="col-12">
                <h3 class="c-title text-center">Be the smartest person in the room with McSmart!</h3>
            </div>
        </div>

        <div class="row c-bg-skyblue" style="margin-top: 250px; padding-top: 50px;">
            <div class="col-12">
                <div id="mcsmart-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#mcsmart-carousel" data-slide-to="0" class="active">1</li>
                        <li data-target="#mcsmart-carousel" data-slide-to="1">2</li>
                        <li data-target="#mcsmart-carousel" data-slide-to="2">3</li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="mb-3" style="position: relative;">
                                <div style="position: absolute; z-index: 9999; bottom: 70px;">
                                    <img src="{{url('/assets/images/mcsmart1.png')}}" class="d-block c-width" alt="McSmart App Image">
                                </div>
                            </div>
                            <div>
                                <div class="text-center">
                                    <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image" style="width:40%;">
                                    <h5 class="c-subtitle mt-2 mb-3">
                                        Your Ultimate Source for Mind-Blowing General Knowledge Facts!
                                    </h5>
                                </div>
                                <p class="c-content">
                                    Introducing McSmart, the ultimate app for general knowledge facts that you can use in any situation! Whether you're at work, hanging out with friends, on a date, or spending time with family, McSmart has got you covered. With 10 categories to choose from, including celebrities, science and technology, and wonders of the world, you'll have a wealth of fascinating information at your fingertips.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="mb-3" style="position: relative;">
                                <div style="position: absolute; z-index: 9999; bottom: 70px;">
                                    <img src="{{url('/assets/images/mcsmart2.png')}}" class="d-block c-width" alt="McSmart App Image">
                                </div>
                            </div>
                            <div>
                                <div class="text-center">
                                    <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image" style="width:40%;">
                                    <h5 class="c-subtitle mt-2 mb-3">
                                        Be the Ultimate Conversation Starter with McSmart: The App That Makes You the Life of the Party!
                                    </h5>
                                </div>
                                <p class="c-content">
                                    Imagine impressing your colleagues with your knowledge of global economy and business trends, or dazzling your date with facts about exotic locations and travel destinations. With McSmart, you can become the go-to person for interesting conversation starters and fun facts that will keep everyone engaged and entertained.
                                </p>
                                <p class="c-content">
                                    Whether you're hanging out with friends or meeting new people, knowing interesting facts about music, movies, and celebrities can make you the life of the party. With McSmart's entertainment category, you'll never run out of conversation starters. From the latest box office hits to the most iconic rock bands of all time, McSmart's entertainment facts will make sure you're the most interesting person in the room.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="mb-3" style="position: relative;">
                                <div style="position: absolute; z-index: 9999; bottom: 70px;">
                                    <img src="{{url('/assets/images/mcsmart3.png')}}" class="d-block c-width" alt="McSmart App Image">
                                </div>
                            </div>
                            <div>
                                <div class="text-center">
                                    <img src="{{url('/assets/images/five_star.svg')}}" alt="five Star Image" style="width:40%;">
                                    <h5 class="c-subtitle mt-2 mb-3">
                                        Unlock a World of Knowledge and Happiness
                                    </h5>
                                </div>
                                <p class="c-content">
                                    But that's not all - did you know that learning new things can actually make you happier and more fulfilled? Studies have shown that acquiring knowledge and skills can lead to increased self-confidence, a sense of purpose, and even better mental health. With McSmart, you can improve your wellbeing while also having fun and expanding your mind.
                                </p>
                                <p class="c-content">
                                    So why wait? Download McSmart today and start impressing everyone with your newfound knowledge!
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="carousel-control-prev" type="button" data-target="#mcsmart-carousel" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#mcsmart-carousel" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button> --}}
                </div>
            </div>
        </div>

        <div class="row pb-4 c-bg-skyblue">
            <div class="col-12 text-center mb-1">
                <div class="f-inter">Download now:</div>
            </div>
            <div class="col-12 text-center mb-3">
                <a style="text-decoration: none;" href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                    <img style="width: 50%;" src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                </a>
            </div>
            <div class="col-12 text-center mb-3">
                <a style="text-decoration: none;" href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                    <img style="width: 50%;" src="{{url('/assets/images/google.svg')}}" alt="Play Store Logo">
                </a>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection

@push('page-js')
<script>
    $('.carousel').carousel({
        interval: 15000
    })
</script>
@endpush