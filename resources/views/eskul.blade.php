<x-navbar />

          <div class="row">
            <div class="col-12 text-center">
              <h2>Ekstrakurikuler</h2>
              {{-- card --}}
                <div class="row text-center my-3">
                  @foreach ($data as $item)
                  <div class="col-4 my-3">
                    <div class="card">
                      <div class="card-header">
                        <img width="250px" height="200px" src="{{ $item->foto }}">
                      </div>
                      <div class="card-body">
                        {{ $item->nama }}
                      </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
          </div>

<x-footer />

    
</body>
</html>
