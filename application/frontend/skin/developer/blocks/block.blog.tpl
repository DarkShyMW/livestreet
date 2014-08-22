{**
 * Краткая информация о блоге на странице топика
 *
 * @styles css/blocks.css
 *}

{extends 'components/block/block.tpl'}

{block 'block_options' append}
	{$mods = "{$mods} blog"}
	{$oBlog = $oTopic->getBlog()}
{/block}

{if $oTopic && $oBlog->getType() != 'personal'}
	{block 'block_title'}<a href="{$oBlog->getUrlFull()}">{$oBlog->getTitle()|escape}</a>{/block}
	{block 'block_class'}block-type-blog{/block}

	{block 'block_content'}
		<span id="blog_user_count_{$oBlog->getId()}">{$oBlog->getCountUser()}</span>
		{$oBlog->getCountUser()|declension:$aLang.blog.readers_declension}<br />
		{$oBlog->getCountTopic()} {lang name=$aLang.topic.topic_plural count=$oBlog->getCountTopic() plural=true}

		<br />
		<br />

		{* Подписаться через RSS *}
		<a href="{router page='rss'}blog/{$oBlog->getUrl()}/" class="button">RSS</a>

		{* Вступить / Покинуть блог *}
		{include 'components/blog/join.tpl'}
	{/block}
{/if}