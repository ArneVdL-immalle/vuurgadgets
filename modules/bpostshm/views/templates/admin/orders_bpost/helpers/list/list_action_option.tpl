{*
* 2014 Stigmi
*
* @author Stigmi.eu <www.stigmi.eu>
* @copyright 2014 Stigmi
* @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}
<option value="{$href|urldecode}"
		{if !empty($disabled)} disabled="disabled" data-disabled="{$disabled|escape:'htmlall':'UTF-8'}"{/if}
		{if !empty($target)} data-target="{$target|escape:'htmlall':'UTF-8'}"{/if}>
	{$action|escape:'htmlall':'UTF-8'}
</option>