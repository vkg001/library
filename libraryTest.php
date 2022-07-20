<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Test</title>
</head>
<body>
    <p id="para1">Para 1</p>
    <p id="para2">Para 2</p>

    <input type="checkbox" class="toggleVisibility" data-check-fadein="#para1" data-uncheck-fadein="#para2">

    <br>
    <input type="file" name="" id="" data-error-msg="#errorMsg" data-error-time="10" class="validateImage" data-previewon=".imgPreview" accept="image/*" data-allowed-ext="png,jpg">
    <img src="" alt="" class="imgPreview"><br>
    <img src="" alt="" class="imgPreview"><br>
    <img src="" alt="" class="imgPreview"><br>
    <div id="errorMsg" style="display: none;">
        Invalid Image
    </div>

    <div style="border: 1px solid black; margin-top: 3rem;">
        <div id="appendable" style="display: none;">
            <div>
                Appended Text
                <button class="removeMe" data-parent-level="1">Remove</button>
            </div>
        </div>
        
        <div style="border: 1px solid red;" id="dataBlock">
            <div>
                Default Text
                <button class="appendData" data-append-to="#dataBlock" data-append-block="#appendable">Add</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/vkg001/scripts/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/vkg001/library/shortcuts.js"></script>
</body>
</html>