<x-master-layout>
    <div class ='row mt-5'>
    <div class="col-md-6">
        <form action="/login" method="post">
         @csrf
    
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email"value="mmoon@gmail.com" class="form-control"name="email" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" value ="12345678"class="form-control" name="password" >
            
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</x-master-layout>

