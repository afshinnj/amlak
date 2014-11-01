<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<script src="<?php echo site_url('assets/site/js/jquery-1.8.2.js')?>"></script>
<script src="<?php echo site_url('assets/site/js/jquery.autoPopulateBox.js')?>"></script>
</head>

<body>

<?php echo anchor('user/login','ورود');?>

<?php echo anchor('user/register','ثبت نام');?>


<div class="input clearfix">
	<label for="tests">Tests</label>
	<select id="tests" name="test">
		<option value="">(select)</option>
		<?php foreach ($tests as $key => $test): ?>
		<option value="<?php echo $key; ?>"> <?php echo $test; ?> </option>
		<?php endforeach; ?>
	</select>
</div>

<div class="input clearfix">
	<label for="categories">Categories</label>
	<select id="categories" name="category">
		<option value="">(select)</option>
	</select>
</div>

<div class="input clearfix">
	<label for="contents">Contents</label>
	<select id="contents" name="content">
		<option value="">(select)</option>
	</select>
</div>
<script>
	jQuery(function($) {
		$('#tests').autoPopulateBox({
			emptyLabel: '(select)',
			url: 'site/json/',
			allSeparator: '/',
			change: 'category',
			
			category: {
				target: '#categories',
				change: 'content'
			},
			content: {
				target: '#contents'
			}
		});
	});
</script>
</body>
</html