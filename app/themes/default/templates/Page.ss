<!DOCTYPE html>
<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	$MetaTags(false)
    <% require themedCSS('main') %>
	<link rel="shortcut icon" href="$resourceURL('themes/default/images/favicon.ico')" />
</head>
<body class="$ClassName.ShortName<% if not $Menu(2) %> no-sidebar<% end_if %>" <% if $i18nScriptDirection %>dir="$i18nScriptDirection"<% end_if %>>

    <% include Header %>

<div class="text-red-500">
    hello world
</div>

<div class="main" role="main">
	<div class="inner typography line">
		$Layout
	</div>
</div>

<% include Footer %>

<%-- <% require javascript('//code.jquery.com/jquery-3.7.1.min.js') %> --%>
<%-- <% require themedJavascript('script') %> --%>

</body>
</html>
