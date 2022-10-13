<x-master-layout>
    <h3 class="my-5">{{$post->title}}</h3>
          <div class="row">
            <div class="col-8 ">
                <img src="/storage/{{$post->image}}" class="card-img-top" alt="...">
            </div>
            <div class="col-4">
               <div class="card " style="width: 18rem;">
            
                <ul class="list-group list-group-flush">
                             <li class ="list-group-item">Price: <span class="display-4">{{$post->price}}</span></li>
                </ul>
            </div>
            <div class="col-4">
               <div class="card " style="width: 18rem;">
            
                <ul class="list-group list-group-flush">
                      <li class ="list-group-item">Category: <span class="display-4">{{$post->Category->name}}</span></li>
                </ul>
            </div>
               <a href="#" class="btn btn-primary">Contact Now</a>
            </div>
            <div>
                
            </div>
          </div>
        
</x-master-layout>