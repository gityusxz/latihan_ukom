@extends('template.main')
@section('konten')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mt-4">
       
      <div class="card-header">
            <h5 class="page-tittle" style="float:left">Data Customer</h5>
            <a href="{{route('customer.create')}}">
                <button style="float:right"  type="button" class="btn btn-primary ">Input Data Customer</button>
            </a>
      </div>
       
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 5%">No</th>
                <th>Nama customer</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Email</th>
                <th>Hp</th>
                <th>Perusahaan</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @php
              $no = 1;
              @endphp
              
             {{-- looping data disini masze --}}
             @foreach($customer as $item)
              <tr>
                <td>{{$no}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->kota}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->hp}}</td>
                <td>{{$item->perusahaan}}</td>
                
                <td>
                    
                    <a href="{{route('customer.delete', $item->id)}}">
                    <button onclick="return confirm('yakin mau apus?')" type="button" class="btn btn-icon btn-outline-danger">
                      <i class="fa fa-trash"></i>
                    </button>
                  </a>
    
                 </td>
              </tr>
              @php
              $no++;
              @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
@endsection