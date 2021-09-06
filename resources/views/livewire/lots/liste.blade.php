<div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              
              <div class="card-header bg-orange">
                <h3 class="card-title"><i class="fas"></i><b>Liste des Lots</b></h3>

                <div class="card-tools d-flex align-items-center">
                <a class="btn btn-link text-white mr-4 d-block bg-black" wire:click.prevent='goToAddLot()'><i class="fa fa-plus"></i>Nouveau Lot</a>
                  <div class="input-group input-group-md" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0 table-striped" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                     
                      <th style="width:50%;">N°contrat</th>
                      <th style="width:50%;">N°AO</th>
                      <th style="width:50%;">N°AP</th>
                     <th style="width:50%;">Désignation</th>
                      <th style="width:50%;" >Fournisseur</th>
                      <th style="width:10%;">QTE</th>
                      <th style="width:10%;">COUT</th>
                      <th  class="text-center">Ajouté </th>
                      <th  class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($lots as $lot )
                     
                   
                    <tr>
                    
                      <td>{{$lot->num_lot}}</td>
                      <td>{{$lot->num_ao}}</td>
                      <td>{{$lot->num_ap}}</td>
                     
                      <td>{{$lot->categorie->nom}} {{$lot->marque->nom}}{{$lot->modele->nom}} </td>
                     <td>{{$lot->fournisseur}}</td>
                      <td>{{$lot->qte}}</td>
                      <td>{{$lot->cout}}</td>
                      <td class="text-center"><span class="tag tag-success">{{ $lot->created_at->diffForHumans()}}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link bg-orange" wire:click.prevent='goToEditLot({{$lot->id}})'><i class="far fa-edit"></i></button> 
                      <button class="btn btn-link bg-orange" wire:click="confirmDelete('{{$lot->num_lot}}','{{$lot->id}}')" ><i class="far fa-trash-alt"></i></button>
                      
                      </td>
                      
                    </tr>
                   @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class ="card-footer">
                 <div class="float-right"> 
                {{ $lots->links() }}
                 </div>

              </div>
              <!-- /.card -fotter-->
             </div>
            <!-- /.card -->
          </div>
  


</div>

  