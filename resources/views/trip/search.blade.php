<section class="clearfix" style="min-height:400px;background-color:#F0F0F0;padding-bottom:70px;">
        <div class="container">
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="background-color: transparent !important">
                          <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Daftar trip</li>
                        </ol>
                </nav>
                <form style="margin-top:10px;">
                        <div class="form-row align-items-center" style="background-color: white;min-height:80px;box-shadow: 0 0 6px 0 rgba(0,0,0,.12), 0 4px 10px 0 rgba(0,0,0,.12);border-radius:5px;margin-left:0;margin-right:0">
                          <div class="col-sm-12 col-lg-5 my-1" style="border-right:1px solid #f3f3f3">
                            <input type="text" class="form-control" style="height:50px;border:none;box-shadow:none" id="inlineFormInputName" placeholder="Nama Barang">
                          </div>
                          <div class="col-sm-12 col-lg-5 my-1">
                            <div class="input-group">
                              <input type="text" class="form-control" style="height:50px;border:none;box-shadow:none" id="inlineFormInputGroupUsername" placeholder="Lokasi">
                            </div>
                          </div>
                          <div class="col-lg-2 col-sm-12 my-1">
                            <input type="submit" class="btn btn-primary"  style="height:50px; width:100% !important" value="Cari">
                          </div>
                        </div>
                </form>

                @include('trip.main.content')
        </div>
</section>

