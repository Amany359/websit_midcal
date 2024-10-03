{{--
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->name}}</td>
                <td>{{ $category->description}}</td>
                <td>  
                    @if(isset($category->image))
                           <img src="{{asset('imags/'.$category->image)}}"  width="90" height="90" />
                    @else
                           <img src="{{asset('asset/assets/images/front-view-young-female-doctor-white-medical-suit-with-stethoscope-wearing-white-protective-mask-white (1).png')}}" width="90" height="90" />>
          </div>
                    @endif
                
                   
                
                </td>
                <td>
                    <a href="{{ route('admin.dashboard.categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.dashboard.categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@extends('admin.layouts.master')
@section('title')
Categories
@stop
@section('content')



    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">{{__('words.dashboard')}}</li>
        <li class="breadcrumb-item"><a href="#">{{__('words.dashboard')}}</a>
        </li>
        <li class="breadcrumb-item active">{{__('words.categories')}}</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;{{__('words.dashboard')}}</a>
                <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;{{__('words.categories')}}</a>
            </div>
        </li>
    </ol>


    {{dd($setting)}} 

    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Striped Table
                </div>
                <div class="card-block">
                    <table class="table table-striped" id="table_id">
                        <thead>
                            <tr>
                                <th>ID</th>
                              <th>Name</th>
                               <th>Description</th>
                                <th>image</th>
                                <th>Parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    delete 
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <form action="{{ Route('admin.dashboard.categories.destroy') }}" method="POST">
        <div class="modal-content">

            <div class="modal-body">
                @csrf

                <div class="form-group">
                    <p>{{ __('words.sure delete') }}</p>
                    @csrf
                    <input type="hidden" name="id" id="id">
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('words.close') }}</button>
                <button type="submit" class="btn btn-danger">{{ __('words.delete') }} </button>
            </div>
        </div>
    </form>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
{
@endsection







@push('javascripts')
    <script type="text/javascript">
        $(function() {
            var table = $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ Route('admin.dashboard.categories.index') }}",
                columns: [
                 
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'parent',
                        name: 'parent'
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }
                ]
            });

        });

        $('#table_id tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
        })
    </script>
@endpush
--}}


//  public function getall()
       // {
        ////    $query = Category::select('*')->with('parent');
         //   return  Datatables::of($query)
          //      ->addIndexColumn()
           //    ->addColumn('action', function ($row) {
    //
             //       {
                ////        return $btn ='
                  // 
                  //    //      <a href="' . Route('admin.dashboard.categories.edit', $row->id) . '"  class="edit btn btn-success btn-sm" ><i class="fa fa-edit"></i></a>
                       //     <a id="deleteBtn" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"  data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></a>';
                  //  }
               // })
    
                //->addColumn('parent', function ($row) {
                 ////   return ($row->parent ==  0) ?'قسم رئيسي' :$row->parent-> $row->parents->name;
               // })
    
               // ->addColumn('image', function ($row) {
                  //  return '<img src="' . asset($row->image) . '" width="90" height="90" />';
               // })
               
              
               
               // ->rawColumns(['parent','action', 'image' ])
               //->make(true);
      // }
    
       
        /**



        {{--@extends('admin.layouts.master')

@section('title')
Categories
@stop
@section('title-home')
الاقسام الرئسية
@endsection

@section('css')
<link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

@section('content')
<div class="container">

@extends('admin.layouts.master')






    <!-- Modal Trigger -->
   

   
    
    <table class="table table-striped" id="#categories">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Parent</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
      
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>

    <!-- Modal -->
     <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
        قسم الرئيسي
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs_vaildation">
                        @csrf
                        <div class="form-group">
                            <label for="vaildationcoustom01" class="mb-1">الاسم</label>
                            <input type="text" class="form-control" id="vaildationcoustom01" name="name">
                        </div>
                        <div class="form-group">
                            <label for="vaildationcoustom01" class="mb-1">القسم الرئيسي</label>
                            <select id="vaildationcoustom01" class="form-control" name="parent_id">
                                <option value="">القسم الرئيسي</option>
                                <!-- Loop through categories for parent options -->
                                @foreach($mincategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vaildationcoustom01" class="mb-1">الوصف:</label>
                            <textarea class="form-control" id="vaildationcoustom01" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="vaildationcoustom01" class="mb-1l">الصور:</label>
                            <input type="text" class="form-control" id="vaildationcoustom01" name="image">
                           
                       
                    </form>
                    <!--modal--->
               

    <!-- Datatable 
    
</div>

   {{-- delete 
   <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
       <form action="{{ Route('admin.dashboard.categories.destroy') }}" method="POST">
           <div class="modal-content">
   
               <div class="modal-body">
                   @csrf
   
                   <div class="form-group">
                       <p>{{ __('words.sure delete') }}</p>
                       @csrf
                       <input type="hidden" name="id" id="id">
                   </div>
   
   
   
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('words.close') }}</button>
                   <button type="submit" class="btn btn-danger">{{ __('words.delete') }} </button>
               </div>
           </div>
       </form>
       <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div>
   {{-- delete


@endsection

 
@section('javascripts')
<script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>


<script>
$('table').DataTable();

</script>

    <script type="text/javascript">
        $(function() {
            var table = $('#deletemodal').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ Route('admin.dashboard.categories.getall') }}",
                columns: [
                    {
                        data: "id",
                        name: "id"
                    },
                {
                        data: "name",
                        name: "name"
                    },
                    {
                        data: "description",
                        name: "description"
                    },
                    {
                        data: "image",
                        name: "image"
                    },

                    {
                        data: "parent_id",
                        name: "parent_id"
                    },
                   
                    {
                        data: "action",
                        name: "action",
                    }
                ]
            });

        });

        $('#table_id tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
        })
    </script>


@endsection

--}}


@extends('admin.layouts.master')

@section('title')
Categories
@stop
@section('title-home')
الاقسام الرئسية
@endsection


@section('content')




<table class="table table-striped" id="#categories">
    
    
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Parent</th>
            <th>Actions</th>
          </tr>
          @foreach($categories as $category)
          <tr>
              <td>{{ $category->id}}</td>
              <td>{{ $category->name}}</td>
              <td>{{ $category->description}}</td>
              <td>  
                  @if(isset($category->image))
                         <img src="{{asset('imags/'.$category->image)}}"  width="90" height="90" />
                  @else
                         <img src="{{asset('asset/assets/images/front-view-young-female-doctor-white-medical-suit-with-stethoscope-wearing-white-protective-mask-white (1).png')}}" width="90" height="90" />>
        </div>
        <td>{{ $category->Parent}}</td>
        <td>{{ $category->Actions}}</td>
                  @endif
       @endforeach
  </table> 
  @section('css')
<link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
@endsection

  @section('javascripts')
<script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>


<script>
$('table').DataTable();

</script>

 @stop





 $(function()){
    var table= $('#editableTable').DataTable{(
     
     ajax: "{{ route('admin.dashboard.categories.getall') }}",
       processing: true,
       serverSide: true,
       type: 'GET'
       
       columns: [
                      
                   {
                           data: 'name',
                           name: 'name'
                       },
                       
                       {
                           data: 'image',
                           name: 'image'
                       },
                      
                       {
                           data: 'action',
                           name: 'action'
                       }
                   ]
   
   
                   }
   
   });
   