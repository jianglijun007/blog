<?php
namespace Home\Controller;
use Think\Controller;
use Org\ThinkSDK\ThinkOauth;
class BaseController extends Controller {

    public function out() {
        session(null);
        $this->redirect('Index/index');
    }
	
	
	
    protected $_home = array();
    protected function _initialize(){
        $this->_home = session('home');
      	$this->Os = getOS();
		//我的标签
		$tag = M('article')->where("a_keyword != '' and a_views > 0")->field('a_keyword,a_id,create_time')->order('create_time desc')->limit(50)->select();
        for ($i = 1; $i < count($tag); $i++) {
            $tag[$i - 1][id] = $i;
        }
		$this->assign('tag', $tag);
		
        //菜单导航
        $cate = D('Article_cate')->select();
        $this->assign('cate', $cate);

		//链接
		$link = D('Link')->where("state = 1")->order('orderby')->select();
		$this->assign('link', $link);

		//最新留言
		$Liuyan = D('Liuyan')->order('add_time desc')->limit(4)->select();
		$this->assign('Liuyan', $Liuyan);
		
		$this->hits = M('article')->order('a_views desc')->where('a_views > 0')->limit(12)->field(true)->select();
        if (strtolower(CONTROLLER_NAME) != 'login' && strtolower(CONTROLLER_NAME) != 'public') { 
           
            $this->assign('admin',$this->_home);           
            $nownav['m']=strtolower(CONTROLLER_NAME );
            $nownav['a']=strtolower(ACTION_NAME);
            $this->assign('nownav',$nownav);

        }

		$this->qqname = session('qqname');

    }
    
  
    
    protected function checkFields($data = array(), $fields = array()) {
        foreach ($data as $k => $val) {
            if (!in_array($k, $fields)) {
                unset($data[$k]);
            }
        }
        return $data;
    }
   
}