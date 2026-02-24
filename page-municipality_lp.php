<?php get_header(); ?>
<div class="municipality_lp">
<!-- FV -->
<section id="fv">
  <div class="inner">
    <div class="txtArea textLeft">
      <div class="sub_ttl">導入から運用までトータル支援で簡単クラウド化<img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/fv_bg.png" alt="導入から運用までトータル支援で簡単クラウド化" /></div>
      <h1>自治体DXで、<br>業務をもっとシンプルに</h1>
      <div class="btnArea">
        <p>神奈川県DX推進アドバイザー監修</p>
        <a href="#contact" class="btn" title="無料相談・資料請求はこちら">無料相談・資料請求はこちら</a>
      </div>
    </div>
    <div class="imgArea textBottom">
      <img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/fv_img.png" alt="Worklog" />
    </div>
  </div>
</section>
<!-- お取引実績 -->
<section id="customer">
    <p>多数の自治体へのご支援をしております</p>
    <div class="slider">
      <div class="first"><a href="https://www.mhlw.go.jp/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/customer01.png" /></a></div>
      <div><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/customer_b.png"/></div>
    </div>
</section>
<!-- お悩み -->
<section id="problem">
  <div class="inner">
    <h2><span>
        <div class="hukidashi">自治体業務のデジタル化・DX化を</div><br class="for_sp">進めたいあなた
      </span>こんなお悩みありませんか？</h2>
    <ul class="textBottom">
      <li>紙の手続きをデジタル化して業務の効率化を図りたい</li>
      <li>本業が忙しくて業務の効率化は後回しになっている</li>
      <li>組織内にDX化をリードできる人材がおらず、何から手をつけていいかわからない</li>
      <li>クラウドサービスを導入した後、本当に業務に活かせるのか不安</li>
      <li>クラウド化に興味はあるけど、限られた予算内で導入できるのか心配</li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/problem_img.png" alt="お悩み" /></li>
    </ul>
  </div>
</section>
<!-- 全て解決 -->
<section id="solution">
  <div class="inner">
    <h2><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/govlog.svg" alt="Govlog" /><span>で始める、自治体DX体験</span></h2>
    <ul>
      <li class="textLeft">
        <div class="txtAtea">
          <div class="ttl">Govlogなら最短1週間で導入可能！</div>
          <p>DXってむずかしそう…そんな不安も、Govlogなら解消。<br>職員の方が自分たちの手で運用できる仕組みを、<span>たった1週間で導入できます。</span><br>はじめての自治体DXも、<span>迷わず始められる安心サポート付き。</span></p>
        </div>
        <div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/solution01.png" alt="Worklogならkintoneが最大1年無料" /></div>
      </li>
      <li class="textRight">
        <div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/solution02.png" alt="神奈川県DX推進アドバイザー在籍" /></div>
        <div class="txtAtea">
          <div class="ttl">神奈川県DX推進アドバイザー在籍<br>現場の課題の洗い出しからサポート可能</div>
          <p>弊社はkintoneの構築を始めとした<span>ノーコードツールのスペシャリスト</span>集団です。<br>エンジニアだけでなく、<span>神奈川県DX推進アドバイザーも在籍</span>しており、ヒアリングや要件定義を丁寧に行うことで、業務に沿った本質的な課題解決に取り組むことができます。</p>
        </div>
      </li>
      <li class="textLeft">
        <div class="txtAtea">
          <div class="ttl">設計から納品後の対応までトータル支援<br>本業に集中できます</div>
          <p><span>業務の効率化、導入から運用・保守まで、</span>あらゆる知見を駆使した最適な設計を施します。<br>
          さらに納品して終わりではなく、<span>納品後の運用サポートも見据えた開発</span>を行っており、納品後の修正や追加開発も柔軟に対応致します。<br>
          投資したコストに対して<span>無駄のない最大限のインパクト</span>を生み出すことが可能です。</p>
        </div>
        <div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/solution03.png" alt="設計から納品後の対応までトータル支援" /></div>
      </li>
    </ul>
  </div>
