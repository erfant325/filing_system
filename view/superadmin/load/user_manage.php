<?php
include_once '../../controller/auth/profile_setting.php';
global $user_list;
?>
<section class="users-list-wrapper">
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="users-list-datatable" class="table">
                            <thead>
                            <tr>
                                <th>نام کاربری</th>
                                <th>نام و نام خانوادگی</th>
                                <th>شماره موبایل</th>
                                <th>تاریخ ثبت پروفایل</th>
                                <th>نقش</th>
                                <th>وضعیت</th>
                                <th>حذف کاربر</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($user_list as $user_row):
                            ?>
                            <tr>
                                <td><?= $user_row['username']; ?></td>
                                <td><?= $user_row['firstname']; ?></td>
                                <td><?= $user_row['mobile']; ?></td>
                                <td><?= $user_row['submit_fa']; ?></td>
                                <td>
                                    <?php if ($user_row['id'] == 1){ echo 'مدیر';}else{ echo 'کاربر عادی';} ?>
                                </td>
                                <td>
                                    <a href="<?php if ($user_row['id'] != 1):?>
                                    <?= BASE_URL ?>controller/auth/profile_setting.php?status=<?= $user_row['status']; ?>&id=<?= $user_row['id']; ?>
                                            <?php endif; ?>">
                                        <span class="badge badge-light-<?php if ($user_row['status'] == 1){ echo 'success';} if ($user_row['status'] == 0){ echo 'danger';} ?>">
                                            <?php
                                                if ($user_row['status'] == 1) {
                                                    echo 'فعال';
                                                }
                                                if ($user_row['status'] == 0) {
                                                    echo 'مسدود شده';
                                                }
                                             ?>
                                        </span>
                                    </a>
                                </td>
                                <td><a href="<?php if ($user_row['id'] != 1){ echo  BASE_URL.'controller/auth/profile_setting.php?delete='. $user_row['id']; } ?>"><i class="bx bx-trash"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>

        <div class="collapsible collapse-icon accordion-icon-rotate">
            <div class="card collapse-header">
                <div id="headingCollapse5" class="card-header" data-toggle="collapse" role="button" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <span class="collapse-title">
                      <i class="bx bx-user align-middle"></i>
                      <span class="align-middle">افزودن کاربر جدید</span>
                    </span>
                </div>
                <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                    <div class="card-content">
                        <div class="card-body line-height-2">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <form class="form" method="post" action="<?= BASE_URL?>controller/auth/profile_setting.php">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="text" id="first-name-column" class="form-control" placeholder="نام و نام خانوادگی" name="reg[firstname]">
                                                                <label for="first-name-column">نام و نام خانوادگی</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="text" id="last-name-column" class="form-control" placeholder="نام کاربری" name="reg[username]">
                                                                <label for="last-name-column">نام کاربری</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="password" id="city-column" class="form-control" placeholder="رمز عبور" name="password">
                                                                <label for="city-column">رمز عبور</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <div class="form-label-group">
                                                                <input type="number" id="country-floating" class="form-control" name="reg[mobile]" placeholder="شماره موبایل">
                                                                <label for="country-floating">شماره موبایل</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-end">
                                                            <button type="submit" name="register" class="btn btn-primary mr-1 mb-1">ثبت</button>
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
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>