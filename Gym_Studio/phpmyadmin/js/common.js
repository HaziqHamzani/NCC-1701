$(function(){$("#pma_open_querywindow").click(function(a){a.preventDefault();PMA_querywindow.focus()})});var PMA_commonParams=(function(){var a={};return{setAll:function(d){var c=false;for(var b in d){if(a[b]!==undefined&&a[b]!==d[b]){c=true}a[b]=d[b]}if(c){PMA_querywindow.refresh()}},get:function(b){return a[b]||""},set:function(b,c){if(a[b]!==undefined&&a[b]!==c){PMA_querywindow.refresh();PMA_reloadNavigation()}a[b]=c;return this},getUrlQuery:function(){return $.sprintf("?%s&server=%s&db=%s&table=%s",this.get("common_query"),encodeURIComponent(this.get("server")),encodeURIComponent(this.get("db")),encodeURIComponent(this.get("table")))}}})();var PMA_commonActions={setDb:function(a){if(a!=PMA_commonParams.get("db")){PMA_commonParams.set("db",a);PMA_querywindow.refresh()}},openDb:function(a){PMA_commonParams.set("db",a).set("table","");PMA_querywindow.refresh();this.refreshMain(PMA_commonParams.get("opendb_url"))},refreshMain:function(a,b){if(!a){a=$("#selflink a").attr("href");a=a.substring(0,a.indexOf("?"))}a+=PMA_commonParams.getUrlQuery();$("<a />",{href:a}).appendTo("body").click().remove();AJAX._callback=b}};var PMA_querywindow=(function(d,c){var b={};var a="";return{open:function(f,g){if(!f){f="querywindow.php"+PMA_commonParams.getUrlQuery()}if(g){f+="&sql_query="+encodeURIComponent(g)}if(!b.closed&&b.location){var e=b.location.href;if(e!=f&&e!=PMA_commonParams.get("pma_absolute_uri")+f){if(PMA_commonParams.get("safari_browser")){b.location.href=targeturl}else{b.location.replace(targeturl)}b.focus()}}else{b=c.open(f+"&init=1","","toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=yes,width="+PMA_commonParams.get("querywindow_width")+",height="+PMA_commonParams.get("querywindow_height"))}if(!b.opener){b.opener=c.window}if(c.focus){b.focus()}},focus:function(f){if(!b||b.closed||!b.location){a=f;this.open(false,f)}else{var e=b.document.getElementById("hiddenqueryform");if(e.querydisplay_tab!="sql"){e.querydisplay_tab.value="sql";e.sql_query.value=f;d(e).addClass("disableAjax");e.submit();b.focus()}else{b.focus()}}},refresh:function(f){if(!b.closed&&b.location){var e=d(b.document).find("#sqlqueryform");if(e.find("#checkbox_lock:checked").length==0){PMA_querywindow.open(f)}}},reload:function(f,g,i){if(!b.closed&&b.location){var e=d(b.document).find("#sqlqueryform");if(e.find("#checkbox_lock:checked").length==0){var h=d(b.document).find("#hiddenqueryform");h.find("input[name=db]").val(f);h.find("input[name=table]").val(g);if(i){h.find("input[name=sql_query]").val(i)}h.addClass("disableAjax").submit()}}}}})(jQuery,window);
