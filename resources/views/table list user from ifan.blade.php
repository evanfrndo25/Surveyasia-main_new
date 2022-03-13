table list user from ifan 
<table class="table table-no-border-head align-middle">
              <thead>
                  <tr>
                      <td scope="col"></td>
                      <td scope="col">Nama</td>
                      <td scope="col">Email</td>
                      <td scope="col">Role</td>
                      <td scope="col">Subscription</td>
                      <td scope="col">Actions</td>
                  </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  @if ($user->role_id == 1)
                    @php
                      continue;
                    @endphp
                  @endif
                  <tr>
                    @if ($user->profile != null)
                      <td scope="col" class="d-flex align-items-center">
                          {{-- <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt="" class="rounded-pill me-2"> --}}
                          <div>
                              <a href="{{ route('admin.users.profile', $user->id) }}">
                                <h6 class="nopadding">{{ $user->first_name }}
                                  {{ $user->last_name }}</h6>
                              </a>
                              <span class="d-block" style="font-size: 13px">{{ $user->email }}</span>
                          </div>
                      </td>
                      @else
                      {{-- <img src="{{ asset('assets/img/photo-neil-seims.jpg') }}" alt="" class="rounded-pill me-2"> --}}
                          <div>
                                <h6 class="nopadding">{{ $user->first_name }}{{ $user->last_name }}</h6>
                              <span class="d-block" style="font-size: 13px">{{ $user->email }}</span>
                          </div>
                    @endif
                      <td>{{ $user->username }}</td>
                      @if ($user->role_id != null && $user->role != null)
                        <td>{{ $user->role->name }}</td>
                      @else
                        <td>No Role Selected</td>
                      @endif
                      @if ($user->subscription_id != null && $user->subscription != null)
                        <td>{{ $user->subscription->name }}</td>
                      @else
                        <td>{{ __('No Subscription') }}</td>
                      @endif
                     
                      <td class="text-end">
                        <button type="button" class="btn bg-special-blue text-white">
                          <i class="bi bi-vector-pen me-"></i>  
                          Edit Item
                        </button>
                      </td>
                      </tr>
                    @endforeach
              </tbody>
</table>