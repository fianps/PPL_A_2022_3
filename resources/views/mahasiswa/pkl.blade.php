@extends('mahasiswa/layouts/main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
          <div class="text-start">
              <h3 class="h3">{{ auth()->user()->name }}</h3>
              <p class="m-0">Mahasiswa</p>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4">
                  <div class="card-body">
                      <div class="mb-3">
                          <label for="status" class="form-label">Status</label>
                          <p type="text" class="form-control border-0" id="status" name="status">{{ $pkl->status }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="nilai" class="form-label">Nilai</label>
                          <p type="text" class="form-control border-0" id="nilai" name="nilai">{{ $pkl->nilai }}</p>
                      </div>
                      <div class="mb-3">
                          <label for="file_pkl" class="form-label">Berita Acara</label>
                          <a href="storage/pkl/{{$pkl->file_pkl}}" target="_blank" style="text-decoration: none" class="form-control border-0 text-primary">Cek Berita Acara</a>
                      </div>
                      <a href="/edit-pkl/{{ $pkl->id }}" class="btn btn-primary">Change</a>
                  </div>
              </div>
            </div>
        </div>
    </main>
@endsection
        

    
    
    