      <section class="container">
      <div class="row">
      	<div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary"><? if($contentValue){?>About Us<?php }?></h2></div> 
        <p><span>
	<?php if($contentValue){ echo substr($contentValue['Content']['main_content'],0,282);
	 echo$this->Html->link('read more',array('controller'=>'Contents','action'=>'pages',$contentValue['Content']['page_url']),array('class'=>'btn-inline','target'=>'_self','title'=>'read more','escape'=>false));
	}?>
	</div>
        <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Projects</h2></div> 
            <div class="list styled custom-list">
            <ul>
	    <?php foreach($allProject as $post):$id=$post['Project']['id'];?>
	    <li><?php echo$this->Html->link($post['Project']['name'],array('controller'=>'Ourproperties','action'=>'index',$id),array('title'=>$post['Project']['name'],'escape'=>false));?></li>
	    <?php endforeach;?>
	    </ul>
            </div>
         </div>
         <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Property</h2></div> 
            <div class="list styled custom-list">
            <ul>
	    <?php foreach($allProperty as $post):$id=$post['Property']['id'];?>
	    <li><?php echo$this->Html->link($post['Property']['name'],array('controller'=>'Ourflats','action'=>'index',$id),array('title'=>$post['Property']['name'],'escape'=>false));?></li>
	    <?php endforeach;?>
	    </ul>
            </div>
         </div>
      