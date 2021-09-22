<?php
if (session_status() == PHP_SESSION_NONE) {
  // セッションは有効で、開始していないとき
  session_start();
}
if($_SESSION['loginauth']!='true'){
  header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="競技規則一覧">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="../../css/rules.css">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/nav.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link rel="stylesheet" href="../../vendor/animsition.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../../vendor/marker-animation.js"></script>
  <script src="../../vendor/aimsition.js"></script>
  <script src="../../scripts/main.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="icon" href="../../img/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/logo-black.png">
  <title>競技説明</title>
</head>

<body class="animsition">
  <div id="privatenav"></div>
  <div class="main">
    <header>
      <h1 class="page-title">灘校体育祭</h1>
      <a href="../toppage.html" class="animsition-link"><img class="logo" src="../../img/logo-black.png" alt="logo"></a>
    </header>
    <div class="maincontent">
      <h1 class="midashi"><span>競</span>技規則一覧</h1>
      <div class="maintable">
        <dl class="lists">
          <dt>理事長杯予選</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>中学生</p>
            <dd>人数</dd>
            <p>各クラス２人　計24名</p>
            <dd>点数</dd>
            <p>各レース1位:30pt　2位:20pt　3位:15pt　4位:10pt<br>
            順位の決定方法は順位をそのまま足し、合計が少ない順に順位を決定する。</p>
            <dd>説明</dd>
            <p>理事長杯は４００メートルを一人で走る個人戦です。
              この予選では学年ごとに3回レースをし、各学年の上位２名とタイム上位２名の計８人が決勝へと駒を進めます。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】
              ☆400m 走(本部前スタート→本部前ゴール)。<br>☆高校1年、2年、3年の順で学年別に3レース行う。<br>☆各学年、2人×4組=8人が一緒に走る。<br>■胴体がゴールラインを越えた時にゴールとする。<br>◇各学年上位2名、それ以外のタイム上位者2名の計8名が決勝進出。<br>
              【罰 則】<br>●フライングがあったときは、スタートをやり直す。<br>▶他の競技者を妨害したり、トラックの線を踏み越えたときは、当該競技者を失格させ得る。<br>
              【主 審】<br>1名 指揮台に位置し、競技に関する事項(スタート、ゴールなど)に ついて判断する。時間計測について担当者を指揮監督する。<br>△スタート位置を公平な方法で決定する。<br>●スタートの合図をする。<br>▶他者を妨害したり、トラックの線を踏み越えていないか監視する。
              <br>▶ゴールテープの準備を指揮する。<br>■1位及び最下位がゴールしたときに合図する。
              </p>
          </div>

          <dt>戦略的棒奪い予選</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>中2　中3</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:200pt　2位:150pt　3位:120pt　4位:100pt</p>
            <dd>説明</dd>
            <p>戦略的棒奪いは制限時間90秒のなかで点数の異なる7本の棒を自由に引き合う競技です。
              予選では各クラスの中2と中3が対戦をし勝利したクラスが決勝へ進みます。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】
              <br>☆1対1トーナメント方式。<br>☆各組は各棒に自由に競技者を配置する。<br>☆棒の配点は、中央の棒が50点、その両脇の棒が40点、他の
              4本の棒が30点とする。<br>△スタート前に競技者は陣内の自由な位置に立つ。<br>▶競技者は、他の棒に自由に移動して良い。<br>▶競技者は、棒の中央より敵陣側の部分に触れてはならない。<br>▶棒にぶら下がってひきづられるなど怪我につながりかねない行為をしては行けない。<br>
              ▶棒を限界線の外に出してはならない。<br>■スタートから1分30秒経過したときに終了する。<br>◇棒の中央が終了時に陣内にあったときに、棒を取得したと認める。<br>◇取得した棒で計算した得点が多い方が勝ち。<br>◇同点の場合、いずれの組も取得していない棒を、中央線と比べてどちらに寄っているか(棒の中央の位置で判断する)によって各組が取得したものとみなして得点を計算し、多いほうが勝ち。<br>
              【罰 則】<br>●スタート前に走り出す者がいたときは、スタートをやり直す。 <br>▶棒の中央より敵陣側の部分に触れる、相手の競技者に触れる、 棒で相手競技者の体を打つ、棒を曲げようとする、棒を押す、棒
              を立てるなどして水平でなくする、棒を振り回す、棒を南北方向
              以外の方向に向ける、棒を限界線の外に出すなどしたときは、当該競技者を退場、又は当該組の当該棒の取得を無効などとする。<br>●競技参加者が過剰であった場合担当者が出場者を自由に減らす権限を持つ。<br>
              【主 審】<br>1名指揮台に位置し、競技を常に監視し、競技の開始、終了、得点、勝敗その他一切の競技に関する事項について判断する。<br>●位置について、用意、スタートの合図をする。<br>
              ●スタート前に走り出す者がいないか監視し、いたときは、スタートをやり直す。<br>■1分30秒経過時に合図する。<br>◇勝敗を決定する。<br>
              【副 審】<br>7名 (棒の運搬→審判)
              担当の棒の周辺に位置し、当該棒及び戦いを常に監視する。棒の中心が陣内まで引かれたかどうか判断し、得点を認める場合は競技終了後に棒を立てる。<br>▶棒の中央より敵陣側の部分に触れたり、相手の競技者に触れたり、棒で相手競技者の体を打ったり、突いたり、棒を曲げようとしたり、棒を押したり、棒を立てるなどして水平でなくしたり、
              棒を振り回したり、棒を南北方向以外の方向に引いたり、棒を限界線の外に出していないか監視し、当該反則行為があったときは 規則を守るよう指導する。<br>
              ■試合終了の合図があった時、直ちに棒の位置(各陣に入っているか、入っていない場合、中央線と比べてどちらの陣に寄っているか)を判断し、棒をその場に置かせる。<br>☆競技終了後棒が各陣に入ったときは、その陣の目標線上で指揮台の方を向きその棒を立てる。
            </p>
          </div>

          <dt>棒引き</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>中1</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:200pt　2位:150pt　3位:120pt　4位:100pt</p>
            <dd>説明</dd>
            <p>棒引きは制限時間60秒のなかで７本の棒を引き会う競技です。戦略的棒奪いと異なり、それぞれ引く棒があらかじめ決まっています。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              ☆1対1トーナメント方式。<br>☆各組は各棒に均等に競技者を配置する。
              (ただし、人数が割り切れない場合は若いグループから1人ずつ振り分ける)<br>●競技者は棒についてする。ただしスタート前に棒に触れてはならない。<br>▶競技者は、自分の棒の引き合いが決着したときを含め、他の棒に移動してはならない。<br>▶競技者は、棒の中央より敵陣側の部分に触れたり、相手の競技者に触れてはならない。<br>
              ■棒の中央が目標線を越えたときに、棒を引き込んだと認める。<br>◇棒を多く取った方の勝ち。<br>
              【罰
              則】<br>●スタート前に棒に触れたときは、スタートをやり直す。<br>▶他の棒に移動したり、棒の中央より敵陣側の部分に触れたり、相手の競技者に触れたときは、当該競技者を退場させ、又は当該組の当該棒の取得を無効とし、若しくは当該棒を相手組が取得したものなどとみなしうる。<br>
              【主 審】<br>1名
              指揮台に位置し、競技を常に監視し、競技の開始、終了、勝敗について判断する。<br>●用意、スタートの合図をする。<br>■各棒の戦いが全て終了した時に合図する。<br>◇勝敗を決定する。<br>
              【副 審】<br>7名
              (運搬→審判)棒の中央が陣内まで引かれたことは副審が判断し、直ちに棒を立てる。<br>●スタート前に棒に触れた者がいないか監視する。<br>▶他の棒に移動したり、棒の中央より敵陣側の部分に触れたり、相手の競技者に触れていないか監視し、当該反則行為があったと
              きは、規則を守るよう指導する。<br>■棒の中央が目標線を越えた時、競技者に戦いの終了を告げ、目標線上で棒を立てて主審に伝える。
              <br>☆棒を立てた後、反則行為がなければ棒の周辺で待機し、競技終了の合図があった時に指揮台の方を向き手で大きく○を作って主審に伝える。
            </p>
          </div>

          <dt>N人N+1脚</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高3</p>
            <dd>人数</dd>
            <p>各クラス18人　計72人</p>
            <dd>点数</dd>
            <p>1位:100pt　2位:70pt　3位:50pt　4位:40pt</p>
            <dd>説明</dd>
            <p>N人N+1脚は2人3脚の組が6つ、3人4脚、4人5脚、5人6脚の組が2つずつでレースが構成されています。旗をまわり次の走者へバトンタッチします。</p>
            <dd class="judge">審判規則</dd>
            <p>【規則】<br>
              ☆往復リレー(南側スタート→南側ゴール)
              <br>☆競技者は南側をスタートし、北側に位置するコーンを回ってスタート位置まで戻る。<br>☆各競技者の足は隣の競技者とはちまきで繋がれている<br>☆2人チーム6組、3人チーム2組の計8組18人のチームを作っておく。
              <br>●スタート前に走り出してはならない<br>▶2人のチームが6組走り終わると次は3人の2組が走る。それが終わると、2人のチームのうち4チームが合体して4人のチーム2組となり、走る。その次は残りの組が合体して5人のチーム2
              組となって走る。<br>□最後の走者がゴールライン(スタートライン)に戻ってきた時点でゴールとする。<br>
              【罰則】<br>●競技者がスタート前に走り出した場合は、競技をやり直す。<br>▶他の競技者を妨害するなど、競技進行に影響を与える行為、不正をした場合には、当該組を最下位とし、又は失格させ得る。<br>
              【主審】<br>指揮台に位置し、競技を常に監視し、スタート、走り、旋回、ゴールその他一切の競技に関する事項について判断する。<br>△競技場内に支障がないこと、競技場のマークが所定の位置にあることを確認する。<br>
              ●スタートの合図をする。<br>■1位及び最下位がゴールしたときに合図する。<br>◇順位を決定する。
              【副審】<br>4名 (運搬→審判) 自由に位置を取り、主に各クラスの旋回を監視し、フライング、不正が行われていないか監視する。 <br>△競技場内に支障がないことを確認する。
              ●競技者がスタート前に走り出していないか監視、もし走り出していた場合は大きく手を挙げ主審に伝える。<br>▶その他他者を妨害したり、不正をしていないか監視する。
              <br>▶競技者に、次走る時のために予め準備をしておくことを伝える。
            </p>
          </div>

          <dt>騎馬戦</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高2</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:200pt　2位:150pt　3位:120pt　4位:100pt</p>
            <dd>説明</dd>
            <p>騎馬戦は各クラス13騎馬で構成され、大将騎馬が敗北した時点で勝敗が決まります制限時間は3分間で残り時間が2分、1分の時点でフィールドの範囲が狭まります。
              3分経った時点で大将騎馬が共に生存している場合、残りの騎馬の数で決着、残りの騎馬の数も同数の場合延長戦とし先に１つでも騎馬が敗北した時点で決着します。</p>
            <dd class="judge">審判規則</dd>
            <p>coming soon</p>
          </div>

          <dt>run for pull</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高1</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:200pt　2位:150pt　3位:120pt　4位:100pt</p>
            <dd>説明</dd>
            <p>run for pullは1クラスが2組に分かれて行う綱引きです。40 人が"pull"側として綱のそばに、残りの人は"run"側として相手側からスタートします。"run"側はぐるっ
              と綱を走って回って"pull"側に合流する形をとります。<br>＊ESSの部員から「run to pull」ではないかというご指摘を受けました。</p>
            <dd class="judge">審判規則</dd>
            <p>【規則】<br>
              ☆1対1トーナメント方式<br>☆チーム内で run 側と pull 側に分かれ、pull 側は予め本部前の 綱の横におり、スタートの合図と同時に綱を引く。run 側は生徒
              テント側におり、スタートの合図とともに綱へ走り、pull 側に加わる。<br>●pull 側はスタート前に綱に触れてはならない<br>
              ●run 側はスタート前にラインを超えてはならない <br>■旗が完全に倒れて始めて勝敗が決する<br>◇綱に括りつけられた旗の倒れた側を勝者とする<br>▶競技者は、綱の中央より敵陣側の部分に触れてはならない
              <br>▶綱にぶら下がる、綱の上に乗るなど、競技の進行に影響を及ぼしかねない行為を行ってはならない<br>
              【罰則】<br>●スタート前に縄に触れる、あるいはスタート前に走り出す者が いたときは、スタートをやり直す <br>▶上記のような、競技の進行に影響を及ぼす又は怪我につながる
              危険な行為が発見された場合は、スタートのやり直し、又は当該者を退場させる<br>
              【主審】<br>1名
              縄の中央に繋がれた旗の周辺に位置し、競技を常に監視し、競技の開始、終了、勝敗その他一切の競技に関する事項について判断する。競技の勝敗に係る判断を旗によって示す。<br>●位置について、用意、スタートの合図をする。<br>●スタート前に縄に触れる、または走り出す者がいないか監視する。<br>
              △綱を整える。<br>△手旗紅白1組を持つ。<br>■綱が片方に引かれたことによって、綱の中央に繋がれた旗が倒れた時に勝敗を判断し、勝った方の手旗を高く挙げる。<br>
              【副審】<br>2名(コーンの運搬→審判) 生徒テント側スタートライン横に位置し、run 側のスタートを監視する。<br>●run
              側の生徒がスタート前に走り出していないか監視する。当該行為があった場合は大きく手を挙げて主審に伝え、スタートをやり直す。
            </p>
          </div>

          <dt>応援合戦</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高校生</p>
            <dd>人数</dd>
            <p>制限なし</p>
            <dd>点数</dd>
            <p>10人の先生方がそれぞれ15pt満点で採点し、1クラス合計150pt</p>
            <dd>説明</dd>
            <p>制限時間5分間のなかでパフォーマンスをします。競技の得点は閉会式で発表されます。</p>
            <dd class="judge">審判規則</dd>
            <p>【規則】<br>
              ●出場者の初めの 1 人がトラックの線を越えた時を応援の開始とする。<br>▶応援は 5 分以内としなければならない。<br>
              ■出場者の最後の 1 人がトラックの線を越えた時を応援の終了とする。<br>
              【罰 則】<br>◇制限時間を過ぎたときは、その過ぎた時間に応じて減点する。
              【主 審】<br>1 名 指揮台に位置し、競技を常に監視し、応援の評価を除く外、競技の時間等その他一切の競技に関する事項について判断する。<br>
              ☆進行表に従って進行を指揮する。<br>☆副審を指揮する。<br>△ストップウォッチを持つ。<br>▶時間を計測する。<br>◇副審と協議して時間を認定する。<br>
              【副 審】1 名 指揮台周辺に位置し、時間計測について主審の判断に資する。 (△ストップウォッチを持つ。)<br>▶時間を計測する。<br>◇時間の認定について主審と協議する。
            </p>
          </div>

          <dt>校長杯</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高校生</p>
            <dd>人数</dd>
            <p>各クラス2人　計24人</p>
            <dd>点数</dd>
            <p>1位の選手のクラスに50pt</p>
            <dd>説明</dd>
            <p>校長杯は各クラスの代表が1000メートルを走るタイムを競う競技です。</p>
            <dd class="judge">審判規則</dd>
            <p>【規則】<br>
              ☆1000m 走(本部前スタート→本部前ゴール)。<br>☆3 人×4 組×3 学年=36 人が一緒に走る。<br>
              【罰 則】<br>●フライングがあったときは、スタートをやり直す。<br>▶他の競技者を妨害したり、トラックの線を踏み越えたときは、当該競技者を失格させ得る。<br>
              【主 審】<br>1 名 指揮台に位置し、競技を常に監視し、スタート、走り、ゴールその他一切の競技に関する事項について判断する。時間計測について担当者を指揮監督する。<br>
              ●スタートの合図をする。<br>▶他者を妨害したり、トラックの線を踏み越えていないか監視する。<br>▶ゴールテープの準備を指揮する。<br>
              ■1 位及び最下位がゴールしたときに合図する。<br>◇順位を決定する。担当クラブが競技者の周回数を管理してくれる。
            </p>
          </div>

          <dt>THE CHIKARA</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高3</p>
            <dd>人数</dd>
            <p>各クラス12人　計48人</p>
            <dd>点数</dd>
            <p>ワンゲラー 1位:60pt　2位:45pt　3位:30pt　4位:20pt<br>
              鉄人 1位:30pt　2位:20pt　3位:10pt　4位:5pt</p>
            <dd>説明</dd>
            <p>THE CHIKARAはワンゲラーと鉄人レースの2部構成になっています。ワンゲラーでは1周するごとに水の入ったペットボトルを増やして1０人で100メートルずつ走ります。
              それぞれ第1.2走者が2本第3.4走者が4本第5.6走者が6本第7.8走者が8本第9.10走者が10本のペットボトルを運びます。鉄人レースでは各クラス2人ずつがさまざまな障害物を越えて1人200メートルを走り切ります。
            </p>
            <dd class="judge">審判規則</dd>
            <p>9.THE CHIKARA―ワンゲラー<br>
              【規 則】<br>
              ☆100m×10 人リレー(本部前スタート→本部前ゴール)。<br>☆水入り 2L ペットボトルを各走者が持って走る。1・2:2 個、 3・4:4 個、5・6:6 個、7・8:8 個、9・10:10 個。
              ▶ペットボトルはリュックに入れる外、手に持つなどしてもよい。<br>
              【罰
              則】<br>●フライングがあったときは、スタートをやり直す。<br>▶他の競技者を妨害したり、トラックの線を踏み越えたり、テイクオーバーゾーンを越えたときは、当該組を最下位とし、又は失格させ得る。<br>▶リュックやペットボトルを落としたときは、自ら拾う。トラックの内側に落としたときは、拾った後、落とした地点から再開する。<br>
              【主 審】<br>1 名 指揮台に位置し、競技を常に監視し、スタート、走り、リュック、ゴールその他一切の競技に関する事項について判断する。<br>●スタートの合図をする。 <br>
              ▶コーナーでの順位に基づいて本部側次走者のスタート順を決定する。<br>▶ペットボトルの追加を指導する。<br>■1 位及び最下位がゴールしたときに合図する。<br>◇順位を決定する。<br>
              【副 審】<br>1 名
              本部反対側テイクオーバーゾーン周辺に位置し、競技を常に監視する。<br>▶他者を妨害したり、トラックの線を踏み越えていないか監視する。<br>▶コーナーでの順位に基づいて本部反対側次走者のスタート順を決定し、その通りに並ばせる。<br>
              ▶テイクオーバーゾーンを越えていないか監視する。<br>☆反則等がなかったときは、競技終了後指揮台の方を向き、手で大きく○を作って主審に伝える。<br>
              9. THE CHIKARA―鉄人レース<br>
              【規 則】<br>
              ☆200m×2 人リレー(本部前スタート→本部前ゴール)<br>
              ☆1 人目はスタート→〔手押し車〕→腕立て伏せ 20 回→〔走る〕→〔うさぎ跳び〕→〔タイヤを持って走る〕→〔麻袋に入って跳んで前進〕→バトンタッチ、2 人目はバトンタッチ→〔手押し車〕→腕立て伏せ 20
              回→〔走る〕→腹筋運動(上体起こし)20 回→〔走る〕→スクワット 20 回→〔走る〕→背筋運動 20 回→〔走 る〕→ゴールの順に進む。<br>
              ▶バトンタッチは、1 人目がスタートラインまで進んだ時に 2 人目がスタートラインから進み始めることとする(バトンはない)。<br>
              ▶腹筋では審判員が足首を固定する。<br>▶背筋でもうつ伏せになってもらい審判員が足首を固定する。<br>
              【罰
              則】<br>●フライングがあったときは、スタートをやり直す。<br>▶他の競技者を妨害したり、トラックの線を踏み越えたり、障害を越えるために不正をしたときは、当該組を最下位とし、又は失格させ得る。<br>▶タイヤを落としたときは、自ら拾う。トラックの内側に落としたときは、拾った後、落とした地点から再開する。<br>
              【主 審】<br>1 名 指揮台に位置し、競技を常に監視し、スタート、走り、ゴールそ
              の他一切の競技に関する事項について判断する。<br>△競技場内に支障がないこと、競技場のマークや用具が所定の位置にあることを確認する。<br>△スタート位置を公平な方法で決定する。<br>●位置について、用意、スタートの合図をする。<br>
              ▶他者を妨害したり、トラックの線を踏み越えたり、障害に不公平が生じたり、障害を越えるために不正をしてないか監視する。 <br>▶ゴールテープの準備を指揮する。<br>■1 位及び最下位がゴールしたときに合図する。
              <br>◇順位を決定する。<br>
              【補助審】<br>4 名(タイヤ大運搬→審判)
              各競技者に付き添い、競技を常に監視及び指導して、主審を助ける。<br>△競技場内に支障がないことを確認する。<br>●スタート時は、位置についての合図で各競技者をしてスタートラインの手前に両手をつかせ、用意の合図で競技者の足を持ち上げる。<br>
              ▶手押し車は、競技者が腕力で進むものであるから、競技者を後ろから押したり引いたりしてはならない。また、競技者の足を持ち上げる高さは概ね腰の高さとし、他の補助審と異ならないように注意する。<br>▶腕立て伏せ、腹筋、スクワット、背筋はその回数を数え、「1、
              2、......」と競技者に言い聞かせる。また、その形が他の競技者と異ならないように注意する。<br>
              ▶うさぎ跳び、タイヤ運び、麻袋ジャンプはそれぞれ開始と終了のタイミングで競技者に指示し、監視する。<br>▶1 人目が麻袋ジャンプをしている間にスタートラインまで速やか に移動し、2
              人目の手押し車の準備をする。<br>▶1 人目の体の一部が麻袋ジャンプでスタートラインを越えた時 に、2 人目に声をかけて指示し、手押し車を始める。
            </p>
          </div>

          <dt>相撲</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高校生</p>
            <dd>人数</dd>
            <p></p>
            <dd>点数</dd>
            <p>なし</p>
            <dd>説明</dd>
            <p>相撲は前日までの予選のなかで人数を絞り、当日はトーナメント形式で優勝者を決めます。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              ☆トーナメント戦を行う。<br>
              ☆各組の出場者で最も成績の良かった者の成績で順位を決め、同じ成績の者がいるときは、当該者によって順位決定戦を行う。<br>
              ☆順位決定戦では、同成績者が2人のときはその2人の取組で決め、3人のときは巴戦の方式で1位を決めた後他の2人の取組で2位及び3位を決めるものとする。<br>
              【主 審】<br>1名 (前年度の生徒会長) 土俵内に位置し、競技を常に監視し、競技の開始、終了、勝敗、その他一切の競技に関する事項について判断する。<br>
              △土俵内に支障がないことを確認する。<br>●スタートの合図をする。<br>■終了の合図をする。<br>◇勝敗を決定する。
            </p>
          </div>

          <dt>戦略的棒奪い決勝</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>中2　中3</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:300pt　2位:200pt　3位:150pt　4位:120pt</p>
            <dd>説明</dd>
            <p>予選を勝ち抜いた各クラスの代表が勝負をします。決勝、3位決定戦まで行います。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              (予選と同じ)<br>
              【罰 則】<br>
              ●スタート前に走り出す者がいたときは、スタートをやり直す。<br>
              ▶棒の中央より敵陣側の部分に触れる、相手の競技者に触れる、棒で相手競技者の体を打つ、棒を曲げようとする、棒を押す、棒を立てるなどして水平でなくする、棒を振り回す、棒を南北方向
              以外の方向に向ける、棒を限界線の外に出すなどしたときは、当該競技者を退場、又は当該組の当該棒の取得を無効などとする。<br>
              ●競技参加者が過剰であった場合担当者が出場者を自由に減らす権限を持つ。<br>
              【主 審】<br>
              1名 指揮台に位置し、競技を常に監視し、競技の開始、終了、得点、勝敗その他一切の競技に関する事項について判断する。<br>
              ●位置について、用意、スタートの合図をする。<br>●スタート前に走り出す者がいないか監視し、いたときは、スタートをやり直す。<br>
              ■1分30秒経過時に合図する。<br>◇勝敗を決定する。<br>
              【副 審】<br>
              7名 (棒の運搬→審判) 担当の棒の周辺に位置し、当該棒及び戦いを常に監視する。 棒の中心が陣内まで引かれたかどうか判断し、得点を認める場合は競技終了後に棒を立てる。 <br>
              ▶棒の中央より敵陣側の部分に触れたり、相手の競技者に触れたり、棒で相手競技者の体を打ったり、突いたり、棒を曲げようとしたり、棒を押したり、棒を立てるなどして水平でなくしたり、棒を振り回したり、棒を南北方向以外の方向に引いたり、棒を限界線の外に出していないか監視し、当該反則行為があったときは規則を守るよう指導する。<br>
              ■試合終了の合図があった時、直ちに棒の位置(各陣に入ってい るか、入っていない場合、中央線と比べてどちらの陣に寄っているか)を判断し、棒をその場に置かせる。<br>
              ☆競技終了後棒が各陣に入ったときは、その陣の目標線上で指揮台の方を向きその棒を立てる。
            </p>
          </div>

          <dt>ラストラン</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高３</p>
            <dd>人数</dd>
            <p>各クラス20人　計80名</p>
            <dd>点数</dd>
            <p>各レース　1位:50pt　2位:35pt　3位:25pt　4位:20pt</p>
            <dd>説明</dd>
            <p>ラストランは1人100メートルずつが走るリレー競技です。一部・二部にわけて10人ずつのリレーを行います。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              ☆200m×10人リレーを2レース(本部前スタート 本部前ゴール)。<br>
              【罰 則】<br>
              ●フライングがあったときは、スタートをやり直す。<br>
              ▶他の競技者を妨害したり、トラックの線を踏み越えたり、テイクオーバーゾーンを越えたときは、当該組を最下位とし、又は失格させ得る。<br>
              ▶バトンを落としたときは、自ら拾う。トラックの内側に落としたときは、拾った後、落とした地点から再開する。<br>
              【主 審】<br>
              1名 指揮台に位置し、競技を常に監視し、スタート、走り、バトンパス、ゴールその他一切の競技に関する事項について判断する。時間計測について担当者を指揮監督する。<br>
              ●スタートの合図をする。<br>▶コーナーでの順位に基づいて本部側次走者のスタート順を決定する。<br>■1位及び最下位がゴールしたときに合図する。<br>◇順位を決定する。
              【副 審】<br>
              1名 本部反対側テイクオーバーゾーン周辺に位置し、競技を常に監視する。<br>
              ▶他者を妨害したり、トラックの線を踏み越えたりしていないか 監視する。<br>
              ▶コーナーでの順位に基づいて本部反対側次走者のスタート順を決定し、その通りに並ばせる。<br>
              ▶テイクオーバーゾーンを越えていないか監視する。<br>▶ゴールテープの準備を指揮する。<br>◇着順を認定する。<br>
              ☆終了後直ちに指揮台へ行って、着順を主審に報告する。ただし、着順が指揮台から見ても明らかでかつ、反則等がなかったときは、本部反対側テイクオーバーゾーン付近で指揮台の方を向き、手で大きく<br>○を作って主審に伝える。
            </p>
          </div>

          <dt>組対抗リレー</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>全学年</p>
            <dd>人数</dd>
            <p>中学生各クラス3人　高校生各クラス4人　計84人</p>
            <dd>点数</dd>
            <p>1位:100pt　2位:70pt　3位:50pt　4位:40pt</p>
            <dd>説明</dd>
            <p>1人が200mを走るリレー競技です。中学生の部と高校生の部の2部構成で行います。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              ☆中学、高校の2レース行う。<br>☆中学は200m×9人リレー、高校は200m×12人リレー(いずれも本部前スタート 本部前ゴール)。<br>■胴体がゴールラインを越えた時にゴールとする。<br>
              【罰 則】 <br>
              ●フライングがあったときは、スタートをやり直す。 <br>▶他の競技者を妨害したり、トラックの線を踏み越えたり、テイクオーバーゾーンを越えたときは、当該組を最下位とし、又は失格させ得る。<br>
              ▶バトンを落としたときは、自ら拾う。トラックの内側に落としたときは、拾った後、落とした地点から再開する。<br>
              【主 審】<br>
              1名 指揮台に位置し、競技を常に監視し、スタート、走り、バトンパス、ゴールその他一切の競技に関する事項について判断する。時間計測について担当者を指揮監督する。<br>
              ●スタートの合図をする。<br>▶コーナーでの順位に基づいて次走者のスタート順を決定する。<br>■1位及び最下位がゴールしたときに合図する。<br>◇順位を決定する<br>
            </p>
          </div>

          <dt>理事長杯決勝</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>中学生</p>
            <dd>人数</dd>
            <p>8人</p>
            <dd>点数</dd>
            <p>1位の選手のクラスに30点</p>
            <dd>説明</dd>
            <p>予選を勝ち抜いた8人が走ります。予選と同様1人400メートルです。</p>
            <dd>審判規則</dd>
            <p>【規 則】(予選に同じ)</p>
          </div>

          <dt>綱引き</dt>
          <div class="sub">
            <dd>学年</dd>
            <p>高3</p>
            <dd>人数</dd>
            <p>学年競技</p>
            <dd>点数</dd>
            <p>1位:300pt　2位:200pt　3位:150pt　4位:120pt</p>
            <dd>説明</dd>
            <p>綱引きでは各クラスがトーナメント形式で1位のクラスを決めます。</p>
            <dd class="judge">審判規則</dd>
            <p>【規 則】<br>
              ☆1対1トーナメント方式。<br>
              ●スタート前に綱に触れてはならない。<br>
              【罰 則】 (な し)<br>
              【主 審】1名<br>
              縄の中央に繋がれた旗の周辺に位置し、競技を常に監視し、競技の開始、終了、勝敗その他一切の競技に関する事項について判断する。競技の勝敗に係る判断を旗によって示す。<br>
              △手旗紅白1組を持つ。<br>
              △競技場内に支障がないことを確認する。<br>
              △綱を整える。<br>
              ■綱が片方に引かれたことによって、綱の中央に繋がれた旗が倒れた時に勝敗を判断し、勝った方の手旗を高く挙げる。<br>
            </p>
          </div>

          <dt>閉会式</dt>

        </dl>
      </div>
    </div>
  </div>
  <footer>
    <p>92nd Nada Sports Festival</p>
    <small>Copyright&copy;2021 Digital Team</small>
  </footer>
</body>

</html>
