-- MySQL dump 10.13  Distrib 5.5.57, for Linux (x86_64)
--
-- Host: localhost    Database: www_xinx_wang
-- ------------------------------------------------------
-- Server version	5.5.57-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `my_banner`
--

DROP TABLE IF EXISTS `my_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fl` int(10) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `times` varchar(100) NOT NULL DEFAULT '00',
  `title` varchar(9999) DEFAULT NULL COMMENT '标题',
  `links` varchar(100) DEFAULT NULL COMMENT '连接',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `dj` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_banner`
--

LOCK TABLES `my_banner` WRITE;
/*!40000 ALTER TABLE `my_banner` DISABLE KEYS */;
INSERT INTO `my_banner` VALUES (1,1,'','1559657278','00','&lt;a href=&quot;https://www.guojiz.com/thread/1.html&quot;target=&quot;_blank&quot; style=&quot;display: block;  position: relative; height: 60px;  line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #0063FF;&quot;&gt;\nGuojiz网址导航系统免费下载\n&lt;/a&gt;','精选上面广告',1,0),(2,1,'/uploads/20190613/61d8c1ae6cd78349a4cd4ced82c98b50.gif','1559729270','00','&lt;a href=&quot;http://www.mys360.com&quot;target=&quot;_blank&quot; style=&quot;display: block;  position: relative; height: 60px;  line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #000;&quot;&gt;\n免费png素材网站\n&lt;/a&gt;','精选上面广告',1,0),(5,1,'/uploads/20190613/9af273491ef95f23fe1ab63759d636d7.gif','1560080841','00','&lt;a href=&quot;https://jq.qq.com/?_wv=1027&amp;k=5onJM9S&quot; target=&quot;_blank&quot; style=&quot;display: block;  position: relative; height: 60px;  line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #0063FF;&quot;&gt;\nGuojiz网址导航系统站长QQ交流群\n&lt;/a&gt;','精选上面广告',1,0),(6,2,'','1561621442','2019-07-11','&lt;a href=&quot;http://Iqfsw.com/&quot; target=&quot;_blank&quot; style=&quot;display: block; position: relative; height: 60px; line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #0063FF;&quot;&gt; \n最全的资源网\n&lt;/a&gt;','猜你喜欢上面',1,0),(7,3,'/uploads/20190711/faabc80a92928bbd8bccc6656087f2f7.jpg','1562815588','00','&lt;a href=&quot;https://www.guojiz.com/thread/1.html&quot;target=&quot;_blank&quot; style=&quot;display: block;  position: relative; height: 60px;  line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #0063FF;&quot;&gt;\nGuojiz网址导航系统免费下载\n&lt;/a&gt;','置顶上面',1,0),(8,2,'','1562818393','00','&lt;a href=&quot;http://youtu.net.cn/&quot; target=&quot;_blank&quot; style=&quot;display: block;  position: relative; height: 60px;  line-height: 60px; margin-top: 10px; padding: 0 20px; text-align: center; font-size: 16px;font-weight: 300;color: #fff;background-color: #f7a904;&quot;&gt;\n有图网 - 专注站长素材快速下载\n&lt;/a&gt;','猜你喜欢上面',1,0);
/*!40000 ALTER TABLE `my_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_category`
--

DROP TABLE IF EXISTS `my_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL COMMENT '上级',
  `name` varchar(32) DEFAULT NULL COMMENT '名称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `sidebar` tinyint(1) NOT NULL DEFAULT '1' COMMENT '侧栏',
  `sort` int(11) NOT NULL DEFAULT '1' COMMENT '排序',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_category`
--

LOCK TABLES `my_category` WRITE;
/*!40000 ALTER TABLE `my_category` DISABLE KEYS */;
INSERT INTO `my_category` VALUES (1,0,'推荐网站',1,1,1,1,'','1562994161','','');
/*!40000 ALTER TABLE `my_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_comment`
--

DROP TABLE IF EXISTS `my_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL COMMENT '上级评论',
  `uid` int(11) DEFAULT NULL COMMENT '所属会员',
  `fid` int(11) DEFAULT NULL COMMENT '所属帖子',
  `time` varchar(11) DEFAULT NULL COMMENT '时间',
  `praise` varchar(11) DEFAULT NULL COMMENT '赞',
  `reply` varchar(11) DEFAULT NULL COMMENT '回复',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_comment`
--

LOCK TABLES `my_comment` WRITE;
/*!40000 ALTER TABLE `my_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_dan`
--

DROP TABLE IF EXISTS `my_dan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_dan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fl` int(10) DEFAULT NULL,
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `content` varchar(9999) NOT NULL DEFAULT '00',
  `title` varchar(9999) DEFAULT NULL COMMENT '标题',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_dan`
--

