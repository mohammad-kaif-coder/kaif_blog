@extends('layouts.front-end.front-sidebar')
  <!------------contact section start--------------------------->
        <section class="contact" id="contact">
            <h1 class="heading"><span> contact</span> me</h1>
            <form action="" method="post">
                <input type="text" placeholder="your name" name="name" class="box">
                <input type="email" placeholder="your email" name="email" class="box">
                <input type="text" placeholder="subject" name="subject" class="box">
                <textarea  class="box" placeholder="your message" name="description" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
        </section>
        <!------------contact section and--------------------------->

@section('content')

@endsection