@extends('admin.templates.main')

@section('content')
<div class="container pr-5">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2 class="mb-4">Novo Produto</h2>
        <div>
            <img class="imagem-outros" src="{{ asset('assets/admin/produto.svg') }}" alt="">
        </div>
    </div>


    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">


        @csrf
        <div class="row">
            <div class="form-group col-md-8">
                <label class="control-label"> Nome Produto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                <small><span class="text-danger">{{ $errors->first('name') }}</span></small>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label"> Quantidade</label>
                <input type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{old('quantity')}}">
                <small><span class="text-danger">{{ $errors->first('quantity') }}</span></small>
            </div>

            <div class="form-group col-md-2">
                <label class="control-label">Tamanho</label>
                <select class="form-control @error('size') is-invalid @enderror" name="size">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="XG">XG</option>
                </select>
                <small><span class="text-danger">{{ $errors->first('size') }}</span></small>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label class="control-label"> Categoria </label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-3">
                <label class="control-label">Cor</label>
                <input type="text" class="form-control @error('color') is-invalid @enderror" name="color">
                <small><span class="text-danger">{{ $errors->first('color') }}</span></small>
            </div>

            <div class="form-group col-md-3">
                <label class="control-label"> Preço</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price">
                <small><span class="text-danger">{{ $errors->first('price') }}</span></small>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id=" exampleFormControlTextarea1"
                rows="2" name="description"></textarea>
            <small><span class="text-danger">{{ $errors->first('description') }}</span></small>
        </div>

        <div class="form-group float-right">
            <input type="file" class="form-control-file" name="image">
        </div>


        <div class="">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-danger" href="{{ route('products.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection
