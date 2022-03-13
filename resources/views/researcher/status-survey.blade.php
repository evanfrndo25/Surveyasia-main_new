@extends('layouts.footer')
@extends('layouts.base')
@extends('researcher.layouts.breadcrumb')
@extends('researcher.layouts.navbar2')

@section('content')

{{-- Data Respondent --}}
<section class="data-respondent py-5" id="data-respondent" style="margin-bottom: 250px">
    <div class="container">
        <h4>Data Respondent</h4>
        <table class="table table-hover">
            <thead class="table-orange text-white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Status</th>
                    <th scope="col">Respondent</th>
                    <th scope="col">Date Modified</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-share-alt fa-fw"></i></td>
                    <td>Share Link</td>
                    <td>Active</td>
                    <td>0</td>
                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                </tr>
                <tr>
                    <td><i class="fas fa-user-check fa-fw"></i></td>
                    <td>Target Audiance 1</td>
                    <td>Active</td>
                    <td>0</td>
                    <td>Kamis, 30 September 2021, 8:56 PM</td>
                    <td><i class="fas fa-ellipsis-h fa-fw"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
{{-- End Data Respondent --}}

@endsection