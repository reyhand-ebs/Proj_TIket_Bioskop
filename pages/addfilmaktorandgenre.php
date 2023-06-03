<?php
require_once "authorization_admin.php";
require_once "addfilmprosesaktorgenre.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Film Aktor dan Genre | Admin Bioskop 165</title>
</head>

<body>
    <div class="mt-5 mb-5 px-5">
        <h3 class="mb-5">Tambah Film Aktor dan Genre</h3>
        <form class="mb-5" action="?p=addfilmprosesaktorgenre" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="filmid">ID Film
                            <hr>
                        </label>
                        <?php
                        list($maxFilmID, $maxFilmName) = $objfilm->getMaxFilmID();
                        echo '<input name="filmid" type="text" class="form-control" id="filmid" value="' . $maxFilmID . '"
						readonly>';
                        ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-2">
                        <label for="aktor_film">Aktor
                            <hr>
                        </label>
                        <div class="form-check">
                            <?php
                            $counter = 0;
                            foreach ($aktorList as $aktor) {
                                if ($counter % 4 === 0) {
                                    echo '<div class="row">';
                                }
                                echo '<div class="col-md-3">';
                                echo '<label class="form-check-label" style="display: inline-block; margin-right: 10px;">';
                                echo '<input class="form-check-input" type="checkbox" name="aktorid[]" value="' . $aktor->aktorid . '">';
                                echo $aktor->nama_aktor;
                                echo '</label>';
                                echo '</div>';

                                $counter++;
                                if ($counter % 4 === 0) {
                                    echo '</div>';
                                }
                            }
                            // Menutup baris terakhir jika tidak mencapai 4 checkbox
                            if ($counter % 4 !== 0) {
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-2">
                        <label for="aktor_film">Genre
                            <hr>
                        </label>
                        <div class="form-check">
                            <?php
                            $counter = 0;
                            foreach ($genreList as $genre) {
                                if ($counter % 4 === 0) {
                                    echo '<div class="row">';
                                }
                                echo '<div class="col-md-3">';
                                echo '<label class="form-check-label" style="display: inline-block; margin-right: 10px;">';
                                echo '<input class="form-check-input" type="checkbox" name="genreid[]" value="' . $genre->genreid . '">';
                                echo $genre->nama_genre;
                                echo '</label>';
                                echo '</div>';

                                $counter++;
                                if ($counter % 4 === 0) {
                                    echo '</div>';
                                }
                            }
                            // Menutup baris terakhir jika tidak mencapai 4 checkbox
                            if ($counter % 4 !== 0) {
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="text-right pt-3">
                    <button class="btn btn-lg rounded-pill btn-primary fw-semibold" style="width: 130px;"
                        name="btnTambah" type="submit">Tambah</button>
                </div>
        </form>
    </div>
</body>

</html>