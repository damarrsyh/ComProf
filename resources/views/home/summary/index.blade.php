<div class="container-fluid ms-auto">
  <div class="row g-0" data-aos="fade-in" data-aos-duration="1000">
    @foreach ($summaries as $summary)
      <div class="col hov my-3 mx-3 text-center position-relative"
        style="border-radius: 15px; background: var(--bs-gray-200);">
        <div class="custom-shape-divider-top-1714015617">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill">
            </path>
          </svg>
        </div>
        <div class="my-5 p-3 hov-1">
          <div class="mb-2">
            <img src="/assets/media/img/{{ $summary->image }}" alt="" width="100px">
          </div>
          <hr class="divider">
          <h4 class="mb-2 fw-bold">{{ $summary->jumlah }}</h3>
            <h3 class="mb-2 fw-bold">{{ $summary->nama }}</h3>
        </div>
        <div class="custom-shape-divider-bottom-1714016193">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z"
              class="shape-fill"></path>
          </svg>
        </div>
      </div>
    @endforeach
  </div>
</div>