</section>
<!-- Govlogの特徴 -->
<section id="feature">
  <div class="inner">
    <p class="label">
      <span>自治体業務を、安全に・かんたんに</span>
    </p>
    <h2><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/govlog.svg" alt="gvlog" class="logo" />の特徴</h2>
    <?php
    // 1. 特徴（Feature）データの定義
    $features = [
        [
            'img'   => 'feature01_pc.png',
            'title' => '安全性と信頼性に支えられたクラウド基盤',
            'desc'  => '政府認定の ISMAP・ISO 認証を取得。<br>国内データセンターで安全運用し、<br>細かな権限管理にも対応。'
        ],
        [
            'img'   => 'feature02_pc.png',
            'title' => 'LGWAN対応で自治体業務を<br>オンライン化',
            'desc'  => '自治体専用ネットワークに対応。<br>住民票申請などの行政手続きを<br>クラウドで完結できます。'
        ],
        [
            'img'   => 'feature03_pc.png',
            'title' => 'ノーコードで自由に<br>業務アプリを構築できます',
            'desc'  => 'プログラミング不要でアプリを構築。<br>現場主導で業務を最適化し、<br>継続的な改善が可能。'
        ],
        [
            'img'   => 'feature04_pc.png',
            'title' => '外部サービスとの連携で<br>業務を効率化',
            'desc'  => 'LINE・メール・外部サービスなど、様々なクラウドサービスと連携し、効率的な利用ができます。'
        ],
        [
            'img'   => 'feature05_pc.png',
            'title' => '不正ログイン確認と<br>監査ログ即時通知で安心運用',
            'desc'  => '監査ログ・ログイン履歴・変更履歴を管理し、重大な操作は即時通知でリスクを最小化。'
        ],
        [
            'img'   => 'feature06_pc.png',
            'title' => '操作ログ・変更履歴で<br>確実な情報管理',
            'desc'  => '誰が・いつ・どのデータを変更したかを記録し、誤操作も変更前に復元できる安心設計。'
        ],
    ];

    // 画像パスの共通部分
    $img_dir = get_template_directory_uri() . '/images/municipality_lp/';
    ?>

    <ul class="textLeft">
        <?php foreach ($features as $item): ?>
            <li>
                <div class="imgArea">
                    <img src="<?php echo $img_dir . $item['img']; ?>" class="change" alt="<?php echo esc_attr(strip_tags($item['title'])); ?>" />
                </div>
                <div class="txtArea">
                    <span><?php echo $item['title']; // タイトル内の<br>を活かすためエスケープなし（またはwp_kses等） ?></span>
                    <?php echo $item['desc']; // 説明文内の<br>を活かすためそのまま出力 ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>
<!-- 導入事例 -->
<section id="case">
  <div class="inner">
    <h2>導入事例</h2>
    <?php
    // 1. データの配列化
    $cases = [
        [
            'title' => '各種申請手続き',
            'img'   => 'case01.png',
            'desc'  => '補助金や後援など、さまざまな申請業務を一括管理。'
        ],
        [
            'title' => '公共施設・イベント',
            'img'   => 'case02.png',
            'desc'  => '施設の利用やイベント予約を一括で管理・運営。'
        ],
        [
            'title' => '検診・健診予約',
            'img'   => 'case03.png',
            'desc'  => '健診の予約受付から対象者管理までを一元化'
        ],
        [
            'title' => '防災機能',
            'img'   => 'case04.png',
            'desc'  => '避難所情報や備蓄品を管理し、災害時の対応を支援。'
        ],
        [
            'title' => '粗大ごみ',
            'img'   => 'case05.png',
            'desc'  => '収集申込や処理状況の確認をスムーズに行える仕組み。'
        ],
        [
            'title' => '町の不具合報告',
            'img'   => 'case06.png',
            'desc'  => '道路破損や街灯不具合を共有し、迅速な対応を実現。'
        ],
        [
            'title' => '公用車管理',
            'img'   => 'case07.png',
            'desc'  => '公用車の予約や整備、運行記録をまとめて管理。'
        ],
        [
            'title' => '備品・会議室管理',
            'img'   => 'case08.png',
            'desc'  => '備品や会議室の利用状況を可視化し、重複を防止。'
        ],
        [
            'title' => '人事',
            'img'   => 'case09.png',
            'desc'  => '勤怠や休暇など職員情報を一元管理し、業務を効率化。'
        ],
        [
            'title' => '業務管理',
            'img'   => 'case10.png',
            'desc'  => '日々のタスクや進捗を共有し、チーム連携を強化。'
        ],
        [
            'title' => '配信・アンケート',
            'img'   => 'case11.png',
            'desc'  => 'お知らせ配信やアンケート回収を簡単に実施・集計。'
        ],
        [
            'title' => '問い合わせ',
            'img'   => 'case12.png',
            'desc'  => '住民や職員からの問い合わせを一括管理。'
        ],
        [
            'title' => 'コミュニティ運営',
            'img'   => 'case13.png',
            'desc'  => '地域団体やボランティア活動を支援。メンバー管理や情報共有を簡単に。'
        ],
        [
            'title' => 'スポット検索',
            'img'   => 'case14.png',
            'desc'  => '公共施設や避難所などを地図から検索。目的地までのルートもわかりやすく。'
        ],
        [
            'title' => 'AI',
            'img'   => 'case15.png',
            'desc'  => 'ChatGPTやGemini等のAIを活用し、議事録の要約や庁内チャットボットを実装。'
        ],

    ];

    // 画像パスのベース部分を変数化しておくとスッキリします
    $img_path = get_template_directory_uri() . '/images/municipality_lp/';
    ?>

    <ul class="textBottom">
        <?php foreach ($cases as $case): ?>
            <li>
                <div class="img">
                  <img src="<?php echo $img_path . $case['img']; ?>" alt="<?php echo esc_attr($case['title']); ?>" />
                </div>
                <dl>
                    <dt><?php echo esc_html($case['title']); ?></dt>
                    <dd><?php echo nl2br(esc_html($case['desc'])); ?></dd>
                </dl>
            </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>
