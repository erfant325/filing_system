<?php
include_once "../../controller/files/sale_apartment.php";
global $m_class;
$show_edit = $m_class->showEditData($_GET['code']);
?>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ویرایش فایل <?= $show_edit['id'] ?> فروش اپارتمان</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="<?= BASE_URL?>controller/files/sale_apartment.php">
                            <div class="form-body">
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="first-name-column" class="form-control" placeholder="نام مالک" name="frmedit[malek]" value="<?= $show_edit['malek'] ?>">
                                            <label for="first-name-column">نام مالک</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="تلفن تماس" name="frmedit[tel]" value="<?= $show_edit['tel'] ?>">
                                            <label for="first-name-column">تلفن تماس</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="متراژ" name="frmedit[metraj]" value="<?= $show_edit['metraj'] ?>">
                                            <label for="first-name-column">متراژ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="تعداد اتاق" name="frmedit[otaq]" value="<?= $show_edit['otaq'] ?>">
                                            <label for="first-name-column">تعداد اتاق</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="طبقه" name="frmedit[tabaqe]" value="<?= $show_edit['tabaqe'] ?>">
                                            <label for="first-name-column">طبقه</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="عمر بنا" name="frmedit[omr]" value="<?= $show_edit['omr'] ?>">
                                            <label for="first-name-column">عمر بنا</label>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[mahale]">
                                                <option value="0" <?php if ($show_edit['mahale']==0){echo 'selected';} ?>>محله</option>
                                                <option value="1" <?php if ($show_edit['mahale']==1){echo 'selected';} ?>>شهرک ولیعصر</option>
                                                <option value="2" <?php if ($show_edit['mahale']==2){echo 'selected';} ?>>تولید دارو</option>
                                                <option value="3" <?php if ($show_edit['mahale']==3){echo 'selected';} ?>>گلستان</option>
                                                <option value="4" <?php if ($show_edit['mahale']==4){echo 'selected';} ?>>بهاران</option>
                                                <option value="5" <?php if ($show_edit['mahale']==5){echo 'selected';} ?>>شهرک صاحب الزمان</option>
                                                <option value="6" <?php if ($show_edit['mahale']==6){echo 'selected';} ?>>فلاح</option>
                                                <option value="7" <?php if ($show_edit['mahale']==7){echo 'selected';} ?>>شهرک صادقیه</option>
                                                <option value="8" <?php if ($show_edit['mahale']==8){echo 'selected';} ?>>زاهدی</option>
                                                <option value="8" <?php if ($show_edit['mahale']==9){echo 'selected';} ?>>بهداشت</option>
                                                <option value="8" <?php if ($show_edit['mahale']==10){echo 'selected';} ?>>یافت اباد</option>
                                                <option value="8" <?php if ($show_edit['mahale']==11){echo 'selected';} ?>>بافان</option>
                                                <option value="8" <?php if ($show_edit['mahale']==12){echo 'selected';} ?>>سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[geography]">
                                                <option value="0" <?php if ($show_edit['geography']==0){echo 'selected';} ?>>موقعیت جغرافیایی</option>
                                                <option value="1" <?php if ($show_edit['geography']==1){echo 'selected';} ?>>شمالی</option>
                                                <option value="2" <?php if ($show_edit['geography']==2){echo 'selected';} ?>>جنوبی</option>
                                                <option value="3" <?php if ($show_edit['geography']==3){echo 'selected';} ?>>شرقی</option>
                                                <option value="4" <?php if ($show_edit['geography']==4){echo 'selected';} ?>>غربی</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[tabaqeha]">
                                                <option value="0" <?php if ($show_edit['tabaqeha']==0){echo 'selected';} ?>>تعداد طبقه ها</option>
                                                <option value="1" <?php if ($show_edit['tabaqeha']==1){echo 'selected';} ?>>یک طبقه</option>
                                                <option value="2" <?php if ($show_edit['tabaqeha']==2){echo 'selected';} ?>>دو طبقه</option>
                                                <option value="3" <?php if ($show_edit['tabaqeha']==3){echo 'selected';} ?>>سه طبقه</option>
                                                <option value="4" <?php if ($show_edit['tabaqeha']==4){echo 'selected';} ?>>چهار طبقه</option>
                                                <option value="5" <?php if ($show_edit['tabaqeha']==5){echo 'selected';} ?>>پنج طبقه</option>
                                                <option value="6" <?php if ($show_edit['tabaqeha']==6){echo 'selected';} ?>>بیشتر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[vahedha]">
                                                <option value="0" <?php if ($show_edit['vahedha']==0){echo 'selected';} ?>>تعداد واحد ها</option>
                                                <option value="1" <?php if ($show_edit['vahedha']==1){echo 'selected';} ?>>تک واحدی</option>
                                                <option value="2" <?php if ($show_edit['vahedha']==2){echo 'selected';} ?>>دو واحدی</option>
                                                <option value="3" <?php if ($show_edit['vahedha']==3){echo 'selected';} ?>>سه واحدی</option>
                                                <option value="4" <?php if ($show_edit['vahedha']==4){echo 'selected';} ?>>چهار واحدی</option>
                                                <option value="5" <?php if ($show_edit['vahedha']==5){echo 'selected';} ?>>پنج واحدی</option>
                                                <option value="6" <?php if ($show_edit['vahedha']==6){echo 'selected';} ?>>بیشتر</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[nama]">
                                                <option value="0" <?php if ($show_edit['nama']==0){echo 'selected';} ?>>نوع نما</option>
                                                <option value="1" <?php if ($show_edit['nama']==1){echo 'selected';} ?>>نما رومی</option>
                                                <option value="2" <?php if ($show_edit['nama']==2){echo 'selected';} ?>>سنگ</option>
                                                <option value="3" <?php if ($show_edit['nama']==3){echo 'selected';} ?>>تراورتن</option>
                                                <option value="4" <?php if ($show_edit['nama']==4){echo 'selected';} ?>>نما ترکیبی</option>
                                                <option value="5" <?php if ($show_edit['nama']==5){echo 'selected';} ?>>گرانیت</option>
                                                <option value="6" <?php if ($show_edit['nama']==6){echo 'selected';} ?>>اجر سه سانت</option>
                                                <option value="7" <?php if ($show_edit['nama']==7){echo 'selected';} ?>>سیمان</option>
                                                <option value="8" <?php if ($show_edit['nama']==8){echo 'selected';} ?>>سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[kaf]">
                                                <option value="0" <?php if ($show_edit['kaf']==0){echo 'selected';} ?>>نوع کف</option>
                                                <option value="1" <?php if ($show_edit['kaf']==1){echo 'selected';} ?>>سرامیک</option>
                                                <option value="2" <?php if ($show_edit['kaf']==2){echo 'selected';} ?>>سنگ</option>
                                                <option value="3" <?php if ($show_edit['kaf']==3){echo 'selected';} ?>>پارکت</option>
                                                <option value="4" <?php if ($show_edit['kaf']==4){echo 'selected';} ?>>لمینیت</option>
                                                <option value="5" <?php if ($show_edit['kaf']==5){echo 'selected';} ?>>موزاییک</option>
                                                <option value="6" <?php if ($show_edit['kaf']==6){echo 'selected';} ?>>سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[parking]">
                                                <option value="0" <?php if ($show_edit['parking']==0){echo 'selected';} ?>>پارکینگ</option>
                                                <option value="1" <?php if ($show_edit['parking']==1){echo 'selected';} ?>>پارکینگ دارد</option>
                                                <option value="2" <?php if ($show_edit['parking']==2){echo 'selected';} ?>>پارکینگ مزاحم دارد</option>
                                                <option value="2" <?php if ($show_edit['parking']==3){echo 'selected';} ?>>ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[vam]">
                                                <option value="0" <?php if ($show_edit['vam']==0){echo 'selected';} ?>>وام</option>
                                                <option value="1" <?php if ($show_edit['vam']==1){echo 'selected';} ?>>دارد</option>
                                                <option value="2" <?php if ($show_edit['vam']==2){echo 'selected';} ?>>ندارد</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[anbari]">
                                                <option value="0" <?php if ($show_edit['anbari']==0){echo 'selected';} ?>>انباری</option>
                                                <option value="1" <?php if ($show_edit['anbari']==1){echo 'selected';} ?>>دارد</option>
                                                <option value="2" <?php if ($show_edit['anbari']==2){echo 'selected';} ?>>ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[asansor]">
                                                <option value="0" <?php if ($show_edit['asansor']==0){echo 'selected';} ?>>اسانسور</option>
                                                <option value="1" <?php if ($show_edit['asansor']==1){echo 'selected';} ?>>دارد</option>
                                                <option value="2" <?php if ($show_edit['asansor']==2){echo 'selected';} ?>>ندارد</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[garmayeshi]">
                                                <option value="0" <?php if ($show_edit['garmayeshi']==0){echo 'selected';} ?>>سیستم گرمایشی</option>
                                                <option value="1" <?php if ($show_edit['garmayeshi']==1){echo 'selected';} ?>>پکیج</option>
                                                <option value="2" <?php if ($show_edit['garmayeshi']==2){echo 'selected';} ?>>شومینه</option>
                                                <option value="3" <?php if ($show_edit['garmayeshi']==3){echo 'selected';} ?>>بخاری</option>
                                                <option value="4" <?php if ($show_edit['garmayeshi']==4){echo 'selected';} ?>>چیلر</option>
                                                <option value="5" <?php if ($show_edit['garmayeshi']==5){echo 'selected';} ?>>کولر ابی و گازی</option>
                                                <option value="6" <?php if ($show_edit['garmayeshi']==6){echo 'selected';} ?>>اسپیلت</option>
                                                <option value="7" <?php if ($show_edit['garmayeshi']==7){echo 'selected';} ?>>سایر</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <select class="select2 form-control" name="frmedit[kabinet]">
                                                <option value="0" <?php if ($show_edit['kabinet']==0){echo 'selected';} ?>>نوع کابینت</option>
                                                <option value="1" <?php if ($show_edit['kabinet']==1){echo 'selected';} ?>>MDF</option>
                                                <option value="2" <?php if ($show_edit['kabinet']==2){echo 'selected';} ?>>طرح MDF</option>
                                                <option value="3" <?php if ($show_edit['kabinet']==3){echo 'selected';} ?>>HDF</option>
                                                <option value="4" <?php if ($show_edit['kabinet']==4){echo 'selected';} ?>>فلزی</option>
                                                <option value="5" <?php if ($show_edit['kabinet']==5){echo 'selected';} ?>>استیل</option>
                                                <option value="6" <?php if ($show_edit['kabinet']==6){echo 'selected';} ?>>High Glass</option>
                                                <option value="7" <?php if ($show_edit['kabinet']==7){echo 'selected';} ?>>سایر</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت هر متر مربع" name="frmedit[pricemtr]" value="<?= $show_edit['pricemtr'] ?>">
                                            <label for="first-name-column">قیمت هر متر مربع</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت پارکینگ" name="frmedit[priceparking]" value="<?= $show_edit['priceparking'] ?>">
                                            <label for="first-name-column">قیمت پارکینگ</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت انباری" name="frmedit[priceanbari]" value="<?= $show_edit['priceanbari'] ?>">
                                            <label for="first-name-column">قیمت انباری</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" id="first-name-column" class="form-control" placeholder="قیمت کل ملک" name="frmedit[price]" value="<?= $show_edit['price'] ?>">
                                            <label for="first-name-column">قیمت کل ملک</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-label-group">
                                            <input type="text" id="first-name-column" class="form-control" placeholder="ادرس" name="frmedit[address]" value="<?= $show_edit['address'] ?>">
                                            <label for="first-name-column">ادرس</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <fieldset class="form-label-group">
                                            <textarea class="form-control" id="label-textarea" rows="3" placeholder="توضیحات..." name="frmedit[description]"><?= $show_edit['description'] ?></textarea>
                                            <label for="label-textarea">توضیحات...</label>
                                        </fieldset>
                                    </div>


                                    <input type="hidden" value="<?= $_SESSION['user_id']; ?>" name="frmedit[user_editor]">
                                    <input type="hidden" value="<?= $show_edit['id']; ?>" name="frmedit[id]">
                                    <?php if (!empty($show_edit['pic_url1'])): ?>
                                    <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                        <img src="<?= BASE_URL ?>public/image/<?= $show_edit['pic_url1'] ?>" class="img-fluid" alt="gallery avtar img" style="max-height: 250px;">
                                    </div>
                                    <?php endif; ?>
                                    <?php if (!empty($show_edit['pic_url2'])): ?>
                                    <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                        <img src="<?= BASE_URL ?>public/image/<?= $show_edit['pic_url2'] ?>" class="img-fluid" alt="gallery avtar img" style="max-height: 250px;">
                                    </div>
                                    <?php endif; ?>
                                    <?php if (!empty($show_edit['pic_url3'])): ?>
                                    <div class="col-md-4 col-6 pl-25 pr-0 pb-25">
                                        <img src="<?= BASE_URL ?>public/image/<?= $show_edit['pic_url3'] ?>" class="img-fluid" alt="gallery avtar img" style="max-height: 250px;">
                                    </div>
                                    <?php endif; ?>
                                    <br>
                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس اول</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="pic1_edit">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس دوم</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"  name="pic2_edit">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">عکس سوم</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"  name="pic3_edit">
                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1" name="edit">ثبت</button>
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