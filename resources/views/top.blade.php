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
                                <h1>売り文句</h1>
                                <p>超イケイケのサービスですっせ</p>
                                <p><a href="{{url('rooms')}}" class="btn btn-white">お店を探してみる</a></p>
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
                <h2>かっこいい見出し</h2>
                <p>こんな感じの流れですよ</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <p>まずは家を決めましょう</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <p>そんで家具決めましょう</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <p>内見日を決めて、お店へ</p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-10 col-md-offset-1 animate-box">
                <div class="gtco-testimony gtco-left">
                    <div><img src="images/person_1.jpg" alt="Free Website template by FreeHTML5.co"></div>
                    <blockquote>
                        <p>契約終了後、宅配業者が内装通りに家具を運んでくれます</p>
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
                <h2>実際に探してみよう</h2>
                <p>みようみよう</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="" target="_blank" class="btn btn-special">お部屋を探す</a></p>
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