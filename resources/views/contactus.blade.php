@extends('layout')

@section('body')
{{-- section of form and map --}}
    <section class="full-section">
        <div class="full-container">

            {{-- form integration --}}
            <div class="left-container">
                <h1>Contact Us</h1>
                <form action=" {{ url('contactus_backend_api') }} " method="GET" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="First name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" id="email"
                            placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <textarea class="form-control" name="query" id="query" placeholder="Your query" aria-label="With textarea"></textarea>
                    </div>

                    {{-- <input class="btn btn-primary" type="submit" value="Submit"> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            {{-- map integration --}}
            <div class="right-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5902933229836!2d88.37954111496536!3d22.891588485019646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89167529a8f17%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1682076381784!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </section>
@endsection
