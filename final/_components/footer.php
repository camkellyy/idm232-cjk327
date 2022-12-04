<script src="<?php echo site_url(); ?>/dist/scripts/app.js"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      menubar: false,
      plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table paste code help wordcount",
      ],
      toolbar: 
        "undo redo | formatselect | " +
        "bold italic backcolor | alignleft aligncenter " +
        "alignright alignjustify | bullist numlist outdent indent | " +
        "removeformat | help",
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
  </script>
</body>

<footer>
    <h3 class="footer-text">CarbSense 2022</h3>
</footer>
</html>