
@extends('layouts.adminbase')

@section('title', 'edit category')

@section('content')

   container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>edit category touristic {{$data->title}}</h4>
                            </div>
                            <!-- horizontal Basic Forms Start -->
                            <div class="pd-20 card-box mb-30">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h4 class="text-blue h4">horizontal Basic Forms</h4>
                                        <p class="mb-30">All bootstrap element classies</p>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm scroll-click"
                                           rel="content-y" data-toggle="collapse" role="button"><i
                                                class="fa fa-code"></i> Source Code</a>
                                    </div>
                                </div>
                                <form action="/admin category/update/{{$data->title}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>title</label>
                                        <input class="form-control" type="text" placeholder="Johnny Brown">
                                    </div>
                                    <div class="form-group">
                                        <label>keywords</label>
                                        <input class="form-control" value="{{$data->keywords}}" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label>description</label>
                                        <input class="form-control" value="{{$data->description}}" type="url">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> update data </button>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">status</label>
                                            <div class="col-sm-9">
                                                <select class="form-control">
                                                    <option>True</option>
                                                    <option>false</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Disabled input</label>
                                            <input type="text" class="form-control" placeholder="Disabled input"
                                                   disabled="">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="weight-600">Custom Checkbox</label>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck4">
                                                        <label class="custom-control-label" for="customCheck4">Check this
                                                            custom checkbox</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label class="weight-600">Custom Radio</label>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="customRadio1" name="customRadio"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Toggle this
                                                            custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="customRadio2" name="customRadio"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Or toggle
                                                            this
                                                            other custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="customRadio3" name="customRadio"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3">Or toggle
                                                            this
                                                            other custom radio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Disabled select menu</label>
                                            <select class="form-control" disabled="">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>input plaintext</label>
                                            <input type="text" readonly class="form-control-plaintext"
                                                   value="email@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Help text</label>
                                            <input type="text" class="form-control">
                                            <small class="form-text text-muted">
                                                Your password must be 8-20 characters long, contain letters and numbers, and
                                                must not contain spaces, special characters, or emoji.
                                            </small>
                                        </div>
                                        <div class="form-group">
                                            <label>Example file input</label>
                                            <input type="file" class="form-control-file form-control height-auto">
                                        </div>
                                        <div class="form-group">
                                            <label>Custom file input</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                </form>
                                <div class="collapse collapse-box" id="horizontal-basic-form1">
                                    <div class="code-box">
                                        <div class="clearfix">
                                            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
                                               data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i>
                                                Copy Code</a>
                                            <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right"
                                               rel="content-y" data-toggle="collapse" role="button"><i
                                                    class="fa fa-eye-slash"></i> Hide Code</a>
                                        </div>
                                        <pre> <code class="xml copy-pre" id="horizontal-basic">
                                                <form>
        <div class="form-group">
            <label>Text</label>
            <input class="form-control" type="text" placeholder="Johnny Brown">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" value="bootstrap@example.com" type="email">
        </div>
        <div class="form-group">
            <label>URL</label>
            <input class="form-control" value="https://getbootstrap.com" type="url">
        </div>
        <div class="form-group">
            <label>Telephone</label>
            <input class="form-control" value="1-(111)-111-1111" type="tel">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" value="password" type="password">
        </div>
        <div class="form-group">
            <label>Readonly input</label>
            <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
        </div>
        <div class="form-group">
            <label>Disabled input</label>
            <input type="text" class="form-control" placeholder="Disabled input" disabled="">
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label class="weight-600">Custom Checkbox</label>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck1-1">
                        <label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck2-1">
                        <label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck3-1">
                        <label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4-1">
                        <label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label class="weight-600">Custom Radio</label>
                    <div class="custom-control custom-radio mb-5">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
                    </div>
                    <div class="custom-control custom-radio mb-5">
                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
                    </div>
                    <div class="custom-control custom-radio mb-5">
                        <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Disabled select menu</label>
            <select class="form-control" disabled="">
                <option>Disabled select</option>
            </select>
        </div>
        <div class="form-group">
            <label>input plaintext</label>
            <input type="text" readonly class="form-control-plaintext" value="email@example.com">
        </div>
        <div class="form-group">
            <label>Textarea</label>
            <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Help text</label>
                                        <input type="text" class="form-control">
                                        <small class="form-text text-muted">
                                            Your password must be 8-20 characters long, contain letters and numbers, and
                                            must not contain spaces, special characters, or emoji.
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label>Example file input</label>
                                        <input type="file" class="form-control-file form-control height-auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Custom file input</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                    </form>

                                    </code></pre>
                                    </div>
                                </div>
                            </div>
                            <!-- horizontal Basic Forms End -->
                            <!-- Footer -->
                            <footer class="content-footer footer bg-footer-theme">
                                <div
                                    class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                    <div class="mb-2 mb-md-0">
                                        ©
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        , made with ❤️ by
                                        <a href="https://themeselection.com" target="_blank"
                                           class="footer-link fw-bolder">ThemeSelection</a>
                                    </div>
                                    <div>
                                        <a href="https://themeselection.com/license/" class="footer-link me-4"
                                           target="_blank">License</a>
                                        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                            Themes</a>

                                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                           target="_blank" class="footer-link me-4">Documentation</a>

                                        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                           target="_blank" class="footer-link me-4">Support</a>
                                    </div>
                                </div>
                            </footer>
                            <!-- / Footer -->

                            <div class="content-backdrop fade"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->

            <div class="buy-now">
                <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
                   class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
            </div>

            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="../assets/vendor/libs/jquery/jquery.js"></script>
            <script src="../assets/vendor/libs/popper/popper.js"></script>
            <script src="../assets/vendor/js/bootstrap.js"></script>
            <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="../assets/vendor/js/menu.js"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->

            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>

            <!-- Page JS -->

            <script src="../assets/js/form-basic-inputs.js"></script>

            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            </div>

            </html>

