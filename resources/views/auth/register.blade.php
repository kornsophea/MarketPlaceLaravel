<x-master-layout>
    <div class ='row mt-5'>
    <div class="col-md-4">
        <form action="/registers" method="post">
         @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">User Name</label>
            <input type="text" value="moon" class="form-control" name="name" aria-describedby="nameHelp">
            
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email"value="mmoon@gmail.com" class="form-control"name="email" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" value ="12345678"class="form-control" name="password" >
            
        </div>
        <div class="mb-3">
            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
            <input type="password"value="12345678" class="form-control"name="confirm" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</x-master-layout>

