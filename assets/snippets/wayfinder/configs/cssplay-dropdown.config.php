<?php
	$level = 3;
	
	// $parentClass = 'hide';
	// $outerClass = 'menu';

	$outerTpl = '@CODE: [+wf.wrapper+]';

	$rowTpl = '@CODE:<li[+wf.classes+]><a href="[+wf.link+]" title="[+wf.title+]">[+wf.linktext+]</a>[+wf.wrapper+]</li>';

	$parentRowTpl = '@CODE:
		<li><a [+wf.classes+] href="javascript:void(0);" title="[+wf.title+]">[+wf.linktext+]</a>
		    <!--[if lte IE 6]>
		    <a class="sub" href="[+wf.link+]" title="[+wf.title+]">[+wf.linktext+]
		    <table><tr><td>
		    <![endif]-->
		    [+wf.wrapper+]
		    <!--[if lte IE 6]>
			</td></tr></table>
		    </a>
		    <![endif]-->
		</li>';
?>