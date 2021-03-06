<div id="sidebar">
    <ul>
    	<li class="art">
			<div class="card-bg">
            	<img src="<?php echo get_option( 'memory_cardbck' ); ?>" />
        	</div>
	    	<div class="card-info" style="position: relative;">
            	<img class="card-info-avatar" src="<?php echo get_option( 'memory_useravatar' ); ?>" alt="头像" /><span class="card-info-block card-info-name"><i class="fa fa-at"></i><?php echo get_option( 'memory_username' ); ?> <i class="iconfont icon-certify"></i></span>
        	</div>
        	<div class="catch-me">
					<div>
						<a data-balloon="Rss" data-balloon-pos="up" target="_blank" href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss"></i></a>
						<?php if( get_option('memory_weibo')!=null ) { ?><a data-balloon="微博" data-balloon-pos="up" target="_blank" href="<?php echo get_option('memory_weibo'); ?>" class="external" rel="nofollow"><i class="fa fa-weibo"></i></a><?php } ?>
						<?php if( get_option('memory_github')!=null ) { ?><a data-balloon="GitHub" data-balloon-pos="up" target="_blank" href="<?php echo get_option('memory_github'); ?>" class="external" rel="nofollow"><i class="fa fa-github"></i></a><?php } ?>
						<a data-balloon="日/夜间模式" data-balloon-pos="up" href="javascript:void(0)" class="set-view-mode external"><i class="fa fa-moon-o"></i></a>
						<?php if( get_option('memory_qqqun')!=null ) { ?><a data-balloon="点击加入QQ群" data-balloon-pos="up" target="_blank" href="<?php echo get_option('memory_qqqun'); ?>" class="external" rel="nofollow"><i class="fa fa-group"></i></a><?php } ?>
						<?php if( get_option('memory_email')!=null ) { ?><a data-balloon="Email" data-balloon-pos="up" target="_blank" href="mailto:<?php echo get_option('memory_email'); ?>" class="external" rel="nofollow"><i class="fa fa-envelope-o"></i></a><?php } ?>
						<?php if( get_option('memory_zhihu')!=null ) { ?><a data-balloon="知乎" data-balloon-pos="up" target="_blank" href="<?php echo get_option('memory_zhihu'); ?>" class="external" rel="nofollow"><i  style="font-weight:200;">知</i></a><?php } ?>
						<a data-balloon="字体切换" data-balloon-pos="up" href="javascript:void(0)" class="set-font-mode external"><i class="fa fa-font"></i></a>
					</div>
				</div>
			</li>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li class="art">
            <header class="art-widget-header">
                <h3 class="sidebar-default-icon">我是萌萌哒的侧边栏！</h3>
            </header>
            <div class="textwidget">
            	<p>我是你的第一个侧边栏！快去小工具里面添加组件吧！</p>
            </div>
        </li>
			<?php endif; ?>
    </ul>
</div>
