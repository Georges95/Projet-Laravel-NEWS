@extends('back.app')

@section('title', 'Dashboard - Categorie')

@section('dashboard-header')

<div class="row align-items-center">
	<div class="col">
		<div class="mt-5">
			<h4 class="card-title float-left mt-2">Categories</h4>
			<a	href="{{ route('category.create') }}"
				class="btn btn-primary float-right veiwbutton"
				>Ajouter une categorie</a>
		</div>
	</div>
</div>

@endsection

@section('dashboard-content')

<div class="row">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

	<div class="col-sm-12">
		<div class="card card-table">
			<div class="card-body booking_card">
				<div class="table-responsive">
					<table class="datatable table table-stripped table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>ID Categorie</th>
								<th>Nom</th>
								<th>Description</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody>
							<td>CAT-0001</td>
							<td>Nom categorie</td>
							<td>Breve description</td>
							<td class="text-right">
								<div class="dropdown dropdown-action"> <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
									<div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="edit-categorie.html"><i class="fas fa-pencil-alt m-r-5"></i> Modifier</a> <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Supprimer</a> </div>
								</div>
							</td>

						</tboby>
                         <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                           <div class="modal-dialog modal-dialog-centered">
                             <div class="modal-content">
                               <div class="modal-body text-center">
                                 <img src="assets/img/sent.png" alt="" width="50" height="46" />
                                 <h3 class="delete_class">
                                   Etes vous sure de vouloir supprimer cet element ?
                                 </h3>
                                 <div class="m-t-20">
                                   <a href="#" class="btn btn-white" data-dismiss="modal">Fermer</a>              >
                                   <button type="submit" class="btn btn-danger">Supprimer</button>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
				    </table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

