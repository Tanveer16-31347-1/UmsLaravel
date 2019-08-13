@extends('page.layout.main')

@section('title')
UMS-Home
@endsection

@section('menubar')
<ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected" ><a href="/home">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li ><a href="/page/admin">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/login">Register</a></li>
        </ul>
@endsection

@section('site_content')
<div class="sidebar">
        <h2>This is the place for notices</h2>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        
        
      <h1>This is our home page</h1>
      

      
	</div>
	@endsection