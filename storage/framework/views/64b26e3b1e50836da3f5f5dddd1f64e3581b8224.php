<div>
    <form id="form1"> 
 <label for="imgInp" class="custom-file-upload"> 
      <i class="fa fa-cloud-upload"></i>Chosse file</label>
       <input type='file' id="imgInp" /></div>        
</form>
 <img id="blah" src=""> 
</div>
 <style type="text/css">
 	input[type='file'] {
    border: 3px dashed #999;
    cursor: move;
    display: block;
    font-size: 0px;
    filter: alpha(opacity=0);
    min-height: 160px;
    min-width: 300px;
    opacity: 1;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    background: transparent;
    z-index:-99999999999999;
} 
img#blah {
    display: block;
}


.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    position: absolute;
    top: 83px;
    left: 50%;
    z-index: 9999;
    width:75px;
    margin-left:-50.5px;
}

#form1 div {
    position: relative;
    width: 300px;
    float: left;
    height: 170px;
}

input[type='file']:before {
    content: "Upload an Image";
    display: block;
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 40px;
    margin: -25px 0 0 -100px;
    font-size: 18px;
    font-weight: bold;
    color: #999;
}
 </style>
 <script type="text/javascript">
 	function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
 </script>