<!-- 実績紹介 -->
<section id="introduction">
  <div class="inner">
    <h2>
      <span>実績紹介</span>
      <a href="//www.worklog-inc.com/works/" class="btn for_pc"><span>実績をもっと見る</span><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/arrow.svg" alt="" /></a>
    </h2>
    <?php
      // 1. 実績紹介（Introduction）データの定義
      $introductions = [
          [
              'img'  => 'introduction01.png',
              'title'  => '神奈川県：発熱等診療予約システム',
              'text' => '神奈川県が、各医療機関の予約を代行するための管理システム。kintoneとLINEを組み合わせ、920万人が活用するサービスを開発。',
              'link' => '/interview-kanagawa01/',
          ],
          [
              'img'  => 'introduction02.png',
              'title'  => '株式会社アーシャルデザイン',
              'text' => '企業と求職者の情報をkintoneに集約し、人材紹介業務のシステム化を実現！',
              'link' => '/interview-a-cial/',
          ],
          [
            'img'  => 'introduction03.png',
            'title'  => '神奈川県：SDGsパートナー管理システム',
            'text' => '神奈川県が、SDGsパートナーの募集、応募、各種ミーティングを管理するシステム。kintoneとトヨクモ製品を組み合わせ汎用性の高いマッチング…',
            'link' => '/interview-kanagawa03/',
          ],
          [
            'img'  => 'introduction04.png',
            'title'  => '株式会社IDOBATA',
            'text' => 'kintone・AWSを活用した、学会情報を管理し、1クリックで要旨集を作成できる学会管理システム「MaAC」を開発。',
            'link' => '/interview-idobata/',
          ],
          [
            'img'  => 'introduction05.png',
            'title'  => '令和7年度広域災害・救急医療情報システム「EMIS」事業における技術提供を開始',
            'text' => '日本エマージェンシーアシスタンス株式会社（EAJ）が厚生労働省から受託した 「令和7年度EMISサービス提供・運用業務」の一部機能開発を担当。',
            'link' => '/emis2025/',
          ],
          [
            'img'  => 'introduction06.png',
            'title'  => '【ウラ話】明日県庁に来い？無名のワークログが神奈川県のコロナ対策に携わった謎に迫る！',
            'text' => '2020年、ダイヤモンド・プリンセス号で国内初の感染が確認され、 神奈川県は先駆けて対策に着手。ワークログはその支援を4年間継続しました。無名だった同社がコロナ対策に関わるまでの経緯を取材いただきました。',
            'link' => '/kanagawa-model/',
          ],
          [
            'img'  => 'introduction07.png',
            'title'  => '【自治体DX】ワークログと隠岐島前#町村による地域情報化・DX推進に係る連携協定を締結',
            'text' => '島根県海士町・西ノ島町・知夫村と連携し、 地域DX推進と行政サービスの効率化に関する協定を締結。',
            'link' => '/oki-dx/',
          ],
          [
            'img'  => 'introduction08.png',
            'title'  => '【令和6年能登半島地震】被災地域のIT支援を無償で実施',
            'text' => '石川県立中央病院の現場調査を行い、 行政や医療機関と連携しながら復旧支援を継続。',
            'link' => '/notojishin/',
          ],

      ];

      // 画像パスの共通部分
      $img_dir = get_template_directory_uri() . '/images/municipality_lp/';
      ?>
      <div class="slide-wrap">

        <div class="introduction_slick slick">
          <div class="slick__inner">
            <div class="slick__container">
              <div class="slick__images introduction_area">
                <?php foreach ($introductions as $index => $item): ?>
                  <div class="introduction_box slick__image">
                    <a href="<?php echo $item['link']; ?>">
                      <img src="<?php echo $img_dir . $item['img']; ?>" alt="実績紹介<?php echo $index + 1; ?>" />
                      <h3><?php echo $item['title']; ?></h3>
                      <p class="text">
                          <?php echo $item['text']; // 改行タグを含むためそのまま出力 ?>
                      </p>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div><!-- introduction_slick -->
      </div>
      <a href="//www.worklog-inc.com/works/" class="btn for_sp"><span>実績をもっと見る</span><img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/arrow-w.svg" alt="" /></a>

  </div>
