<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$papers = array(
    array(
        'title' => "iNZight: A Graphical User Interface for Data Visualisation and Analysis through R",
        'authors' => "Elliott, Wild, Barnett, & Sporle",
        'year' => "2021",
        'journal' => "Journal of Statistical Software",
        'url' => "https://github.com/iNZightVIT/papers/raw/main/2021_jss/index.pdf"
    )
);



?>

<div class="container">

    <h3>Journal Articles</h3>


    <div class="contents_list">

        <ol>
            <?php
            foreach ($papers as $paper) {
                echo "<pre>";
                print_r($paper->url);
                echo "</pre>";
                echo "<li>";
                echo "<a href=\"" . $paper->url . "\">$paper->authors ($paper->year). $paper->title. $paper->journal.</a>";
                echo "</li>";
            }
            ?>
        </ol>
    </div>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
