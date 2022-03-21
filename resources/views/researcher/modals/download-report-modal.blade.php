<!-- Modal Create Survey -->
@php
    $no = 1;
    @endphp
<div class="modal fade" id="downloadReportModal" tabindex="-1" aria-labelledby="downloadReportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-fullscreen-xl-down modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="downloadReportLabel">Download Report</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-8">
                @foreach ($questions as $question)
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card radius-default">
                                <div class="card-body">
                                    {{-- <div class="d-flex top-0 end-0 justify-content-end" id="exportsContainer{{ $question->id }}">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="exportsContainerBtn"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Export
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="exportsContainerBtn">
                                                <li><button class="dropdown-item fs-6 fw-light" id="asPng">PNG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asJpg">JPG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asSvg">SVG</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asPdf">PDF</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asCsv">CSV</button></li>
                                                <li><button class="dropdown-item fs-6 fw-light" id="asExc">EXCEL</button></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div id="chart{{ $question->id }}" class="p-3" style="height: 350px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted">Tujuan</p>
                    </div>

                    <div class="col-md-9">
                        <div class="d-flex top-0 end-0 justify-content-end" id="exportsContainer">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="exportsContainerBtn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Export
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="exportsContainerBtn">
                                    <li><button class="dropdown-item fs-6 fw-light" id="asPng">PNG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asJpg">JPG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asSvg">SVG</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asPdf">PDF</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asCsv">CSV</button></li>
                                    <li><button class="dropdown-item fs-6 fw-light" id="asExc">EXCEL</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>