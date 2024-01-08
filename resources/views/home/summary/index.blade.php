<div class="container-fluid ms-auto">
  <div class="row g-0" data-aos="fade-in" data-aos-duration="1000">
    @foreach ($summaries as $summary)
      <div class="col hov my-3 mx-3 text-center" style="border-radius: 15px; background: var(--bs-gray-200);">
        <div class="my-5 p-3 hov-1">
          <div class="mb-2">
            <img src="/assets/media/img/{{ $summary->image }}" alt="" width="100px">
          </div>
          <hr class="divider">
          <h4 class="mb-2 fw-bold">{{ $summary->jumlah }}</h3>
            <h3 class="mb-2 fw-bold">{{ $summary->nama }}</h3>
        </div>
      </div>
    @endforeach
  </div>
</div>
