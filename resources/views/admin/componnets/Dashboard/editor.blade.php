@component('admin.master1')
<div class="content">

<head>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>
    <!-- <style>
استایل CSS
.save-btn {
    background-color: #ADD8E6 !important; /* آبی کمرنگ (lightblue) */
    color: 000; /* رنگ متن سفید */
    font-size: 16px; /* اندازه فونت */
    padding: 12px 24px; /* فاصله داخلی (padding) */
    border: none; /* حذف حاشیه */
    border-radius: 4px; /* گوشه‌های گرد */
    cursor: pointer; /* نشانگر موس به شکل "دست" */
    transition: background-color 0.3s, transform 0.2s; /* انیمیشن تغییر رنگ و مقیاس */
}

.save-btn:hover {
    background-color: #87CEFA !important; /* آبی روشن‌تر هنگام هاور */
}

.save-btn:active {
    transform: scale(0.98); /* کمی کوچک شدن دکمه هنگام کلیک */
}

.save-btn:focus {
    outline: none; /* حذف خط آبی هنگام فوکوس */
    box-shadow: 0 0 5px rgba(173, 216, 230, 0.6); /* سایه ملایم برای فوکوس */
}


    </style> -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
        <form method="POST" action="">
            @csrf
            <textarea id="editor" name="content">{{ old('content') }}</textarea>
            <button class="btn btn-primary mr-2 mt-2" type="submit">اعمال تغییرات </button>
        </form>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <script>
ClassicEditor
    .create(document.querySelector('#editor'), {
        language: 'fa', // تغییر زبان به فارسی
        alignment: {
            options: ['left', 'right', 'center', 'justify']
        }
    })
    .catch(error => {
        console.error(error);
    });

</script>


  <!-- jQuery
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/fastclick/fastclick.js"></script>

<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {

    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function (editor) {
      })
      .catch(function (error) {
        console.error(error)
      })


      $('.textarea').wysihtml5({
          toolbar: { fa: true }
      })
  })
</script> -->
@endcomponent
