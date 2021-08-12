@include('layouts.headeradmin')
</div>
<div class="content-page" style="background: url('{{ asset('img/backgroundadmin.png') }}');background-size:850px;background-repeat: repeat-y;background-position:center ;">
<div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
          <div class="card">
              <div class="card-header">
                <p>Test</p>
              <div class="card-body">
                  <form method="POST" action="{{ route('update-rphjp4', $rp->id) }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                          <div class="col-md-12 ">
                                    <div class="form-group pt-1">
                                        <p>Upaya</p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="upaya" value="{{$rp->upaya}}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group pt-1">
                                        <p>Kendala</p>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="kendala" value="{{$rp->kendala}}" required autofocus>
                                        </div>
                                    </div>
                                        <div class="form-group pt-1">
                                            <label>Progres</label>
                                            <input class="form-control" type="text" name="progres" value="{{$rp->progres}}" required autofocus>
                                        </div>
                                    </div>
                              </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')
