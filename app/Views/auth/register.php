<?php $this->extend('auth/template/index'); ?>

<?php $this->section('content'); ?>
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-6 shadow p-3 mb-5 bg-white rounded">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                            </div>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form class="user" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                                 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"  id="exampleFirstName" name="username" placeholder="<?=lang('Auth.username')?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail " name="email"
                                        placeholder="<?=lang('Auth.email')?>">
                                    <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password"
                                            id="exampleInputPassword" placeholder="<?=lang('Auth.password')?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm"
                                            id="exampleRepeatPassword" placeholder="<?=lang('Auth.repeatPassword')?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button>
                            </form>
                            <hr>
                            <p class="text-center"><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                        </div>
                    </div>
                </div>

<?php $this->endSection(); ?>