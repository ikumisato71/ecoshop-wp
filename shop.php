<?php get_header();?>

    <main>
      <div class="item">
        <!-- サイドバー -->
        <div class="sidebar">
          <div class="category">
            <div class="section_title_container category_title">
              <h2>CATEGORY</h2>
              <div class="section_subtitle">商品カテゴリー</div>
            </div>
            <div class="sidebar_categories">
              <ul>
                <li><a href="#item-top">ビューティー</a></li>
                <li><a href="#item-center">フード</a></li>
                <li><a href="#item-end">ファッション</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- 商品-->
        <div class="items-center">
          <div id="item-top">
            <h5><img src="<?php echo get_template_directory_uri(); ?>/image/PC/Beauty ーオーガニックコスメー_.png" /></h5>
            <div class="beauty-wrapper">
              <div class="item-beauty">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (3).jpg" alt="シャンプー" />
                <h6>エコナチュールシャンプー</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  軽やかっで爽やかな使用感、<br />
                  天然成分で頭皮を優しくケアします。<br />
                  製造地：スペイン
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-beauty">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (2).jpg" alt="クリーム" />
                <h6>グリーンレーヴ<br>フェイスクリーム</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  高保湿で敏感肌にも優しい<br />天然成分配合。<br />
                  製造地：フランス
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-beauty">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (1).jpg" alt="美容乳液" />
                <h6>ピュアリーフスムースミルク</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  深い潤いと低刺激処方、<br />自然由来の成分。<br />
                  製造地：イタリア
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
            </div>
          </div>

          <div id="item-center">
            <h5>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/Food ーオーガニックフードー_.png" />
            </h5>
            <div class="food-wrapper">
              <div class="item-food">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (8).jpg" alt="チョコレート" />
                <h6>
                  ナチュラルカカオ<br />
                  チョコレート
                </h6>
                <p>¥<span>1,000</span>（税込）</p>
                <p>
                  リッチで深い味わい、天然素材で<br />健康的なおやつです。<br />
                  製造地：ベルギー
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-food">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (7).jpg" alt="クッキー" />
                <h6>エコスイートクッキー</h6>
                <p>¥<span>1,000</span>（税込）</p>
                <p>
                  自然な甘さと香ばしさ、天然素材で<br />作られたヘルシーなおやつです。<br />
                  製造地：フランス
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-food">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (9).jpg" alt="コーヒー豆" />
                <h6>グランドリッチコーヒー豆</h6>
                <p>¥<span>1,000</span>（税込）</p>
                <p>
                  深い香りを豊かな味わい、<br />天然の風味が楽しめます。<br />
                  製造地：コロンビア
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
            </div>
          </div>

          <div id="item-end">
            <h5>
              <img src="<?php echo get_template_directory_uri(); ?>/image/PC/Fashion ーオーガニックコットンー_.png" />
            </h5>
            <div class="fashion-wrapper">
              <div class="item-fashion">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (5).jpg" alt="帽子" />
                <h6>エコリーフハット</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  軽量で通気性の良いデザイン、<br />天然素材で快適な着用感。<br />
                  製造地：メキシコ
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-fashion">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (4).jpg" alt="カーディガン" />
                <h6>ナチュラルカーディガン</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  軽やかでやわらかい着心地、<br />天然素材で優しく肌にフィット。<br />
                  製造地：ポルトガル
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
              <div class="item-fashion">
                <img src="<?php echo get_template_directory_uri(); ?>/image/shop/item (6).jpg" alt="パンツ" />
                <h6>ナチュラルフローパンツ</h6>
                <p>¥<span>2,000</span>（税込）</p>
                <p>
                  快適で動きやすいデザイン、<br />天然素材で肌に優しい。<br />
                  製造地：トルコ
                </p>
                <button class="shop-btn">カートに入れる</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php get_footer(); ?>