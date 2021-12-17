<?php
include_once "../../controller/files/rent_apartment.php";
global $m_class;
if (isset($_POST['filter_btn'])) {
    $query = 'SELECT * FROM file_rent_apartment WHERE ';
    $counter = 0;

    if (!empty ($_POST['filter']['price_pish_from']) and ($_POST['filter']['price_pish_to'])) {
        $price_pish_from = $_POST['filter']['price_pish_from'];
        $price_pish_to = $_POST['filter']['price_pish_to'];
        $query .= "((price_pish BETWEEN '$price_pish_from' AND '$price_pish_to')) ";
        $counter++;
    }
    if (!empty ($_POST['filter']['price_rent_from']) and ($_POST['filter']['price_rent_to'])) {
        if ($counter == 1) {
            $query .= "AND";
        }
        $price_rent_from = $_POST['filter']['price_rent_from'];
        $price_rent_to = $_POST['filter']['price_rent_to'];
        $query .= "((price_rent BETWEEN '$price_rent_from' AND '$price_rent_to')) ";
        $counter++;
    }
    if (!empty ($_POST['filter']['metraj_from']) and ($_POST['filter']['metraj_to'])) {
        if ($counter >= 1) {
            $query .= "AND";
        }
        $metraj_from = $_POST['filter']['metraj_from'];
        $metraj_to = $_POST['filter']['metraj_to'];
        $query .= "((metraj BETWEEN '$metraj_from' AND '$metraj_to')) ";
        $counter++;
    }
    if (!empty ($_POST['filter']['tabaqe_from']) and ($_POST['filter']['tabaqe_to'])) {
        if ($counter >= 1) {
            $query .= "AND";
        }
        $tabaqe_from = $_POST['filter']['tabaqe_from'];
        $tabaqe_to = $_POST['filter']['tabaqe_to'];
        $query .= "((tabaqe BETWEEN '$tabaqe_from' AND '$tabaqe_to')) ";
        $counter++;
    }
    if (!empty ($_POST['filter']['mahale'])) {
        if ($counter >= 1) {
            $query .= "AND";
        }
        $mahale = $_POST['filter']['mahale'];
        $query .= "((mahale = '$mahale')) ";
        $counter++;
    }

    $query .= " ORDER BY price_pish ASC";

    $rows_select = $m_class->filter($query);

} else {
    $rows_select = $m_class->list_files();
}
$file_rows = $rows_select;
$count_post = 0;
?>
<section id="decks">
    <div class="row">

        <!--filter-->
        <div class="col-12">
            <div class="accordion" id="cardAccordion">
                <div class="card">
                    <div class="card-header" id="headingOnefilter" data-toggle="collapse"
                         data-target="#collapseOnefilter" aria-expanded="false" aria-controls="collapseOnefilter"
                         role="button">
                        <span class="collapsed"><i class="bx bxs-filter-alt"></i>فیلتر فایل ها</span>
                    </div>
                    <div id="collapseOnefilter" class="collapse" aria-labelledby="headingOnefilter"
                         data-parent="#cardAccordion">
                        <div class="card-body line-height-2 pt-1">


                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form" method="post">
                                                <div class="form-body">
                                                    <div class="row">

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="مبلغ پیش پرداخت از"
                                                                       name="filter[price_pish_from]">
                                                                <label for="first-name-column">مبلغ پیش پرداخت از</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="تا"
                                                                       name="filter[price_pish_to]">
                                                                <label for="first-name-column">تا</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="مبلغ اجاره از"
                                                                       name="filter[price_rent_from]">
                                                                <label for="first-name-column">مبلغ اجاره از</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="تا"
                                                                       name="filter[price_rent_to]">
                                                                <label for="first-name-column">تا</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="متراژ از"
                                                                       name="filter[metraj_from]">
                                                                <label for="first-name-column">متراژ از</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="تا"
                                                                       name="filter[metraj_to]">
                                                                <label for="first-name-column">تا</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="طبقه از"
                                                                       name="filter[tabaqe_from]">
                                                                <label for="first-name-column">طبقه از</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="first-name-column"
                                                                       class="form-control" placeholder="تا"
                                                                       name="filter[tabaqe_to]">
                                                                <label for="first-name-column">تا</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <fieldset class="form-group">
                                                                <select class="form-control" id="basicSelect" name="filter[mahale]">
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
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" name="filter_btn"
                                                                    class="btn btn-primary mr-1 mb-1">اعمال فیلتر
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card-->

        <?php foreach ($file_rows as $row): ?>
            <?php
            $user_creator = $m_class->user_creator_search($row['user_creator']);
            $username_creator = $user_creator['firstname'];
            $user_editor = $m_class->user_creator_search($row['user_editor']);
            $username_editor = $user_editor['firstname'];
            $count_post++;
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
                                <i class="bx bx-dollar-circle"></i><span> مبلغ پیش پرداخت : <?= $row['price_pish'] ?></span>
                                <br>
                                <i class="bx bxs-dollar-circle"></i><span> مبلغ اجاره : <?= $row['price_rent'] ?></span>
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                                        echo 'انتخاب نشده';
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
                                <small class="text-muted">ویرایش کننده فایل : <?= $username_editor ?></small>
                                <br>
                                <small class="text-muted">تاریخ ویرایش فایل : <?= $row['submit_fa_edit'] ?></small>
                                <br>
                            <?php endif; ?>
                            <a href="<?= BASE_URL ?>file_print_rent_apartment/<?= $row['id'] ?>"><i class="bx bx-printer"></i></a>
                            <br>
                            <a href="<?= BASE_URL ?>file_edit_rent_apartment/<?= $row['id'] ?>"
                               class="btn btn-icon btn-outline-info mr-1 mb-1" data-toggle="tooltip"
                               data-placement="top" data-original-title="ویرایش"><i class="bx bxs-edit"></i>
                            </a>
                            <a href="<?= BASE_URL ?>controller/files/rent_apartment.php?arc_code=<?= $row['id'] ?>"
                               class="btn btn-icon btn-outline-warning mr-1 mb-1" data-toggle="tooltip"
                               data-placement="top" data-original-title="غیر فعال"><i class="bx bx-archive"></i>
                            </a>
                            <button type="button" data-toggle="modal" data-target="#inlineForm<?= $row['id'] ?>"
                                    class="btn btn-icon btn-outline-success mr-1 mb-1">
                                <i class="bx bx-mail-send"></i>
                            </button>
                            <a href="<?= BASE_URL ?>controller/files/rent_apartment.php?del_code=<?= $row['id'] ?><?php if (!empty($row['pic_url1'])){ echo '&img_1='.$row['pic_url1'];} ?><?php if (!empty($row['pic_url2'])){ echo '&img_2='.$row['pic_url2'];} ?><?php if (!empty($row['pic_url3'])){ echo '&img_3='.$row['pic_url3'];} ?>"
                               class="btn btn-icon btn-outline-danger mr-1 mb-1" data-toggle="tooltip"
                               data-placement="top" data-original-title="حذف"><i class="bx bx-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-left" id="inlineForm<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">ارسال فایل <?= $row['id'] ?> به مشتری</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <form method="post" action="<?= BASE_URL ?>controller/sms_panel/sms_sender.php">
                            <div class="modal-body">
                                <label>نام مشتری: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="نام مشتری" class="form-control" name="cus[customer_name]">
                                </div>
                                <label>شماره موبایل: </label>
                                <div class="form-group">
                                    <input type="number" placeholder="شماره موبایل" class="form-control" name="cus[customer_number]">
                                </div>
                                <input type="hidden" name="cus[db_table]" value="rent_apartment">
                                <input type="hidden" name="cus[post_id]" value="<?= $row['id'] ?>">
                                <input type="hidden" name="cus[user_id]" value="<?= $_SESSION['user_id']; ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">بستن</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" name="send_sms"><!--data-dismiss="modal"-->
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">ارسال</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="col-12">
            <span>تعداد فایل ها <?= $count_post ?></span>
        </div>
    </div>
</section>