<?php
include_once "../../controller/files/file_code_search.php";
include_once "../../controller/files/sale_apartment.php";
global $search_class;
global $m_class;
$post_code = $_POST['code_search'];
if (isset($post_code))
{
    switch ($post_code)
    {
        case $post_code < 10000:
            $tbl = 'file_sale_apartment';
            break;
        case $post_code < 20000 and $post_code >= 10000:
            $tbl = 'file_rent_apartment';
            break;
        case $post_code < 30000 and $post_code >= 20000:
            $tbl = 'file_sale_commercial';
            break;
        case $post_code < 40000 and $post_code >= 30000:
            $tbl = 'file_rent_commercial';
            break;
        case $post_code < 50000 and $post_code >= 40000:
            $tbl = 'file_sale_old';
            break;
        case $post_code < 60000 and $post_code >= 50000:
            $tbl = 'file_rent_old';
            break;
    }

    $row = $search_class->code_search($post_code,$tbl);
}
?>
<section id="decks">
    <div class="row">
            <?php
            $user_creator = $m_class->user_creator_search($row['user_creator']);
            $username_creator = $user_creator['firstname'];
            $user_editor = $m_class->user_creator_search($row['user_editor']);
            $username_editor = $user_editor['firstname'];
            ?>
            <div class="col-md-3 col-sm-6 mb-sm-1">
                <div class="card collapse-icon accordion-icon-rotate">
                    <div class="card-content">
                        <div id="carousel-example-card" class="carousel slide" data-ride="carousel" data-touch="true">
                            <div class="carousel-inner rounded-0" role="listbox">
                                <?php if (!empty($row['pic_url1'])): ?>
                                    <div class="carousel-item active">
                                        <img src="<?= BASE_URL ?>public/image/<?= $row['pic_url1'] ?>"
                                             class="d-block w-100" alt="First slide" style="height: 200px;">
                                    </div>
                                <?php else: ?>
                                    <div class="carousel-item active">
                                        <img src="<?= BASE_URL ?>public/image_not_found.jpg" class="d-block w-100"
                                             alt="First slide" style="height: 200px;">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($row['pic_url2'])): ?>
                                    <div class="carousel-item">
                                        <img src="<?= BASE_URL ?>public/image/<?= $row['pic_url2'] ?>"
                                             class="d-block w-100" alt="Second slide" style="height: 200px;">
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($row['pic_url3'])): ?>
                                    <div class="carousel-item">
                                        <img src="<?= BASE_URL ?>public/image/<?= $row['pic_url3'] ?>"
                                             class="d-block w-100" alt="Third slide" style="height: 200px;">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><i class="bx bx-hash"></i><span> کد فایل : <?= $row['id'] ?></span>
                            </h4>
                            <p class="card-text">
                                <i class="bx bx-map"></i><span> محله : <?php
                                    switch ($row['mahale']) {
                                        case '0':
                                            echo 'انتخاب نشده';
                                            break;
                                        case '1':
                                            echo 'شهرک ولیعصر';
                                            break;
                                        case '2':
                                            echo 'تولید دارو';
                                            break;
                                        case '3':
                                            echo 'گلستان';
                                            break;
                                        case '4':
                                            echo 'بهاران';
                                            break;
                                        case '5':
                                            echo 'شهرک صاحب الزمان';
                                            break;
                                        case '6':
                                            echo 'فلاح';
                                            break;
                                        case '7':
                                            echo 'شهرک صادقیه';
                                            break;
                                        case '8':
                                            echo 'زاهدی';
                                            break;
                                        case '9':
                                            echo 'بهداشت';
                                            break;
                                        case '10':
                                            echo 'یافت اباد';
                                            break;
                                        case '11':
                                            echo 'بافان';
                                            break;
                                        case '12':
                                            echo 'سایر';
                                            break;
                                    }
                                    ?></span>
                                <br>
                                <i class="bx bx-ruler"></i><span> متراژ : <?= $row['metraj'] ?> متر</span>
                                <br>
                                <i class="bx bx-crown"></i><span> عمر بنا : <?= $row['omr'] ?> سال</span>
                                <br>
                                <i class="bx bx-bed"></i><span> تعداد اتاق : <?= $row['otaq'] ?></span>
                                <br>
                                <i class="bx bx-building"></i><span> طبقه : <?= $row['tabaqe'] ?></span>
                                <br>
                                <i class="bx bx-dollar-circle"></i><span> قیمت هر متر مربع : <?= $row['pricemtr'] ?></span>
                                <br>
                                <i class="bx bxs-dollar-circle"></i><span> قیمت کل : <?= $row['price'] ?></span>
                            </p>
                            <div class="accordion" id="cardAccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne<?= $row['id'] ?>" data-toggle="collapse"
                                         data-target="#collapseOne<?= $row['id'] ?>" aria-expanded="false"
                                         aria-controls="collapseOne<?= $row['id'] ?>" role="button">
                                        <span class="collapsed"><i
                                                class="bx bxs-contact"></i><small>اطلاعات تماس</small></span>
                                    </div>
                                    <div id="collapseOne<?= $row['id'] ?>" class="collapse"
                                         aria-labelledby="headingOne<?= $row['id'] ?>" data-parent="#cardAccordion">
                                        <div class="card-body line-height-2 pt-1">
                                            <i class="bx bx-user"></i><span> نام مالک : <?= $row['malek'] ?></span>
                                            <br>
                                            <i class="bx bx-phone-call"></i><span> تلفن تماس : <?= $row['tel'] ?></span>
                                            <br>
                                            <i class="bx bx-map"></i><span> آدرس : <?= $row['address'] ?></span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingtwo<?= $row['id'] ?>" data-toggle="collapse"
                                         data-target="#collapsetwo<?= $row['id'] ?>" aria-expanded="false"
                                         aria-controls="collapsetwo<?= $row['id'] ?>" role="button">
                                        <span class="collapsed"><i
                                                class="bx bx-extension"></i><small>ویژگی و امکانات</small></span>
                                    </div>
                                    <div id="collapsetwo<?= $row['id'] ?>" class="collapse"
                                         aria-labelledby="headingtwo<?= $row['id'] ?>" data-parent="#cardAccordion">
                                        <div class="card-body line-height-2 pt-1">
                                            <i class="bx bxs-parking"></i><span> پارکینگ : <?php
                                                switch ($row['parking']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "<span style='color: green'>دارد</span>";
                                                        break;
                                                    case '2':
                                                        echo "<span style='color: yellow'>مزاحم</span>";
                                                        break;
                                                    case '3':
                                                        echo "<span style='color: red'>ندارد</span>";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-landmark"></i><span> انباری : <?php
                                                switch ($row['anbari']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "<span style='color: green'>دارد</span>";
                                                        break;
                                                    case '2':
                                                        echo "<span style='color: red'>ندارد</span>";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-building"></i><span> اسانسور : <?php
                                                switch ($row['asansor']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "<span style='color: green'>دارد</span>";
                                                        break;
                                                    case '2':
                                                        echo "<span style='color: red'>ندارد</span>";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-archive"></i><span> کابینت : <?php
                                                switch ($row['kabinet']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "MDF";
                                                        break;
                                                    case '2':
                                                        echo "طرح MDF";
                                                        break;
                                                    case '3':
                                                        echo "HDF";
                                                        break;
                                                    case '4':
                                                        echo "فلزی";
                                                        break;
                                                    case '5':
                                                        echo "استیل";
                                                        break;
                                                    case '6':
                                                        echo "High Glass";
                                                        break;
                                                    case '7':
                                                        echo "سایر";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bx-grid"></i><span> جنس کف : <?php
                                                switch ($row['kaf']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "سرامیک";
                                                        break;
                                                    case '2':
                                                        echo "سنگ";
                                                        break;
                                                    case '3':
                                                        echo "پارکت";
                                                        break;
                                                    case '4':
                                                        echo "لمینیت";
                                                        break;
                                                    case '5':
                                                        echo "موزاییک";
                                                        break;
                                                    case '6':
                                                        echo "سایر";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-institution"></i><span> نما : <?php
                                                switch ($row['nama']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "نما رومی";
                                                        break;
                                                    case '2':
                                                        echo "سنگ";
                                                        break;
                                                    case '3':
                                                        echo "تراورتن";
                                                        break;
                                                    case '4':
                                                        echo "نما ترکیبی";
                                                        break;
                                                    case '5':
                                                        echo "گرانیت";
                                                        break;
                                                    case '6':
                                                        echo "اجر سه سانت";
                                                        break;
                                                    case '7':
                                                        echo "سیمان";
                                                        break;
                                                    case '8':
                                                        echo "سایر";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-hot"></i><span> سیستم گرمایشی : <?php
                                                switch ($row['garmayeshi']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "پکیج";
                                                        break;
                                                    case '2':
                                                        echo "شومینه";
                                                        break;
                                                    case '3':
                                                        echo "بخاری";
                                                        break;
                                                    case '4':
                                                        echo "چیلر";
                                                        break;
                                                    case '5':
                                                        echo "کولر ابی و گازی";
                                                        break;
                                                    case '6':
                                                        echo "اسپیلت";
                                                        break;
                                                    case '7':
                                                        echo "سایر";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bx-dollar"></i><span> وام : <?php
                                                switch ($row['vam']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "<span style='color: green'>دارد</span>";
                                                        break;
                                                    case '2':
                                                        echo "<span style='color: red'>ندارد</span>";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingthree<?= $row['id'] ?>" data-toggle="collapse"
                                         data-target="#collapsethree<?= $row['id'] ?>" aria-expanded="false"
                                         aria-controls="collapsethree<?= $row['id'] ?>" role="button">
                                        <span class="collapsed"><i
                                                class="bx bx-detail"></i><small>توضیحات</small></span>
                                    </div>
                                    <div id="collapsethree<?= $row['id'] ?>" class="collapse"
                                         aria-labelledby="headingthree<?= $row['id'] ?>" data-parent="#cardAccordion">
                                        <div class="card-body line-height-2 pt-1">
                                            <i class="bx bx-compass"></i><span> موقعیت جغرافیایی : <?php
                                                switch ($row['geography']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "شمالی";
                                                        break;
                                                    case '2':
                                                        echo "جنوبی";
                                                        break;
                                                    case '3':
                                                        echo "شرقی";
                                                        break;
                                                    case '4':
                                                        echo "غربی";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-building-house"></i><span> تعداد طبقات : <?php
                                                switch ($row['geography']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "یک طبقه";
                                                        break;
                                                    case '2':
                                                        echo "دو طبقه";
                                                        break;
                                                    case '3':
                                                        echo "سه طبقه";
                                                        break;
                                                    case '4':
                                                        echo "چهار طبقه";
                                                        break;
                                                    case '5':
                                                        echo "پنج طبقه";
                                                        break;
                                                    case '6':
                                                        echo "بیش از پنج طبقه";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bxs-city"></i><span> تعداد واحد در طبقه : <?php
                                                switch ($row['geography']) {
                                                    case '0':
                                                        echo 'انخاب نشده';
                                                        break;
                                                    case '1':
                                                        echo "تک واحدی";
                                                        break;
                                                    case '2':
                                                        echo "دو واحدی";
                                                        break;
                                                    case '3':
                                                        echo "سه واحدی";
                                                        break;
                                                    case '4':
                                                        echo "چهار واحدی";
                                                        break;
                                                    case '5':
                                                        echo "پنج واحدی";
                                                        break;
                                                    case '6':
                                                        echo "بیشتر از 5 واحد";
                                                        break;
                                                }
                                                ?></span>
                                            <br>
                                            <i class="bx bx-dollar-circle"></i><span> قیمت پارکینگ : <?= $row['priceparking'] ?></span>
                                            <br>
                                            <i class="bx bxs-dollar-circle"></i><span> قیمت انباری : <?= $row['priceanbari'] ?></span>
                                            <br>
                                            <i class="bx bxs-comment-detail"></i><span> توضیحات : <?= $row['description'] ?></span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">ثبت کننده فایل : <?= $username_creator ?></small>
                            <br>
                            <small class="text-muted">تاریخ ثبت فایل : <?= $row['submit_fa'] ?></small>
                            <br>
                            <?php if (!empty($row['submit_fa_edit'])): ?>
                            <small class="text-muted">ثبت کننده فایل : <?= $username_editor ?></small>
                            <br>
                            <small class="text-muted">تاریخ ویرایش فایل : <?= $row['submit_fa_edit'] ?></small>
                            <br>
                            <?php endif; ?>
                            <br>
                            <a href="<?= BASE_URL ?>file_edit_sale_apartment/<?= $row['id'] ?>"
                               class="btn btn-icon btn-outline-info mr-1 mb-1" data-toggle="tooltip"
                               data-placement="top" data-original-title="ویرایش"><i class="bx bxs-edit">
                                </i>
                            </a>
                            <a href="<?= BASE_URL ?>controller/files/sale_apartment.php?del_code=<?= $row['id'] ?>"
                               class="btn btn-icon btn-outline-danger mr-1 mb-1" data-toggle="tooltip"
                               data-placement="top" data-original-title="حذف"><i class="bx bx-trash">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>