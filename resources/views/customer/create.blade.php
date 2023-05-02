@extends('template.main')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">  
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah Data Customer</h5>
        <small class="text-muted float-end"> Input data customer</small>
      </div>
      <div class="card-body">
        <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class=" col-form-label" for="basic-icon-default-fullname">Nama Customer</label>
            <div class="col-sm-12">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="fa-solid fa-user"></i></span>
                <input
                  type="text"
                  class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}"
                  id="basic-icon-default-fullname"
                  placeholder="masukan nama"
                  name="nama"
                />
               
              </div>
              @error('nama')
              <small class="text-danger">
                  {{ $message }}
              </small>
              @enderror
            </div>
            <div class="col-md-6 mt-2">
              <label class=" col-form-label" for="basic-icon-default-company">Alamat</label>
              <div>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text"
                    ><i class="fa-solid fa-house"></i></span>
                  <input
                    type="text"
                    id="basic-icon-default-company"
                    class="form-control {{ $errors->first('alamat') ? "is-invalid" : "" }}"
                    placeholder="masukkan alamat"
                    name="alamat"
                  />
                 
                </div>
                @error('alamat')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
            </div>

            <div class="col-md-6 mt-2">
                <label class=" col-form-label" for="basic-icon-default-company">Kota</label>
                <div>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"
                      ><i class="fa-solid fa-city"></i></span>
                    <input
                      type="text"
                      id="basic-icon-default-company"
                      class="form-control {{ $errors->first('kota') ? "is-invalid" : "" }}"
                      placeholder="masukkan kota"
                      name="kota"
                    />
                   
                  </div>
                  @error('alamat')
                  <small class="text-danger">
                      {{ $message }}
                  </small>
                  @enderror
                </div>
              </div>
          
            
          
            <div class="col-md-6 mt-2">
              <label class=" form-label" for="basic-icon-default-phone">Email</label>
              <div>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-phone2" class="input-group-text"
                    ><i class="fa-solid fa-envelope"></i></span>
                  <input
                    type="email"
                    id="basic-icon-default-phone"
                    class="form-control {{ $errors->first('email') ? "is-invalid" : "" }}"
                    placeholder="masukkan email"
                    name="email"
                  />
                 
                </div>
                @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
            </div>

            <div class="col-md-6 mt-2">
              <label class=" form-label" for="basic-icon-default-message">Handphone</label>
              <div>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-message2" class="input-group-text"
                    ><i class="fa-solid fa-phone"></i></span>
                  <input
                    id="basic-icon-default-message"
                    class="form-control {{ $errors->first('handphone') ? "is-invalid" : "" }}"
                    type="number"
                    name="handphone"  
                  />
                 
                </div>
                @error('handphone')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
            </div>
          
            <div class="col-md-12 mt-2">
              <label class=" form-label" for="basic-icon-default-message">Perusahaan</label>
              <div>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-message2" class="input-group-text"
                    ><i class="fa-solid fa-building"></i></span>
                  <input 
                    id="basic-icon-default-message"
                    class="form-control {{ $errors->first('perusahaan') ? "is-invalid" : "" }}"
                    type="text"
                    placeholder="masukkan perusahaan"
                    name="perusahaan"  
                    >
                  </input>
                 
                </div>
                @error('perusahaan')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
            </div>
              <center><button type="submit" class="btn btn-primary mt-4">Simpan</button></center>
            </div>
        </form>
      </div>
    </div>
    </div>
</div>


@endsection      
         
         
          
       
      