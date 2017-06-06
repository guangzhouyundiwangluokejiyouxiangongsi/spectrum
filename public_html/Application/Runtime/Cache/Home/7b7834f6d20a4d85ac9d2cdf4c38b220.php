<?php if (!defined('THINK_PATH')) exit(); if(is_array($company)): foreach($company as $k=>$com): ?><div class="c_list">
		            <a target="_blank" href="/CompanyInfo/details?id=<?php echo ($com["com_id"]); ?>">
		                <img src="<?php echo tempimg($com['img_id'],370,200);?>" >
		                <h4><?php echo ($com['com_name']); ?></h4>
		                <p><?php echo ($com['com_synopsis']); ?></p>
		            </a>
		        </div><?php endforeach; endif; ?>