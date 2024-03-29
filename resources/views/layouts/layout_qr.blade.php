
@if(isset($code))
<div class="box-list">
    <div class="box-card">
        <div class="background">
            <img src="{{public_path("/images/background_img.png")}}" width="219" height="175" alt="">
        </div>
        <div class="box-header z-index">
            <h3>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886</h3>
            <p class="address">Xưởng sản xuất lô A2.7, KĐT Thanh Hà B, Cienco 5, Cự Khê, Thanh Oai, Hà Nội</p>
            <p class="tax-number">Mã số thuế: <span style="color:red">0107616553</span>  </p>
        </div>
        <div class="before-body z-index">
            TEM XÁC THỰC HÀNG CHÍNH HÃNG
        </div>
        <div class="box-body z-index">
            <div class="image-left qr-code">
                <a href="{{ config('app.url').'?s='.($code->serial ?? '') }}">
                    <img width="42" src="data:image/png;base64, {{base64_encode(QrCode::format('png')->size(200)->errorCorrection('H')
                    ->generate(config('app.url').'?s='.($code->serial ?? '')))}}" alt="">
                </a>
                <div class="qr-text">QR Tra cứu</div>
            </div>
            <div class="image-right qr-code">
                <a href="https://thanglong886.vn/">
                    <img width="45" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge($logoPath ?? '', 0.3, true)
                    ->size(200)->errorCorrection('H')
                    ->generate('https://thanglong886.vn/')) !!} ">
                </a>
            </div>
        </div>
        <div class="box-footer z-index">
            <div class="quotes"><span style="color:red">CỌC BÊ TÔNG CỐT THÉP ĐÚC SẴN</span></div>
            <div class="information">
                <div class="info-left info-detail">
                    <p>ID: {{$code->code_id ?? ''}} </p>
                    <p>Serial: {{$code->serial ?? ''}}</p>
                    <p>Hotline: <span style="color:red">0968.846.686</span></p>
                </div>
                <div class="info-right info-detail">
                    <p>Cọc: {{$code->coc ?? ''}}</p>
                    <p>{{$code->thep_chu ?? ''}}</p>
                    <p>Mác bê tông: {{$code->mac_be_tong ?? ''}}</p>
                </div>
            </div>
            <div class="last-quotes">
                Quét QR code để tra cứu thông tin sản phẩm chính hãng
            </div>
        </div>
    </div>
</div>
@endif