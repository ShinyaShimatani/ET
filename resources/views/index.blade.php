@extends('layouts.app')

@section('title','Neo World')

@section('content')

<main role="main">

  <section class="jumbotron text-center">
  　<img class="logo" src="image/旅のはじまり.jpg" alt="旅の始まり" width="60%" height="600">
    <div class="container">
      <font face="Verdana">
      <h1>Neo World</h1>
      </font>
      <p class="lead text-muted">
      海外旅行が難しくなっている今ですが、気軽に異国情緒を味わいませんか<br>
      新感覚な旅へ、一歩踏み出してみませんか
      </p>
      <div class="btn loginPage_contents_btn">
     <a class="text-green" href="{{ route('login') }}">メールアドレスでログインする</a><br>
     <a class="text-green" href="{{ route('register') }}">アカウントを新規登録する</a>
     </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="shop" src="image/shop A.jpg" alt="shop A" width="100%" height="225">
            <div class="card-body">
              <strong>舞台：ブラジル</strong><br>
              <p>Perfect Coffee</p>
              <p class="card-text">本来であれば香り高き珈琲であなたをお出迎えします。異国情緒の中で、贅沢なひとときをオンラインでお届けします。</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="shop" src="image/shop B.jpg" alt="shop B" width="100%" height="225">
            <div class="card-body">
            <strong>舞台：ドイツ</strong><br>
              <p>Guten Morgen</p>
              <p class="card-text">ドイツにはビールとソーセージ以外にもたくさん魅力あります。陽気な常連さんとのコミュニケーションもお楽しみください。</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="shop" src="image/shop C.jpg" alt="shop C" width="100%" height="225">
            <div class="card-body">
            <strong>舞台：ベトナム</strong><br>
              <p>Ho Chi Minh</p>
              <p class="card-text">ベトナムの今を伝えたい。定番料理のレシピも実演公開します。あなたもベトナムにプチトリップしませんか</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="shop" src="image/shop D.jpg" alt="shop D" width="100%" height="225">
            <div class="card-body">
            <strong>舞台：イタリア</strong><br>
              <p>Napolitano</p>
              <p class="card-text">色鮮やかなスイーツと美人マスターがお出迎え。女性に大人気のスイーツ専門店です</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="shop" src="image/shop E.jpg" alt="shop E" width="100%" height="225">
            <div class="card-body">
            <strong>舞台：インド</strong><br>
              <p>King of Carry</p>
              <p class="card-text">オンラインで人気のスパイスも販売中。一番人気メニューのレシピもお教えします</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="shop" src="image/shop F.jpg" alt="shop " width="100%" height="225">
            <div class="card-body">
            <strong>舞台：日本</strong><br>
              <p>来るもの拒まず(新宿店)</p>
              <p class="card-text">大衆酒場に訪れた気分を。ユニークな店主と他愛のない会話を楽しみませんか。</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">垣間見る</button>
                </div>
                <small class="text-muted">1時間￥500～</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

@endsection