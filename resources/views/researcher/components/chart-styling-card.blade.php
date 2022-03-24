<div class="card">
    <div class="card-body">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="chartStyeTab_{{ $question->id }}" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="simple-tab_{{ $question->id }}" data-bs-toggle="tab"
                    data-bs-target="#simple_{{ $question->id }}" type="button" role="tab" aria-controls="simple"
                    aria-selected="true">Simple</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="advanced-tab_{{ $question->id }}" data-bs-toggle="tab"
                    data-bs-target="#advanced_{{ $question->id }}" type="button" role="tab" aria-controls="advanced_{{ $question->id }}"
                    aria-selected="false">Advanced</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="simple_{{ $question->id }}" role="tabpanel" aria-labelledby="simple-tab_{{ $question->id }}">
                <div class="container">

                </div>
            </div>
            <div class="tab-pane" id="advanced_{{ $question->id }}" role="tabpanel" aria-labelledby="advanced-tab_{{ $question->id }}">
                <div class="row">
                    <div class="col mb-3">
                        <label for="config_{{ $question->id }}" class="form-label">Configurations</label>
                        <textarea class="form-control" name="" id="config_{{ $question->id }}" rows="20"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
