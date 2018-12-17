<div class="modal fade" id="ComputerEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
  	<div class="modal-content">
  		<div class="modal-header">
    		<h5 class="modal-title" id="exampleModalLabel">Editar Computador</h5>
  		</div>
      <div class="modal-body">
      	<form action="update-computer/@{{Computer.id}}" class="form-horizontal" id="editComputer" method="post">
        	@include('admin.pages.inventorys.form')
		    </form>

    	</div>
  	</div>
	</div>
</div>