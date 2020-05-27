@extends('admin.templates.main')
@section('content')
<h2> Cadastro de Produtos</h2>

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group text-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    <div class="row">

        <div class="form-group col-md-6">
            <label class="control-label"> Nome Produto</label>
            <div>
                <input type="text" class="form-control" name="name">
            </div>

        </div>

        <div class="form-group col-md-3">
            <label class="control-label"> Quantidade</label>
            <div>
                <input type="text" class="form-control" name="quantity">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label class="control-label"> Categoria </label>
            <div>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group col-md-3">
            <label class="control-label"> Preço</label>
            <div>
                <input type="text" class="form-control" name="price">
            </div>
        </div>


    </div>

    <div class="row">

        <div class="form-group col-md-5">
            <label class="control-label"> Imagem</label>
            <div>
                <input type="file" name="image" class="form-control">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label class="control-label"> Cor</label>
            <div>
                <input type="text" class="form-control" name="color">
            </div>
        </div>

        <div class="form-group col-md-3">
            <label class="control-label"> Tamanho</label>
            <div>
                <input type="text" class="form-control" name="size">
            </div>
        </div>
    </div>


    <div class="row">

        <div class="form-group col-md-10">
            <div>
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
        </div>
    </div>

    <button type="submit" class="btn-primary"> Cadastrar</button>
</form>
@endsection