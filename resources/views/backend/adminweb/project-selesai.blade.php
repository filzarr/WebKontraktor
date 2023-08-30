@extends('backend.component.main')
@section ('breadcrumb')
  <nav aria-label="breadcrumb" class="mt-4">
    <ol class="breadcrumb breadcrumb-style1">
      <li class="breadcrumb-item">Project</li>
      <li class="breadcrumb-item active">
        <a href="/Project-Selesai">Project Selesai</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col py-5">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('images') }}/laporan1.jpg" alt="Card image cap" style="height: 150px;" />
              <div class="card-body">
                 <h3 style="text-align: center;">Total Finished Project's : {{ $total }}</h3>
              </div>
            </div> 
           

        {{-- <div class="row mb-4"> --}}
          @foreach ($project as $item)
                
              <div class="card mt-3" >
                  <div class="d-flex align-items-end row">
                      <div class="card-body" style="padding-bottom: 1rem;">
                              <div class="row">
                              <div class="col col-lg-1"><i class="tf-icons bx bx-spreadsheet" style="font-size: 80px;"></i></div>
                              <div class="col col-lg-4"><h3 style="margin-top: 3%">{{ $item->nama_project }}</h3><h6>Start Date: {{ Carbon\Carbon::parse($item->created_at)->format('d M Y - H:i:s') }}</h6></div>
                              <div class="col col-lg-2" style="text-align: center;">
                                <img src="{{ asset('backend/style1') }}/assets/img/avatars/7.png" alt="Avatar" style="width: 50px;" class="rounded-circle mt-3" />
                                <br><span class="badge bg-label-warning rounded-pill mt-3" style="text-align: center">{{ $item->Total }} People</span>
                              </div>
                              <div class="col col-lg-2" spellcheck="text-align: center;"><h5>Total Hari Pengerjaan</h5>
                                  <li class="d-flex mb-4 pb-1">
                                      <div class="avatar flex-shrink-0 me-3">
                                        <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calendar-alt"></i></span>
                                      </div>
                                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                          <h6 class="mb-0">{{ Carbon\Carbon::parse($item->updated_at)->diffInDays(Carbon\Carbon::parse($item->created_at)) }} Days</h6>
                                        </div> 
                                      </div>
                                    </li>
                              </div>
                              <div class="col col-lg-2" style="text-align: center;"><h5>Status</h5> <span class="badge bg-label-info rounded-pill" style="font-size: 15px">Finish</span></div>
                              <div class="col col-lg-1" style="text-align: center;"><h5>View More</h5> <a href="/project/{{ $item->id_project }}" type="button" class="btn btn-outline-primary"><span class="tf-icons bx bx-log-in-circle"></span></a></div>
                              

                          </div>
                      </div>
                  
                  </div>
              </div>

          @endforeach
         
      

          <div class="content-backdrop fade"></div>
      {{-- </div> --}}

    </div>
  </div>
@endsection