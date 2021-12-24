@extends("back.master")
@section('title','Tüm Makaleler')
@section("content")

    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Tüm Makaleler</h4>
                <p class="card-category"> Makaleler ile ilgili işlemleri buradan gerçekleştirebilirsin.</p>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
                        <th>
                        Başlık
                        </th>
                        <th>
                        Kategori
                        </th>
                        <th>
                        Resim
                        </th>
                        <th>
                        İçerik
                        </th>
                        <th>
                        Durum
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($article as $artic)
                        <tr>
                        <td>
                            {{$artic->title}}
                        </td>
                        <td>
                            {{{$artic->category}}}
                        </td>
                        <td>
                            <img src="{{$artic->image}}" alt="" srcset="" class="w-50">
                        </td>
                        <td id="content-config">
                            {{Str::limit($artic->content,50)}}
                        </td>
                        <td>
                            <a href="{{route('content.view',$artic->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" title="Gözat"></i></a>
                            <a href="{{route('admin.update',$artic->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" title="Düzenle"></i></a>
                            <a href="{{route('admin.destroy',$artic->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" title="Sil"></i></a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection