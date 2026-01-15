  
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif
  <div>
    
      <a href="{{route('logout')}}"><h3>Log Out </h3></a>
   
  </div>
  {{dd(session()->all())}}

