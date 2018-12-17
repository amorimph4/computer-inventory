		{!! csrf_field() !!}
<div class="row">
	<div class="col-md-12">
	    <div class="white-box">
	    	<div class="form-group">
			    <label for="title" class="control-label col-sm-2">Nome</label>
			    <div class="col-sm-8">
			        <input type="text" name="name" required='true' id="title" class="form-control" value="@{{Computer.name}}" >
			    </div>
			</div>
			<div class="form-group">
			    <label for="title" class="control-label col-sm-2">Ano de lançamento</label>
			    <div class="col-sm-8">
			        <input type="date" name="launch_year" required='true' id="title" class="form-control" value="@{{Computer.launch_year}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="url" class="control-label col-sm-2">Fabricante</label>
			    <div class="col-sm-8">
			        <input type="text" name="manufacturer" id="url" required='true'  class="form-control" value="@{{Computer.manufacturer}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Sistema Operacional</label>
			    <div class="col-sm-8">
			        <input type="text" name="operational_system" id="url" required='true'  class="form-control" value="@{{Computer.operational_system}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">CPU</label>
			    <div class="col-sm-8">
			        <input type="text" name="cpu" class="form-control" value="@{{Computer.cpu}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Memória</label>
			    <div class="col-sm-8">
			        <input type="text" name="memory" class="form-control" value="@{{Computer.memory}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Armazenamento</label>
			    <div class="col-sm-8">
			        <input type="text" name="storage" class="form-control" value="@{{Computer.storage}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Preço inicial</label>
			    <div class="col-sm-8">
			        <input type="number" name="initial_price"  class="form-control" value="@{{Computer.initial_price}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Imagem</label>
			    <div class="col-sm-8">
			        <input type="text" name="image" class="form-control" value="@{{Computer.image}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Comentário</label>
			    <div class="col-sm-8">
			        <input type="text" name="comments" class="form-control" value="@{{Computer.comments}}" >
			    </div>
			</div>

			<br/>
			<div class="form-group">
			    <div class="col-sm-offset-1">
			        <input type="submit" value="salvar" class="btn btn-primary">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">voltar</button>
			    </div>
			</div>
		</div>
	</div>
</div>