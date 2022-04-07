<div class="modal" tabindex="-1" id="updateQuestionModal">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle">Edit Pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnIconClose"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <nav>
                            <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                                <button class="nav-link link-dark active" id="nav-basic-tab" data-bs-toggle="tab" data-bs-target="#nav-basic"
                                    type="button" role="tab" aria-controls="nav-basic" aria-selected="true">Basic</button>
                                {{-- <button class="nav-link link-dark" id="nav-data-tab" data-bs-toggle="tab" data-bs-target="#nav-data" type="button"
                                    role="tab" aria-controls="nav-data" aria-selected="false">Data</button> --}}
                                <button class="nav-link link-dark" id="nav-logic-tab" data-bs-toggle="tab" data-bs-target="#nav-logic"
                                    type="button" role="tab" aria-controls="nav-logic" aria-selected="false">Logic</button>
                                <button class="nav-link link-dark" id="nav-validation-tab" data-bs-toggle="tab" data-bs-target="#nav-validation"
                                    type="button" role="tab" aria-controls="nav-validation" aria-selected="false">Validation</button>
                                <button class="nav-link link-dark" id="nav-media-tab" data-bs-toggle="tab" data-bs-target="#nav-media" type="bu tton"
                                    role="tab" aria-controls="nav-media" aria-selected="false">Media</button>
                            </div>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-basic" role="tabpanel" aria-labelledby="nav-basic-tab">
                                <div id="questionOptionContainer" class="container mt-3 mb-3">

                                </div>
                            </div>
                            
                            {{-- <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-data-tab">
                                <div id="dataOptionContainer" class="container mt-3 mb-3">
                                    <div class="row mb-3">
                                        <div class="col-9">
                                            <div class="card shadow mb-3">
                                                <div class="card-body">
                                                    <h6>Preview</h6>
                                                    <canvas id="chartPreview" style="max-height: 400px;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card shadow mb-3">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <h6>Chart Type</h6>
                                                        <select class="form-select" id="chartTypeSelect">
                                                            <option value="pie">Pie</option>
                                                            <option value="bar">Bar</option>
                                                            <option value="line">Line</option>
                                                            <option value="doughnut">Doughnut</option>
                                                            <option value="radar">Radar</option>
                                                            <option value="polarArea">Polar Area</option>
                                                            <option value="bubble">Bubble</option>
                                                            <option value="scatter">Scatter</option>
                                                        </select>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <h6>Actions</h6>
                                                        <button type="button" class="list-group-item list-group-item-action" id="random">Randomize
                                                            Data</button>
                                                        <button type="button" class="list-group-item list-group-item-action" id="add">Add
                                                            Data</button>
                                                        <button type="button" class="list-group-item list-group-item-action" id="delete">Delete
                                                            Data</button>
                                                        <button type="button" class="list-group-item list-group-item-action" id="addDataset">Add
                                                            Datasets</button>
                                                        <button type="button" class="list-group-item list-group-item-action" id="deleteDataset">Delete
                                                            Datasets</button>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <h6>Title</h6>
                                                        <input type="text" id="titleInput" class="form-control form-control-md">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6>Chart Options</h6>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Select Dataset</label>
                                                        <select class="form-select" id="selectDatasets">
                                                            <option>Datasets 1</option>
                                                            <option>Datasets 2</option>
                                                            <option>Datasets 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-4">
                                                            <label for="" class="form-label">Label</label>
                                                            <input type="text" class="form-control" id="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="" class="form-label">Sample Data</label>
                                                            <input type="number" class="form-control" id="">
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="" class="form-label">Color</label>
                                                            <input type="text" class="form-control" id="" placeholder="RGB">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="tab-pane fade" id="nav-logic" role="tabpanel" aria-labelledby="nav-logic-tab">
                                <div id="questionLogicContainer" class="container mt-3 mb-3">

                                    <div class="row">
                                    
                                    <!-- option 1 -->
                                    <div class="col-md-12">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <label for="" class="mb-3">Pilihan Opsi</label>
                                            <div class="input-group">
                                                <div class="input-group-text" style="background: #F99E3F ">
                                                  <input class="form-check-input mt-0" type="radio" id="radio" value="" aria-label="Radio button for following text input" >
                                                </div>
                                                <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Opsi 1" disabled style="background-color: #ffffff">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row align-items-center">
                                                <div class="col-md-12 mb-3">
                                                    <label for="">Lanjutkan Ke</label>
                                                </div>
                                                <div class="col-md-5">
<<<<<<< HEAD
                                                    <select class="form-select form-select-sm" id="part" aria-label=".form-select-sm example" disabled="disabled">
                                                    <option selected> -- Select Part  --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-select form-select-sm" id="question" aria-label=".form-select-sm example" disabled="disabled">
                                                    <option selected> -- Choose The Question  --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                    </select>
=======
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Bagian  --</option>
                                                            <option value="1">Bagian 1</option>
                                                            <option value="2">Bagian 2</option>
                                                            <option value="3">Bagian 3</option>
                                                            </select>
                                                </div>
                                                <div class="col-md-6">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Pertanyaan  --</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                            </select>
>>>>>>> 14c3406d7a06ea40540610f404b7dab478ec400b
                                                </div>
                                                <div class="col-1 p-0">
                                                    <a href="#" class="btn link-dark">
                                                        <i class="fas fa-trash"></i>
                                                    </a>   
                                                </div>
                                            </div>                      
                                        </div>
                                        
                                    </div>
                                    <!-- option 1 -->

                                    <!-- option 2 -->
                                    <div class="col-md-12 mt-3">
                                        <div class="row align-items-center" >
                                            <div class="col-md-4">                       
                                                    <div class="input-group">
                                                        <div class="input-group-text" style="background: #F99E3F ">
                                                          <input class="form-check-input mt-0" type="radio" id="radio1" value="" aria-label="Radio button for following text input" disabled="disabled">
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Opsi 2" disabled style="background-color: #ffffff">
                                                    </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
<<<<<<< HEAD
                                                        <select class="form-select form-select-sm" id="part1" aria-label=".form-select-sm example" disabled="disabled">
                                                            <option selected> -- Select Part  --</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-select form-select-sm" id="question1" aria-label=".form-select-sm example" disabled="disabled">
                                                            <option selected> -- Choose The Question  --</option>
=======
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Bagian  --</option>
                                                            <option value="1">Bagian 1</option>
                                                            <option value="2">Bagian 2</option>
                                                            <option value="3">Bagian 3</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Pertanyaan  --</option>
>>>>>>> 14c3406d7a06ea40540610f404b7dab478ec400b
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-1 p-0">
                                                        {{-- <button type="button" class="btn link-dark">
                                                            <i class="fas fa-trash"></i>    
                                                        </button> --}}
                                                        <a href="#" class="btn link-dark">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- option 2 -->

                                    <!-- option 3 -->
                                    <div class="col-md-12 mt-3 align-items-center">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">                       
                                                    <div class="input-group">
                                                        <div class="input-group-text" style="background: #F99E3F "  >
                                                          <input class="form-check-input mt-0" type="radio" id="radio2" value="" aria-label="Radio button for following text input" disabled="disabled">
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Opsi 3" disabled style="background-color: #ffffff">
                                                    </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
<<<<<<< HEAD
                                                        <select class="form-select form-select-sm" id="part2" aria-label=".form-select-sm example" disabled="disabled">
                                                            <option selected> -- Select Part  --</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-select form-select-sm" id="question2" aria-label=".form-select-sm example" disabled="disabled">
                                                            <option selected> -- Choose The Question  --</option>
=======
                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Bagian  --</option>
                                                            <option value="1">Bagian 1</option>
                                                            <option value="2">Bagian 2</option>
                                                            <option value="3">Bagian 3</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                            <option selected> -- Pilih Pertanyaan  --</option>
>>>>>>> 14c3406d7a06ea40540610f404b7dab478ec400b
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-1 p-0">
                                                        <a href="#" class="btn link-dark">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- option 3 -->
                                </div>

                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-validation" role="tabpanel" aria-labelledby="nav-validation-tab">
                                <div id="questionValidationContainer" class="container mt-3mj mb-3">
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
                                <div id="questionMediaContainer" class="container mt-3 mb-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCloseEdit" style="background-color: #f2f2f2; color:black;">Batal</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCloseEdit" style="background-color: #ef4c29">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        // Manual tanpa funsi
        // option1
        $("#radio").change(function(){
            var radio = $(this).val();
            $("#part").removeAttr("disabled");
        });
        $("#part").change(function(){
            var part = $(this).val();
            $("#question").removeAttr("disabled");
        });
        $("#question").change(function(){
            var question = $(this).val();
            $("#radio1").removeAttr("disabled");
        });
        // option2
        $("#radio1").change(function(){
            var radio1 = $(this).val();
            $("#part1").removeAttr("disabled");
        });
        $("#part1").change(function(){
            var part1 = $(this).val();
            $("#question1").removeAttr("disabled");
        });
        $("#question1").change(function(){
            var question1 = $(this).val();
            $("#radio2").removeAttr("disabled");
        });
        // option3
        $("#radio2").change(function(){
            var radio2 = $(this).val();
            $("#part2").removeAttr("disabled");
        });
        $("#part2").change(function(){
            var part2 = $(this).val();
            $("#question2").removeAttr("disabled");
        });
        // $("#question2").change(function(){
        //     var question1 = $(this).val();
        //     $("#radio2").removeAttr("disabled");
        // });
    });

</script>

    {{-- <script type="text/javascript">
		$(document).ready(function(){
			//Otomatis pakai fungsi
			function ubah(a, b){
				nilai = $(a).on('change', function(event){
					event.preventDefault();
					$(b).removeAttr("disabled");
				});
				return nilai;
			}
			radio = ubah("#radio", "#part");
			part = ubah("#part", "#question");
			question = ubah("#question", "radio2");
 
		});	
 
	</script> --}}