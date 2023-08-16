<?php include "includes/db.php"; ?>

<nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="text-primary fw-bold m-0">Chichidolls</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
        <?php
                $query = "SELECT * FROM navigation_bar LIMIT 4";
                $select_all_navigations_query = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_navigations_query)){
                    $navbar_title = $row['navbar_title'];
                    $navbar_link = $row['navbar_link'];

                    echo "<a href='{$navbar_link}' class='nav-item nav-link active'>{$navbar_title}</a>";
                }
                ?>
        </div>
        <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
            <h1 class="text-primary fw-bold m-0">Chichidolls</h1>
        </a>
        <div class="navbar-nav me-auto py-0">
              <?php
        $query = "SELECT * FROM navigation_bar WHERE navbar_id BETWEEN 5 AND 8 AND navbar_title IN ('Portfolio/Gallery', 'Categories', 'Collections', 'Contact')";
        $select_all_navigations_query = mysqli_query($connection, $query);

        // Debugging code to display query and error
        if (!$select_all_navigations_query) {
            die('Query Error: ' . mysqli_error($connection) . '<br>Query: ' . $query);
        }

        while ($row = mysqli_fetch_assoc($select_all_navigations_query)) {
            $navbar_title = $row['navbar_title'];
            $navbar_link = $row['navbar_link'];

            echo "<a href='{$navbar_link}' class='nav-item nav-link active'>{$navbar_title}</a>";
        }
        ?>

        </div>
    </div>
</nav>
<!-- Navbar End -->