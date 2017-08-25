<style>
	#main{
		text-align: center;

	}
	button{
		padding:20px;
		background-color: skyblue;
	}
</style>

<script type="text/javascript">
	window.onload = function(){
		buttonhtml=theogbutton.outerHTML;		
	}
	function press(){		
		textarea.value += " I'm Impressed!";
	}
	function save(){
		//write to document, the contents of the text area, that has the name of the input.
		var request = new XMLHttpRequest();
		request.open('POST', 'save.php', true); 
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send("docname=" + docname.value + "&text=" + textarea.value);
	}
	function get(){
		var request = new XMLHttpRequest();
		request.open('POST', 'get.php', true); 
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send("docname=" + docselect.value );
		request.onload = function() {
			docname.value = docselect.value;
			textarea.value = request.responseText;
		}
	}
</script>

<div id="main">
	<?php echo "<h1> YesPress </h1>";?>

	<button id="theogbutton" style="" onclick="press()">imPress Me</button>

	<div style="padding:20px;">
	Load File: <select id="docselect" onchange="get()">
	<?php $docs = (scandir("docs/"));
	array_shift($docs);
	array_shift($docs);

		foreach ($docs as $value) {
			echo "<option>$value</option>";
		}
		

	?>
		

	</select>
	</div>


	<div style="padding:20px;">
		Doc Name:<input id="docname" name="name">
	</div>
	<div>
		<textarea  style="width:500px; height:500px;" id="textarea"></textarea>
	</div>
	<button id="savebutton" onclick="save()">Save</button>
</div>

