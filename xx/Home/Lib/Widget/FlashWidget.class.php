<?php
class FlashWidget extends Widget{
	public function render($data){
	$type = (isset($data['type'])) ? $data['type'] : '1' ;
	$lang =  (isset($data['lang'])) ? $data['lang'] : 'c' ;

	if (isset($data['id']) && $type == '3') {
		$nickname = M('Flash')->where('id='.$data['id'].' and isdel =0')->getField('photo');
		return $nickname;
	} else {
		
		if(S('flashdata'.$type.$lang)){
			$data=S('flashdata'.$type.$lang);
		}else{
			$data['flash']=$this->flash=M('Flash')->where('type = '.$type.' and isdel =0')->field('id,title,etitle,type,sort,link,elink,photo,description,edescription')->order('sort')->select();
			S('flashdata'.$type.$lang,$data,3600 * 24);
		}

		if ($lang == 'e') {
			$template  = ($type=='2') ? 'eadv' : 'eflash' ;
		}else{
			$template  = ($type=='2') ? 'adv' : 'flash' ;
		}

		$content=$this->renderFile($template,$data);
		return $content;
	}
	


	}

}
?>