 
<?php if ( ! defined('IN_DILICMS')) exit('No direct script access allowed');
/**
 * DiliCMS
 *
 * 一款基于并面向CodeIgniter开发者的开源轻型后端内容管理系统.
 *
 * @package     DiliCMS
 * @author      DiliCMS Team
 * @copyright   Copyright (c) 2011 - 2012, DiliCMS Team.
 * @license     http://www.dilicms.com/license
 * @link        http://www.dilicms.com
 * @since       Version 1.0
 * @filesource
 */
 
// ------------------------------------------------------------------------
 
/**
 * DiliCMS 扩展字段演示
 *
 * 本字段用于完成普通的表单文件上传。
 * 
 * DiliCMS 版本需求:2.0Final(317214a)或者以上(注意：2.0Final还在不停更新，请保证为最新版.)
 * 使用方法：
 * 1. 将该文件放到extensions/fields/即可
 * 2. 更新字段类型缓存
 *
 * 特殊字段表单项利用说明
 * 1. 数据源，此处用于填写上传文件的格式，多个中间用|分割，如"jpg|png",留空则不限定文件格式
 * 2. 不支持验证规则
 * 3. 不支持搜索
 *
 * @package     DiliCMS
 * @subpackage  extensions
 * @category    fields
 * @author      Jeongee
 * @link        http://www.dilicms.com
 */
class field_mfile
{
        /**
         * $k
         * 自定义的字段标识，需要唯一, 非官方开发请自由加上前缀
         * 
         * @var string
         * @access  public
         **/
        public $k = 'mfile';
        
        /**
         * $v
         * 自定义的字段名称
         *
         * @var string
         * @access  public
         **/
        public $v = '多文件上传(TEXT)';
        
        /**
         * 构造函数
         *
         * @access  public
         * @return  void
         */
        public function __construct()
        {
                //可以根据需求初始化数据
        }
        
        /**
         * 生成字段的创建信息
         *
         * @access  public
         * @param   array  $data 该值为新建或修改字段时候表单提交的POST数组 
         * @return  array 
         */
        public function  on_info($data)
        {
                return array('type' => 'TEXT', 'default' => '');
        }
 
