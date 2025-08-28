  @extends('layouts.app')
    @section('content')
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <div class="container mt-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Senarai Post</h2>
          <!-- <a href="{{route('inventory.create')}}" class="btn btn-primary">+ Tambah Post</a> -->
      </div>

      @if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

              <table class="table table-bordered table-hover">
                  <thead class="table-dark text-center">
                      <tr>
                          <th>ID</th>
                          <th>Title</th>

                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($posts as $item)
                          <tr>
                              <td class="text-center">{{ $item->id }}</td>
                              
                              <td>{{ $item->title }}</td>

                          </tr>
                          <!-- Modal Popup -->
          
                      @empty
                          <tr>
                              <td colspan="9" class="text-center text-muted">Tiada rekod ditemui</td>
                          </tr>
                      @endforelse
                  </tbody>
              </table>

            
          </div>
      </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
