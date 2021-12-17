<section id="page-account-settings">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
                    <ul class="nav nav-pills flex-column">

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                <i class="bx bx-lock"></i>
                                <span>تغییر رمز عبور</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">

                                    <div class="tab-pane active" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                        <form method="post" action="<?= BASE_URL?>controller/auth/profile_setting.php">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>رمز عبور قدیمی</label>
                                                            <input type="password" name="old_password" class="form-control text-left" required placeholder="رمز عبور قدیمی" data-validation-required-message="وارد کردن رمز عبور قدیمی الزامی است" dir="ltr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>رمز عبور جدید</label>
                                                            <input type="password" name="password" class="form-control text-left" placeholder="رمز عبور جدید" required data-validation-required-message="وارد کردن رمز عبور الزامی است" minlength="6" data-validation-minlength-message="حداقل 6 کاراکتر وارد کنید" dir="ltr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>تکرار رمز عبور جدید</label>
                                                            <input type="password" name="con_password" class="form-control text-left" required data-validation-match-match="password" placeholder="رمز عبور جدید" data-validation-required-message="وارد کردن تکرار رمز عبور الزامی است" minlength="6" dir="ltr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="<?= $_SESSION['username'] ?>" name="username">
                                                 <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" name="submit" class="btn btn-primary glow mr-sm-1 mb-1">ذخیره تغییرات</button>
                                                    <button type="reset" class="btn btn-light mb-1">انصراف</button>
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
</section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (@$_GET['status']==1)
{
    echo "<script>";
    echo "Swal.fire('عملیات با موفقیت انجام شد','رمز عبور جدید ثبت شد','success')";
    echo "</script>";
}
if (@$_GET['status']==2)
{
    echo "<script>";
    echo "Swal.fire('عملیات انجام نشد','رمز عبور قدیمی صحیح نیست','error')";
    echo "</script>";
}
if (@$_GET['status']==3)
{
    echo "<script>";
    echo "Swal.fire('عملیات انجام نشد','رمز عبور جدید با تکرار آن یکسان نیست','error')";
    echo "</script>";
}
?>