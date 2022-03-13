<div class="modal" tabindex="-1" id="updateQuestionModal">
  <div
    class="modal-dialog modal-xl modal-fullscreen-lg-down modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalTitle">Update Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
          aria-label="Close" id="btnIconClose"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-12 border">
            <nav>
              <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-basic-tab"
                  data-bs-toggle="tab" data-bs-target="#nav-basic" type="button"
                  role="tab" aria-controls="nav-basic"
                  aria-selected="true">Basic</button>
                <button class="nav-link" id="nav-data-tab"
                  data-bs-toggle="tab" data-bs-target="#nav-data" type="button"
                  role="tab" aria-controls="nav-data"
                  aria-selected="false">Data</button>
                <button class="nav-link" id="nav-logic-tab"
                  data-bs-toggle="tab" data-bs-target="#nav-logic" type="button"
                  role="tab" aria-controls="nav-logic"
                  aria-selected="false">Logic</button>
              </div>
            </nav>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="nav-basic"
                role="tabpanel" aria-labelledby="nav-basic-tab">
                <div data-bs-spy="scroll" id="questionOptionContainer"
                  style="height: 250px; overflow-y: scroll;"
                  class="container mt-3 mb-3" tabindex="0">
                  
                </div>
              </div>
              <div class="tab-pane fade" id="nav-data" role="tabpanel"
                aria-labelledby="nav-data-tab">2</div>
              <div class="tab-pane fade" id="nav-logic" role="tabpanel"
                aria-labelledby="nav-logic-tab">3</div>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
          id="btnCloseEdit">Close</button>
      </div>
    </div>
  </div>
</div>
