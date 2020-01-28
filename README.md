# Loop-Slide

CSS で動くループスライダーです。
なめらかに動いてくれたらいいなぁって思って作りました。

## Features

- リンク貼れます。
- hover したらストップも出来ます。
- スマホでもええ感じになってくれればいいなぁ。微調整必要かもです。
- その他、逆再生や複数スライダー設置など HTMLxCSS なので融通ききます。（わからなければ聞いてください）

## How to

### 1. loop-slide.scss をインポート

mixin と function も使っているので、
足りない場合は、mixin.scss と function.scss ともインポートしてください。
（ほとんどの場合は気にしなくて ok です。）

### 2. @include の設定

```
.LoopSlide {
  @include loop-slide(
    $element: &,
    $item-width: 320,
    $item-height: 320,
    $item-margin: 0,
    $duration: 13,
    $hover-stop: true,
    $sp-mag: 0.5
  );
}
```

### 3. HTML を記述

```
<section class="LoopSlide -loopSlide">
  <div class="LoopSlide__wrapper">
    <ul class="LoopSlide__list">
      <li class="LoopSlide__item">
        <img
          class="LoopSlide__image"
          src="http://placehold.jp/320x320.png?text=01"
          srcset="http://placehold.jp/640x640.png?text=01 2x,
                  http://placehold.jp/320x320.png?text=01 1x"
          alt="" width="320" height="320"
          loading="lazy">
      </li>
      <li class="LoopSlide__item">
        <img
          class="LoopSlide__image"
          src="http://placehold.jp/320x320.png?text=02"
          srcset="http://placehold.jp/640x640.png?text=02 2x,
                  http://placehold.jp/320x320.png?text=02 1x"
          alt="" width="320" height="320"
          loading="lazy">
      </li>
      <li class="LoopSlide__item">
        <img
          class="LoopSlide__image"
          src="http://placehold.jp/320x320.png?text=03"
          srcset="http://placehold.jp/640x640.png?text=03 2x,
                  http://placehold.jp/320x320.png?text=03 1x"
          alt="" width="320" height="320"
          loading="lazy">
      </li>
    </ul>
  </div>
</section>
```
