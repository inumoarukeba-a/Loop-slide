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
    <section class="LoopSlide -loopSlide">
      <div class="LoopSlide__wrapper">
        <ul class="LoopSlide__list">
          <?php for($i = 0; $i < 3; $i++):?>
          <li class="LoopSlide__item">
            <img
              class="LoopSlide__image"
              src="http://placehold.jp/320x320.png?text=<?php echo $i?>"
              srcset="http://placehold.jp/640x640.png?text=<?php echo $i?> 2x,
                      http://placehold.jp/320x320.png?text=<?php echo $i?> 1x"
              alt="" width="320" height="320"
              loading="lazy">
          </li>
          <?php endfor;?>
        </ul>
      </div>
    </section>
  </main>

<?php include 'footer.php'; ?>
