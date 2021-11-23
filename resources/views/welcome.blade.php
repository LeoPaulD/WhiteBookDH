@extends('layouts.app')
@section('title')
<title> WhiteBookDH </title>
@show
@section('content')
<div style="height: 50px;"></div>
<div class="d-flex align-items-center justify-content-center mt-8 centre">

    <div class="mt-4  overflow-hidden  sm:rounded-lg col-10">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="">
                <div class="d-flex justify-content-center align-self-center flex-column col-lg-11 ">
                    <span class="text-secondary"><b>Data collected by the students of Bordeaux Montaigne</b> </span>
                    <h1 class="baskerville text-primary"><b>The Digital Humanities masters White Book </b> </h1>
                    <p>
                        This site lists the universities that have
                        masters degrees related to digital humanities
                        in the English-speaking world
                    </p>
                    <a href="/map"
                        class="btn ronded-lg col-xl-6 col-lg-10 col-md-12 d-flex justify-content-arround  shadow-sm zoom">
                        
                        <svg class="mr-2 mt-1" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
                        <span class="ml-2 m-1">See the masters</span>
                    </a>
                </div>


            </div>

            <div class="mt-5 d-flex align-items-center">
                <img src="/img/illu/illu-home.svg" alt="" srcset="">
            </div>



        </div>
    </div>
</div>




</div>
</div>

@endsection