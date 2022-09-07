@extends('layout')

@section('main')

<!-- main -->
<main class="container">
    <section id="contact-us">
        <h1>Get in Touch!</h1>
        {{-- flash message --}}
        @include('includes.flash-message')
        <!-- contact info -->
        <div class="container">
            <div class="contact-info">
               
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <!-- Name -->
                    <label for="name"><span>Name</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" />
                    @error('name')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror

                    <!-- Email -->
                    <label for="email"><span>Email</span></label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" />
                    @error('email')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror

                    <!-- Subject -->
                    <label for="subject"><span>Subject</span></label>
                    <input type="text" id="Subject" name="subject" value="{{ old('subject') }}" />
                    @error('subject')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror
                    <!-- Message -->
                    <label for="message"><span>Message</span></label>
                    <textarea id="message" name="message">{{ old('message') }}</textarea>
                    @error('message')
                    <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                    @enderror
                    <!-- Button -->
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
