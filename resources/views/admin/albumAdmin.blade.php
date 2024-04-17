@extends('admin.main')
@section('content') 

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Invoices</h4>
          <div class="card-header-action">
            <a href="/tambahAlbum" class="btn btn-info">Tambah Album <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Album</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tanggal Dibuat</th>
                    <th scope="col">UserID</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>syifa</td>
                    <td>aku</td>
                    <td>yyy</td>
                    <td>jisj</td>
                  </tr>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection