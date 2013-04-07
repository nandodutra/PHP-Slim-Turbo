<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{title}}</title>
{% for c in css %}
    <link rel="stylesheet" href="css/{{c}}">
{% endfor %}
{% for j in js %}
    <script type="text/javascript" src="js/{{j}}"></script>
{% endfor %}
</head>
<body>
	