        /**
         * 生成字段的表单控件
         *
         * 此处，我仅仅是加了个链接
         *
         * @access  public
         * @param   array  $field 该值为字段的基本信息，结构见settings/model下的缓存文件，或者查看数据库表结构
         * @param   string $default 默认值，用于提供默认值，或者表单回填所需
         * @param   bool   $tip 是否显示,若是，则输出字段的验证规则
         * @return  void
         */
        public function on_form($field, $default= '', $has_tip = TRUE)
        {
                echo '<script>
                                function addFile(t, name){
                                        $(t).before(\'<br><input type="file" name="\'+name+\'[]" />\');
                                }
                                function delFile(id){
                						if(confirm("确认删除吗？")){
                                        	$("#"+id).remove();
                						}
                                }
                         </script>';
                echo '<div>
                                <input type="file" name="'.$field['name'].'[]" />
                                <a href="javascript:;" ><span style="font-size:20px;color:blue">+</span></a>
                         </div>';
                if ($has_tip)
                {
                        echo '<label>'.$field['ruledescription'].'</label>';
                }
                if ($default)
                {
                        $urls = explode('|', $default);
                        echo '<div>文件列表：';
                        foreach($urls as $url)
                        {
                                $hashUrl = md5($url);
                                $filename=str_replace("/admin/", "", base_url()).$default;
                                $extName=explode(".",$default);
                                if($extName[(sizeof($extName)-1)]=="jpg"||$extName[(sizeof($extName)-1)]=="png"){
                                	$showName='<img src="'.str_replace("/admin/", "", base_url()).$url.'" style="width:200px;">';
                                	$showType="当前图片(点击新窗口打开看大图)：<br />";
                                }
                                else{
                                	$showName=str_replace("/admin/", "", base_url()).$url;
                                	$showType="当前文件：";
                                }
                                echo '<p id="'.$hashUrl.'">
                                                <a target="_blank" href="'.str_replace("/admin/", "", base_url()).$url.'">'.$url.'</a>
                                                  <a href="javascript:delFile(\''.$hashUrl.'\')" style="color:blue" >　【删除】　</a><br/>
                                                  		<a target="_blank" href="'.str_replace("/admin/", "", base_url()).$url.'">'.$showName.'</a>
                                                <input type="hidden" name="'.$field['name'].'[]" value="'.$url.'" />
                                         </p>';
                        }
                        echo '</div>';
                }
        }
        
        /**
         * 生成字段的列表的控件
         * 
         * 这里简单的输出字段的值
         *
         * @access  public
         * @param   array  $field 同上
         * @param   object  $record 一条数据库记录
         * @return  void 
         */
        public function on_list($field, $record)
        {
                echo $record->$field['name'];
        }
        
        /**
         * 生成字段的搜索表单的控件
         *
         * 此字段不支持搜索 
         *
         * @access  public
         * @param   array $field 同上
         * @param   string $default 同上上
         * @return  void
         */
        public function on_search($field, $default)
        {
                echo '对不起，此字段不支持搜索';
        }
        
        /**
         * 执行字段在搜索操作的行为
         *
         * 不支持搜索
         *
         * @access  public
         * @param   array $field 同上
         * @param   array $condition ,引用传递，记录搜索条件的数组，此数组直接用于$this->db->where(),区别于下面的$where
         * @param   array $where, 引用传递， 简单的对于GET数据的过滤后的产物，用于回填搜索的表单
         * @param   string $suffix 引用传递，用于拼接搜索条件，此货的产生现在看来完全没有必要，下个版本必将消失
         * @return  void
         */
        public function on_do_search($field, & $condition, & $where, & $suffix )
        {
                //do nothing
        }
        
        
        /**
         * 执行字段提交的行为
         *
         * 对于上传文件的处理，这里我将使上传的文件可以存入附件表，将会对$_POST进行进行操作,具体看代码。
         * 为了不影响表单的提交被阻断，如果上传失败，则维持该字段的值不变.
         * 为了兼容SAE平台，未使用CI上传类.
         *
         * @access  public
         * @param   array $field 同上
         * @param   array $post 引用传递, 用于记录post过来的值，用于插入数据库，处理请小心
         * @return  void
         */
        public function on_do_post($field, & $post)
        {
                if($field['values'])
                {
                        //加载MIMES数据
                        include APPPATH.'config/mimes.php';
                }
 
                $CI = & get_instance();
                $CI->load->helper('date');
                $_timestamp = now();
 
                foreach($_FILES[$field['name']]['name'] as $key=>$fileName)
                {
                        if (! $_FILES[$field['name']]['error'][$key])
                        {
                                //判断文件MIME是否合法,文件的格式将使用数据源的位置填写，不填写则允许一切格式上传
                                $extension_valid = FALSE;
                                if ($field['values'])
                                {
                                        foreach (explode('|', $field['values']) as $_mime)
                                        {
                                                if (isset($mimes[$_mime]))
                                                {
                                                        if (! is_array($mimes[$_mime]))
                                                        {
                                                                $mimes[$_mime] = array($mimes[$_mime]);
                                                        }
                                                        if (in_array($_FILES[$field['name']]['type'][$key], $mimes[$_mime]))
                                                        {
                                                                $extension_valid = TRUE;
                                                        }
                                                }
                                        }
                                }
                                else
                                {
                                        $extension_valid = TRUE;
                                }
 
                                //判断文件大小
                                if ($_FILES[$field['name']]['size'][$key] > setting('attachment_maxupload'))
                                {
                                        $extension_valid = FALSE;
                                } 
                                
                                if ($extension_valid)
                                {
                                        $upload['folder'] = date('Y/m', $_timestamp);
                                        $target_path = DILICMS_SHARE_PATH.'../'.setting('attachment_dir').'/'.$upload['folder'];
                                        $realname = explode('.', $_FILES[$field['name']]['name'][$key]);
                                        $upload['type'] = strtolower(array_pop($realname));
                                        $upload['realname'] = implode('.', $realname);
                                        $upload['name'] = $_timestamp.substr(md5($upload['realname']. rand()), 0, 16);
                                        $upload['posttime'] = $_timestamp;
                                        $upload['uid'] = $CI->_admin->uid;
                                        $target_file = $target_path.'/'.$upload['name'].'.'.$upload['type'];
                                        if ($CI->platform->file_upload($_FILES[$field['name']]['tmp_name'][$key], $target_file))
                                        {
                                                $upload['image'] = (in_array($upload['type'], array('jpg', 'gif', 'png', 'jpeg', 'bmp')) ? 1 : 0);
                                                //可自行根据需要进行缩略图处理
                                                $CI->db->insert('attachments', $upload);
                                                if ($aid = $CI->db->insert_id())
                                                {
                                                        //已上传成功并已插入数据库
                                                        //强行将该附件记录与模型记录绑定
                                                        $_POST['uploadedfile'] = $_POST['uploadedfile'].','.$aid;
                                                        //表单赋值
                                                        $post[$field['name']][] = '/'.setting('attachment_dir').'/'.$upload['folder'].'/'.$upload['name'].'.'.$upload['type'];
                                                }
                                        }
                                }        
                        }
                }
 
                if((isset($post[$field['name']]) && is_array($post[$field['name']])) || (isset($_POST[$field['name']]) && is_array($_POST[$field['name']])))
                {
                        $files = @array_merge((array)$_POST[$field['name']], (array)$post[$field['name']]);
                        unset($post[$field['name']]);
                        $post[$field['name']] = implode('|', $files);
                }
                else
                {
                        $post[$field['name']] = '';
                }
 
        }
}
 
/* End of file field_mfile.php */
/* Location: ./extensions/fields/field_mfile.php */
 