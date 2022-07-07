<!-- Modal Create Survey -->
<div class="modal fade" id="addSurveyModal" tabindex="-1" aria-labelledby="addSurveyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-fullscreen-lg-down modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSurveyModalLabel">Survey Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('researcher.surveys.store') }}" method="POST" class="row g-3 needs-validation"
          novalidate>
          @csrf
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" name="title" id="title" required>
            <div class="invalid-feedback">Harap masukkan <span class="fw-bold">Judul</span> survey!</div>
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
            <div class="invalid-feedback">Harap masukkan <span class="fw-bold">Deskripsi</span> survey!</div>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Kategori Survey</label>
            <select name="category_id" id="category_id" class="form-select" required>
              <option value="" selected>Pilih Category</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Harap pilih <span class="fw-bold">Kategori</span> survey!</div>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label" data-bs-toggle="tooltip" data-bs-placement="top"
                  title="Untuk membantu responden mengetahui berapa lama waktu yang diperlukan untuk menyelesaikan survey ini">Estimasi
                  Penyelesaian
                  {{-- <i class="fa fa-question-circle" aria-hidden="true"></i></label> --}}
                <input type="number" class="form-control" required max="20" min="1" placeholder="dalam satuan menit"
                  name="estimate_completion">
                <div class="form-text"><span class="text-orange">Tips!</span> Disarankan
                  tidak melebihi 10 menit</div>
                <div class="invalid-feedback">Harap masukkan <span class="fw-bold">Estimasi Penyelesaian</span> survey!
                </div>
              </div>
              <div class="col-md-4 mt-3 mt-md-0">
                <label for="" class="form-label">Maksimum Responden
                  {{-- <span><i class="fa fa-question-circle" aria-hidden="true"></i></span></label> --}}
                <input name="max_attempt" type="number" class="form-control" min="1" placeholder="40"
                  @if($user->subscription != null && $user->subscription->id == 1) max="40" @endif>
                @if ($user->subscription != null && $user->subscription->id == 1)
                <div class="form-text">Maksimal 40 respondent untuk
                  <span class="fw-bold">FREE PACKAGE</span>
                </div>
                <div class="invalid-feedback">Jumlah <span class="fw-bold">Maksimum Responden</span> tidak valid!</div>
                @else
                <div class="form-text">Harap isi atau sistem akan menentukan 40 sebagai bawaan</div>
                @endif
              </div>
              <div class="col-md-4 mt-3 mt-md-0">
                <label for="" class="form-label">Jumlah Reward
                  {{-- <span><i class="fa fa-question-circle" aria-hidden="true"></i></span></label> --}}
                <input name="reward_point" type="number" class="form-control" placeholder="0">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Pengaturan Survey</label>
            <div class="row">
              <div class="col">
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input class="form-check-input form-check-input-orange" type="checkbox" name="shareable"
                      value="checkedValue" checked>
                    Survey ini dapat dibagikan
                    {{-- <i class="fa fa-question-circle" aria-hidden="true"></i> --}}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div class="row d-flex justify-content-end">
              <div class="col-auto">
                <button type="button" class="btn btn-outline-orange" data-bs-dismiss="modal">Batal</button>
                <button class="btn btn-orange" type="submit">Simpan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>