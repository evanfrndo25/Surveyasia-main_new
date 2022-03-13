{{-- Question Bank Modal --}}
<style>
    .hilang {
        position: absolute !important;
        z-index: -999 !important;
    }
</style>
<div class="modal fade" id="questionBankModal">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="questionBankTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8 overflow-auto border-end" style="max-height: 550" id="questionBankModalContent"></div>
                    <div class="col-4 overflow-auto" style="max-height: 550" id="questionBankModalPreview"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="selectAll" onclick="addAll()">Select all</button>
                <button type="button" class="btn btn-primary visually-hidden" id="saveQuestionBankBtn">Save changes</button>
            </div>
        </div>
    </div>
    <script>
        function addAll() {
            btn = document.querySelectorAll('#btn-add');
            btn.forEach(function(item){
                item.click();
            });
        }
    </script>
</div>
{{-- End Question Bank Modal --}}
