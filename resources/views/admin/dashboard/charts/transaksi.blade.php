<div class="container">
    <!-- SELECT BOX -->
    <div id="form">
        <div class="fs-4">
            Pilih Waktu
        </div>
        <select name="waktu" class="form-select" aria-label="Default select example" style="width: 150px;">
            <option selected value="bulan">Bulan</option>
            <option value="tahun">Tahun</option>
        </select>
    </div>



    <!-- CHART -->
    <div class="demo-container">
        <div id="chart-demo">
            <div id="chart" style="width: 1050px;"></div>
        </div>
    </div>

    <div class="demo-container" style="display: flex; justify-content: center;">
        <div id="FreeUser" style="height: 150px; margin-right: -50px;"></div>
        <div id="OnceTimePayment" style="height: 150px; margin-right: -50px;"></div>
        <div id="Personal" style="height: 150px; margin-right: -50px;"></div>
        <div id="Enterprise" style="height: 150px;"></div>
    </div>
</div>
<script src="/js/admin-charts/transaksi.js"></script>
