<!DOCTYPE html>
    <head>
        <title>Online shopping for electronics</title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
    </head>
    <body>
        <!-- Main container starts here -->
        <div class="main_wrapper">
            <div class="header_wrapper">
                <div class="header_logo">
                    <a href="index.php"
                        <img id="logo" src="images/voz.jpg" />
                    </a>
                </div> <!-- header_logo -->
                <div>
                    <form method="get" action="result.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" placeholder="Search a product" />
                        <input type="submit" name="search" value="Search" />
                    </form>
                </div>

            </div> <!-- header_wrapper -->

            <div class="content_wrapper">
                This is content
            </div><!-- /.content_wrapper-->
            <div class="footer">
                This is footer
            </div><!-- /.footer-->
        </div>
        <!--End Main container starts here -->
    </body>
</html>