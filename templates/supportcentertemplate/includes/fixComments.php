<?
// article discussions
$article_discussions = "";
$article_discussions_object = return_article_discussions($jid);
if ($article_discussions_object)
        foreach($article_discussions_object as $ado_key => $comment_object)
                $article_discussions .= "
			<p>
				<a href='#comment-" . $comment_object->id . "'>" . htmlentities($comment_object->title,ENT_QUOTES) . "</a>
			</p>
		";

$comment_count = return_article_comment_count($jid);
?>






<style>
	#fixComments h3 {
		border-bottom:1px solid #ddd;
		margin-bottom:10px;
		padding-bottom:5px;
	}
	#fixComments h3 span.comment-count {
		float:left;
		font-size:40px;
		padding:12px 10px 15px 0px;
	}
	#fixComments h3 span.comment-text {
		display:inline-block;
		padding-left:20px;
	}
	#fixComments p.post-a-comment {
		text-align:right;
		border-top:1px solid #ddd;
		padding-top:10px;
	}
	#fixComments p.back-to {
		text-align:right;
	}
</style>
<a name='first-comment'></a>
<div class='container' style='margin:0px; padding:30px 0px 30px 0px; margin-left:auto; margin-right:auto;'>
	<div style='width: 70%; margin:0px; padding:0px; float:left;'>
		<? include_once('comments_nested.php'); ?>
	</div>
	<div name='fixComments' id='fixComments' style='width:220px; margin:0px; float:right;'>
		<div class='moduletable'>
			<h3><span class='comment-count'><? echo $comment_count; ?></span> Questions & <span class='comment-text'>Comments</span></h3>
			<? echo $article_discussions; ?>
			<p class='post-a-comment'><a href='#post_a_comment' class='btn btn-primary small'>Post a comment</a></p>
			<p class='back-to'>Back to <a href='#first-comment'>first comment</a> | <a href='#top-of-page'>top</a></p>
		</div>
	</div>
	<div style='clear:both;'></div>
</div>
