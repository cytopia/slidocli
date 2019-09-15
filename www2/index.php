<html>
<head>
<style>
td {
  padding:10px;
}
input[type=button] {
	font-size:20px;
	margin:10px;
}
</style>
</head>
<body>

<center>
<h3>slidocli web interface</h3>
Enter sli.do url and hit <code>fire</code> to retrieve the voting pannel.<br/>
<br/>
<table>
	<tr>
		<td>sli.do url</td>
		<td><input id="url" type="text" name="url" size="40" value="<?php echo isset($_GET['url']) ? $_GET['url'] : ''; ?>" placeholder="https://app.sli.do/event/xxxxxxxx" /></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="button" name="submit" onClick="list_questions()" value=" ~ ~ ~   fire   ~ ~ ~ " /></td>
	</tr>
</table>
<br/>

<div id="log"></div>
</center>

<script type="text/javascript">
function list_questions() {
	var http = new XMLHttpRequest();
	var data = 'url=' + document.getElementById('url').value;

	http.open('POST', 'fetch.php', true);
	http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	http.onreadystatechange = function() {
		if (http.readyState == 4 && http.status >= 200 && http.status < 300) {
			document.getElementById('log').innerHTML = http.responseText;
	    }
	}
	http.send(data);
}
function vote(url, qid) {
	var http = new XMLHttpRequest();
	var data = 'url=' + url + '&qid=' + qid;

	http.open('POST', 'vote.php', true);
	http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	http.onreadystatechange = function() {
		if (http.readyState == 4 && http.status >= 200 && http.status < 300) {
			document.getElementById(qid).innerHTML = http.responseText;
	    }
	}
	http.send(data);
}
</script>

</body>
</html>
