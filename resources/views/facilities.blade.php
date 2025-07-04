@extends('layouts.app')

@section('title', 'Facilities - TK Negeri 6 Pekanbaru')

@section('content')
   <div class="container mt-4">
    <h1 class="mb-4  text-center">Fasilitas</h1>

    <div class="row d-flex justify-content-center">
        <!-- Loop untuk menampilkan fasilitas -->
        @foreach($facilities as $facility)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <!-- Gambar fasilitas -->
                    <img src="{{ asset( $facility->image) }}" class="card-img-top" alt="{{ $facility->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $facility->name }}</h5>
                        {{-- <p class="card-text">{{ Str::limit($facility->description, 50) }}</p> --}}
                    </div>
                    <div class="card-footer">
                        <!-- Tombol untuk membuka modal -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#facilityModal" 
                                data-id="{{ $facility->id }}" 
                                data-name="{{ $facility->name }}" 
                                data-description="{{ $facility->description }}" 
                                data-image="{{ asset( $facility->image) }}">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="facilityModal" tabindex="-1" aria-labelledby="facilityModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="facilityModalLabel">Detail Fasilitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img id="facilityImage" src="" class="img-fluid mb-3" alt="Fasilitas">
        </div>
        <h5 id="facilityName"></h5>
        <p id="facilityDescription"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
    // JavaScript untuk mengisi modal dengan data yang sesuai
    document.addEventListener('DOMContentLoaded', function () {
        const facilityModal = document.getElementById('facilityModal');
        
        facilityModal.addEventListener('show.bs.modal', function (event) {
            // Mengambil data dari tombol yang diklik
            const button = event.relatedTarget;
            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const description = button.getAttribute('data-description');
            const image = button.getAttribute('data-image');
            
            // Mengisi modal dengan data yang sesuai
            const modalName = facilityModal.querySelector('#facilityName');
            const modalDescription = facilityModal.querySelector('#facilityDescription');
            const modalImage = facilityModal.querySelector('#facilityImage');
            
            modalName.textContent = name;
            modalDescription.textContent = description;
            modalImage.src = image;
        });
    });
</script>

    @endsection
