@extends('layouts.organization')
@section('content')
<br/>

<div class="row">
	<div class="col-lg-12">
  <h3>New Currency</h3>

<hr>
</div>	
</div>


<div class="row">
	<div class="col-lg-5">

    
		
		 @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

		 <form method="POST" action="{{{ URL::to('currencies') }}}" accept-charset="UTF-8">
   
    <fieldset>
        <div class="form-group">
            <label for="username">Currency Name</label>
            <input class="form-control" placeholder="" type="text" name="name" id="name" value="{{{ Input::old('name') }}}">
        </div>

        <div class="form-group">
            <label for="username">Currency Code</label>
            <input class="form-control" placeholder="" type="text" name="shortname" id="shortname" value="{{{ Input::old('shortname') }}}">
        </div>
        
        
        

        







        
      
        
        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create Currency</button>
        </div>

    </fieldset>
</form>
		

  </div>

</div>
























@stop