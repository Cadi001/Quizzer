@include('components.header')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="col-4">
                <h1 class="text-center">Register</h1>
                <div>
                    <form>
                    <label class="form-label px-5">Username</label>
                    <input id="username" name="username" class="form-control mx-5 my-2 d-block" type="text" placeholder="username">
                    <label class="form-label px-5">Password</label>
                    <input id="password" name="password" class="form-control mx-5 my-2 d-block" type="text" placeholder="password">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary px-5 m-2">Register</button>
                    </div>
                    </form>
                </div>
            </div>
      
    </div>
</div>
@include('components.footer')