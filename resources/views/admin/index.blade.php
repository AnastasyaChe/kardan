@extends('layouts.admin')
@section('content') 

<div class="container-fluid">

      <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Каталог крестовин с размерами</h1> -->
                        

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Каталог крестовин с размерами</h6>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить крестовину</a>
            </div>
            <div class="card-body">
             <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                        <th>Типоразмер</th>
                                        <th>№ По каталогу производителя</th>
                                        <th>Точный размер</th>
                                        <th>Стопорное кольцо</th>
                                        <th>Количество на складе</th>  
                                        <th>Аналоги</th>                  

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Типоразмер</th>
                                    <th>№ По каталогу производителя</th>
                                    <th>Точный размер</th>
                                    <th>Стопорное кольцо</th>
                                    <th>Количество на складе</th>
                                    <th>Аналоги</th>
                                </tr>
                            </tfoot>
                     <tbody>
                   
                     @forelse($krestoviny as $krestovina)
                                <tr>
                                    <td>{{$krestovina->tiporazmer}}</td>
                                    <td>{{$krestovina->catalog_num}}</td>
                                    <td> {{$krestovina->size}}</td>
                                    <td>{{$krestovina->stopornoe_kolco}}</td>
                                    <td>
                                    <div class="d-flex justify-content-between">
                                    <div id="count_{{$krestovina->id}}" data-total_count ="{{$krestovina->total_count}}" class="row p-3">
                                    {{$krestovina->total_count}} 
                                    </div>
                                    <div class="row p-3">
                                    <a class="button-td-plus btn btn-primary btn-sm ml-3" data-krestovina_id="{{$krestovina->id}}"
                                   > + </a>
                                    
                                    <button type="button" id="minus" 
                                    class="btn btn-primary btn-sm ml-3" > - </button>
                                    </div>
                                    </div>
                                    </td>
                                  
                                    <td>{{$krestovina->analogs}}</td></div>
                                    
                                </tr>
                    @empty
                            <h2>Что-то сломалось =(</h2>
                     @endforelse
                     </tbody>
                </table>
                
            </div>
        </div>
    </div>

</div>
    <script>
    
        $('.button-td-plus').click(function(e){
                e.preventDefault();
                let url = '';
                let krestovinaId = $(this).data('krestovina_id');
                console.log(krestovinaId);
                let krestCount = $('#count_' + $(this).data('krestovina_id')).first();
                let total = krestCount.data("total_count");
                console.log(total);
                url = "{{route('admin.krestovina.increment', ['krestovinaId' => 'krestovina_val'])}}";
                total++;
                url = url.replace('krestovina_val', krestovinaId);
                console.log(total, url);
                
            $.ajax({
                    url: url,
                    success: function(data) {
                        krestCount.data("total_count", total);
                    },
                    error: function(data)
                {
                    console.log('2');
                }
                }); 
        
        });
    
        
    </script>
@endsection