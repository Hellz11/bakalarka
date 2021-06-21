@extends('layouts.app')

@section('content')

<div class="container">

<form action="/rad" method="get">

<table class="table table-dark">
<tbody>
	  <tr>
      	<td>1</td>
  		<td><input type="checkbox" id="k1" name="radicals[]" value="一" /> 一</td>
		<td><input type="checkbox" id="k2" name="radicals[]" value="｜" /> ｜</td>
		<td><input type="checkbox" id="k3" name="radicals[]" value="丶" /> 丶</td>
		<td><input type="checkbox" id="k4" name="radicals[]" value="ノ" /> ノ</td>
		<td><input type="checkbox" id="k5" name="radicals[]" value="乙" /> 乙</td>
		<td><input type="checkbox" id="k6" name="radicals[]" value="亅" /> 亅</td>
		<td>2</td>
		<td><input type="checkbox" id="k7" name="radicals[]" value="二" /> 二</td>
		<td><input type="checkbox" id="k8" name="radicals[]" value="亠" /> 亠</td>
		<td><input type="checkbox" id="k9" name="radicals[]" value="人" /> 人</td>
		<td><input type="checkbox" id="k10" name="radicals[]" value="⺅" /> ⺅</td>
		<td><input type="checkbox" id="k11" name="radicals[]" value="𠆢" /> 𠆢</td>
		<td><input type="checkbox" id="k12" name="radicals[]" value="儿" /> 儿</td>
		<td><input type="checkbox" id="k13" name="radicals[]" value="入" /> 入</td>
		<td><input type="checkbox" id="k14" name="radicals[]" value="ハ" /> ハ</td>
		<td><input type="checkbox" id="k15" name="radicals[]" value="丷" /> 丷</td>
		<td><input type="checkbox" id="k16" name="radicals[]" value="冂" /> 冂</td>
		<td><input type="checkbox" id="k17" name="radicals[]" value="冖" /> 冖</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k18" name="radicals[]" value="冫" /> 冫</td>
      	<td><input type="checkbox" id="k19" name="radicals[]" value="几" /> 几</td>
      	<td><input type="checkbox" id="k20" name="radicals[]" value="凵" /> 凵</td>
      	<td><input type="checkbox" id="k21" name="radicals[]" value="刀" /> 刀</td>
      	<td><input type="checkbox" id="k22" name="radicals[]" value="⺉" /> ⺉</td>
      	<td><input type="checkbox" id="k23" name="radicals[]" value="力" /> 力</td>
      	<td><input type="checkbox" id="k24" name="radicals[]" value="勹" /> 勹</td>
      	<td><input type="checkbox" id="k25" name="radicals[]" value="十" /> 十</td>
      	<td><input type="checkbox" id="k26" name="radicals[]" value="卜" /> 卜</td>
      	<td><input type="checkbox" id="k27" name="radicals[]" value="卩" /> 卩</td>
      	<td><input type="checkbox" id="k28" name="radicals[]" value="厂" /> 厂</td>
      	<td><input type="checkbox" id="k29" name="radicals[]" value="厶" /> 厶</td>
      	<td><input type="checkbox" id="k30" name="radicals[]" value="又" /> 又</td>
      	<td><input type="checkbox" id="k31" name="radicals[]" value="マ" /> マ</td>
      	<td><input type="checkbox" id="k32" name="radicals[]" value="九" /> 九</td>
      	<td><input type="checkbox" id="k33" name="radicals[]" value="ユ" /> ユ</td>
      	<td><input type="checkbox" id="k34" name="radicals[]" value="乃" /> 乃</td>
      	<td><input type="checkbox" id="k35" name="radicals[]" value="𠂉" /> 𠂉</td>
      	<td>3</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k36" name="radicals[]" value="⻌" /> ⻌</td>
      	<td><input type="checkbox" id="k37" name="radicals[]" value="口" /> 口</td>
      	<td><input type="checkbox" id="k38" name="radicals[]" value="囗" /> 囗</td>
      	<td><input type="checkbox" id="k39" name="radicals[]" value="土" /> 土</td>
      	<td><input type="checkbox" id="k40" name="radicals[]" value="士" /> 士</td>
      	<td><input type="checkbox" id="k41" name="radicals[]" value="夂" /> 夂</td>
      	<td><input type="checkbox" id="k42" name="radicals[]" value="夕" /> 夕</td>
      	<td><input type="checkbox" id="k43" name="radicals[]" value="大" /> 大</td>
      	<td><input type="checkbox" id="k44" name="radicals[]" value="女" /> 女</td>
      	<td><input type="checkbox" id="k45" name="radicals[]" value="子" /> 子</td>
      	<td><input type="checkbox" id="k46" name="radicals[]" value="宀" /> 宀</td>
      	<td><input type="checkbox" id="k47" name="radicals[]" value="寸" /> 寸</td>
      	<td><input type="checkbox" id="k48" name="radicals[]" value="小" /> 小</td>
      	<td><input type="checkbox" id="k49" name="radicals[]" value="⺌" /> ⺌</td>
      	<td><input type="checkbox" id="k50" name="radicals[]" value="尢" /> 尢</td>
      	<td><input type="checkbox" id="k51" name="radicals[]" value="尸" /> 尸</td>
      	<td><input type="checkbox" id="k52" name="radicals[]" value="屮" /> 屮</td>
      	<td><input type="checkbox" id="k53" name="radicals[]" value="山" /> 山</td>
      	<td><input type="checkbox" id="k54" name="radicals[]" value="川" /> 川</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k55" name="radicals[]" value="巛" /> 巛</td>
      	<td><input type="checkbox" id="k56" name="radicals[]" value="工" /> 工</td>
      	<td><input type="checkbox" id="k57" name="radicals[]" value="已" /> 已</td>
      	<td><input type="checkbox" id="k58" name="radicals[]" value="巾" /> 巾</td>
      	<td><input type="checkbox" id="k59" name="radicals[]" value="干" /> 干</td>
      	<td><input type="checkbox" id="k60" name="radicals[]" value="幺" /> 幺</td>
      	<td><input type="checkbox" id="k61" name="radicals[]" value="广" /> 广</td>
      	<td><input type="checkbox" id="k62" name="radicals[]" value="廴" /> 廴</td>
      	<td><input type="checkbox" id="k63" name="radicals[]" value="廾" /> 廾</td>
      	<td><input type="checkbox" id="k64" name="radicals[]" value="弋" /> 弋</td>
      	<td><input type="checkbox" id="k65" name="radicals[]" value="弓" /> 弓</td>
      	<td><input type="checkbox" id="k66" name="radicals[]" value="ヨ" /> ヨ</td>
      	<td><input type="checkbox" id="k67" name="radicals[]" value="彑" /> 彑</td>
      	<td><input type="checkbox" id="k68" name="radicals[]" value="彡" /> 彡</td>
      	<td><input type="checkbox" id="k69" name="radicals[]" value="彳" /> 彳</td>
      	<td><input type="checkbox" id="k70" name="radicals[]" value="⺖" /> ⺖</td>
      	<td><input type="checkbox" id="k71" name="radicals[]" value="⺘" /> ⺘</td>
      	<td><input type="checkbox" id="k72" name="radicals[]" value="⺡" /> ⺡</td>
      	<td><input type="checkbox" id="k73" name="radicals[]" value="⺨" /> ⺨</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k74" name="radicals[]" value="⺾" /> ⺾</td>
      	<td><input type="checkbox" id="k75" name="radicals[]" value="⻏" /> ⻏</td>
      	<td><input type="checkbox" id="k76" name="radicals[]" value="⻖" /> ⻖</td>
      	<td><input type="checkbox" id="k77" name="radicals[]" value="也" /> 也</td>
      	<td><input type="checkbox" id="k78" name="radicals[]" value="亡" /> 亡</td>
      	<td><input type="checkbox" id="k79" name="radicals[]" value="及" /> 及</td>
      	<td><input type="checkbox" id="k80" name="radicals[]" value="久" /> 久</td>
      	<td>4</td>
      	<td><input type="checkbox" id="k81" name="radicals[]" value="⺹" /> ⺹</td>
      	<td><input type="checkbox" id="k82" name="radicals[]" value="心" /> 心</td>
      	<td><input type="checkbox" id="k83" name="radicals[]" value="戈" /> 戈</td>
      	<td><input type="checkbox" id="k84" name="radicals[]" value="戸" /> 戸</td>
      	<td><input type="checkbox" id="k85" name="radicals[]" value="手" /> 手</td>
      	<td><input type="checkbox" id="k86" name="radicals[]" value="支" /> 支</td>
      	<td><input type="checkbox" id="k87" name="radicals[]" value="攵" /> 攵</td>
      	<td><input type="checkbox" id="k88" name="radicals[]" value="斤" /> 斤</td>
      	<td><input type="checkbox" id="k89" name="radicals[]" value="方" /> 方</td>
      	<td><input type="checkbox" id="k90" name="radicals[]" value="无" /> 无</td>
      	<td><input type="checkbox" id="k91" name="radicals[]" value="日" /> 日</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k92" name="radicals[]" value="曰" /> 曰</td>
      	<td><input type="checkbox" id="k93" name="radicals[]" value="月" /> 月</td>
      	<td><input type="checkbox" id="k94" name="radicals[]" value="木" /> 木</td>
      	<td><input type="checkbox" id="k95" name="radicals[]" value="欠" /> 欠</td>
      	<td><input type="checkbox" id="k96" name="radicals[]" value="止" /> 止</td>
      	<td><input type="checkbox" id="k97" name="radicals[]" value="歹" /> 歹</td>
      	<td><input type="checkbox" id="k98" name="radicals[]" value="殳" /> 殳</td>
      	<td><input type="checkbox" id="k99" name="radicals[]" value="比" /> 比</td>
      	<td><input type="checkbox" id="k100" name="radicals[]" value="毛" /> 毛</td>
      	<td><input type="checkbox" id="k101" name="radicals[]" value="氏" /> 氏</td>
      	<td><input type="checkbox" id="k102" name="radicals[]" value="气" /> 气</td>
      	<td><input type="checkbox" id="k103" name="radicals[]" value="水" /> 水</td>
      	<td><input type="checkbox" id="k104" name="radicals[]" value="火" /> 火</td>
      	<td><input type="checkbox" id="k105" name="radicals[]" value="⺣" /> ⺣</td>
      	<td><input type="checkbox" id="k106" name="radicals[]" value="爪" /> 爪</td>
      	<td><input type="checkbox" id="k107" name="radicals[]" value="父" /> 父</td>
      	<td><input type="checkbox" id="k108" name="radicals[]" value="爻" /> 爻</td>
      	<td><input type="checkbox" id="k109" name="radicals[]" value="爿" /> 爿</td>
      	<td><input type="checkbox" id="k110" name="radicals[]" value="片" /> 片</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k111" name="radicals[]" value="牛" /> 牛</td>
      	<td><input type="checkbox" id="k112" name="radicals[]" value="犬" /> 犬</td>
      	<td><input type="checkbox" id="k113" name="radicals[]" value="⺭" /> ⺭</td>
      	<td><input type="checkbox" id="k114" name="radicals[]" value="王" /> 王</td>
      	<td><input type="checkbox" id="k115" name="radicals[]" value="元" /> 元</td>
      	<td><input type="checkbox" id="k116" name="radicals[]" value="井" /> 井</td>
      	<td><input type="checkbox" id="k117" name="radicals[]" value="勿" /> 勿</td>
      	<td><input type="checkbox" id="k118" name="radicals[]" value="尤" /> 尤</td>
      	<td><input type="checkbox" id="k119" name="radicals[]" value="五" /> 五</td>
      	<td><input type="checkbox" id="k120" name="radicals[]" value="屯" /> 屯</td>
      	<td><input type="checkbox" id="k121" name="radicals[]" value="巴" /> 巴</td>
      	<td><input type="checkbox" id="k122" name="radicals[]" value="毋" /> 毋</td>
      	<td>5</td>
      	<td><input type="checkbox" id="k123" name="radicals[]" value="玄" /> 玄</td>
      	<td><input type="checkbox" id="k124" name="radicals[]" value="瓦" /> 瓦</td>
      	<td><input type="checkbox" id="k125" name="radicals[]" value="甘" /> 甘</td>
      	<td><input type="checkbox" id="k126" name="radicals[]" value="生" /> 生</td>
      	<td><input type="checkbox" id="k127" name="radicals[]" value="用" /> 用</td>
      	<td><input type="checkbox" id="k128" name="radicals[]" value="田" /> 田</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k129" name="radicals[]" value="疋" /> 疋</td>
      	<td><input type="checkbox" id="k130" name="radicals[]" value="疒" /> 疒</td>
      	<td><input type="checkbox" id="k131" name="radicals[]" value="癶" /> 癶</td>
      	<td><input type="checkbox" id="k132" name="radicals[]" value="白" /> 白</td>
      	<td><input type="checkbox" id="k133" name="radicals[]" value="皮" /> 皮</td>
      	<td><input type="checkbox" id="k134" name="radicals[]" value="皿" /> 皿</td>
      	<td><input type="checkbox" id="k135" name="radicals[]" value="目" /> 目</td>
      	<td><input type="checkbox" id="k136" name="radicals[]" value="矛" /> 矛</td>
      	<td><input type="checkbox" id="k137" name="radicals[]" value="矢" /> 矢</td>
      	<td><input type="checkbox" id="k138" name="radicals[]" value="石" /> 石</td>
      	<td><input type="checkbox" id="k139" name="radicals[]" value="示" /> 示</td>
      	<td><input type="checkbox" id="k140" name="radicals[]" value="禸" /> 禸</td>
      	<td><input type="checkbox" id="k141" name="radicals[]" value="禾" /> 禾</td>
      	<td><input type="checkbox" id="k142" name="radicals[]" value="穴" /> 穴</td>
      	<td><input type="checkbox" id="k143" name="radicals[]" value="立" /> 立</td>
      	<td><input type="checkbox" id="k144" name="radicals[]" value="⻂" /> ⻂</td>
      	<td><input type="checkbox" id="k145" name="radicals[]" value="世" /> 世</td>
      	<td><input type="checkbox" id="k146" name="radicals[]" value="巨" /> 巨</td>
      	<td><input type="checkbox" id="k147" name="radicals[]" value="冊" /> 冊</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k148" name="radicals[]" value="母" /> 母</td>
      	<td><input type="checkbox" id="k149" name="radicals[]" value="⺲" /> ⺲</td>
      	<td><input type="checkbox" id="k150" name="radicals[]" value="牙" /> 牙</td>
      	<td>6</td>
      	<td><input type="checkbox" id="k151" name="radicals[]" value="瓜" /> 瓜</td>
      	<td><input type="checkbox" id="k152" name="radicals[]" value="竹" /> 竹</td>
      	<td><input type="checkbox" id="k153" name="radicals[]" value="米" /> 米</td>
      	<td><input type="checkbox" id="k154" name="radicals[]" value="糸" /> 糸</td>
      	<td><input type="checkbox" id="k155" name="radicals[]" value="缶" /> 缶</td>
      	<td><input type="checkbox" id="k156" name="radicals[]" value="羊" /> 羊</td>
      	<td><input type="checkbox" id="k157" name="radicals[]" value="羽" /> 羽</td>
      	<td><input type="checkbox" id="k158" name="radicals[]" value="而" /> 而</td>
      	<td><input type="checkbox" id="k159" name="radicals[]" value="耒" /> 耒</td>
      	<td><input type="checkbox" id="k160" name="radicals[]" value="耳" /> 耳</td>
      	<td><input type="checkbox" id="k161" name="radicals[]" value="聿" /> 聿</td>
      	<td><input type="checkbox" id="k162" name="radicals[]" value="肉" /> 肉</td>
      	<td><input type="checkbox" id="k163" name="radicals[]" value="自" /> 自</td>
      	<td><input type="checkbox" id="k164" name="radicals[]" value="至" /> 至</td>
      	<td><input type="checkbox" id="k165" name="radicals[]" value="臼" /> 臼</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k166" name="radicals[]" value="舌" /> 舌</td>
      	<td><input type="checkbox" id="k167" name="radicals[]" value="舟" /> 舟</td>
      	<td><input type="checkbox" id="k168" name="radicals[]" value="艮" /> 艮</td>
      	<td><input type="checkbox" id="k169" name="radicals[]" value="色" /> 色</td>
      	<td><input type="checkbox" id="k170" name="radicals[]" value="虍" /> 虍</td>
      	<td><input type="checkbox" id="k171" name="radicals[]" value="虫" /> 虫</td>
      	<td><input type="checkbox" id="k172" name="radicals[]" value="血" /> 血</td>
      	<td><input type="checkbox" id="k173" name="radicals[]" value="行" /> 行</td>
      	<td><input type="checkbox" id="k174" name="radicals[]" value="衣" /> 衣</td>
      	<td><input type="checkbox" id="k175" name="radicals[]" value="西" /> 西</td>
      	<td>7</td>
      	<td><input type="checkbox" id="k176" name="radicals[]" value="臣" /> 臣</td>
      	<td><input type="checkbox" id="k177" name="radicals[]" value="見" /> 見</td>
      	<td><input type="checkbox" id="k178" name="radicals[]" value="角" /> 角</td>
      	<td><input type="checkbox" id="k179" name="radicals[]" value="言" /> 言</td>
      	<td><input type="checkbox" id="k180" name="radicals[]" value="谷" /> 谷</td>
      	<td><input type="checkbox" id="k181" name="radicals[]" value="豆" /> 豆</td>
      	<td><input type="checkbox" id="k182" name="radicals[]" value="豕" /> 豕</td>
      	<td><input type="checkbox" id="k183" name="radicals[]" value="豸" /> 豸</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k184" name="radicals[]" value="貝" /> 貝</td>
      	<td><input type="checkbox" id="k185" name="radicals[]" value="赤" /> 赤</td>
      	<td><input type="checkbox" id="k186" name="radicals[]" value="走" /> 走</td>
      	<td><input type="checkbox" id="k187" name="radicals[]" value="足" /> 足</td>
      	<td><input type="checkbox" id="k188" name="radicals[]" value="身" /> 身</td>
      	<td><input type="checkbox" id="k189" name="radicals[]" value="車" /> 車</td>
      	<td><input type="checkbox" id="k190" name="radicals[]" value="辛" /> 辛</td>
      	<td><input type="checkbox" id="k191" name="radicals[]" value="辰" /> 辰</td>
      	<td><input type="checkbox" id="k192" name="radicals[]" value="酉" /> 酉</td>
      	<td><input type="checkbox" id="k193" name="radicals[]" value="釆" /> 釆</td>
      	<td><input type="checkbox" id="k194" name="radicals[]" value="里" /> 里</td>
      	<td><input type="checkbox" id="k195" name="radicals[]" value="舛" /> 舛</td>
      	<td><input type="checkbox" id="k196" name="radicals[]" value="麦" /> 麦</td>
      	<td>8</td>
      	<td><input type="checkbox" id="k197" name="radicals[]" value="金" /> 金</td>
      	<td><input type="checkbox" id="k198" name="radicals[]" value="長" /> 長</td>
      	<td><input type="checkbox" id="k199" name="radicals[]" value="門" /> 門</td>
      	<td><input type="checkbox" id="k200" name="radicals[]" value="隶" /> 隶</td>
      	<td><input type="checkbox" id="k201" name="radicals[]" value="隹" /> 隹</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k202" name="radicals[]" value="雨" /> 雨</td>
      	<td><input type="checkbox" id="k203" name="radicals[]" value="青" /> 青</td>
      	<td><input type="checkbox" id="k204" name="radicals[]" value="非" /> 非</td>
      	<td><input type="checkbox" id="k205" name="radicals[]" value="奄" /> 奄</td>
      	<td><input type="checkbox" id="k206" name="radicals[]" value="岡" /> 岡</td>
      	<td><input type="checkbox" id="k207" name="radicals[]" value="免" /> 免</td>
      	<td><input type="checkbox" id="k208" name="radicals[]" value="斉" /> 斉</td>
      	<td>9</td>
      	<td><input type="checkbox" id="k209" name="radicals[]" value="面" /> 面</td>
      	<td><input type="checkbox" id="k210" name="radicals[]" value="革" /> 革</td>
      	<td><input type="checkbox" id="k211" name="radicals[]" value="韭" /> 韭</td>
      	<td><input type="checkbox" id="k212" name="radicals[]" value="音" /> 音</td>
      	<td><input type="checkbox" id="k213" name="radicals[]" value="頁" /> 頁</td>
      	<td><input type="checkbox" id="k214" name="radicals[]" value="風" /> 風</td>
      	<td><input type="checkbox" id="k215" name="radicals[]" value="飛" /> 飛</td>
      	<td><input type="checkbox" id="k216" name="radicals[]" value="食" /> 食</td>
      	<td><input type="checkbox" id="k217" name="radicals[]" value="首" /> 首</td>
      	<td><input type="checkbox" id="k218" name="radicals[]" value="香" /> 香</td>
      	<td><input type="checkbox" id="k219" name="radicals[]" value="品" /> 品</td>
      </tr>

      <tr>
      	<td>10</td>
      	<td><input type="checkbox" id="k220" name="radicals[]" value="馬" /> 馬</td>
      	<td><input type="checkbox" id="k221" name="radicals[]" value="骨" /> 骨</td>
      	<td><input type="checkbox" id="k222" name="radicals[]" value="高" /> 高</td>
      	<td><input type="checkbox" id="k223" name="radicals[]" value="髟" /> 髟</td>
      	<td><input type="checkbox" id="k224" name="radicals[]" value="鬥" /> 鬥</td>
      	<td><input type="checkbox" id="k225" name="radicals[]" value="鬯" /> 鬯</td>
      	<td><input type="checkbox" id="k226" name="radicals[]" value="鬲" /> 鬲</td>
      	<td><input type="checkbox" id="k227" name="radicals[]" value="鬼" /> 鬼</td>
      	<td><input type="checkbox" id="k228" name="radicals[]" value="竜" /> 竜</td>
      	<td><input type="checkbox" id="k229" name="radicals[]" value="韋" /> 韋</td>
      	<td>11</td>
      	<td><input type="checkbox" id="k230" name="radicals[]" value="魚" /> 魚</td>
      	<td><input type="checkbox" id="k231" name="radicals[]" value="鳥" /> 鳥</td>
      	<td><input type="checkbox" id="k232" name="radicals[]" value="鹵" /> 鹵</td>
      	<td><input type="checkbox" id="k233" name="radicals[]" value="鹿" /> 鹿</td>
      	<td><input type="checkbox" id="k234" name="radicals[]" value="麻" /> 麻</td>
      	<td><input type="checkbox" id="k235" name="radicals[]" value="亀" /> 亀</td>
      	<td><input type="checkbox" id="k236" name="radicals[]" value="啇" /> 啇</td>
      </tr>

      <tr>
      	<td><input type="checkbox" id="k237" name="radicals[]" value="黄" /> 黄</td>
      	<td><input type="checkbox" id="k238" name="radicals[]" value="黒" /> 黒</td>
      	<td>12</td>
      	<td><input type="checkbox" id="k239" name="radicals[]" value="黍" /> 黍</td>
      	<td><input type="checkbox" id="k240" name="radicals[]" value="黹" /> 黹</td>
      	<td><input type="checkbox" id="k241" name="radicals[]" value="無" /> 無</td>
      	<td><input type="checkbox" id="k242" name="radicals[]" value="歯" /> 歯</td>
      	<td>13</td>
      	<td><input type="checkbox" id="k243" name="radicals[]" value="黽" /> 黽</td>
      	<td><input type="checkbox" id="k244" name="radicals[]" value="鼎" /> 鼎</td>
      	<td><input type="checkbox" id="k245" name="radicals[]" value="鼓" /> 鼓</td>
      	<td><input type="checkbox" id="k246" name="radicals[]" value="鼠" /> 鼠</td>
      	<td>14</td>
      	<td><input type="checkbox" id="k247" name="radicals[]" value="鼻" /> 鼻</td>
      	<td><input type="checkbox" id="k248" name="radicals[]" value="齊" /> 齊</td>
      	<td>17</td>
      	<td><input type="checkbox" id="k249" name="radicals[]" value="龠" /> 龠</td>
      </tr>
</tbody>
</table>

<input type="submit" name="submit" value="Search for kanji">

</form>

</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

/*	var theRadical = document.querySelector('#radical');
	$(theRadical).addEventListener('click', doSomething, false);

	function doSomething(e)
	{
		$if (e.target !== e.currentTarget)
		{
			var clickedItem = e.target.id;
			console.log("IT WORKS");
		}
		e.stopPropagation();
	}; */
</script>