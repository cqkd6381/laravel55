<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
</head>
<body>
	<h1>文章</h1>
	@can('update-post',$post)
		<p>恭喜，你可以访问</p>
	@else
		<p>对不起，你不可以访问</p>
	@endcan
</body>
</html>