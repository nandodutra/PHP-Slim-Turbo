<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>{{title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
{% for c in css %}
    <link rel="stylesheet" href="css/{{c}}">
{% endfor %}
{% for j in js %}
    <script type="text/javascript" src="js/{{j}}"></script>
{% endfor %}
</head>
<body>
	