    @extends('app')

    @section('title','Booking - '.$booking->id)

    @section('content')
    <div class="container">
        @include('partials.menu')
        <h1>Booking : Edit</h1>

        @include('partials.form-feedback')


            <form action="{{ route('booking.update',$booking) }}" method = "post" class="row g-3">
                @method('patch')
                @include('booking.form')

            </form>
            @include('partials.footer')
    </div>

    @endsection
