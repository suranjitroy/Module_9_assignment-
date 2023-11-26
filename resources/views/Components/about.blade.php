<section class="py-5">
  <h2 class="display-5 fw-bold mt-2 mb-5 text-center">About me</h2>
    <div class="container">
      <div class="row align-items-top justify-content-center">
        <div class="col-12 col-md-9 col-lg-6 col-xl-5">
          <div class="mx-auto mb-5">
            <h4 class="fw-bold mt-2 mb-4">Name : {{ $data->name}}</h4>
            <h5 class="fw-bold mt-2 mb-4">Designation : PHP & Laravel Developer</h5>
            <h5 class="fw-bold mt-2 mb-4">Email : {{ $data->email}}</h5>
            <p class="lead text-muted mb-4"><span class="fw-bold">About Myself :</span> {{ $data->mydescription }}</p>
          </div>
        </div>
        <div class="col-12 col-md-9 col-lg-6 col-xl-5 offset-xl-2">
          <div class="px-4 py-5 px-lg-5 bg-light rounded mx-auto">
            <h3 class="fw-bold mt-2 mb-4">Project List</h3>
            @foreach($projects as $item)
            <div class="d-flex mb-5">
              <span class="d-flex flex-shrink-0 me-3 me-lg-5 justify-content-center align-items-center rounded-circle bg-primary text-white" style="width: 48px;height: 48px">{{ $item->id }}</span>
              <div>
                <p class="lead fw-bold">{{ $item->project_name }}</p>
                <p class="lead text-muted">{{ $item->project_desc}}</p>
                <p class="lead fw-bold" style="font-size: 14px;">Total Project: {{ $item->total_project}}</p>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>