</section>
<!-- CTA -->
<section id="cta">
  <div class="inner">
    <span class="label">
    <img src="<?php echo get_template_directory_uri(); ?>/images/municipality_lp/cta_label.png" alt="kintone" />
    </span>
    <p class="text">なにから手をつけていいかわからない！など、<br>どんなことでもお気軽にご相談ください。</p>
    <a href="#contact" class="btn">無料相談・資料請求はこちら</a>
  </div>
</section>
<!-- よくあるご質問 -->
<section id="qa">
  <div class="inner">
    <h2>よくあるご質問</h2>
    <?php
    $faqs = [
        [
            'question' => 'Govlogで個人情報を扱うことに問題はありませんか？',
            'answer'   => 'Govlogは政府情報システムのためのセキュリティ評価制度（ISMAP）を取得しており、セキュアなサービスです。IP制限や2要素認証も設定できるため、よりセキュアな環境を求める場合はご相談ください。'
        ],
        [
            'question' => 'Govlog導入にあたり、最初に何から始めたらよいですか？',
            'answer'   => '現在の業務の課題を洗い出し、Govlog導入後の業務フローを設計することから始めましょう。この業務分析という工程からご支援します。'
        ],
        [
            'question' => '月間の利用料はどのくらいですか？',
            'answer'   => '1ユーザーあたり1,080円/月（ご契約は10人〜となります）ですが、自治体職員全員が利用する前提ですとお安く提供できるキャンペーンもございます。'
        ],
        [
            'question' => 'トライアルでの利用は可能ですか？',
            'answer'   => '内容によりますがご相談は可能です。'
        ],
        [
            'question' => '庁舎に来てもらうことはできますか？',
            'answer'   => '原則リモートでのご支援となりますが、ご相談は可能です。'
        ],
        [
          'question' => '開発費の予算がないのですが…',
          'answer'   => 'ノーコードツールになりますので、将来的には自治体で内製化できるように運用支援や教育までご支援します。また、総務省の地域活性化企業人制度を活用した実績もございます。'
        ],

    ];
    ?>
    <div class="qa__box textBottom">
      <dl>
        <?php foreach ($faqs as $faq): ?>
          <dt class="js-qa__parent">
            <div class="pageSubTitle2"><?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?></div>
            <div class="crossBar"></div>
          </dt>
          <dd class="qa__child">
            <?php echo nl2br(htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8')); ?>
          </dd>
        <?php endforeach; ?>
      </dl>
    </div>
  </div>
</section>
<!-- 無料相談 -->
<section id="contact" class="contact">
    <div class="contact__inner">
      <h2>無料相談・資料請求</h2>
      <p class="contact__text">
      今ならkintoneの利用が最大1年間無料
      </p>
      <div class="form">
        <?php echo do_shortcode( '[contact-form-7 id="3707" title="【自治体向けLP】無料相談・資料請求"]' ); ?>
      </div>
    </div>
</section>
<?php get_footer(); ?>
