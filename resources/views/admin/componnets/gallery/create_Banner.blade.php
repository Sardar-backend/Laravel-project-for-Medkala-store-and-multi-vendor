@component('admin.master1')


    <div class="row">
        <div class="col-lg-12">
        @include('admin.layaut.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ثبت بنر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('Banner.store' ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="father">
                     <!-- card -->
                    <div class="card-body">
                    <div class="form-group">
                  <div class="col-sm-10">
                  <label for="email">عکس بنر  :</label>
                  <input name="image" accept="image/*" type="file" class="form-control"   ></div>
                  </div>
                    <div class="form-group">


                    <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                    <div class="col-sm-10">
                      <input type="text" name="alt" class="form-control" id="inputEmail3" placeholder="توضیحات را وارد کنید">
                    </div>
                    </div><hr></div>
                    </div>

                    <!-- card -->
                    </div>
                        <!-- <button class="btn btn-sm btn-danger" type="button" id="add_product_image">تصویر جدید</button>
                    </div> -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت تصاویر</button>
                        <a href="{{ route('Banner.index' ) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>



@endcomponent
