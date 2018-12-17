@component('admin.layout.elements.body')
    @slot('title')   Inventário de Computadores   @endslot
    @slot('Controller')<div ng-controller="ComputerCtrl">@endslot
    @slot('edit')@include('admin.layout.elements.modals.editcomputer')@endslot
    @slot('delete')@include('admin.layout.elements.modals.deletecomputer')@endslot
    @slot('description') Administração de computadores @endslot
    @slot('EndController')</div>@endslot


    <div style="margin-top: 10px; margin-bottom: 40px;">
        <a href="{{ route('export', 'xlsx') }}"><button class="btn btn-success"> Download Excel xlsx </button></a>
        <a href="{{ route('export', 'xls') }}"><button class="btn btn-success"> Download Excel xls</button></a>
        <a href="{{ route('export', 'csv') }}"><button class="btn btn-success"> Download csv </button></a>
        
        <form method="post" id="form-test" enctype="multipart/form-data" style="margin-top: 20px;" action="{{ route('import') }}">
            {{ csrf_field() }}
            <input type="file" name="fileImport" style="margin-right: 180px;margin-bottom: 10px;">
            <input type="submit" id="test" class="btn btn-primary" style="padding: 5px 15px;" value="Enviar">
        </form>
    </div>
    
    @if(Session::has('sucess'))
        <p class="alert alert-info">{{ Session::get('sucess') }}</p>
    @elseif (Session::has('error'))
        <p class="alert alert-danger">{{ Session::get('error') }}</p>
    @endif

    <table id="computer-table"  cellspacing="0" width="10%">
        <thead>
        <tr>
            <th>nome</th>
            <th>ano lançamento</th>
            <th>fabricante</th>
            <th>sistema operacional</th>
            <th>cpu</th>
            <th>memória</th>
            <th>armazenamento</th>
            <th>preço inicial</th>
            <th>imagem</th>
            <th>comentário</th>
            <th>criação</th>
            <th class="text-right" style="width: -100px !important;">ações</th>
        </tr>

        </thead>
        <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->name ?? '' }}</td>
            <td>{{ $page->launch_year ?? '' }}</td>
            <td>{{ $page->manufacturer ?? '' }}</td>
            <td>{{ $page->operational_system ?? '' }}</td>
            <td>{{ $page->cpu ?? '' }}</td>
            <td>{{ $page->memory ?? '' }}</td>
            <td>{{ $page->storage ?? '' }}</td>
            <td>{{ $page->initial_price ?? '' }}</td>
            <td>{{ $page->image ?? '' }}</td>
            <td>{{ $page->comments ?? '' }}</td>
            <td>{{ $page->created_at ?? '' }}</td>
            <td class="">
                <a href="#" ng-click="editComputer( {{ $page->id  ?? '' }} )" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a ng-click="preparedeleteComputer( {{ $page->id ?? '' }} )" class="btn btn-danger">X</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endcomponent
