@include('includes.upper')

<div class="content-wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <form action="{{ route('post-compose-email') }}" method="POST">
                     <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject"  placeholder="Email Subject" required>
                     </div>
                     <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="composer" name="content" placeholder="Place some text here"
                           style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
					 </div>

					 <button type="submit" class="btn btn-info">Send</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // ClassicEditor
    //   .create(document.querySelector('#composer'))
    //   .then(function (editor) {
    //     // The editor instance
    //   })
    //   .catch(function (error) {
    //     console.error(error)
    //   })

    // bootstrap WYSIHTML5 - text editor

    // $('.composer').wysihtml5({
    //   toolbar: { fa: true }
    // })
  })
</script>



  @include('includes.footer')
