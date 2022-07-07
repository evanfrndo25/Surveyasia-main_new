
<!-- Modal -->
<div class="modal fade" id="chartListModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar diagram</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" id="chartListContainer">
                    @forelse ($charts as $chart)
                        <div class="row mb-3">
                            <div class="col">
                                <h5>{{ $chart['library_name'] }}</h5>
                                <div class="row">
                                    @forelse ($chart['chart_list'] as $item)
                                        <div class="col-3">
                                            <div class="card" id="lineChart">
                                                <div class="card-body">
                                                    <img class="card-img-top" src="{{ $item['image'] == null ? asset('assets/img/prototyping.png') : url('storage/'. $item['image']) }}" alt="Coming Soon">
                                                    <h6 class="card-title">{{ $item['name'] }}</h6>
                                                    <p class="card-text" style="height: 15rem; max-height:15rem;">
                                                        {{ $item['description'] }}
                                                    </p>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" data-chart-code="{{ $item['code'] }}"
                                                            class="btn btn-sm btn-primary">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        No chart available
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    @empty
                        No chart available
                    @endforelse
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <div id="errorMsg" class="alert alert-md alert-danger fade" role="alert">
                    Chart isn't available at this moment
                </div>
                <button type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
