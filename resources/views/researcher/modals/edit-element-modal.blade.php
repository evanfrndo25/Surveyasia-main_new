<div class="modal" tabindex="-1" id="updateQuestionModal">
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle">Update Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnIconClose"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 border">
                        <nav>
                            <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                                <button class="nav-link link-dark active" id="nav-basic-tab" data-bs-toggle="tab" data-bs-target="#nav-basic"
                                    type="button" role="tab" aria-controls="nav-basic" aria-selected="true">Basic</button>
                                {{-- <button class="nav-link link-dark" id="nav-data-tab" data-bs-toggle="tab" data-bs-target="#nav-data" type="button"
                                    role="tab" aria-controls="nav-data" aria-selected="false">Data</button> --}}
                                <button class="nav-link link-dark" id="nav-validation-tab" data-bs-toggle="tab" data-bs-target="#nav-validation"
                                    type="button" role="tab" aria-controls="nav-validation" aria-selected="false">Validation</button>
                                <button class="nav-link link-dark" id="nav-media-tab" data-bs-toggle="tab" data-bs-target="#nav-media" type="button"
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
                            <div class="tab-pane fade" id="nav-validation" role="tabpanel" aria-labelledby="nav-validation-tab">
                                <div id="questionValidationContainer" class="container mt-3 mb-3">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-media" role="tabpanel" aria-labelledby="nav-media-tab">
                                <div id="questionMediaContainer" class="container mt-3 mb-3">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="container mb-3 mt-3">
                            <h5>Preview</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCloseEdit">Close</button>
            </div>
        </div>
    </div>
</div>
