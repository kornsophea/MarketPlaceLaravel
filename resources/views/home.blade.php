<x-master-layout>

      
          <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">Moon Li</h1>
              <p class="col-md-8 fs-4">This is About Page</p>
              <a href="/add" class="btn btn-primary col-2">Read more</a>
            </div>
          </div>
          <div class="row">
            @foreach ($posts as $post)
            
            <div class="card col-sm-6 col-lg-2 col-md-4" style="width: 18rem;">
            <img src="/storage/{{$post->image}}" class="card-img-top" alt="...">
               <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->price}}</p>
                <a href="/post/{{$post->id}}" class="btn btn-primary">Read Detail</a>
              </div>
            </div>
            @endforeach
            
          </div>
        <a href="/readmore" class="btn btn-primary col-2">Read more</a>
</x-master-layout>