@extends('layouts.master')

@section('title','Company')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Company</h1>   
    <div class="row justify-content-md-center">
        <div class="col-7">
            <div class="card mt-2">
                <div class="card-header bg-secondary text-white">
                    <h4 class="card-title pt-2">Daftar Company</h4>
                </div>                   
                <div class="card-body" style="background-color:rgb(248, 248, 248)">
                    <table class="table table-sm table-bordered table-hover table-responsive small" style="background-color:rgb(255, 255, 255)">
                        <thead class="table-dark">
                            <tr class="text-center ">
                                <th class="align-middle" style="width: 2%">No</th>
                                <th class="align-middle" style="width: 5%">Kode Cabang</th>
                                <th class="align-middle" style="width: 20%">Nama Cabang</th>
                                <th class="align-middle" style="width: 8%">Action</th>
                            </tr>
                        </thead>
                        <tbody>                                
                            @foreach ($company as $index => $coy)
                            <tr class="text-center">
                                <td class="align-middle">{{$index +1}}</td>
                                <td class="align-middle">{{$coy->coycode}}</td>
                                <td class="align-middle">{{$coy->description}}</td>
                                <td class="align-middle"> 
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" title="Hapus User" id="btnHapus" data-id=""><i class="bi bi-trash-fill"></i></button>
                                </td>
                            </tr>                                    
                            @endforeach                                
                        </tbody>
                    </table>                                
                </div>
            </div> 
        </div> 
        <div class="col-5">
            <div class="card mt-2">
                <div class="card-header bg-secondary text-white ">
                    <h4 class="card-title mx-3 pt-2">Tambah Company</h4>
                </div>
                <div class="card-body" style="background-color:rgb(248, 248, 248)">
                    <form id="forminput" action="add-user.php" method="POST" class="needs-validation mx-3" novalidate >
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="text" name="usertype" class="form-control" id="usertype" placeholder="Kode Company" required>
                                <div class="invalid-feedback">
                                    Kode company harus diisi
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                </div>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Nama Company" required>
                                <div class="invalid-feedback">
                                    Nama Company
                                </div>
                            </div>
                        </div>                         
                        <button type="reset" class="btn btn-danger" name="reset"><i class="bx bx-reset"></i> Reset</button>
                        <button type="submit" class="btn btn-primary" name="simpan"><i class="bx bxs-save"></i> Simpan</button>
                    </form>
                </div>               
            </div>
        </div>   
    </div>
</div> 
@endsection