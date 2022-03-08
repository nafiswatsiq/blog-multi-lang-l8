@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" class="d-grid gap-4">
                @csrf
                <div class="form-group">
                    <label for="cover">Cover</label>
                    <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror" value="{{old('cover')}}" id="cover" required>
                    @error('cover')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title_id">Title ID</label>
                    <input type="text" name="title_id" class="form-control @error('title_id') is-invalid @enderror" value="{{old('title_id')}}" required>
                    @error('title_id')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title_en">Title EN</label>
                    <input type="text" name="title_en" class="form-control @error('title_en') is-invalid @enderror" value="{{old('title_en')}}" required>
                    @error('title_en')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="desc_id">Description ID</label>
                    <textarea name="desc_id" id="desc_id" cols="30" rows="10" class="form-control @error('desc_id') is-invalid @enderror" required>{{old('desc_id')}}</textarea>
                    @error('desc_id')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="desc_en">Description EN</label>
                    <textarea name="desc_en" id="desc_en" cols="30" rows="10" class="form-control @error('desc_en') is-invalid @enderror" required>{{old('desc_en')}}</textarea>
                    @error('desc_en')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                        <option value="" disabled selected>Choose one</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tag">Tags</label>
                    <select name="tags[]" id="tag" class="form-control select2 @error('tags') is-invalid @enderror" required multiple>
                        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{old('keywords')}}" required>
                    @error('keywords')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="meta_desc">Meta Desc</label>
                    <input type="text" name="meta_desc" class="form-control @error('meta_desc') is-invalid @enderror" value="{{old('meta_desc')}}" required>
                    @error('meta_desc')
                    <div class="invalid-feedback">
                        {{ $message }}    
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection