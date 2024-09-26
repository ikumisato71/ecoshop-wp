<?php
/*
Template Name: home

*/
?>
<?php get_header();?>

<main>
      <!-- メインビジュアル -->
      <section id="main-visual">
        <div class="main-massage">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/mv-text.png" alt="メッセージ"/>
        </div>
        <div class="mv-photo">
        <div class="single-item">
            <div><img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-head.jpg" alt="木の芽" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img01s.png" alt="雑貨" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img02s.png" alt="洋服" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img03s.jpg" alt="石鹸" /></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/image/PC/FV-img04s.jpg" alt="お皿" /></div>
          </div>
          <div class="mv-photo-mini">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (1).jpg" alt="水滴" />
          </div>
        </div>
      </section>
      <!-- アバウト -->
      <section id="about">
        <div class="section-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/A.png" alt="aboutロゴ" />
        </div>
        <div class="about-top-wrap">
          <div class="about-top-left">
            <h1>
              『サステナブルな選択』で <br />地球にもあなたにも優しい喜びを
            </h1>
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-img.jpg" alt="手のひらと木" />
          </div>
          <div class="about-top-right">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (3).jpg" alt="石鹸など" />
            <p>
              私たちは、お客様との長いお付き合いを大切にし、
              環境に優しいサステナブルな商品を通じて、
              再生可能資源やリサイクル素材を活用した選択肢を提供しています。
              お客様の満足が私たちの励みとなり、
              そのご満足がさらに良いサービスを生み出すと信じています。
              共に持続可能な未来を築いていくために、
              日々新しい挑戦を続けていきます。
            </p>
          </div>
        </div>
      </section>

      <div class="about-end">
        <div class="about-end-left1">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (4).jpg" alt="砂浜" />
          <div class="about-end-left2">
            <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img01.jpg" alt="雑貨" />
            <p>
              私たちのビジョンは、人や環境、
              社会に良い影響を与える活動を応援し、
              みんながもっと主体的な人生を楽しめるように お手伝いすることです。
              これからも、世界中の素敵なアイテムに光を当てて、
              心が温まる商品をお届けしていきます。
            </p>
          </div>
        </div>
        <div class="about-end-right">
          <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img03.jpg" alt="石鹸" />
        </div>
      </div>

      <!-- プロダクト -->
      <section id="product">
        <div class="section-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/P.png" alt="productロゴ" />
        </div>

        <div class="product-top">
          <div class="product-top-left">
            <h1>
              お客様の理想の<br />
              サステナブルライフに寄り添います
            </h1>
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/beauty.jpg" alt="緑の中のボトル" />
          </div>
          <div class="product-top-right">
            <p>
              環境に優しいサステナブルな商品をカテゴリー別にご紹介します。<br />
              コスメから洋服、食べ物まで、自然由来の素材やリサイクル資源を使用した、<br />
              地球にもお肌にも優しいアイテムを厳選しました。<br />
              各カテゴリーごとに、それぞれの商品が持つ特徴などを解説しています。<br />
              あなたの日常に、持続可能な選択を取り入れてみませんか？
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (2).jpg" alt="素材" />
          </div>
        </div>

        <h5><img src="<?php echo get_template_directory_uri(); ?>/image/PC/Beauty ーオーガニックコスメー_.png" alt="ビューティーロゴ" /></h5>
        <div class="product-center">
          <div class="product-center-left">
            <p>
              自然由来のオーガニック成分を活用し、
              お肌に優しいケアを提供しながら、
              地球にも優しい選択をお届けします。<br />
              オーガニックコスメは、 天然由来の成分を使用しているため、
              肌に優しく、特に敏感肌の方にも 適した製品です。<br />
              これらのコスメは、 環境に配慮した栽培方法と
              製造プロセスを採用しており、 農薬や化学肥料を使用せず、
              持続可能な方法で育てられた植物を 原料としています。
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (2).jpg" alt="美容クリーム" />
          </div>
          <div class="product-center-center">
            <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (3).jpg" alt="シャンプー" />
          </div>
          <div class="product-center-right">
            <div class="product-right-photo">
              <img src="<?php echo get_template_directory_uri(); ?>/image/SP/FV-img02.jpg" alt="洋服" />
            </div>
            <div class="product-right-text">
              <h5>
                <img src="<?php echo get_template_directory_uri(); ?>/image/PC/Fashion ーオーガニックコットンー_.png"alt="ファッションロゴ"  />
              </h5>
              <p>
                オーガニックコットンやリサイクル素材を使用し、
                環境に優しい衣類で持続可能なライフスタイルを実現します。<br />
                サステナブルファッションの特徴としては、
                オーガニックコットンをはじめ素材の質がよくて長く愛用できるもの、
                廃棄物をリサイクルしたものなどが挙げられます。<br />
                持続可能性に配慮し、サステナブルファッションでは
                化学肥料や農薬を使わず手間暇をかけて栽培する
                オーガニックコットンが多く取り入れられています。
              </p>
            </div>
          </div>
        </div>

        <div class="product-end">
          <div class="product-end-left">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/image/PC/Food ーオーガニックフードー_.png" alt="フードロゴ" /></h5>
            <p>
              オーガニックやフェアトレードの食材を通じて、
              環境に優しいライフスタイルをサポート。
              エコフレンドリーな暮らしをお手伝いします。<br />
              サステナブルフードは持続可能を目標とし、
              自然環境や労働環境など、<br />
              私たちの暮らしへと関わることに配慮した食品のことです。
              <br />
              さまざまな食品産業において、
              自然環境や社会にできるだけ負担をかけない
              取り組みがおこなわれています。
            </p>
          </div>
          <div class="product-end-right">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/food.jpg" alt="ジャム" />
          </div>
        </div>
        <div class="online">
          <h2>Online Shop</h2>
          <a href="shop.html" class="online-btn"
            ><img src="<?php echo get_template_directory_uri(); ?>/image/PC/arrow2.png" alt="矢印" 
          /></a>
        </div>
      </section>
      <!-- ニュース -->
      <div class="section-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/N.png" alt="newsロゴ" />
      </div>
      <section id="news">
        <div class="news-text">
          <div class="news-text-left">
            <h4>お知らせ</h4>
            <div class="news-text-left-inner">
              <ul>
                <li>東急ハンズ 横浜に出店します</li>
                <li>そごう 横浜に出店します</li>
                <li>年末年始休みのご案内</li>
              </ul>
            </div>
          </div>
          <div class="news-text-right">
            <h4>トピックス</h4>
            <div class="news-text-right-inner">
              <ul>
                <li>
                  脱炭素社会 産学一体」 京都・大阪・神戸 ３大学シンポジウムで
                  日経新聞に掲載されました
                </li>
                <li>
                  G7広島サミット2023にて
                  環境配慮が低い紙パック(紙容器)ミネラルウォーターの全面的採用
                </li>
                <li>LINEヤフーのメディアリリースに掲載されました</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- コンタクト -->
      <section id="contact">
        <div class="section-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/C.png" alt="contactロゴ" />
        </div>
        <div class="contact-text">
          <button class="contact-btn">  お問い合わせはこちらから</button>
            <p> 弊社へのお問い合わせは、フォームより受け付けております。
            確認後、折り返しご連絡させていただきます。
          </p>
        </div>
        <div class="contact-photo">
          <div class="contact-photo-top">
            <div class="contact-photo-top1">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-img(2).png" alt="海" />
            </div>
            <div class="contact-photo-top2">
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/cta.jpg" alt="海と建物" />
            </div>
          </div>

          <div class="contact-photo-top3">
            <img src="<?php echo get_template_directory_uri(); ?>/image/PC/about-slider (5).jpg" alt="風力発電" />
          </div>
        </div>
        <div class="contact-photo-end">
          <img src="<?php echo get_template_directory_uri(); ?>/image/PC/contact-head.jpg" alt="子供達" />
          <p>
            私たちが紹介するのは、環境に優しく、使い終わったら土に還るもの、<br />
            人権や労働環境に配慮したアイテム、大量生産ではなく手作りされた商品、そして地域の伝統を大切にした製品です。<br />
            一緒に、より良い未来を作るための一歩を踏み出しましょう。
          </p>
        </div>
      </section>
      <!-- 会社概要 -->
      <div class="company-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/image/PC/logo2.jpg" alt="ロゴ" />
      </div>
      <section id="company">
        <h3>会社概要</h3>
        <h6>
          会社名：株式会社Eco Shop <br />
          所在地：〒000-0000　<br />
          東京都港区芝公園0-0-0 <br />
          設立：2015年12月10日 <br />
          代表取締役：田中　真美子 <br />
          事業内容：オーガニック食品の生産、サステナブル商品の開発、オーガニック食品・サステナブル商品の販売
        </h6>
        <p>
          サステナブル商品は、環境への影響を抑え、倫理的に生産されています。
          <br />
          再生可能資源やリサイクル素材を使用し、持続可能な未来を支援します。
          <br />
          受付時間 : 火曜日を除く 10：00〜18：00 <br />
        </p>
      </section>
      <?php get_footer(); ?>