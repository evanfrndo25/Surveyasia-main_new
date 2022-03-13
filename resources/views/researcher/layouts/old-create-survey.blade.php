{{-- Tab --}}
<div class="row justify-content-between">
  <div class="col">
    <ul class="nav" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link link-question link-secondary link-default text-decoration-underline"
          aria-current="page" href="#" id="question-tab" data-bs-toggle="tab"
          data-bs-target="#question" type="button" role="tab"
          aria-controls="question" aria-selected="true">
          Pertanyaan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-question link-secondary" aria-current="page"
          href="#" id="additional-tab" data-bs-toggle="tab"
          data-bs-target="#additional" type="button" role="tab"
          aria-controls="additional" aria-selected="false">
          Tambahan
        </a>
      </li>
    </ul>
  </div>
  <div class="col text-end me-4">
    <a href="{{ route('researcher.surveys.show', $survey->id) }}"
      class="link-secondary text-decoration-none"><i class="far fa-eye fa-fw"></i>
      Preview</a>
  </div>
</div>
{{-- End Tab --}}

{{-- Tab Content --}}
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="question" role="tabpanel"
    aria-labelledby="question-tab">
    <div class="container" id="question-container">
      <div class="row justify-content-center primary-question mb-5">
        <div class="col" id="primary-question">
          <div class="form-floating my-3">
            <input type="text" class="form-control" id="floatingInput"
              placeholder="Judul Survey" name="survey_title"
              value="{{ $survey->title }}" disabled readonly>
            <label for="floatingInput">Judul Survey</label>
          </div>
          <div class="mb-3">
            <div class="border rounded p-3">
              <label for="question-desc"
                class="form-label">Deskripsi</label>
              {{-- <textarea class="form-control" id="question-desc" rows="3" placeholder="Tulis Deskripsi.."
                          name="survey_desc"></textarea> --}}
              <input type="text" class="form-control" id="question-desc"
                placeholder="Tulis Deskripsi.."
                value="{{ $survey->description }}" disabled readonly>
            </div>
            <div class="border rounded mt-3 p-3" id="question_container0">
              <div class="col-md-12">
                <div class="row">
                  <p>Pertanyaan anda</p>
                  <div class="col-9">
                    <div class="form-floating">
                      <input type="text" class="form-control"
                        id="questions[0]" placeholder="Masukkan Pertanyaan"
                        name="questions[0]">
                      <label for="floatingInput" class="text-muted">Masukkan
                        Pertanyaan</label>
                    </div>
                  </div>
                  <div class="col-3">
                    <select class="form-select"
                      aria-label="Default select example"
                      name="question_type[0]"
                      onchange="optionTypeChange(this, 'answer_container0')">
                      <option value="1">Textbox</option>
                      <option value="2">Checkbox</option>
                      <option value="3">Multiple Choice</option>
                      <option value="4">Rating</option>
                      <option value="5">Dropdown</option>
                      <option value="6">File Upload</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="answer-div" id="answer_container0"
                style="display: none">
                <div class="row survey-answer mt-2" id="option01">
                  <div class="col-10">
                    <div class="form-check">
                      <input type="text" class="form-control"
                        id="options[0][]" name="options[0][0]"
                        placeholder="Masukkan Jawaban">
                    </div>
                  </div>
                  {{-- <div class="col-2 text-center">
                              <button type="button" id="btn-remove-answer"
                                class="btn btn-link link-secondary text-decoration-none" onclick="removeAnswer()"><i
                                  class="fas fa-minus-circle fa-fw"></i>
                              </button>
                              <button type="button" id="btn-add-answer"
                                class="btn btn-link link-secondary text-decoration-none" onclick="addAnswer()"><i
                                  class="fas fa-plus-circle fa-fw"></i>
                              </button>
                            </div> --}}
                </div>
                <div class="row survey-answer mt-2" id="option02">
                  <div class="col-10">
                    <div class="form-check">
                      <input type="text" class="form-control"
                        id="options[0][]" name="options[0][1]"
                        placeholder="Masukkan Jawaban">
                    </div>
                  </div>
                  <div class="col-2 text-center">
                    {{-- <button type="button" id="btn-remove-answer"
                                class="btn btn-link link-secondary text-decoration-none" onclick="removeAnswer()"><i
                                  class="fas fa-minus-circle fa-fw"></i>
                              </button> --}}
                    <button type="button" id="btn-add-answer0"
                      class="btn btn-link link-secondary text-decoration-none"
                      onclick="addAnswer('answer_container0', 0, 2)"><i
                        class="fas fa-plus-circle fa-fw"></i>
                    </button>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col text-end">
                  {{-- <button type="button" id="btn-remove-question"
                              class="btn btn-link link-secondary text-decoration-none" onclick="removeQuestion()"><i
                                class="fas fa-trash-alt fa-fw"></i> Hapus
                            </button> --}}
                  <button type="button" id="btn-add-question1"
                    class="btn btn-link link-secondary text-decoration-none"
                    onclick="addQuestion(this)"><i
                      class="fas fa-file-medical fa-fw"></i> Tambah
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="tab-pane fade" id="additional" role="tabpanel"
                aria-labelledby="additional-tab">
                <div class="container" id="additional-question-container">
                  <div
                    class="row justify-content-center additional-question mb-5"
                    id="additional-question">
                    <div class="col">
                      <div class="border rounded mt-3 p-3"
                        id="question_container0">
                        <div class="col-md-12">
                          <div class="row">
                            <p>Pertanyaan anda</p>
                            <div class="col-9">
                              <div class="form-floating">
                                <input type="text" class="form-control"
                                  id="floatingInput"
                                  placeholder="Masukkan Pertanyaan"
                                  name="question[0]">
                                <label for="floatingInput"
                                  class="text-muted">Masukkan
                                  Pertanyaan</label>
                              </div>
                            </div>
                            <div class="col-3">
                              <select class="form-select"
                                aria-label="Default select example"
                                name="question_type[0]"
                                onchange="optionTypeChange(this, 'answer_container0')">
                                <option value="1">Textbox</option>
                                <option value="2">Checkbox</option>
                                <option value="3">Multiple Choice</option>
                                <option value="4">Rating</option>
                                <option value="5">Dropdown</option>
                                <option value="6">File Upload</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-3">
                            <select class="form-select" aria-label="Default select example" name="question_type[0]"
                              onchange="optionTypeChange(this, 'answer_container0')">
                              <option value="1">Textbox</option>
                              <option value="2">Checkbox</option>
                              <option value="3">Multiple Choice</option>
                              <option value="4">Rating</option>
                              <option value="5">Dropdown</option>
                              <option value="6">File Upload</option>
                            </select>
                          </div>
                        </div>
                        <div class="answer-div" id="answer_container0" style="display: none">
                          <div class="row survey-answer mt-2" id="option01">
                            <div class="col-10">
                              <div class="form-check">
                                <input type="text" class="form-control" id="options[0][]" name="options[0][0]"
                                  placeholder="Masukkan Jawaban">
                              </div>
                            </div>
                          </div>
                          <div class="row survey-answer mt-2" id="option02">
                            <div class="col-10">
                              <div class="form-check">
                                <input type="text" class="form-control" id="options[0][]" name="options[0][1]"
                                  placeholder="Masukkan Jawaban">
                              </div>
                            </div>
                            <div class="col-2 text-center">
                              <button type="button" id="btn-add-answer0"
                                class="btn btn-link link-secondary text-decoration-none"
                                onclick="addAnswer('answer_container0', 0, 2)"><i class="fas fa-plus-circle fa-fw"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col text-end">
                            <button type="button" id="btn-add-question1"
                              class="btn btn-link link-secondary text-decoration-none" onclick="addQuestion(this)"><i
                                class="fas fa-file-medical fa-fw"></i> Tambah
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
  </div>
</div>
{{-- End Tab Content --}}
