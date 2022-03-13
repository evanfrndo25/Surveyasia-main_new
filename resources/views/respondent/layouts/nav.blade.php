<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  {{-- My CSS --}}
  <link rel="stylesheet" href="/css/style.css">
</head>


<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <h5 id="judul_survey"></h5>
  </div>
</nav>

<div class="gariss">
<img src="/assets/img/gariss.png"> </div>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-right">
<div class="col-md-11 mx-auto">
<img src="/assets/img/surveyasianewbgwhite.jpg" class="image mt-3 mb-3" alt="Surveyasia" width="200px"> </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
            <li class="nav-item mt-3">
               <h5> Pertanyaan</h5>
               <h5 mt-3> 5 </h5>
            </li>
            <li class="nav-item mt-3">
                 <h5> Batas Waktu</h5>
                  <h5 mt-3> 5 mins </h5>
            </li>
            <li class="nav-item mt-4">
                 <h5> Tingkat penyelesaian</h5>
                   <div class="proses-circle">
                    <div class="proses-bar">
                      <svg class="proses" data-progress="10" x="0px" y="0px" viewBox="0 0 80 80">
                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                        <text class="value" x="50%" y="55%">0%</text>
                        <text class="per" x="50%" y="70%">1/30</text>
                      </svg>
                    </div>
                  </div>
                  </div>
                  <script type="text/javascript">
                    var forEach = function (array, callback, scope) {
                      for (var i = 0; i < array.length; i++) {
                        callback.call(scope, i, array[i]);
                      }
                    };
                    window.onload = function(){
                      var max = -219.99078369140625;
                      forEach(document.querySelectorAll('.proses'), function (index, value) {
                      percent = value.getAttribute('data-progress');
                        value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
                        value.querySelector('.value').innerHTML = percent + '%';
                      });
                    }
                  </script>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="progressbar mt-3">
    <img class="garis" src="/assets/img/gariss.jpeg">
</div>

</html>