/*
Navicat MySQL Data Transfer

Source Server         : localhost_3308
Source Server Version : 50051
Source Host           : localhost:3308
Source Database       : itildemo

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2016-01-06 20:59:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `t_attachment`;
CREATE TABLE `t_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `attach_id` varchar(64) NOT NULL,
  `attach_name` varchar(128) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=364 DEFAULT CHARSET=utf8 COMMENT='存储上传的附件信息';

-- ----------------------------
-- Records of t_attachment
-- ----------------------------
INSERT INTO `t_attachment` VALUES ('285', '38311472969408684a0ba0364c1ab4ed', 'win8风格导航界面.rar');
INSERT INTO `t_attachment` VALUES ('286', '38311472969408684a0ba0364c1ab4ed', '网站后台框架bootstrap.rar');
INSERT INTO `t_attachment` VALUES ('287', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'CH4-5edNetwork+Layer.pdf');
INSERT INTO `t_attachment` VALUES ('288', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'CH5-5ed-transportlayer.pdf');
INSERT INTO `t_attachment` VALUES ('289', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'Chapter+3+Data+Link+Layer.pdf');
INSERT INTO `t_attachment` VALUES ('290', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'chapter1.pdf');
INSERT INTO `t_attachment` VALUES ('291', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'chapter2+physical.pdf');
INSERT INTO `t_attachment` VALUES ('292', '14f1f9d2a48f0c8da1c7b1174ca0cad7', 'chapter6.pdf');
INSERT INTO `t_attachment` VALUES ('293', '14f1f9d2a48f0c8da1c7b1174ca0cad7', '复习.pdf');
INSERT INTO `t_attachment` VALUES ('294', 'a5452f0df22280621023fab03288cf53', 'chapter1.pdf');
INSERT INTO `t_attachment` VALUES ('295', 'a5452f0df22280621023fab03288cf53', 'chapter2+physical.pdf');
INSERT INTO `t_attachment` VALUES ('296', 'a5452f0df22280621023fab03288cf53', 'chapter6.pdf');
INSERT INTO `t_attachment` VALUES ('297', 'a5452f0df22280621023fab03288cf53', '复习.pdf');
INSERT INTO `t_attachment` VALUES ('298', 'f07a4b386cb4422f03baf8195a278431', 'CH5-5ed-transportlayer.pdf');
INSERT INTO `t_attachment` VALUES ('299', 'f07a4b386cb4422f03baf8195a278431', 'Chapter+3+Data+Link+Layer.pdf');
INSERT INTO `t_attachment` VALUES ('300', 'f07a4b386cb4422f03baf8195a278431', 'chapter1.pdf');
INSERT INTO `t_attachment` VALUES ('301', 'f07a4b386cb4422f03baf8195a278431', 'chapter2+physical.pdf');
INSERT INTO `t_attachment` VALUES ('302', 'f07a4b386cb4422f03baf8195a278431', 'chapter6.pdf');
INSERT INTO `t_attachment` VALUES ('303', 'f07a4b386cb4422f03baf8195a278431', '复习.pdf');
INSERT INTO `t_attachment` VALUES ('304', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee01.pdf');
INSERT INTO `t_attachment` VALUES ('305', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee03.pdf');
INSERT INTO `t_attachment` VALUES ('306', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee04.pdf');
INSERT INTO `t_attachment` VALUES ('307', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee05.pdf');
INSERT INTO `t_attachment` VALUES ('308', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee06.pdf');
INSERT INTO `t_attachment` VALUES ('309', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee07.pdf');
INSERT INTO `t_attachment` VALUES ('310', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee08.pdf');
INSERT INTO `t_attachment` VALUES ('311', '604dacc8ef8e0c94cf909bcfa5680d85', 'javaee10.pdf');
INSERT INTO `t_attachment` VALUES ('312', '510248d78031bc773aa348f15f5d440e', '第7章  实现.ppt');
INSERT INTO `t_attachment` VALUES ('313', '510248d78031bc773aa348f15f5d440e', '第7章 编码补充.ppt');
INSERT INTO `t_attachment` VALUES ('314', '510248d78031bc773aa348f15f5d440e', '第8章  维护.ppt');
INSERT INTO `t_attachment` VALUES ('315', '510248d78031bc773aa348f15f5d440e', '第9－12章  面向对象.ppt');
INSERT INTO `t_attachment` VALUES ('316', '510248d78031bc773aa348f15f5d440e', '第9－12章 面向对象补充.ppt');
INSERT INTO `t_attachment` VALUES ('317', '7fcddb1f94b0006984750f950c4425a0', '2015电脑组装图文并茂教程DIY装机.pdf');
INSERT INTO `t_attachment` VALUES ('318', '43f3515e16f197b15cd50bfa78cd386f', '2015电脑组装图文并茂教程DIY装机.pdf');
INSERT INTO `t_attachment` VALUES ('319', 'ee65ff1ae9e7a53031cd64b91a1bf7a0', '操作系统(3).ppt');
INSERT INTO `t_attachment` VALUES ('320', 'ee65ff1ae9e7a53031cd64b91a1bf7a0', '操作系统(4).ppt');
INSERT INTO `t_attachment` VALUES ('321', 'ee65ff1ae9e7a53031cd64b91a1bf7a0', '操作系统(5).ppt');
INSERT INTO `t_attachment` VALUES ('322', 'ee65ff1ae9e7a53031cd64b91a1bf7a0', '操作系统(6).ppt');
INSERT INTO `t_attachment` VALUES ('323', '800442877f621f4b6484d8ef0885cea3', '操作系统(4).ppt');
INSERT INTO `t_attachment` VALUES ('324', '821b542fbdd8260c46df2a23dd782a90', '操作系统(3).ppt');
INSERT INTO `t_attachment` VALUES ('325', '821b542fbdd8260c46df2a23dd782a90', '操作系统(5).ppt');
INSERT INTO `t_attachment` VALUES ('326', '821b542fbdd8260c46df2a23dd782a90', '操作系统(6).ppt');
INSERT INTO `t_attachment` VALUES ('327', '821b542fbdd8260c46df2a23dd782a90', '操作系统(2).ppt');
INSERT INTO `t_attachment` VALUES ('328', '821b542fbdd8260c46df2a23dd782a90', '操作系统(3).ppt');
INSERT INTO `t_attachment` VALUES ('329', '821b542fbdd8260c46df2a23dd782a90', '操作系统(4).ppt');
INSERT INTO `t_attachment` VALUES ('330', '821b542fbdd8260c46df2a23dd782a90', '操作系统(5).ppt');
INSERT INTO `t_attachment` VALUES ('331', '821b542fbdd8260c46df2a23dd782a90', '操作系统(6).ppt');
INSERT INTO `t_attachment` VALUES ('332', '7fcddb1f94b0006984750f950c4425a0', '操作系统(6).ppt');
INSERT INTO `t_attachment` VALUES ('333', 'cae02cd02336b1a8bcfe7053001c4399', '操作系统(3).ppt');
INSERT INTO `t_attachment` VALUES ('334', 'cae02cd02336b1a8bcfe7053001c4399', '操作系统(4).ppt');
INSERT INTO `t_attachment` VALUES ('335', 'cae02cd02336b1a8bcfe7053001c4399', '操作系统(5).ppt');
INSERT INTO `t_attachment` VALUES ('336', 'cae02cd02336b1a8bcfe7053001c4399', '操作系统(6).ppt');
INSERT INTO `t_attachment` VALUES ('337', 'cae02cd02336b1a8bcfe7053001c4399', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('338', 'e371ad57a6bf81d089b5f02e866549bf', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('339', 'e371ad57a6bf81d089b5f02e866549bf', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('340', '1f3f0a880b42e6da3cbdb6bb4ffd4f09', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('341', 'dbc8ce3b3db8d70ca7859c0cdf826a46', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('342', 'dbc8ce3b3db8d70ca7859c0cdf826a46', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('343', 'eaeb739e9c950e74f99868320d12bd6e', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('344', 'eaeb739e9c950e74f99868320d12bd6e', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('345', 'b4b17e61e4ad344d70f04771280bde08', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('346', 'b4b17e61e4ad344d70f04771280bde08', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('347', 'dd5217fe17ccdae6c80c0648feaf421b', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('348', 'dd5217fe17ccdae6c80c0648feaf421b', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('349', 'd282a1111b89664896cb438ae669d377', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('350', 'd282a1111b89664896cb438ae669d377', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('351', 'd282a1111b89664896cb438ae669d377', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('352', '009255704e653410002b0ae7a1134333', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('353', '009255704e653410002b0ae7a1134333', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('354', '009255704e653410002b0ae7a1134333', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('355', '009255704e653410002b0ae7a1134333', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('356', '625aadd13397d94a80ccda5fe210490a', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('357', '625aadd13397d94a80ccda5fe210490a', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('358', '625aadd13397d94a80ccda5fe210490a', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('359', '625aadd13397d94a80ccda5fe210490a', '实验大纲.doc');
INSERT INTO `t_attachment` VALUES ('360', 'dc1539042597233a6a289bf035b9666f', 'vi编辑器的使用.doc');
INSERT INTO `t_attachment` VALUES ('361', 'dc1539042597233a6a289bf035b9666f', '操作系统实验.ppt');
INSERT INTO `t_attachment` VALUES ('362', 'dc1539042597233a6a289bf035b9666f', '实验报告格式.doc');
INSERT INTO `t_attachment` VALUES ('363', 'dc1539042597233a6a289bf035b9666f', '实验大纲.doc');

-- ----------------------------
-- Table structure for `t_depart`
-- ----------------------------
DROP TABLE IF EXISTS `t_depart`;
CREATE TABLE `t_depart` (
  `depart_id` int(11) NOT NULL auto_increment,
  `depart_name` varchar(64) default NULL,
  `depart_parent_id` int(11) default '0',
  PRIMARY KEY  (`depart_id`),
  KEY `t_depart_ibfk_1` (`depart_parent_id`),
  CONSTRAINT `t_depart_ibfk_1` FOREIGN KEY (`depart_parent_id`) REFERENCES `t_depart` (`depart_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COMMENT='存储机构信息';

-- ----------------------------
-- Records of t_depart
-- ----------------------------
INSERT INTO `t_depart` VALUES ('7', '客户单位', null);
INSERT INTO `t_depart` VALUES ('8', '华为', '7');
INSERT INTO `t_depart` VALUES ('16', '运维部', null);
INSERT INTO `t_depart` VALUES ('19', '工程师', '16');
INSERT INTO `t_depart` VALUES ('36', '华为武汉分公司', '8');
INSERT INTO `t_depart` VALUES ('37', '魅族', '7');
INSERT INTO `t_depart` VALUES ('38', '管理员', '16');
INSERT INTO `t_depart` VALUES ('41', '时代发生的', null);

-- ----------------------------
-- Table structure for `t_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `t_feedback`;
CREATE TABLE `t_feedback` (
  `id` int(11) NOT NULL auto_increment,
  `req_num` varchar(16) default NULL,
  `fd_1` int(2) default NULL,
  `fd_2` int(2) default NULL,
  `fd_3` int(2) default NULL,
  `fd_4` int(2) default NULL,
  `fd_5` int(2) default NULL,
  `fd_6` int(2) default NULL,
  `suggest` varchar(256) default NULL,
  `fd_time` datetime default NULL,
  `engineer` varchar(64) default NULL,
  PRIMARY KEY  (`id`),
  KEY `req_num` (`req_num`),
  KEY `engineer` (`engineer`),
  CONSTRAINT `t_feedback_ibfk_1` FOREIGN KEY (`req_num`) REFERENCES `t_req` (`req_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_feedback_ibfk_2` FOREIGN KEY (`engineer`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='存储用户的评价信息';

-- ----------------------------
-- Records of t_feedback
-- ----------------------------
INSERT INTO `t_feedback` VALUES ('1', 'REQ15092300004', '4', '3', '4', '3', '4', '4', '还行', '2015-10-07 15:27:52', 'gcs3');
INSERT INTO `t_feedback` VALUES ('2', 'REQ15092200002', '3', '3', '3', '2', '3', '3', '一般', '2015-10-07 15:29:14', 'gcs1');
INSERT INTO `t_feedback` VALUES ('3', 'REQ15092500001', '1', '1', '1', '1', '1', '1', '差评！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！！', '2015-10-07 15:29:45', 'gcs3');
INSERT INTO `t_feedback` VALUES ('4', 'REQ15092300001', '5', '5', '2', '5', '5', '5', '满意', '2015-10-07 19:28:25', 'gcs3');
INSERT INTO `t_feedback` VALUES ('5', 'REQ15092300002', '5', '5', '5', '5', '5', '5', '满意', '2015-10-07 19:35:24', 'gcs3');
INSERT INTO `t_feedback` VALUES ('6', 'REQ15092500005', '5', '5', '4', '5', '4', '5', '满意', '2015-10-07 19:36:21', 'gcs2');

-- ----------------------------
-- Table structure for `t_kno`
-- ----------------------------
DROP TABLE IF EXISTS `t_kno`;
CREATE TABLE `t_kno` (
  `id` int(11) NOT NULL auto_increment,
  `kno_num` varchar(16) default NULL,
  `kno_title` varchar(128) default NULL,
  `kno_author` varchar(64) default NULL,
  `kno_keyword` varchar(128) default NULL,
  `kno_sort` varchar(128) default NULL,
  `kno_sub_time` datetime default NULL,
  `kno_req_num` varchar(16) default NULL,
  `kno_state` int(4) default '1',
  `kno_content` text,
  `kno_attach_id` varchar(64) default NULL,
  `kno_read` int(11) default '0',
  PRIMARY KEY  (`id`),
  KEY `kno_num` (`kno_num`),
  KEY `kno_req_num` (`kno_req_num`),
  KEY `t_kno_ibfk_1` (`kno_author`),
  CONSTRAINT `t_kno_ibfk_1` FOREIGN KEY (`kno_author`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COMMENT='知识库信息表';

-- ----------------------------
-- Records of t_kno
-- ----------------------------
INSERT INTO `t_kno` VALUES ('1', 'KNO2015091100001', 'smarty获取数组的长度', 'test', 'smarty php', 'PHP开发  ', '2015-09-11 14:11:44', null, '3', '<p>在用smarty时，获取数组的长度可以有以下几种方法：<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1、{count($Arr)}<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、<a href=\"mailto:%7B$Arr%7C@count\">{$Arr|@count</a>}<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3、{$Arr|count}</p>\r\n\r\n<p>这三种方法是本人在写一些程序时测试过可行，但不知在其它情况下是否都可行，请逐一测试。</p>\r\n\r\n<p>下面是一些摘自网上的技术要点，供大家参考：</p>\r\n\r\n<p>1、Smarty对属性调节器后边的方法名进行处理时，会对前边加@的进行特殊处理。<br />\r\n2、在Smarty的属性调节器中调用php中定义好的函数时，可以通过加@来表示。<br />\r\n3、要对数组调用end方法得出数组的最后一组数据时，则可以通过<a href=\"mailto:%7Barray%7C@end\">{array|@end</a>}。<br />\r\n4、在对字符串的相关函数进行测试，发现加不加@都可以正常的调用。注：count($str) = 1;</p>\r\n\r\n<p>例子：</p>\r\n\r\n<p>1、 直接使用</p>\r\n\r\n<p>{if $array|@count neq 0 }<br />\r\n... ...<br />\r\n{/if}</p>\r\n\r\n<p>2、简写</p>\r\n\r\n<p>{if $array|@count }<br />\r\n... ...<br />\r\n{/if}</p>\r\n\r\n<p>3、直接判断</p>\r\n\r\n<p>{ if $array neq &quot;&quot;}<br />\r\n......<br />\r\n{/if}</p>\r\n', 'f2adf8fd17ac8a2379344f23c248b1a5', '2');
INSERT INTO `t_kno` VALUES ('2', 'KNO2015091100002', 'Smarty的assign定义变量', 'test', 'smarty php', 'PHP开发  ', '2015-09-11 14:21:25', null, '3', '<p>使用assign定义的变量被添加到Smarty类的$tpl_vars数组成员下。<br />\r\n当assign指定关键字/值的时候，如：$Smarty-&gt;assign(key,value)，则装入$tpl_var数组的键名为key，值为value。<br />\r\n$Smarty-&gt;assign(&#39;myname&#39;,&#39;飞虎&#39;);<br />\r\n<br />\r\n当assign的是一个数组时，如：$Smarty-&gt;assign(array())，则装入$tpl_var数组的键名键值与原数组相同。<br />\r\n$Smarty-&gt;assign(array(&quot;p1&quot;=&gt;&quot;亲亲论坛&quot;,&quot;p2&quot;=&gt;&quot;亲亲宝宝&quot;,&quot;p3&quot;=&gt;&quot;亲亲妈妈&quot;));</p>\r\n\r\n<p>当遇到相同键名的键/值对时，则覆盖原来$tpl_var相同键名的值。<br />\r\n$Smarty-&gt;assign(&quot;p1&quot;,&quot;ppppp&quot;);</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'a5184a88c635a220a91f93d7b575fd6e', '2');
INSERT INTO `t_kno` VALUES ('3', 'KNO2015091100003', 'smarty 过滤html标签的特殊问题', 'test', 'smarty  标签问题', 'PHP开发  项目管理系统  ', '2015-09-11 21:14:05', null, '3', '<p>smarty模版截取字符串时,想让它自动先排除HTML标签,很难，要怎么做啊<br />\r\n案一：<br />\r\n[php]&lt;{$articlechoose[0].content | strip_tags}&gt; [/php]可以过滤掉所有html标签，<br />\r\n<br />\r\n案二：<br />\r\n[php]&lt;{$articlechoose[0].content | truncate:100}&gt; [/php]可以截取要显示100字节的字符串，<br />\r\n<br />\r\n我现在从数据库里面读取的内容里包含html标签，但我想让smarty能自动排除那些HTML标签之后截取100字节的文字，<br />\r\n就是说文字内容照常显示100个，图片啊什么的都不受它的影响，完全显示出来，应该怎么做啊，请各位帮忙看看</p>\r\n', '3f944fdbc184f0c1aa7102a5236c850c', '8');
INSERT INTO `t_kno` VALUES ('4', 'KNO2015091100004', ' java用正则去除html标签 ', 'test', 'java HTML标签', 'Java开发  学生管理系统  ', '2015-09-11 21:18:49', null, '3', '<ol>\r\n	<li>package&nbsp;com.xz.cxzy.utils;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;</li>\r\n	<li>import&nbsp;java.util.regex.Matcher;&nbsp;&nbsp;</li>\r\n	<li>import&nbsp;java.util.regex.Pattern;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;</li>\r\n	<li>public&nbsp;class&nbsp;HtmlUtil&nbsp;{&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;static&nbsp;final&nbsp;String&nbsp;regEx_script&nbsp;=&nbsp;&quot;&lt;script[^&gt;]*?&gt;[\\s\\S]*?&lt;\\/script&gt;&quot;;&nbsp;//&nbsp;定义script的正则表达式&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;static&nbsp;final&nbsp;String&nbsp;regEx_style&nbsp;=&nbsp;&quot;&lt;style[^&gt;]*?&gt;[\\s\\S]*?&lt;\\/style&gt;&quot;;&nbsp;//&nbsp;定义style的正则表达式&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;static&nbsp;final&nbsp;String&nbsp;regEx_html&nbsp;=&nbsp;&quot;&lt;[^&gt;]+&gt;&quot;;&nbsp;//&nbsp;定义HTML标签的正则表达式&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;private&nbsp;static&nbsp;final&nbsp;String&nbsp;regEx_space&nbsp;=&nbsp;&quot;\\s*|	|\r|\n&quot;;//定义空格回车换行符&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;/**&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@param&nbsp;htmlStr&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;@return&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;删除Html标签&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;String&nbsp;delHTMLTag(String&nbsp;htmlStr)&nbsp;{&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pattern&nbsp;p_script&nbsp;=&nbsp;Pattern.compile(regEx_script,&nbsp;Pattern.CASE_INSENSITIVE);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matcher&nbsp;m_script&nbsp;=&nbsp;p_script.matcher(htmlStr);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;m_script.replaceAll(&quot;&quot;);&nbsp;//&nbsp;过滤script标签&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pattern&nbsp;p_style&nbsp;=&nbsp;Pattern.compile(regEx_style,&nbsp;Pattern.CASE_INSENSITIVE);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matcher&nbsp;m_style&nbsp;=&nbsp;p_style.matcher(htmlStr);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;m_style.replaceAll(&quot;&quot;);&nbsp;//&nbsp;过滤style标签&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pattern&nbsp;p_html&nbsp;=&nbsp;Pattern.compile(regEx_html,&nbsp;Pattern.CASE_INSENSITIVE);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matcher&nbsp;m_html&nbsp;=&nbsp;p_html.matcher(htmlStr);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;m_html.replaceAll(&quot;&quot;);&nbsp;//&nbsp;过滤html标签&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pattern&nbsp;p_space&nbsp;=&nbsp;Pattern.compile(regEx_space,&nbsp;Pattern.CASE_INSENSITIVE);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matcher&nbsp;m_space&nbsp;=&nbsp;p_space.matcher(htmlStr);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;m_space.replaceAll(&quot;&quot;);&nbsp;//&nbsp;过滤空格回车标签&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;htmlStr.trim();&nbsp;//&nbsp;返回文本字符串&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;String&nbsp;getTextFromHtml(String&nbsp;htmlStr){&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;delHTMLTag(htmlStr);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;htmlStr.replaceAll(&quot;&amp;nbsp;&quot;,&nbsp;&quot;&quot;);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;htmlStr&nbsp;=&nbsp;htmlStr.substring(0,&nbsp;htmlStr.indexOf(&quot;。&quot;)+1);&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;htmlStr;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String[]&nbsp;args)&nbsp;{&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String&nbsp;str&nbsp;=&nbsp;&quot;&lt;div&nbsp;style=&#39;text- align:center;&#39;&gt;&nbsp;整治&ldquo;四风&rdquo;&nbsp;&nbsp;&nbsp;清弊除垢&lt;br/&gt;&lt;span&nbsp;style=&#39;font- size:14px;&#39;&gt;&nbsp;&lt;/span&gt;&lt;span&nbsp;style=&#39;font-size:18px;&#39;&gt;公司召开党的群 众路线教育实践活动动员大会&lt;/span&gt;&lt;br/&gt;&lt;/div&gt;&quot;;&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(getTextFromHtml(str));&nbsp;&nbsp;</li>\r\n	<li>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;</li>\r\n	<li>}&nbsp;&nbsp;</li>\r\n</ol>\r\n', 'fd28ce2f820c242bb274dda997ee8596', '0');
INSERT INTO `t_kno` VALUES ('5', 'KNO2015091100005', 'android 快速去掉HTML标签 ', 'test', 'andriod  标签', 'Java开发  系统测试  ', '2015-09-11 21:45:20', null, '3', '<p>在平时的开发过程中，有时候我们从网络获取到的数据可能包含有一些html 标签 ,我们用TextView来显示的时候，我们可以通过Html来将html直接转化成 Spanned来显示。</p>\r\n\r\n<p>如：</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<ol>\r\n	<li>textView.setText(Html.fromHtml(content.getTitle()));</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>但是也有时候，我们不想显示出html里面的标签 ，比如说等等 。（也就是显示出来的时候，去掉里面的连接，没有上图中的绿色字体）。<strong>又该如何办呢？</strong><br />\r\n<br />\r\n一般的思路，我们可以是找到html中的标签，比如</p>\r\n\r\n<p>等等 ，然后去掉里面的标签就行了。但是往往许多人觉得这样非常的麻烦。</p>\r\n\r\n<p>在这里我给大家介绍一种更加便捷的方法：</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>代码如下：</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n\r\n<ol>\r\n	<li>textView.setText(Html.fromHtml(content.getTitle()).toString());</li>\r\n</ol>\r\n', '96465d983eb7d853057ada2de688a9cc', '1');
INSERT INTO `t_kno` VALUES ('18', 'KNO2015091200010', 'php文件删除实现方法', 'test', 'php 文件删除', 'PHP开发  ', '2015-09-12 21:44:02', null, '3', '<p>unlink() 函数删除文件。<br />\r\n若成功，则返回 true，失败则返回 false。<br />\r\n语法<br />\r\nunlink(filename,context)<br />\r\n参数 描述<br />\r\nfilename 必需。规定要删除的文件。<br />\r\ncontext 可选。规定文件句柄的环境。Context 是可修改流的行为的一套选项。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&lt;?php教程<br />\r\n&nbsp;&nbsp; $file_delete = &quot;home/meeta/my.php&quot;;<br />\r\n&nbsp;&nbsp;<br />\r\n&nbsp;&nbsp; if (unlink($file_delete)) {<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;The file was deleted successfully.&quot;, &quot;n&quot;;<br />\r\n&nbsp;&nbsp; } else {<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo &quot;The specified file could not be deleted. Please try again.&quot;, &quot;n&quot;;<br />\r\n&nbsp;&nbsp; }<br />\r\n?&gt;下面加了判断文件是否存在</p>\r\n\r\n<p>&lt;?php<br />\r\n&nbsp; $myfile = &quot;./test1.txt&quot;;<br />\r\n&nbsp; if (file_exists($myfile)) {<br />\r\n&nbsp;&nbsp;&nbsp; $result=unlink ($myfile);<br />\r\n&nbsp;&nbsp;&nbsp; echo $result;<br />\r\n&nbsp; }<br />\r\n&nbsp; ?&gt;<br />\r\nfile_exists() 函数检查文件或目录是否存在。<br />\r\n如果指定的文件或目录存在则返回 true，否则返回 false。<br />\r\n语法<br />\r\nfile_exists(path)</p>\r\n', '7b4a9b3127be47c33cdbdabd4cf1b67a', '0');
INSERT INTO `t_kno` VALUES ('29', 'KNO2015091300001', 'php文件及文件夹操作（创建、删除、移动、复制）', 'test', 'php 文件操作', 'PHP开发  C#开发  ', '2015-09-13 18:25:51', null, '3', '<p><!--?php</p--></p>\r\n\r\n<p>/**<br />\r\n&nbsp;* 操纵文件类<br />\r\n&nbsp;*&nbsp;<br />\r\n&nbsp;* 例子：<br />\r\n&nbsp;* FileUtil::createDir(&#39;a/1/2/3&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试建立文件夹 建一个a/1/2/3文件夹<br />\r\n&nbsp;* FileUtil::createFile(&#39;b/1/2/3&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试建立文件 &nbsp; &nbsp; &nbsp; &nbsp;在b/1/2/文件夹下面建一个3文件<br />\r\n&nbsp;* FileUtil::createFile(&#39;b/1/2/3.exe&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 测试建立文件 &nbsp; &nbsp; &nbsp; &nbsp;在b/1/2/文件夹下面建一个3.exe文件<br />\r\n&nbsp;* FileUtil::copyDir(&#39;b&#39;,&#39;d/e&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试复制文件夹 建立一个d/e文件夹，把b文件夹下的内容复制进去<br />\r\n&nbsp;* FileUtil::copyFile(&#39;b/1/2/3.exe&#39;,&#39;b/b/3.exe&#39;); 测试复制文件 &nbsp; &nbsp; &nbsp; &nbsp;建立一个b/b文件夹，并把b/1/2文件夹中的3.exe文件复制进去<br />\r\n&nbsp;* FileUtil::moveDir(&#39;a/&#39;,&#39;b/c&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试移动文件夹 建立一个b/c文件夹,并把a文件夹下的内容移动进去，并删除a文件夹<br />\r\n&nbsp;* FileUtil::moveFile(&#39;b/1/2/3.exe&#39;,&#39;b/d/3.exe&#39;); 测试移动文件 &nbsp; &nbsp; &nbsp; &nbsp;建立一个b/d文件夹，并把b/1/2中的3.exe移动进去 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br />\r\n&nbsp;* FileUtil::unlinkFile(&#39;b/d/3.exe&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 测试删除文件 &nbsp; &nbsp; &nbsp; &nbsp;删除b/d/3.exe文件<br />\r\n&nbsp;* FileUtil::unlinkDir(&#39;d&#39;); &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;测试删除文件夹 删除d文件夹<br />\r\n&nbsp;*/<br />\r\nclass FileUtil {</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 建立文件夹<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @return viod<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function createDir($aimUrl) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimUrl = str_replace(&#39;&#39;, &#39;/&#39;, $aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = &#39;&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $arr = explode(&#39;/&#39;, $aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $result = true;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; foreach ($arr as $str) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $aimDir .= $str . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (!file_exists($aimDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $result = mkdir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return $result;<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 建立文件<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimUrl&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;* @param boolean $overWrite 该参数控制是否覆盖原文件<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function createFile($aimUrl, $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (file_exists($aimUrl) &amp;&amp; $overWrite == false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; } elseif (file_exists($aimUrl) &amp;&amp; $overWrite == true) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: unlinkFile($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = dirname($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: createDir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; touch($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return true;<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 移动文件夹<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $oldDir<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimDir<br />\r\n&nbsp; &nbsp; &nbsp;* @param boolean $overWrite 该参数控制是否覆盖原文件<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function moveDir($oldDir, $aimDir, $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = str_replace(&#39;&#39;, &#39;/&#39;, $aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = substr($aimDir, -1) == &#39;/&#39; ? $aimDir : $aimDir . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $oldDir = str_replace(&#39;&#39;, &#39;/&#39;, $oldDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $oldDir = substr($oldDir, -1) == &#39;/&#39; ? $oldDir : $oldDir . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($oldDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!file_exists($aimDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: createDir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; @ $dirHandle = opendir($oldDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!$dirHandle) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; while (false !== ($file = readdir($dirHandle))) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ($file == &#39;.&#39; || $file == &#39;..&#39;) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($oldDir . $file)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: moveFile($oldDir . $file, $aimDir . $file, $overWrite);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: moveDir($oldDir . $file, $aimDir . $file, $overWrite);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; closedir($dirHandle);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return rmdir($oldDir);<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 移动文件<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $fileUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @param boolean $overWrite 该参数控制是否覆盖原文件<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function moveFile($fileUrl, $aimUrl, $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!file_exists($fileUrl)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (file_exists($aimUrl) &amp;&amp; $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; } elseif (file_exists($aimUrl) &amp;&amp; $overWrite = true) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: unlinkFile($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = dirname($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: createDir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; rename($fileUrl, $aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return true;<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 删除文件夹<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimDir<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function unlinkDir($aimDir) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = str_replace(&#39;&#39;, &#39;/&#39;, $aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = substr($aimDir, -1) == &#39;/&#39; ? $aimDir : $aimDir . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($aimDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $dirHandle = opendir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; while (false !== ($file = readdir($dirHandle))) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ($file == &#39;.&#39; || $file == &#39;..&#39;) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($aimDir . $file)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: unlinkFile($aimDir . $file);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: unlinkDir($aimDir . $file);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; closedir($dirHandle);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return rmdir($aimDir);<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 删除文件<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function unlinkFile($aimUrl) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (file_exists($aimUrl)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; unlink($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return true;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; } else {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 复制文件夹<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $oldDir<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimDir<br />\r\n&nbsp; &nbsp; &nbsp;* @param boolean $overWrite 该参数控制是否覆盖原文件<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function copyDir($oldDir, $aimDir, $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = str_replace(&#39;&#39;, &#39;/&#39;, $aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = substr($aimDir, -1) == &#39;/&#39; ? $aimDir : $aimDir . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $oldDir = str_replace(&#39;&#39;, &#39;/&#39;, $oldDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $oldDir = substr($oldDir, -1) == &#39;/&#39; ? $oldDir : $oldDir . &#39;/&#39;;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($oldDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!file_exists($aimDir)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: createDir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $dirHandle = opendir($oldDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; while (false !== ($file = readdir($dirHandle))) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if ($file == &#39;.&#39; || $file == &#39;..&#39;) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; continue;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; if (!is_dir($oldDir . $file)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: copyFile($oldDir . $file, $aimDir . $file, $overWrite);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; } else {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: copyDir($oldDir . $file, $aimDir . $file, $overWrite);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return closedir($dirHandle);<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>&nbsp; &nbsp; /**<br />\r\n&nbsp; &nbsp; &nbsp;* 复制文件<br />\r\n&nbsp; &nbsp; &nbsp;*<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $fileUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @param string $aimUrl<br />\r\n&nbsp; &nbsp; &nbsp;* @param boolean $overWrite 该参数控制是否覆盖原文件<br />\r\n&nbsp; &nbsp; &nbsp;* @return boolean<br />\r\n&nbsp; &nbsp; &nbsp;*/<br />\r\n&nbsp; &nbsp; function copyFile($fileUrl, $aimUrl, $overWrite = false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (!file_exists($fileUrl)) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; if (file_exists($aimUrl) &amp;&amp; $overWrite == false) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; return false;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; } elseif (file_exists($aimUrl) &amp;&amp; $overWrite == true) {<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: unlinkFile($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; }<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; $aimDir = dirname($aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; FileUtil :: createDir($aimDir);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; copy($fileUrl, $aimUrl);<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; return true;<br />\r\n&nbsp; &nbsp; }</p>\r\n\r\n<p>}</p>\r\n\r\n<p>?&gt;</p>\r\n', '411992360290c1806e5202889107786f', '12');
INSERT INTO `t_kno` VALUES ('30', 'KNO2015091300002', ' web项目 垃圾文件的处理方式和优化', 'test', 'web项目 文件上传', 'PHP开发  系统配置  ', '2015-09-13 18:30:33', null, '3', '<p>web&nbsp;项目很多时候会用到文件的上传，比如上传图片，上传附件；这里使用uploadfy工具异步上传，但是&nbsp;用户选好图片时&nbsp;刷新或者关闭系统&nbsp;就产 生了垃圾资源；现在提供两种方法：在项目中使用定时删除；还有就是把处理垃圾文件的方法&nbsp;独立于项目&nbsp;外，请问这两种方法的优缺点，性能有什么影响？</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>用临时目录存放暂时上传的文件，等保存资料后，移动到真正的目录中。<br />\r\n编辑的时候一样道理。<br />\r\n<br />\r\n临时目录中文件距离当前时间达到一定程度，可作为清理对象。<br />\r\n清理可以自动触发检查完成，也可以使用定期清理。ss</p>\r\n', '4523cf2a25d9fd49977b3a82e5d95268', '1');
INSERT INTO `t_kno` VALUES ('31', 'KNO2015091400001', '山东覅奇偶I我就饿哦', 'test', '水电费 水电费 乳房', 'PHP开发  系统配置  ', '2015-09-14 11:10:23', '', '2', '<p>\r\n	受到佛危机</p>\r\n<p>\r\n	受到佛I就欧文</p>\r\n<p>\r\n	苏东坡佛教哦我怕</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊</p>\r\n', '7fcddb1f94b0006984750f950c4425a0', '5');
INSERT INTO `t_kno` VALUES ('32', 'KNO2015091400002', '在PHP语言中使用JSON', 'test', 'json php 编码 解码', 'PHP开发  ', '2015-09-14 11:16:56', null, '3', '<p>目前，<a href=\"http://www.json.org/\" target=\"_blank\">JSON</a>已经成为最流行的数据交换格式之一，各大网站的API几乎都支持它。</p>\r\n\r\n<p>我写过一篇<a href=\"http://www.ruanyifeng.com/blog/2009/05/data_types_and_json.html\" target=\"_blank\">《数据类型和JSON格式》</a>，探讨它的设计思想。今天，我想总结一下PHP语言对它的支持，这是开发互联网应用程序（特别是编写API）必须了解的知识。</p>\r\n\r\n<p>从5.2版本开始，PHP原生提供<a href=\"http://www.php.net/manual/en/function.json-encode.php\" target=\"_blank\">json_encode()</a>和<a href=\"http://www.php.net/manual/en/function.json-decode.php\" target=\"_blank\">json_decode()</a>函数，前者用于编码，后者用于解码。</p>\r\n\r\n<p><strong>一、json_encode()</strong></p>\r\n\r\n<p>该函数主要用来将数组和对象，转换为json格式。先看一个数组转换的例子：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$arr = array (&#39;a&#39;=&gt;1,&#39;b&#39;=&gt;2,&#39;c&#39;=&gt;3,&#39;d&#39;=&gt;4,&#39;e&#39;=&gt;5);\r\n　　\r\n　　echo json_encode($arr);\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果为</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　{&quot;a&quot;:1,&quot;b&quot;:2,&quot;c&quot;:3,&quot;d&quot;:4,&quot;e&quot;:5}\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>再看一个对象转换的例子：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$obj-&gt;body           = &#39;another post&#39;;\r\n　　\r\n　　$obj-&gt;id             = 21;\r\n　　\r\n　　$obj-&gt;approved       = true;\r\n　　\r\n　　$obj-&gt;favorite_count = 1;\r\n　　\r\n　　$obj-&gt;status         = NULL;\r\n　　\r\n　　echo json_encode($obj);\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果为</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　{\r\n　　　　&quot;body&quot;:&quot;another post&quot;,\r\n　　\r\n　　　　&quot;id&quot;:21,\r\n　　\r\n　　　　&quot;approved&quot;:true,\r\n　　\r\n　　　　&quot;favorite_count&quot;:1,\r\n　　\r\n　　　　&quot;status&quot;:null\r\n　　} \r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>由于json只接受utf-8编码的字符，所以json_encode()的参数必须是utf-8编码，否则会得到空字符或者null。当中文使用GB2312编码，或者外文使用ISO-8859-1编码的时候，这一点要特别注意。</p>\r\n\r\n<p><strong>二、索引数组和关联数组</strong></p>\r\n\r\n<p>PHP支持两种数组，一种是只保存&quot;值&quot;（value）的索引数组（indexed array），另一种是保存&quot;名值对&quot;（name/value）的关联数组（associative array）。</p>\r\n\r\n<p>由于javascript不支持关联数组，所以json_encode()只将索引数组（indexed array）转为数组格式，而将关联数组（associative array）转为对象格式。</p>\r\n\r\n<p>比如，现在有一个索引数组</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$arr = Array(&#39;one&#39;, &#39;two&#39;, &#39;three&#39;);\r\n　　\r\n　　echo json_encode($arr);\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果为：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　[&quot;one&quot;,&quot;two&quot;,&quot;three&quot;] \r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>如果将它改为关联数组：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$arr = Array(&#39;1&#39;=&gt;&#39;one&#39;, &#39;2&#39;=&gt;&#39;two&#39;, &#39;3&#39;=&gt;&#39;three&#39;);\r\n 　　\r\n　　echo json_encode($arr);\r\n　　　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果就变了：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　{&quot;1&quot;:&quot;one&quot;,&quot;2&quot;:&quot;two&quot;,&quot;3&quot;:&quot;three&quot;} \r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>注意，数据格式从&quot;[]&quot;（数组）变成了&quot;{}&quot;（对象）。</p>\r\n\r\n<p>如果你需要将&quot;索引数组&quot;强制转化成&quot;对象&quot;，可以这样写</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　json_encode( (object)$arr );\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>或者</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　json_encode ( $arr, JSON_FORCE_OBJECT );\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p><strong>三、类（class）的转换</strong></p>\r\n\r\n<p>下面是一个PHP的类：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　class Foo {\r\n　　\r\n　　　　const     ERROR_CODE = &#39;404&#39;;\r\n　　\r\n　　　　public    $public_ex = &#39;this is public&#39;;\r\n　　\r\n　　　　private   $private_ex = &#39;this is private!&#39;;\r\n　　\r\n　　　　protected $protected_ex = &#39;this should be protected&#39;; \r\n 　　\r\n　　　　public function getErrorCode() {\r\n　　\r\n　　　　　　return self::ERROR_CODE;\r\n　　\r\n　　　　}\r\n　　\r\n　　}\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>现在，对这个类的实例进行json转换：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$foo = new Foo;\r\n　　\r\n　　$foo_json = json_encode($foo);\r\n　　\r\n　　echo $foo_json;\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>输出结果是</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　{&quot;public_ex&quot;:&quot;this is public&quot;} \r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>可以看到，除了公开变量（public），其他东西（常量、私有变量、方法等等）都遗失了。</p>\r\n\r\n<p><strong>四、json_decode()</strong></p>\r\n\r\n<p>该函数用于将json文本转换为相应的PHP数据结构。下面是一个例子：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$json = &#39;{&quot;foo&quot;: 12345}&#39;;\r\n 　　\r\n　　$obj = json_decode($json);\r\n　　\r\n　　print $obj-&gt;{&#39;foo&#39;}; // 12345\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>通常情况下，json_decode()总是返回一个PHP对象，而不是数组。比如：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$json = &#39;{&quot;a&quot;:1,&quot;b&quot;:2,&quot;c&quot;:3,&quot;d&quot;:4,&quot;e&quot;:5}&#39;;\r\n 　　\r\n　　var_dump(json_decode($json));\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果就是生成一个PHP对象：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　object(stdClass)#1 (5) {\r\n　　\r\n　　　　[&quot;a&quot;] =&gt; int(1)\r\n　　　　[&quot;b&quot;] =&gt; int(2)\r\n　　　　[&quot;c&quot;] =&gt; int(3)\r\n　　　　[&quot;d&quot;] =&gt; int(4)\r\n　　　　[&quot;e&quot;] =&gt; int(5)\r\n　　\r\n　　}\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>如果想要强制生成PHP关联数组，json_decode()需要加一个参数true：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$json = &#39;{&quot;a&quot;:1,&quot;b&quot;:2,&quot;c&quot;:3,&quot;d&quot;:4,&quot;e&quot;:5}&#39;;\r\n 　　\r\n　　var_dump(json_decode($json,true));\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>结果就生成了一个关联数组：</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　array(5) {\r\n　　\r\n　　 　　[&quot;a&quot;] =&gt; int(1)\r\n　　 　　[&quot;b&quot;] =&gt; int(2)\r\n　　 　　[&quot;c&quot;] =&gt; int(3)\r\n　　 　　[&quot;d&quot;] =&gt; int(4)\r\n　　 　　[&quot;e&quot;] =&gt; int(5)\r\n　　\r\n　　}\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p><strong>五、json_decode()的常见错误</strong></p>\r\n\r\n<p>下面三种json写法都是错的，你能看出错在哪里吗？</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　$bad_json = &quot;{ &#39;bar&#39;: &#39;baz&#39; }&quot;;\r\n　　\r\n　　$bad_json = &#39;{ bar: &quot;baz&quot; }&#39;;\r\n　　\r\n　　$bad_json = &#39;{ &quot;bar&quot;: &quot;baz&quot;, }&#39;;\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p>对这三个字符串执行json_decode()都将返回null，并且报错。</p>\r\n\r\n<p>第一个的错误是，json的分隔符（delimiter）只允许使用双引号，不能使用单引号。第二个的错误是，json名值对的&quot;名&quot;（冒号左边的部分），任何情况下都必须使用双引号。第三个的错误是，最后一个值之后不能添加逗号（trailing comma）。<br />\r\n<br />\r\n另外，json只能用来表示对象（object）和数组（array），如果对一个字符串或数值使用json_decode()，将会返回null。</p>\r\n\r\n<blockquote>\r\n<pre>\r\n<code>\r\n　　var_dump(json_decode(&quot;Hello World&quot;)); //null\r\n　　\r\n</code></pre>\r\n</blockquote>\r\n\r\n<p><strong>六、参考材料</strong></p>\r\n\r\n<blockquote>\r\n<p>　　[1] <a href=\"http://php.net/manual/en/book.json.php\" target=\"_blank\">PHP Manual</a></p>\r\n\r\n<p>　　[2] Ed Finkler, <a href=\"http://phpadvent.org/2008/json-is-everybodys-friend-by-ed-finkler\" target=\"_blank\">JSON is Everybody&#39;s Friend</a></p>\r\n</blockquote>\r\n', 'cc8491512d043d79a5b9f19908057b32', '0');
INSERT INTO `t_kno` VALUES ('33', 'KNO2015091400003', 'sfsdfdf', 'gcs1', 'sdfsd rwerew', '系统配置  CRM  ', '2015-09-14 15:36:25', '', '3', '<p>\r\n	dfgdfg 对皮肤广口瓶的丰；更健康</p>\r\n', '6fcfdd8cba926071348a365cab4a9b95', '0');
INSERT INTO `t_kno` VALUES ('34', 'KNO2015091400004', 'SQL LIKE 通配符随笔', 'test', 'SQL 模糊查询 通配符', '', '2015-09-14 19:14:30', null, '3', '<p>通配符 说明<br />\r\n_&nbsp;&nbsp;&nbsp; 与任意单字符匹配<br />\r\n&nbsp;<br />\r\n%&nbsp;&nbsp;&nbsp; 与包含一个或多个字符的字符串匹配<br />\r\n&nbsp;<br />\r\n[ ]&nbsp; 与特定范围（例如，[a-f]）或特定集（例如，[abcdef]）中的任意单字符匹配。<br />\r\n&nbsp;<br />\r\n[^]&nbsp; 与特定范围（例如，[^a-f]）或特定集（例如，[^abcdef]）之外的任意单字符匹配。<br />\r\n&nbsp;</p>\r\n\r\n<p>例子:</p>\r\n\r\n<p>&bull; WHERE FirstName LIKE &#39;_im&#39; 可以找到所有三个字母的、以 im 结尾的名字（例如，Jim、Tim）。<br />\r\n&nbsp;<br />\r\n&bull; WHERE LastName LIKE &#39;%stein&#39; 可以找到姓以 stein 结尾的所有员工。<br />\r\n&nbsp;<br />\r\n&bull; WHERE LastName LIKE &#39;%stein%&#39; 可以找到姓中任意位置包括 stein 的所有员工。<br />\r\n&nbsp;<br />\r\n&bull; WHERE FirstName LIKE &#39;[JT]im&#39; 可以找到三个字母的、以 im 结尾并以 J 或 T 开始的名字（即仅有 Jim 和 Tim）<br />\r\n&nbsp;<br />\r\n&bull; WHERE LastName LIKE &#39;m[^c]%&#39; 可以找到以 m 开始的、后面的（第二个）字母不为 c 的所有姓。</p>\r\n', '97e9a01564235c632dcfcbaa1cc3c745', '0');
INSERT INTO `t_kno` VALUES ('35', 'KNO2015091400005', 'SQL 模糊查询', 'gcs1', 'SQL 模糊查询', 'SQL插叙  ', '2015-09-14 19:55:54', null, '3', '<p><a href=\"http://www.cnblogs.com/GT_Andy/archive/2009/12/25/1921914.html\" name=\"ctl02_TitleUrl\">SQL 模糊查询</a></p>\r\n\r\n<p>在进行数据库查询时，有完整查询和模糊查询之分。<br />\r\n<br />\r\n一般模糊查询语句如下：<br />\r\n&nbsp;</p>\r\n\r\n<table border=\"0\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>SELECT 字段 FROM 表 WHERE 某字段 Like 条件</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<br />\r\n其中关于条件，SQL提供了四种匹配模式：<br />\r\n<br />\r\n<strong>1，%</strong>&nbsp;：表示任意0个或多个字符。可匹配任意类型和长度的字符，有些情况下若是中文，请使用两个百分号（%%）表示。<br />\r\n<br />\r\n比如 SELECT * FROM [user] WHERE u_name LIKE &#39;%三%&#39;<br />\r\n<br />\r\n将会把u_name为&ldquo;张三&rdquo;，&ldquo;张猫三&rdquo;、&ldquo;三脚猫&rdquo;，&ldquo;唐三藏&rdquo;等等有&ldquo;三&rdquo;的记录全找出来。<br />\r\n<br />\r\n另外，如果需要找出u_name中既有&ldquo;三&rdquo;又有&ldquo;猫&rdquo;的记录，请使用and条件<br />\r\nSELECT * FROM [user] WHERE u_name LIKE &#39;%三%&#39; AND u_name LIKE &#39;%猫%&#39;<br />\r\n<br />\r\n若使用 SELECT * FROM [user] WHERE u_name LIKE &#39;%三%猫%&#39;<br />\r\n虽然能搜索出&ldquo;三脚猫&rdquo;，但不能搜索出符合条件的&ldquo;张猫三&rdquo;。<br />\r\n<br />\r\n<strong>2，_</strong>&nbsp;： 表示任意单个字符。匹配单个任意字符，它常用来限制表达式的字符长度语句：<br />\r\n<br />\r\n比如 SELECT * FROM [user] WHERE u_name LIKE &#39;_三_&#39;<br />\r\n只找出&ldquo;唐三藏&rdquo;这样u_name为三个字且中间一个字是&ldquo;三&rdquo;的；<br />\r\n<br />\r\n再比如 SELECT * FROM [user] WHERE u_name LIKE &#39;三__&#39;;<br />\r\n只找出&ldquo;三脚猫&rdquo;这样name为三个字且第一个字是&ldquo;三&rdquo;的；<br />\r\n<br />\r\n<br />\r\n<strong>3，[ ]</strong>&nbsp;：表示括号内所列字符中的一个（类似正则表达式）。指定一个字符、字符串或范围，要求所匹配对象为它们中的任一个。<br />\r\n<br />\r\n比如 SELECT * FROM [user] WHERE u_name LIKE &#39;[张李王]三&#39;<br />\r\n将找出&ldquo;张三&rdquo;、&ldquo;李三&rdquo;、&ldquo;王三&rdquo;（而不是&ldquo;张李王三&rdquo;）；<br />\r\n<br />\r\n如 [ ] 内有一系列字符（01234、abcde之类的）则可略写为&ldquo;0-4&rdquo;、&ldquo;a-e&rdquo;<br />\r\nSELECT * FROM [user] WHERE u_name LIKE &#39;老[1-9]&#39;<br />\r\n将找出&ldquo;老1&rdquo;、&ldquo;老2&rdquo;、&hellip;&hellip;、&ldquo;老9&rdquo;；<br />\r\n<br />\r\n<strong>4，[^ ]</strong>&nbsp;：表示不在括号所列之内的单个字符。其取值和 [] 相同，但它要求所匹配对象为指定字符以外的任一个字符。<br />\r\n<br />\r\n比如 SELECT * FROM [user] WHERE u_name LIKE &#39;[^张李王]三&#39;<br />\r\n将找出不姓&ldquo;张&rdquo;、&ldquo;李&rdquo;、&ldquo;王&rdquo;的&ldquo;赵三&rdquo;、&ldquo;孙三&rdquo;等；<br />\r\n<br />\r\nSELECT * FROM [user] WHERE u_name LIKE &#39;老[^1-4]&#39;;<br />\r\n将排除&ldquo;老1&rdquo;到&ldquo;老4&rdquo;，寻找&ldquo;老5&rdquo;、&ldquo;老6&rdquo;、&hellip;&hellip;<br />\r\n<br />\r\n<strong>5，查询内容包含通配符时</strong>&nbsp;<br />\r\n<br />\r\n由于通配符的缘故，导致我们查询特殊字符&ldquo;%&rdquo;、&ldquo;_&rdquo;、&ldquo;[&rdquo;的语句无法正常实现，而把特殊字符用&ldquo;[ ]&rdquo;括起便可正常查询。据此我们写出以下函数：<br />\r\n&nbsp;</p>\r\n\r\n<table border=\"0\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><br />\r\n			function sqlencode(str)<br />\r\n			str=replace(str,&quot;[&quot;,&quot;[[]&quot;) &#39;此句一定要在最前<br />\r\n			str=replace(str,&quot;_&quot;,&quot;[_]&quot;)<br />\r\n			str=replace(str,&quot;%&quot;,&quot;[%]&quot;)<br />\r\n			sqlencode=str<br />\r\n			end function</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>在查询前将待查字符串先经该函数处理即可，并且在网页上连接数据库用到这类的查询语句时侯要注意：</p>\r\n\r\n<p>如Select * FROM user Where name LIKE &#39;老[^1-4]&#39;;上面 《&#39;》老[^1-4]《&#39;》是要有单引号的，别忘了，我经常忘！</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>access</p>\r\n\r\n<p>在近日的写Web程序时用到了Access的模糊查询,在Acces里写代码怎么也找不到记录,后来才起来原来Acess和SqlServer的模糊查询是有特别的<br />\r\n条件:查找表A 的Name字段中包括 &quot;B&quot; 的记当<br />\r\n在Access里的代码:</p>\r\n\r\n<p>1 Select * from a where name like &#39;*b*&#39;Sql Server查询分析器的代码<br />\r\nSelect * from a where name like &#39;%b%&#39;这时你会发现Access里可以找到相关的记录,但把&#39;*&#39;必成&#39;%&#39;就找不到了,原因是Access的模糊查询是&#39;?&#39;,&#39;*&#39;<br />\r\n和Sql server不一样<br />\r\n以上只是在数据库中的代码,如果要写在程序里可就不能用.&#39;*&#39;了,还是要用&#39;%&#39;<br />\r\n程序:<br />\r\nstrSql=&quot;select * from a where name like &#39;%b%&#39;&quot;所以如果有朋友和我一样喜欢先在数据库中代码测试,那可就要注意了!!</p>\r\n\r\n<p>----------------------------------------------------------------------------------------------------------</p>\r\n\r\n<p>SQL模糊查询，使用like比较关键字，加上SQL里的通配符，请参考以下：&nbsp;<br />\r\n1、LIKE&#39;Mc%&#39; 将搜索以字母 Mc 开头的所有字符串（如 McBadden）。&nbsp;<br />\r\n2、LIKE&#39;%inger&#39; 将搜索以字母 inger 结尾的所有字符串（如 Ringer、Stringer）。&nbsp;<br />\r\n3、LIKE&#39;%en%&#39; 将搜索在任何位置包含字母 en 的所有字符串（如 Bennet、Green、McBadden）。&nbsp;<br />\r\n4、LIKE&#39;_heryl&#39; 将搜索以字母 heryl 结尾的所有六个字母的名称（如 Cheryl、Sheryl）。&nbsp;<br />\r\n5、LIKE&#39;[CK]ars[eo]n&#39; 将搜索下列字符串：Carsen、Karsen、Carson 和 Karson（如 Carson）。&nbsp;<br />\r\n6、LIKE&#39;[M-Z]inger&#39; 将搜索以字符串 inger 结尾、以从 M 到 Z 的任何单个字母开头的所有名称（如 Ringer）。&nbsp;<br />\r\n7、LIKE&#39;M[^c]%&#39; 将搜索以字母 M 开头，并且第二个字母不是 c 的所有名称（如MacFeather）。&nbsp;<br />\r\n-------------------------------------------------&nbsp;<br />\r\n下 面这句查询字符串是我以前写的，根据变量 zipcode_key 在邮政编码表 zipcode 中查询对应的数据，这句是判断变量 zipcode_key 为非数字时的查询语句，用 % 来匹配任意长度的字符串，从表中地址、市、省三列中查询包含关键字的所有数据项，并按省、市、地址排序。这个例子比较简单，只要你理解了方法就可以写出更 复杂的查询语句。&nbsp;<br />\r\n<br />\r\nsql = &quot;select * f</p>\r\n', '7dcee246e3a82a0076bdcaf2601a4a9b', '0');
INSERT INTO `t_kno` VALUES ('36', 'KNO2015091700001', '还送if后送的活佛', 'gcs3', '水电费 水电费 设定', 'PHP开发    C#开发    ', '2015-09-17 20:52:47', null, '3', '<p>后I减肥拍摄东风破就苏东坡佛教</p>\r\n', '2b4925b3fb82e0c63a02857eb1e4413c', '0');
INSERT INTO `t_kno` VALUES ('37', 'KNO2015092100001', 'Smarty 学习笔记四 配置文件的读取', 'admin', 'smarty  配置文件', 'PHP开发    ', '2015-09-21 14:34:25', null, '3', '<p><strong>设置配置文件</strong><br />\r\nSmarty配置文件用于存放全局变量，例如将模版颜色存放到配置文件中，这样，当修改模版颜色时，不需逐个的去修改每个模版，而是直接修改配置文件既可。配置文件格式如下：</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n 1 # global variables\r\n 2 pageTitle = &quot;Main Menu&quot;\r\n 3 bodyBgColor = #000000\r\n 4 tableBgColor = #000000\r\n 5 rowBgColor = #00ff00\r\n 6 \r\n 7 [Customer]\r\n 8 pageTitle = &quot;Customer Info&quot;\r\n 9 \r\n10 [Login]\r\n11 pageTitle = &quot;Login&quot;\r\n12 focus = &quot;username&quot;\r\n13 Intro = &quot;&quot;&quot;This is a value that spans more\r\n14 than one line. you must enclose\r\n15  it in triple quotes.&quot;&quot;&quot;\r\n16 \r\n17 # hidden section\r\n18  [.Database]\r\n19 host=my.example.com\r\n20 db=ADDRESSBOOK\r\n21 user=php-user\r\n22 pass=foobar</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>配置文件支持注释，只需在要注释的行开始处使用#既可。<br />\r\n也可将配置文件分为多个块，在不同的模版中使用不同的配置文件块区域。块名由&quot;[]&quot;括起来，名称可以是任意不包含&quot;[&quot; 和 &quot;]&quot;的字符串。如上例中的[Customer]和[Login]。<br />\r\n上例配置文件中，前4个变量不属于任何块，读取配置文件时，它们将总被获取到，即使是读取指定块区域的配置文件。如果块区域中的变量名与全局变量名重名，并且$config_overwrite为true时，块区域变量值将会替换全局变量的值。<br />\r\n<strong>配置文件路径</strong><br />\r\n在使用配置文件之前，需要先指定配置文件所在路径，可通过下列方法实现<br />\r\n$config_dir<br />\r\n用来定义存放配置文件的路径信息，默认路径是./configs，即执行当前PHP脚本所在路径的configs文件夹下</p>\r\n\r\n<pre>\r\n1 &lt;?php\r\n2 $smarty-&gt;config_dir = &#39;lib/smarty/config&#39;;\r\n3 ?&gt;</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>setConfigDir(string|array config_dir);<br />\r\n另一种用来设定存储配置文件目录的方法</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n 1 &lt;?php\r\n 2 \r\n 3 // set a single directory where the config files are stored\r\n 4 $smarty-&gt;setConfigDir(&#39;./config&#39;);\r\n 5 \r\n 6 // view the config dir chain\r\n 7 var_dump($smarty-&gt;getConfigDir());\r\n 8 \r\n 9 // set multiple director&iacute;es where config files are stored\r\n10 $smarty-&gt;setConfigDir(array(\r\n11 &#39;one&#39; =&gt; &#39;./config&#39;,\r\n12 &#39;two&#39; =&gt; &#39;./config_2&#39;,\r\n13 &#39;three&#39; =&gt; &#39;./config_3&#39;,\r\n14 ));\r\n15 \r\n16 // view the config dir chain\r\n17 var_dump($smarty-&gt;getConfigDir());\r\n18 \r\n19 // chaining of method calls\r\n20 $smarty-&gt;setTemplateDir(&#39;./templates&#39;)\r\n21 -&gt;setConfigDir(&#39;./config&#39;)\r\n22 -&gt;setCompileDir(&#39;./templates_c&#39;)\r\n23 -&gt;setCacheDir(&#39;./cache&#39;);\r\n24 \r\n25 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>addConfigDir(string|array config_dir, string key);<br />\r\n用来增加一个存储配置文件的目录</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n 1 &lt;?php\r\n 2  \r\n 3 // add directory where config files are stored\r\n 4 $smarty-&gt;addConigDir(&#39;./config_1&#39;);\r\n 5 \r\n 6 // add directory where config files are stored and specify array-key\r\n 7 $smarty-&gt;addConfigDir(&#39;./config_1&#39;, &#39;one&#39;);\r\n 8 \r\n 9 // add multiple directories where config files are stored and specify array-keys\r\n10 $smarty-&gt;addTemplateDir(array(\r\n11 &#39;two&#39; =&gt; &#39;./config_2&#39;,\r\n12 &#39;three&#39; =&gt; &#39;./config_3&#39;,\r\n13 ));\r\n14 \r\n15 // view the template dir chain\r\n16 var_dump($smarty-&gt;getConfigDir());\r\n17 \r\n18 // chaining of method calls\r\n19 $smarty-&gt;setConfigDir(&#39;./config&#39;)\r\n20 -&gt;addConfigDir(&#39;./config_1&#39;, &#39;one&#39;)\r\n21 -&gt;addConfigDir(&#39;./config_2&#39;, &#39;two&#39;);\r\n22 \r\n23 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>getConfigDir()<br />\r\n获取配置文件的路径信息</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n 1 &lt;?php\r\n 2 \r\n 3 // set some config directories\r\n 4 $smarty-&gt;setConfigDir(array(\r\n 5     &#39;one&#39; =&gt; &#39;./config&#39;,\r\n 6     &#39;two&#39; =&gt; &#39;./config_2&#39;,\r\n 7     &#39;three&#39; =&gt; &#39;./config_3&#39;,\r\n 8 ));\r\n 9 \r\n10 // get all directories where config files are stored\r\n11 $config_dir = $smarty-&gt;getConfigDir();\r\n12 var_dump($config_dir); // array\r\n13 \r\n14 // get directory identified by key\r\n15 $config_dir = $smarty-&gt;getConfigDir(&#39;one&#39;);\r\n16 var_dump($config_dir); // string\r\n17 \r\n18 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>读取配置文件：</strong></p>\r\n\r\n<ul>\r\n	<li>使用内置标签&nbsp;{config_load}</li>\r\n</ul>\r\n\r\n<p>　　在模版中调用该标签，并指定该标签的file属性，既可获取配置文件。file属性接收要读取配置文件的路径和名称，如：example.conf。<br />\r\n　　可选参数section，为要获取的配置文件中的指定块区域。<br />\r\n　　可选参数scope，其值只能为&quot;local&quot;、&quot;parent&quot;和&quot;global&quot;，默认值&quot;local&quot;，表示只能在当前模版中使用获取到配置文件值；parent：可在当前模版与调用当前模版的父模版中使用；global：所有模版中都可以使用。</p>\r\n\r\n<pre>\r\n1 {config_load file=&#39;example.conf&#39; section=&#39;Customer&#39;}</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>使用Smarty内置方法&nbsp;void configLoad(string file, string section);</li>\r\n</ul>\r\n\r\n<p>　　该方法将会自动读取配置文件内容并发送到模版中，并且scope属性总是global。</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n1 &lt;?php\r\n2 // 读取并分配my.conf配置文件\r\n3 $smarty-&gt;configLoad(&#39;my.conf&#39;);\r\n4  \r\n5 // 读取配置文件中的指定块区域\r\n6 $smarty-&gt;configLoad(&#39;my.conf&#39;, &#39;foobar&#39;);\r\n7 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>获取配置文件中的变量：</strong><br />\r\n成功读取配置文件后，就可获取配置文件中的变量信息，在模版中获取配置文件变量的方法是将变量名用&quot;#&quot;括起来,或者使用smarty变量$smarty.config。</p>\r\n\r\n<pre>\r\n1 {*使用#*}\r\n2 &lt;body bgcolor=&quot;{#bodyBgColor#}&quot;&gt;\r\n3 {*使用$smarty.config*}\r\n4 &lt;body bgcolor=&quot;{$smarty.config.bodyBgColor}&quot;&gt;</pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>在PHP文件中，可以通过getConfigVars(sting varname)方法获取配置文件变量。<br />\r\n如果未指定varname变量，则将所有的变量通过数组的形式返回</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n1 &lt;?php\r\n2 \r\n3 // 获取foo变量值\r\n4 $myVar = $smarty-&gt;getConfigVars(&#39;foo&#39;);\r\n5 \r\n6 // 获取所有变量值\r\n7 $all_config_vars = $smarty-&gt;getConfigVars();\r\n8 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>其它常用配置文件相关方法及变量</strong><br />\r\nvoid clearConfig(string var);<br />\r\n用于清除给定的var变量，若为指定该变量，则清除所有变量。</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n1 &lt;?php\r\n2 // 清除所有分配的配置文件变量\r\n3 $smarty-&gt;clearConfig();\r\n4 \r\n5 // 清除foobar变量\r\n6 $smarty-&gt;clearConfig(&#39;foobar&#39;);\r\n7 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>$default_config_handler_func<br />\r\n可将自定义方法名赋值给该变量，当无法获取配置文件时，就会触发自定义方法。</p>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<pre>\r\n 1 &lt;?php\r\n 2 \r\n 3 $smarty = new Smarty();\r\n 4 $smarty-&gt;default_config_handler_func = &#39;my_default_config_handler_func&#39;;\r\n 5 \r\n 6 /**\r\n 7 * Default Config Handler\r\n 8 *\r\n 9 * called when Smarty&#39;s file: resource is unable to load a requested file\r\n10 * \r\n11 * @param string $type resource type (e.g. &quot;file&quot;, &quot;string&quot;, &quot;eval&quot;, &quot;resource&quot;)\r\n12 * @param string $name resource name (e.g. &quot;foo/bar.tpl&quot;)\r\n13 * @param string &amp;$content config&#39;s content\r\n14 * @param integer &amp;$modified config&#39;s modification time\r\n15 * @param Smarty $smarty Smarty instance\r\n16 * @return string|boolean path to file or boolean true if $content and $modified \r\n17 * have been filled, boolean false if no default config \r\n18 * could be loaded\r\n19 */\r\n20 function my_default_config_handler_func($type, $name, &amp;$content, &amp;$modified, Smarty $smarty) {\r\n21 if (false) {\r\n22  // return corrected filepath\r\n23 return &quot;/tmp/some/foobar.tpl&quot;;\r\n24 } elseif (false) {\r\n25 // return a config directly\r\n26 $content = &#39;someVar = &quot;the config source&quot;&#39;;\r\n27 $modified = time();\r\n28 return true;\r\n29 } else {\r\n30 // tell smarty that we failed\r\n31 return false;\r\n32 }\r\n33 }\r\n34 \r\n35 ?&gt;</pre>\r\n\r\n<p><a href=\"javascript:void(0);\" onclick=\"copyCnblogsCode(this)\" title=\"复制代码\"><img alt=\"复制代码\" src=\"http://common.cnblogs.com/images/copycode.gif\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>$config_overwrite<br />\r\n如果该值为ture，若读取的配置文件变量中存在同名变量，后出现的变量值将会覆盖前面的同名变量值，默认为true。<br />\r\n如果设置为false，将不会覆盖任何只，而是将同名变量保存到数组中返回。</p>\r\n\r\n<p>string compileAllConfig(string extension, boolean force, integer timelimit, integer maxerror);<br />\r\n该方法用于编译在$config_dir目录中获取到的所有配置文件</p>\r\n\r\n<ul>\r\n	<li>extension 可选参数，用于定义配置文件的后缀名，默认是&quot;.conf&quot;</li>\r\n	<li>force 可选参数，如果该值为false，则只有自上次编译后修改过的配置文件才会从新编译；如果为ture，则所有文件都会被编译</li>\r\n	<li>timelimit 可选参数，用于限制编译过程所需要的时间，以秒为单位的整数值</li>\r\n	<li>maxerror 可选参数，用于设定当超过多少个配置文件编译失败时，停止编译过程</li>\r\n</ul>\r\n\r\n<p>$config_booleanize<br />\r\n如果将该变量设定为true(默认)，配置文件中属性值为on/true/yes和off/false/no的值，将会被自动转换成bool值true和false。<br />\r\n$config_read_hidden<br />\r\n如果将该变量设定为true，则能够读取配置文件中的隐藏域。隐藏域是点一个&quot;.&quot;开头，如上面的[.Database]，该值默认为false。</p>\r\n', '5d98d0aa1f54697edae3863f2d7bc082', '2');
INSERT INTO `t_kno` VALUES ('38', 'KNO2015092100002', '是东方红', 'admin', '水电费 水电费 功夫', 'Java开发    PHP开发    综合监控系统    ', '2015-09-21 21:32:56', null, '3', '<p>皇甫嵩；还是；电咖啡壶速度快疯了和维护是东方红为本身的卡佛好送大佛</p>\r\n\r\n<p>是东方红水电费客户额哦送；符合违反了还能送；对方可是来到合肥</p>\r\n', '7df19c4cd98518ff1c560be0427b6887', '4');
INSERT INTO `t_kno` VALUES ('39', 'KNO2015092300001', '收费；后哦送；地方', 'admin', '水电费 水电费 水电费', '系统安装    系统配置    ', '2015-09-23 16:18:39', null, '3', '<p>时代发生地方</p>\r\n', 'f07a4b386cb4422f03baf8195a278431', '1');
INSERT INTO `t_kno` VALUES ('40', 'KNO2015092300002', 'php利用smtp类轻松的发送电子邮件', 'gcs1', 'php 邮箱', 'PHP开发    ', '2015-09-23 21:08:54', null, '3', '<p>当你还在纠结php内置的mail()函数不能发送邮件时，那么你现在很幸运，此时的这篇文章可以帮助到你！</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>php利用smtp类来发邮件真是屡试不爽，我用过很久了，基本上没出过问题。本博客后台，当博主回复留言时候，会自动给网友发一封有新回复提示的邮件也是用的本文这个方法实现的。</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>smtp类发送邮件的方法其实很简单，也很稳定，类是别人已经写好的了，你只需要调用就行了。几行简单的配置就能发邮件，是不是很期待的试一试呢！</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>以下就是核心代码：</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&lt;?php</p>\r\n\r\n<p>require_once &quot;email.class.php&quot;;</p>\r\n\r\n<p>//******************** 配置信息 ********************************</p>\r\n\r\n<p>$smtpserver = &quot;smtp.126.com&quot;;//SMTP服务器</p>\r\n\r\n<p>$smtpserverport =25;//SMTP服务器端口</p>\r\n\r\n<p>$smtpusermail = &quot;new2008oh@126.com&quot;;//SMTP服务器的用户邮箱</p>\r\n\r\n<p>$smtpemailto = $_POST[&#39;toemail&#39;];//发送给谁</p>\r\n\r\n<p>$smtpuser = &quot;new2008oh&quot;;//SMTP服务器的用户帐号</p>\r\n\r\n<p>$smtppass = &quot;您的邮箱密码&quot;;//SMTP服务器的用户密码</p>\r\n\r\n<p>$mailtitle = $_POST[&#39;title&#39;];//邮件主题</p>\r\n\r\n<p>$mailcontent = &quot;&lt;h1&gt;&quot;.$_POST[&#39;content&#39;].&quot;&lt;/h1&gt;&quot;;//邮件内容</p>\r\n\r\n<p>$mailtype = &quot;HTML&quot;;//邮件格式（HTML/TXT）,TXT为文本邮件</p>\r\n\r\n<p>//************************ 配置信息 ****************************</p>\r\n\r\n<p>$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.</p>\r\n\r\n<p>$smtp-&gt;debug = false;//是否显示发送的调试信息</p>\r\n\r\n<p>$state = $smtp-&gt;sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>echo &quot;&lt;div style=&#39;width:300px; margin:36px auto;&#39;&gt;&quot;;</p>\r\n\r\n<p>if($state==&quot;&quot;){</p>\r\n\r\n<p>echo &quot;对不起，邮件发送失败！请检查邮箱填写是否有误。&quot;;</p>\r\n\r\n<p>echo &quot;&lt;a href=&#39;index.html&#39;&gt;点此返回&lt;/a&gt;&quot;;</p>\r\n\r\n<p>exit();</p>\r\n\r\n<p>}</p>\r\n\r\n<p>echo &quot;恭喜！邮件发送成功！！&quot;;</p>\r\n\r\n<p>echo &quot;&lt;a href=&#39;index.html&#39;&gt;点此返回&lt;/a&gt;&quot;;</p>\r\n\r\n<p>echo &quot;&lt;/div&gt;&quot;;</p>\r\n\r\n<p>?&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>完整范例下载：</strong><img src=\"http://www.daixiaorui.com/Public/uploads/20130731/2741375200029.gif\" /><a href=\"http://www.daixiaorui.com/Public/uploads/20130730/13751999009017.zip\">phpmail技术.zip</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>效果截图欣赏：</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://www.daixiaorui.com/Public/uploads/20130731/97001375200029.jpg\" title=\"2013-07-30_231208.jpg\" /></p>\r\n\r\n<p>填写收件人，标题和内容后提交</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://www.daixiaorui.com/Public/uploads/20130731/25321375200029.jpg\" style=\"height:95px; width:350px\" title=\"QQ截图20130730231318.jpg\" /></p>\r\n\r\n<p>返回成功的提示</p>\r\n\r\n<p><img src=\"http://www.daixiaorui.com/Public/uploads/20130731/73501375200029.jpg\" title=\"QQ截图20130730231257.jpg\" /></p>\r\n\r\n<p>瞬间便接收到了邮件</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>本博客所有案例都经过本人亲自测试，方法也绝对简单易懂，希望大家多多支持，有问题可以与我交流！</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>33楼<strong>崑崙</strong>&nbsp;:&nbsp;2015-09-22 15:33:27&nbsp;评论说：&nbsp;@回复\r\n\r\n	<p>感谢博主，希望能帮到更多的人</p>\r\n	</li>\r\n	<li><a name=\"floor388\"></a>32楼<strong>崑崙</strong>&nbsp;:&nbsp;2015-09-22 15:32:33&nbsp;评论说：&nbsp;@回复\r\n	<p>拿来用QQ的SMTP，端口用25 $smtpserver填smtp.qq.com $smtpusermail这里填你的QQ邮箱，要带@qq.com $smtpuser填你的QQ $smtppass填你开通QQ邮箱时候需要设置的独立密码 也没有改函数，直接就发送成功了</p>\r\n	</li>\r\n	<li><a name=\"floor385\"></a>31楼<strong>Evan</strong>&nbsp;:&nbsp;2015-09-17 20:42:50&nbsp;评论说：&nbsp;@回复\r\n	<p>密码应为 客户端授权码，并不是邮箱的登录密码</p>\r\n	</li>\r\n	<li><a name=\"floor381\"></a>30楼<strong>梧桐</strong>&nbsp;:&nbsp;2015-09-16 16:56:34&nbsp;评论说：&nbsp;@回复\r\n	<p>账户和密码没有错，调试信息如下： 535 Error: authentication failed Error: Remote host returned &quot;535 Error: authentication failed&quot; Error: Error occurred while sending HELO command. 求指教！大神</p>\r\n	<img alt=\"回复留言标识\" src=\"http://www.daixiaorui.com/Public/images/quote_bg.png\" />&nbsp;<strong>梧桐</strong>&nbsp;回复 梧桐: 大神，我终于解决了这个问题，其实帐号密码都没有问题，是我这两天开通了163客户端授权密码，但是再网页上面可以用登录密码登录，在这个代码里面 $smtppass = &quot;您的邮箱密码&quot;;//SMTP服务器的用户密码 必须要用到开通的客户端授权密码才可以.......虽然我也不明白原理.....就说我只前还可以发送邮件来着 写出来大家可以借鉴，楼主的代码完全没有问题的！\r\n\r\n	<p>2015-09-17 10:49:06&nbsp;&nbsp;@回复</p>\r\n	</li>\r\n	<li><a name=\"floor374\"></a>29楼<strong>赖卓成</strong>&nbsp;:&nbsp;2015-09-02 22:22:12&nbsp;评论说：&nbsp;@回复\r\n	<p>失败了一晚上啊。到底怎么弄 一直提示Trying to smtp.qq.com:25 Error: Cannot connenct to relay host smtp.qq.com Error: () Error: Cannot send email to 911823616@qq.com 对不起，邮件发送失败！请检查邮箱填写是否有误。点此返回</p>\r\n	<img alt=\"回复留言标识\" src=\"http://www.daixiaorui.com/Public/images/quote_bg.png\" />&nbsp;<strong>Dai</strong>&nbsp;回复 赖卓成: 检查一下你邮件设置有没有开启smtp，详细设置登陆你邮箱后台查看。\r\n\r\n	<p>2015-09-02 23:04:30&nbsp;&nbsp;@回复</p>\r\n\r\n	<p><img alt=\"回复留言标识\" src=\"http://www.daixiaorui.com/Public/images/quote_bg.png\" />&nbsp;<strong>方法</strong>&nbsp;回复 赖卓成: 你解决了么？</p>\r\n	</li>\r\n</ol>\r\n', 'fb0e58ec6f1d0877840eabffe15bf0bd', '8');
INSERT INTO `t_kno` VALUES ('41', 'KNO2015101000001', '数据库恢复了', 'admin', '的风格  的风格', 'PHP开发    系统配置    ', '2015-10-10 19:20:27', '', '3', '<p>大范甘迪个地方的风格</p>\r\n', '26ae305e277aaeb04efe7717d264b029', '1');
INSERT INTO `t_kno` VALUES ('44', 'KNO2015101400001', '是否', 'admin', '时代发生地方', 'PHP开发    系统配置    ', '2015-10-14 19:26:24', '', '2', '<p>\r\n	时代发生地方</p>\r\n', 'cae02cd02336b1a8bcfe7053001c4399', '0');
INSERT INTO `t_kno` VALUES ('45', 'KNO2015101400002', '今后释迦佛', 'gcs3', '是否 水电费 水电费', '自动化测试    集成测试    ', '2015-10-14 19:58:40', 'REQ15092500002', '1', '<p>\r\n	水电费时代发生地方蓝色房间</p>\r\n<p>\r\n	是；打飞机；适当放宽朋克IU会死哦服违法乱纪山东</p>\r\n', 'c643e9398c0790fd8ba089807a255b4c', '0');

-- ----------------------------
-- Table structure for `t_kno_change`
-- ----------------------------
DROP TABLE IF EXISTS `t_kno_change`;
CREATE TABLE `t_kno_change` (
  `id` int(11) NOT NULL auto_increment,
  `kno_num` varchar(16) NOT NULL,
  `kno_change` tinytext,
  `kno_change_time` datetime NOT NULL,
  `kno_change_author` varchar(64) default NULL,
  PRIMARY KEY  (`id`),
  KEY `kno_num` (`kno_num`),
  KEY `kno_change_author` (`kno_change_author`),
  CONSTRAINT `t_kno_change_ibfk_1` FOREIGN KEY (`kno_num`) REFERENCES `t_kno` (`kno_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_kno_change_ibfk_2` FOREIGN KEY (`kno_change_author`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='知识修改变更的说明信息';

-- ----------------------------
-- Records of t_kno_change
-- ----------------------------
INSERT INTO `t_kno_change` VALUES ('3', 'KNO2015091300001', '变更测试', '2015-09-13 19:23:25', 'test');
INSERT INTO `t_kno_change` VALUES ('4', 'KNO2015091300002', '添加一个附件10.wmv', '2015-09-13 19:34:02', 'test');
INSERT INTO `t_kno_change` VALUES ('5', 'KNO2015091300002', '关联一个请求', '2015-09-13 19:36:04', 'test');
INSERT INTO `t_kno_change` VALUES ('6', 'KNO2015091100002', 'ihfdogheirogh', '2015-09-13 19:46:11', 'test');
INSERT INTO `t_kno_change` VALUES ('7', 'KNO2015091400001', '添加附件', '2015-09-14 14:41:26', 'test');
INSERT INTO `t_kno_change` VALUES ('8', 'KNO2015091400001', '编辑测试', '2015-09-14 14:42:20', 'test');
INSERT INTO `t_kno_change` VALUES ('9', 'KNO2015091300002', '变更关联请求编号\r\n', '2015-09-14 14:48:01', 'test');
INSERT INTO `t_kno_change` VALUES ('10', 'KNO2015092100002', '谁的风格', '2015-09-22 11:03:23', 'admin');
INSERT INTO `t_kno_change` VALUES ('11', 'KNO2015091700001', '客户是地方为；后受到法律考试的发挥送大佛', '2015-09-22 20:16:44', 'admin');
INSERT INTO `t_kno_change` VALUES ('13', 'KNO2015091400003', '', '2015-10-14 19:09:59', 'admin');
INSERT INTO `t_kno_change` VALUES ('14', 'KNO2015091400003', '给大哥大哥的风格的风格', '2015-10-14 19:11:04', 'admin');
INSERT INTO `t_kno_change` VALUES ('15', 'KNO2015091400001', '的风格的风格', '2015-10-14 19:24:40', 'admin');
INSERT INTO `t_kno_change` VALUES ('16', 'KNO2015101400001', '离开涉及到法律', '2015-10-14 19:29:15', 'admin');

-- ----------------------------
-- Table structure for `t_news`
-- ----------------------------
DROP TABLE IF EXISTS `t_news`;
CREATE TABLE `t_news` (
  `news_id` int(11) NOT NULL auto_increment,
  `news_title` varchar(256) default NULL,
  `attach_id` varchar(64) default NULL,
  `news_time` datetime default NULL,
  `news_read` int(11) default '0',
  `news_content` text,
  `news_author` varchar(54) default NULL,
  PRIMARY KEY  (`news_id`),
  KEY `news_author` (`news_author`),
  CONSTRAINT `t_news_ibfk_1` FOREIGN KEY (`news_author`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='公告通知';

-- ----------------------------
-- Records of t_news
-- ----------------------------
INSERT INTO `t_news` VALUES ('1', '是老客户佛酸辣粉', 'ea328c7411c521f841cded32454f5381', '2015-09-23 10:15:44', '0', '<p>水电费了好久哦；水电费；了还问哦速度快发货哦；是否；垃圾受到佛啤酒喝我看了好送大佛</p>\r\n\r\n<p>收到付款了好送大佛可我还弄受到佛为塞德里克佛好未分类后是东方红；后；的佛光；后收到两份；后；是否会博；文化佛；还不是地方</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('2', '看是东方红好送大佛；后是否', '38311472969408684a0ba0364c1ab4ed', '2015-09-23 10:18:19', '0', '<p>时代发生的是的方式的方式的考虑好分；塑料袋佛为疯狂乐山大佛圣诞快乐发货</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('4', '是否会颗粒物后说的话老师电话费', '9f0fb60eae1105951804b82f756cc689', '2015-09-23 10:42:30', '0', '<p>偶是法律文化深刻的番红花适当放宽背景红色地方了是多方考虑后收到两份后老师的发货s</p>\r\n\r\n<p>收到了哈收到两份后浪费我了好送的活佛受到佛是大佛额我理解哈佛速度偶发路上的风景了数量；打飞机盘；</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('6', '是快乐的话佛；；山东飞机；垃圾受到了房间了后可我不hi好双方的', '14f1f9d2a48f0c8da1c7b1174ca0cad7', '2015-09-23 11:00:09', '0', '<p>时代发生地方落花流水；附件塑料袋；附件算了的风景算了的风景数量；打飞机数量；打飞机</p>\r\n\r\n<p>受到了房间了为人口不死的发货；为；法律和历史佛还发生了的看法红问号了送的活佛</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('7', '东方更好；哦；山东；粉红是东方红善良的佛', '5939dc651aed32b98091609b6a833eb7', '2015-09-23 12:22:48', '0', '<p>斯蒂芬森平均水平的发票</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('8', '客是否合理hi就山东覅机会都市风流', '06d96e335ad74c73c07867c1ea116232', '2015-09-23 12:23:04', '0', '<p>谁的风格客人了空间的歌盘</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('9', '搜狐佛善良的佛后了我看会蓝色的丰', '13857a76ddce22d5c889b9eb3bb6f86a', '2015-09-23 12:25:03', '0', '<p>了his佛水电费厉害二楼算了分红路上的风景了水电费哦哦我怕收到发票hi哦啥地方了水电费</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('10', 's的方式地方地方个地方发生的佛', 'e63b26a9f9dc65a05ecce1dbcf27103b', '2015-09-23 12:25:18', '0', '<p>时代发生的快喝完后送的活佛看受到佛后收到付款了为防洪法哦塞德里克佛好收到付款好了是的好了火车时刻的话</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('11', '的风格的风格的风格的风格', '37d8715de773640ebf8b27a8efd04586', '2015-09-23 12:25:28', '1', '<p>不珍惜传播送的活佛是法律的</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('12', '山东时代发生的', 'e7f8fdd3a407f519a30fb33fc025ab15', '2015-09-23 12:29:41', '0', '<p>水电费</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('13', '山东受到佛I好地方V很快乐到付款行', 'ac213a47494efdaba80697e18121526f', '2015-09-23 12:29:52', '0', '<p>风格的歌发生的发生的</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('14', '山东时代发生地方的', '1bfc25b214422419b37492ae11a8cf24', '2015-09-23 12:30:00', '0', '<p>似懂非懂水电费的</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('15', '发个地方个地方', 'a71e1a617a22fdb4cdd3db4e8dc7f6d4', '2015-10-12 21:10:47', '4', '<p>\r\n	<img alt=\"\" src=\"/itildemo/plugins/ckfinder/userfiles/images/20151012130918.jpg\" style=\"width: 200px; height: 333px;\" /></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	哦圣诞节哦放假哦就算了的风景了f</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	受到法律囧哦就收到了；评价为漂亮；金佛Ius的风景老师放假了就哦苏菲</p>\r\n', 'admin');
INSERT INTO `t_news` VALUES ('19', '收复失地', '009255704e653410002b0ae7a1134333', '2015-10-14 19:37:07', '2', '<p>\r\n	水电费时代发生地方</p>\r\n', 'admin');

-- ----------------------------
-- Table structure for `t_req`
-- ----------------------------
DROP TABLE IF EXISTS `t_req`;
CREATE TABLE `t_req` (
  `id` int(11) NOT NULL auto_increment,
  `req_num` varchar(16) default NULL,
  `req_title` varchar(128) default NULL,
  `req_sort` varchar(128) default NULL,
  `req_keyword` varchar(128) default NULL,
  `req_author` varchar(64) default NULL,
  `req_attach_id` varchar(64) default NULL,
  `req_content` text,
  `req_time` datetime default NULL,
  `req_state` int(4) default '1' COMMENT '1—未处理  2—已指派   3—已取消 4 --已解决',
  `req_source` int(4) default '1',
  `req_finish_time` datetime default NULL,
  `req_complex` int(2) default '1',
  `req_finish_engineer` varchar(64) default NULL,
  `req_solution` text,
  PRIMARY KEY  (`id`),
  KEY `t_req_ibfk_1` (`req_author`),
  KEY `req_num` (`req_num`),
  KEY `req_finish_engineer` (`req_finish_engineer`),
  CONSTRAINT `t_req_ibfk_1` FOREIGN KEY (`req_author`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `t_req_ibfk_2` FOREIGN KEY (`req_finish_engineer`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COMMENT='请求列表';

-- ----------------------------
-- Records of t_req
-- ----------------------------
INSERT INTO `t_req` VALUES ('56', 'REQ15092200001', '搜；返回；和；考核表丰', 'Java开发    PHP开发    ', '水电费  水电费', 'user3', '3bf23374f9e93a5e85c4387971d3e99a', '<p>水电费地方受到佛；和；哦还是对方快乐哈是快乐是福</p>\r\n', '2015-08-20 11:16:54', '3', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('57', 'REQ15092200002', '是客户的覅看设定', 'CRM    门禁考核系统    ', '水电费  从vb认同', 'user3', 'dc6f1df94f9f3a95f4fcc22ca3df0829', '<p>大反攻；就对付几个而冷静的发过来； 的积分够了二打两份工；就打过来；董军</p>\r\n\r\n<p>东风路公交大佛攻击哦热烈的疯狂攻击哦的风景个仆人赶紧跑偶的大佛攻击</p>\r\n', '2015-09-22 11:19:13', '4', '1', '2015-09-22 19:10:40', '1', 'gcs1', '<p>；很过分的话设定丰；哦好玩是款到发货我可比速度和佛位深刻的恢复了傻傻的付款了回味发生看到了方便文本框是款到发货io问候声第六部分健康危害善良的开发计划死哦电话费威慑力客户的覅哦</p>\r\n');
INSERT INTO `t_req` VALUES ('58', 'REQ15092300001', '深刻的付款咯', 'Java开发    PHP开发    ', '咖啡壶 圣诞快乐  速度快', 'user3', 'a5452f0df22280621023fab03288cf53', '<p>时代发生地方水电费</p>\r\n', '2015-09-23 16:12:48', '4', '2', '2015-09-25 21:37:40', '4', 'gcs3', '<p>灵魂晶石法律的路上的风景l.f唯恐落后就是来得及，山东你，家里说的办法呢我看了就是都看了好善良的佛老师的减肥乐山大佛可悲哦吼水电费 速度快发货乐山大佛不可少的后发货额我看塞德里克佛好</p>\r\n');
INSERT INTO `t_req` VALUES ('59', 'REQ15092300002', '电话费工； 地方了；钢', 'PHP开发    系统配置    ', '地方个地方', 'user1', '604dacc8ef8e0c94cf909bcfa5680d85', '<p>时代发生的佛；后水电费搜；东方红受到佛机</p>\r\n', '2015-09-23 16:23:15', '4', '1', '2015-09-28 18:07:40', '4', 'gcs3', '<p>好送大佛紧迫尖峰时刻理解诶</p>\r\n');
INSERT INTO `t_req` VALUES ('60', 'REQ15092300003', '好看送的活佛考虑好', 'PHP开发    系统配置    ', '水电费 水电费', 'test', 'ee7707bbfbd54c582ab820cd3d3f2d4b', '<p>时代发生地方水电费 水电费水电费水电费</p>\r\n', '2015-09-23 21:05:10', '4', '2', '2015-10-04 18:06:40', '3', 'gcs3', '<p>山东飞机叫我陪江苏大丰四大皆空水电费</p>\r\n');
INSERT INTO `t_req` VALUES ('61', 'REQ15092300004', '哦受到佛', 'Java开发    PHP开发    ', '斯蒂芬森 ', 'user3', '12fda44dcf6d2987a65004f3c67a895c', '<p>时代发生地方水电费</p>\r\n', '2015-07-16 21:15:09', '4', '3', '2015-08-25 21:37:15', '2', 'gcs3', '<p>卡的很不可理解流口水 塑料袋了收到两份了塑料袋丰粮食店街丰，文理分送风机老师的发牢骚发路上的风景我，你佛说法是， 你发咯师傅是登录</p>\r\n');
INSERT INTO `t_req` VALUES ('62', 'REQ15092300005', 'sdfdf', 'Java开发    PHP开发    ', '的风格 但是风格', 'sdfsdfsd', 'b5f26ddcbba2ec344f2770386c119602', '<p>的风格的风格发的风格</p>\r\n', '2015-09-23 21:19:53', '4', '2', '2015-09-25 18:06:56', '1', 'gcs3', '<p>山东；反馈；开发商；开发d.fg，恩哦大方居了，。没理我；；师傅了你送的理解佛坪为了你算了的风景&nbsp;</p>\r\n');
INSERT INTO `t_req` VALUES ('63', 'REQ15092500001', '时代发生的', '系统安装    系统配置    ', '水电费 水电费 水电费', 'user3', 'e1ea46a2a4993f32d57bdfc54d02fd7f', '<p>水电费水电费时代发生地方地方的似懂非懂</p>\r\n', '2015-09-25 10:35:15', '4', '2', '2015-10-07 13:29:43', '6', 'gcs3', '<p>卡号发我浑善达克hi也是到款后文化撒科打诨微机课思考后ic鱼哦ie我看考试的发挥开始</p>\r\n');
INSERT INTO `t_req` VALUES ('64', 'REQ15092500002', '后悔烦死了', 'PHP开发    系统配置    学生管理系统    ', '水电费', 'test', '2a13c4a7895c133da33cbba5cb03851f', '<p>对方快乐分手多久哦；就大佛攻击PDF；工具</p>\r\n\r\n<p>善良的金佛健康老师的减肥唯恐落后佛说的</p>\r\n', '2015-06-17 21:26:58', '4', '2', '2015-09-25 21:36:25', '5', 'gcs5', '<p>到了后来就是的疯狂路上的风景我看了乐山大佛好圣诞快乐不能说浪费酸辣粉</p>\r\n\r\n<p>圣诞快乐红了善良的回复考试范围内部客户送的福克斯恢复了是的</p>\r\n');
INSERT INTO `t_req` VALUES ('65', 'REQ15092500003', '的风格的风格地方', '系统安装    ', '的风格 的风格', 'admin', 'd53af3c004111cf68b1f5e575ef87e1a', '<p>的风格的风格的的风格的风格的风格的风格地方个地方</p>\r\n\r\n<p>的佛光I了；受到佛红酒受到了房间受到了房间嗯圣诞快乐放假哦圣诞节范围了；山东附件</p>\r\n', '2014-09-25 21:27:24', '4', '2', '2015-09-25 21:29:09', '4', 'gcs4', '<p>k收到了哈；卡夫卡了送低价佛了速度开了房间上岛咖啡我爸妈念佛回家哦的；福建省的咖啡味哪里世界东方速度快发货完课后；萨芬开始了哈吧分开半年圣诞狂欢快乐减肥呗问你哦好送大佛深刻的回复速度快发货时代发生的</p>\r\n');
INSERT INTO `t_req` VALUES ('66', 'REQ15092500004', '时代发生地方', '系统安装    系统配置    单元测试    ', '的风格 儿童', 'sdfsdfsd', 'cc2e930e13b0b65910b2cda61b2266f7', '<p>水电费水电费可就不能尽快了解路上的风景路上的风景</p>\r\n\r\n<p>法律说的话额我可不哄Ius度为客户博士；对方还是打开了飞红滴翠别无符号迪斯科分类放松多了</p>\r\n', '2015-05-13 21:38:25', '4', '1', '2015-10-07 13:29:56', '3', 'gcs3', '<p>圣诞快乐发货理解为受到了房间水电费</p>\r\n');
INSERT INTO `t_req` VALUES ('67', 'REQ15092500005', '的风格', 'CRM    人力资源管理系统    效绩考核系统    ', '的风格 的风格', '用户二', '452b3b3df83fcf2335d409dd7967dc31', '<p>地方个地方的风格地方个地方看Nero个老地方感觉；扩大覆盖了你惹急怕的风格了对付几个怕的风格看你热哦就地方了那里的风景江东父老家里的浪费老地方了的风格</p>\r\n', '2015-09-25 21:38:54', '4', '2', '2015-09-28 08:45:18', '2', 'gcs2', '<p>还是看后是否可好看是哦我开始的哈佛看是东方红和维护圣诞狂欢佛山快递费&nbsp;</p>\r\n');
INSERT INTO `t_req` VALUES ('68', 'REQ15092800001', '还是都红色肯定会', '系统安装    CRM    效绩考核系统    ', '是否 额看你看 地方', 'user1', '5157ef6bd54c59e7c395fcd4660b7025', '<p>水电费水电费为了将来；就受到佛机我ie考虑好送低价佛我分红睡觉哦地方</p>\r\n', '2015-09-28 14:51:31', '4', '3', '2015-10-14 21:31:49', '1', 'gcs3', '<p>\r\n	<img alt=\"\" src=\"/itildemo/plugins/ckfinder/userfiles/gcs3/images/20151014133124.jpg\" style=\"width: 500px; height: 375px;\" /></p>\r\n');
INSERT INTO `t_req` VALUES ('69', 'REQ15092800002', '上岛咖啡后', '系统配置    效绩考核系统    ', '水电费 插叙热 的风格 ', 'sfsdfsdf', '63468d88c5c502f8b32dfb96d1345373', '<p>的风格的风格的风格而而空；后来圣诞节哦I叫我耳畔 受到法律囧是邓丽君 收到了 收到了了；废旧塑料的空间哦为数量；大姐夫V你送的三打两建代理商洛杉矶恩哦I就是大夫山水电费算了的风景善良的佛；为客户快乐圣诞节啊了；哦；我会是快乐的风景</p>\r\n', '2015-09-28 14:53:13', '2', '2', null, '1', null, null);
INSERT INTO `t_req` VALUES ('70', 'REQ15092900001', '课后反思客户', 'PHP开发    性能测试    ', '水电费 山东 水电费', 'admin', '20266044c38b55bc69ad196b06b8bfdf', '<p>时代发生地方可是对方 开始的灵魂我哦好送大佛恐龙化石的好词哦也可晚饭后开始了his到付款行受到佛I是款到发货 速度快发货看来是丰收到了看</p>\r\n', '2015-09-29 08:26:50', '4', '2', '2015-10-08 08:53:32', '2', 'gcs3', '<p>合肥市客户开始的后额我看了会死哦吼唾手可得hi唯恐落后速度快山东河北开完会比哟是的为快乐不可少的放回原位痛苦谁的风格快乐hiuc是数据库里的圣诞快乐回家问hiU以上地方开始都会分开论文哈哈次uuu上的衣服hi圣诞狂欢非开挖I蝴蝶飞的开始</p>\r\n');
INSERT INTO `t_req` VALUES ('71', 'REQ15092900002', '开始都会分开可视电话', 'Java开发    系统配置    ', '水电费  水电费  水电费', 'sdfsdfsd', '3825b6d1f45c6f7aa0658d5d1b9cec15', '<p>时代发生的水电费山东水电费水电费水电费</p>\r\n', '2015-09-29 08:27:21', '4', '2', '2015-10-07 13:29:26', '2', 'gcs3', '<p>是佛还问哦就是不飞机库hiucio商业活动佛为是款到发货深刻的回北京未必是以后从事的付款后妇科病深刻的覅哦衣服</p>\r\n');
INSERT INTO `t_req` VALUES ('73', 'REQ15092900004', '时间都感觉哦东方丽景', 'Java开发    系统配置    综合监控系统    ', '大范甘迪', '用户二', '766f81641fb8a1fffaa15521bd49364f', '<p>的风格的风格的风格的风格的风格大范甘迪地方个地方的风格</p>\r\n', '2015-09-29 10:53:32', '2', '3', null, '1', null, null);
INSERT INTO `t_req` VALUES ('74', 'REQ15100400001', '洪水泛滥水立方那完了', 'CRM    效绩考核系统    ', '是水电费  但是分开了', 'admin', 'ceac2e874addfe3bc4a6d63fe31257bc', '<p>看好了废话卫立煌水电费算了的风景物理上了飞机哦送V刊回家哦送季候风考完就好受到了房间善良的佛见了我客服部浓厚吃vs看吧水电费</p>\r\n', '2015-10-04 18:22:49', '3', '2', null, '1', null, null);
INSERT INTO `t_req` VALUES ('75', 'REQ15100500001', '好看环市东路换口味', 'CRM    性能测试    ', '水电费 水电费 突然回头', 'user1', '7544c0b771df254e140cc106fe6e052d', '<p>对方就够了打两份工惹你红烧豆腐看还可吴淞口Ius的空间和偶I双方都并不悲观覅us的哟水电费客户可好玩</p>\r\n', '2015-10-05 14:21:05', '3', '2', null, '1', null, null);
INSERT INTO `t_req` VALUES ('76', 'REQ15100500002', '就不看吧老师的 ', '系统配置    综合监控系统    ', '时代发生的', 'user1', '771755e79ff0f7ebd4e5f4317d0fa5bb', '<p>看送的活佛了问你老师分类</p>\r\n', '2015-10-05 14:29:19', '3', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('77', 'REQ15100700001', '就垃圾哦日', '白盒测试    灰盒测试    ', '多少 水电费 水电费', 'user3', '671f532dd0ae7205b5d3ba4968954b43', '<p>时代发生的是多方考虑后时间到了发货我诶哦is偶发生的开始的的说法架空历史的空间开始的</p>\r\n', '2015-10-07 12:43:36', '2', '3', null, '1', null, null);
INSERT INTO `t_req` VALUES ('79', 'REQ15101000001', 'jgbighu', '系统安装    系统配置    ', '8t7g8 ', 'user3', '1a4bf8843699fa20d20046bd2b7fde00', '<p>i7yg9oyojiop</p>\r\n', '2015-10-10 10:31:30', '1', '3', null, '1', null, null);
INSERT INTO `t_req` VALUES ('80', 'REQ15101200001', 'hi口红守空房', '系统安装    门禁考核系统    ', '是否 儿科然后就哦  收到了', 'user3', 'cc87efb65d5df3379777905e8485bf5a', '<p>时代发生地方水电费水电费</p>\r\n', '2015-10-12 15:26:15', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('81', 'REQ15101200002', '丹甫股份', '系统安装    门禁考核系统    ', '的风格', 'sfsdfsdf', '098ec7c52834f09500e4fde9adfb3ead', '<p>\r\n	<img alt=\"\" src=\"localhost:8080/itildemo/plugins/ckfinder/userfiles/images/QQ图片20140527182719.jpg\" /></p>\r\n', '2015-10-12 20:28:43', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('82', 'REQ15101200003', 'dfgdg ', '', '', 'user3', 'fe06bd288d9278cbe42183a89a9b8a36', '<p>\r\n	<img alt=\"\" src=\"localhost/itildemo/plugins/ckfinder/userfiles/images/1111(2).png\" /></p>\r\n', '2015-10-12 20:31:09', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('83', 'REQ15101200004', '来得及看了个', '', '', 'user3', 'b3c2e40168f6a532c6fa652f554e3dcb', '<p>\r\n	<img alt=\"\" src=\"localhost/itildemo/plugins/ckfinder/userfiles/images/1111(2).jpg\" /></p>\r\n', '2015-10-12 20:33:59', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('85', 'REQ15101200005', '翻滚吧的风格', '', '的风格 的风格', 'user3', 'ed074dd293ba3285ef6d40c946cef115', '<p>\r\n	<img alt=\"\" src=\"/itildemo/plugins/ckfinder/userfiles/images/QQ%E5%9B%BE%E7%89%8720140527182719.jpg\" /></p>\r\n', '2015-10-12 20:37:43', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('86', 'REQ15101200006', '的风格的风格', '', '的风格', 'user3', 'c41421402f4a6a395489893d708f9914', '<p>\r\n	<a href=\"/itildemo/plugins/ckfinder/userfiles/admin/images/20151012135813.chm\">/itildemo/plugins/ckfinder/userfiles/admin/images/20151012135813.chm</a></p>\r\n', '2015-10-12 21:59:00', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('87', 'REQ15101400001', '大风刮过', 'PHP开发    系统配置    ', '水电费', 'user3', '821b542fbdd8260c46df2a23dd782a90', '', '2015-10-14 19:23:16', '1', '1', null, '1', null, null);
INSERT INTO `t_req` VALUES ('88', 'REQ15101400002', '的规定发给', 'PHP开发    系统配置    ', '地方个地方', 'user1', 'dc1539042597233a6a289bf035b9666f', '', '2015-10-14 19:45:16', '1', '1', null, '1', null, null);

-- ----------------------------
-- Table structure for `t_req_assign`
-- ----------------------------
DROP TABLE IF EXISTS `t_req_assign`;
CREATE TABLE `t_req_assign` (
  `id` int(11) NOT NULL auto_increment,
  `req_num` varchar(16) default NULL,
  `req_engineer` varchar(64) default NULL,
  `assign_time` datetime default NULL,
  `finish_flag` int(2) NOT NULL default '1' COMMENT '1-待办 2-已办 3-请求变更 4--逾期再指派',
  `assign_admin` varchar(64) default NULL,
  `req_effect` int(2) default NULL,
  `req_priority` int(2) default NULL,
  `req_time_limit` int(11) default NULL,
  `req_add_description` varchar(512) default NULL,
  `req_complex` int(2) default '1',
  `req_time_left` int(11) default '0',
  PRIMARY KEY  (`id`),
  KEY `req_num` (`req_num`),
  KEY `req_engineer` (`req_engineer`),
  CONSTRAINT `t_req_assign_ibfk_1` FOREIGN KEY (`req_num`) REFERENCES `t_req` (`req_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_req_assign_ibfk_2` FOREIGN KEY (`req_engineer`) REFERENCES `t_user` (`user_name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COMMENT='请求指派表';

-- ----------------------------
-- Records of t_req_assign
-- ----------------------------
INSERT INTO `t_req_assign` VALUES ('53', 'REQ15092200001', 'gcs3', '2015-09-22 11:19:35', '3', 'admin', '1', '1', '2', '尽快解决', '1', '7168');
INSERT INTO `t_req_assign` VALUES ('54', 'REQ15092200002', 'gcs1', '2015-09-22 11:19:49', '2', 'admin', '1', '1', '2', '似乎发的； 塑料袋；返回', '1', '-21051');
INSERT INTO `t_req_assign` VALUES ('55', 'REQ15092200001', 'gcs1', '2015-09-22 11:20:36', '3', 'admin', '1', '1', '2', '声卡坏了；丰设定；就温柔考虑好公开身份hi', '1', '7139');
INSERT INTO `t_req_assign` VALUES ('56', 'REQ15092300001', 'gcs3', '2015-09-23 19:47:29', '2', 'admin', '2', '2', '2', '测试哦是佛', '4', '-172211');
INSERT INTO `t_req_assign` VALUES ('57', 'REQ15092300002', 'gcs3', '2015-09-23 19:49:32', '2', 'admin', '1', '2', '24', '还是肯定会圣诞狂欢收到回复了', '4', '-339488');
INSERT INTO `t_req_assign` VALUES ('58', 'REQ15092300003', 'gcs3', '2015-09-23 21:05:24', '2', 'admin', '1', '1', '2', '到了分级管理对付几个', '3', '-154876');
INSERT INTO `t_req_assign` VALUES ('59', 'REQ15092300004', 'gcs3', '2015-09-23 21:15:27', '2', 'admin', '1', '2', '2', '水电费第三方', '2', '-166908');
INSERT INTO `t_req_assign` VALUES ('60', 'REQ15092300005', 'gcs3', '2015-09-23 21:20:05', '2', 'admin', '1', '1', '2', '的风格的风格', '1', '-154011');
INSERT INTO `t_req_assign` VALUES ('61', 'REQ15092500002', 'gcs5', '2015-09-25 21:27:52', '2', 'admin', '3', '3', '48', '是东方红时间路上的风景算了的风景乐山大佛山东飞机', '5', '172287');
INSERT INTO `t_req_assign` VALUES ('62', 'REQ15092500003', 'gcs4', '2015-09-25 21:28:13', '2', 'admin', '2', '2', '48', '水电费时代发生地方', '4', '172744');
INSERT INTO `t_req_assign` VALUES ('63', 'REQ15092500001', 'gcs3', '2015-09-25 21:33:02', '2', 'admin', '3', '3', '120', '十分酷好送到发货', '6', '-575801');
INSERT INTO `t_req_assign` VALUES ('64', 'REQ15092500004', 'gcs6', '2015-09-25 21:39:21', '4', 'admin', '1', '1', '2', '山东分公司发生的水电费', '3', '-251397');
INSERT INTO `t_req_assign` VALUES ('65', 'REQ15092500005', 'gcs2', '2015-09-25 21:40:14', '2', 'admin', '1', '1', '2', '大风刮过的风格二高峰过后发给二等功的风格地方', '2', '-205504');
INSERT INTO `t_req_assign` VALUES ('66', 'REQ15092800001', 'gcs2', '2015-09-28 21:28:46', '4', 'admin', '2', '2', '12', '殴打；够算了的风景额； 上了飞机刻录盘键盘上的饿了就哦司机都佛三菱电机分哦舒服', '3', '-777915');
INSERT INTO `t_req_assign` VALUES ('67', 'REQ15092500004', 'gcs3', '2015-09-28 21:29:18', '2', 'admin', '2', '2', '12', '的风格风格的风格', '3', '-705638');
INSERT INTO `t_req_assign` VALUES ('68', 'REQ15092800002', 'gcs7', '2015-09-29 08:56:37', '4', 'admin', '1', '1', '2', '家里设计师对方了解后二位看来你是房间流水；打飞机水电费', '1', '-772688');
INSERT INTO `t_req_assign` VALUES ('69', 'REQ15092900001', 'gcs3', '2015-10-04 18:21:59', '2', 'admin', '1', '2', '120', '还是快点发货善良的佛了丰', '2', '120508');
INSERT INTO `t_req_assign` VALUES ('70', 'REQ15092900002', 'gcs3', '2015-10-07 13:26:33', '2', 'admin', '2', '1', '24', '还是考虑发货为可能是口I偶发顺丰和快乐我会收到两份', '2', '86227');
INSERT INTO `t_req_assign` VALUES ('73', 'REQ15092800001', 'gcs3', '2015-10-08 09:34:01', '4', 'admin', '1', '1', '2', '的规定发给', '1', '-33518');
INSERT INTO `t_req_assign` VALUES ('74', 'REQ15092800002', 'gcs6', '2015-10-08 09:34:45', '4', 'admin', '1', '1', '2', '德国风格', '1', '-33593');
INSERT INTO `t_req_assign` VALUES ('75', 'REQ15100700001', 'gcs3', '2015-10-08 09:40:38', '3', 'admin', '1', '1', '48', '大概合格', '1', '-36900');
INSERT INTO `t_req_assign` VALUES ('76', 'REQ15092800001', 'gcs7', '2015-10-08 20:52:39', '4', 'admin', '2', '1', '24', 'sf是否', '3', '86370');
INSERT INTO `t_req_assign` VALUES ('77', 'REQ15092800001', 'gcs7', '2015-10-08 20:53:09', '4', 'admin', '2', '1', '24', 'sf是否', '3', '-49910');
INSERT INTO `t_req_assign` VALUES ('78', 'REQ15092800002', 'gcs3', '2015-10-08 20:54:38', '1', 'admin', '3', '3', '720', '大范甘迪', '6', '0');
INSERT INTO `t_req_assign` VALUES ('79', 'REQ15092900004', 'gcs7', '2015-10-08 21:07:46', '1', 'admin', '2', '1', '2', '【表情】', '3', '0');
INSERT INTO `t_req_assign` VALUES ('80', 'REQ15092800001', 'gcs3', '2015-10-10 10:44:59', '2', 'admin', '1', '2', '12', '了解路上的风景了喂料机', '1', '-341210');

-- ----------------------------
-- Table structure for `t_req_cancel`
-- ----------------------------
DROP TABLE IF EXISTS `t_req_cancel`;
CREATE TABLE `t_req_cancel` (
  `id` int(11) NOT NULL auto_increment,
  `req_num` varchar(16) NOT NULL,
  `user_cancel` varchar(64) default NULL,
  `cancel_time` datetime default NULL,
  PRIMARY KEY  (`id`),
  KEY `req_num` (`req_num`),
  KEY `user_cancel` (`user_cancel`),
  CONSTRAINT `t_req_cancel_ibfk_1` FOREIGN KEY (`req_num`) REFERENCES `t_req` (`req_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_req_cancel_ibfk_2` FOREIGN KEY (`user_cancel`) REFERENCES `t_user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='请求的取消信息';

-- ----------------------------
-- Records of t_req_cancel
-- ----------------------------
INSERT INTO `t_req_cancel` VALUES ('5', 'REQ15092200001', 'admin', '2015-09-22 11:22:04');
INSERT INTO `t_req_cancel` VALUES ('6', 'REQ15100500001', 'user1', '2015-10-05 14:28:50');
INSERT INTO `t_req_cancel` VALUES ('7', 'REQ15100500002', 'user1', '2015-10-05 14:29:27');
INSERT INTO `t_req_cancel` VALUES ('8', 'REQ15100400001', 'admin', '2015-10-07 13:22:14');

-- ----------------------------
-- Table structure for `t_req_change`
-- ----------------------------
DROP TABLE IF EXISTS `t_req_change`;
CREATE TABLE `t_req_change` (
  `id` int(11) NOT NULL auto_increment,
  `req_num` varchar(16) default NULL,
  `req_engineer` varchar(64) default NULL,
  `change_reason` varchar(512) default NULL,
  `change_time` datetime default NULL,
  `flag` int(2) default '1' COMMENT '1--未处理    2--已经再指派',
  PRIMARY KEY  (`id`),
  KEY `req_num` (`req_num`),
  CONSTRAINT `t_req_change_ibfk_1` FOREIGN KEY (`req_num`) REFERENCES `t_req` (`req_num`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='请求的变更信息';

-- ----------------------------
-- Records of t_req_change
-- ----------------------------
INSERT INTO `t_req_change` VALUES ('12', 'REQ15092200001', 'gcs3', '不会\r\n', '2015-09-22 11:20:07', '2');
INSERT INTO `t_req_change` VALUES ('13', 'REQ15092200001', 'gcs1', '还是；哦烦死速度发货吧款到发货', '2015-09-22 11:21:37', '3');
INSERT INTO `t_req_change` VALUES ('14', 'REQ15100700001', 'gcs3', '了解评价山东覅奇偶片我今儿受到了房间路上的风景', '2015-10-10 19:55:38', '1');

-- ----------------------------
-- Table structure for `t_req_sort`
-- ----------------------------
DROP TABLE IF EXISTS `t_req_sort`;
CREATE TABLE `t_req_sort` (
  `sort_id` int(11) NOT NULL auto_increment,
  `sort_name` varchar(64) NOT NULL,
  `sort_parent_id` int(11) default NULL,
  PRIMARY KEY  (`sort_id`),
  KEY `sort_parent_id` (`sort_parent_id`),
  CONSTRAINT `t_req_sort_ibfk_1` FOREIGN KEY (`sort_parent_id`) REFERENCES `t_req_sort` (`sort_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COMMENT='知识请求分类信息';

-- ----------------------------
-- Records of t_req_sort
-- ----------------------------
INSERT INTO `t_req_sort` VALUES ('1', '软件开发', null);
INSERT INTO `t_req_sort` VALUES ('2', '系统维护', null);
INSERT INTO `t_req_sort` VALUES ('3', '应用系统', null);
INSERT INTO `t_req_sort` VALUES ('5', 'OA', '3');
INSERT INTO `t_req_sort` VALUES ('6', 'CRM', '3');
INSERT INTO `t_req_sort` VALUES ('7', '人力资源管理系统', '3');
INSERT INTO `t_req_sort` VALUES ('8', '综合监控系统', '3');
INSERT INTO `t_req_sort` VALUES ('9', 'Java开发', '1');
INSERT INTO `t_req_sort` VALUES ('10', 'PHP开发', '1');
INSERT INTO `t_req_sort` VALUES ('11', 'C#开发', '1');
INSERT INTO `t_req_sort` VALUES ('12', '系统安装', '2');
INSERT INTO `t_req_sort` VALUES ('13', '系统配置', '2');
INSERT INTO `t_req_sort` VALUES ('14', '系统蓝屏', '2');
INSERT INTO `t_req_sort` VALUES ('16', '效绩考核系统', '3');
INSERT INTO `t_req_sort` VALUES ('17', '项目管理系统', '3');
INSERT INTO `t_req_sort` VALUES ('18', '门禁考核系统', '3');
INSERT INTO `t_req_sort` VALUES ('19', '学生管理系统', '3');
INSERT INTO `t_req_sort` VALUES ('27', '测试', null);
INSERT INTO `t_req_sort` VALUES ('28', '性能测试', '27');
INSERT INTO `t_req_sort` VALUES ('29', '功能测试', '27');
INSERT INTO `t_req_sort` VALUES ('31', '自动化测试', '27');
INSERT INTO `t_req_sort` VALUES ('32', '冒烟测试', '27');
INSERT INTO `t_req_sort` VALUES ('33', '单元测试', '27');
INSERT INTO `t_req_sort` VALUES ('34', '集成测试', '27');
INSERT INTO `t_req_sort` VALUES ('35', '系统测试', '27');
INSERT INTO `t_req_sort` VALUES ('37', '白盒测试', '27');
INSERT INTO `t_req_sort` VALUES ('38', '黑盒测试', '27');
INSERT INTO `t_req_sort` VALUES ('39', '灰盒测试', '27');
INSERT INTO `t_req_sort` VALUES ('40', '手工测试', '27');
INSERT INTO `t_req_sort` VALUES ('41', '回归测试', '27');
INSERT INTO `t_req_sort` VALUES ('47', '数据库', null);
INSERT INTO `t_req_sort` VALUES ('48', 'SQL插叙', '47');
INSERT INTO `t_req_sort` VALUES ('49', '数据库配置', '47');
INSERT INTO `t_req_sort` VALUES ('50', '网站开发', '1');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(64) default NULL,
  `pwd` varchar(64) default NULL,
  `name` varchar(64) default NULL,
  `staff_id` varchar(32) default NULL,
  `depart_id` int(11) default NULL,
  `position` varchar(32) default NULL,
  `sex` varchar(8) default 'man',
  `telephone` varchar(16) default NULL,
  `phone` varchar(16) default NULL,
  `email` varchar(32) default NULL,
  `user_role` int(4) default NULL,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `user_name` USING BTREE (`user_name`),
  KEY `depart_id` (`depart_id`),
  CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`depart_id`) REFERENCES `t_depart` (`depart_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('22', 'test', null, 'cesjoo', '', '8', '', 'woman', '', '', '', '1');
INSERT INTO `t_user` VALUES ('24', 'gcs1', null, '1号工程师', '', '19', '', 'man', '', '', '', '2');
INSERT INTO `t_user` VALUES ('25', 'gcs2', null, '2号工程师', '', '19', '', 'man', '', '', '', '2');
INSERT INTO `t_user` VALUES ('26', 'gcs3', 'c20ad4d76fe97759aa27a0c99bff6710', '张三工程师', '11111111', '19', '经理', 'man', '123456', '12344', 'hzm_ouc@163.com', '2');
INSERT INTO `t_user` VALUES ('27', 'admin', 'c20ad4d76fe97759aa27a0c99bff6710', '1号管理员', '1223323', '38', '', 'man', '', '', '', '3');
INSERT INTO `t_user` VALUES ('28', 'admin2', null, '2号管理员', '', '38', '', 'woman', '', '', '', '3');
INSERT INTO `t_user` VALUES ('29', 'gcs4', null, '4号工程师', '', '19', '', 'woman', '', '', '', '2');
INSERT INTO `t_user` VALUES ('30', 'gcs5', null, '5号工程师', '', '19', '', 'woman', '', '', '', '2');
INSERT INTO `t_user` VALUES ('31', 'gcs6', null, '6号工程师', '', '19', '', 'woman', '', '', '', '2');
INSERT INTO `t_user` VALUES ('32', 'gcs7', null, '7号工程师', '', '19', '', 'man', '', '', '', '2');
INSERT INTO `t_user` VALUES ('34', 'sfsdfsdf', null, 'wesgdg', '', '36', '', 'woman', '', '', '', '1');
INSERT INTO `t_user` VALUES ('35', 'sdfsdfsd', null, 'sdfehfyh', '', '37', '', 'woman', '', '', '', '1');
INSERT INTO `t_user` VALUES ('36', 'user1', null, '用户一', '111111', '37', '', 'man', '', '', '', '1');
INSERT INTO `t_user` VALUES ('38', 'user3', null, '用户三', '', '8', '', 'man', '', '', '', '1');
INSERT INTO `t_user` VALUES ('39', '用户二', null, '', '', '36', '', 'woman', '', '', '', '1');
