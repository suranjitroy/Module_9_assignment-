<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 mx-auto text-center mb-5">
          <h2 class="display-5 fw-bold mt-2 mb-3">My Projects</h2>
        </div>
      </div>
      <div class="row">
        @foreach($projects as $item)
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="d-flex justify-content-center align-items-center py-5 bg-light rounded">
              <div class="text-center">
                <img class="mx-auto mb-5 img-fluid" src="{{ asset('bootstrap5-plain-assets/images/blue-400-avatar.png') }}" alt="" style="width: 80px;height: 80px">
                <h4 class="fw-bold">{{ $item->project_name}}</h4>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>