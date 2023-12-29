
   <script src="js/scripts.js"></script>
         <script src="js/jquery-3.6.1.min.js""></script>
         <script src="datatable/dataTables.bootstrap5.min.js"></script>
<!-- Include the required libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>

<!-- Initialize DataTables -->


<!-- Initialize Summernote for text editing -->
<script>
        // Define the base_url function
        function base_url($slug) {
            // Replace 'yourdomain.com' with your actual domain
            return 'http://localhost/nmazini/admin/' + $slug;
        }

        $(document).ready(function () {
            $('#text_edit').summernote({
                placeholder: 'Input Post',
                height: 300,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript', 'color', 'fontname', 'fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['misc', ['fullscreen', 'codeview']],
                    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                    ['position', ['imagePosition']],
                ],
                fontNames: [
                    'Arial', 'Times New Roman', 'Courier New', 'Georgia', 'Verdana', 'Tahoma',
                    'Comic Sans MS', 'Impact', 'Lucida Sans Unicode', 'Trebuchet MS', 'Palatino Linotype'
                ],
                fontSizeNames: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
                callbacks: {
                    onImageUpload: function (files) {
                        var formData = new FormData();
                        formData.append('file', files[0]);

                        $.ajax({
                            url: 'upload.php',
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                var imageUrl = JSON.parse(response).url;

                                // Create a new image element
                                var imgElement = document.createElement('img');
                                imgElement.src = base_url(imageUrl); // Use the JavaScript function to generate the image URL
                                imgElement.alt = 'Uploaded Image';

                                // Set the image style attributes based on your desired output
                                imgElement.style.display = 'block';
                                imgElement.style.margin = '0px auto';

                                // Create a new paragraph element to hold the image and line break
                                var paragraphElement = document.createElement('p');
                                paragraphElement.innerHTML = imgElement.outerHTML ;

                                // Get the Summernote editor instance
                                var editor = $('#text_edit').summernote();

                                // Insert the paragraph element into the editor at the current cursor position
                                editor.summernote('pasteHTML', paragraphElement.outerHTML);
                            },
                            error: function () {
                                alert('Error uploading image');
                            }
                        });
                    }
                }
            });
        });

        // Function to handle image positioning
        function handleImagePosition(imageUrl, position) {
            // Create an image element
            var imgElement = document.createElement('img');
            imgElement.src = base_url(imageUrl);
            imgElement.alt = 'Uploaded Image';

            // Apply CSS styles for positioning
            switch (position) {
                case 'center':
                    imgElement.style.display = 'block';
                    imgElement.style.margin = '0 auto';
                    break;
                case 'left':
                    imgElement.style.float = 'left';
                    break;
                case 'right':
                    imgElement.style.float = 'right';
                    break;
                default:
                    // Default to center if the position is not recognized
                    imgElement.style.display = 'block';
                    imgElement.style.margin = '0 auto';
                    break;
            }

            // Get the Summernote editor instance
            var editor = $('#text_edit').summernote();

            // Insert the image into the editor at the current cursor position
            editor.summernote('insertNode', imgElement);
        }
    </script>




       <script>
          function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
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
       <script>
    $(document).ready(function () {
        $('#viewtable').DataTable();
    });
</script>
       

    </body>
</html>
