@extends('page.layout.main')

@section('title')
UMS-Login
@endsection

@section('menubar')
<ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="/home">Home</a></li>
          <li><a href="examples.html">Examples</a></li>
          <li ><a href="/page/admin">A Page</a></li>
          <li><a href="another_page.html">Another Page</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li class="selected"><a href="/login">Login</a></li>
          <li><a href="/login">Register</a></li>
        </ul>
@endsection

@section('site_content')
<div class="sidebar">
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        
        
     
      

      <form method="post">
	<!--	{{csrf_field()}}-->
	<!--<input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		@csrf
		<table id="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
			<tr>
				<td colspan="100%">
					@foreach($errors->all() as $err)
	{{$err}} <br>
@endforeach

	<div>
		{{session('msg')}}
	</div>
				</td>
				
			</tr>
		</table>
	</form>
	 </div>
	@endsection