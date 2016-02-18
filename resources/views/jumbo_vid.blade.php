<!-- resources/views/tasks.blade.php -->

@extends('layouts.main')

@section('jumbo_vid')

    <video preload="none" autoplay="" loop="">
          <source src="/vid/FullSizeRender.mp4" type="video/mp4">
            <!-- add sources  -->
          <!-- <source src="movie.ogg" type="video/ogg"> -->
          Your browser does not support the video tag.
    </video>

    <div id="nav">
    <img id="headshot" src="/img/bf.jpg">
    <h1>Bradley D. Slavens, Website Design</h1>
        <ul>
            <li><a href="#"> Home </a></li>
            <li><a href="#portfolio"> Portfolio </a></li>
            <li><a href="#"> Snippets </a></li>
            <li><a href="#"> About </a></li>
            <li><a href="#"> Quote </a></li>
            <li><a href="#"> Contact </a></li>
        </ul>
    </div>


@endsection