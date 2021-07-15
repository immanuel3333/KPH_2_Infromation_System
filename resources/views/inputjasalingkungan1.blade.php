@include('layouts.headeradmin')
</div>

<div class="content-page"> 
    <div class="container-fluid">
        <form action="{{ route('simpan-jasalingkungan1')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="card col-md-12">

                    <div class="form-group pt-4">
                        <p>Potensi Kayu</p>
                        <textarea name="kayu" id="kayu" cols="150" rows="20">
                        </textarea>
                        <script>CKEDITOR.replace('kayu');</script>
                    </div>

                    <select name='agama'>
                        <option value='islam'></option>
                        <option value='kristen' selected='selected'></option>
                        <option value='katholik'></option>
                        <option value='hindu'></option>
                        <option value='kristen'></option>
                    </select>

                </div> 
                <button type="submit" class="btn btn-success ml-auto">Simpan</button>
            </div>
        </form>

      

    </div>

    @include('layouts.footer')

