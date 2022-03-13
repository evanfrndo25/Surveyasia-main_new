@extends('layouts.base')
@extends('respondent.layouts.nav')

@section('content')

{{-- Pre soal --}}
<div class="container">
    <div class="row my-5">
      `<div class="col-md-9">
                <div class="row mt-5">
                    <div class="col-md-11">
                        <h6 class="pt-4 fw-bold mt-3">Q1. sit amet consectetur adipisicing elit. 
                        Sed voluptas molestiae ea sit. Quos explicabo maxime odio accusantium, inventore repellat magni alias sed voluptatibus minima velit laudantium porro architecto. Fugit!</h6>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-11">
                            <div class="sampul">
                                <input type="text" name="jawaban" placeholder="Tulis Jawabanmu disini"/>
                            </div>
                            
                        </div>
                    </div> 
                        
                        <div class="text-left mt-5">
                            <i class="fas fa-arrow-left"></i> <a href="#" style="text-decoration: none; color: black;" >Sebelumnya</a>
                            <a id="next" class="btn btn-primary text-white my-2" href="/respondent/survey/pre-soall">Next ➝</a>
                        </div>
                </div>
        </div>
    </div>
</div>
{{-- End Pre soal --}}

@endsection