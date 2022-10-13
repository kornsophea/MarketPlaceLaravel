<x-master-layout>   

    <h3>Create New Post</h3>
    <div class="row">
      <div class="col-6">
        {{-- @if($errors->any()) --}}
          {{-- <div class ="alert alert-danger" role ="alert">
            Please fix following error!
          </div>
        
        @endif --}}
<form action="/post" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="inputCategory" class="form-label">Category</label>
    <select name="category"placeholder="Choose" class="form-select" id="">
      <option value="">--Choose One--</option>
      @foreach ($categories as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
    </select>
       @if($errors->first('category'))
          <div id="" class="invalid-feedback">
            {{$errors->first('category')}}
          </div>
       @endif
  </div>
     <label for="inputTitel" class="form-label">Titel</label>
    <input type="text" name="title" class="form-control" @if($errors->first('title')) is-invalid @endif id="inputTitle"  aria-describedby="priceHelp">
     @if($errors->first('title'))
          <div id="" class="invalid-feedback">
            {{$errors->first('title')}}
          </div>
       @endif
  </div>
  <div class="mb-3">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" @if($errors->first('price')) is-invalid @endif id="inputPrice"  aria-describedby="priceHelp">
     @if($errors->first('price'))
          <div id="" class="invalid-feedback">
            {{$errors->first('price')}}
          </div>
       @endif
  </div>
  <div class="mb-3">
    <label for="inputImage" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="inputImage" aria-describedby="imageHelp">
    <div id="imageHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="inputDescription" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="inputDescription"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
</x-master-layout>