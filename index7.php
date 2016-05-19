<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>share</title>
  </head>
  <body>

<script type="text/javascript"> 
$(function() {
	// fbAsyncInit
	window.fbAsyncInit = function() {
		FB.init({
			appId: '629485607065078'
		});
		FB.Canvas.scrollTo(0,0);
		FB.Canvas.setAutoGrow();
		FB.XFBML.parse();
	};
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
	$result.on('click', function() {
		if (post_check()) {
			var _data = {
				facebook_id: '',
				name: '',
				year: '1980',
				month: '01',
				day: '01',
				gender: '男性',
				questions_count: $("input[name='questions_count']").val(),
				right_answer: $("input[name='right_answer']").val(),
				tweet: '',
				item: 'what_nationality',
				code: ''
			};
			for(var i = 0; i < questions_count; i++){
				var qn = 'q'+i;
				_data[qn] = $("#"+qn).val();
			}
			var request = $.ajax({
				url: 'what_nationality',
				type: 'POST',
				data: _data,
				dataType: "html"
			});
			request.done(function(response) {
				$('#spin_js').css('visibility', 'hidden');
				$('#ajax_body').html(response);
									FB.Canvas.scrollTo(0,0);
					FB.Canvas.setAutoGrow();
							});
			request.fail(function() {
				location.reload();
			});
		} else {
		}
	});
});
</script>

  </body>
</html>