LOCK TABLES `my_dan` WRITE;
/*!40000 ALTER TABLE `my_dan` DISABLE KEYS */;
INSERT INTO `my_dan` VALUES (1,0,'1562823019','                  &lt;blockquote&gt;&lt;p&gt;关于我们&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;更新中..&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;注意事项&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;1.由于本站不同于其他导航网，用户的活跃度 粘贴度 点击量都领先同行，所以广告价格偏高 但效果绝对不错。&lt;/p&gt;&lt;p&gt;2.广告不提供试用，先付款并款到帐后开始投放广告。&lt;/p&gt;&lt;p&gt;3.本站不负责广告图片的制作，请自备图片，若实在不会 小编也可已粗糙技术为您代工！&lt;/p&gt;&lt;p&gt;4.图片广告价格会不定期做适当调整，以上价格仅为参考 一般是不会变动的，但具体价格以咨询客服的价格为准。&lt;/p&gt;&lt;p&gt;5.本网站以最低1个月起投，多月投放可适当优惠，投放日期最多不超过12个月。&lt;/p&gt;&lt;p&gt;6.本站没有给广告刷IP的行为，请自行查看斟酌，如在外面造谣说本站刷IP被发现的，一律下掉广告不退款且永不接受合作！&lt;/p&gt;&lt;p&gt;7.本站不接受色情，政治等违反法律的广告！&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;8.如小编在到期之前询问是否续费的 请尽快回复，72小时内若不回复，我们有权提前下掉广告。&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','关于我们',1,49),(2,1,'1559729270','&lt;blockquote&gt;&lt;p&gt;广告介绍&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;更新中...&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;价格明细&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;图片位置（可接受任意广告）：首页分类上方。全站唯一横幅图片1000元/月 时间需半年起步。&lt;/p&gt;&lt;p&gt;其他位置可联系QQ自行开发，价格合适即可&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;联系方式&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\n							&lt;img src=&quot;/template/default/public/pc/img/qq.png&quot; style=&quot;width:23px;height:23px;margin-right:7px;vertical-align: middle;margin-top:-3px;&quot; class=&quot;&quot;&gt;\n							50361804							&lt;a href=&quot;http://wpa.qq.com/msgrd?v=3&amp;uin=50361804&amp;amp;site=qq&amp;amp;menu=yes&quot; target=&quot;_blank&quot; style=&quot;color: #ffffff; border: 1px solid #20c4ab; display: inline-block; padding: 0px 19px; margin-left: 20px; font-size: 14px; background: #20c4ab; border-radius: 21px;&quot;&gt;联系QQ&lt;/a&gt;\n						&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','广告合作',1,85);
/*!40000 ALTER TABLE `my_dan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_dingdan`
--

DROP TABLE IF EXISTS `my_dingdan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_dingdan` (
  `id` varchar(255) NOT NULL COMMENT '订单ID',
  `trade_no` varchar(255) DEFAULT NULL COMMENT '支付宝订单ID',
  `jiage` decimal(16,2) DEFAULT NULL,
  `score` int(10) NOT NULL DEFAULT '0' COMMENT '积分',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所有人',
  `add_time` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `errorcode` varchar(255) DEFAULT NULL COMMENT '错误代码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_dingdan`
--

LOCK TABLES `my_dingdan` WRITE;
/*!40000 ALTER TABLE `my_dingdan` DISABLE KEYS */;
/*!40000 ALTER TABLE `my_dingdan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_html`
--

DROP TABLE IF EXISTS `my_html`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_html` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL COMMENT '上级',
  `uid` int(11) DEFAULT NULL COMMENT '用户',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `choice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '精贴',
  `settop` tinyint(1) NOT NULL DEFAULT '0' COMMENT '顶置',
  `praise` varchar(11) DEFAULT NULL COMMENT '赞',
  `view` int(100) DEFAULT NULL,
  `time` varchar(11) NOT NULL DEFAULT '0' COMMENT '时间',
  `reply` varchar(11) NOT NULL DEFAULT '0' COMMENT '回复',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` text COMMENT '内容',
  `pic` varchar(1000) DEFAULT NULL COMMENT '导航封面',
  `qq` varchar(1000) DEFAULT NULL COMMENT '站长QQ',
  `icos` int(11) DEFAULT NULL,
  `lianjie` varchar(1000) DEFAULT NULL COMMENT '网址链接',
  `ico` varchar(1000) DEFAULT NULL COMMENT '网站ico',
  `pingfen` int(10) DEFAULT NULL COMMENT '评分',
  `px` int(10) DEFAULT NULL COMMENT '排序',
  `tool` int(11) NOT NULL DEFAULT '0' COMMENT '是否工具',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_html`
--

LOCK TABLES `my_html` WRITE;
/*!40000 ALTER TABLE `my_html` DISABLE KEYS */;
INSERT INTO `my_html` VALUES (1,1,1,'免元素',1,1,1,'',9,'1562992935','0','贵州省','免抠png、素材网站 免元素(mys360.com)是一个大型综合设计类免抠网站，提供免费透明素材下载，是作为您是设计师的灵感根据地，每天我们会不断更新大量素材，更多免抠png图片素材等着你来下载。','免抠png、素材网站 免元素(mys360.com)是一个大型综合设计类免抠网站，提供免费透明素材下载，是作为您是设计师的灵感根据地，每天我们会不断更新大量素材，更多免抠png图片素材等着你来下载。','https://mini.s-shot.ru/?http://www.mys360.com','50361804',1,'www.mys360.com','/uploads/ico/13Jul2019124138.ico',0,0,1),(2,1,1,'Guojiz网址导航系统开源项目',1,1,1,'',9,'1562994626','0','','一个旨在快速建立简易社区的开源程序','一个旨在快速建立简易社区的开源程序','https://mini.s-shot.ru/?http://www.guojiz.com','50361804',1,'www.guojiz.com','/uploads/ico/13Jul2019131018.ico',0,0,1),(3,1,1,'国际网址导航',1,1,1,'',7,'1562994721','0','','免费网址收录国际导航是汇集全网优质网址及资源的中文上网导航。及时收录分类的网址,让您的网络生活更简单精彩。上网,从国际导航开始','免费网址收录国际导航是汇集全网优质网址及资源的中文上网导航。及时收录分类的网址,让您的网络生活更简单精彩。上网,从国际导航开始','https://mini.s-shot.ru/?http://hao.guojiz.com','',1,'hao.guojiz.com','/uploads/ico/13Jul2019131141.ico',0,0,1),(4,1,1,'爱Q粉丝网 - QQ粉丝,QQ粉丝网,QQ空间技术,QQ活动,QQ图标,游戏辅助',1,1,1,'',8,'1562994988','0','','爱Q粉丝网是一家专注于QQ空间技术,提供爱q,爱Q粉丝网,游戏辅助,QQ活动等,汇聚所有QQ技术教程,致力于用心打造实用的QQ技术网站!','爱Q粉丝网是一家专注于QQ空间技术,提供爱q,爱Q粉丝网,游戏辅助,QQ活动等,汇聚所有QQ技术教程,致力于用心打造实用的QQ技术网站!','https://mini.s-shot.ru/?http://iqfsw.com','',1,'iqfsw.com','/uploads/ico/13Jul2019131610.ico',0,0,1),(5,1,1,'土嗨DJ网_最好听的土嗨dj歌曲_dj舞曲音乐网站',1,1,1,'',5,'1562995219','0','','土嗨DJ网每天更新最新的土嗨dj,dj歌曲,抖音歌曲，打造中国最大的DJ舞曲网站!欢迎你的光临！','土嗨DJ网每天更新最新的土嗨dj,dj歌曲,抖音歌曲，打造中国最大的DJ舞曲网站!欢迎你的光临！','https://mini.s-shot.ru/?http://tuhai123.com','',1,'tuhai123.com','/uploads/ico/13Jul2019131950.ico',0,0,1),(6,1,1,'有图网 - 专注站长素材快速下载',1,1,1,'',6,'1562995241','0','','有图网,有图网是一个专注站长素材源码免费大全下载，为广大站长作业提供更方便快捷','有图网,有图网是一个专注站长素材源码免费大全下载，为广大站长作业提供更方便快捷','https://mini.s-shot.ru/?http://youtu.net.cn','',1,'youtu.net.cn','/uploads/ico/13Jul2019132029.ico',0,0,1),(7,1,1,'素材导航',1,1,1,'',10,'1562995426','0','','素材网址导航一个收集所有设计素材网站','素材网址导航一个收集所有设计素材网站','https://mini.s-shot.ru/?http://dh.mys360.com','',1,'dh.mys360.com','/uploads/ico/13Jul2019132329.ico',0,0,1),(8,1,1,'站长导航网-站长导航,导航网,技术导航,网址大全,网址导航,小刀技术导航,滚石技术导航',1,1,1,'',7,'1562995604','0','','国内前五技术教程活动导航分类平台，站点已累计收录数千网站,累计为QQ网民提供多上万次的访问点击,满足用户随时查找QQ技巧,QQ技术,QQ资讯，随时查阅最全面最权威的文章资讯教程','国内前五技术教程活动导航分类平台，站点已累计收录数千网站,累计为QQ网民提供多上万次的访问点击,满足用户随时查找QQ技巧,QQ技术,QQ资讯，随时查阅最全面最权威的文章资讯教程','https://mini.s-shot.ru/?http://www.laolibab.cn','',1,'www.laolibab.cn','/uploads/ico/13Jul2019132603.ico',0,0,1),(10,1,1,'国际资源网 - www.guoji115.com-专注绿色安全源码海量免费下载',1,1,1,'',12,'1562997424','0','','国际资源网www.guoji115.com提供海量资源网下载|提供完美售后以及技术支持，所有源码经过检测漏洞上传|网友均可放心下载使用','国际资源网www.guoji115.com提供海量资源网下载|提供完美售后以及技术支持，所有源码经过检测漏洞上传|网友均可放心下载使用','https://mini.s-shot.ru/?http://www.guoji115.com','',1,'www.guoji115.com','/uploads/ico/13Jul2019135645.ico',0,0,1);
/*!40000 ALTER TABLE `my_html` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_links`
--

DROP TABLE IF EXISTS `my_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '名称',
  `links` varchar(100) DEFAULT NULL COMMENT '连接',
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `fl` int(11) DEFAULT NULL,
  `px` int(10) DEFAULT NULL,
  `dj` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_links`
--

LOCK TABLES `my_links` WRITE;
/*!40000 ALTER TABLE `my_links` DISABLE KEYS */;
INSERT INTO `my_links` VALUES (1,'资源文章','/news.html','1560261373','',1,0,1,0),(2,'排行榜','/top.html?type=today','1560508267','',1,0,1,0),(3,'程序下载','https://www.guojiz.com/default.html','1561022505','',0,0,0,1),(4,'导航更新','/wang.html','1561378468','',1,0,10,0);
/*!40000 ALTER TABLE `my_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_member`
--

DROP TABLE IF EXISTS `my_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_member` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `key` int(1) DEFAULT NULL,
  `point` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `userip` varchar(32) DEFAULT NULL COMMENT 'IP',
  `username` varchar(32) DEFAULT NULL COMMENT '名称',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `kouling` varchar(32) DEFAULT NULL COMMENT '口令',
  `userhead` varchar(100) DEFAULT NULL COMMENT '头像',
  `usermail` varchar(32) DEFAULT NULL COMMENT '邮箱',
  `regtime` varchar(32) DEFAULT NULL COMMENT '注册时间',
  `grades` tinyint(1) NOT NULL DEFAULT '0' COMMENT '等级',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '验证',
  `userhome` varchar(32) DEFAULT NULL COMMENT '家乡',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_member`
--

LOCK TABLES `my_member` WRITE;
/*!40000 ALTER TABLE `my_member` DISABLE KEYS */;
INSERT INTO `my_member` VALUES (1,0,1,'127.0.0.1','管理员','16e0c197e42a6be3','5201314','/public/img/touxiang.jpg','admin@admin.com','1491037613',1,1,1,'',' ');
/*!40000 ALTER TABLE `my_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_news`
--

DROP TABLE IF EXISTS `my_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL DEFAULT '1' COMMENT '上级',
  `uid` int(11) NOT NULL DEFAULT '1',
  `sttop` int(1) NOT NULL DEFAULT '0',
  `show` int(1) NOT NULL DEFAULT '1',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `view` varchar(11) DEFAULT NULL COMMENT '浏览量',
  `time` varchar(11) DEFAULT NULL COMMENT '时间',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_news`
--

LOCK TABLES `my_news` WRITE;
/*!40000 ALTER TABLE `my_news` DISABLE KEYS */;
INSERT INTO `my_news` VALUES (1,1,1,0,1,'她是从来不穿内衣的女星，被问是什么感受，回答四个字令人圈粉','7','1562994864','','&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/640x457_1562216344395355.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quo','&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/640x457_1562216344395355.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;娱乐圈中都是靠颜值吃饭的，因此对于脸就特别的爱呵护，像冰冰每天都要进行敷面膜，一年要用掉几百张，这也是为什么她到了这个岁数还年轻的原因之一。不过，脸虽然可以进行保养，但是身材却很不容易改变。娱乐圈中的女星身材多都很好，但是也有一些女星直接就放弃了挣扎，每当看到她们的飞机场，粉丝们都会望洋兴叹，我们能够怎么办。不过，女星们却安然自得，既然是上天给的，那就坦然接受就好啦！她她是从来不穿内衣的女星，被问是什么感受，回答四个字令人圈粉，这个人就是周冬雨了！&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/640x460_1562216344143022.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;相信熟悉周冬雨的人都知道，她在年少的时候成名，虽然长相很土气，个子不高，而且还是单眼皮，却受到了导演张艺谋的青睐。虽然表演能够将自己变成另外一个人，但是骨子里的东西是无法改变的。张艺谋为了拍摄《山楂树之恋》，所以要找一个小土妞，于是周冬雨的命运就被改变了。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/640x463_1562216344843338.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;也许小时候周冬雨营养不良吧，所以身材不是很丰满，没关系等她长大就好啦。然而当周冬雨步入大学到毕业，人们发现周冬雨的上身仍旧没有分量。看过《七月与安生》的人都知道，周冬雨的身材真的很平，就像是一个男孩子一样，大概正因为如此，所以才符合剧中的人设，导演就找到了她进行表演。因为没有女性的一面，所以周冬雨完全就像是一个假小子，这也就意味着她更加符合社会女的个性，一些比较大尺度的画面，完全能够放得开。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/603x453_1562216345585064.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;因为没有料的原因，所以周冬雨完全就不需要穿内衣，所以一直都是真空上阵，非常的洒脱。于是就有很多网友开始调侃她，后来周冬雨就被问是什么感受，她回答了简单粗暴的四个字“自由、舒坦”。想必这句话说到了很多同样身材女孩的心底里了，真的是很适合。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;http://imgmini.eastday.com/Yangsheng/20190704/640x435_1562216345410725.jpg&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;周冬雨就是一个很真实的人，虽然在很多人的心中，都是比较喜欢身材比较好的女生，也嫌弃自己的身型不够好。但是周冬雨却从来都没有抱怨过，反而是当成了自己的一个优点，并且将他给发扬光大了。&lt;/p&gt;&lt;p style=&quot;text-align: center; &quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;br&gt;&lt;/p&gt;'),(2,1,1,0,1,'有空调不开让学生分批乘凉引不满 校长这样说','6','1562994891','','&lt;p&gt;最近，有家长反映说，自家小孩上的学校教室里是有空调也不开，学生们热得不行，老师就分批组织学生到楼下的大堂去纳凉，家长是看在眼里，疼在心里。&lt;/p&gt;&lt;p&gt;这半个多月以来，深圳宝安沙井宝华学校的家长们过得很是煎熬。他们说孩子们这段时间在学校上课的时候，热得浑身湿透，就像蒸桑拿一样，问题是教室里明明有空调。&lt;/p&gt;&lt;p&gt;&lt;img s','&lt;p&gt;最近，有家长反映说，自家小孩上的学校教室里是有空调也不开，学生们热得不行，老师就分批组织学生到楼下的大堂去纳凉，家长是看在眼里，疼在心里。&lt;/p&gt;&lt;p&gt;这半个多月以来，深圳宝安沙井宝华学校的家长们过得很是煎熬。他们说孩子们这段时间在学校上课的时候，热得浑身湿透，就像蒸桑拿一样，问题是教室里明明有空调。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_2.png&quot;&gt;&lt;/p&gt;&lt;p&gt;宝华学校学生家长：“老师带着孩子去一楼乘凉通风。从楼梯上挤，楼梯本来也很窄，特别搞笑真的是。”&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_3.png&quot;&gt;&lt;/p&gt;&lt;p&gt;宝华学校学生家长：“很多学生长痱子，身上有起水泡，去医院看了，医生都是说因为空气不流通，细菌感染。那天一个班上，九个孩子中暑。”&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_4.png&quot;&gt;&lt;/p&gt;&lt;p&gt;因为天气酷热，小孩子没法正常上课，学校就组织孩子们分批到一楼大堂去纳凉，校方如此大费周章，家长们怀疑会不会和此前家长到教育局投诉有关系。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_5.png&quot;&gt;&lt;/p&gt;&lt;p&gt;宝华学校学生家长：“往年都有收那个空调费一百块钱每个学期，然后这个学期好像是有个别班的家长有去投诉他们非合法的收费，这个费用就退还给我们。退还给我们之后，紧跟着就出现了一大堆的问题，就开不了空调。”&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_6.png&quot;&gt;&lt;/p&gt;&lt;p&gt;除了心疼孩子，家长们还担心上课时间分批到楼下乘凉，会对小孩的学习有影响。数十位学生家长来到学校想与校方沟通，却发现老师的办公室特别凉快。&lt;/p&gt;&lt;p&gt;宝华学校学生家长：“我们家长来反映这情况，然后老师就把办公室空调给关了，我们去教室的时候发现和办公室的温差特别大。”&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_7.png&quot;&gt;&lt;/p&gt;&lt;p&gt;为了了解情况，记者来到宝华学校，发现每个教室都只有风扇在运转，立式空调倒成了摆设，不少学生只能是自带小风扇。&lt;/p&gt;&lt;p&gt;宝华学校学生：“现在教师都没开空调，热得很，有的是自带风扇的，我们都是去老师的办公室蹭空调。”&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_8.png&quot;&gt;&lt;/p&gt;&lt;p&gt;记者见到了宝华学校的校长和社区工作人员。对于为什么不开空调，校长直接带着记者来到了学校教室的高压配电房，并表示变压器损坏导致教室的空调用不了。而办公室的空调变压器是好的，所以办公室空调能正常使用。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_9.png&quot;&gt;&lt;/p&gt;&lt;p&gt;宝华学校校长边女士：“6月11号这部变压器发生爆燃，这部变压器连接着教室的空调，所以导致空调现在无法正常使用。教室空调线路是在我们学校，最初建设的时候加建的。所以说两条线路首先是不同的，所担负的变压器不是一台。”&lt;/p&gt;&lt;p&gt;消防负责人表示，变压器损坏导致教室空调无法使用，校方也一直在和供电部门联系，但是审批流程复杂，刚刚才签订了变压器扩容的施工合同，不过需要45个工作日才能完工，也就是8月25号空调才能正常运转，在此期间，分批带学生下楼纳凉，也是临时的应对措施。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;https://09imgmini.eastday.com/mobile/20190702/20190702155229_645f1e811270f075871fd460f45f7397_10.png&quot;&gt;&lt;/p&gt;&lt;p&gt;宝华学校校长边女士：“不是说让孩子们到大厅乘凉就荒废学业，在这里乱跑乱玩，我们是有组织的有序地组织孩子们在大厅里读书复习。”&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;'),(3,1,1,0,1,'停机断网也能充话费了！快看看你在的城市行不？','7','1562994908','','&lt;p&gt;原标题：停机断网也能充话费了！快看看你在的城市行不？ 来源：微信支付官方微博&lt;/p&gt;&lt;p&gt;　　中新经纬客户端7月5日电 停机断网也能充话费了！微信支付官方微博5日发布消息称，通过微信绿色缴费通道，用户即便停机断网也能充话费，全国100+城市的朋友们都可以使用。&lt;/p&gt;&lt;p&gt;　　微信支付表示，目前该服务已支持电信、移动、联通三大运营商','&lt;p&gt;原标题：停机断网也能充话费了！快看看你在的城市行不？ 来源：微信支付官方微博&lt;/p&gt;&lt;p&gt;　　中新经纬客户端7月5日电 停机断网也能充话费了！微信支付官方微博5日发布消息称，通过微信绿色缴费通道，用户即便停机断网也能充话费，全国100+城市的朋友们都可以使用。&lt;/p&gt;&lt;p&gt;　　微信支付表示，目前该服务已支持电信、移动、联通三大运营商。充值流程为：1、用户停机后收到运营商短信，短信中有进入绿通Web页面的地址。点击进入；2、确认订单信息；3、进入微信支付，并通过支付验证；4、充值完成页面提示；5、微信支付验证。&lt;/p&gt;&lt;p&gt;来源：微信支付官方微博&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;');
/*!40000 ALTER TABLE `my_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_newscate`
--

DROP TABLE IF EXISTS `my_newscate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_newscate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL COMMENT '上级',
  `name` varchar(32) DEFAULT NULL COMMENT '名称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `sort` int(10) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `keywords` varchar(1000) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_newscate`
--

LOCK TABLES `my_newscate` WRITE;
/*!40000 ALTER TABLE `my_newscate` DISABLE KEYS */;
INSERT INTO `my_newscate` VALUES (1,0,'热点新闻',1,1,1,'','1562992799','',''),(2,0,'软件资源',1,1,1,'','1562992824','',''),(3,0,'活动线报',1,1,1,'','1562992838','',''),(4,0,'网址推荐',1,1,1,'','1562992848','','');
/*!40000 ALTER TABLE `my_newscate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_top`
--

DROP TABLE IF EXISTS `my_top`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_top` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '1',
  `tid` int(11) NOT NULL COMMENT '上级',
  `show` int(1) NOT NULL DEFAULT '1',
  `time` varchar(11) NOT NULL COMMENT '时间',
  `view` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_top`
--

LOCK TABLES `my_top` WRITE;
/*!40000 ALTER TABLE `my_top` DISABLE KEYS */;
INSERT INTO `my_top` VALUES (1,1,1,1,'1562992940',4),(2,1,2,1,'1562994639',3),(3,1,3,1,'1562994942',3),(4,1,9,1,'1562996513',1),(5,1,10,1,'1562997484',2),(6,1,7,1,'1562997947',2),(7,1,8,1,'1563034771',3),(8,1,10,1,'1563091443',1),(9,1,2,1,'1563091450',1),(10,1,3,1,'1563091453',1),(11,1,4,1,'1563091456',1),(12,1,5,1,'1563091461',1),(13,1,6,1,'1563091465',1),(14,1,7,1,'1563091468',1),(15,1,9,1,'1563091477',1),(16,1,1,1,'1563121656',1),(17,1,10,1,'1563167070',1),(18,1,7,1,'1563170770',1),(19,1,4,1,'1563198990',1),(20,1,1,1,'1563224210',1),(21,1,10,1,'1563256597',5),(22,1,6,1,'1563270804',1),(23,1,3,1,'1563277331',1),(24,1,7,1,'1563277339',1),(25,1,4,1,'1563277357',1),(26,1,8,1,'1563295167',1),(27,1,6,1,'1563319105',1),(28,1,4,1,'1563367936',1),(29,1,1,1,'1563474074',1),(30,1,5,1,'1563483637',2),(31,1,7,1,'1563491874',1),(32,1,2,1,'1563494610',1),(33,1,10,1,'1563507285',2),(34,1,9,1,'1563521476',1),(35,1,4,1,'1563532279',2),(36,1,6,1,'1563539133',1),(37,1,3,1,'1563545859',1),(38,1,1,1,'1563564187',1),(39,1,2,1,'1563564835',1),(40,1,6,1,'1563568438',1),(41,1,8,1,'1563584273',1),(42,1,7,1,'1563643261',2),(43,1,9,1,'1563644401',1),(44,1,8,1,'1563680848',1),(45,1,4,1,'1563687000',1),(46,1,2,1,'1563697531',1),(47,1,5,1,'1563716532',1),(48,1,2,1,'1563742763',1),(49,1,7,1,'1563759196',1);
/*!40000 ALTER TABLE `my_top` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_wang`
--

DROP TABLE IF EXISTS `my_wang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_wang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL COMMENT '上级',
  `open` int(1) NOT NULL DEFAULT '1',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `lianjie` varchar(1000) DEFAULT NULL,
  `view` varchar(11) DEFAULT NULL COMMENT '浏览量',
  `time` varchar(11) DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_wang`
--

LOCK TABLES `my_wang` WRITE;
/*!40000 ALTER TABLE `my_wang` DISABLE KEYS */;
INSERT INTO `my_wang` VALUES (1,1,1,1,'蓝宝石设计元素图片素材免费下载 - 其他 / 元素 - 免元素','http://www.mys360.com/sucai/1133744.html','41','1562991886'),(2,1,1,1,'蓝宝石设计元素图片素材免费下载 - 其他 / 元素 - 免元素','http://www.mys360.com/sucai/1133742.html?mysuid=','43','1562992036'),(3,1,1,1,'促销水彩画设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109111.html&amp;','11','1562992097'),(4,1,1,1,'促销水彩画设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109109.html?mysuid=','21','1562992165'),(5,1,1,1,'促销水彩画设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109107.html?mysuid=','01','1562992167'),(6,1,1,1,'卡通熊猫设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/112737.html?mysuid=','31','1562992188'),(7,1,1,1,'阿尔法·罗密欧汽车设计元素图片素材免费下载 - 汽车元素 - 免元素','http://www.mys360.com/sucai/1143292.html&amp;','15','1562992219'),(8,1,1,1,'动漫美女png素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109343.html','40','1562992277'),(9,1,1,1,'导航贴纸设计元素图片素材免费下载 - PPT - 免元素','http://www.mys360.com/sucai/108016.html&amp;','24','1562992340'),(10,1,1,1,'卡通穿学士服的女大学生设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1142454.html','04','1562992370'),(11,1,1,1,'穿衣服的狗狗素材设计元素图片素材免费下载 - 动物 - 免元素','http://www.mys360.com/sucai/106431.html','04','1562992412'),(12,1,1,1,'手机广告产品设计元素图片素材免费下载 - 产品实物 - 免元素','http://www.mys360.com/sucai/109254.html&amp;','14','1562992461'),(13,1,1,1,'comments_512评论设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1135774.html&amp;','43','1562992492'),(14,1,1,1,'毕业季去旅行海报边框设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1142424.html?mysuid=','32','1562992517'),(15,1,1,1,'水上乐园玩转夏日设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1144347.html?mysuid=','41','1562992522'),(16,1,1,1,'C4D卡通带圣诞帽带立体猪形设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1134980.html?mysuid=','42','1562992524'),(17,1,1,1,'C4D卡通猪和财神2019形象装设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1134994.html?mysuid=','20','1562992529'),(18,1,1,1,'3D绿色铅笔设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1136481.html','03','1562992553'),(19,1,1,1,'水彩画树叶设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/108756.html?mysuid=','04','1562992577'),(20,1,1,1,'雪铁龙汽车免抠PNG素材设计元素图片素材免费下载 - 产品实物 - 免元素','http://www.mys360.com/sucai/112482.html&amp;','12','1562992644'),(21,1,1,1,'鸟透明png设计元素图片素材免费下载 - 动物 - 免元素','http://www.mys360.com/sucai/1133964.html','13','1562992675'),(22,1,1,1,'绿叶PNG素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/107454.html?mysuid=','23','1562992762'),(23,1,1,1,'水彩树叶设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/108906.html?mysuid=','20','1562992772'),(24,1,1,1,'樱桃设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/104306.html?mysuid=','24','1562992774'),(25,1,1,1,'火山喷发透明png素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1142380.html?mysuid=','42','1562992776'),(26,1,1,1,'中国龙素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/106482.html?mysuid=','02','1562992780'),(27,1,1,1,'中国龙素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/106509.html?mysuid=','42','1562992821'),(28,1,1,1,'矢量逗号形对话框(4078x1178设计元素图片素材免费下载 - PPT - 免元素','http://www.mys360.com/sucai/101311.html&amp;','42','1562992859'),(29,1,1,1,'中国龙素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/106532.html&amp;','01','1562992947'),(30,1,1,1,'雪铁龙汽车免抠PNG素材设计元素图片素材免费下载 - 产品实物 - 免元素','http://www.mys360.com/sucai/112487.html&amp;','34','1562993008'),(31,1,1,1,'水墨画背景设计元素图片素材免费下载 - banner海报 - 免元素','http://www.mys360.com/sucai/112972.html','02','1562993058'),(32,1,1,1,'披萨PNG图标设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1137098.html&amp;','02','1562993069'),(33,1,1,1,'蓝色科技banner设计元素图片素材免费下载 - banner海报 - 免元素','http://www.mys360.com/sucai/109661.html?mysuid=','24','1562993074'),(34,1,1,1,'夏日上新几何小清新简约banner设计元素图片素材免费下载 - banner海报 - 免元素','http://www.mys360.com/sucai/101385.html?mysuid=','32','1562993077'),(35,1,1,1,'PPT元素设计元素图片素材免费下载 - PPT - 免元素','http://www.mys360.com/sucai/112549.html?mysuid=','41','1562993099'),(36,1,1,1,'digg站牌设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1136458.html&amp;','03','1562993220'),(37,1,1,1,'雪铁龙汽车免抠PNG素材设计元素图片素材免费下载 - 产品实物 - 免元素','http://www.mys360.com/sucai/112439.html&amp;','43','1562993251'),(38,1,1,1,'摇头送暖取暖器主图设计元素图片素材免费下载 - 其他背景元素 - 免元素','http://www.mys360.com/sucai/1141952.html&amp;','43','1562993281'),(39,1,1,1,'章鱼PNG图标设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1137060.html','14','1562993342'),(40,1,1,1,'玫瑰花设计元素图片素材免费下载 - 情人节 - 免元素','http://www.mys360.com/sucai/1140688.html&amp;','43','1562993404'),(41,1,1,1,'520设计元素图片素材免费下载 - 情人节 - 免元素','http://www.mys360.com/sucai/1142904.html&amp;','20','1562993494'),(42,1,1,1,'草莓设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/104307.html?mysuid=','42','1562993501'),(43,1,1,1,'卡通小狗狗设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/106711.html?mysuid=','13','1562993506'),(44,1,1,1,'2019猪年动物猪可爱卡通形象设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1134974.html?mysuid=','31','1562993510'),(45,1,1,1,'彩色菱形风筝设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/1143156.html?mysuid=','30','1562993514'),(46,1,1,1,'卡通皇冠设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/102998.html?mysuid=','42','1562993514'),(47,1,1,1,'促销水彩画设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/108597.html?mysuid=','32','1562993521'),(48,1,1,1,'水彩花朵设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/108820.html?mysuid=','23','1562993523'),(49,1,1,1,'520个性化艺术字元素设计元素图片素材免费下载 - 情人节 - 免元素','http://www.mys360.com/sucai/1142895.html?mysuid=','43','1562993524'),(50,1,1,1,'水彩画装饰设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/108736.html?mysuid=','20','1562993524'),(51,1,1,1,'动漫美女png素材设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109289.html?mysuid=','42','1562993527'),(52,1,1,1,'花朵水彩画设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/109120.html?mysuid=','23','1562993529'),(53,1,1,1,'_design文件夹设计元素图片素材免费下载 - 图标 / 元素 - 免元素','http://www.mys360.com/sucai/1136610.html?mysuid=','13','1562993616'),(54,1,1,1,'花绿叶png设计元素图片素材免费下载 - 手绘 / 卡通 - 免元素','http://www.mys360.com/sucai/107447.html','43','1562993627'),(55,1,1,1,'png素材英文字母a设计元素图片素材免费下载 - 字体 / 设计 - 免元素','http://www.mys360.com/index.php/sucai/112997.html','01','1562993646'),(56,1,1,1,'扇子装饰设计元素图片素材免费下载 - 产品实物 - 免元素','http://www.mys360.com/sucai/105175.html&amp;','10','1562993676'),(57,1,1,1,'夏至传统节气游泳的季节设计元素图片素材免费下载 - 边框 - 免元素','http://www.mys360.com/sucai/1144275.html','31','1562993706'),(58,1,1,1,'38魅力女人节艺术字免费素设计元素图片素材免费下载 - 妇女节 - 免元素','http://www.mys360.com/sucai/109842.html','01','1562993708'),(59,1,1,1,'手绘水彩装饰插图小满节气稻设计元素图片素材免费下载 - 其他节日 - 免元素','http://www.mys360.com/sucai/1142774.html?mysuid=','43','1562993754'),(60,1,1,1,'必玩艺术字设计元素图片素材免费下载 - 字体 / 设计 - 免元素','http://www.mys360.com/sucai/102668.html&amp;','41','1562993767');
/*!40000 ALTER TABLE `my_wang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_wangcate`
--

DROP TABLE IF EXISTS `my_wangcate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_wangcate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL COMMENT '上级',
  `name` varchar(32) DEFAULT NULL COMMENT '名称',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '类型',
  `sort` int(10) NOT NULL DEFAULT '1',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示',
  `pic` varchar(100) DEFAULT NULL COMMENT '图片',
  `time` varchar(32) DEFAULT NULL COMMENT '时间',
  `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
  `description` varchar(200) DEFAULT NULL COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_wangcate`
--

LOCK TABLES `my_wangcate` WRITE;
/*!40000 ALTER TABLE `my_wangcate` DISABLE KEYS */;
INSERT INTO `my_wangcate` VALUES (1,0,'免元素',1,1,1,'/uploads/20190713/3ee7c08987f6695ae4ef8d516ccdf2c7.jpg','1562991550','免元素',' ');
/*!40000 ALTER TABLE `my_wangcate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-22 12:22:38
