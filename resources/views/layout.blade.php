<!DOCTYPE html>
<html lang="en">
<x-head/>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-sidebar/>

        @yield("main")
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <x-scripts/>
</body>
</html>
