</div> <!-- content -->
<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <script>
                document.write(new Date().getFullYear())
                </script> Antorcha Puebla
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-md-block">
                    <a href="">Acerca de</a>
                    <a href="">Soporte</a>
                    <a href="">Miguel</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<div class="rightbar-overlay"></div>
<!-- /End-bar -->

<script>
const base_url = "<?= base_url(); ?>";
</script>
<!-- bundle -->
<script src="<?= media(); ?>/js/jquery-3.6.0.min.js"></script>

<script src="<?= media(); ?>/js/vendor.min.js"></script>
<script src="<?= media(); ?>/js/app.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

<script type="text/javascript" src="<?= media(); ?>/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?= media(); ?>/js/functions_admin.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

</body>

</html>