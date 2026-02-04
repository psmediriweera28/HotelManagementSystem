@extends('layouts.app')

@section('title', 'Guest Feedbacks')

@section('content')
<div class="container py-3">
    @include('partials.more-nav')

    <h1 class="mb-3">Guest Feedbacks</h1>

    <div class="list-group">
        <div class="list-group-item">
            <h5 class="mb-1">“Wonderful stay”</h5>
            <p class="mb-1">The house is in a residential area, so really quiet. You can also enjoy the living room and see the waterfall from the door. The owner is really helpful in whatever you need.</p>
            <small>- Laura - Solo traveler</small>
        </div>
        <div class="list-group-item">
            <h5 class="mb-1">“Great service”</h5>
            <p class="mb-1">Owner was very helpful and friendly. did his ulmost to make the guests stay comfortable as possible. The food was really well prepared. The bedrooms despite being small, didn't at all feel tight or cramped, due to the way it was arranged. bathrooms are very clean and very well maintained too.</p>
            <small>- Dinuka</small>
        </div>
        <div class="list-group-item">
            <h5 class="mb-1">“Nice room, very good breakfast”</h5>
            <p class="mb-1">They arranged us tuk tuk to take a trip to gardens and temples. In the morning them helped us to catch the train to Ella. Thank you!</p>
            <small>- Mare - Couple</small>
        </div>
    </div>
</div>
@endsection
