@extends("back.master")
@section('title','Makale Oluştur')
@section('content')

<div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header card-header-primary ">
                <h4 class="card-title">Makale Ekle</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as$error )
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                <form action="{{route('admin.create.post')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    {{ csrf_field() }}
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Başlık</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <select name="category" class="form-control">
                            <option value="" style="color: black">Kategori Seçiniz</option>

                            <option value="" style="color: black">5</option>
                            <option value="" style="color: black">7</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label>Açıklama</label>
                        <div class="form-group">
                            <label class="bmd-label-floating">Makalen hakkında yazılarını buraya yaz.</label>
                            <textarea class="form-control" name="content" rows="5"  required>{{old('content')}}</textarea>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">

                        <label >Resim ekle</label>
                        <input type="file" name="image" style="position: unset; opacity: 1px "  >
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right"> Ekle  </button>
                    <div class="clearfix"></div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>

@endsection