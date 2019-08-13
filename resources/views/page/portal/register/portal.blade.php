@extends('page.layout.main')

@section('title')
UMS-portal
@endsection

@section('menubar')
<ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="/home">Home</a></li>
          <li class="selected"><a href="/portal">portal</a></li>
          <li><a href="examples.html">page1</a></li>
          <li><a href="another_page.html">page2</a></li>
          <li><a href="contact.html">page3</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
@endsection

@section('site_content')
<div class="sidebar">
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>portal view for register</h1>
        {{session('type')}} : {{session('username')}}
        
        
      </div>
      @endsection