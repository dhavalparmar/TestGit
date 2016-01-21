<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
	var fileId = 0; // used by the addFile() function to keep track of IDs
	function addFile() {
	    fileId++; // increment fileId to get a unique ID for the new element
	    var html = '<input type="file" name="uploaded_files[]" /> ' +
	               '<a href="" onclick="javascript:removeElement('file-' + fileId + ''); return false;">Remove</a>';
	    addElement('files', 'p', 'file-' + fileId, html);
	}
</script>

</head>
<body>

<form enctype="multipart/form-data" action="" method="post">
    <p>Upload file(s)</p>
    <div id="files">
        <p><input type="file" name="uploaded_file[]" /></p>
    </div>
    <p><input type="button" value="Add File" onclick="addFile();" /></p>
</form>

</body>
</html>
