<!-- Form Create Post -->
    <div id = "create" class = "modal fade" role = "dialog" >
    	<div class = "modal-dialog">
    		<div class = "modal-content">
    			<div class = "modal-header">
    				<button type = "button" class ="close" data-dismiss ="modal">&times;</button>
    				<h4 class = "modal-title"></h4>
    			</div>
    			<div class = "modal-body">
    				<form class = "form-horizontal" role = "form">
    					<div class = "form-group row add">
    						<label class = "control-label col-sm-2" for = "title">AQBCE: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "title" name = "title"
    							placeholder = "Our Title" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Stato: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Us: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Numero CP: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Stato: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Data CP: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    					<div class = "form-group">
    						<label class = "control-label col-sm-2" for = "body">Esito: </label>
    						<div class = "col-sm-10">
    							<input type = "text" class = "form-control" id = "body" name = "body"
    							placeholder = "Our Body" required>
    							<p class = "error text-center alert alert-danger hidden"></p>
    						</div>
    					</div>
    				</form>
    			</div>
    			<div class = "modal-footer">
    			    <button class="btn btn-warning" type="submit" id="add">
		              <span class="glyphicon glyphicon-plus"></span>Save Post
		            </button>
    				<button class = "btn btn-warning" type = "submit" data-dismiss = "modal">
    					<span class = "glyphicon glyphicon-remove"></span>close
    				</button>
    			</div>
    		</div>
    	</div>
</div> 	
</div>   
 
{{-- Modal Form Show POST --}}
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
                  </div>
                    <div class="modal-body">
                    <div class="form-group">
                      <label for="">Aqbce :</label>
                      <b id="aqbce"/>
                    </div>
                    <div class="form-group">
                      <label for="">Stato :</label>
                      <b id="stato"/>
                    </div>
                    </div>
                    </div>
                  </div>
</div>


{{-- Modal Form Edit and Delete Post --}}
<div id="myModal"class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" role="modal">
          <div class="form-group">
            <label class="control-label col-sm-2"for="id">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fid" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="aqbce">AQBCE</label>
            <div class="col-sm-10">
            <input type="name" class="form-control" id="aqbce">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"for="body">Body</label>
            <div class="col-sm-10">
            <textarea type="name" class="form-control" id="b"></textarea>
            </div>
          </div>
	</form>
        
                {{-- Form Delete Post --}}
<div class="deleteContent">
      Are You sure want to delete <span class="title"></span>?
          <span class="hidden id"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div>
