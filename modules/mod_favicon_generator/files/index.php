<html>
    <head>
        <meta charset="UTF-8">
        <title>Free Favicon Generator | InMotion Hosting</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="ui/app.js"></script>
        <link rel="stylesheet" href="ui/app.css" />
    </head>
    <body>
        <div id="viewport">
            <div id="step1" class="step">
                <div class="label">
                    Step 1:
                </div>
                <div class="content">
                    <form method="POST" action="upload.php" enctype="multipart/form-data" target="upload_frame">
                        <p>
                            Upload an image smaller than 1MB. For best results, pick a square image
                            to avoid distortion.
                        </p>
                        <div id="file_select_wrap">
                            <input id="file_input" name="file" type="file" />
                            <a id="file_select" href="#">Select Image</a>
                            <div id="file_holder"> (none selected) </div>
                        </div>
                        <a id="submit_btn" href="#">Create</a>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div id="step2" class="step">
                <div class="label">
                    Step 2:
                </div>
                <div class="content">
                    <img src="ui/example_bar.png" />
                    <div id="demo_favicon_wrap"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="step3" class="step">
                <div class="label">
                    Step 3:
                </div>
                <div class="content">
                    <p>Like It?</p>
                    <a id="download_btn" href="#" target="_blank">Download Icons</a>
                    <a id="startover" href="#">Start over</a>
                </div>
                <div class="clear"></div>
            </div>
            <div id="step4" class="step">
                <div class="label">
                    Step 4:
                </div>
                <div class="content">
                    <p>
                        Upload the icons to your website and paste the following code between the
                        &lt;head&gt; &lt;/head&gt; tags on your web page.
                    </p>
                    <textarea id="code_box" readonly="readonly" onclick="this.select()"></textarea>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <iframe name="upload_frame"></iframe>
    </body>
</html>
