<html>
    <head>
        <title>Upload Image For Taging</title>
    </head>
    <body>
        <h1>Upload your image</h1>
        <form id="upload-form" action="<?php echo URL::site('uploadimage/upload') ?>" method="post" enctype="multipart/form-data">
            <p>Choose file:</p>
            <p><input type="file" name="avatar" id="avatar" /></p>
            <p><input type="submit" name="submit" id="submit" value="Upload" /></p>
        </form>
    </body>