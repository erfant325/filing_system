<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">افزودن فایل فروش اپارتمان</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="<?= BASE_URL?>controller/files/sale_apartment.php">
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="first-name-column" class="form-control" placeholder="نام مالک" name="frm[malek]">
                                            <label for="first-name-column">نام مالک</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="تلفن تماس" name="frm[tel]">
                                            <label for="first-name-column">تلفن تماس</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="متراژ" name="frm[metraj]">
                                            <label for="first-name-column">متراژ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="تعداد اتاق" name="frm[otaq]">
                                            <label for="first-name-column">تعداد اتاق</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="طبقه" name="frm[tabaqe]">
                                            <label for="first-name-column">طبقه</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="عمر بنا" name="frm[omr]">
                                            <label for="first-name-column">عمر بنا</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[mahale]">
                                                <option value="0">محله</option>
                                                <option value="1">شهرک ولیعصر</option>
                                                <option value="2">تولید دارو</option>
                                                <option value="3">گلستان</option>
                                                <option value="4">بهاران</option>
                                                <option value="5">شهرک صاحب الزمان</option>
                                                <option value="6">فلاح</option>
                                                <option value="7">شهرک صادقیه</option>
                                                <option value="8">زاهدی</option>
                                                <option value="9">بهداشت</option>
                                                <option value="10">یافت اباد</option>
                                                <option value="11">بافان</option>
                                                <option value="12">سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[geography]">
                                                <option value="0">موقعیت جغرافیایی</option>
                                                <option value="1">شمالی</option>
                                                <option value="2">جنوبی</option>
                                                <option value="3">شرقی</option>
                                                <option value="4">غربی</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[tabaqeha]">
                                                <option value="0">تعداد طبقه ها</option>
                                                <option value="1">یک طبقه</option>
                                                <option value="2">دو طبقه</option>
                                                <option value="3">سه طبقه</option>
                                                <option value="4">چهار طبقه</option>
                                                <option value="5">پنج طبقه</option>
                                                <option value="6">بیشتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[vahedha]">
                                                <option value="0">تعداد واحد ها</option>
                                                <option value="1">تک واحدی</option>
                                                <option value="2">دو واحدی</option>
                                                <option value="3">سه واحدی</option>
                                                <option value="4">چهار واحدی</option>
                                                <option value="5">پنج واحدی</option>
                                                <option value="6">بیشتر</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[nama]">
                                                <option value="0">نوع نما</option>
                                                <option value="1">نما رومی</option>
                                                <option value="2">سنگ</option>
                                                <option value="3">تراورتن</option>
                                                <option value="4">نما ترکیبی</option>
                                                <option value="5">گرانیت</option>
                                                <option value="6">اجر سه سانت</option>
                                                <option value="7">سیمان</option>
                                                <option value="8">سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[kaf]">
                                                <option value="0">نوع کف</option>
                                                <option value="1">سرامیک</option>
                                                <option value="2">سنگ</option>
                                                <option value="3">پارکت</option>
                                                <option value="4">لمینیت</option>
                                                <option value="5">موزاییک</option>
                                                <option value="6">سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[parking]">
                                                <option value="0">پارکینگ</option>
                                                <option value="1">پارکینگ دارد</option>
                                                <option value="2">پارکینگ مزاحم دارد</option>
                                                <option value="3">ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[vam]">
                                                <option value="0">وام</option>
                                                <option value="1">دارد</option>
                                                <option value="2">ندارد</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[anbari]">
                                                <option value="0">انباری</option>
                                                <option value="1">دارد</option>
                                                <option value="2">ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[asansor]">
                                                <option value="0">اسانسور</option>
                                                <option value="1">دارد</option>
                                                <option value="2">ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[garmayeshi]">
                                                <option value="0">سیستم گرمایشی</option>
                                                <option value="1">پکیج</option>
                                                <option value="2">شومینه</option>
                                                <option value="3">بخاری</option>
                                                <option value="4">چیلر</option>
                                                <option value="5">کولر ابی و گازی</option>
                                                <option value="6">اسپیلت</option>
                                                <option value="7">سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frm[kabinet]">
                                                <option value="0">نوع کابینت</option>
                                                <option value="1">MDF</option>
                                                <option value="2">طرح MDF</option>
                                                <option value="3">HDF</option>
                                                <option value="4">فلزی</option>
                                                <option value="5">استیل</option>
                                                <option value="6">High Glass</option>
                                                <option value="7">سایر</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت هر متر مربع" name="frm[pricemtr]">
                                            <label for="first-name-column">قیمت هر متر مربع</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت پارکینگ" name="frm[priceparking]">
                                            <label for="first-name-column">قیمت پارکینگ</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت انباری" name="frm[priceanbari]">
                                            <label for="first-name-column">قیمت انباری</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت کل ملک" name="frm[price]">
                                            <label for="first-name-column">قیمت کل ملک</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="first-name-column" class="form-control" placeholder="ادرس" name="frm[address]">
                                            <label for="first-name-column">ادرس</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group">
                                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="توضیحات..." name="frm[description]"></textarea>
                                            <label for="label-textarea">توضیحات...</label>
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس اول</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="pic1">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس دوم</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"  name="pic2">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس سوم</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"  name="pic3">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <input type="hidden" value="<?= $_SESSION['user_id']; ?>" name="frm[user_creator]">

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" name="submit">ثبت</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">بازنشانی</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (isset($_GET['code'])){
    echo "<script>";
    echo "Swal.fire('کد فایل ثبت شده : {$_GET['code']}','فایل با موفقیت ثبت گردید','success')";
    echo "</script>";
}
?>