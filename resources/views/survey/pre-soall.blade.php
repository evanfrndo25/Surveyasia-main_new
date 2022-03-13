@extends('layouts.base')
@extends('respondent.layouts.nav')

@section('content')

{{-- Pre Soal --}}
<div class="container">
    <div class="row my-5">
          `<div class="col-md-9">
              <div class="row mt-5">
                        <div class="col-md-12">
                            <h6 class="pt-4 fw-bold mt-3">Q2. sit amet consectetur adipisicing elit. 
                            Sed voluptas molestiae ea sit. Quos explicabo maxime odio accusantium, inventore repellat magni alias sed voluptatibus minima velit laudantium porro architecto. Fugit!</h6>
                        </div>

                        <div class="row mt-3">
                          <div class="col-md-12">
                            <button class="button" >A. Lorem ipsum dolor sit amet consectetur adipisicing elit. </button> <br>
                            <button class="button mt-1" >B. Lorem ipsum dolor sit amet consectetur adipisicing elit. </button> <br>
                            <button class="button mt-1" >C. Lorem ipsum dolor sit amet consectetur adipisicing elit. </button> <br>
                            <button class="button mt-1" >D. Lorem ipsum dolor sit amet consectetur adipisicing elit. </button> <br>
                          </div>  
                        </div>
                            
                            <div class="text-left mt-5">
                                <i class="fas fa-arrow-left"></i> <a href="#" style="text-decoration: none; color: black;" >Sebelumnya</a>
                                <a id="next" class="btn btn-primary text-white my-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Next ➝</a>
                            </div>
                </div>  
            </div>

          <!-- Modal -->
          <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="container">
                        <h4 class="pt-5 fw-bold text-center">
                        Apakah anda yakin memberikan jawaban yang sebenarnya?</h4>

                          <div class="row mt-5">
                            <div class="col md-6">
                              <a class="btn btn-primary text-white float-right" style="height:40px;width:95px" role="button" data-bs-dismiss="modal">Tidak</a>
                           </div>
                            <div class="col md-6">
                            <a class="btn btn-primary text-white float-left" style="height:40px;width:95px" role="button" data-bs-dismiss="modal">Iya</a>   
                          </div> 
                          </div>

                          <div class="form-check mt-4 mb-3">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                <p class="fw-bold" style="font-size: 10px;"> saya memberikan Jawaban yang sesuai dan dapat dipertanggungjawabkan</p>
                              </label>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
     </div>           
</div>
{{-- End Pre Soal --}}

@endsection