@section('script')
    <script src="/js/admin-charts/allUser.js"></script>
    <script>
        $(document).ready(()=> {
            
        })
    </script>
@endsection

<div class="container">
    <!-- SELECT BOX -->
    <div id="form">
        <div class="fs-4">
            Pilih Waktu
        </div>
        <select name="waktu" id="waktu" class="form-select" aria-label="Default select example"
            style="width: 150px;">
            <option selected value="bulan" id="bulan">Bulan</option>
            <option value="tahun" id="tahun">Tahun</option>
        </select>
    </div>



    <!-- CHART -->

    <div class="demo-container">
        <div id="chart-demo">
            <div id="chart-all-user" style="width: 1050px;"></div>
        </div>
    </div>


    <div class="row">
        <div class="fs-4">
            Batas Waktu
        </div>
        <div class="hstack gap-3">
            <div class=" col-6 col-sm-3">
                <select name="bataswaktubulan" id="bataswaktubulan" class="form-select d-inline"
                    aria-label="Default select example" style="margin-bottom: 10px;">
                    <option selected value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
            </div>
            <div class="col-6 col-sm-3">
                <select name="bataswaktutahun" id="bataswaktutahun" class="form-select d-inline"
                    aria-label="Default select example" style="margin-bottom: 10px;" disabled>
                    <option selected value="t2021">2021</option>
                    <option value="t2022">2022</option>
                    <option value="t2023">2023</option>
                </select>
            </div>
        </div>

    </div>


    <div class="demo-container" style="display: flex; justify-content: center;">
        <div id="pie"></div>
    </div>

    <div class="demo-container" style="display: flex; justify-content: center;">
        <div id="Personal" style="height: 150px; margin-right: -50px;"></div>
        <div id="Business" style="height: 150px;"></div>
        <div id="PersonalT" style="height: 150px; margin-right: -50px;"></div>
        <div id="BusinessT" style="height: 150px;"></div>
    </div>
</div>