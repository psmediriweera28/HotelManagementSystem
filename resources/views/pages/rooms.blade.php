@extends('layouts.app')

@section('title', 'Rooms')

@section('content')

<style>
    .room-name{
       text-align: 
    }

    .room-text{
       padding: 3px;
       padding-left: 15px;
       color: rgb(12, 113, 12);
        
    }

    .card-title{
        text-align:start;
        font-family: "Times New Roman", Georgia, serif;
        padding-top: 8px;
    }

    .price-tag{
        text-align: right;
    }

    .check-list{

    }

    .check-list li::before{
        content: "\2714"; /* ✔ */
        color: darkgreen;
        font-weight: bold;
        margin-right: 10px;
    }
</style>

<section class="bg-white section-part">
    <div class="container">
    <h1>Our rooms</h1>
    <div class="row g-5">
        <div class="col-g-4">
            <div class="p-4 border rounded shadow-sm h-100">

            {{-- Room No 01 --}}
    <div class="card mb-4">
    <div class="row g-0">
        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Room 01</h4>
            <img src="{{ asset('images/double.jpg') }}" class="img-fluid rounded-start" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                <h4 class="card-title mb-3">
                    Double Room with Mountain View
                </h4>
                <ul>
                    <li>1 twin bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Garden View</li>
                    <li>Mountain view</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 4,178</h3>
            </div>
        </div>

    </div>
</div>


        {{-- Room No 02 --}}
<div class="card mb-4">
    <div class="row g-0">
        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Room 02</h4>
            <img src="{{ asset('images/single.jpg') }}" class="img-fluid rounded-start" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                <h4 class="card-title mb-3">
                    Single Room with Graden View
                </h4>
                <ul>
                    <li>1 Single bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Garden View</li>
                    <li>Mountain view</li>
                    <li>Free Wi-Fi</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 2,570</h3>
            </div>
        </div>

    </div>
</div>

    {{-- Room No 03 --}}
<div class="card mb-4">
    <div class="row g-0">

        {{-- Room 01 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Room 03</h4>
            <img src="{{ asset('images/bdroom.jpg') }}" class="img-fluid rounded-start" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                <h4 class="card-title mb-3">
                    Twin Room with City View
                </h4>
                <ul>
                    <li>2 twin bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>City View</li>
                    <li>Flat-Screen TV</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 4,270</h3>
            </div>
        </div>

    </div>
</div>


    
<div class="card mb-4">
    <div class="row g-0">
        {{-- Room 02 --}}
        <!-- Image column -->
        <div class="col-md-4">
            <h4 class="room-text">Room 04</h4>
            <img src="{{ asset('images/familyroom.jpg') }}" class="img-fluid rounded-start" alt="Room image" width="300">
        </div>
        <!-- Text column -->
        <div class="col-md-8">
            <div class="card-body py-2 px-3">
                
                <h4 class="card-title mb-3">
                    Family Room with Farm View
                </h4>
                <ul>
                    <li>1 double bed & single bed</li>
                    <li>Private bathroom</li>
                    <li>Free toiletries</li>
                    <li>Seating area</li>
                    <li>Free Wi-Fi</li>
                    
                </ul>

                <ul class="check-list" style="list-style-type: none">
                        <li>Breakfast Include</li>
                </ul>


                <h3 class="price-tag">LKR 9,740</h3>
            </div>
        </div>

    </div>
</div>

            </div>
        </div>
    </div>
</div>
</section>

@endsection