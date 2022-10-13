<x-master-layout>
        
         
          <div class="row">
            @foreach ($posts as $post)
            <div class="card col-sm-6 col-lg-2 col-md-4" style="width: 18rem;">
            <img src="{{$post->image}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->price}}</p>
            <a href="#" class="btn btn-primary">Read Detail</a>
           </div>
        </div>
            @endforeach
            
          </div>
        {{$posts->links()}}
</x-master-layout>