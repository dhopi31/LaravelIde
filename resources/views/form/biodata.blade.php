@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">FORM BIODATA</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>
                        <div class="mb-3 col-4">
                          <label for="exampleInputEmail1" class="form-label">Posisi yang dilamar</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3 col">
                          <label for="exampleInputPassword1" class="form-label">Nama</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 col">
                            <label for="exampleInputPassword1" class="form-label">NIK</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                        <div class="mb-3 col">
                          <label for="exampleInputEmail1" class="form-label">Alamat</label>
                          <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                        </div>
                        
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
