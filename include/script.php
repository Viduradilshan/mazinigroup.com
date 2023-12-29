        <script src="js/scripts.js"></script>
         <script src="js/jquery-3.6.1.min.js""></script>
         <script src="datatable/dataTables.bootstrap5.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
        <!-- Summernote JS - CDN Link -->
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
              <script src="datatable/jquery.dataTables.min.js"></script>

      <script>
        $(document).ready( function () {
          $('#viewtable').DataTable();
      } );
       </script>
       <script>
         function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
            //summer note

            
       </script>
       <script>
         $(document).ready(function() {
            //$("#text_edit").summernote();
            $('#text_edit').summernote({
            placeholder: 'Input Post',
        
        height: 300
      });
            $('.dropdown-toggle').dropdown();
        });
       </script>

       <script>
        function convertToSlug( str ) {
    
  //replace all special characters | symbols with a space
  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
           .toLowerCase();
    
  // trim spaces at start and end of string
  str = str.replace(/^\s+|\s+$/gm,'');
    
  // replace space with dash/hyphen
  str = str.replace(/\s+/g, '-');
    
   
  document.getElementById("slug-text").innerHTML = str;
  //return str;
}
       </script>
       

    </body>
</html>
