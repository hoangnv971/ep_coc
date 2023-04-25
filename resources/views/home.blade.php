@extends('layouts.app')
@section('content')
<div class="container">
    <div class="code-content">
        @if (isset($code))
            <table>
                <tr>
                    <td>Serial</td>
                    <td>{{$code->serial}}</td>
                </tr>
                <tr>
                    <td>Thông tin sản phẩm</td>
                    <td>
                        <div class="code-info">
                            <p>CỌC BÊ TÔNG CỘT THÉP ĐÚC SẴN</p>
                            <p>Tiết diện: {{$code->coc}}</p>
                            <p>{{$code->thep_chu}}</p>
                            <p>Mác bê tông: {{$code->mac_be_tong}}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Đơn vị SX - NK	</td>
                    <td>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><a href="mailto:thanglong8861@gmail.com">thanglong8861@gmail.com</a></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td><a href="https://thanglong886.vn/">https://thanglong886.vn/</a></td>
                </tr>
                <tr>
                    <td>Hotline</td>
                    <td><a href="tal:0986855999">0968.846.686</a></td>
                </tr>
                
            </table>
        @endif
        @if(!isset($code) && isset($serial))
            <h4 style="color:orange;font-weight:bold;text-align:center">Serial không đúng hoặc không tồn tại</h4>
        @endif
</div>

</div>
@endsection