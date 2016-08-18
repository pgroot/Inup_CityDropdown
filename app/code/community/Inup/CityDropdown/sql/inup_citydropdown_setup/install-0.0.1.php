<?php
/**
 * User: GROOT (pzyme@outlook.com)
 * Date: 2016/8/18
 * Time: 16:04
 */

$installer = $this;
$installer->startSetup();

$installer->run("
DELETE
FROM
	directory_country_region
WHERE
	country_id = 'CN';

CREATE TABLE
IF NOT EXISTS `directory_region_city` (
	`city_id` INT (255) NOT NULL AUTO_INCREMENT,
	`code` CHAR (20) NOT NULL,
	`default_name` CHAR (50) NOT NULL,
	`region_id` INT NOT NULL,
	PRIMARY KEY (`city_id`),
	INDEX `region_id` (`region_id`)
);

ALTER TABLE directory_region_city AUTO_INCREMENT = 0;


SET @MAX = (
	SELECT
		max(region_id)
	FROM
		directory_country_region
);

INSERT INTO directory_country_region (
	`region_id`,
	`country_id`,
	`code`,
	`default_name`
)
VALUES
	(@MAX + 1, 'CN', 'BJ', '北京'),
	(@MAX + 2, 'CN', 'AH', '安徽'),
	(@MAX + 3, 'CN', 'FJ', '福建'),
	(@MAX + 4, 'CN', 'GS', '甘肃'),
	(@MAX + 5, 'CN', 'GD', '广东'),
	(@MAX + 6, 'CN', 'GX', '广西'),
	(@MAX + 7, 'CN', 'GZ', '贵州'),
	(@MAX + 8, 'CN', 'HN', '海南'),
	(@MAX + 9, 'CN', 'HB', '河北'),
	(@MAX + 10, 'CN', 'HN', '河南'),
	(
		@MAX + 11,
		'CN',
		'HLJ',
		'黑龙江'
	),
	(@MAX + 12, 'CN', 'HB', '湖北'),
	(@MAX + 13, 'CN', 'HN', '湖南'),
	(@MAX + 14, 'CN', 'JL', '吉林'),
	(@MAX + 15, 'CN', 'JS', '江苏'),
	(@MAX + 16, 'CN', 'JX', '江西'),
	(@MAX + 17, 'CN', 'LN', '辽宁'),
	(
		@MAX + 18,
		'CN',
		'NMG',
		'内蒙古'
	),
	(@MAX + 19, 'CN', 'NX', '宁夏'),
	(@MAX + 20, 'CN', 'QH', '青海'),
	(@MAX + 21, 'CN', 'SD', '山东'),
	(@MAX + 22, 'CN', 'SX', '山西'),
	(@MAX + 23, 'CN', 'SX', '陕西'),
	(@MAX + 24, 'CN', 'SH', '上海'),
	(@MAX + 25, 'CN', 'SC', '四川'),
	(@MAX + 26, 'CN', 'TJ', '天津'),
	(@MAX + 27, 'CN', 'XZ', '西藏'),
	(@MAX + 28, 'CN', 'XJ', '新疆'),
	(@MAX + 29, 'CN', 'YN', '云南'),
	(@MAX + 30, 'CN', 'ZJ', '浙江'),
	(@MAX + 31, 'CN', 'CQ', '重庆'),
	(@MAX + 32, 'CN', 'XG', '香港'),
	(@MAX + 33, 'CN', 'AM', '澳门'),
	(@MAX + 34, 'CN', 'TW', '台湾');

INSERT INTO directory_region_city (
	city_id,
	CODE,
	default_name,
	region_id
)
VALUES
	(
		NULL,
		'DCQ',
		'东城区' ,@MAX + 1
	),
	(
		NULL,
		'XCQ',
		'西城区' ,@MAX + 1
	),
	(
		NULL,
		'HDQ',
		'海淀区' ,@MAX + 1
	),
	(
		NULL,
		'CYQ',
		'朝阳区' ,@MAX + 1
	),
	(
		NULL,
		'CWQ',
		'崇文区' ,@MAX + 1
	),
	(
		NULL,
		'XWQ',
		'宣武区' ,@MAX + 1
	),
	(
		NULL,
		'FTQ',
		'丰台区' ,@MAX + 1
	),
	(
		NULL,
		'SJSQ',
		'石景山区' ,@MAX + 1
	),
	(
		NULL,
		'FSQ',
		'房山区' ,@MAX + 1
	),
	(
		NULL,
		'MTGQ',
		'门头沟区' ,@MAX + 1
	),
	(
		NULL,
		'TZQ',
		'通州区' ,@MAX + 1
	),
	(
		NULL,
		'SYQ',
		'顺义区' ,@MAX + 1
	),
	(
		NULL,
		'CPQ',
		'昌平区' ,@MAX + 1
	),
	(
		NULL,
		'HRQ',
		'怀柔区' ,@MAX + 1
	),
	(
		NULL,
		'PGQ',
		'平谷区' ,@MAX + 1
	),
	(
		NULL,
		'DXQ',
		'大兴区' ,@MAX + 1
	),
	(
		NULL,
		'MYX',
		'密云县' ,@MAX + 1
	),
	(
		NULL,
		'YQX',
		'延庆县' ,@MAX + 1
	),
	(NULL, 'AQ', '安庆' ,@MAX + 2),
	(NULL, 'BB', '蚌埠' ,@MAX + 2),
	(NULL, 'CH', '巢湖' ,@MAX + 2),
	(NULL, 'CZ', '池州' ,@MAX + 2),
	(NULL, 'CZ', '滁州' ,@MAX + 2),
	(NULL, 'FY', '阜阳' ,@MAX + 2),
	(NULL, 'HB', '淮北' ,@MAX + 2),
	(NULL, 'HN', '淮南' ,@MAX + 2),
	(NULL, 'HS', '黄山' ,@MAX + 2),
	(NULL, 'LA', '六安' ,@MAX + 2),
	(
		NULL,
		'MAS',
		'马鞍山' ,@MAX + 2
	),
	(NULL, 'XZ', '宿州' ,@MAX + 2),
	(NULL, 'TL', '铜陵' ,@MAX + 2),
	(NULL, 'WH', '芜湖' ,@MAX + 2),
	(NULL, 'XC', '宣城' ,@MAX + 2),
	(NULL, 'BZ', '亳州' ,@MAX + 2),
	(NULL, 'HF', '合肥' ,@MAX + 2),
	(NULL, 'FZ', '福州' ,@MAX + 3),
	(NULL, 'LY', '龙岩' ,@MAX + 3),
	(NULL, 'NP', '南平' ,@MAX + 3),
	(NULL, 'ND', '宁德' ,@MAX + 3),
	(NULL, 'PT', '莆田' ,@MAX + 3),
	(NULL, 'QZ', '泉州' ,@MAX + 3),
	(NULL, 'SM', '三明' ,@MAX + 3),
	(NULL, 'SM', '厦门' ,@MAX + 3),
	(NULL, 'ZZ', '漳州' ,@MAX + 3),
	(NULL, 'LZ', '兰州' ,@MAX + 4),
	(NULL, 'BY', '白银' ,@MAX + 4),
	(NULL, 'DX', '定西' ,@MAX + 4),
	(NULL, 'GN', '甘南' ,@MAX + 4),
	(
		NULL,
		'JYG',
		'嘉峪关' ,@MAX + 4
	),
	(NULL, 'JC', '金昌' ,@MAX + 4),
	(NULL, 'JQ', '酒泉' ,@MAX + 4),
	(NULL, 'LX', '临夏' ,@MAX + 4),
	(NULL, 'LN', '陇南' ,@MAX + 4),
	(NULL, 'PL', '平凉' ,@MAX + 4),
	(NULL, 'QY', '庆阳' ,@MAX + 4),
	(NULL, 'TS', '天水' ,@MAX + 4),
	(NULL, 'WW', '武威' ,@MAX + 4),
	(NULL, 'ZY', '张掖' ,@MAX + 4),
	(NULL, 'GZ', '广州' ,@MAX + 5),
	(NULL, 'SZ', '深圳' ,@MAX + 5),
	(NULL, 'CZ', '潮州' ,@MAX + 5),
	(NULL, 'DG', '东莞' ,@MAX + 5),
	(NULL, 'FS', '佛山' ,@MAX + 5),
	(NULL, 'HY', '河源' ,@MAX + 5),
	(NULL, 'HZ', '惠州' ,@MAX + 5),
	(NULL, 'JM', '江门' ,@MAX + 5),
	(NULL, 'JY', '揭阳' ,@MAX + 5),
	(NULL, 'MM', '茂名' ,@MAX + 5),
	(NULL, 'MZ', '梅州' ,@MAX + 5),
	(NULL, 'QY', '清远' ,@MAX + 5),
	(NULL, 'ST', '汕头' ,@MAX + 5),
	(NULL, 'SW', '汕尾' ,@MAX + 5),
	(NULL, 'SG', '韶关' ,@MAX + 5),
	(NULL, 'YJ', '阳江' ,@MAX + 5),
	(NULL, 'YF', '云浮' ,@MAX + 5),
	(NULL, 'ZJ', '湛江' ,@MAX + 5),
	(NULL, 'ZQ', '肇庆' ,@MAX + 5),
	(NULL, 'ZS', '中山' ,@MAX + 5),
	(NULL, 'ZH', '珠海' ,@MAX + 5),
	(NULL, 'NN', '南宁' ,@MAX + 6),
	(NULL, 'GL', '桂林' ,@MAX + 6),
	(NULL, 'BS', '百色' ,@MAX + 6),
	(NULL, 'BH', '北海' ,@MAX + 6),
	(NULL, 'CZ', '崇左' ,@MAX + 6),
	(
		NULL,
		'FCG',
		'防城港' ,@MAX + 6
	),
	(NULL, 'GG', '贵港' ,@MAX + 6),
	(NULL, 'HC', '河池' ,@MAX + 6),
	(NULL, 'HZ', '贺州' ,@MAX + 6),
	(NULL, 'LB', '来宾' ,@MAX + 6),
	(NULL, 'LZ', '柳州' ,@MAX + 6),
	(NULL, 'QZ', '钦州' ,@MAX + 6),
	(NULL, 'WZ', '梧州' ,@MAX + 6),
	(NULL, 'YL', '玉林' ,@MAX + 6),
	(NULL, 'GY', '贵阳' ,@MAX + 7),
	(NULL, 'AS', '安顺' ,@MAX + 7),
	(NULL, 'BJ', '毕节' ,@MAX + 7),
	(
		NULL,
		'LPS',
		'六盘水' ,@MAX + 7
	),
	(
		NULL,
		'QDN',
		'黔东南' ,@MAX + 7
	),
	(NULL, 'QN', '黔南' ,@MAX + 7),
	(
		NULL,
		'QXN',
		'黔西南' ,@MAX + 7
	),
	(NULL, 'TR', '铜仁' ,@MAX + 7),
	(NULL, 'ZY', '遵义' ,@MAX + 7),
	(NULL, 'HK', '海口' ,@MAX + 8),
	(NULL, 'SY', '三亚' ,@MAX + 8),
	(NULL, 'BS', '白沙' ,@MAX + 8),
	(NULL, 'BT', '保亭' ,@MAX + 8),
	(NULL, 'CJ', '昌江' ,@MAX + 8),
	(
		NULL,
		'CMX',
		'澄迈县' ,@MAX + 8
	),
	(
		NULL,
		'DAX',
		'定安县' ,@MAX + 8
	),
	(NULL, 'DF', '东方' ,@MAX + 8),
	(NULL, 'LD', '乐东' ,@MAX + 8),
	(
		NULL,
		'LGX',
		'临高县' ,@MAX + 8
	),
	(NULL, 'LS', '陵水' ,@MAX + 8),
	(NULL, 'QH', '琼海' ,@MAX + 8),
	(NULL, 'QZ', '琼中' ,@MAX + 8),
	(
		NULL,
		'TCX',
		'屯昌县' ,@MAX + 8
	),
	(NULL, 'WN', '万宁' ,@MAX + 8),
	(NULL, 'WC', '文昌' ,@MAX + 8),
	(
		NULL,
		'WZS',
		'五指山' ,@MAX + 8
	),
	(NULL, 'DZ', '儋州' ,@MAX + 8),
	(
		NULL,
		'SJZ',
		'石家庄' ,@MAX + 9
	),
	(NULL, 'BD', '保定' ,@MAX + 9),
	(NULL, 'CZ', '沧州' ,@MAX + 9),
	(NULL, 'CD', '承德' ,@MAX + 9),
	(NULL, 'HD', '邯郸' ,@MAX + 9),
	(NULL, 'HS', '衡水' ,@MAX + 9),
	(NULL, 'LF', '廊坊' ,@MAX + 9),
	(
		NULL,
		'QHD',
		'秦皇岛' ,@MAX + 9
	),
	(NULL, 'TS', '唐山' ,@MAX + 9),
	(NULL, 'XT', '邢台' ,@MAX + 9),
	(
		NULL,
		'ZJK',
		'张家口' ,@MAX + 9
	),
	(NULL, 'ZZ', '郑州' ,@MAX + 10),
	(NULL, 'LY', '洛阳' ,@MAX + 10),
	(NULL, 'KF', '开封' ,@MAX + 10),
	(NULL, 'AY', '安阳' ,@MAX + 10),
	(NULL, 'HB', '鹤壁' ,@MAX + 10),
	(NULL, 'JY', '济源' ,@MAX + 10),
	(NULL, 'JZ', '焦作' ,@MAX + 10),
	(NULL, 'NY', '南阳' ,@MAX + 10),
	(
		NULL,
		'PDS',
		'平顶山' ,@MAX + 10
	),
	(
		NULL,
		'SMX',
		'三门峡' ,@MAX + 10
	),
	(NULL, 'SQ', '商丘' ,@MAX + 10),
	(NULL, 'XX', '新乡' ,@MAX + 10),
	(NULL, 'XY', '信阳' ,@MAX + 10),
	(NULL, 'XC', '许昌' ,@MAX + 10),
	(NULL, 'ZK', '周口' ,@MAX + 10),
	(
		NULL,
		'ZMD',
		'驻马店' ,@MAX + 10
	),
	(NULL, 'LH', '漯河' ,@MAX + 10),
	(NULL, 'PY', '濮阳' ,@MAX + 10),
	(
		NULL,
		'HEB',
		'哈尔滨' ,@MAX + 11
	),
	(NULL, 'DQ', '大庆' ,@MAX + 11),
	(
		NULL,
		'DXAL',
		'大兴安岭' ,@MAX + 11
	),
	(NULL, 'HG', '鹤岗' ,@MAX + 11),
	(NULL, 'HH', '黑河' ,@MAX + 11),
	(NULL, 'JX', '鸡西' ,@MAX + 11),
	(
		NULL,
		'JMS',
		'佳木斯' ,@MAX + 11
	),
	(
		NULL,
		'MDJ',
		'牡丹江' ,@MAX + 11
	),
	(
		NULL,
		'QTH',
		'七台河' ,@MAX + 11
	),
	(
		NULL,
		'QQHE',
		'齐齐哈尔' ,@MAX + 11
	),
	(
		NULL,
		'SYS',
		'双鸭山' ,@MAX + 11
	),
	(NULL, 'SH', '绥化' ,@MAX + 11),
	(NULL, 'YC', '伊春' ,@MAX + 11),
	(NULL, 'WH', '武汉' ,@MAX + 12),
	(NULL, 'XT', '仙桃' ,@MAX + 12),
	(NULL, 'EZ', '鄂州' ,@MAX + 12),
	(NULL, 'HG', '黄冈' ,@MAX + 12),
	(NULL, 'HS', '黄石' ,@MAX + 12),
	(NULL, 'JM', '荆门' ,@MAX + 12),
	(NULL, 'JZ', '荆州' ,@MAX + 12),
	(NULL, 'QJ', '潜江' ,@MAX + 12),
	(
		NULL,
		'SNJLQ',
		'神农架林区' ,@MAX + 12
	),
	(NULL, 'SY', '十堰' ,@MAX + 12),
	(NULL, 'SZ', '随州' ,@MAX + 12),
	(NULL, 'TM', '天门' ,@MAX + 12),
	(NULL, 'XN', '咸宁' ,@MAX + 12),
	(NULL, 'XF', '襄樊' ,@MAX + 12),
	(NULL, 'XG', '孝感' ,@MAX + 12),
	(NULL, 'YC', '宜昌' ,@MAX + 12),
	(NULL, 'ES', '恩施' ,@MAX + 12),
	(NULL, 'CS', '长沙' ,@MAX + 13),
	(
		NULL,
		'ZJJ',
		'张家界' ,@MAX + 13
	),
	(NULL, 'CD', '常德' ,@MAX + 13),
	(NULL, 'CZ', '郴州' ,@MAX + 13),
	(NULL, 'HY', '衡阳' ,@MAX + 13),
	(NULL, 'HH', '怀化' ,@MAX + 13),
	(NULL, 'LD', '娄底' ,@MAX + 13),
	(NULL, 'SY', '邵阳' ,@MAX + 13),
	(NULL, 'XT', '湘潭' ,@MAX + 13),
	(NULL, 'XX', '湘西' ,@MAX + 13),
	(NULL, 'YY', '益阳' ,@MAX + 13),
	(NULL, 'YZ', '永州' ,@MAX + 13),
	(NULL, 'YY', '岳阳' ,@MAX + 13),
	(NULL, 'ZZ', '株洲' ,@MAX + 13),
	(NULL, 'CC', '长春' ,@MAX + 14),
	(NULL, 'JL', '吉林' ,@MAX + 14),
	(NULL, 'BC', '白城' ,@MAX + 14),
	(NULL, 'BS', '白山' ,@MAX + 14),
	(NULL, 'LY', '辽源' ,@MAX + 14),
	(NULL, 'SP', '四平' ,@MAX + 14),
	(NULL, 'SY', '松原' ,@MAX + 14),
	(NULL, 'TH', '通化' ,@MAX + 14),
	(NULL, 'YB', '延边' ,@MAX + 14),
	(NULL, 'NJ', '南京' ,@MAX + 15),
	(NULL, 'SZ', '苏州' ,@MAX + 15),
	(NULL, 'WX', '无锡' ,@MAX + 15),
	(NULL, 'CZ', '常州' ,@MAX + 15),
	(NULL, 'HA', '淮安' ,@MAX + 15),
	(
		NULL,
		'LYG',
		'连云港' ,@MAX + 15
	),
	(NULL, 'NT', '南通' ,@MAX + 15),
	(NULL, 'XQ', '宿迁' ,@MAX + 15),
	(NULL, 'TZ', '泰州' ,@MAX + 15),
	(NULL, 'XZ', '徐州' ,@MAX + 15),
	(NULL, 'YC', '盐城' ,@MAX + 15),
	(NULL, 'YZ', '扬州' ,@MAX + 15),
	(NULL, 'ZJ', '镇江' ,@MAX + 15),
	(NULL, 'NC', '南昌' ,@MAX + 16),
	(NULL, 'FZ', '抚州' ,@MAX + 16),
	(NULL, 'GZ', '赣州' ,@MAX + 16),
	(NULL, 'JA', '吉安' ,@MAX + 16),
	(
		NULL,
		'JDZ',
		'景德镇' ,@MAX + 16
	),
	(NULL, 'JJ', '九江' ,@MAX + 16),
	(NULL, 'PX', '萍乡' ,@MAX + 16),
	(NULL, 'SR', '上饶' ,@MAX + 16),
	(NULL, 'XY', '新余' ,@MAX + 16),
	(NULL, 'YC', '宜春' ,@MAX + 16),
	(NULL, 'YT', '鹰潭' ,@MAX + 16),
	(NULL, 'SY', '沈阳' ,@MAX + 17),
	(NULL, 'DL', '大连' ,@MAX + 17),
	(NULL, 'AS', '鞍山' ,@MAX + 17),
	(NULL, 'BX', '本溪' ,@MAX + 17),
	(NULL, 'CY', '朝阳' ,@MAX + 17),
	(NULL, 'DD', '丹东' ,@MAX + 17),
	(NULL, 'FS', '抚顺' ,@MAX + 17),
	(NULL, 'FX', '阜新' ,@MAX + 17),
	(
		NULL,
		'HLD',
		'葫芦岛' ,@MAX + 17
	),
	(NULL, 'JZ', '锦州' ,@MAX + 17),
	(NULL, 'LY', '辽阳' ,@MAX + 17),
	(NULL, 'PJ', '盘锦' ,@MAX + 17),
	(NULL, 'TL', '铁岭' ,@MAX + 17),
	(NULL, 'YK', '营口' ,@MAX + 17),
	(
		NULL,
		'HHHT',
		'呼和浩特' ,@MAX + 18
	),
	(
		NULL,
		'ELSM',
		'阿拉善盟' ,@MAX + 18
	),
	(
		NULL,
		'BYNEM',
		'巴彦淖尔盟' ,@MAX + 18
	),
	(NULL, 'BT', '包头' ,@MAX + 18),
	(NULL, 'CF', '赤峰' ,@MAX + 18),
	(
		NULL,
		'EEDS',
		'鄂尔多斯' ,@MAX + 18
	),
	(
		NULL,
		'HLBE',
		'呼伦贝尔' ,@MAX + 18
	),
	(NULL, 'TL', '通辽' ,@MAX + 18),
	(NULL, 'WH', '乌海' ,@MAX + 18),
	(
		NULL,
		'WLCBS',
		'乌兰察布市' ,@MAX + 18
	),
	(
		NULL,
		'XLGLM',
		'锡林郭勒盟' ,@MAX + 18
	),
	(
		NULL,
		'XAM',
		'兴安盟' ,@MAX + 18
	),
	(NULL, 'YC', '银川' ,@MAX + 19),
	(NULL, 'GY', '固原' ,@MAX + 19),
	(
		NULL,
		'SZS',
		'石嘴山' ,@MAX + 19
	),
	(NULL, 'WZ', '吴忠' ,@MAX + 19),
	(NULL, 'ZW', '中卫' ,@MAX + 19),
	(NULL, 'XN', '西宁' ,@MAX + 20),
	(NULL, 'GL', '果洛' ,@MAX + 20),
	(NULL, 'HB', '海北' ,@MAX + 20),
	(NULL, 'HD', '海东' ,@MAX + 20),
	(NULL, 'HN', '海南' ,@MAX + 20),
	(NULL, 'HX', '海西' ,@MAX + 20),
	(NULL, 'HN', '黄南' ,@MAX + 20),
	(NULL, 'YS', '玉树' ,@MAX + 20),
	(NULL, 'JN', '济南' ,@MAX + 21),
	(NULL, 'QD', '青岛' ,@MAX + 21),
	(NULL, 'BZ', '滨州' ,@MAX + 21),
	(NULL, 'DZ', '德州' ,@MAX + 21),
	(NULL, 'DY', '东营' ,@MAX + 21),
	(NULL, 'HZ', '菏泽' ,@MAX + 21),
	(NULL, 'JN', '济宁' ,@MAX + 21),
	(NULL, 'LW', '莱芜' ,@MAX + 21),
	(NULL, 'LC', '聊城' ,@MAX + 21),
	(NULL, 'LY', '临沂' ,@MAX + 21),
	(NULL, 'RZ', '日照' ,@MAX + 21),
	(NULL, 'TA', '泰安' ,@MAX + 21),
	(NULL, 'WH', '威海' ,@MAX + 21),
	(NULL, 'WF', '潍坊' ,@MAX + 21),
	(NULL, 'YT', '烟台' ,@MAX + 21),
	(NULL, 'ZZ', '枣庄' ,@MAX + 21),
	(NULL, 'ZB', '淄博' ,@MAX + 21),
	(NULL, 'TY', '太原' ,@MAX + 22),
	(NULL, 'CZ', '长治' ,@MAX + 22),
	(NULL, 'DT', '大同' ,@MAX + 22),
	(NULL, 'JC', '晋城' ,@MAX + 22),
	(NULL, 'JZ', '晋中' ,@MAX + 22),
	(NULL, 'LF', '临汾' ,@MAX + 22),
	(NULL, 'LL', '吕梁' ,@MAX + 22),
	(NULL, 'SZ', '朔州' ,@MAX + 22),
	(NULL, 'XZ', '忻州' ,@MAX + 22),
	(NULL, 'YQ', '阳泉' ,@MAX + 22),
	(NULL, 'YC', '运城' ,@MAX + 22),
	(NULL, 'XA', '西安' ,@MAX + 23),
	(NULL, 'AK', '安康' ,@MAX + 23),
	(NULL, 'BJ', '宝鸡' ,@MAX + 23),
	(NULL, 'HZ', '汉中' ,@MAX + 23),
	(NULL, 'SL', '商洛' ,@MAX + 23),
	(NULL, 'TC', '铜川' ,@MAX + 23),
	(NULL, 'WN', '渭南' ,@MAX + 23),
	(NULL, 'XY', '咸阳' ,@MAX + 23),
	(NULL, 'YA', '延安' ,@MAX + 23),
	(NULL, 'YL', '榆林' ,@MAX + 23),
	(
		NULL,
		'CNQ',
		'长宁区' ,@MAX + 24
	),
	(
		NULL,
		'ZBQ',
		'闸北区' ,@MAX + 24
	),
	(
		NULL,
		'MXQ',
		'闵行区' ,@MAX + 24
	),
	(
		NULL,
		'XHQ',
		'徐汇区' ,@MAX + 24
	),
	(
		NULL,
		'PDXQ',
		'浦东新区' ,@MAX + 24
	),
	(
		NULL,
		'YPQ',
		'杨浦区' ,@MAX + 24
	),
	(
		NULL,
		'PTQ',
		'普陀区' ,@MAX + 24
	),
	(
		NULL,
		'JAQ',
		'静安区' ,@MAX + 24
	),
	(
		NULL,
		'LWQ',
		'卢湾区' ,@MAX + 24
	),
	(
		NULL,
		'HKQ',
		'虹口区' ,@MAX + 24
	),
	(
		NULL,
		'HPQ',
		'黄浦区' ,@MAX + 24
	),
	(
		NULL,
		'NHQ',
		'南汇区' ,@MAX + 24
	),
	(
		NULL,
		'SJQ',
		'松江区' ,@MAX + 24
	),
	(
		NULL,
		'JDQ',
		'嘉定区' ,@MAX + 24
	),
	(
		NULL,
		'BSQ',
		'宝山区' ,@MAX + 24
	),
	(
		NULL,
		'QPQ',
		'青浦区' ,@MAX + 24
	),
	(
		NULL,
		'JSQ',
		'金山区' ,@MAX + 24
	),
	(
		NULL,
		'FXQ',
		'奉贤区' ,@MAX + 24
	),
	(
		NULL,
		'CMX',
		'崇明县' ,@MAX + 24
	),
	(NULL, 'CD', '成都' ,@MAX + 25),
	(NULL, 'MY', '绵阳' ,@MAX + 25),
	(NULL, 'EB', '阿坝' ,@MAX + 25),
	(NULL, 'BZ', '巴中' ,@MAX + 25),
	(NULL, 'DZ', '达州' ,@MAX + 25),
	(NULL, 'DY', '德阳' ,@MAX + 25),
	(NULL, 'GZ', '甘孜' ,@MAX + 25),
	(NULL, 'GA', '广安' ,@MAX + 25),
	(NULL, 'GY', '广元' ,@MAX + 25),
	(NULL, 'LS', '乐山' ,@MAX + 25),
	(NULL, 'LS', '凉山' ,@MAX + 25),
	(NULL, 'MS', '眉山' ,@MAX + 25),
	(NULL, 'NC', '南充' ,@MAX + 25),
	(NULL, 'NJ', '内江' ,@MAX + 25),
	(
		NULL,
		'PZH',
		'攀枝花' ,@MAX + 25
	),
	(NULL, 'SN', '遂宁' ,@MAX + 25),
	(NULL, 'YA', '雅安' ,@MAX + 25),
	(NULL, 'YB', '宜宾' ,@MAX + 25),
	(NULL, 'ZY', '资阳' ,@MAX + 25),
	(NULL, 'ZG', '自贡' ,@MAX + 25),
	(NULL, 'LZ', '泸州' ,@MAX + 25),
	(
		NULL,
		'HPQ',
		'和平区' ,@MAX + 26
	),
	(
		NULL,
		'HXQ',
		'河西区' ,@MAX + 26
	),
	(
		NULL,
		'NKQ',
		'南开区' ,@MAX + 26
	),
	(
		NULL,
		'HBQ',
		'河北区' ,@MAX + 26
	),
	(
		NULL,
		'HDQ',
		'河东区' ,@MAX + 26
	),
	(
		NULL,
		'HQQ',
		'红桥区' ,@MAX + 26
	),
	(
		NULL,
		'DLQ',
		'东丽区' ,@MAX + 26
	),
	(
		NULL,
		'JNQ',
		'津南区' ,@MAX + 26
	),
	(
		NULL,
		'XQQ',
		'西青区' ,@MAX + 26
	),
	(
		NULL,
		'BCQ',
		'北辰区' ,@MAX + 26
	),
	(
		NULL,
		'TGQ',
		'塘沽区' ,@MAX + 26
	),
	(
		NULL,
		'HGQ',
		'汉沽区' ,@MAX + 26
	),
	(
		NULL,
		'DGQ',
		'大港区' ,@MAX + 26
	),
	(
		NULL,
		'WQQ',
		'武清区' ,@MAX + 26
	),
	(
		NULL,
		'BDQ',
		'宝坻区' ,@MAX + 26
	),
	(
		NULL,
		'JJKFQ',
		'经济开发区' ,@MAX + 26
	),
	(
		NULL,
		'NHX',
		'宁河县' ,@MAX + 26
	),
	(
		NULL,
		'JHX',
		'静海县' ,@MAX + 26
	),
	(NULL, 'JX', '蓟县' ,@MAX + 26),
	(NULL, 'LS', '拉萨' ,@MAX + 27),
	(NULL, 'EL', '阿里' ,@MAX + 27),
	(NULL, 'CD', '昌都' ,@MAX + 27),
	(NULL, 'LZ', '林芝' ,@MAX + 27),
	(NULL, 'NQ', '那曲' ,@MAX + 27),
	(
		NULL,
		'RKZ',
		'日喀则' ,@MAX + 27
	),
	(NULL, 'SN', '山南' ,@MAX + 27),
	(
		NULL,
		'WLMQ',
		'乌鲁木齐' ,@MAX + 28
	),
	(
		NULL,
		'EKS',
		'阿克苏' ,@MAX + 28
	),
	(
		NULL,
		'ELE',
		'阿拉尔' ,@MAX + 28
	),
	(
		NULL,
		'BYGL',
		'巴音郭楞' ,@MAX + 28
	),
	(
		NULL,
		'BETL',
		'博尔塔拉' ,@MAX + 28
	),
	(NULL, 'CJ', '昌吉' ,@MAX + 28),
	(NULL, 'HM', '哈密' ,@MAX + 28),
	(NULL, 'HT', '和田' ,@MAX + 28),
	(NULL, 'KS', '喀什' ,@MAX + 28),
	(
		NULL,
		'KLMY',
		'克拉玛依' ,@MAX + 28
	),
	(
		NULL,
		'KZLS',
		'克孜勒苏' ,@MAX + 28
	),
	(
		NULL,
		'SHZ',
		'石河子' ,@MAX + 28
	),
	(
		NULL,
		'TMSK',
		'图木舒克' ,@MAX + 28
	),
	(
		NULL,
		'TLF',
		'吐鲁番' ,@MAX + 28
	),
	(
		NULL,
		'WJQ',
		'五家渠' ,@MAX + 28
	),
	(NULL, 'YL', '伊犁' ,@MAX + 28),
	(NULL, 'KM', '昆明' ,@MAX + 29),
	(NULL, 'NJ', '怒江' ,@MAX + 29),
	(NULL, 'PE', '普洱' ,@MAX + 29),
	(NULL, 'LJ', '丽江' ,@MAX + 29),
	(NULL, 'BS', '保山' ,@MAX + 29),
	(NULL, 'CX', '楚雄' ,@MAX + 29),
	(NULL, 'DL', '大理' ,@MAX + 29),
	(NULL, 'DH', '德宏' ,@MAX + 29),
	(NULL, 'DQ', '迪庆' ,@MAX + 29),
	(NULL, 'HH', '红河' ,@MAX + 29),
	(NULL, 'LC', '临沧' ,@MAX + 29),
	(NULL, 'QJ', '曲靖' ,@MAX + 29),
	(NULL, 'WS', '文山' ,@MAX + 29),
	(
		NULL,
		'XSBN',
		'西双版纳' ,@MAX + 29
	),
	(NULL, 'YX', '玉溪' ,@MAX + 29),
	(NULL, 'ZT', '昭通' ,@MAX + 29),
	(NULL, 'HZ', '杭州' ,@MAX + 30),
	(NULL, 'HZ', '湖州' ,@MAX + 30),
	(NULL, 'JX', '嘉兴' ,@MAX + 30),
	(NULL, 'JH', '金华' ,@MAX + 30),
	(NULL, 'LS', '丽水' ,@MAX + 30),
	(NULL, 'NB', '宁波' ,@MAX + 30),
	(NULL, 'SX', '绍兴' ,@MAX + 30),
	(NULL, 'TZ', '台州' ,@MAX + 30),
	(NULL, 'WZ', '温州' ,@MAX + 30),
	(NULL, 'ZS', '舟山' ,@MAX + 30),
	(NULL, 'QZ', '衢州' ,@MAX + 30),
	(
		NULL,
		'HCQ',
		'合川区' ,@MAX + 31
	),
	(
		NULL,
		'JJQ',
		'江津区' ,@MAX + 31
	),
	(
		NULL,
		'NCQ',
		'南川区' ,@MAX + 31
	),
	(
		NULL,
		'YCQ',
		'永川区' ,@MAX + 31
	),
	(
		NULL,
		'NAQ',
		'南岸区' ,@MAX + 31
	),
	(
		NULL,
		'YBQ',
		'渝北区' ,@MAX + 31
	),
	(
		NULL,
		'WSQ',
		'万盛区' ,@MAX + 31
	),
	(
		NULL,
		'DDKQ',
		'大渡口区' ,@MAX + 31
	),
	(
		NULL,
		'WZQ',
		'万州区' ,@MAX + 31
	),
	(
		NULL,
		'BBQ',
		'北碚区' ,@MAX + 31
	),
	(
		NULL,
		'SPBQ',
		'沙坪坝区' ,@MAX + 31
	),
	(
		NULL,
		'BNQ',
		'巴南区' ,@MAX + 31
	),
	(
		NULL,
		'FLQ',
		'涪陵区' ,@MAX + 31
	),
	(
		NULL,
		'JBQ',
		'江北区' ,@MAX + 31
	),
	(
		NULL,
		'JLPQ',
		'九龙坡区' ,@MAX + 31
	),
	(
		NULL,
		'YZQ',
		'渝中区' ,@MAX + 31
	),
	(
		NULL,
		'QJKFQ',
		'黔江开发区' ,@MAX + 31
	),
	(
		NULL,
		'CSQ',
		'长寿区' ,@MAX + 31
	),
	(
		NULL,
		'SQQ',
		'双桥区' ,@MAX + 31
	),
	(
		NULL,
		'QJX',
		'綦江县' ,@MAX + 31
	),
	(
		NULL,
		'TNX',
		'潼南县' ,@MAX + 31
	),
	(
		NULL,
		'TLX',
		'铜梁县' ,@MAX + 31
	),
	(
		NULL,
		'DZX',
		'大足县' ,@MAX + 31
	),
	(
		NULL,
		'RCX',
		'荣昌县' ,@MAX + 31
	),
	(
		NULL,
		'BSX',
		'璧山县' ,@MAX + 31
	),
	(
		NULL,
		'DJX',
		'垫江县' ,@MAX + 31
	),
	(
		NULL,
		'WLX',
		'武隆县' ,@MAX + 31
	),
	(
		NULL,
		'FDX',
		'丰都县' ,@MAX + 31
	),
	(
		NULL,
		'CKX',
		'城口县' ,@MAX + 31
	),
	(
		NULL,
		'LPX',
		'梁平县' ,@MAX + 31
	),
	(NULL, 'KX', '开县' ,@MAX + 31),
	(
		NULL,
		'WXX',
		'巫溪县' ,@MAX + 31
	),
	(
		NULL,
		'WSX',
		'巫山县' ,@MAX + 31
	),
	(
		NULL,
		'FJX',
		'奉节县' ,@MAX + 31
	),
	(
		NULL,
		'YYX',
		'云阳县' ,@MAX + 31
	),
	(NULL, 'ZX', '忠县' ,@MAX + 31),
	(NULL, 'SZ', '石柱' ,@MAX + 31),
	(NULL, 'PS', '彭水' ,@MAX + 31),
	(NULL, 'YY', '酉阳' ,@MAX + 31),
	(NULL, 'XS', '秀山' ,@MAX + 31),
	(NULL, 'XG', '香港' ,@MAX + 32),
	(NULL, 'AM', '澳门' ,@MAX + 33),
	(NULL, 'TW', '台湾' ,@MAX + 34);
	");

$installer->endSetup();