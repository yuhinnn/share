<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>share</title>
  </head>
 
 <body>
<script>
var questions_count = '4';
	for(var i = 0; i < questions_count; i++){
		click_pointer(i);
	}


function click_pointer(d) {
		var num = d;
		$('.' + num + '_result').click({'at':d},function(d) {
			var $this = $(this);
			var result = $this.data('id');
			$answers = $('#' + num + '_answers a');
			$answers.removeClass('checked');
			if ($this.hasClass('checked')) {
				$this.removeClass('checked');
				//var result = result * -1;
				$('#q' + d.data.at).val(result);
			} else {
				$this.addClass('checked');
				$('#q' + d.data.at).val(result);
			}
			//$('#q' + d.data.at).val(point - 0 + result);
		});
	}
	function post_check() {
		$checkd = $('.checked');
		if ($checkd.length <  questions_count) {
			alert('全ての問題に回答して下さい。');
			return false;
		} else {
			$('#spin_js').css('visibility', 'visible');
			return true;
		}
	}
	var $result = $('#result,#result0,#result1');







</script>

</body>


</html> 
