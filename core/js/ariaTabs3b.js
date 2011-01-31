var AriaTabs3b = (function() {
	$(function() {
		//for each tabs DIV...
		$("#tabs").each( 
			function(t){
				var tabsDiv=$(this);
				//for each individual tab DIV, set class and aria role attributes, and hide it
				$(tabsDiv).find(">div").attr({"class": "tabPanel", "role": "tabpanel", "aria-hidden": "true"}).hide();
				$(".tabPanel").attr("tabindex", "0");
				//get the list of tab links
				var tabsList=$(this).find("ul:first").attr({"class": "tabsList", "role": "tablist"}); 
				//for each item in the tabsList classed as .tab
				$(tabsList).find("li.tab>a").each(
					function(a){
						//create a unique id using the tab link's href
						var tabId="tab-"+$(this).attr("href").slice(1);
						//assign tabId, aria and tabindex attributes to the tab control, but do not remove the href
						$(this).attr({"id": tabId, "role": "tab", "aria-selected": "false", "tabindex": "-1"}).parent().attr("role", "presentation");
						//assign aria attribute to the relevant tab panel
						$(tabsDiv).find(".tabPanel").eq(a).attr("aria-labelledby", tabId);
						//set the click event for each tab link
						$(this).click(
							function(e){
								//prevent default click event
								e.preventDefault();
								//change state of previously selected tabList item
								$(tabsList).find(">li.current").removeClass("current").find(">a").attr({"aria-selected": "false", "tabindex": "-1"});
								//hide previously selected tabPanel
								$(tabsDiv).find(".tabPanel:visible").attr("aria-hidden", "true").hide();
								//show newly selected tabPanel
								$(tabsDiv).find(".tabPanel").eq($(this).parent().index()).attr("aria-hidden", "false").show();
								//set state of newly selected tab list item
								$(this).attr({"aria-selected": "true", "tabindex": "0"}).parent().addClass("current");
								$(this).focus();
							}
						);
					}
				);
				
				//set keydown events on tabList item for navigating tabs
				$(tabsList).delegate("a", "keydown",
					function (e) {
						switch (e.which) {
							case 37: case 38:
								if ($(this).parent().prev().length!=0) {
									$(this).parent().prev().find(">a").click();
								} else {
									$(tabsList).find("li:last>a").click();
								}
								break;
							case 39: case 40:
								if ($(this).parent().next().length!=0) {
									$(this).parent().next().find(">a").click();
								} else {
									$(tabsList).find("li:first>a").click();
								}
								break;
						}
					}
				);
				//show the first tabPanel
				$(tabsDiv).find(".tabPanel:first").attr("aria-hidden", "false").show();
				//set state for the first tabsList li
				$(tabsList).find("li:first").addClass("current").find(">a").attr({"aria-selected": "true", "tabindex": "0"});
		
			}
		);
	});
})();
