var Colours = (function() {
		$(function() {
			//set currentColour var to default green
			var currentColour="blue";
			//check for cookie
			if ($.cookie("acLinkColour") && /\w/.test($.cookie("acLinkColour"))) {
				currentColour=$.cookie("acLinkColour");//if cookie, set currentColour to cookie val
			} else {
				$.cookie("acLinkColour", "blue", { path: "/" });//else, set cookie with val blue
			}
			var coloursFS = '<fieldset id="colours"><legend class="hidden">Select a link colour</legend><button id="orange" type="button" title="Change link colour to orange"><span class="hidden">Orange</span></button><button id="green" type="button" title="Change link colour to green"><span class="hidden">Green</span></button><button id="blue" type="button" title="Change link colour to blue"><span class="hidden">Blue</span></button><button id="purple" type="button" title="Change link colour to purple"><span class="hidden">Purple</span></button><button id="pink" type="button" title="Change link colour to pink"><span class="hidden">Pink</span></button></fieldset>';
			//write colour buttons to page
			$("header.site").before(coloursFS);
			//add colour class name to body
			$("body").addClass(currentColour);
			//add class="current" to appropriate colour button and set its height
			$("#"+currentColour).addClass("current").removeAttr("title");
			//for each colour button's click event
			$("#colours").delegate("button", "click",
				function(b){
					//remove class="current" from previously selected colour button
					$("#"+currentColour).removeClass("current").attr("title", "Change link colour to " + currentColour);;
					//remove previous colour class name from body
					$("body").removeClass(currentColour);
					//add class="current" to new colour button
					$(this).addClass("current").removeAttr("title");
					//set currentColour to new colour name
					currentColour=$(this).attr("id");
					//add colour class name to body
					$("body").addClass(currentColour);
					//set colour cookie value to new current colour
					$.cookie("acLinkColour", currentColour, { path: "/" });
				}
			);
			$("#colours").delegate("button", "mouseover focus",
				function(b) {
					$(this).addClass("over");
				}
			);
			$("#colours").delegate("button", "mouseout blur",
				function(b) {
					$(this).removeClass("over");
				}
			);
		});
	})();
