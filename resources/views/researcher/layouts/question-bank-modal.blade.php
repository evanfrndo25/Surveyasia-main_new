{{-- Question Bank Modal --}}
<div class="modal fade" id="questionBankModal" tabindex="-1"
  aria-labelledby="questionBankModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="row">
        <div class="col-9">
          <div class="modal-header">
            <h5 class="modal-title" id="questionBankModalLabel">Question
              Bank</h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question1"
                  id="question1" value="question1"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question1">
                  <h6 class="modal-question" id="modal-question">How often do
                    you use
                    the product you bought?</h6>
                  <ul>
                    <li>Very often</li>
                    <li>Often</li>
                    <li>Quite often</li>
                    <li>Not too often</li>
                    <li>Not at all</li>
                  </ul>
                </label>
              </div>
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question2"
                  id="question2" value="question2"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question2">
                  <h6 class="modal-question" id="modal-question">How satisfied
                    are you with our product or service?</h6>
                  <ul>
                    <li>Very satisfied</li>
                    <li>Satisfied</li>
                    <li>Quite satisfied</li>
                    <li>Somewhat satisfied</li>
                    <li>Very disatisfied</li>
                  </ul>
                </label>
              </div>
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question3"
                  id="question3" value="question3"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question3">
                  <h6 class="modal-question" id="modal-question">What's your
                    gender?</h6>
                  <ul>
                    <li>Female</li>
                    <li>Male</li>
                  </ul>
                </label>
              </div>
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question4"
                  id="question4" value="question4"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question4">
                  <h6 class="modal-question" id="modal-question">How would you
                    rate the quality of our product or
                    service?</h6>
                  <ul>
                    <li>Very high quality</li>
                    <li>High quality</li>
                    <li>Neither high nor low quality</li>
                    <li>Low quality</li>
                    <li>Very low quality</li>
                  </ul>
                </label>
              </div>
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question5"
                  id="question5" value="question5"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question5">
                  <h6 class="modal-question" id="modal-question">How would you
                    rate the quality of our product or
                    service?</h6>
                  <ul>
                    <li>Very high quality</li>
                    <li>High quality</li>
                    <li>Neither high nor low quality</li>
                    <li>Low quality</li>
                    <li>Very low quality</li>
                  </ul>
                </label>
              </div>
              <div class="col-md-6 mt-2">
                <input type="radio" class="btn-check" name="question6"
                  id="question6" value="question6"
                  onclick="modalPreviewQuestion()">
                <label class="btn border text-start w-100" for="question6">
                  <h6 class="modal-question" id="modal-question">What's your
                    relationship status now?</h6>
                  <ul>
                    <li>Single</li>
                    <li>Married</li>
                  </ul>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="modal-header">
            <h5 class="modal-title" id="questionBankModalLabel">Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="border rounded p-3">
              <h6 class="preview-question" id="preview-question"></h6>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default text-white w-100"><i
                class="fas fa-plus fa-fw"></i> ADD
              QUESTION</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Question Bank Modal --}}
