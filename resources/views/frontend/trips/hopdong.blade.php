@extends('frontend.main')

@section('content')
    @include('frontend.modules.slider')
    <div class="traveltour-page-wrapper" id="traveltour-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper " style="padding: 70px 0px 40px 0px;">
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                style="padding-bottom: 20px ;">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 id="h3_chuyen" class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="text-transform: none ;">Chuyến Hợp Đồng<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-center-align">
                                <div class="gdlr-core-divider-container" style="max-width: 40px ;">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                         style="border-color: #303030 ;border-bottom-width: 2px ;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                                 style="padding: 50px 20px 20px 20px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                            style="padding-bottom: 15px ;">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 id="h3_lienhe" class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="font-size: 25px ;letter-spacing: 0px ;text-transform: none ;">Đặt chuyến <span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-left-align">
                                            <div class="gdlr-core-divider-container" style="max-width: 40px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                     style="border-color: #3a3a3a ;border-bottom-width: 2px ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                            <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                @include('backend.modules.alert')
                                                <form class="quform" action="{{asset('dat-ve-hd')}}" method="post">
                                                    @csrf
                                                    <div class="quform-elements">
                                                        <div class="quform-element">
                                                            <p>
                                                                Họ và tên*
                                                                <span class="wpcf7-form-control">
                                                                                        <input id="name" type="text"
                                                                                               name="name" size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Tên của bạn (required)">
                                                                                    </span>
                                                            </p>
                                                        </div>
                                                        <div class="quform-element">
                                                            <p>
                                                                Email*
                                                                <span class="wpcf7-form-control">
                                                                                        <input id="email" type="text"
                                                                                               name="email" size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"
                                                                                               placeholder="Email của bạn (required)">
                                                                                    </span>
                                                            </p>
                                                        </div>
                                                        <div class="quform-element">
                                                            <p>
                                                                Số điện thoại*
                                                                <span class="wpcf7-form-control">
                                                                    <input id="sdt" type="text" name="phone" size="40"
                                                                          class="wpcf7-form-control  wpcf7-text wpcf7-validates-as-required"
                                                                          aria-required="true"
                                                                          aria-invalid="false"
                                                                          placeholder="Số điện thoại của bạn (required)">
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="quform-element">
                                                            <p>
                                                                Ngày đi*
                                                                <span class="wpcf7-form-control">
                                                                    <input type="date" name="date" size="40"
                                                                          class="wpcf7-form-control  wpcf7-text wpcf7-validates-as-required"
                                                                          value="<?php echo date('dd/mm/YY');?>">
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <input type="hidden" name="pty" value="1">
                                                        <div class="quform-element">
                                                            <p>
                                                                Lịch trình*
                                                                <span class="wpcf7-form-control">
                                                                    <select class="form-select" style="background-color: #ffffff;font-size: 15px;width: 100%;padding: 15px 22px;" name="loai" data-required>
                                                                        <option value="Loại">Lịch trình</option>
                                                                        <option value="Một chiều">Một chiều</option>
                                                                        <option value="Hai chiều trong ngày">Hai chiều trong ngày</option>
                                                                    </select>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="quform-element">
                                                            <p>
                                                                Tuyến*
                                                                <span class="wpcf7-form-control">
                                                                    <select class="form-select" style="background-color: #ffffff;font-size: 15px;width: 100%;padding: 15px 22px;" name="idtuyen" data-required>
                                                                        <option value="Loại">Tuyến</option>
                                                                        @foreach($tuyens as $tuyen)
                                                                            <option value="{{$tuyen->id}}">{{$tuyen->start}} - {{$tuyen->stop}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </p>
                                                        </div>
                                                        <div class="quform-element">
                                                            <p>
                                                                Tàu*
                                                                <span class="wpcf7-form-control">
                                                                    <select class="form-select" style="background-color: #ffffff;font-size: 15px;width: 100%;padding: 15px 22px;" name="idtau" data-required>
                                                                        <option value="Loại">Tàu</option>
                                                                        @foreach($taus as $tau)
                                                                            <option value="{{$tau->id}}">{{$tau->tentau}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </span>
                                                            </p>
                                                        </div>


                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <button type="submit" class="submit-button"><span>Đặt chuyến</span>
                                                                </button>
                                                            </div>
                                                            <div class="quform-loading-wrap"><span
                                                                    class="quform-loading"></span></div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="gdlr-core-pbf-column gdlr-core-column-20 travel-tour-hide-on-mobile">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 15px ;">
                                                    <div class="gdlr-core-title-item-title-wrap">
                                                        <h3 id="h3_lienhe" class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 25px ;letter-spacing: 0px ;text-transform: none ;">Liên hệ<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-divider-item-normal gdlr-core-left-align">
                                                    <div class="gdlr-core-divider-container" style="max-width: 40px ;">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3a3a3a ;border-bottom-width: 2px ;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>Mọi ý kiến đóng góp xin liên hệ:</p>
                                                        <p><strong>Công ty TNHH Du Lịch Thành Hưng</strong>
                                                            <br><strong>Mã số thuế: </strong> 5701764926
                                                            <br><strong>Địa chỉ: </strong> Thôn Đông Nam, xã Quan Lạn, huyện Vân Đồn, Quảng Ninh
                                                            <br><strong>Văn phòng đại diện: </strong> Số 254, tổ 5, khu 1 , P.Bạch Đằng, TP.Hạ Long, Quảng Ninh
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-envelope-o" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-envelope-o" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">thanhhung2510@gmail.com</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-phone" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-phone" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">MR.Hưng : 0913266252<br>MR.Đạo : 01695366715</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js "
                             style="padding: 20px 20px 0px 20px;"></div>

                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <h4>Bảng giá hợp đồng trọn gói</h4>
                                </div>
                            </div>
                        </div>

                        {{--Ha Long - Quan Lan--}}
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                        + Đi từ Hạ Long (bến Hòn Gai)- Quan Lạn<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Lịch trình</th>
                                            <th>Tàu từ 58 - 62 chỗ</th>
                                            <th>Tàu 82 chỗ</th>
                                            <th>Tàu 100 chỗ</th>
                                        </tr>
                                        <tr>
                                            <td>Một chiều</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hai chiều trong ngày</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 4 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{--Ha Long - Ngoc Vung--}}
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                        + Đi từ Hạ Long (bến Hòn Gai) đến Ngọc Vừng<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Lịch trình</th>
                                            <th>Tàu từ 58 - 62 chỗ</th>
                                            <th>Tàu 82 chỗ</th>
                                            <th>Tàu 100 chỗ</th>
                                        </tr>
                                        <tr>
                                            <td>Một chiều</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hai chiều trong ngày</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 5 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{--Van Don - Quan Lan--}}
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                        + Đi từ Vân Đồn (Cảng Cái Rồng) – Quan Lạn<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Lịch trình</th>
                                            <th>Tàu từ 58 - 62 chỗ</th>
                                            <th>Tàu 82 chỗ</th>
                                            <th>Tàu 100 chỗ</th>
                                        </tr>
                                        <tr>
                                            <td>Một chiều</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Một chiều')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hai chiều trong ngày</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 3 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{--Ha Long - Co To--}}
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 20px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                        + Đi từ Hạ Long (bến Hòn Gai) – Cô Tô<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Lịch trình</th>
                                            <th>Tàu từ 58 - 62 chỗ</th>
                                            <th>Tàu 82 chỗ</th>
                                            <th>Tàu 100 chỗ</th>
                                        </tr>
                                        <tr>
                                            <td>Trọn gói (2 chiều)</td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 12 and $chuyenhd->idtau == 7 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 12 and $chuyenhd->idtau == 8 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($chuyenhds as $chuyenhd)
                                                    @if($chuyenhd->idtuyen == 12 and $chuyenhd->idtau == 9 and $chuyenhd->loai == 'Hai chiều trong ngày')
                                                        <strong>{{number_format($chuyenhd->gia,0,'','.')}} VNĐ</strong>
                                                    @endif
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection



