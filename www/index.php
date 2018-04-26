<?php
  //共通
  require_once substr($_SERVER['SCRIPT_FILENAME'], 0, -strlen($_SERVER['SCRIPT_NAME'])).'/common/includes/init.php';

  //メタディスクリプション
  $description = '';

  //メタキーワード
  $keywords = '';

  //Facebook　全ページ共通の場合は空白にしてください
  $fbimage = '';

  //タイトル
  $title = '';

  //css追加
  $ex_tag_css = '';

  //js追加
  $ex_tag_js = '';

?>
<?php include 'header.php'; ?>

  <!-- Main
  −−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−−− -->
  <main class="main" role="main">
    <section class="loop-slide">
      <div class="loop-slide__list-wrap">
        <ul class="loop-slide__list">
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=01"
              srcset="http://placehold.jp/640x640.png?text=01 2x,
                      http://placehold.jp/320x320.png?text=01 1x"
              alt="" width="320" height="320">
          </li>
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=02"
              srcset="http://placehold.jp/640x640.png?text=02 2x,
                      http://placehold.jp/320x320.png?text=02 1x"
              alt="" width="320" height="320">
          </li>
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=03"
              srcset="http://placehold.jp/640x640.png?text=03 2x,
                      http://placehold.jp/320x320.png?text=03 1x"
              alt="" width="320" height="320">
          </li>
        </ul>
        <ul class="loop-slide__list -clone">
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=01"
              srcset="http://placehold.jp/640x640.png?text=01 2x,
                      http://placehold.jp/320x320.png?text=01 1x"
              alt="" width="320" height="320">
          </li>
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=02"
              srcset="http://placehold.jp/640x640.png?text=02 2x,
                      http://placehold.jp/320x320.png?text=02 1x"
              alt="" width="320" height="320">
          </li>
          <li class="loop-slide__item">
            <img
              src="http://placehold.jp/320x320.png?text=03"
              srcset="http://placehold.jp/640x640.png?text=03 2x,
                      http://placehold.jp/320x320.png?text=03 1x"
              alt="" width="320" height="320">
          </li>
        </ul>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
