<div class="modal fade" id="myModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close"
		  data-dismiss="modal"
		  aria-label="Close">
	      <span aria-hidden="true">&times;</span></button>   
	    <h5 class="modal-title"
	    id="favoritesModalLabel">Nuovo Parere</h5>
	  </div>
	{!! Form::open(['id'=>'frm']) !!}
		<div class="modal-body">

		</div>
		<div class="modal-footer">
		    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
		    {!! Form::submit("Save",["class"=>"btn btn-primary"])!!}
		</div>
		{!! Form::close() !!}
    </div>
  </div>
</div>