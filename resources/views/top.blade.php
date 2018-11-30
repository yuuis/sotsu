@extends('layouts.app')

@section('title')
Main Page
@endsection

@section('contents')
<header id="gtco-header" class="gtco-cover" role="banner">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                <div class="display-t">
                    <div class="display-tc">
                        <div class="row">
                            <div class="col-md-5 text-center header-img animate-box">
                                <img src="images/cube.png" alt="Free HTML5 Website Template by FreeHTML5.co">
                            </div>
                            <div class="col-md-7 copy animate-box">
                                <h1>引越しを楽に</h1>
                                <p>引越しの全てがここで済みます。</p>
                                <p><a href="{{url('rooms')}}" class="btn btn-white">お部屋を探してみる</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="gtco-section gtco-testimonial gtco-gray">
    <div class="gtco-container container">

        <div class="row row-pb-sm">
            <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                <h2>Sotsuの引越しの流れ</h2>
                <p>引越しまでは4ステップです</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="https://suumo.jp/article/oyakudachi/wp-content/uploads/2017/09/uwamonokakaku_sub02.png" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <h2>お部屋を決める</h2>
                        <p>まずはお部屋を決めましょう。xxx件以上のお部屋が掲載されています。</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="http://magamit.com/wp-content/uploads/2017/03/furniture_2.png" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <h2>レンタルする家具を決める</h2>
                        <p>Sotsuでは家具をレンタルすることができます。家具をレンタルすると、新しく家具を買う必要もなければ、次の引越しの時に持ち帰る必要もありません。</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="https://4.bp.blogspot.com/-WC76L9341Vo/WTd4WkmtdtI/AAAAAAABEnI/czGKTcYwPjczZDkElyvkHImb8qc5JrukQCLcB/s800/bunbougu_fudepen.png"></div>
                    <blockquote>
                        <h2>お店にって契約をする</h2>
                        <p>実際にお店に行って内見をしましょう。実際にお部屋を見て気に入ったなら契約をします。</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="http://www.silhouette-ac.com/sozai/m/151/89/151895m.jpg" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <h2>入居する</h2>
                        <p>入居日には、家具が配置された状態のお部屋があなたを待っています。</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gtco-section gtco-products">
    <div class="gtco-container">
        <div class="row row-pb-sm">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>実際にお部屋を探してみましょう</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
            <p><a href="{{url('rooms')}}" class="btn btn-special">お部屋を探してみる</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $('nav ul li').eq(0).addClass('active');
    });
</script>
@endsection